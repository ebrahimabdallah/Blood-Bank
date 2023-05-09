@inject('Donation', 'App\Models\Donation_Request')
@include('layouts.navbar')
@include('layouts.cssNavbar')

<div style="text-align: center;">

  <div>
    <h2 style="color: crimson"><i>Register data to contact you and tell you the data</i></h2>
    <h6><i>Thank you for doing the necessary tests to protect you, you are now in the final stage</i></h6>
    <h6><i>Proud of you my friend always do good</i></h6>
    <h6><i>After completion, you will receive a message on your phone detailing the time and place</i></h6>
  </div>

  <hr>

  <div class="container">
    <form action="{{ route('donor.store') }}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <input type="name" class="form-control-lg" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
          @error('name')
          <div class="text-danger">{{ $message }}</div>
      @enderror
        </div>
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
          <input type="number" class="form-control-lg" placeholder="Enter age" name="age" patients_phone value="{{ old('age') }}">
          @error('age')
          <div class="text-danger">{{ $message }}</div>
      @enderror
        </div>
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
         
          {{-- <input type="string" class="form-control-lg" placeholder="Enter Type of blood" name="BloodType" value="{{ old('BloodType') }}"> --}}
         
          <select class="form-control-lg" style="width: 46%" placeholder="select BloodType" name="BloodType" value="{{ old('BloodType') }}">
            <option value="O">O</option>
            <option value="O-">O-</option>
            <option value="AB">AB</option>
            <option value="AB-">AB-</option>
            <option value="B">B</option>
            <option value="B-">B-</option>
            <option value="A-">A-</option>
            <option value="A">A</option>
          </select>

          @error('BloodType')
          <div class="text-danger">{{ $message }}</div>
      @enderror   
        </div>
        <div class="col-md-6 col-sm-12">
          <input type="date" class="form-control-lg" placeholder="Enter last donation" name="LastDontation" value="{{ old('LastDontation') }}">
          @error('LastDontation')
          <div class="text-danger">{{ $message }}</div>
      @enderror
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12">
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
              </div>
      </div>

      <br>

      <div>
        <button type="submit" style="width: 17%" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
</div>