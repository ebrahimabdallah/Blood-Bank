<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>BloodBank</title>
    
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <section class="header">
     <nav class="container nav1  ">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo "><div class="blod"></div>Blood Deft</label>
        <ul class="element4 menu1">
           <li><a  class="link1 active" href="{{Url('Main')}}">Home</a></li>
               
          <li><a class="link1" href="{{Url('Posts')}}">About</a></li>
          <li><a class="link1" href="{{Url('Labs')}}">Labs</a></li>
          <li><a class="link1" href="{{Url('Donation')}}">Requested</a></li>
          <li><a class="link1" href="{{Url('Members')}}">Members</a></li>
          <li><a class="link1" href="{{Url('Contact')}}">glimpse</a></li>
          <li><a class="link1" href="{{Url('register')}}">Log out</a></li> 
          <li></li>
        </ul>
      </nav>  <!--   end nav-->
      <div class=" container-fluid row " style="padding-bottom: 50px;">
        <div class=" col-sm div1">
          
        </div>
        <div id="flash-message">
          @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
      
        <script>
          $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
          </script>
        </div>
    
</body>
</html>
