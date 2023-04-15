@include('layouts.navbar')
<center>
<div>
    @include('flash::message')
   
    <div class="table-responsive">
        <table class="table table-bordered" style="width: 70% " >
            <thead>
            <tr class="table table-success table-striped">

                <th>#</th>
                <th>patient_name</th>
                <th>patients_phone</th>
                <th ><i class="fas fa-tint" style="color: red;"</th>
                <th>hospital_name</th>
                <th>patient_age</th>
                <th>bages_num</th>                                                           
                <th>address</th>                                                           
                <th>edit</th>                                                           
                <th>delete</th>                                                           
               

            </thead>
            </tr>
            
            <tbody>
            @foreach($record as $records)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$records->patient_name}}</td>
                    <td>{{$records->patients_phone}}</td>
                    <td >{{$records->bloode_type}}</td>
                    <td>{{$records->hospital_name}}</td>
                    <td>{{$records->patient_age}}</td>
                    <td>{{$records->bages_num}}</td>
                    <td>{{$records->address}}</td>

                    <td>
                        <a href="{{Route('Donation.edit',$records->id)}}"class="btn btn-xs">
                            <i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                    <form action="{{Route('Donation.destroy',$records->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </form>
                
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{Url('Donation/create')}}"><i class="fas fa-plus-circle"></i></a>
</div>
</center>