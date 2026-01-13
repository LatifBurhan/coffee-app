<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Coffee Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        @include('layouts_admin.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden">
            @include('layouts_admin.nav')

            <main class="flex-1 overflow-x-hidden overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>




    <script>
    function openEditModal(menu) {
        // Set action form URL secara dinamis
        const form = document.getElementById('editForm');
        form.action = `/admin/menu/${menu.id}`;

        // Isi field dengan data menu yang dipilih
        document.getElementById('edit_nama').value = menu.nama_menu;
        document.getElementById('edit_deskripsi').value = menu.deskripsi;
        document.getElementById('edit_harga').value = menu.harga;

        // Tampilkan modal
        document.getElementById('modalEdit').classList.remove('hidden');
    }
</script>
</body>
</html>
