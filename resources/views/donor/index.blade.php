

@include('layouts.navbar')
    <center>
        <div>
        
            @include('flash::message')
           
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 95% " >
       <thead>
         <tr class="table-success table-striped">
           <th>#</th>
           <th>name</th>
           <th>Phone</th>
           <th>Age</th>
           <th>BloodType</th>
           <th>email</th>
           <th>address</th>
           <th>LastDontation</th>

          
           <th>Edit</th>
           <th>Delete</th>
         </tr>
       </thead>
       <tbody>
         @foreach($Donors as $Donor)
         <tr>
           <td>{{ $Donor->iteration }}</td>
           <td>{{ $Donor->name }}</td>
           <td>{{ $Donor->phone}}</td>
           <td>{{ $Donor->age}}</td>
           <td>{{ $Donor->BloodType }}</td>
           <td>{{ $Donor->email }}</td>
           <td>{{ $Donor->address }}</td>
           <td>{{ $Donor->LastDontation }}</td>

{{-- 
      
           <td>
             @if($records->status == 'active')
             <form action="{{ route('Donor.update', $record->id) }}" method="post">
               @csrf
               @method('PUT')
               <input type="hidden" name="status" value="inactive">
               <button type="submit" class="btn btn-success btn-xs">{{ $records->status}}</button>
             </form>
             @else
             <form action="{{ route('Donor.update', $records->id) }}" method="post">
               @csrf
               @method('PUT')
               <input type="hidden" name="status" value="active">
               <button type="submit" class="btn btn-danger btn-xs">{{ $records->status}}</button>
             </form>
             @endif
           </td>
           <td>
             <a href="{{ route('Donor.edit', $records->id) }}" class="btn btn-xs">
               <i class="fa fa-edit"></i>
             </a>
           </td>
           <td>
             <form action="{{ route('Donor.destroy', $records->id) }}" method="post">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
             </form>
           </td>
         </tr>--}}
         @endforeach 
       </tbody>
     </table>
   </div>
   <div class="text-center">
     <a href="{{ url('Donor/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a>
   </div>
 </div>