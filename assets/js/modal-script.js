function openModal(id, judul, isi, gambar, penulis, tanggal) {
    document.getElementById('editId').value = id;
    document.getElementById('editJudul').value = judul;
    document.getElementById('editIsi').value = isi;
    document.getElementById('editGambar').value = gambar;
    document.getElementById('editPenulis').value = penulis;
    document.getElementById('editTanggal').value = tanggal;
    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editModal').classList.add('flex');
}

function closeModal() {
    document.getElementById('editModal').classList.add('hidden');
    document.getElementById('editModal').classList.remove('flex');
}