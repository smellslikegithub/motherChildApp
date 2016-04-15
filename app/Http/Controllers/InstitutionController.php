<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use PDF;

use App\Log;
use App\User;
use App\Child;
use App\Mother;
use App\Disease;
use App\Notification;
use App\MotherDisease;

use Carbon\Carbon;


class InstitutionController extends Controller
{
    public function upload(Request $request,$filedName){
        $destinationPath='motherPictures/';

        if ($request->hasFile($filedName)) {
            $extention=$request->file($filedName)->getClientOriginalExtension();

            $name=time().'_'.$filedName.'.'.$extention;
            $request->file($filedName)->move($destinationPath, $name);
            return $name;            
        }
        return 'Null';
    }

    public function getMothersInfo(){
        $afterJoin = DB::table('mothers')  
        ->join('users', 'users.foreignId', '=', 'mothers.id')
        ->select('users.*', 'mothers.*')
        ->get();
        $getContent = $afterJoin;

        return view('pages.institute.motherPages.showMotherInfo', compact('getContent'));
    }



    public function getRegisterMother(){
        return view('pages.institute.motherPages.registerMother');
    }

    public function postRegisterMother(Request $request){

        $newMother = $request->all();

        $motherImage = $this->upload($request,'pic1');

        $forId = User::selectRaw('foreignId')->orderBy('foreignId','desc')->get()->first();

        if(!$forId->foreignId){
            $forId->foreignId = 1;
            $newMother['foreignId'] = $forId->foreignId;
        }
        else if($forId->foreignId == 0){
            $forId->foreignId = 1;
            $newMother['foreignId'] = $forId->foreignId;
        }
        else{
            $newMother['foreignId'] = $forId->foreignId + 1;
        }

//Input into database

        Mother::create([
            'id' => $newMother['foreignId'],
            'latitude'=>$newMother['latitude'],
            'longitude'=> $newMother['longitude'],
            'address' => $newMother['address'],
            'district' => $newMother['district'],
            'division' => $newMother['division'],
            'nIdNumber' => $newMother['nIdNumber'],
            'alt_nc_id' => $newMother['alt_nc_id'],
            'nc_holders_name' => $newMother['nc_holders_name'],
            'nc_holders_phone' => $newMother['nc_holders_phone'],
            'no_of_children' => $newMother['no_of_children'],
            'days_pregnant' => $newMother['days_pregnant'],
            'blood_group' => $newMother['blood_group'],
            'weight' => $newMother['weight'],
            'picture' => $motherImage
            ]);

        User::create([
            'name' => $newMother['name'],
            'email' => $newMother['email'],
            'phone_number' => $newMother['phone_number'],
            'password' => bcrypt($newMother['password']),

            'role' => 3,
            'registered_by' => \Auth::user()->name,
            'foreignId' => $newMother['foreignId']
            ]);

        $newMother['registered_by'] = \Auth::user()->name;

        $diseases = Disease::where('affected_by', 'mother')->get();

        return view('pages.institute.motherPages.registerChild',[
            'mother' => $newMother,
            'diseases' => $diseases
            ]);
    }

    public function postAddDisease(Request $request){
        $disease = $request->all();
        print_r($disease);

//INPUT MOTHER'S DISEASE
/*
        MotherDisease::create([
            'mother_id' => $disease['mother_id'],
            'disease_id' => $disease['disease'],
            'date_diagnosed' => $disease['date_diagnosed'],
            'situation' => $disease['situation']
            ]);
*/
        return "Added Disease";
    }

    public function postAddChild(Request $request){        
        $child = $request->all();

        $id = Child::selectRaw('id')->orderBy('id','desc')->get()->first();

        if(!$id){
            $child['id'] = 1;
        }
        else if($id->id == 0){
            $child['id'] = 1;
        }
        else{
            $child['id'] = $id->id + 1;
        }

        print_r($child);
//INPUT CHILD

        Child::create([
            'id' =>$child['id'],
            'mothers_id' =>$child['mothers_id'],
            'name' =>$child['name'],
            'dob' =>$child['dob'],
            'weight' =>$child['weight'],
            'birthCertNo' =>$child['birthCertNo'],
            'blood_group' =>$child['blood_group']
            ]);

        return "Added Child";

    }

    public function getEndRegistration($id){
        $mother = Mother::where('id', $id)->get()->last();
        $user = User::where('foreignId', $id)->get()->last();
        $children = Child::where('mothers_id', $id)->get();

        if($mother->days_pregnant){

            $mothersNotifications = Notification::where('category', 'mother')->where('notif_day', '>=', $mother->days_pregnant)->get();

            foreach($mothersNotifications as $notification){

                $date = Carbon::today();
                $days = $notification->notif_day - $mother->days_pregnant;
                $date = $date->addDays($days);

                $date = $date->toDateString();
/*
                Log::create([
                    'mother_id' => $mother->id,
                    'notif_id' => $notification->id,
                    'notif_msg' => $notification->notif_msg,
                    'notif_category' => $notification->category,
                    'notif_priority' => $notification->priority,
                    'send_date' => $date,
                    'phone_number' => $user->phone_number,
                    ]);
*/
            }
        }


        foreach ($children as $child) {
            $dob = Carbon::parse($child->dob);
            $today = Carbon::today();
            $days = $today->diffInDays($dob);

            $date = $today->addDays($days);
            $date = $date->toDateString();

            $childsNotifications = Notification::where('category', 'child')->where('notif_day', '>=', $days)->get();

            foreach ($childsNotifications as $notification) {

/*
                Log::create([
                    'mother_id' => $mother->id,
                    'child_id' => $child->id,
                    'notif_id' => $notification->id,
                    'notif_msg' => $notification->notif_msg,
                    'notif_category' => $notification->category,
                    'notif_priority' => $notification->priority,
                    'send_date' => $date,
                    'phone_number' => $user->phone_number,
                    ]);
*/
            }
        }


        $pdf = PDF::loadView('pages.institute.motherPages.motherReport');/*,[
            'patient' => $patient,
            'prescription' => $prescription,
            'visitors' => $visitors
            ]);*/
        return $pdf->stream('Mother_Report.pdf');
    }

    public function getSpecificMotherInfo($motherId){

            $fromMotherTable = Mother::where('id', $motherId)->get();
            $fromUserTable = User::where('foreignid',$motherId)->get();

            
        
        return view('pages.institute.motherPages.viewEditMotherInfo', compact('fromMotherTable' , 'fromUserTable'));
    }
}