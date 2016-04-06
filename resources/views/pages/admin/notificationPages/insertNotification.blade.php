@extends('pages.admin.adminDashboard.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Register Institute</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" files = "true" enctype = "multipart/form-data" method="POST" action="{{ url('admin/notification-info') }}">

			
						{!! csrf_field() !!}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Notification Type</label>

							<div class="col-md-6">
						
								<select name="notificationCategory" class="form-control selectpicker">
								  <optgroup label="Mother">
								    <option>Sample1</option>
								    <option>Sample2</option>
								    <option>Sample2</option>
								  </optgroup>
								  <optgroup label="Child">
								    <option>Sample1.1</option>
								    <option>Sample2.2</option>
								    <option>Sample2.3</option>
								  </optgroup>
								</select>


								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>


						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Notification Priority</label>

							<div class="col-md-6">
								<select name="notificationPriority" class="form-control selectpicker">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								  
								</select>

								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Notification Message</label>

							<div class="col-md-6">
								<textarea  class="form-control" rows="5" name="notificationMessage" id="notificationMessage" placeholder="Text in Bengali"></textarea>
								
								@if ($errors->has('notificationMessage'))
								<span class="help-block">
									<strong>{{ $errors->first('notificationMessage') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Notification Date</label>

							<div class="col-md-6">
								<input class="form-control" type="text" class="form-control" name="notificationDay" id="notificationDay">
				            </div>
				        </div>

								@if ($errors->has('blood_group'))
								<span class="help-block">
									<strong>{{ $errors->first('blood_group') }}</strong>
								</span>
								@endif
							</div>
						</div>

						

						

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-btn fa-user"></i> Register
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	

@endsection