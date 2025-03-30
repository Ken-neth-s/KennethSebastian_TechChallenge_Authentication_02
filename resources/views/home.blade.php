<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body { display: flex; justify-content: center; align-items: center; height: 100vh; font-family: Arial, sans-serif; }
        .container { text-align: center; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
    </style>
</head>
<body>

    <div class="container">
        <h3>Welcome, {{ Auth::user()->name }}!</h3>
        <p>Login Successful</p>

        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

</body>
</html>
