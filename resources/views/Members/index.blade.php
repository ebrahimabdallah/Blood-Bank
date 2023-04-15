
@inject('Members','App\Models\Member')

@include('layouts.navbar')
<center>
<div>
    
    <div class="container">
        <div class="row">
            @foreach($Member as $Members)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" style="color:crimson" >
                        <h3 style="width: 30%">{{ $Members->Name }}</h3>
                    </div>
                    <div class="card-body" style="color: crimson" style="width: 30%">
                        <img src="{{ $Members->image }}" alt="{{ $Members->name }}" style="width: 40%" class="img-fluid rounded-circle mb-3" width="128" height="128">
                        <div class="phone">Phone: {{ $Members->phone }}</div>
                        <div class="address">Address: {{ $Members->address }}</div>
                        <div class="experiences">experince: {{ $Members->experince }}</div>
                        <br>
                        <div class="text-center">
                            <a href="#" class="mx-2" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="mx-2" title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="mx-2" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                        <br>
                        <div><Button class="btn btn-primary">Connection</Button></div>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0) <!-- Add this line to check if the current iteration is a multiple of 3 -->
        </div>
        <div class="row"> <!-- Add a new row after every three cards -->
            @endif
            @endforeach
        </div>
        @include('Members.cssbutton')
        <button class="apply-button" > <i  class="fas fa-plus-circle" ></i><a class="link1" <a href="{{Url('Members/create')}}"> Apply The Job</button></a>
    </div>