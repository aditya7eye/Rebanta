@extends('layouts.app') 
@section('title', 'Branch List') 
@section('content')
<style>
    /* /////////// */

    /* HOVER */

    @keyframes hover {
        50% {
            transform: translateY(-3px);
        }
        100% {
            transform: translateY(-6px);
        }
    }

    @keyframes shadow {
        0% {
            transform: translateY(6px);
            opacity: .4;
        }
        50% {
            transform: translateY(3px);
            opacity: 1;
        }
        100% {
            transform: translateY(6px);
            opacity: .4;
        }
    }

    .hover {
        position: relative;
        transition-duration: 0.3s;
        transition-property: transform;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        transform: translateZ(0);
    }

    .hover:before {
        pointer-events: none;
        position: absolute;
        z-index: -1;
        content: '';
        top: 100%;
        left: 5%;
        height: 10px;
        width: 90%;
        opacity: 0;
        background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
        /* W3C */
        transition-duration: 0.3s;
        transition-property: transform opacity;
    }

    .hover:hover {
        transform: translateY(-6px);
        animation-name: hover;
        animation-duration: 1.5s;
        animation-delay: 0.3s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    .hover:hover:before {
        opacity: .6;
        transform: translateY(6px);
        animation-name: shadow;
        animation-duration: 1.5s;
        animation-delay: .3s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }
    .colbg{
        padding: 15px 20px;
        background: linear-gradient(to bottom, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
    }
</style>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h2>
                    <b>Branch</b> List</b> | <a href="{{ url('create_branch') }}">Create <b> Branch</b></a>
                </h2>

                {{-- <small>
                                And Client List.
              </small> --}}
            </div>
            <br> @if(count($branch) > 0) @foreach ($branch as $item)
            <div class="col-sm-3" align="center">
                <div class="colbg hover">
                    <i class="glyphicon glyphicon-object-align-bottom white" style="font-size: 25px;"></i>
                    <div class="myline"></div>
                    <h3 class="white"><b>{{ ucwords($item->b_name) }}</b></h2>
                        <h4 class="white"><i class="glyphicon glyphicon-map-marker white"></i> &nbsp; {{ ucwords($item->address) }}</h3>
                    <h4 class="white"><i class="glyphicon glyphicon-phone white"></i> &nbsp; {{ ucwords($item->b_contact) }}</h4>
                    <div class="myline"></div>
                    <a href="{{ url('enterbranch').'/'.base64_encode($item->id) }}"><button class="btn btn-success btn-sm"><i class="glyphicon glyphicon-share-alt"></i></button></a>
                    <a href="{{ url('edit_branch').'/'.base64_encode($item->id) }}"><button class="btn btn-light btn-sm"><i class="glyphicon glyphicon-edit"></i></button></a>
                    <button class="btn btn-warning btn-sm" onclick="delete_branch({{ $item->id }});"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
                <br>
            </div>

            @endforeach 
            @else
            <div class="col-sm-12" align="center">
                    <div class="mybg hover">
                            <h3 class="white"><b>No Branch Found</b></h2>
                        <small class="white"> Please <b>Click Create Branch Link</b> </small>
                    </div>
                    <br>
                </div>

             @endif {{-- <i class="glyphicon glyphicon-share-alt"></i> --}}
        </div>


    </div>
</div>
<script>
    function delete_branch(id){
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
    $.get('{{ url('delete_branch') }}', {
                    did: id
                }, function (data) {
                    // alert(data);
                    window.location.href = "{{URL::to('view_branch')}}";
                });
    Swal.fire(
      'Deleted!',
      'Your Branch has been deleted.',
      'success'
    )
  }
})
    }

</script>
@endsection