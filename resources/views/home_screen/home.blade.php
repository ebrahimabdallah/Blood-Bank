@inject('User','App\Models\User')
@yield('User')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Blood Bank</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  {{-- loader --}}
  {{-- @include('home_screen.loader') --}}
  {{-- loader --}}
  {{-- <div class="loader"></div> --}}
  <section class="header">
     <nav class="container nav1  ">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo "><div class="blod"></div>Blood Bank</label>
        <ul class="element4 menu1">
          @if (Auth::check())

          <li><a  class="link1 active" href="{{Url('Main')}}">Home</a></li>
          <li><a class="link1" href="{{Url('Posts')}}">About</a></li>
          <li><a class="link1" href="{{Url('Donation')}}">Requested</a></li>
          <li><a class="link1" href="{{Url('donor')}}">Donors</a></li>
          {{-- <li><a class="link1" href="{{Url('Members')}}">Members</a></li> --}}
          <li><a class="link1" href="{{Url('contacts')}}">glimpse</a></li>
      
          <li><span><a class="link1" href="{{ url('register') }}">{{ Auth::user()->name }}</a></span>
          </li>
          @else
          <li><span><a class="link1" href="{{ url('register') }}"></a>
          @endif

        </ul>
      </nav>  <!--   end nav-->

    
         <div class=" container-fluid row " style="padding-bottom: 50px;">
      <div class=" col-sm div1">
        <h1>Donate blood<br> Save Life!</h1>
        <p>Hello {{Auth::user()->name}}</p>
        {{-- @include('home_screen.cssfont') --}}
       <div class="donatenow"><a class="" href="{{Url('donor/create')}}" >Donors <i class="fa-solid fa-arrow-right"></i></a></div>
       <div class="donatenow"><a class="" href="{{Url('Donation/create')}}" >Request  <i class="fa-solid fa-arrow-right"></i></a></div>

      </div>

      <div class=" col-sm">
        <div class="divimg">
       
        <img class="img1 " src="images/WhatsApp Image 2023-04-09 at 2.09.11 AM (1).jpeg">
         </div>
      </div>
    </div>
  </section><!--end -->
   
 <section class="div2 row">
  <div class="div3 col-8">
    <h1>
        We  can helping people from 10 years.
    </h1>
    <p>
        Our app also makes it easy to search for blood donors in your area. You can search for donors based on their blood type, location, and availability. You can also create a profile and list yourself as a donor, making it easier for people to contact you when they need blood.
    </p>
  </div>
  <div class="donatenow col-4"><a class="" href="{{Url('donor/create')}}" >Donate Now <i class="fa-solid fa-arrow-right"></i></a></div>
 </section>  <!--end -->

  
     <section class="container div5" >
     <h1>Donation Process</h1>
     <p>Our app also makes it easy to search for blood donors in your area. You can search for donors based on their blood type, location, and availability. You can also create a profile and list yourself as a donor, making it easier for people to contact you when they need blood.</p>
     </section> <!--end -->
     <section class="container">
       <div class="row">
        <div class="col div7">
         <div class="div71">1</div>
         <div>
          <h2 ><a href="{{Url('donor/create')}}" >Register  <i class="fa fa-heart"></i></a></h2>
          <p>Our app also makes it easy to search for blood donors in your area. You can search for donors based on their blood type, location, and availability.</p>
         </div>

        </div>
        <div class="col div7">
          <div class="div72">2</div>
          <div>
            <h2 ><a href="{{Url('donor')}}" >Donor  <i class="fa fa-heart"></i></a></h2>
            <p>Our app also makes it easy to search for blood donors in your area. You can search for donors based on their blood type, location, and availability.</p>
          </div>
 
         </div>
         <div class="col div7">
          <div class="div73">3</div>
          <div>
            <h2 ><a href="{{Url('Labs')}}" >labs  <i class="fa fa-heart "></i></a></h2>
            <p>Our app also makes can search for Labs based on their location and availability.</p>
          </div>
 
         </div>
         <div class="col div7">
          <div class="div74">4</div>
          <div>
           <h2 ><a href="{{Url('Members')}}" >Members  <i class="fa fa-heart "></i></a></h2>
           <p>Our app also makes it easy to search a Member staff for Nursing in your area.can search for Members based on location, and availability.</p>
          </div>
 
         </div>
       </div>
     </section> <!--end -->
     <section class="container div5">
      <h1>Donation Process</h1>
      <p>Our app also makes it easy to search for blood donors in your area. You can search for donors based on their blood type, location, and availability. You can also create a profile and list yourself as a donor, making it easier for people to contact you when they need blood.</p>
      </section> <!--end -->
     
      <section class=" container  ">
        <div class="row">
       <div class="col-sm div6">
        <div><img src="https://thumbs.dreamstime.com/b/hand-giving-red-heart-help-blood-donation-hospital-healthcare-concept-139341090.jpg"></div>
        <div><h2>Donation Process</h2>
        <p>Our app also makes it easy to search for blood donors in your area.</p>
        </div>
       </div>
       <div class="col-sm div6">
        <div><img src="https://cdn.pixabay.com/photo/2020/11/08/15/47/heart-5724137__340.png"></div>
        <div><h2 >Donation Process</h2>
        <p>Our app also makes it easy to search for blood donors in your area.</p>
        </div>
       </div>
       <div class="col-sm div6">
        <div><img src="https://cdn1.vectorstock.com/i/1000x1000/17/85/donate-blood-hand-giving-drop-vector-13351785.jpg"></div>
        <div><h2>Donation Process</h2>
        <p>Our app also makes it easy to search for blood donors in your area.</p>
        </div>
       </div>
      </div>
      </section><!--end -->


{{-- --------------------------------------------------------------------- --}}
  


@include('home_screen.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  

<script src="js/jquery-3.6.3.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="main.js" > </script>
</body>
</html>