@extends('Admin.layouts.app', ['sidebar' => true])
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>EastLine Menus</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Menus</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="row ">
              <div class="col-md-12">
                @if (Session::has('success_message'))
                  <div class="alert alert-success mt-2 alert-dismissible fade show" role="alert">
                    {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Menus</h3>
                    <a href="{{ route('menus/add-menu')}}" style="max-width: 150px; float:right; display:inline-block" class="btn btn-block btn-success">Add menu</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>City_Name</th>
                        <th>City_Title</th>
                        <th>City_img</th>
                        <th>City_img1</th>
                        <th>City_img2</th>
                        <th>City_img3</th>
                        <th>City_text</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($menus as $menu)    
                            <tr>
                                <td>{{$menu->id}}</td>
                                <td>{{$menu->city_name}}</td>
                                <td>{{$menu->city_title}}</td>
                                <td><img width="60px" src="{{url('Admin/img/city_images/'.$menu->city_img)}}" alt="hey"></td>
                                <td><img width="60px" src="{{url('Admin/img/city_images/'.$menu->city_img1)}}" alt=""></td>
                                <td><img width="60px" src="{{url('Admin/img/city_images/'.$menu->city_img2)}}" alt=""></td>
                                <td><img width="60px" src="{{url('Admin/img/city_images/'.$menu->city_img3)}}" alt=""></td>                                
                                <td>{{ Str::limit($menu->city_text, 150)}}</td>
                                <td>
                                  <a class="btn btn-warning" href="{{url('menus/store/'.$menu->id)}}">Edit</a>
                                  &nbsp;
                                  <a class=" mt-3 btn btn-danger " href="{{url('menus/delete-menu/'.$menu->id)}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
            <!-- /.row -->
          </section>
    </div>
@endsection