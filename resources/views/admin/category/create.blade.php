@extends('layouts.admin')
@section('title','Create category')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
    </div>
</div>
<div class="col-lg-12">
    <!-- general form elements -->

    <div class="card card-primary">
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
    <!-- /.card -->


  </div>
@endsection
