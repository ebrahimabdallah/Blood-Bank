@inject('Donation', 'App\Models\Donation_Request')

@include('layouts.navbar')
@include('layouts.cssNavbar')
<center>
    <div>
            <h2 style="color: crimson">To register a blood registry</h2>
            <p style="color: crimson">You need to collect information from the donor:</p>
      
             <h6>Email (if available)
                blood type
             <h6>  Information about and previous support (if available)</h6>
             <h6> Information about diseases, diseases</h6>

                <h6> medications, medications, or diseases of the chin</h6>
          </div>
                    
</center>
<hr>

<div>
    <div style="text-align: center;">
        <form action="{{ route('Donation.store') }}" method="post">
            @csrf
            <div>
                <input type="name" class="form-control-lg" placeholder="Enter Your name " name="patient_name" value="{{ old('patient_name') }}">
                <input type="email" class="form-control-lg" placeholder="Enter name email" name="email" value="{{ old('email') }}">  
            </div>
            <div>
                <br>
                <input type="number" class="form-control-lg" placeholder="Enter bages_num" name="bages_num" patients_phone value="{{ old('bages_num') }}">
                <input type="string" class="form-control-lg"  placeholder="Enter name phone" name="patients_phone" value="{{ old('patients_phone') }}">
            </div>
            <div>
                <br>
                <input type="enum" class="form-control-lg" placeholder="Enter name blood_type" name="bloode_type" value="{{ old('bloode_type') }}">
                <input  type="string" class="form-control-lg" placeholder="Enter hospital_name" name="hospital_name" value="{{ old('hospital_name') }}">

            </div>
            <div>
                <br>
                <input  type="number" class="form-control-lg" placeholder="Enter patient_age" name="patient_age" value="{{ old('patient_age') }}">
                <input  type="string" class="form-control-lg" placeholder="Enter name Address" name="address" value="{{ old('address') }}">
            </div>
            <br>

            
            <div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>  
        </form>
    </div>
</div>