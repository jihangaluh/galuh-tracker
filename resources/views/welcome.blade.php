<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galuh Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .welcome-container {
            border: 2px solid #007bff; /* Ganti warna sesuai keinginan */
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
            background-color: #f8f9fa; /* Warna latar belakang */
        }
    </style>
</head>
<body>
    <div class="container text-center welcome-container fade-in">
        <h1>Selamat Datang di Galuh Tracker</h1>
        <p>Atur keuanganmu dengan lebih bijak. Catat pengeluaranmu di Galuh Tracker.</p>
        <a href="{{ route('transactions.index') }}" class="btn btn-primary mt-3">Lihat Transaksi</a>
    </div>
</body>
</html>