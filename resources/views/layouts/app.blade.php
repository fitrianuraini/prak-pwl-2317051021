<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Laravel App' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
   <style>
    body {
        background: linear-gradient(135deg, #fbcfe8, #db2777); /* pink muda → pink tua */
        min-height: 100vh;
        margin: 0;
        display: flex;
        flex-direction: column;
    }
    header, footer {
        text-align: center;
        padding: 1rem;
        color: #f45b98ff; /* pink tua */
    }
    header {
        font-size: 1.8rem;
        font-weight: bold;
    }
    footer {
        font-size: 0.9rem;
    }
    .container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-custom {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        padding: 2rem;
        width: 100%;
        max-width: 600px;
    }
    .title-gradient {
        background: linear-gradient(90deg, #ef90c0ff, #fa3e8dff); /* gradasi pink */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
    }
    .btn-gradient {
        background: linear-gradient(90deg, #f472b6, #ff9dceff); /* tombol pink muda → pink */
        color: white;
        font-weight: 600;
        border: none;
        border-radius: 12px;
        transition: 0.3s;
    }
    .btn-gradient:hover {
        background: linear-gradient(90deg, #f781b6ff, #f9a8d4); /* hover pink tua → pink muda */
        color: white;
    }
</style>

</head>
<body>
    @include('component.header')

    <div class="container">
        @yield('content')
    </div>

    @include('component.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>