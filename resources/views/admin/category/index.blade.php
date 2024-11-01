@extends('layouts.admin')
@section('title','Categories')

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Categories</h3>

    </div>
</div>
    <div class="card-body p-0">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div>
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 5%">
                      ID
                  </th>
                  <th>
                      Title
                  </th>
                  <th  style="width: 20%"  class="text-center">Updated</th>
                  <th style="width: 15%"  class="text-center">
                    Actions
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ( $categories as $category )
              <tr>
                  <td>
                      {{$category->id}}
                  </td>
                  <td>{{$category->title}}</td>
                  <td  class="text-center">{{$category->updated_at}}</td>
                  <td class="project-actions text-right">
                      <a href="{{route('category.edit',$category->id)}}" class="btn btn-info btn-sm">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <form class="d-sm-inline-block" action="{{route('category.destroy',$category->id)}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button  class="delete-btn btn btn-danger btn-sm" type="submit"><i class="fas fa-trash mr-2"></i>Delete</button>
                      </form>
                      {{-- <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash"></i>
                          Delete
                      </a> --}}
                  </td>
              </tr>
              @endforeach

          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
