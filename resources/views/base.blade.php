<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payneen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Inter:wght@400;600&display=swap" rel="stylesheet">    <style>
        .img-hover {
            transition: transform 0.3s ease; /* Durasi & kelancaran */
        }

        .img-hover:hover {
            transform: scale(1.05); /* Zoom sedikit */
        }

        /* Pastikan layout */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Tinggi minimal sesuai layar */
            background-color: #FBFDF0;
            min-width: 0px;
        }

        main {
            flex: 1 0 auto; /* Pastikan main mengisi ruang */
        }

        footer {
            flex-shrink: 0; /* Footer tidak menyusut */
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <main class="container my-4">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>