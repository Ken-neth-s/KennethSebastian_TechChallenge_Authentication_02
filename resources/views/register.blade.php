<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/register" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>
        {{-- input nama --}}

        <label>Email:</label>
        <input type="email" name="email" required><br>
        @if($errors->has('email'))
            <p style="color: red;">{{ $errors->first('email') }}</p>
        @endif
        {{-- input email tetapi jika emailnya sama bakal dibalikin dan minta input ulang pake email beda --}}

        <label>Password:</label>
        <input type="password" name="password" required><br>
        {{-- input password --}}

        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required><br>
        {{-- konfirmasi passwordnya --}}

        <button type="submit">Register</button>
    </form>

    <p>Already have an account?<a href="/login">Login</a></p>
</body>
</html>
