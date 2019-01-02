@extends('layouts.global')
@section('pageTitle')
    Detail Category
@endsection
@section('content')
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <label><b>Category Name</b></label><br>
                {{$category->name}}
                <br><br>

                <label><b>Category Slug</b></label><br>
                {{$category->slug}}
                <br><br>

                <label><b>Category Image</b></label><br>
                @if ($category->image)
                    <img src="{{asset('storage/' . $category->image)}}" width="200px">
                @endif
            </div>
        </div>
    </div>
@endsection