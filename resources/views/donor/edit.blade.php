@include('layouts.navbar')
@include('layouts.cssNavbar')

@inject('Donation', 'App\Models\Donation_Request')

<div class="container">
    <div style="text-align: center;">
        <form action="{{ route('donor.update', $Donors->id) }}" method="Post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="name" class="form-control-lg" placeholder="Enter Your Name" name="name" value="{{ $Donors->name }}">
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="email" class="form-control-lg" placeholder="Enter Your email" name="email" value="{{ $Donors->email }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="number" class="form-control-lg" placeholder="Enter age" name="age"  value="{{ $Donors->age }}">
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="string" class="form-control-lg" placeholder="Enter phone" name="phone" value="{{ $Donors->phone }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="string" class="form-control-lg" placeholder="Enter Type of blood" name="BloodType" value="{{ $Donors->BloodType }}">
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="date" class="form-control-lg" placeholder="Enter last donation" name="LastDontation" value="{{ $Donors->LastDontation }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <input type="string" class="form-control-lg" placeholder="Enter address" name="address" value="{{ $Donors->address }}">
                </div>
            </div>
            <br>
            <div>
                <button type="submit" style="width: 17%" class="btn btn-primary">Updata</button>
            </div>
        </form>
    </div>
</div>