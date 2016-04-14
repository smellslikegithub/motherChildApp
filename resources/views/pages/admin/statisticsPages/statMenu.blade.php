	@extends('pages.admin.adminDashboard.dashboard')

	<style type="text/css">
		#trellis{
			width: 100%;
		}
		#trellis td {
			width: 100%;
			height: 300px;
		}
		#trellis td.first {
			width: 100%;
		}

		#childRate{
			width: 100%;
		}
		#childRate td {
			width: 100%;
			height: 300px;
		}
		#childRate td.first {
			width: 100%;
		}

		#Chart{
			width: 100px;
		}
	</style>




	<script src="{{asset('js/highcharts.js')}}"></script> 
	

	@section('content')
	<div class="col-md-12">
		<div class="col-md-6">
			<table id="trellis">
				<tr>
					<td class="first"></td>
				</tr>
			</table>
		</div>

		<div class="col-md-6">
			<table id="childRate">
				<tr>
					<td class="first"></td>
				</tr>
			</table>
		</div>

		<div id="container1" style="width: 550px; height: 400px; margin: 0 auto"></div>

		<!-- Shoikoth Cluster -->

  
	<script src="http://www.barichai.com/all/hackathon/markerclusterer.js"></script>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 50%;
		width:80%;
      }
    </style>
    <div id="map"></div>
    <script>
      // This example adds a user-editable rectangle to the map.	  
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.80279334556692 , lng: 90.41251809999994},
          zoom: 9
        });

		markers =[];
		mcluster =[];
		for(i=0;i<1000;i++)
		{
		  var x = 23.80279334556692+Math.random()*Math.pow(-1, Math.floor((Math.random() * 10) + 1));
		  var y = 90.41251809999994+Math.random()*Math.pow(-1, Math.floor((Math.random() * 10) + 1));
		  myCenter=new google.maps.LatLng(x,y);
		  var marker=new google.maps.Marker({
				position:myCenter,
			});
		  //marker.setMap(map);
		  mcluster.push(marker);
		  var temp={x,y};
		  markers.push(temp);
		}
		var markerCluster = new MarkerClusterer(map, mcluster);
		
        var bounds = {
          north: 23.902,
          south: 23.802,
          east: 90.562,
          west: 90.412
        };

        // Define a rectangle and set its editable property to true.
        var rectangle = new google.maps.Rectangle({
          bounds: bounds,
		  draggable: true,
          editable: true
        });
        rectangle.setMap(map);
		// Add an event listener on the rectangle.
        rectangle.addListener('bounds_changed', showNewRect);
		function showNewRect(event) {
		  var ne = rectangle.getBounds().getNorthEast();
		  var sw = rectangle.getBounds().getSouthWest();
/*
		  var contentString = '<b>Rectangle moved.</b><br>' +
			  'New north-east corner: ' + ne.lat() + ', ' + ne.lng() + '<br>' +
			  'New south-west corner: ' + sw.lat() + ', ' + sw.lng();
*/			
			var x1=ne.lat();
			var y1=ne.lng();
			var x2=sw.lat();
			var y2=sw.lng();
			if(x1>x2)
			{
				t=x1; x1=x2;x2=t;
			
			}
			if(y1>y2)
			{
				t=y1;y1=y2;y2=t;
			
			}
			var answer=0;  
			for(i=0;i<1000;i++)
			{
				var tx=markers[i].x;
				var ty=markers[i].y;
				
				if(x1<=tx && tx<=x2 && y1<=ty && ty<=y2)answer++;
			}
			

			document.getElementById('totalnumber').value =answer;
		}

      
	 }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?callback=initMap">
    </script>
	
	Total numbers of Pregnant women in this area:<br>
	<input style="width: 400px; height: 30px; font-size: 17px; margin-top: 20px;" id="totalnumber" value="0"  type="text">
	<br/>Total numbers of Child in this area:<br>
	<input style="width: 400px; height: 30px; font-size: 17px; margin-top: 20px;" id="totalChild" value="0"  type="text">
	<br>Total numbers of Boys in this area(>5):<br>
	<input style="width: 400px; height: 30px; font-size: 17px; margin-top: 20px;" id="totalboy" value="0" type="text">


		<!-- Shoikoth cluster end here-->

	
	</div>
	


	<script type="text/javascript">
		var charts = [],
		$containers = $('#trellis td'),
		datasets = [{
			name: 'Pregnant Mothers in Division',
			data: [1400, 2000, 1200, 1500, 1600, 1000, 1300, 900]
		},
		];


		$.each(datasets, function(i, dataset) {
			charts.push(new Highcharts.Chart({

				chart: {
					renderTo: $containers[i],
					type: 'bar',
					marginLeft: i === 0 ? 100 : 100
				},

				title: {
					text: dataset.name,
					align: 'left',
					x: i === 0 ? 90 : 0
				},

				credits: {
					enabled: false
				},

				xAxis: {
					categories: ['Dhaka', 'Chittagong', 'Barishal', 'Khulna', 'Mymensingh', 'Rajshahi', 'Rangpur', 'Syhlet'],
					labels: {
						enabled: i === 0
					}
				},

				yAxis: {
					allowDecimals: false,
					title: {
						text: null
					},
					min: 0,
					max: 2500
				},


				legend: {
					enabled: false
				},

				series: [dataset]

			}));
		});var charts = [],
		$containers = $('#trellis td'),
		datasets = [{
			name: 'Pregnant Mothers in Division',
			data: [1400, 2000, 1200, 1500, 1600, 1000, 1300, 900]
		},
		];


		$.each(datasets, function(i, dataset) {
			charts.push(new Highcharts.Chart({

				chart: {
					renderTo: $containers[i],
					type: 'bar',
					marginLeft: i === 0 ? 100 : 100
				},

				title: {
					text: dataset.name,
					align: 'left',
					x: i === 0 ? 90 : 0
				},

				credits: {
					enabled: false
				},

				xAxis: {
					categories: ['Dhaka', 'Chittagong', 'Barishal', 'Khulna', 'Mymensingh', 'Rajshahi', 'Rangpur', 'Syhlet'],
					labels: {
						enabled: i === 0
					}
				},

				yAxis: {
					allowDecimals: false,
					title: {
						text: null
					},
					min: 0,
					max: 2500
				},


				legend: {
					enabled: false
				},

				series: [dataset]

			}));
		});


		var charts = [],
		$containers = $('#childRate td'),
		datasets = [{
			name: 'Monthly child Birth',
			data: [1400, 2000, 1200, 1500, 1600, 1000, 1300, 900, 1400, 2000, 1200, 1500]
		},
		];


		$.each(datasets, function(i, dataset) {
			charts.push(new Highcharts.Chart({

				chart: {
					renderTo: $containers[i],
					type: 'column',
					marginLeft: i === 0 ? 100 : 100
				},

				title: {
					text: dataset.name,
					align: 'left',
					x: i === 0 ? 90 : 0
				},

				credits: {
					enabled: false
				},

				xAxis: {
					categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					labels: {
						enabled: i === 0
					}
				},

				yAxis: {
					allowDecimals: false,
					title: {
						text: null
					},
					min: 0,
					max: 2500
				},


				legend: {
					enabled: false
				},

				series: [dataset]

			}));
		});


		var charts = [],
		$containers = $('#childRate td'),
		datasets = [{
			name: 'Monthly child Birth',
			data: [1400, 2000, 1200, 1500, 1600, 1000, 1300, 900, 1400, 2000, 1200, 1500]
		},
		];


		$.each(datasets, function(i, dataset) {
			charts.push(new Highcharts.Chart({

				chart: {
					renderTo: $containers[i],
					type: 'column',
					marginLeft: i === 0 ? 100 : 100
				},

				title: {
					text: dataset.name,
					align: 'left',
					x: i === 0 ? 90 : 0
				},

				credits: {
					enabled: false
				},

				xAxis: {
					categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					labels: {
						enabled: i === 0
					}
				},

				yAxis: {
					allowDecimals: false,
					title: {
						text: null
					},
					min: 0,
					max: 2500
				},


				legend: {
					enabled: false
				},

				series: [dataset]

			}));
		});	

		$(function () {
    var chart;

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text:'Time-Off Request'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                percentageDecimals: 2

            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true

                }
            },
            series: [{
                type: 'pie',
                name: 'Time-Off Request Details',
                data: [
                    ['Vacation', 45.0],
                    ['Time-Off', 26.8],
                    ['Sick Time',12.8],
                    ['Personal', 8.5],
                    ['Bereavement', 6.2],
                    ['Others', 0.7]
                ]
            }]
        });
    });

});


$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'Browser market shares at a specific website, 2014'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: false           
         },
         showInLegend: true
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: [
         ['Firefox',   45.0],
         ['IE',       26.8],
         {
            name: 'Chrome',
            y: 12.8,
            sliced: true,
            selected: true
         },
         ['Safari',    8.5],
         ['Opera',     6.2],
         ['Others',   0.7]
      ]
   }];     


var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container').highcharts(json);  
});


	
	</script>


	@endsection