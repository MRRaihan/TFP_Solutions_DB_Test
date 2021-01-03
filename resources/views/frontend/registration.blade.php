<!DOCTYPE html>
<html>

<head>
    <title>Registration :: TFP_Solutions_BD</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/lon.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/lonc.css')}}">
</head>

<body>
<img class="wave" src="{{asset('assets/frontend/images/wave.png')}}">
<div class="container">
    <div class="img">
        <img src="{{asset('assets/frontend/images/as.png')}}" style="width: 289px;">
    </div>

    <div class="login-content">

        <form action="{{ route('register') }}" method="POST" class="sign-in-form">
            @csrf

            <img src="{{asset('assets/frontend/images/profilepic.png')}}">
            <h2 class="login-title">Client Info</h2>
            <div class="login-input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" class="from-control @error('name') is-invalid @enderror" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Clientname" />
            </div>
                @error('name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" class="from-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="abc@gmail.com" />
            </div>
                @error('email')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="from-control @error('password') is-invalid @enderror" value="{{ old('password') }}" autocomplete="password" autofocus placeholder="Password" />
            </div>
                @error('password')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <button type="submit" name="signup-btn" class="btn">Sign up</button>
            <br><br>
        </form>

        {{--<a href="{{route('client.login')}}" style="color: red;font-size: 0.9rem;">Login</a>--}}
    </div>
</div>
<script type="text/javascript" src="{{asset('assets/frontend/js/lonc.js')}}"></script>
</body>

</html>



