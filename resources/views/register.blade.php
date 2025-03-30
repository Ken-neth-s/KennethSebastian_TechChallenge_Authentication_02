<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body { display: flex; justify-content: center; align-items: center; height: 100vh; font-family: Arial, sans-serif; }
        .container { text-align: center; padding: 20px; border: 1px solid #ccc; border-radius: 8px; width: 300px; }
        .message { color: red; font-size: 14px; margin-bottom: 10px; }
    </style>
</head>
<body>

    <div class="container">
        <h3>Register</h3>

        @if($errors->any())
            <p class="message">{{ $errors->first() }}</p>
        @endif

        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required><br><br>
            <button type="submit">Register</button>
        </form>
        <p><a href="/login">Login</a></p>
    </div>

</body>
</html>
