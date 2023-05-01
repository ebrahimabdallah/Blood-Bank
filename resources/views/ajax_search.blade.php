
@inject('Donation', 'App\Models\Donation_Request')

@include('layouts.navbar')
    <center>
      
      
          </form> --}} 
    <br>
        <form action="#" method="GET">
          @csrf
          <div class="input-group" style="width: 70%">
                <input type="text" name="search" class="form-control" placeholder="Search..." >
                <button type="submit" class="btn btn-primary">Search</button>

            
            </div>
        </form>
        <br>

  
            @include('flash::message')
           
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 95% " >
       <thead>
         <tr class="table-success table-striped">
           <th>#</th>
           <th>Patient Name</th>
           <th>Patient Phone</th>
           <th><i class="fas fa-tint" style="color: red;"></i></th>
           <th>Hospital Name</th>
           <th>Patient Age</th>
           <th>Bags Number</th>
           <th>Address</th>
           <th>The cost</th>
           <th>Status</th>
           <th>Edit</th>
           <th>Delete</th>
         </tr>
       </thead>
       <tbody>
         @foreach($record as $records)
         <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $records->patient_name }}</td>
           <td>{{ $records->patients_phone }}</td>
           <td>{{ $records->bloode_type }}</td>
           <td>{{ $records->hospital_name }}</td>
           <td>{{ $records->patient_age }}</td>
           <td>{{ $records->bages_num }}</td>
           <td>{{ $records->address }}</td>
           
           <td>{{ $records->bages_num*30 }}</td>
           <td>
             @if($records->status == 'active')
           
             <form action="{{ route('Donation.update', $record->id) }}" method="post">
               @csrf
               @method('PUT')
               <input type="hidden" name="status" value="inactive">
               <button type="submit" class="btn btn-success btn-xs">{{ $records->status}} 
              
            
              
              </button>
             </form>
             @else
             <form action="{{ route('Donation.update', $records->id) }}" method="post">
               @csrf
               @method('PUT')
               <input type="hidden" name="status" value="active">
               <button type="submit" class="btn btn-danger btn-xs">{{ $records->status}}</button>
             </form>
             @endif
           </td>
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
   </div>
   <div class="text-center">
     <a href="{{ url('Donation/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a> 
       </div>
 </div>
