@extends('layouts.app') 
@section('title', 'Dashboard') 
@section('content')
@php
    $clientcount = \App\Client::whereis_del(0)->count();
@endphp
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h1>
                    Welcome in <b>Rebanta</b> Master Access.
                </h1>
                {{-- <small>
                                Manage All Clients And Branch.
              </small> --}}
            </div>
        </div>


        <a href="{{ url('view_client') }}">
            <div class="col-md-3">
                <div class="dash-box dash-box-color-1">
                    <div class="dash-box-icon">
                        <i class="	glyphicon glyphicon-user"></i>
                    </div>
                    <div class="dash-box-body">
                        <span class="dash-box-count">{{ $clientcount }}</span>
                        <span class="dash-box-title"><b>Clients</b></span>
                    </div>

                    {{--
                    <div class="dash-box-action">
                        <button>More Info</button>
                    </div> --}}
                </div>
            </div>
        </a>
        <div class="col-md-3">
            <div class="dash-box dash-box-color-2">
                <div class="dash-box-icon">
                    <i class="glyphicon glyphicon-download"></i>
                </div>
                <div class="dash-box-body">
                    <span class="dash-box-count">100</span>
                    <span class="dash-box-title"><b>Lesson Plan</b></span>
                </div>

                {{--
                <div class="dash-box-action">
                    <button>More Info</button>
                </div> --}}
            </div>
        </div>
        <div class="col-md-3">
            <div class="dash-box dash-box-color-3">
                <div class="dash-box-icon">
                    <i class="glyphicon glyphicon-heart"></i>
                </div>
                <div class="dash-box-body">
                    <span class="dash-box-count">2502</span>
                    <span class="dash-box-title"><b>Lesson Plan</b></span>
                </div>

                {{--
                <div class="dash-box-action">
                    <button>More Info</button>
                </div> --}}
            </div>
        </div>
        <div class="col-md-3">
            <div class="dash-box dash-box-color-1">
                <div class="dash-box-icon">
                    <i class="glyphicon glyphicon-cloud"></i>
                </div>
                <div class="dash-box-body">
                    <span class="dash-box-count">8,252</span>
                    <span class="dash-box-title"><b>Lesson Plan</b></span>
                </div>

                {{--
                <div class="dash-box-action">
                    <button>More Info</button>
                </div> --}}
            </div>
        </div>
    </div>



</div>
@endsection