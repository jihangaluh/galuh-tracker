<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galuh Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Selamat Datang di Galuh Tracker</h1>
        <p>Atur keuanganmu dengan lebih bijak. Catat pengeluaranmu di Galuh Tracker.</p>
        <a href="{{ route('transactions.index') }}" class="btn btn-primary mt-3">Lihat Transaksi</a>
    </div>
</body>
</html>