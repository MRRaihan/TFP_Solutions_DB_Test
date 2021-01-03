<!DOCTYPE html>
<html>
<head>
    <title>Login :: TFP_Solutions_BD</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/lon.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/lonc.css')}}">
</head>

<body>
<img class="wave" src="{{asset('assets/frontend/images/wave.png')}}">
<div class="container">

    <div class="img">
        <img src="{{asset('assets/frontend/images/as.png')}}" style="width: 289px;">
    </div>
    <div class="login-content">

        <form action="{{route('login')}}" method="POST" class="sign-in-form">
            @csrf

            <img src="{{asset('assets/frontend/images/profilepic.png')}}">
            <h2 class="login-title">Client Login</h2>
            <div class="login-input-field">
                <i class="fas fa-envelope"></i>
                <input  id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Email" />
            </div>
                @error('email')
                <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password" />
            </div>
                @error('password')
                <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="vehicle1" style=" color: #999;
                    font-size: .9rem; "><small>Remember!</small></label>
                <a href="#"><small>Forgot Password?</small></a>
            </div><br>
            <button name="login-btn" class="btn">LOGIN</button><br><br>
            <p><small> (<a href="{{route('client.registration')}}" style="color: red;
                    font-size: 0.9rem;"> Create account now</a>)</small>
            </p>


        </form>

    </div>
</div>
<script type="text/javascript" src="{{asset('assets/frontend/js/lonc.js')}}"></script>
</body>

</html>
