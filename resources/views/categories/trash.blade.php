@extends('layouts.global')
@section('pageTitle')
    Trash Categories
@endsection
@section('content')
    <div class="row">
        <div class="col-md">
            <form action="{{route('categories.index')}}">
                <div class="input-group">
                <input type="text" name="name" value="{{Request::get('name')}}"
                    class="form-control"
                    placeholder="Filter by category name">
                    <div class="input-group-append">
                        <input type="submit" value="Filter" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link" href="
                    {{route('categories.index')}}">Published</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="
                    {{route('categories.trash')}}">Trash</a>
                </li>
            </ul>
        </div>
    </div>
        <hr class="my-3">

        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="4">Data</th>
                        </tr>
                            
                        <tr>
                            <th>Nama</th>
                            <th>Slug</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   
@endsection