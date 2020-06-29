@extends('layouts.auth.master')

@section('title')
    Register
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
            <span class="login100-form-title p-t-25">
                PropShare
            </span>
            <span style="text-align: center; width: 100%;">
                Access |  Liquidity | Management
            </span>
            <div class="wrap-login100 p-t-40 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w" action="{{ url('register') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required">
                        <input class="input100" type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required">
                        <input class="input100" type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required">
                        <input class="input100" type="number" name="age" placeholder="Age" value="{{ old('age') }}">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required">
                        <input class="input100 datepicker" type="text" name="date_of_birth" placeholder="Date Of Birth" autocomplete="off" value="{{ old('date_of_birth') }}">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required">
                        <select class="input100" type="text" name="sun_sign" id="sun_sign" style="border: none; -webkit-appearance: none; -moz-appearance: none; color: #8e8fa0;">
                            <option value="">Select Sun Sign</option>
                            <option @if(old('sun_sign') == 'Aries') selected @endif>Aries</option>
                            <option @if(old('sun_sign') == 'Taurus') selected @endif>Taurus</option>
                            <option @if(old('sun_sign') == 'Gemini') selected @endif>Gemini</option>
                            <option @if(old('sun_sign') == 'Cancer') selected @endif>Cancer</option>
                            <option @if(old('sun_sign') == 'Leo') selected @endif>Leo</option>
                            <option @if(old('sun_sign') == 'Virgo') selected @endif>Virgo</option>
                            <option @if(old('sun_sign') == 'Libra') selected @endif>Libra</option>
                            <option @if(old('sun_sign') == 'Scorpio') selected @endif>Scorpio</option>
                            <option @if(old('sun_sign') == 'Sagittarius') selected @endif>Sagittarius</option>
                            <option @if(old('sun_sign') == 'Capricorn') selected @endif>Capricorn</option>
                            <option @if(old('sun_sign') == 'Aquarius') selected @endif>Aquarius</option>
                            <option @if(old('sun_sign') == 'Pisces') selected @endif>Pisces</option>
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required" >
                        <input class="input100" type="password" name="password" placeholder="Password" autocomplete="new-password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Required" >
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>
                    <a href="{{ url('login') }}" class="p-t-30" style="width: 100%; text-align: center;">Already a member?</a>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
@endsection

@section('js')
    <script>
        if('{{ old('sun_sign')}}' != ''){
            $('#sun_sign').css('color', '#000');
        }
        $('#sun_sign').change(function () {
            if($(this).val() != ''){
                $(this).css('color', '#000');
            }else{
                $(this).css('color', '#8e8fa0');
            }
        });

        $( ".datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '-100:-18',
            maxDate: '-18y'
        });
    </script>
@endsection
