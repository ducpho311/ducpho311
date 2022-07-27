@extends('client.layouts.master')

@section('client-content')
<section class="login-area pt-50 pb-100" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <div class="basic-login" id="signUpForm">
                    <h3 class="text-center mb-60">Đăng nhập</h3>
                    <form action="#">
                        <label for="name">Email <span>**</span></label>
                        <input id="name" type="text" placeholder="a@gmail.com">
                        <label for="pass">Password <span>**</span></label>
                        <input id="pass" type="password" placeholder="12345678">
                        <div class="login-action mb-20 fix">
                            <span class="log-rem f-left">
                                <input id="remember" type="checkbox">
                                <label for="remember">Nhớ mật khẩu?</label>
                            </span>
                            <span class="forgot-login f-right">
                                <a href="#">Quên mật khẩu?</a>
                            </span>
                        </div>
                        <button class="os-btn w-100">Đăng nhập</button>
                        <div class="or-divide"><span>or</span></div>
                        <a href="{{ route('client.signup') }}"  class="os-btn os-btn-black w-100">Đăng ký</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection