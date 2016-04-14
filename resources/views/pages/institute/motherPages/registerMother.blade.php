@extends('layouts.Institute.dashboard.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Register Mother</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" files = "true" enctype = "multipart/form-data" method="POST" action="{{ url('institute/register-mother') }}">

						<div class="form-group required{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="pic1" class="col-md-4 control-label">Image:</label>

							<div class="col-md-6">
								<input type="file" class="form-control" name="pic1" accept="image/*" value="{{ old('name') }}">

								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>
						{!! csrf_field() !!}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">

								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Phone Number</label>

							<div class="col-md-6">
								<input type="text" class="form-control" required name="phone_number" placeholder="">
								@if ($errors->has('phone_number'))
								<span class="help-block">
									<strong>{{ $errors->first('phone_number') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Blood Group</label>

							<div class="col-md-6">
								<input type="text" class="form-control" required name="blood_group" placeholder="">
								@if ($errors->has('blood_group'))
								<span class="help-block">
									<strong>{{ $errors->first('blood_group') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Weight</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
								@if ($errors->has('weight'))
								<span class="help-block">
									<strong>{{ $errors->first('weight') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Address</label>

							<div class="col-md-6">
								<textarea name="address" class="form-control"></textarea>

								<!--Shoikoth Start-->

								<input id="pac-input" class="controls" type="text" placeholder="Search Box" style="margin-top: 15px;width: 100%">
								
								<div id="map" style="margin-top: 15px"></div>
							</div>
							<script>
								      // This example adds a search box to a map, using the Google Place Autocomplete
								      // feature. People can enter geographical searches. The search box will return a
								      // pick list containing a mix of places and predicted search terms.

								      // This example requires the Places library. Include the libraries=places
								      // parameter when you first load the API. For example:
								      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

								      function initAutocomplete() {
								      	var map = new google.maps.Map(document.getElementById('map'), {
								      		center: {lat: 23.801536860617986, lng: 90.40702493593744},
								      		zoom: 13,
								      		mapTypeId: google.maps.MapTypeId.ROADMAP
								      	});

								        // Create the search box and link it to the UI element.
								        var input = document.getElementById('pac-input');
								        var searchBox = new google.maps.places.SearchBox(input);
								        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

								        // Bias the SearchBox results towards current map's viewport.
								        map.addListener('bounds_changed', function() {
								        	searchBox.setBounds(map.getBounds());
								        });

								        var markers = [];
								        // Listen for the event fired when the user selects a prediction and retrieve
								        // more details for that place.
								        searchBox.addListener('places_changed', function() {
								        	var places = searchBox.getPlaces();

								        	if (places.length == 0) {
								        		return;
								        	}

								          // Clear out the old markers.
								          markers.forEach(function(marker) {
								          	marker.setMap(null);
								          });
								          markers = [];

								          // For each place, get the icon, name and location.
								          var bounds = new google.maps.LatLngBounds();
								          places.forEach(function(place) {
								          	var icon = {
								          		url: place.icon,
								          		size: new google.maps.Size(71, 71),
								          		origin: new google.maps.Point(0, 0),
								          		anchor: new google.maps.Point(17, 34),
								          		scaledSize: new google.maps.Size(25, 25)
								          	};

								            // Create a marker for each place.
								            markers.push(new google.maps.Marker({
								            	map: map,
								            	icon: icon,
								            	title: place.name,
								            	draggable: true,
								            	position: place.geometry.location
								            }));

								            document.getElementById('latitude').value = place.geometry.location.lat(); 
								            document.getElementById('longitude').value = place.geometry.location.lng(); 


								            google.maps.event.addListener(markers[0], 'dragend', function (evt) {
								            	document.getElementById('latitude').value = evt.latLng.lat() ;
								            	document.getElementById('longitude').value = evt.latLng.lng();
								            });


								            if (place.geometry.viewport) {
								              // Only geocodes have viewport.
								              bounds.union(place.geometry.viewport);
								          } else {
								          	bounds.extend(place.geometry.location);
								          }
								      });
								          map.fitBounds(bounds);
								      });
								    }

								</script>



								<label class="col-md-4 control-label" style="margin-top: 15px;margin-bottom: 15px">Latitude:</label>  

								<div class="col-md-6" style="margin-top: 15px;margin-bottom: 15px">
									<input type="text" class="form-control" id="latitude" name="latitude" />
								</div>

								<label class="col-md-4 control-label" >Longitude:</label>  
								<br>
								<div class="col-md-6">
									<input type="text" class="form-control" id="longitude" name="longitude" />
								</div>
								<!--shoikoth End-->
							</div>


							
							<div class="form-group">
								<label class="col-md-4 control-label"> District </label>

								<div class="col-md-6">
									<select class="form-control" name="district">
										<option>District 1</option>
										<option>District 2</option>
										<option>District 3</option>
										<option>District 4</option>
										<option>District 5</option>
										<option>District 6</option>
										<option>District 7</option>
										<option>District 8</option>
										<option>District 9</option>
										<option>District 10</option>
									</select>
								</div>
							</div>



							<div class="form-group">
								<label class="col-md-4 control-label">Division</label>

								<div class="col-md-6">
									<select class="form-control" name="division">
										<option>Division 1</option>
										<option>Division 2</option>
										<option>Division 3</option>
										<option>Division 4</option>
										<option>Division 5</option>
										<option>Division 6</option>
										<option>Division 7</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">National ID</label>

								<div class="col-md-6">
									<input type="text" class="form-control" required name="nIdNumber" placeholder="">
									@if ($errors->has('nIdNumber'))
									<span class="help-block">
										<strong>{{ $errors->first('nIdNumber') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Alternate National ID</label>

								<div class="col-md-6">
									<input type="text" class="form-control" required name="alt_nc_id" placeholder="">
									@if ($errors->has('alt_nc_id'))
									<span class="help-block">
										<strong>{{ $errors->first('alt_nc_id') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Alternate N-ID Holders Name</label>

								<div class="col-md-6">
									<input type="text" class="form-control" required name="nc_holders_name">
									@if ($errors->has('nc_holders_name'))
									<span class="help-block">
										<strong>{{ $errors->first('nc_holders_name') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Alternate N-ID Holders Phone</label>

								<div class="col-md-6">
									<input type="text" class="form-control" required name="nc_holders_phone">
									@if ($errors->has('nc_holders_phone'))
									<span class="help-block">
										<strong>{{ $errors->first('nc_holders_phone') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">No. of Children</label>

								<div class="col-md-6">
									<input type="text" class="form-control" required name="no_of_children">
									@if ($errors->has('no_of_children'))
									<span class="help-block">
										<strong>{{ $errors->first('no_of_children') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">No. of days pregnant</label>

								<div class="col-md-6">
									<input type="text" class="form-control" name="days_pregnant" placeholder="Leave blank if the Mother is not Pregnant">
								</div>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label">E-Mail Address</label>

								<div class="col-md-6">
									<input type="email" class="form-control" required name="email" value="{{ old('email') }}">

									@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label">Password</label>

								<div class="col-md-6">
									<input type="password" required class="form-control" name="password">

									@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label">Confirm Password</label>

								<div class="col-md-6">
									<input type="password" class="form-control" required name="password_confirmation">

									@if ($errors->has('password_confirmation'))
									<span class="help-block">
										<strong>{{ $errors->first('password_confirmation') }}</strong>
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