<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LOGIN PAGE</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- GOOGLE FONT API -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('customer/main.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('customer/css/login.css') }}" media="screen">


</head>

<body>
    <div class="container-fluid container-section">
        <div class="row">
            <div class="col-md-6 img-background">
            </div>
            <div class="col-md-6">
                <div class="customer-login">
                    <h2> WELCOME TO OUR CUSTOMER PORTAL</h2>
                    <div class="under-line img12 text-center">
                        <img src="{{ asset('customer/img/line.png') }}" alt="">
                    </div>
                    <form class="customer-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            {{-- error handler --}}
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="customer-btn">
                            <div class="row">
                                <button type="submit" class="btn btn-primary">{{ __('LOGIN') }}</button>
                            </div>

                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <div class="form-group">
                                        <a href="{{ route('register') }}">Don't have an Account? Create account</a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 text-right">
                                    <div class="form-group">
                                        <!-- <a class="" href="#">Forgot password?</a> -->
                                        {{-- to be reviewed --}}
                                        @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p>Sign in with :</p>
                            <div class="row btn-cust">
                                <div class="col-md-6 ">
                                    <a href="#" class="btn btn-gmail"><i class="fab fa-google-plus-g"></i> Google</a>
                                </div>
                                <div class="col-md-6 ">
                                    <a href="{{url('/redirect')}}" class="btn btn-fb"><i class="fab fa-facebook-f"></i>
                                        Facebook</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('customer/assets/scripts/main.js') }}"></script>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script>
        $(document).ready(function () {
            var email = sessionStorage.getItem('email');
            $('#email').val(email);
        });

    </script>
</body>

</html>
