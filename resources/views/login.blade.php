<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <form action="/login" method="POST">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required><br>
        {{-- input email yang sudah ter registrasi --}}

        <label>Password:</label>
        <input type="password" name="password" required><br>
        {{-- input password untuk email yang sudah diregister --}}

        <button type="submit">Login</button>
    </form>

    <p>Dont have an account?<a href="/register">Register now</a></p>
</body>
</html>
