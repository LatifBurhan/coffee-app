<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarone Coffee - Savor the Perfect Brew</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    @include('landingpage.navbar')
    @include('landingpage.hero')
    @include('landingpage.about')
    @include('landingpage.menu')
    @include('landingpage.contactme')
    @include('landingpage.carers')
    @include('landingpage.reservation')
    @include('landingpage.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function bukaFormLamaran(id, title) {
        // 1. Ambil elemen section dan input
        const section = document.getElementById('apply-section');
        const inputId = document.getElementById('input-job-id');
        const displayTitle = document.getElementById('display-job-title');

        // 2. Isi data lowongan ke dalam form
        inputId.value = id;
        displayTitle.innerText = title;

        // 3. Tampilkan section (hapus class hidden)
        section.classList.remove('hidden');

        // 4. Scroll otomatis ke section form agar user melihatnya
        section.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function tutupFormLamaran() {
        const section = document.getElementById('apply-section');

        // Sembunyikan kembali section
        section.classList.add('hidden');

        // Scroll kembali ke atas (opsional, misal ke list karir)
        document.getElementById('career').scrollIntoView({ behavior: 'smooth' });
    }
</script>
</body>
</html>
