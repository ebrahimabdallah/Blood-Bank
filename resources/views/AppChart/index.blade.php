@inject('Posts','App\Models\Posts')
@inject('Donation','App\Models\Donation_Request')
@inject('Lab','App\Models\Lab')
@inject('Members','App\Models\Member')
@inject('User','App\Models\User')

@yield('Posts')
@yield('Donation')
@yield('Labs')
@yield('Members')
@yield('User')

@include('layouts.navbar')

<!DOCTYPE html> <html> <head> <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> </head> <body> <center> <div>
@include('AppChart.css')

</head>
 <body>
	 <div class="row mb-2" style="width: 80%">
		 <div class="box">
			 <div class="icon">
				<i class="fas fa-user"></i>
			</div> 
			<div>
				{{$User->count()}} Users</div>
		 </div>

  <div class="box">
	<div class="icon"><i class="fas fa-stethoscope"></i></div>
	<div>{{$Members->count()}} Members</div>
  </div>


  <div class="box">
	<div class="icon"><i class="fas fa-tint"></i></div>
	<div>{{$Donation->count()}} Donation</div>
  </div>


  <div class="box">
	<div class="icon"><i class="fas fa-edit"></i></div>
	<div>{{$Posts->count()}} Posts</div>
  </div>
</div>
<div class="box">
	<div class="icon"><i class="fas fa-flask"></i></div>
	<div>{{$Lab->count()}} Lab</div>
  </div>
  
</div>
<br><br><br>

    <div style="width: 80%" >
<canvas id="myChart" ></canvas>
<script>
    
	// Define the data
	const data = {

        labels: ['O-','AB','B-','A-','A','B','O'],
       
         datasets: [{
            				label: 'Num of Blood_Type',
			data:  [{{$Donation->where('bloode_type', 'O-')->count()}} ,
         {{$Donation->where('bloode_type','AB')->count()}}
        ,{{$Donation->where('bloode_type', 'B-')->count()}}, 
        {{$Donation->where('bloode_type', 'A-')->count()}}, 
        {{$Donation->where('bloode_type', 'A')->count()}}, 
        {{$Donation->where('bloode_type', 'B')->count()}}, 
         {{$Donation->where('bloode_type', 'O')->count()}}],
			backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)'
			],
			borderColor: [
				'rgba(255, 99, 132, 1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)'
			],
			borderWidth: 1
		}]
	};
	
	// Define the chart options
	const options = {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero: true
				}
			}]
		}
	};
	
	// Create the chart
	const ctx = document.getElementById('myChart').getContext('2d');
	const myChart = new Chart(ctx, {
		type: 'bar',
		data: data,
		options: options
	});
</script>
</div>
</center> </body> </html>