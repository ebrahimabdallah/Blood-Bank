@include('layouts.navbar')
@include('layouts.cssNavbar')

<div>
    <div style="text-align: center;">
        <form action="{{ route('Labs.update',$record->id) }}" method="Post">
            @method('PUT')
            @csrf
            <div>
                <input type="text" class="form-control-lg" placeholder="Enter Labs name" name="Name" value="{{$record->Name}}">
                <br>
                <br>
                <input type="number" class="form-control-lg" placeholder="Enter Phone Number" name="phone" value="{{$record->phone}}">  
            <br>
            <br>
                <input type="address" class="form-control-lg" placeholder="Enter Address a Labs" name="address" value="{{$record->address}}">
            </div>
<br>
            <button type="submit" class="btn btn-primary">Updata information</button>

            