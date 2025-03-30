<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4 shadow" style="width: 350px;">
        <h3 class="text-center">Login</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->has('error'))
            <div class="alert alert-danger">{{ $errors->first('error') }}</div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            {{-- input data user --}}
            <button type="submit" class="btn btn-primary w-100">Login</button>
            {{-- masukin data user ke database dan redirect user ke halaman welcome jika successful --}}
        </form>
        <p class="mt-3 text-center"><a href="/register">Dont have an account?</a></p>
        {{-- redirect user ke halaman register --}}
    </div>

</body>
</html>
