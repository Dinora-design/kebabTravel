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
              <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Menu</h3>
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
                    <form role="form" method="post" action="{{url('menus/update/'.$menuData->id)}}" enctype="multipart/form-data"> {{ csrf_field() }}
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">City name</label>
                          <input type="text" name="city_name" class="form-control" id="city_name" placeholder="Enter city name" value="{{$menuData['city_name']}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">City tag</label>
                          <input type="text" name="city_tag" class="form-control" id="city_tag" placeholder="Enter city tag"  value="{{$menuData['city_tag']}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">City title</label>
                            <input type="text" name="city_title" class="form-control" id="city_title" placeholder="Enter city title"  value="{{$menuData['city_title']}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">City img</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input " name="city_img" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Add City img</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input " name="city_img1" id="city_img1">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Add City img</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input " name="city_img2" id="city_img2">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Add City img</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input " name="city_img3" id="city_img3">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">City text</label>
                          <textarea class="textarea" placeholder="text" name="city_text" id="city_text"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$menuData['city_text']}}</textarea>
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