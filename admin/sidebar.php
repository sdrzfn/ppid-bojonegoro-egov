<?php
require_once __DIR__ . '/../config/auth.php';

// Jika halaman admin wajib login, panggil require_login(); jika tidak wajib, hapus baris berikut.
// require_login();

$user = current_user(); // bisa null kalau belum login
$role = $user['role'] ?? ($_SESSION['role'] ?? null);
$name = $user['name'] ?? ($_SESSION['name'] ?? 'Guest');

?>
<div class="w-64 bg-blue-800 text-white flex flex-col">
    <div class="p-4 font-bold text-lg border-b border-blue-600">
        Admin PPID
    </div>
    <nav class="flex-1 p-2">
        <a href="../admin/index.php" class="block px-3 py-2 rounded hover:bg-blue-600">Dashboard</a>
        <a href="../admin/documents.php" class="block px-3 py-2 rounded hover:bg-blue-600">Dokumen</a>

        <?php if ($role === 'super_admin'): ?>
            <a href="../admin/users.php" class="block px-3 py-2 rounded hover:bg-blue-600">User</a>
            <a href="../admin/opd.php" class="block px-3 py-2 rounded hover:bg-blue-600">OPD</a>
            <a href="../admin/categories.php" class="block px-3 py-2 rounded hover:bg-blue-600">Kategori</a>
        <?php endif; ?>

        <a href="../admin/logout.php" class="block px-3 py-2 rounded hover:bg-red-600 mt-4">Logout</a>
    </nav>
</div>

<div class="flex-1 flex flex-col">
    <header class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-lg font-semibold">Panel Admin</h1>
        <span class="text-gray-600">Halo, <?= htmlspecialchars($name) ?></span>
    </header>
    <main class="flex-1">
