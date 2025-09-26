<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../admin/login.php");
    exit;
}

include("../config/database.php");
include("../admin/header.php");
include("../admin/sidebar.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $desc = $conn->real_escape_string($_POST['description']);
    $cat_id = (int) $_POST['category_id'];
    $status = $conn->real_escape_string($_POST['status']);
    $opd_id = ($_SESSION['role'] == 'super_admin') ? (int) $_POST['opd_id'] : (int) ($_SESSION['opd_id'] ?? 0);
    $created = (int) $_SESSION['user_id'];

    // Upload file
    $file_name = $_FILES['file']['name'];
    $target = "../public/uploads/" . basename($file_name);
    move_uploaded_file($_FILES['file']['tmp_name'], $target);

    $sql = "INSERT INTO documents (title, description, file_path, category_id, opd_id, status, created_by) 
            VALUES ('$title','$desc','$target','$cat_id','$opd_id','$status','$created')";
    $conn->query($sql);
}

// Query dokumen
if ($_SESSION['role'] == 'super_admin') {
    $docs = $conn->query("SELECT * FROM documents");
} else {
    $opd_id = (int) ($_SESSION['opd_id'] ?? 0);
    if ($opd_id > 0) {
        $docs = $conn->query("SELECT * FROM documents WHERE opd_id = $opd_id");
    } else {
        $docs = false; // tidak ada OPD, kosongkan hasil
    }
}
?>

<h2 class="text-2xl font-bold mb-6 ml-6 mt-6">Dokumen</h2>

<form method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6 mb-8 space-y-4">
    <div>
        <label class="block font-semibold mb-1">Judul</label>
        <input type="text" name="title"
            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
    </div>

    <div>
        <label class="block font-semibold mb-1">Deskripsi</label>
        <textarea name="description" rows="3"
            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"></textarea>
    </div>

    <div>
        <label class="block font-semibold mb-1">Kategori</label>
        <select name="category_id"
            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
            <?php
            $cats = $conn->query("SELECT * FROM categories ORDER BY name ASC");
            while ($c = $cats->fetch_assoc()) {
                echo "<option value='{$c['id']}'>{$c['name']}</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label class="block font-semibold mb-1">Pilih OPD</label>
        <select name="opd_id" class="w-full border border-gray-300 rounded-lg px-3 py-2">
            <?php
            $opds = $conn->query("SELECT * FROM opd");
            while ($o = $opds->fetch_assoc()) {
                echo "<option value='{$o['id']}'>{$o['name']}</option>";
            }
            ?>
        </select>
    </div>

    <div>
        <label class="block font-semibold mb-1">File</label>
        <input type="file" name="file" required
            class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50 cursor-pointer focus:outline-none focus:ring focus:ring-blue-200">
    </div>

    <div>
        <label class="block font-semibold mb-1">Status</label>
        <select name="status"
            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
            <option value="publish">Publish</option>
            <option value="draft">Draft</option>
        </select>
    </div>

    <button type="submit"
        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg shadow-md transition">
        Upload
    </button>
</form>

<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full border border-gray-200 rounded-lg">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="px-4 py-3 text-left">Judul</th>
                <th class="px-4 py-3 text-left">File</th>
                <th class="px-4 py-3 text-left">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php if ($docs && $docs->num_rows > 0): ?>
                <?php while ($d = $docs->fetch_assoc()): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 font-medium text-gray-800"><?= htmlspecialchars($d['title']) ?></td>
                        <td class="px-4 py-3">
                            <a href="<?= htmlspecialchars($d['file_path']) ?>" target="_blank"
                                class="text-blue-600 hover:underline">Lihat</a>
                        </td>
                        <td class="px-4 py-3">
                            <span
                                class="px-2 py-1 rounded-full text-sm font-semibold 
                                <?= $d['status'] === 'publish' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' ?>">
                                <?= htmlspecialchars($d['status']) ?>
                            </span>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="px-4 py-6 text-center text-gray-500">Tidak ada dokumen</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include("../admin/footer.php"); ?>