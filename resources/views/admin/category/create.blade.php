{{-- views/admin/category/create  --}}

@extends('layouts.admin')
@section('title','Create category')

@section('content')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Create caltegory</h3>

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
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="categryTitle">Title</label>
                    <input type="text" class="form-control" id="categryTitle" name="title" placeholder="Categry title" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add category</button>
                </div>
              </form>
          </div>
        </div>
    </div>
    </div>



@endsection
