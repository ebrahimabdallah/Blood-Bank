@include('layouts.navbar')
@include('layouts.cssNavbar')

<div>
    <div style="text-align: center;">
        <form action="{{ route('Labs.store') }}" method="post">
            @csrf
            <div>
                <input type="text" class="form-control-lg" placeholder="Enter Labs name" name="Name">
                @error('Name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
                <br>
                <br>
                <input type="number" class="form-control-lg" placeholder="Enter Phone Number" name="phone">  
              
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
               @enderror

                <br>
            <br>
                <input type="address" class="form-control-lg" placeholder="Enter Address a Labs" name="address">
            
                @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            </div>
<br>
            <button type="submit" class="btn btn-primary">Add a Lab</button>

            


