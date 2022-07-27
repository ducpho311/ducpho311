@extends('layout.master')
@section('title', 'Quản lý người dùng')
@section('content-title', 'Quản lý người dùng')

@section('content')
<form action="{{route('users.create')}}" method="get" >
    <button class="btn btn-success">Tạo mới</button>
</form>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Mã nhân viên</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>avatar</th>
            <th colspan="2" class="text-center">
                Thao tác
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($user_list as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->birthday}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->password}}</td>
            
            <td><img src="{{asset($user->avatar)}}" alt="" style="width: 100px"></td>
            <td class="text-center">
                <a class="btn btn-success btn-sm rounded" href="{{route('users.edit', $user->id)}}">Edit</a>
                
            </td>
            <td class="text-center">
                <form action="{{route('users.delete', $user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div>
    {{$user_list->links()}}
</div>
@endsection