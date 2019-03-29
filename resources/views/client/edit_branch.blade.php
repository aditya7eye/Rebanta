@extends('layouts.app') 
@section('title', 'Edit Branch') 
@section('content')


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h2>
                    Edit <b>Branch</b> 
                </h2>
                <h3>Username : <b>branch_{{ $branch->id.'@'.session('clientmaster')->prefix }}</b> </h3><h3>Password : <b>{{ $branch->password }}</b> </h3>
                {{-- <small>
                                And Client List.
              </small> --}}
            </div>
            {{-- <hr> --}}
            <br>
            {{-- <hr> --}}
            <div class="mybg">
               
                <form action="{{ url('update_branch').'/'.$branch->id }}" method="post" id="update_branch">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Branch Name - </label>
                                <input type="text" class="form-control required" value="{{ $branch->b_name }}" autocomplete="off" placeholder="Enter Branch Name" name="b_name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Branch Contact - </label>
                                <input type="text" class="form-control required numberOnly contact" value="{{ $branch->b_contact }}" autocomplete="off" placeholder="Enter Branch Contact" name="b_contact" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Branch Address - </label>
                                <input type="text" class="form-control required" value="{{ $branch->address }}" autocomplete="off" placeholder="Enter Branch Address" name="b_address" required>
                            </div>
                        </div>
                        {{-- @php
                            $newcount = \App\Branch::max('id');
                        @endphp --}}
                        <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="" class="lbc"> &nbsp;Username - </label>
                                    <input type="text" value="branch_{{ $branch->id }}" class="form-control" placeholder="Username" autocomplete="off" onkeypress="return false;" onkeydown="return false;" name="username">
                                </div>
                            </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Prefix - </label>
                                <input type="text" class="form-control required nospc" value="{{ session('clientmaster')->prefix }}" id="prefix" onkeypress="return false;" onkeydown="return false;" autocomplete="off" placeholder="Enter Prefix" name="prefix" required>
                            </div>
                        </div>
                        
                       
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Password - </label>
                                <input type="text" value="{{ $branch->password }}" class="form-control required" autocomplete="off" placeholder="Enter Password" name="password" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="" class="lbc"> &nbsp;Name - </label>
                                    <input type="text" value="{{ $branch->name }}" class="form-control required" autocomplete="off" placeholder="Enter Name" name="name" required>
                                </div>
                            </div>
                        <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="" class="lbc"> &nbsp;Email - </label>
                                    <input type="text" value="{{ $branch->email }}" class="form-control required" autocomplete="off" placeholder="Enter Email" name="email" required>
                                </div>
                            </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Mobile - </label>
                                <input type="text" value="{{ $branch->mobile }}" class="form-control numberOnly contact" autocomplete="off" maxlength="10" placeholder="Enter Mobile" name="mobile">
                            </div>
                        </div>
                       
                        
                        <div class="col-sm-12">
                            <div class="form-group">
                            
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>


    </div>
</div>
<script>
</script>
@endsection