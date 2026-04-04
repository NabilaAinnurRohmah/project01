<!DOCTYPE html>
<html>
    <head>
        <title>
            Lupa Password
        </title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body class="forgot-page">
        <div class="login-box">

            @if(isset($step) && $step == 'reset')

        <h2>Lupa Password</h2>

        @if(session('error'))
        <p class="error">{{session('error')}}</p>
        @endif

        <form method="POST" action="/forgot-password">
            @csrf

            <input type="text" name="username" placeholder="username...." required>

            <button type="submit">Next</button>
        </form>
        @else

        <h2>New Password</h2>
        <form method="POST" action="/reset-password">
            @csrf

            <div class="forgotpass-box">
            <input type="password" id="password" name="password" placeholder="new password..." required>
            <button type="button" onclick="showPassword('password')">Lihat</button>
            </div>

            <div class="forgotpass-box">
            <input type="password" id="confirm_password" name="confirm_password" placeholder="confirm password..." required>
            <button type="button" onclick="showPassword('confirm_password')">Lihat</button>
            </div>

            <button type="submit">Save</button>
        </form>
        @endif

        <a href="/login">Back to Login</a>
        </div>
    </body>
</html>

<script>
function showPassword(id) {
    var x = document.getElementById(id);

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>