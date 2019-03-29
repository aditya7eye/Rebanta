@extends('layouts.app') 
@section('title', 'Clients List') 
@section('content')


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h2>
                     <b>Client</b> History</b> | <a href="{{ url('create_client') }}">Create <b> Client</b></a>
                </h2>
                {{-- <small>
                                And Client List.
              </small> --}}
            </div>
            <br>
            <div class="mybg">
              <table class="table table-bordered" >
                  <thead class="thead-inverse">
                      <tr>
                          <th style="text-align : center ;">#</th>
                          <th style="text-align : center ;">Username</th>
                          <th style="text-align : center ;">Password</th>
                          <th style="text-align : center ;">Name</th>
                          <th style="text-align : center ;">Compony Name</th>
                          <th style="text-align : center ;">Mobile</th>
                          <th style="text-align : center ;">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                          @foreach ($client as $index => $item)
                          <tr align="center">
                                <td scope="row" class="tdc">{{ $index+1 }}</td>
                                <td class="tdc">{{ $item->username }}</td>
                                <td class="tdc">{{ $item->password }}</td>
                                <td class="tdc">{{ $item->name }}</td>
                                <td class="tdc">{{ $item->c_name }}</td>
                                <td class="tdc">{{ $item->mobile }}</td>
                                {{-- <td class="tdc"><a href="{{ url('edit_client').'/'.base64_encode($item->id) }}"><button class="btn btn-success btn-sm">Edit</button></a> <button class="btn btn-primary btn-sm" onclick="del_client({{ $item->id }});">Delete</button></td> --}}
                                <td>
                                    <a href="{{ url('enterclient').'/'.base64_encode($item->id) }}"><button class="btn btn-success btn-sm"><i class="glyphicon glyphicon-share-alt"></i></button></a>
                    <a href="{{ url('edit_client').'/'.base64_encode($item->id) }}"><button class="btn btn-light btn-sm"><i class="glyphicon glyphicon-edit"></i></button></a>
                    <button class="btn btn-warning btn-sm" onclick="del_client({{ $item->id }});"><i class="glyphicon glyphicon-trash"></i></button>
                                </td>
                               
                            </tr>
                          @endforeach
                          
                      </tbody>
              </table>
            </div>
        </div>


    </div>
</div>
<script>
    function del_client(id){
        // alert(id);
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    $.get('{{ url('del_client') }}', {
                    did: id
                }, function (data) {
                    // alert(data);
                    window.location.href = "{{URL::to('view_client')}}";
                });
    Swal.fire(
      'Deleted!',
      'Your Client has been deleted.',
      'success'
    )
  }
})
    }
</script>
@endsection