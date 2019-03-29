@extends('layouts.app') 
@section('title', 'Dashboard') 
@section('content')
<style>
    .mybg {
        background-color: #686b6d;
        padding: 15px 20px;
    }
    .lbc {
        color: white;
    }
    .errorClass{
        border : red 2px solid;
    }
    </style>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h2>
                    Create <b>Client</b> | <a href="{{ url('view_client') }}"><b>Client</b> History </a>
                </h2>
                {{-- <small>
                                And Client List.
              </small> --}}
            </div>
            {{-- <hr> --}}
            <br>
            {{-- <hr> --}}
            <div class="mybg">
                <form action="{{ url('insert_client') }}" method="get" id="insert_client">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Name - </label>
                                <input type="text" class="form-control required" autocomplete="off" placeholder="Enter Name" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Company Name - </label>
                                <input type="text" class="form-control required" autocomplete="off" placeholder="Enter Company Name" name="c_name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="" class="lbc"> &nbsp;Username - </label>
                                    <input type="text" value="admin" class="form-control" placeholder="Username" autocomplete="off" onkeypress="return false;" onkeydown="return false;" name="username">
                                </div>
                            </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Prefix - </label>
                                <input type="text" class="form-control required nospc" id="prefix" autocomplete="off" placeholder="Enter Prefix" name="prefix" required>
                            </div>
                        </div>
                        
                       
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Password - </label>
                                <input type="text" class="form-control required" autocomplete="off" placeholder="Enter Password" name="password" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="lbc"> &nbsp;Email - </label>
                                    <input type="text" class="form-control required" autocomplete="off" placeholder="Enter Email" name="email" required>
                                </div>
                            </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Mobile - </label>
                                <input type="text" class="form-control numberOnly contact" autocomplete="off" maxlength="10" placeholder="Enter Mobile" name="mobile">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;GSTIN - </label>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Enter GSTIN" name="gstin">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="lbc"> &nbsp;Address - </label>
                                <input type="text" class="form-control required" autocomplete="off" placeholder="Enter Address" name="address" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                            
                            <button type="submit" class="btn btn-success btn-block">Create</button>
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