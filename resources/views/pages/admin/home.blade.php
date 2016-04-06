@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="col-md-12">
                        You are logged in as Administrator.
                    </div>

                    <div class="col-md-12" style="margin-top:15px">
                        <a class="btn btn-primary" href="/admin/new-institute"> Register Institute</a>
                        <a class="btn btn-primary" href="{{URL::to('Admin/Dashboard')}}"> Admin Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
