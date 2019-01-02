@extends('layouts.global')
@section('pageTitle') Create Category @endsection
@section('content')
    <div class="col-md">
            @if(session('status'))
            <div class="alert alert-success">
            {{session('status')}}
            </div>
            @endif
    <form 
        action="{{route('categories.store')}}"
        enctype="multipart/form-data"
        method="POST"
        class="bg-white shadow-sm p-3">
    
        @csrf

        <label>Category Name</label>
        <input type="text" name="name" class="form-control">
        <br>
        <label>Category Image</label>
        <input type="file" name="image" class="form-control">
        <br>
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
    </div>
@endsection