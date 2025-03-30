<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4 shadow" style="width: 350px;">
        <h3 class="text-center">Welcome!</h3>
        <p class="text-center">Login Successful</p>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger w-100">Logout</button>
        {{-- logout user dan redirect balik ke halaman login --}}
        </form>
    </div>

</body>
</html>
