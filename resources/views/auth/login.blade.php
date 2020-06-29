@extends('layouts.auth.master')

@section('title')
    Login
@endsection

@section('body')
    <div class="limiter">
        @if ($errors->any())
            <div class="alert alert-danger" style="text-align: center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w" action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <span class="login100-form-title">
                        PropShare
                    </span>
                    <span class="p-b-51" style="text-align: center; width: 100%;">
                        Access |  Liquidity | Management
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <a href="{{ url('register') }}" class="p-t-30" style="width: 100%; text-align: center;">Not a member?</a>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
@endsection
