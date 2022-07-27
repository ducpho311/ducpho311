{{-- @extends('layout.master')
@section('title', 'Quản lý người dùng')
@section('content-title', 'Quản lý người dùng')

@section('content')
<form class="row g-3 p-4" action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Tên User</label>
          <input type="text" class="form-control" name="name" value="{{$user->name ? $user->name : ''}}" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" value="{{$user->email ? $user->email : ''}}" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Mã tài khoản</label>
          <input type="text" name="username" class="form-control" value="{{$user->username ? $user->username : ''}}" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">password</label>
          <input type="password" name="password" class="form-control" value="{{$user->password ? $user->password : ''}}" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Birthday</label>
          <input type="date" name="birthday" class="form-control" value="{{ date('Y-m-d', strtotime($user->birthday ? $user->birthday : '')) }}"  id="inputCity">
        </div>
        
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Phone</label>
          <input type="text" name="phone" value="{{$user->phone ? $user->phone : ''}}" class="form-control" id="inputZip">
        </div>

        <div class="col-md-2">
            <label for="inputZip" class="form-label">Phòng ban ( room )</label>
            <select class="form-control" name="room_id" aria-label="Default select example">
                @foreach ($room as $item)
                <option value="{{$item->id}}" {{$item->id == $user->id ? 'selected' : ''}}>{{$item->name}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-3">
            <label for="formFileSm" class="form-label">Ảnh (avatar)</label>
            <input class="form-control form-control" name="avatar" id="formFileSm" type="file">
            <img class="mt-2" src="{{asset($user->avatar ? $user->avatar : '')}}" alt="" width="100">
          </div>
        <div class="col-12 mt-4">
            <label class="visually-hidden" for="inlineFormSelectPref">Role</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="1" {{$user->role == 1 ? 'checked' : ''}} id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Giám đốc
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="0" {{$user->role == 0 ? 'checked' : ''}} id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Nhân viên
                </label>
              </div>
          </div>
        <div class="col-12 mt-4">
            <label class="visually-hidden" for="inlineFormSelectPref">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="0" {{$user->status == 1 ? 'checked' : ''}} id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Kích hoạt
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="1" {{$user->status == 0 ? 'checked' : ''}} id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                  Chưa kích hoạt
                </label>
              </div>
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mt-4">Update</button>
        </div>
      </form>
@endsection --}}







@extends('layout.master')
@section('title', 'Tạo mới người dùng')
@section('content-title', 'Tạo mới người dùng')

@section('content')

<div class="col-lg-12">
  <form  action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Tên User</label>
            <input type="text" class="form-control" name="name" value="{{$user->name ? $user->name : ''}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{$user->email ? $user->email : ''}}">
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" class="form-control" name="password" value="{{$user->password ? $user->password : ''}}">
        </div>
        <div class="form-group">
            <label for="">Mã tai khoan</label>
            <input type="text" class="form-control" name="username" value="{{$user->username ? $user->username : ''}}">

        </div>
        <div class="form-group">
            <label for="">Birthday</label>
            <input type="date" name="birthday" class="form-control" value="{{ date('Y-m-d', strtotime($user->birthday ? $user->birthday : '')) }}">
        </div>
        <div class="form-group">
            <label for="">SDT</label>
            <input type="text" name="phone" class="form-control" value="{{$user->phone ? $user->phone : ''}}">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input class="form-control form-control" name="avatar" id="formFileSm" type="file">
            <img class="mt-2" src="{{asset($user->avatar ? $user->avatar : '')}}" alt="" width="100">
        </div>

        <div class="form-group">
            <label>Quyền</label><br>
            <label class="visually-hidden" for="inlineFormSelectPref">Role</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="1" {{$user->role == 1 ? 'checked' : ''}} id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Giám đốc
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="0" {{$user->role == 0 ? 'checked' : ''}} id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Nhân viên
                </label>
              </div>
        </div>
        <div class="form-group">
          <label class="visually-hidden" for="inlineFormSelectPref">Trạng thái</label>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="0" {{$user->status == 1 ? 'checked' : ''}} id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Kích hoạt
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="1" {{$user->status == 0 ? 'checked' : ''}} id="flexRadioDefault2" >
              <label class="form-check-label" for="flexRadioDefault2">
                Chưa kích hoạt
              </label>
            </div>
        </div>
        <div class="form-group">
            <label for="">Phòng Ban</label>
            <select class="form-control" name="room_id" aria-label="Default select example">
              @foreach ($room as $item)
              <option value="{{$item->id}}" {{$item->id == $user->id ? 'selected' : ''}}>{{$item->name}}</option>
              @endforeach
            </select>
        </div>
            <button type="submit" class="btn btn-primary ">Update</button>
            <button type="reset" class="btn btn-default">Reset</button>
    </form>

</div>
@endsection