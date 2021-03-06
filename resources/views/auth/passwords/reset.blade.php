<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PASSWORD RESET PAGE</title>
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
                    <form class="customer-form" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ $email ?? old('email') }}" aria-describedby="emailHelp"
                                placeholder="Enter email" required autocomplete="email" autofocus>
                            {{-- error handler --}}
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        {{-- password --}}
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Password" required autocomplete>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        {{-- confirm password --}}
                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input type="password" class="form-control @error('password-confirm') is-invalid @enderror"
                                id="password-confirm" name="password_confirmation" placeholder="Password Confirm"
                                required autocomplete="new-password">
                        </div>

                        {{-- submit button --}}
                        <div class="customer-btn">
                            <div class="row">
                                <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
                            </div>
                            <hr>
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
