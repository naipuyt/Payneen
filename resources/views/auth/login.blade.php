<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <!-- Left Side -->
        <div class="left-side">
            <div class="left-content">
                <img src="{{ asset('Assets/payneen.png') }}" alt="Logo" class="logo">
                <h2>Smarter Schedules, Better Results</h2>
                <p>Plan your day with precision. Optimize tasks, routes, and meetings — all in one place.</p>
            </div>
        </div>

        <!-- Right Side with card -->
        <div class="right-side">
            <div class="login-card">
                <div class="form-header">
                    <h2>Hello</h2>
                    <p>Login to continue</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group checkbox-group">
                        <label><input type="checkbox" name="remember"> Remember Me</label>
                    </div>

                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
