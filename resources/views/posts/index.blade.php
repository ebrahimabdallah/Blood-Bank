@inject('Donation','App\Models\Donation_Request')
@inject('Posts','App\Models\Posts')
@yield('Posts')
@include('layouts.navbar')
@include('AppChart.css')

<center>
  <div style="color: darkblue"><p>A BloodType Is Available</p></div>
  <br>
  <div class="container" style="width: 80%">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body" style="color: crimson">
                    <div class="icon"><i class="fas fa-tint"></i></div>
                    <div style="display:flex; justify-content: space-between;">
                        <div>A</div>
                        <div>{{$Donation->where('bloode_type', 'A')->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body" style="color: crimson">
                    <div class="icon"><i class="fas fa-tint"></i></div>
                    <div style="display:flex; justify-content: space-between;">
                        <div>AB</div>
                        <div>{{$Donation->where('bloode_type', 'AB')->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body" style="color: crimson">
                    <div class="icon"><i class="fas fa-tint"></i></div>
                    <div style="display:flex; justify-content: space-between;">
                        <div>B</div>
                        <div>{{$Donation->where('bloode_type', 'B')->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body" style="color: crimson">
                    <div class="icon"><i class="fas fa-tint"></i></div>
                    <div style="display:flex; justify-content: space-between;">
                        <div>O+</div>
                        <div>{{$Donation->where('bloode_type', 'O+')->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body" style="color: crimson">
                    <div class="icon"><i class="fas fa-tint"></i></div>
                    <div style="display:flex; justify-content: space-between;">
                        <div>O-</div>
                        <div>{{$Donation->where('bloode_type', 'O-')->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body" style="color: crimson">
                    <div class="icon"><i class="fas fa-tint"></i></div>
                    <div style="display:flex; justify-content: space-between;">
                        <div>AB-</div>
                        <div>{{$Donation->where('bloode_type', 'AB-')->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			{{-- @php

		function calculateDonationNeeded($available, $donationCount) {
			$need = $available - $donationCount;
			return $need;
		}

		$available = 100;
		$donationCount =$Donation->count() ;
		$need = calculateDonationNeeded($available, $donationCount);
		// echo $need;

		@endphp
			  <div>{{$need}} available</div>
			</div>
		  </div>
		</div> 
<br><br><br>
        <hr>
        </div> --}}
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