<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Notification;
use App\User;
use App\Institution;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getNewInstitute(){
    	return view('pages.admin.registerInstitution');
    }

    public function getNotificationPage(){

        return view('pages.admin.notificationPages.insertNotification');
    }

    public function postNotificationInfo(Request $request){

        $getContent = $request->all();

        Notification::create([

            'category' => $getContent['notificationCategory'],
            'priority' => $getContent['notificationPriority'],
            'notif_msg' => $getContent['notificationMessage'],
            'notif_day' => $getContent['notificationDay']
        ]);

        return back()->with('message', 'Details Succesfully Added');


    }

    public function postRegisterInstitute(Request $request){
    	$newInstitute = $request->all();

    	$forId = User::selectRaw('foreignId')->orderBy('foreignId','desc')->get()->first();

    	if(!$forId->foreignId){
    		$forId->foreignId = 1;
    		$newInstitute['foreignId'] = $forId->foreignId;
    	}
    	else if($forId->foreignId == 0){
    		$forId->foreignId = 1;
    		$newInstitute['foreignId'] = $forId->foreignId;
    	}
    	else{
    		$newInstitute['foreignId'] = $forId->foreignId + 1;
    	}

    	Institution::create([
    		'id' => $newInstitute['foreignId'],
    		'trade_license' => $newInstitute['trade_license'],
    		'address' => $newInstitute['address'],
    	]);

    	User::create([
    		'name' => $newInstitute['name'],
            'email' => $newInstitute['email'],
            'phone_number' => $newInstitute['phone_number'],
            'password' => bcrypt($newInstitute['password']),

            'role' => 2,
            'registered_by' => Auth::user()->name,
            'foreignId' => $newInstitute['foreignId']
    	]);    	

    	return redirect('/home');
    }

    public function showAdminPage(){

        
        return view('pages.admin.adminDashboard.dashboard');

    }
}
