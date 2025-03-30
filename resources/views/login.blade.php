<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { display: flex; justify-content: center; align-items: center; height: 100vh; font-family: Arial, sans-serif; }
        .container { text-align: center; padding: 20px; border: 1px solid #ccc; border-radius: 8px; width: 300px; }
        .message { color: red; font-size: 14px; margin-bottom: 10px; }
    </style>
</head>
<body>

    <div class="container">
        <h3>Login</h3>

        @if(session('success'))
            <p class="message" style="color: green;">{{ session('success') }}</p>
        @endif

        @if($errors->has('error'))
            <p class="message">{{ $errors->first('error') }}</p>
        @endif

        <form action="/login" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit">Login</button>
        </form>
        <p><a href="/register">Register</a></p>
    </div>

</body>
</html>
