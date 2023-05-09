
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
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="name" class="form-control-lg" placeholder="Enter Your name" name="patient_name" value="{{ old('patient_name') }}">
                    @error('patient_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <br>
                <div class="col-md-6 col-sm-12">
                    <input type="email" class="form-control-lg" placeholder="Enter email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="number" class="form-control-lg" placeholder="Enter bages_num" name="bages_num" patients_phone value="{{ old('bages_num') }}">
                    @error('bages_num')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <br>
                <div class="col-md-6 col-sm-12">
                    <input type="string" class="form-control-lg" placeholder="Enter phone" name="patients_phone" value="{{ old('patients_phone') }}">
                    @error('patients_phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    {{-- <input type="enum" class="form-control-lg" placeholder="Enter blood type" name="bloode_type" value="{{ old('bloode_type') }}"> --}}
                     
          <select class="form-control-lg" style="width: 46%" placeholder="select bloodtype" name="bloode_type" value="{{ old('bloode_type') }}">
            <option value="O">O</option>
            <option value="O-">O-</option>
            <option value="AB">AB</option>
            <option value="AB-">AB-</option>
            <option value="B">B</option>
            <option value="B-">B-</option>
            <option value="A-">A-</option>
            <option value="A">A</option>
          </select>

                    @error('bloode_type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <br>
                <div class="col-md-6 col-sm-12">
                    <input type="string" class="form-control-lg" placeholder="Enter hospital name" name="hospital_name" value="{{ old('hospital_name') }}">
                    @error('hospital_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="number" class="form-control-lg" placeholder="Enter patient age" name="patient_age" value="{{ old('patient_age') }}">
                    @error('patient_age')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="col-md-6 col-sm-12">
                    <select class="form-control-lg" style="width: 46%" placeholder="select address" name="address" value="{{ old('address') }}">
                        <option value="cairo">cairo</option>
                        <option value="banha">banha</option>
                        <option value="Dakahlia">mansoura</option>
                        <option value="Assuit">Assuit</option>
                        <option value="Damietta">Damietta</option>
                        <option value="Kafr El Sheikh">Kafr El Sheikh</option>
                        <option value="Ismailia">Ismailia</option>
                        <option value="Beni Suef">Beni Suef</option>
                        <option value="Minya">Minya</option>
                        <option value="Qena">Qena</option>
                        <option value="Luxor">Luxor</option>
                        <option value="Matrouh">Matrouh</option>
                        <option value="North Red See">North Red See</option>
                        <option value="Sohag">Sohag</option>
                      </select>
                  
                  
                  
                        @error('address')
                        <div class="text-danger ">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><br>
            <div>
        
                <button
                 type="submit" style="width: 17%; background-color: #007bff; color: #fff;"
                  class="btn btn-primary" 
                onclick="this.style.backgroundColor='red'">Create</button>            
            </div>  
        </form>
    </div>
</div>