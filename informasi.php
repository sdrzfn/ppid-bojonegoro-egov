<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi PPID</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --brand: #0EA5E9;
            --brand-dark: #0284C7;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, 'Apple Color Emoji', 'Segoe UI Emoji';
        }

        .container-wide {
            max-width: 1200px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-section {
            opacity: 0;
            animation: fadeIn 0.8s ease forwards;
        }

        .fade-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-section.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-white text-slate-800">

    <?php include('navbar.php'); ?>

    <!-- Hero -->
    <header class="relative h-60 md:h-72 w-full bg-center bg-cover"
        style="background-image:url('https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=1600&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-sky-900/40"></div>
        <div class="absolute inset-0 flex items-center">
            <div class="container-wide mx-auto px-4 fade-section">
                <h1 class="text-white text-3xl md:text-4xl font-extrabold tracking-wide">INFORMASI PPID</h1>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <main class="max-w-6xl mx-auto px-4 py-10 space-y-12">

        <!-- Tabel Informasi + Sidebar Berita -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 fade-section">
            <!-- Tabel -->
            <div class="lg:col-span-2">
                <h2 class="font-semibold mb-3">Tabel Informasi</h2>
                <div class="overflow-hidden rounded-xl border border-slate-300">
                    <table class="w-full text-sm">
                        <thead class="bg-slate-100">
                            <tr class="text-left">
                                <th class="w-16 px-4 py-3 border-r border-slate-300">No</th>
                                <th class="px-4 py-3 border-r border-slate-300">Nama Informasi</th>
                                <th class="w-32 px-4 py-3 border-r border-slate-300">Unduh</th>
                                <th class="w-28 px-4 py-3">Lihat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Baris contoh, gandakan sesuai kebutuhan -->
                            <!-- Gunakan 12+ baris agar mirip wireframe -->
                            <script>
                                // render 12 baris contoh
                                document.addEventListener('DOMContentLoaded', () => {
                                    const tbody = document.querySelector('tbody');
                                    for (let i = 1; i <= 12; i++) {
                                        const tr = document.createElement('tr');
                                        tr.className = i % 2 === 0 ? 'bg-white' : 'bg-slate-50';
                                        tr.innerHTML = `
                      <td class="px-4 py-3 border-t border-slate-200">${i}</td>
                      <td class="px-4 py-3 border-t border-slate-200">Nama dokumen informasi ke-${i}</td>
                      <td class="px-4 py-3 border-t border-slate-200">
                        <a href="#" class="inline-block px-3 py-1 rounded bg-sky-600 text-white hover:bg-sky-700">Unduh</a>
                      </td>
                      <td class="px-4 py-3 border-t border-slate-200">
                        <a href="#" class="text-sky-600 hover:underline">Lihat</a>
                      </td>`;
                                        tbody.appendChild(tr);
                                    }
                                });
                            </script>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Sidebar Berita -->
            <aside class="lg:col-span-1">
                <div class="rounded-xl border border-slate-300 p-4">
                    <h3 class="font-semibold mb-4">Berita</h3>
                    <div class="h-1 w-24 bg-sky-600 mb-4"></div>

                    <ul class="space-y-4">
                        <!-- Item berita -->
                        <li class="flex gap-3 items-center">
                            <div class="w-16 h-12 bg-slate-200 rounded"></div>
                            <div class="text-sm">
                                <p class="font-medium leading-snug">Judul Berita</p>
                                <p class="text-slate-500 text-xs">Lorem ipsum dolor… <span class="underline">more</span>
                                </p>
                            </div>
                        </li>
                        <li class="flex gap-3 items-center">
                            <div class="w-16 h-12 bg-slate-200 rounded"></div>
                            <div class="text-sm">
                                <p class="font-medium leading-snug">Judul Berita</p>
                                <p class="text-slate-500 text-xs">Lorem ipsum dolor… <span class="underline">more</span>
                                </p>
                            </div>
                        </li>
                        <li class="flex gap-3 items-center">
                            <div class="w-16 h-12 bg-slate-200 rounded"></div>
                            <div class="text-sm">
                                <p class="font-medium leading-snug">Judul Berita</p>
                                <p class="text-slate-500 text-xs">Lorem ipsum dolor… <span class="underline">more</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
        </section>

        <!-- Dropdown pemilih form -->
        <section class="fade-section">
            <div class="flex justify-center">
                <div class="relative">
                    <select id="formSelector"
                        class="appearance-none pl-4 pr-10 py-2 rounded border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-sky-600">
                        <option value="permohonan" selected>Form Permohonan Informasi</option>
                        <option value="keberatan">Form Pengajuan Keberatan</option>
                    </select>
                    <div class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-500">▼</div>
                </div>
            </div>
        </section>

        <!-- Form Permohonan Informasi -->
        <section id="formPermohonan" class="fade-section">
            <h2 class="text-xl font-semibold mb-6">Form Permohonan Informasi</h2>
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- kiri -->
                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-medium mb-1">Nama<span class="text-red-500">*</span></label>
                        <input type="text"
                            class="w-full border rounded px-3 py-2 border-slate-300 focus:outline-none focus:ring-2 focus:ring-sky-600" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">No KTP<span class="text-red-500">*</span></label>
                        <input type="text"
                            class="w-full border rounded px-3 py-2 border-slate-300 focus:outline-none focus:ring-2 focus:ring-sky-600" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Ormas/Perorangan<span
                                class="text-red-500">*</span></label>
                        <input type="text"
                            class="w-full border rounded px-3 py-2 border-slate-300 focus:outline-none focus:ring-2 focus:ring-sky-600" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">No Telp / Email<span
                                class="text-red-500">*</span></label>
                        <input type="text"
                            class="w-full border rounded px-3 py-2 border-slate-300 focus:outline-none focus:ring-2 focus:ring-sky-600" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Alamat<span class="text-red-500">*</span></label>
                        <textarea rows="4"
                            class="w-full border rounded px-3 py-2 border-slate-300 focus:outline-none focus:ring-2 focus:ring-sky-600"></textarea>
                    </div>
                </div>

                <!-- kanan -->
                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-medium mb-1">Rincian Informasi yang Dibutuhkan<span
                                class="text-red-500">*</span></label>
                        <textarea rows="4"
                            class="w-full border rounded px-3 py-2 border-slate-300 focus:outline-none focus:ring-2 focus:ring-sky-600"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Tujuan Mendapatkan Informasi<span
                                class="text-red-500">*</span></label>
                        <textarea rows="3"
                            class="w-full border rounded px-3 py-2 border-slate-300 focus:outline-none focus:ring-2 focus:ring-sky-600"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Cara Mendapatkan Salinan Informasi<span
                                class="text-red-500">*</span></label>
                        <div class="space-y-2 text-sm">
                            <label class="flex items-center gap-2"><input type="radio" name="cara"
                                    class="accent-sky-600" checked> Mengambil langsung</label>
                            <label class="flex items-center gap-2"><input type="radio" name="cara"
                                    class="accent-sky-600"> Kurir</label>
                            <label class="flex items-center gap-2"><input type="radio" name="cara"
                                    class="accent-sky-600"> Email</label>
                            <label class="flex items-center gap-2"><input type="radio" name="cara"
                                    class="accent-sky-600"> WhatsApp</label>
                        </div>
                    </div>
                </div>
            </form>

            <div class="mt-6 flex justify-end">
                <button class="px-6 py-2 rounded bg-sky-600 text-white hover:bg-sky-700">Submit</button>
            </div>
        </section>

        <!-- Form Keberatan (opsional, tampil saat dipilih) -->
        <section id="formKeberatan" class="fade-section hidden">
            <h2 class="text-xl font-semibold mb-6">Form Pengajuan Keberatan</h2>
            <div class="rounded border border-slate-300 p-6 text-sm bg-slate-50">
                <p>Formulir keberatan dapat diisi bila pemohon tidak memperoleh informasi sesuai ketentuan. (Contoh
                    placeholder)</p>
            </div>
        </section>

    </main>

    <?php include('footer.php');?>

    <script src="/js/scripts.js"></script>
</body>

</html>