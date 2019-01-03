@extends('layouts.global')
@section('pageTitle')
    Trashed Categories
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
            <div class="col-md">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><b>Nama</b></th>
                            <th><b>Slug</b></th>
                            <th><b>Image</b></th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                                @if ($category->image)
                                    <img src="{{asset('storage/' . $category->image)}}" width="50px">
                                @endif
                            </td>
                            <td>
                                <a href="{{route('categories.restore', ['id'=> $category->id])}}" class="btn btn-primary">Restore</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <td colSpan="10">
                            {{$categories->appends(Request::all())->links()}}
                        </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
   
@endsection