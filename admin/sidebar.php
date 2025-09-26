<?php
require_once __DIR__ . '/../config/auth.php';

// Jika halaman admin wajib login, panggil require_login(); jika tidak wajib, hapus baris berikut.
// require_login();

$user = current_user(); // bisa null kalau belum login
$role = $user['role'] ?? ($_SESSION['role'] ?? null);
$name = $user['name'] ?? ($_SESSION['name'] ?? 'Guest');

?>
<div class="w-64 bg-blue-800 text-white flex flex-col">
    <div class="p-4 font-bold text-lg border-b border-blue-600 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
        </svg>
        Admin PPID
    </div>

    <nav class="flex-1 p-2 space-y-1">
        <!-- Dashboard -->
        <a href="../admin/index.php"
            class="flex items-center gap-3 px-3 py-2 font-semibold rounded hover:bg-blue-700 hover:pl-4 transition-all duration-200 border-b border-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-200" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                    d="M10 2a1 1 0 00-.894.553L7.382 6H3a1 1 0 000 2h2l1.528 6.894a1 1 0 00.964.789h8.016a1 1 0 00.964-.789L17 8h2a1 1 0 100-2h-4.382l-1.724-3.447A1 1 0 0010 2z" />
            </svg>
            Dashboard
        </a>

        <!-- Dokumen -->
        <a href="../admin/documents.php"
            class="flex items-center gap-3 px-3 py-2 font-semibold rounded hover:bg-blue-700 hover:pl-4 transition-all duration-200 border-b border-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-200" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V7.414A2 2 0 0017.414 6L13 1.586A2 2 0 0011.586 1H4z" />
            </svg>
            Dokumen
        </a>

        <?php if ($role === 'super_admin'): ?>
            <!-- User -->
            <a href="../admin/users.php"
                class="flex items-center gap-3 px-3 py-2 font-semibold rounded hover:bg-blue-700 hover:pl-4 transition-all duration-200 border-b border-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-200" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path d="M10 3a3 3 0 100 6 3 3 0 000-6zm-7 14a7 7 0 1114 0H3z" />
                </svg>
                User
            </a>

            <!-- OPD -->
            <a href="../admin/opd.php"
                class="flex items-center gap-3 px-3 py-2 font-semibold rounded hover:bg-blue-700 hover:pl-4 transition-all duration-200 border-b border-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-200" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v12h2V5h12V3H4zm14 4H6a2 2 0 00-2 2v8h16V7z"
                        clip-rule="evenodd" />
                </svg>
                OPD
            </a>

            <!-- Kategori -->
            <a href="../admin/categories.php"
                class="flex items-center gap-3 px-3 py-2 font-semibold rounded hover:bg-blue-700 hover:pl-4 transition-all duration-200 border-b border-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-200" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M4 3h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1zM4 9h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6a1 1 0 011-1z" />
                </svg>
                Kategori
            </a>

            <!-- Kelola Berita -->
            <a href="../admin/news.php"
                class="flex items-center gap-3 px-3 py-2 font-semibold rounded hover:bg-blue-700 hover:pl-4 transition-all duration-200 border-b border-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-200" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path d="M18 8a6 6 0 01-6 6H6l-4 4V6a6 6 0 016-6h6a6 6 0 016 6z" />
                </svg>
                Kelola Berita
            </a>
        <?php endif; ?>

        <!-- Logout -->
        <a href="../admin/logout.php"
            class="flex items-center gap-3 px-3 py-2 font-semibold rounded hover:bg-red-700 hover:pl-4 transition-all duration-200 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-300" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M3 4a1 1 0 011-1h6a1 1 0 110 2H5v10h5a1 1 0 110 2H4a1 1 0 01-1-1V4zm13.293 5.293a1 1 0 010 1.414L13.414 14H9a1 1 0 110-2h4.414l2.879-2.879a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
            </svg>
            Logout
        </a>
    </nav>
</div>


<div class="flex-1 flex flex-col">
    <header class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-lg font-semibold">Panel Admin</h1>
        <span class="text-gray-600">Halo, <?= htmlspecialchars($name) ?></span>
    </header>
    <main class="flex-1">