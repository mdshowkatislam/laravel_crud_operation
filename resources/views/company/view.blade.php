@extends('layouts.app')

@section('content')

    <div class="container ">
        <div class="col-md-6 justify-content-center">
            <img src="{{asset('image/com_img') }}/{{ $view_data->image }}" alt="not found" height="40" width="50">
            <div class="d-flex  justify-content-center"   >

            <div class=" card card-body">
                       Name:<p>{{ $view_data->name }} </p>
                       email:<p>{{ $view_data->email }} </p>
                        address:<p>{{ $view_data->address }} </p>

                    </div>
                    <div class="card card-body">

                         link:<p>{{ $view_data->link }} </p>
                         image_name:<p>{{ $view_data->image }} </p>
                       image_view: <img src="{{ asset('storage/image/') }}/{{ $view_data->image }}" alt="" width=" 70px" height="80px" >
                     </div>
             </div>
        <div class="card">

    </div>

    @endsection
