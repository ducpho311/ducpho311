@extends('client.layouts.master')

@section('client-content')
<section class="login-area pt-50 pb-100" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login" id="loginForm">>
                    <h3 class="text-center mb-60">Đăng ký</h3>
                    <form action="#">
                        <label for="name">Họ tên <span>**</span></label>
                        <input id="name" type="text" placeholder="Nguyễn Văn A">
                        <label for="email-id">Email  <span>**</span></label>
                        <input id="email-id" type="text" placeholder="a@gmail.com">
                        <label for="pass">Password <span>**</span></label>
                        <input id="pass" type="password" placeholder="12345678">
                        <div class="mt-10"></div>
                        <button class="os-btn w-100">Đăng ký</button>
                        <div class="or-divide"><span>hoặc</span></div>
                        <a href="{{ route('client.login') }}"  class="os-btn os-btn-black w-100">Đăng nhập</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection