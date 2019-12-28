@extends('admin.layout.main')

@section('title', 'Create Category')

@section('content')
<section class="content">
<div class="box">
    <div class="box-header with-border">
        <a href="{{url('category')}}" class="btn btn-warning">
            <i class="fa fa-arrow-left"></i> Back
        </a>
        
    </div>
    <div class="box-body">
        <form role="form" action='{{url("category/store")}}' method="post">
        @csrf
            <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        
    </div>
    <!-- /.box-footer-->
</div>
</section>
@endsection