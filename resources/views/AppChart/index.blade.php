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

<!DOCTYPE html> <html> <head> <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> </head> <body> <center> <div>
@include('AppChart.css')

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-4y4HS1Q2MYIb+6HSMU6zG0fP+g6zYU9XMGyjD7x6+8Tl1dJZgkJcZm7VWfzBmC7Yy9Q2quF7VWg8bNvDkqZ3tQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
  
  <body>
	<div class="container" style="width: 80%">
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
			  

{{-- ------------------------------design pattern signalton-----------------------------}}

@php

class AvailableBagsCalculator {
  private static $instance;
  private $availableBags;

  private function __construct() {
    // احتساب عدد الأكياس المتاحة في البداية
	$donorCount = DB::table('Donors')->sum('BloodType');

    $this->availableBags = $donorCount;
  }

  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new AvailableBagsCalculator();
    }

    return self::$instance;
  }

  public function calculateDonationNeeded($donationCount) {
    $need = $this->availableBags - $donationCount;
    return $need;
  }

  public function getAvailableBags() {
    return $this->availableBags;
  }
}

//لحساب عدد الأكياس المتاحة
$calculator = AvailableBagsCalculator::getInstance();
$availableBags = $calculator->getAvailableBags();

// احتساب عدد الأكياس المتبرع بها وحساب الحاجة المتبقية
$donationCount = DB::table('donation_request')->sum('bages_num');
$need = $calculator->calculateDonationNeeded($donationCount);


@endphp

			  <div>{{$need}}<?php 
			 if($need<0)
			 {
				echo " We Need";
			 } 
			 else if($need>0)
			 {
                echo " We avaliable";
			 }
			 else if($need==0)
			 {
				echo " have not avaliable Now";

			 }
			 
			 ?></div>
			</div>
		  </div>
		</div>
  {{-- ---------------------------------end design pattern signalton---------------------------------------------- --}}
  
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
  
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi4+Nsz" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <div style="width: 80%" >
<canvas id="myChart" ></canvas>
<script>
    
	// Define the data
	const data = {

        labels: ['O-','AB','B-','A-','A','B','O','AB-'],
       
         datasets: [{
            				label: 'Num of Blood_Type',
			data:  [
				
			{{$Donors->where('BloodType', 'O-')->count()}} ,
         {{$Donors->where('BloodType','AB')->count()}},
        {{$Donors->where('BloodType', 'B-')->count()}}, 
        {{$Donors->where('BloodType', 'A-')->count()}}, 
        {{$Donors->where('BloodType', 'A')->count()}}, 
        {{$Donors->where('BloodType', 'B')->count()}},
		{{$Donors->where('BloodType', 'AB-')->count()}},
         {{$Donors->where('BloodType', 'O')->count()}},

	    ],

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


 
{{-- ---------------------------design pattern a signalton-----------------
@php

class AvailableBagsCalculator {
  private static $instance;
  private $availableBags;

  private function __construct() {
    // احتساب عدد الأكياس المتاحة في البداية
    $this->availableBags = 100;
  }

  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new AvailableBagsCalculator();
    }

    return self::$instance;
  }

  public function calculateDonationNeeded($donationCount) {
    $need = $this->availableBags - $donationCount;
    return $need;
  }

  public function getAvailableBags() {
    return $this->availableBags;
  }
}

// استخدام الكائن المحسوب لحساب عدد الأكياس المتاحة
$calculator = AvailableBagsCalculator::getInstance();
$availableBags = $calculator->getAvailableBags();

// احتساب عدد الأكياس المتبرع بها وحساب الحاجة المتبقية
$donationCount = DB::table('donation_request')->sum('bages_num');
$need = $calculator->calculateDonationNeeded($donationCount);

// عرض النتيجة في الصفحة
echo "There are " . $availableBags . " available bags, and we need " . $need . " more bags to meet the donation goal.";
@endphp --}}



{{--  

@php

$calculator = DonationCalculator::getInstance();
$need = $calculator->calculateDonationNeeded(DB::table('donation_request')->sum('bages_num'));
echo $need . " available bags";



class DonationCalculator
{
  private static $instance = null;
  private $available = 100;

  private function __construct() {}

  public static function getInstance() {
    if (self::$instance == null) {
      self::$instance = new DonationCalculator();
    }
    return self::$instance;
  }

  public function calculateDonationNeeded($donationCount) {
    $need = $this->available - $donationCount;
	return $need;
  }
}
@endphp --}}



