@extends('layouts.app') 
@section('title', 'Enquiry List') 
@section('content')

<link rel="stylesheet" href="http://13.126.237.21/shribhawani/css/data-table/bootstrap-table.css">

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h2>
                     <b>Enquiry</b> History</b> | <a href="{{ url('create_enquiry') }}">Create <b> Enquiry</b></a>
                </h2>
                {{-- <small>
                                And Client List.
              </small> --}}
            </div>
            <br>
            <div class="datatable-dashv1-list custom-datatable-overright mybg ">
                    <div id="toolbar1">
                        <select class="form-control">
                            <option value="">Export Basic</option>
                            <option value="all">Export All</option>
                            <option value="selected">Export Selected</option>
                        </select>
                    </div>

                    <table id="table" data-toggle="table" data-pagination="true"
                           data-search="true" data-show-columns="true"
                           data-show-pagination-switch="true" data-show-refresh="true"
                           data-key-events="true" data-show-toggle="true" data-resizable="true"
                           data-cookie="true" data-cookie-id-table="saveId"
                           data-show-export="true" data-click-to-select="true"
                           data-toolbar="#toolbar1">
                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true" class="white"></th>
                            <th data-field="id" class="white">#</th>
                            <th data-field="name" class="white">Voucher No</th>
                            <th data-field="supplier" class="white">Supplier</th>
                            <th data-field="dno" class="white">Dispatch No</th>
                            <th data-field="dtp" class="white">Voucher Date</th>
                            <th data-field="complete" class="white">Created Date</th>
                            <th data-field="action" class="white">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                      
                        
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="http://13.126.237.21/shribhawani/js/data-table/bootstrap-table.js"></script>
<script src="http://13.126.237.21/shribhawani/js/data-table/tableExport.js"></script>
<script src="http://13.126.237.21/shribhawani/js/data-table/data-table-active.js"></script>
<script src="http://13.126.237.21/shribhawani/js/data-table/bootstrap-table-editable.js"></script>
<script src="http://13.126.237.21/shribhawani/js/data-table/bootstrap-editable.js"></script>
<script src="http://13.126.237.21/shribhawani/js/data-table/bootstrap-table-resizable.js"></script>
<script src="http://13.126.237.21/shribhawani/js/data-table/colResizable-1.5.source.js"></script>
<script src="http://13.126.237.21/shribhawani/js/data-table/bootstrap-table-export.js"></script>

@endsection