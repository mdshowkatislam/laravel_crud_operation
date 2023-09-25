@extends('layouts.app')

@section('content')
<div class="container " >
    <div class="row justify-content-center" >
        <div class="col-md-8" style="background: cyan;padding:2px;width:100%">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <div >

                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr >

                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">address</th>
                            <th scope="col">link</th>
                            <th scope="col">image_tag</th>
                            <th scope="col">image</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        @foreach ($x as $item)
                        <tbody>

                          <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->link }}</td>
                            <td>{{ $item->image }}</td>
                            <td><img src="{{asset('image/com_img') }}/{{ $item->image }}" alt="not found" height="40" width="50"></td>
                            <td>

                                 <div class="d-flex">

                                    <a href="{{ route('view',$item->id) }}" class="btn btn-info btn-sm  m-1">view</a>
                                    <a href="{{ route('edit',$item->id) }}" class="btn btn-success btn-sm m-1">edit</a>
                                    <a href="{{ route('delete',$item->id) }}" class="btn btn-danger btn-sm m-1">delete</a>
                                 </div>
                            </td>


                          </tr>

                        </tbody>
                        @endforeach
                      </table>


                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
