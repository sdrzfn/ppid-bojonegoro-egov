<?php
include("../config/database.php"); // sesuaikan path config

// Data awal untuk seeding
$users = [
    [
        "name" => "Super Admin",
        "email" => "superadmin@ppid.go.id",
        "password" => password_hash("super123", PASSWORD_DEFAULT),
        "role" => "ppid_admin" // super admin
    ],
    [
        "name" => "Admin Dinas Pendidikan",
        "email" => "disdik@ppid.go.id",
        "password" => password_hash("disdik123", PASSWORD_DEFAULT),
        "role" => "opd_admin"
    ],
    [
        "name" => "Admin Dinas Kesehatan",
        "email" => "dinkes@ppid.go.id",
        "password" => password_hash("dinkes123", PASSWORD_DEFAULT),
        "role" => "opd_admin"
    ],
    [
        "name" => "Admin Dinas PU",
        "email" => "dpu@ppid.go.id",
        "password" => password_hash("dpu123", PASSWORD_DEFAULT),
        "role" => "opd_admin"
    ],
];

// Insert ke database
foreach ($users as $u) {
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $u['name'], $u['email'], $u['password'], $u['role']);
    $stmt->execute();
}

echo "Seeder berhasil dijalankan, data users sudah masuk! ✅";
