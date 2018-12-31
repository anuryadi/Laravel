@extends('layouts.global')
@section('title')
    Edit
@endsection
@section('pageTitle')
    Edit List
@endsection
@section('content')
{{-- user yang akan diedit adalah {{$user->email}} --}}
    <div class="mol-md">
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>    
        @endif
        <form action="{{route('users.update', ['id'=>$user->id])}}" method="POST"
                enctype="multipart/form-data" class="bg-white shadow-sm p-3">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <label for="name">Name</label>
            <input type="text" name="name" id="name"
                value="{{$user->name}}"
                class="form-control"
                placeholder="Full Name">
                <br>
            <label for="username">Username</label>
            <input type="text" name="name" id="name"
                    value="{{$user->username}}"
                    class="form-control"
                    placeholder="Username">
                    <br>
            <label for="">Status</label>
            <br>
            <input type="radio" name="status" id="active"
                {{$user->status == "ACTIVE" ? "checked" : ""}}
                class="form-control">
            <label for="active">Active</label>
        
            <input type="radio" name="status" id="inactive"
                {{$user->status == "INACTIVE" ? "checked" : ""}}
                class="form-control">
            <label for="inactive">Inactive</label>
            <br>
            <br>
            <label for="">Roles</label>
            <br>
            <input type="checkbox" 
            {{in_array("ADMIN", json_decode($user->roles)) ? "checked" : ""}}
            name="roles[]" id="ADMIN" value="ADMIN">
            
            <label for="ADMIN">Administartor</label>
            <input type="checkbox" 
            {{in_array("STAFF", json_decode($user->roles)) ? "checked" : ""}}
                name="roles[]" id="STAFF" value="STAFF">
            <label for="STAFF">Staff</label>
            <input type="checkbox" 
            {{in_array("CUSTOMER", json_decode($user->roles)) ? "checked" : ""}}
                name="roles[]" id="CUSTOMER" value="CUSTOMER">
            <label for="CUSTOMER">Customer</label>
            <br><br>

            <label for="phone">Phone number</label>
<br>
<input
type="text"
name="phone"
class="form-control"
value="{{$user->phone}}">
<br>
<label for="address">Address</label>
<textarea
name="address"
id="address"
class="form-control">{{$user->address}}
</textarea>
<br>
<label for="avatar">Avatar image</label>
<br>
Current avatar: <br>
@if($user->avatar)
<img
src="{{asset('storage/'.$user->avatar)}}"
width="120px" />
<br>
@else
No avatar
@endif
<br>
<input
id="avatar"
name="avatar"
type="file"
class="form-control">
<small
class="text-muted">Kosongkan jika tidak ingin mengubah avatar</small>
<hr class="my-3">
<label for="email">Email</label>
<input
value="{{$user->email}}"
disabled
class="form-control"
placeholder="user@mail.com"
type="text"
name="email"
id="email"/>
<br>
<input
class="btn btn-primary"
type="submit"
value="Save"/>
        </form>
    </div>
@endsection