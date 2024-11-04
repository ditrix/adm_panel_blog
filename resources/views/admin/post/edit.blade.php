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
            <form action="{{route('post.update', $post->id  )}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputStatus">Category</label>
                        <select id="inputStatus" class="form-control custom-select" name="cat_id">
                          <option selected="" disabled="">Select one</option>
                          @if(isset($categories))
                            @foreach ($categories as $category)
                                <option value="{{$category['id']}}" @if($post['cat_id'] == $category['id']) selected  @endif>{{$category->title}}</option>
                            @endforeach
                          @endif
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="postTitle">Title</label>
                      <input type="text" class="form-control" id="postTitle" name="title" value="{{$post->title}}" placeholder="Post title" required>
                    </div>
                    <div class="form-group">
                      <label for="postText">Post</label>
                      <textarea class="post_Text" name="text" required  >{{$post->text}}</textarea>
                    </div>

                    <div class="form-group">
                          <label for="feature_image">Feature Image</label><a href="" class="btn btn-primary mt-1 ml-2 popup_selector" data-inputid="feature_image">Select Image</a>
                          <div class="image-wrapper mt-2">
                          <img src="/{{$post->img}}" class="img_uploaded" alt="" width="30%">
                          <input type="text" class="form-control image-fname"  id="feature_image" name="img" value="{{$post->img}}" readonly>
                          </div>

                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update post</button>
                </div>
              </form>
          </div>
        </div>
    </div>
    </div>



@endsection
@push('script')



@endpush
