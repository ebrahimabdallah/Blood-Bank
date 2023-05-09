@inject('Donation','App\Models\Donation_Request')
@include('layouts.navbar')
    
<center>
    <br>
        <form action="#" method="GET">
          @csrf
          <div class="input-group" style="width: 70%">
                <input type="text" name="search" class="form-control" placeholder="Search..." >
                <button type="submit" class="btn btn-primary">Search</button>

            
            </div>
        </form>
        <br>

  
           
            <div class="table-responsive" id="ajax_search_result">
                <table class="table table-bordered" style="width: 70% " >
       <thead>
         <tr class="table-success table-striped">
           {{-- <th>#</th> --}}
           <th> Name</th>
           <th> Phone</th>
           <th><i class="fas fa-tint" style="color: red;"></i></th>
           <th>Hospital </th>
           {{-- <th>Patient Age</th> --}}
           <th>Bags</th>
           <th>Address</th>
           <th>The cost</th>
           <th>Edit</th>
           <th>Delete</th>
         </tr>
       </thead>
       <tbody>
         @foreach($record as $records)
         <tr>
           {{-- <td>{{ $loop->iteration }}</td> --}}
           <td>{{ $records->patient_name }}</td>
           <td>{{ $records->patients_phone }}</td>
           <td>{{ $records->bloode_type }}</td>
           <td>{{ $records->hospital_name }}</td>
           {{-- <td>{{ $records->patient_age }}</td> --}}
           <td>{{ $records->bages_num }}</td>
           <td>{{ $records->address }}</td>           
           <td>{{ $records->bages_num*30 }}</td>
           <td>
          
      
             <a href="{{ route('Donation.edit', $records->id) }}" class="btn btn-xs">
               <i class="fa fa-edit"></i>
             </a>
           </td>
           <td>
             <form action="{{ route('Donation.destroy', $records->id) }}" method="post">
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
          @for ($i = 1; $i <= $record->lastPage(); $i++)
              @if ($i == $record->currentPage())
                  <li class="page-item active"><span class="page-link">page {{ $i}} Current</span></li>
              @else
                  <li class="page-item"><a href="{{ $record->appends(['search' => request()->query('search')])->url($i) }}" class="page-link">{{ $i }} </a></li>
              @endif
          @endfor
      </ul>
  </div>
  {{-- end paginate --}}
    </div>
   <div class="text-center">
     <a href="{{ url('Donation/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a> 
       </div>
 </div>
 