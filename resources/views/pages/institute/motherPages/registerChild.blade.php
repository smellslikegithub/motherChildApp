@extends('layouts.Institute.dashboard.dashboard')
@section('content')

<div class="container-fluid">
	<div class="row">		
		<h3>Register Mother, Part-2</h3>
		<div class="col-md-12">
			<div class="col-md-4" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px; text-align:left">Mother's Name</span>
					<label class="form-control" style="height:auto">
						{!! $mother['name'] !!}
					</label>
				</div>
			</div>
			<div class="col-md-4" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px;text-align:left">Mother's N-ID</span>
					<label class="form-control" style="height:auto">
						{!! $mother['nIdNumber'] !!}
					</label>
				</div>
			</div>
			<div class="col-md-4" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px;text-align:left">Phone Number</span>
					<label class="form-control" style="height:auto">
						{!! $mother['phone_number'] !!}
					</label>
				</div>
			</div>

			<div class="col-md-2" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px;text-align:left">Number of Children</span>
					<label class="form-control" style="height:auto">
						{!! $mother['no_of_children'] !!}
					</label>
				</div>
			</div>
			<div class="col-md-2" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px;text-align:left">Blood Group</span>
					<label class="form-control" style="height:auto">
						{!! $mother['blood_group'] !!}
					</label>
				</div>
			</div>
			<div class="col-md-8" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px;text-align:left">Registered By</span>
					<label class="form-control" style="height:auto">
						{!! $mother['registered_by'] !!}
					</label>
				</div>
			</div>

			<div class="col-md-4" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px;text-align:left">Guardian's Name</span>
					<label class="form-control" style="height:auto">
						{!! $mother['nc_holders_name'] !!}
					</label>
				</div>
			</div>
			<div class="col-md-4" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px;text-align:left">Guardian's N-ID</span>
					<label class="form-control" style="height:auto">
						{!! $mother['alt_nc_id'] !!}
					</label>
				</div>
			</div>
			<div class="col-md-4" style="margin-top: 10px">
				<div class="input-group input-group-sm">
					<span class="input-group-addon" style="min-width:40px;text-align:left">Guardian's Phone</span>
					<label class="form-control" style="height:auto">
						{!! $mother['nc_holders_phone'] !!}
					</label>
				</div>
			</div>
		</div>

		<div class="col-md-12 col-md-offset-1" style="margin-top: 8px;margin-bottom: 8px">
			<h4><strong>Data cannot be edited here, only input. Please, confirm data before clicking <span style="color: blue"> Add</span></strong></h4>
		</div>

		<div style="margin-top:10px" class="col-md-12">
			<div id="navigation">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#mothersDiseases">Mother's Diseases</a>
					</li>
					<li>
						<a data-toggle="tab" href="#Children">Childrens' Information</a>
					</li>
				</ul>
			</div>

			<div class="tab-content">
				
				<!--Mother's Diseases-->
				<div id="mothersDiseases" class="tab-pane fade in active">
					<form id="motherDiseaseForm" method="post" action="/institute/add-disease">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="mother_id" value="{{ $mother['foreignId'] }}">

						<div class="col-sm-12">
							<div class="col-sm-4">
								<div class="input-group input-group-sm" style="margin-top:10px">
									<span class="input-group-addon" style="min-width:20px;text-align:left">Disease</span>
									<select name="disease" id="disease" class="form-control">
										<option value="1">test</option>

										@foreach($diseases as $disease)
										<option value="{!! $disease->id !!}">{!! $disease->name !!}</option>
										@endforeach

									</select>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="input-group input-group-sm" style="margin-top:10px">
									<span class="input-group-addon" style="min-width:20px;text-align:left">Situation</span>
									<select name="situation" id="situation" class="form-control">
										<option>test</option>
									</select>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="input-group input-group-sm" style="margin-top:10px">
									<span class="input-group-addon" style="min-width:20px;text-align:left">Date Diagnosed</span>
									<input class="form-control" type="text" class="form-control" name="date_diagnosed" id="date_diagnosed">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="btn-group" style="margin-top:10px; float:right;">
									<!-- <a class="btn btn-primary" id="addDisease" href=""><i class="fa fa-btn fa-plus"></i> Add </a> -->
									<button type="button" class="btn btn-primary" id="addDisease">
										<i class="fa fa-btn fa-plus"></i> Add
									</button>
								</div>
							</div>
						</div>
					</form>

					<div class="col-sm-12" style="margin-top:10px">
						<table class="table table-bordered" id="diseaseTable">
							<tr>									
								<th>Disease</th>
								<th>Situation</th>
								<th>Date Diagnosed</th>
							</tr>
						</table>
					</div>
				</div>

				<!--Children Info-->
				<div id="Children" class="tab-pane fade">
					<div class="col-sm-12">
						<form  id="childForm" method="post" action="/institute/add-child">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="mothers_id" id="mothers_id" value="{!! $mother['foreignId'] !!}">
							<div class="col-sm-6" style="margin-top:10px">
								<div class="input-group input-group-sm">
									<span class="input-group-addon" style="min-width:40px;text-align:left">Name</span>
									<input type="text" name="name" id="name" class="form-control" style="height:auto">
								</div>
							</div>
							<div class="col-sm-6" style="margin-top:10px">
								<div class="input-group input-group-sm">
									<span class="input-group-addon" style="min-width:40px;text-align:left">Date of Birth</span>
									<input type="text" name="dob" id="dob" class="form-control" style="height:auto">
								</div>
							</div>
							<div class="col-sm-3" style="margin-top:10px">
								<div class="input-group input-group-sm">
									<span class="input-group-addon" style="min-width:40px;text-align:left">Weight at Birth</span>
									<input type="text" name="weight" id="weight" class="form-control" style="height:auto">
									<span class="input-group-addon" style="background-color: lightgrey">Kg</span>
								</div>
							</div>

							<div class="col-sm-3" style="margin-top:10px">
								<div class="input-group input-group-sm">
									<span class="input-group-addon" style="min-width:40px;text-align:left">Blood Group</span>
									<input type="text" name="blood_group" id="blood_group" class="form-control" style="height:auto">
								</div>
							</div>
							<div class="col-sm-6" style="margin-top:10px">
								<div class="input-group input-group-sm">
									<span class="input-group-addon" style="min-width:40px;text-align:left">Birth Certificate No.</span>
									<input type="text" name="birthCertNo" id="birthCertNo" class="form-control" style="height:auto">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="btn-group" style="margin-top:10px; float:right;">
									<button type="button" class="btn btn-primary" id="addChild">
										<i class="fa fa-btn fa-plus"></i> Add
									</button>
								</div>
							</div>	
						</form>
					</div>

					<div class="col-sm-12" style="margin-top:10px">
						<table class="table table-bordered" id="childTable">
							<tr>
								<th>Name</th>
								<th>Date of Birth</th>
								<th>Weight at Birth</th>
								<th>Blood Group</th>
								<th>Birth Certificate</th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12" style="margin-left:auto; margin-right: auto; margin-top: 20px">
		<h4><strong>Please check if all Information is correct before <span style="color: red">Ending Registration</span></strong></h4>
	</div>

	<div class="form-group">
		<div class="col-md-12 col-md-offset-4">
			<button id="endRegistration" type="button" class="btn btn-primary">
				<i class="fa fa-btn fa-user"></i>End Registration
			</button>
<!-- 
			<a class="btn btn-primary" href="/institute/end-registration/{{ $mother['foreignId'] }}">
				<i class="fa fa-btn fa-user"></i>End Registration
			</a>
			 -->
		</div>
	</div>
</div>

<!--Moving this to the js file collection causes problem. Start-->

<script src="{{asset('js/jquery-1.10.2.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<!--Moving this to the js file collection causes problem. End-->

<script type="text/javascript">
	$("#date_diagnosed").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#dob").datepicker({ dateFormat: 'yy-mm-dd' });

	$("#addDisease").click(function(){
		data = $("#motherDiseaseForm").serialize();

		$.ajax({
			type : "POST",
			url : "/institute/add-disease",
			
			data : data,

			success : function(response){
				$("#diseaseTable").append("<tr>" + "<td>" + $("#disease option:selected").text() + "</td>"+"<td>" + $("#situation").val() + "</td>" + "<td>" + $("#date_diagnosed").val()+"</td>"+ "</tr>");

				alert(response);
			}
		});
	});

	$("#addChild").click(function(){
		data = $("#childForm").serialize();
		
		$.ajax({
			type : "POST",
			url : "/institute/add-child",
			
			data : data,

			success : function(response){
				$("#childTable").append("<tr>" + "</td>"+"<td>" + $("#name").val() + "</td>" + "</td>" +"<td>" + $("#dob").val() + "</td>"+"<td>" + $("#weight").val() + "</td>" + $("#blood_group").val() + "</td>" + "<td>" + $("#birthCertNo").val() + "</td>" + "</tr>");

				alert(response);
			}
		});
	});

	$("#endRegistration").click(function(){
		url = "/institute/register-mother";
		var win = window.open(url,'_self');

		url = "/institute/end-registration/{{ $mother['foreignId'] }}";
		var win = window.open(url, '_blank');
		win.focus();
	});
</script>

@endsection