{{-- <?php
        use Carbon\Carbon;

?> --}}
@include('layouts.navbar')
<center>
        <div>
        
            @include('flash::message')
          <br>
            <form action="#" method="GET">
              @csrf
              <div class="input-group" style="width: 70%">
                    <input type="text" name="search" class="form-control" placeholder="Search..." >
                    <button type="submit" class="btn btn-primary">Search</button>
    
                
                </div>
            </form>
            <br>
       
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 70% " >
       <thead>
         <tr class="table-success table-striped">
           {{-- <th>#</th> --}}
           <th>Name</th>
           <th>Phone</th>
           {{-- <th>Age</th> --}}
           <th>BloodType</th>
           {{-- <th>email</th> --}}
           <th>Address</th>
           {{-- <th>LastDontation</th> --}}
           <th>The Stutas</th>

           <th>Edit</th>
           <th>Delete</th>
         </tr>
       </thead>
       <tbody>
         @foreach($Donors as $Donor)
         <tr>
           {{-- <td>{{ $Donor->iteration }}</td> --}}
           <td>{{ $Donor->name }}</td>
           <td>{{ $Donor->phone}}</td>
           {{-- <td>{{ $Donor->age}}</td> --}}
           <td>{{ $Donor->BloodType }}</td>
           {{-- <td>{{ $Donor->email }}</td> --}}
           <td>{{ $Donor->address }}</td>
           {{-- <td>{{ $Donor->LastDontation }}</td> --}}
          
           <td>
            <?php
            $current_time = time(); // الوقت الحالي
            $last_donation = strtotime($Donor->LastDontation); // آخر موعد للتبرع
            $days_since_donation = floor(($current_time - $last_donation) / (60 * 60 * 24)); // الفرق بين التواريخ بالأيام
            
            if ($days_since_donation > 80 && $Donor->age < 40 ) {
                echo "متاح للتبرع";
            } else {
                echo "غير متاح للتبرع ";
            }
            ?>
        </td>
           <td>
             <a href="{{ route('donor.edit', $Donor->id) }}" class="btn btn-xs">
               <i class="fa fa-edit"></i>
             </a>
           </td>
           <td>
             <form action="{{ route('donor.destroy', $Donor->id) }}" method="post">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
             </form>
           </td>
         </tr>
         @endforeach 
       </tbody>
     </table>
    {{-- paginate --}}
    @include('layouts.csspaginate')
     
    <div class="pagination-container">
     <ul class="pagination">                           
         @for ($i = 1; $i <= $Donors->lastPage(); $i++)
             @if ($i == $Donors->currentPage())
                 <li class="page-item active"><span class="page-link">page {{ $i}} Current</span></li>
             @else
                 <li class="page-item"><a href="{{ $Donors->appends(['search' => request()->query('search')])->url($i) }}" class="page-link">{{ $i }} </a></li>
             @endif
         @endfor
     </ul>
 </div>
 {{-- end paginate --}} 
    </div>
    <div class="text-center">
     <a href="{{ url('donor/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a>
   </div>
 </div>