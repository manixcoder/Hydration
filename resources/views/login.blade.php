<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ config('app.name', 'Login') }}</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/fonts/font.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section class="Login-page">
        <div class="login">
            <div class="form-location">

                <div class="form-login">
                    <!-- -----------------------login-form_logo--------------------- -->
                    <div class="logoimg">
                        <figure class="Hydration-logo">
                            <img src="{{ asset('public/assets/images/hydration_logo_1.png')}}" alt="Hydration-logo">
                        </figure>
                        <!-- -----------------------login-Logo--------------------- -->
                        <div class="form-label">
                            <h3>ADMIN LOGIN</h3>
                        </div>

                        <!-- -----------------------login-input--------------------- -->
                        <div class="form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group Login-id">
                                    <input id="email" name="email" type="email" placeholder="Login ID" required class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group password">
                                    <input type="password" name="password" placeholder="Password" required class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- ------------------loginbtn----------------- -->
                                <!-- <div class="btn Butt">
                            <a href="./dashboard.html">LOGIN</a>
                        </div> -->
                                <button type="submit" class="btn Butt btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </form>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
</body>

</html>