@extends('layouts.Institute.dashboard.dashboard')
@section('content')

<div class="row">
	<div class="col-md-8">
		<div class="box box-info">
	                <div class="box-header with-border">
	                  <h3 class="box-title">Mothers Information</h3>
	                </div><!-- /.box-header -->
	                <!-- form start -->
	               <form class="form-horizontal" role="form" files = "true" enctype = "multipart/form-data" method="POST"  action="{{ url('institute/register-mother') }}">
	                  <div class="box-body">

		                <div class="panel-body">
		                	<!--class="table table-striped table-bordered" *** Used for previous unresponsive-->
		                  <table id="example" class="table table-striped table-bordered display responsive nowrap" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					             
					                <th>Id</th>
					                <th>Number</th>
					                <th>Name</th>
					                <th></th>
					                <th></th>
					                <th></th>
					                
					                					                
					            </tr>
					        </thead>
					        
			                 <tbody>
								<?php $i=1?>
								<?php $counter=0?>
								@foreach($getContent as $data)

									<tr>
										<td>{{$i}}</td>
				                        <td>{{$data->nIdNumber}}</td>
				                        <td>{{$data->name}}</td>

				                        
				                        <td>

				                        	 <a href="{{url('services/deleteService',$data->id)}}" data-confirm="Arey you sure to delete the data?" class=" delete btn btn-block btn-primary btn-danger"><span class="glyphicon glyphicon-remove"></span> Delete</a>

				                        </td>
				                        <td>
				                        	
				                        	<a href="{{url('institute/specific-mother-info',$data->id)}}" class="btn btn-block btn-primary btn-primary"><span class="	glyphicon glyphicon-pencil"></span> View/Edit</a>
				                        </td>

				                        <td>
				                        	
				                        	
				                        </td>
				                    </tr>
				                    <?php $i++?> <?php $counter++ ?>
				                @endforeach
			                 		              
			                 </tbody>
			                   
		                  	</table>
                               
               			 </div>
	                   
	                    

	                    <!-- end of input material-->



						
	                  </div><!-- /.box-body -->
	                  <div class="box-footer">
	                 
	                   
	                  </div><!-- /.box-footer -->
	              </form>
	              </div><!-- /.box --> 

	              
	</div>
</div>

 <!-- data table Scripts responsive, the below scripts cause problms when copied to dashboard--> 

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"> </script>

<script type="text/javascript">
    // Please see before do any change http://stackoverflow.com/questions/25377637/datatables-cannot-read-property-mdata-of-undefined  
    $(document).ready(function() {
    	//alert("Hello");
    
     //$('#u').select2();
    $('#example').DataTable();
} );
</script>

@endsection