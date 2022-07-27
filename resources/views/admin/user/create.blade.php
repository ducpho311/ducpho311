@extends('layout.master')
@section('title', 'Tạo mới người dùng')
@section('content-title', 'Tạo mới người dùng')

@section('content')

<div class="col-lg-12">
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Tên User</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên User">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Nhập email">
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
        </div>
        <div class="form-group">
            <label for="">Mã tai khoan</label>
            <input type="text" class="form-control" name="username" placeholder="Nhập mã user">

        </div>
        <div class="form-group">
            <label for="">Birthday</label>
            <input type="date" name="birthday" class="form-control" placeholder="Nhập ngày sinh">
        </div>
        <div class="form-group">
            <label for="">SDT</label>
            <input type="text" name="phone" class="form-control" placeholder="Nhập sdt">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar" class="form-control" placeholder="avatar">
        </div>

        <div class="form-group">
            <label>Quyền</label><br>
            <input type="radio" name="role" value="1">Giám đốc
            <input type="radio" name="role" value="0">Nhân viên
        </div>
        <div class="form-group">
            <label>Trạng thái</label><br>
            <input type="radio" name="status" value="1">Kích hoạt
            <input type="radio" name="status" value="0">Không kích hoạt
        </div>
        <div class="form-group">
            <label for="">Phòng Ban</label>
            <select name="room_id" class="form-control">
                 @foreach($room as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
            <button type="submit" class="btn btn-primary ">Thêm mới</button>
            <button type="reset" class="btn btn-default">Reset</button>
    </form>

</div>
@endsection