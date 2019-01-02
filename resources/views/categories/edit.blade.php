@extends('layouts.global')
@section('pageTitle')
    Edit Category
@endsection
@section('content')
    <div class="col-md">
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
    <form action="{{route('categories.update', ['id' => $category->id])}}"
        enctype="multipart/form-data"
        method="POST"
        class="bg-white shadow-sm p-3">
    
        @csrf

        <input type="hidden" name="_method" value="PUT">
        <label>Category Name</label>
        <input type="text" name="name" value="{{$category->name}}" class="form-control">
        <br>

        <label>Category Slug</label>
        <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
        <br><br>

        <label>Category Image</label>
        <br>
        @if ($category->image)
            <span>Current Image</span>
            <img src="{{asset('storage/'.$category->image)}}" width="120px">
            <br><br>
        @endif
        <input type="file" name="image" class="form-control">
        <small class="text-muted">Kosongkan jika tidak ingin mengubah</small>
        <br><br>

        <input type="submit" class="btn btn-primary" value="Update">
    </form>
    </div>
@endsection