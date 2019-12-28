@extends('admin.layout.main')

@section('title', 'Category')

@section('content')
<section class="content">
  <div class="box">
    <div class="box-header with-border">
    @if($message = Session::get('store'))
    <div class="alert alert-success alert-dismissible">
      <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i>Alert!</h4>
      {{$message}}
    </div>
    @endif
    @if($message = Session::get('update'))
    <div class="alert alert-info alert-dismissible">
      <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i>Alert!</h4>
      {{$message}}
    </div>
    @endif
    @if($message = Session::get('delete'))
    <div class="alert alert-danger alert-dismissible">
      <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i>Alert!</h4>
      {{$message}}
    </div>
    @endif
      <a class="btn btn-primary" href="{{ url('category/create')}}">Create new</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th style="width: 10px">No</th>
          <th>Category Name</th>
          <th>Action</th>
        </tr>
        @foreach( $category as $row )
        <tr>
          <th>{{ $loop->iteration }}</th>
          <td>{{ $row->name }}</td>
          <td>
            <form action='{{url("/category/edit/".$row->id)}}' method="get" style="display:inline-block;">
            <button class="badge btn-warning ms">Edit</button>
            </form>
            <form action='{{url("/category/delete/".$row->id)}}' method="post" style="display:inline-block;">
            @method('delete')
            @csrf
            <button class="badge btn-danger ms">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</section>
@endsection