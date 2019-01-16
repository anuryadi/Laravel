@extends('layouts.global')
@section('pageTitle')
    Books List
@endsection
@section('book')
    active
@endsection
@section('content')
    <div class="row">
        <div class="col-md">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><b>Cover</b></th>
                    <th><b>Title</b></th>
                    <th><b>Author</b></th>
                    <th><b>Status</b></th>
                    <th><b>Categories</b></th>
                    <th><b>Stock</b></th>
                    <th><b>Price</b></th>
                    <th><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>
                                @if($book->cover)
                                    <img src="{{asset('storage/' . $book->cover)}}"width="96px"/>
                                @endif
                            </td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>
                                @if($book->status == "DRAFT")
                                    <span class="badge bg-dark text-white">{{$book->status}}
                                    </span>
                                @else
                                    <span class="badge badge-success">{{$book->status}}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <ul class="pl-3">
                                    @foreach ($book->categories as $category)
                                        <li>{{$category->name}}</li>    
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{$book->stock}}</td>
<td>{{$book->price}}</td>
<td>
[TODO: actions]
    </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection