
@extends('layouts.master')

@section('title')
Show Drivers Inf
@endsection
@section('content')
@if (session()->has('success'))
    <div class="alert alert-success"  role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger"   role="alert">
        {{ session('error') }}
    </div>
@endif

      <div class="row">
        <div class="col-xl-12 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
             <div class="d-block d-md-flex justify-content-between">
                <div class="d-block">
                  <h5 class="card-title pb-0 border-0">Drivers Informations </h5>
                </div>
                <div class="d-block d-md-flex clearfix sm-mt-20">
                   {{-- <div class="clearfix">
                     <div class="box">
                      <select class="fancyselect sm-mb-20 mr-20">
                        <option value="1">Some option</option>
                        <option value="2">Another option</option>
                        <option value="3">A option</option>
                        <option value="4">Potato</option>
                      </select>
                    </div>
                  </div> --}}
                   <div class="widget-search ml-0 clearfix">
                    <i class="fa fa-search"></i>
                    <input type="search" class="form-control" placeholder="Search....">
                  </div>
                 </div>
               </div>
               <div class="table-responsive mt-15">
                <table class="table center-aligned-table mb-0">
                  <thead>
                    <tr class="text-dark">
                        <th> ID</th>
                        <th> Name </th>
                        {{-- <th> Email</th> --}}
                        <th> Gender </th>
                        <th> Phone Number </th>
                        <th> City </th>
                        <th> Address </th>
                        <th> Age </th>
                        <th> Nationality</th>
                        <th> National-ID</th>
                        <th>Emergency Number </th>
                        {{-- <th>Created By </th> --}}
                        <th></th>
                        <th>Process</th>
                        <th></th>
                    </tr>
                  </thead>
                  @foreach ($driver as $driver)
                  <tbody>
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$driver->name}}</td>
                        {{-- <td>{{$driver->email}}</td> --}}
                        <td>{{$driver->gender}}</td>
                        <td>{{$driver->phone_number}}</td>
                        <td>{{$driver->city}}</td>
                        <td>{{$driver->address}}</td>
                        <td>{{$driver->age}}</td>
                        <td>{{$driver->nationality}}</td>
                        <td>{{$driver->national_id}}</td>
                        <td>{{$driver->emergency_number}}</td>
                        {{-- <td>{{$driver->Created_By}}</td> --}}
                      {{-- <td><label class="badge badge-success">Approved</label></td> --}}
                      <td><a href="{{ url('Details') }}/{{ $driver->id }}" class="btn btn-outline-success btn-md">More Info <i class="fa fa-user"></i></a></td>
                      <td><a href="{{url('edit_driver')}}/{{ $driver->id }}" class="btn btn-outline-warning btn-md">Edit  <i class="fa fa-pencil-square-o"></i></a></td>
                      <td><button type="button" class="btn btn-outline-danger btn-md" data-toggle="modal" data-target="#delete_driver{{$id = $driver->id}}">
                        Delete <i class="fa fa-trash-o"></i>
                       </button></td>
                    </tr>
                    @include('driver.delete_driver')
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
<!--=================================
wrapper -->
@endsection
