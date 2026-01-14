<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarone Coffee - Savor the Perfect Brew</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fdf5e6; /* Warna krem lembut sesuai gambar */
        }

        /* Navbar Styling */
        .navbar {
            background-color: transparent !important;
            padding: 20px 0;
        }
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            color: #5d4037 !important;
            letter-spacing: 2px;
        }
        .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin: 0 10px;
        }

        /* CSS Hero Section */
        .hero-section {
            height: 90vh;
            /* Ganti 'coffee-bg.jpg' dengan path gambar Anda */
            background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)),
                        url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.1rem;
            max-width: 500px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        /* Button Styling */
        .btn-custom {
            background-color: #c4a484; /* Warna cokelat muda sesuai gambar */
            color: white;
            padding: 12px 35px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #a6896a;
            color: white;
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .hero-content h1 { font-size: 3rem; }
        }

        /* CSS ABOUT */
    .why-choose-us h2 {
        font-size: 3.5rem;
    }

    .ls-2 {
        letter-spacing: 2px;
    }

    @media (max-width: 768px) {
        .why-choose-us h2 {
            font-size: 2.5rem;
        }
    }

    /* CSS Kartu Menu */
    .menu-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efek hover agar kartu sedikit terangkat saat disentuh kursor */
    .menu-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }

    .menu-card h4 {
        color: #333;
        font-family: 'Poppins', sans-serif;
    }

    /* CSS CONTACTME */
    /* Styling Tambahan */
    .contact-icon {
        width: 50px;
        height: 50px;
        background-color: #fdf5e6;
        color: #c4a484;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        font-size: 1.2rem;
    }

    .custom-input {
        background-color: #f8f9fa;
        border: 1px solid #eee;
        padding: 12px 15px;
        border-radius: 8px;
    }

    .custom-input:focus {
        background-color: #fff;
        border-color: #c4a484;
        box-shadow: 0 0 0 0.25rem rgba(196, 164, 132, 0.1);
    }

    /* Pastikan Font Playfair terload di head sebelumnya */
    .contact-section h2 {
        letter-spacing: -1px;
    }

    /* Ikon (Gunakan Bootstrap Icons CDN di Head jika belum) */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");
    </style>
</head>
<body>

    @include('landingpage.navbar')
    @include('landingpage.hero')
    @include('landingpage.about')
    @include('landingpage.menu')
    @include('landingpage.contactme')
    @include('landingpage.carers')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
