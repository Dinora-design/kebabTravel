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
            <div class="row">
              <div class="col-md-5">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Logo</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form role="form" method="post" action="{{url('menus/logo/update/'.$photo->id)}}" > {{ csrf_field() }}
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Logo Type</label>
                          <input type="text" name="logo_name" class="form-control" id="logo_name" placeholder="Enter logo type">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Logo image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"  class="custom-file-input " name="logo_image" id="logo_image">
                                    <label class="custom-file-label file-name" for="exampleInputFile" >
                                </label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text ">Upload</span>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
    </div>
@endsection