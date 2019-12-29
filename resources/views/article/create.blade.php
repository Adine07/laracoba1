@extends('admin.layout.main')

@section('title', 'Create Article')

@section('content')
<section class="content">
<div class="box">
    <div class="box-header with-border">
        <a href="{{url('article')}}" class="btn btn-warning">
            <i class="fa fa-arrow-left"></i> Back
        </a>
        
    </div>
    <div class="box-body">
        <form role="form" action='{{url("article/store")}}' method="post">
        @csrf
            <div class="box-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Title Name" name="title">
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <textarea id="editor1" name="content" rows="10" cols="80">
                </textarea>
            </div>
            <div class="form-group">
                <label for="created_by">Author</label>
                <select name="created_by" id="created_by" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">status</label><br>
                <input type="radio" name="status" value="1"> Aktive
                <input type="radio" name="status" value="0"> Non-Aktive
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