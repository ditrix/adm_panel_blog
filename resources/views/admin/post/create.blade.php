{{-- views/admin/post/create  --}}

@extends('layouts.admin')
@section('title','Create post')

@section('content')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Create post</h3>

            </div>

            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('post.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputStatus">Category</label>
                        <select id="inputStatus" class="form-control custom-select" name="cat_id">
                          <option selected="" disabled="">Select one</option>
                          @if(isset($categories))
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                          @endif
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="postTitle">Title</label>
                    <input type="text" class="form-control" id="postTitle" name="title" placeholder="Post title" required>
                  </div>

                  <div class="form-group">
                    <label for="postText">Post</label>
                    <textarea class="form-control" id="postText" name="text" placeholder="Post text" required ></textarea>

                  </div>

                  <div class="form-group">
                        <label for="feature_image">Feature Image</label>
                        <div>
                        <img src="" class="img_uploaded" alt="" width="30%">
                        <input type="text" class="form-control"  id="feature_image" name="img" value="" readonly style="visibility: hidden;">
                        </div>
                        <a href="" class="btn btn-primary mt-2 popup_selector" data-inputid="feature_image">Select Image</a>
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add post</button>
                </div>
              </form>
          </div>
        </div>
    </div>
    </div>



@endsection
@push('script')



@endpush
