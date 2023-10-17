@extends('backend.layouts.app')
@section('content')
 
 
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0 text-dark">@lang('Dashboard')</h1> --}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('Home')</a></li>
                        <li class="breadcrumb-item active">@lang('Dashboard')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <style>
        .content-wrapper {
          

            background-image: url(/dashboard_background2.jpg) !important;
            background-repeat: no-repeat !important;
            background-size: 100% 100% !important;
            overflow: hidden;
            opacity: 1;

        }
    </style>
    <section class="content">
        <div class="container-fluid">
         
            <div class="row">

               
            </div>
        </div>
    </section>

@endsection
