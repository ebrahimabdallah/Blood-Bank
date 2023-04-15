@include('layouts.navbar')
@include('layouts.cssNavbar')

@inject('Donation','App\Models\Donation_Request')


<div>
    <div style="text-align: center;">
        <form action="{{ route('Donation.update',$record->id) }}" method="Post">
            @method('PUT')
            @csrf
<div>
                <input type="name" class="form-control-lg" placeholder="Enter Your name " name="patient_name" value="{{$record->patient_name}}">
                <input type="email" class="form-control-lg" placeholder="Enter name email" name="email" value="{{$record->email}}">  
            </div>
            <div>
                <br>
                <input type="number" class="form-control-lg" placeholder="Enter bages_num" name="bages_num" value="{{$record->bages_num}}">
                <input type="string" class="form-control-lg" placeholder="Enter name phone" name="patients_phone" value="{{$record->patients_phone}}">
            </div>
            <div>
                <br>
                <input type="enum" class="form-control-lg" placeholder="Enter name blood_type" name="bloode_type" value="{{$record->bloode_type}}">
                <input  type="string" class="form-control-lg" placeholder="Enter hospital_name" name="hospital_name" value="{{$record->hospital_name}}">

            </div>
            <div>
                <br>
                <input  type="number" class="form-control-lg" placeholder="Enter patient_age" name="patient_age" value="{{$record->patient_age}}">
                <input  type="string" class="form-control-lg"  placeholder="Enter name Address" name="address" value="{{$record->address}}">
            </div>
            <br>

            
            <div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div> 

            