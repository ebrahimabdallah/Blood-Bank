@include('layouts.navbar')
@inject('Lab','App\Models\Lab')
<center>
<div>
    @include('flash::message')

    <div class="table-responsive">
        <table class="table table-bordered" style="width: 60%">
            <thead>
                <tr class="table table-success table-striped">
                    <th>#</th>
                <th>Name</th>
                <th>phone</th>                              
                <th>address</th>                                                           
                <th>edit</th>                                                           
                <th>delete</th>                                                           
               
            </thead>
            </tr>
            
            <tbody>
            @foreach($record as $records)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$records->Name}}</td>
                    <td>{{$records->phone}}</td>
                    <td>{{$records->address}}</td>

                    <td>
                        <a href="{{Route('Labs.edit',$records->id)}}"class="btn btn-xs">
                            <i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                    <form action="{{Route('Labs.destroy',$records->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </form>
                
            @endforeach
            </tbody>
        </table>
        <a href="{{Url('Labs/create')}}"><i class="fas fa-plus-circle"></i></a>

    </div>
  
</div>
</center>

