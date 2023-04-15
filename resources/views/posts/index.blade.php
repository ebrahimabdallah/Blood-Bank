@inject('Donation','App\Models\Donation_Request')
@inject('Posts','App\Models\Posts')
@yield('Posts')
@include('layouts.navbar')
@include('AppChart.css')

<center>
    <div style="width: 60%">
        <h4 style="color: firebrick">in my website we have a types of a blood type <br> available blood are this ..</h4>
    </div>
    <body> 
        <div class="row mb-2" style="width: 70%"> 

  <div class="box" class="icon">
	<div> <i class="fas fa-tint"></i></div>

	<div> {{$Donation->where('bloode_type', 'A')->count()}}  A</div>
  </div> 
   
        

  <div class="box" class="icon">
	<div> <i class="fas fa-tint"></i></div>
	<div> {{$Donation->where('bloode_type', 'AB')->count()}}  AB</div>
  </div>

<div class="box" class="icon">
	<div ><i class="fas fa-tint"></i></div>
	<div> {{$Donation->where('bloode_type', 'B')->count()}}  B</div>
  </div>
  <div class="box" class="icon">
	<div><i class="fas fa-tint"></i></div>
	<div> {{$Donation->where('bloode_type', 'O')->count()}}  O+</div>
  </div>  

  <div class="box" class="icon">
	<div ><i class="fas fa-tint"></i></div>
	<div> {{$Donation->where('bloode_type', 'O-')->count()}}  O-</div>
  </div>

<div class="box" class="icon">
	<div ><i class="fas fa-tint"></i></div>
	<div> {{$Donation->where('bloode_type', 'AB-')->count()}}  AB-</div>
  </div>
    <br>
<br><br><br>
        <hr>
        </div>
</center>
<center>
    @include('posts.css')
    @foreach($Post as $Posts)

    <div class="post" style="width: 85%">
        <img src="{{ $Posts->image }}" alt="{{ $Posts->name }}" class="img-fluid rounded-circle mb-3" width="128" height="128">
        <div class="phone"> {{ $Posts->title }}</div>
        <div class="address"> {{ $Posts->content }}</div>
        <div class="experiences">Puplish at : {{ $Posts->created }}</div>

   
     
   
    </div>
    @endforeach
</div>    

    </div>
</center>