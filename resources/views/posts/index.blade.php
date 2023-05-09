@inject('Donation','App\Models\Donation_Request')
@inject('Posts','App\Models\Posts')
@yield('Posts')
@include('layouts.navbar')
@include('AppChart.css')


<center>
    @include('posts.css')
    @foreach($Post as $Posts)

    <div class="post" style="width: 85%">
        <img src="{{ $Posts->image }}" alt="{{ $Posts->name }}" class="img-fluid rounded-circle mb-3" width="128" height="128">
        <div class="phone"> {{ $Posts->title }}</div>
        <div class="address"> {{ $Posts->content }}</div>
        <div class="experiences">Puplish at : {{ $Posts->created }}</div>   
    
    
</div>
    @endforeach
</div>    

    </div>
</center>