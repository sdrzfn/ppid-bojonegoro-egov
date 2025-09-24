<?php

// Load koneksi DB (pastikan path benar)
require_once __DIR__ . '/database.php'; // menghasilkan $conn (mysqli)

// Redirect helper
function require_login()
{
    if (empty($_SESSION['user_id'])) {
        // Jika file login.php ada di folder admin dan file ini di-include dari admin/*,
        // redirect ke login.php pada folder yang sama
        header('Location: ../admin/login.php');
        exit;
    }
}

// Ambil data user lengkap dari DB (atau null kalau tidak ada)
function current_user()
{
    global $conn;
    if (empty($_SESSION['user_id']))
        return null;

    $id = (int) $_SESSION['user_id'];
    $sql = "SELECT u.*, o.name AS opd_name FROM users u LEFT JOIN opd o ON u.opd_id=o.id WHERE u.id = {$id} LIMIT 1";
    $res = $conn->query($sql);
    if ($res && $res->num_rows) {
        return $res->fetch_assoc();
    }
    return null;
}

// Jika session user_id ada tetapi role/name belum diset, isi dari DB
if (!empty($_SESSION['user_id'])) {
    $user = current_user();
    if ($user) {
        // Hanya set jika belum ada, jadi tidak menimpa session yang sudah valid
        if (empty($_SESSION['role']))
            $_SESSION['role'] = $user['role'] ?? null;
        if (empty($_SESSION['name']))
            $_SESSION['name'] = $user['name'] ?? null;
        if (empty($_SESSION['opd_id']))
            $_SESSION['opd_id'] = $user['opd_id'] ?? null;
    } else {
        // Jika user_id tidak ditemukan di DB, bersihkan session supaya tidak error terus
        unset($_SESSION['user_id'], $_SESSION['role'], $_SESSION['name'], $_SESSION['opd_id']);
    }
}
