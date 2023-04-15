@inject('Members','App\Models\Member')
@include('layouts.navbar')
@include('layouts.cssNavbar')

<div>
    <div style="text-align: center;">
        <form action="{{ route('Members.store')}}" method="post">
            @csrf
            <div>
               
                <input type="text" name="Name" placeholder="Enter Your Name " class="form-control-lg">
            <br><br>
            <input type="text" name="address" placeholder="Enter Your Address" class="form-control-lg">
        <br><br>
        <input type="text" name="phone" placeholder="Enter Your Name" class="form-control-lg">
        <br><br>
        <input type="text" name="experince" placeholder=" your experince " class="form-control-lg">    
    <br><br>
    <input type="file" name="image" >
    <br><br>
    <button type="submit" class="btn btn-primary">Aplay This Job</button>

    </div>
