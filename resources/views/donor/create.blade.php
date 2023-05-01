
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
                    <input type="name" class="form-control-lg" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <br>
                <div class="col-md-6 col-sm-12">
                    <input type="email" class="form-control-lg" placeholder="Enter Your email" name="email" value="{{ old('email') }}">
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
                    <input type="string" class="form-control-lg" placeholder="Enter phone" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="enum" class="form-control-lg" placeholder="Enter blood type" name="Birth_data" value="{{ old('Birth_data') }}">
                    @error('Birth_data')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <br>
                <div class="col-md-6 col-sm-12">
                    <input type="string" class="form-control-lg" placeholder="Enter hospital name" name="blood" value="{{ old('blood') }}">
                    @error('blood')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="number" class="form-control-lg" placeholder="Enter patient age" name="age" value="{{ old('age') }}">
                    @error('age')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="col-md-6 col-sm-12">
                    <input type="string" class="form-control-lg" placeholder="Enter address" name="address" value="{{ old('address') }}">
                    @error('address')
                        <div class="text-danger ">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><br>
            <div>
                <button type="submit" style="width: 17%" class="btn btn-primary">Create</button>
            </div>  
        </form>
    </div>
</div>