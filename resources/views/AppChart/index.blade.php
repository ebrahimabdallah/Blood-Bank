 @inject('Posts','App\Models\Posts')
@inject('Donation','App\Models\Donation_Request')
@inject('Lab','App\Models\Lab')
@inject('Members','App\Models\Member')
@inject('User','App\Models\User')
@inject('Donors','App\Models\Donor')

@yield('Donor')
@yield('Posts')
@yield('Donation')
@yield('Labs')
@yield('Members')
@yield('User')

@include('layouts.navbar')
@include('AppChart.css')

<!DOCTYPE html> <html> <head> <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> </head> <body> <center> <div>

<head>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-4y4HS1Q2MYIb+6HSMU6zG0fP+g6zYU9XMGyjD7x6+8Tl1dJZgkJcZm7VWfzBmC7Yy9Q2quF7VWg8bNvDkqZ3tQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<body>
		<div class="container" style="width: 66%">
		  <div class="row">
			<div class="col-md-3">
			  <div class="card mb-4">
				<div class="card-body" style="color: crimson">
				  <div class="icon"><i class="fas fa-tint"></i></div>
				  <div>{{$Donors->count()}}  Donors</div>
				</div>
			  </div>
			</div>
	  
	
			<div class="col-md-3">
			  <div class="card mb-4">
				<div class="card-body" style="color: crimson">
				  <div class="icon"><i class="fas fa-user"></i></div>
				  <div>{{$User->count()}} Users</div>
				</div>
			  </div>
			</div>
	  
		
			<div class="col-md-3">
			  <div class="card mb-4">
				<div class="card-body" style="color: crimson">
				  <div class="icon"><i class="fas fa-stethoscope"></i></div>
				  <div>{{$Members->count()}} Members</div>
				</div>
			  </div>
			</div>
	  
	
	
			<div class="col-md-3">
			  <div class="card mb-4">
				<div class="card-body" style="color: crimson">
				  <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
				  
	 
	<?php
	  $donorCount = DB::table('Donors')->sum('BloodType');
	  $donationCount = DB::table('donation_request')->sum('bages_num'); 
	  $need = $donorCount - $donationCount;
	?>	
	  {{$need}} 
		<?php
		   if($need < 0) {
				  echo "  Need";
				} else if($need > 0) { 
				  echo "  avaliable";
				} else if($need == 0) { 
				  echo " DisActive";
				}
	?>			 
				</div>
			  </div>
			</div>
	  
			<div class="col-md-3">
			  <div class="card mb-4">
				<div class="card-body" style="color: crimson">
				  <div class="icon"><i class="fas fa-tint"></i></div>
				  <div>{{$Donation->count()}} Donation</div>
	
				</div>
			  </div>
			</div>
			<div class="col-md-3">
			  <div class="card mb-4">
				<div class="card-body" style="color: crimson">
				  <div class="icon"><i class="fas fa-flask"></i></div>
				  <div>{{$Lab->count()}} Lab</div>
				</div>
			  </div>
			</div>
	  
			<div class="col-md-3">
			  <div class="card mb-4">
				<div class="card-body" style="color: crimson">
				  <div class="icon"><i class="fas fa-edit"></i></div>
				  <div>{{$Posts->count()}} Posts</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  <br><br><br>
	
	
	  
{{-- governartor --}}

<table class="table table-bordered" style="width: 60%">
	<thead>
	  <tr class="table-success table-striped">
		<th> Governorate </th>
		<th> Donors</th>
		<th> Requests</th>
		<th> Labs </th>

	</tr>
	</thead>
	<tbody>
	  <tr>
		<td> Qena </td>
		
			
		   <td>{{$Donors->where('address', 'cario')->count()}}</td>
			<td>{{ $Donation->where('address', 'Qena')->count()}}</td>
			<td>{{ $Lab->where('address', 'Qena')->count()}}</td>
		
	  </tr>
	  <tr>
		<td> cario </td>
		<td>{{$Donors->where('address', 'cario')->count()}}</td>
		<td>{{ $Donation->where('address', 'cairo')->count()}}</td>
		<td>{{ $Lab->where('address', 'cario')->count()}}</td>

	  </tr>
<tr>
<td> Dakahlia </td>
<td>{{$Donors->where('address', 'Dakahlia')->count()}}</td>
<td>{{ $Donation->where('address', 'Dakahlia')->count()}}</td>
<td>{{ $Lab->where('address', 'Dakahlia')->count()}}</td>
</tr>

<tr>
<td> North Red Sea </td>


<td>{{ $Lab->where('address', 'North Red Sea')->count()}}</td>
<td>{{ $Donation->where('address', 'North Red Sea')->count()}}</td>
<td>{{ $Lab->where('address', 'North Red Sea')->count()}}</td>

</tr>

	  <tr>
		<td> Matrouh </td>
		<td>{{$Donors->where('address', 'Matrouh ')->count()}}</td>
		<td>{{ $Donation->where('address', 'Matrouh')->count()}}</td>
		<td>{{ $Lab->where('address', 'Matrouh')->count()}}</td>
	
	  </tr>
	  <tr>
		<td> Luxor </td>
		<td>{{$Donors->where('address', 'Luxor')->count()}}</td>
		<td>{{ $Donation->where('address', 'Luxor')->count()}}</td>
		<td>{{ $Lab->where('address', 'Luxor')->count()}}</td>
	
	  </tr>
	  <tr>
		<td> Assuit	</td>
		<td>{{$Donors->where('address', 'Assuit')->count()}}</td>
		<td>{{ $Donation->where('address', 'Assuit')->count()}}</td>
		<td>{{ $Lab->where('address', 'Assuit')->count()}}</td>

	  </tr>
	  <tr>
		<td> Sohag </td>
		<td>{{$Donors->where('address', 'Sohag')->count()}}</td>
		<td>{{ $Donation->where('address', 'Sohag')->count()}}</td>
		<td>{{ $Lab->where('address', 'Sohag')->count()}}</td>
	
	  </tr>
	  <tr>
		<td> Ismailia </td>
		<td>{{$Donors->where('address', 'Ismailia')->count()}}</td>
		<td>{{ $Donation->where('address', 'Ismailia')->count()}}</td>
		<td>{{ $Lab->where('address', 'Ismailia')->count()}}</td>
	  </tr>
	  <tr>
		<td> Damietta </td>
		<td>{{$Donors->where('address', 'Damietta ')->count()}}</td>
		<td>{{ $Donation->where('address', ' Damietta')->count()}}</td>
		<td>{{ $Lab->where('address', ' Damietta')->count()}}</td>
	  </tr>
	  <tr>
		<td> Kafr El Sheikh </td>
		<td>{{$Donors->where('address', 'Kafr El Sheikh')->count()}}</td>
		<td>{{ $Donation->where('address', 'Kafr El Sheikh')->count()}}</td>
		<td>{{ $Lab->where('address', 'Kafr El Sheikh')->count()}}</td>
	  </tr>
	  <tr>
		<td> Beni Suef </td>
		<td>{{$Donors->where('address', 'Beni Suef')->count()}}</td>
		<td>{{ $Donation->where('address', 'Beni Suef')->count()}}</td>
		<td>{{ $Lab->where('address', 'Beni Suef')->count()}}</td>
	  </tr>
	  <tr>
		<td> Minya </td>
		<td>{{$Donors->where('address', 'Minya ')->count()}}</td>
		<td>{{ $Donation->where('address', 'Minya')->count()}}</td>
		<td>{{ $Lab->where('address', 'Minya')->count()}}</td>
	  </tr>
	</tbody>
  </table>

{{-- governartor end --}}









	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi4+Nsz" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <div style="width: 60%" >
<canvas id="myChart" ></canvas>
<script>
    
	// Define the data
	const data = {

        labels: ['O-','AB','B-','A-','A','B','O','AB-'],
       
         datasets: [{
            				label: 'Avaliable Of Blood Type',
			data:  [
				
			{{$Donors->where('BloodType', 'O-')->count()}} ,
         {{$Donors->where('BloodType','AB')->count()}},
        {{$Donors->where('BloodType', 'B-')->count()}}, 
        {{$Donors->where('BloodType', 'A-')->count()}}, 
        {{$Donors->where('BloodType', 'A')->count()}}, 
        {{$Donors->where('BloodType', 'B')->count()}},
		{{$Donors->where('BloodType', 'O')->count()}},

		{{$Donors->where('BloodType', 'AB-')->count()}},

	    ],

			backgroundColor: [
				'rgba(255, 99, 132, 1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(13, 109, 55, 1)'
			],
			borderColor: [
				'rgba(255, 99, 132, 1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(13, 109, 55, 1)'
			],
			borderWidth: 5
			
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
<br><br><br>
  
</center> </body> </html>   




