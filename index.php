<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPID Kabupaten Bondowoso</title>
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
    <!-- Top Bar -->
    <header class="w-full border-b border-slate-200 bg-rose-100/70">
        <div class="container-wide mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Lambang_Kabupaten_Bondowoso.png/120px-Lambang_Kabupaten_Bondowoso.png"
                    alt="Lambang Bondowoso" class="w-10 h-10 object-contain" />
                <span class="text-2xl font-extrabold tracking-wide text-sky-700">PPID</span>
            </div>
            <nav class="hidden md:flex items-center gap-10 font-medium">
                <a href="profil.php" class="hover:text-sky-700">Profil</a>
                <a href="layanan.php" class="hover:text-sky-700">Layanan</a>
                <a href="informasi.php" class="hover:text-sky-700">Informasi</a>
            </nav>
            <button id="navToggle"
                class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg hover:bg-white/50">
                <span class="sr-only">Menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M3.75 5.25h16.5v1.5H3.75zM3.75 11.25h16.5v1.5H3.75zM3.75 17.25h16.5v1.5H3.75z" />
                </svg>
            </button>
        </div>
        <div id="mobileNav" class="md:hidden hidden border-t border-slate-200 bg-white">
            <div class="container-wide mx-auto px-4 py-3 grid gap-2">
                <a href="#profil" class="py-2">Profil</a>
                <a href="#layanan" class="py-2">Layanan</a>
                <a href="#informasi" class="py-2">Informasi</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="relative">
        <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=1600&auto=format&fit=crop"
            alt="Hero" class="w-full h-[280px] md:h-[360px] object-cover" />
        <div class="absolute inset-0 bg-sky-900/40"></div>
        <div class="absolute inset-0 flex items-center">
            <div class="container-wide mx-auto px-4 fade-section">
                <h1 class="text-white text-2xl md:text-4xl font-extrabold drop-shadow-sm leading-snug uppercase">Selamat
                    Datang di PPID<br />Kabupaten Bondowoso</h1>
            </div>
        </div>
    </section>

    <!-- Search & Filter -->
    <section class="container-wide mx-auto px-4 py-10 fade-section">
        <div class="flex items-center gap-3">
            <div class="flex-1">
                <div class="relative">
                    <input type="text" placeholder="Cari informasi, dokumen, atau layanan..."
                        class="w-full rounded-full border border-slate-300 px-12 py-3 focus:outline-none focus:ring-2 focus:ring-sky-500" />
                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 1 0 4.243 12.023l4.242 4.242 1.06-1.06-4.241-4.243A6.75 6.75 0 0 0 10.5 3.75Zm-5.25 6.75a5.25 5.25 0 1 1 10.5 0 5.25 5.25 0 0 1-10.5 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            <button
                class="shrink-0 inline-flex items-center justify-center w-12 h-12 rounded-full border border-slate-300 hover:bg-slate-50"
                title="Filter">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M6.75 12h10.5M10.5 17.25h3" />
                </svg>
            </button>
        </div>
    </section>

    <!-- Cards -->
    <section class="container-wide mx-auto px-4 pb-12 fade-section">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card template repeated 3 times -->
            <article class="rounded-xl border border-slate-200 overflow-hidden bg-white hover:shadow-md transition">
                <div class="aspect-[4/3] bg-slate-200 grid place-content-center text-slate-500">Picture</div>
                <div class="p-5 space-y-3">
                    <h3 class="font-semibold text-lg">Lorem Ipsum Sit Dolor Amet</h3>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
                        vitae rhoncus commodo sem hendrerit.</p>
                    <div class="flex items-center justify-between pt-2 text-xs">
                        <div class="flex items-center gap-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Lambang_Kabupaten_Bondowoso.png/40px-Lambang_Kabupaten_Bondowoso.png"
                                class="w-5 h-5" alt="PPID" />
                            <span class="font-medium">@PPID</span>
                        </div>
                        <a href="#" class="text-sky-600 hover:underline">Selengkapnya</a>
                    </div>
                </div>
            </article>

            <article class="rounded-xl border border-slate-200 overflow-hidden bg-white hover:shadow-md transition">
                <div class="aspect-[4/3] bg-slate-200 grid place-content-center text-slate-500">Picture</div>
                <div class="p-5 space-y-3">
                    <h3 class="font-semibold text-lg">Lorem Ipsum Sit Dolor Amet</h3>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
                        vitae rhoncus commodo sem hendrerit.</p>
                    <div class="flex items-center justify-between pt-2 text-xs">
                        <div class="flex items-center gap-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Lambang_Kabupaten_Bondowoso.png/40px-Lambang_Kabupaten_Bondowoso.png"
                                class="w-5 h-5" alt="PPID" />
                            <span class="font-medium">@PPID</span>
                        </div>
                        <a href="#" class="text-sky-600 hover:underline">Selengkapnya</a>
                    </div>
                </div>
            </article>

            <article class="rounded-xl border border-slate-200 overflow-hidden bg-white hover:shadow-md transition">
                <div class="aspect-[4/3] bg-slate-200 grid place-content-center text-slate-500">Picture</div>
                <div class="p-5 space-y-3">
                    <h3 class="font-semibold text-lg">Lorem Ipsum Sit Dolor Amet</h3>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
                        vitae rhoncus commodo sem hendrerit.</p>
                    <div class="flex items-center justify-between pt-2 text-xs">
                        <div class="flex items-center gap-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Lambang_Kabupaten_Bondowoso.png/40px-Lambang_Kabupaten_Bondowoso.png"
                                class="w-5 h-5" alt="PPID" />
                            <span class="font-medium">@PPID</span>
                        </div>
                        <a href="#" class="text-sky-600 hover:underline">Selengkapnya</a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Form Section -->
    <section id="layanan" class="container-wide mx-auto px-4 pb-20 fade-section">
        <div class="flex items-center justify-center mb-6">
            <div class="relative inline-block">
                <button id="formSwitcher"
                    class="inline-flex items-center gap-2 px-4 py-2 border border-slate-300 rounded-lg bg-white hover:bg-slate-50 text-sm">
                    <span id="formTitle">Form Permohonan Informasi</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.25a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="formMenu"
                    class="hidden absolute z-10 mt-2 w-64 rounded-lg border border-slate-200 bg-white shadow-lg">
                    <button data-form="permohonan" class="w-full text-left px-4 py-2 hover:bg-slate-50">Form Permohonan
                        Informasi</button>
                    <button data-form="keberatan" class="w-full text-left px-4 py-2 hover:bg-slate-50">Form Pengajuan
                        Keberatan</button>
                </div>
            </div>
        </div>

        <h2 class="text-2xl font-semibold mb-6">Form Permohonan Informasi</h2>
        <form id="formPermohonan" class="grid md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Nama<span class="text-red-500">*</span></label>
                    <input type="text"
                        class="w-full rounded-md border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500"
                        required />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">No KTP<span class="text-red-500">*</span></label>
                    <input type="text" class="w-full rounded-md border border-slate-300 px-3 py-2" required />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Ormas/Perorangan<span
                            class="text-red-500">*</span></label>
                    <input type="text" class="w-full rounded-md border border-slate-300 px-3 py-2" required />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">No Telp / Email<span
                            class="text-red-500">*</span></label>
                    <input type="text" class="w-full rounded-md border border-slate-300 px-3 py-2" required />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Alamat<span class="text-red-500">*</span></label>
                    <textarea rows="3" class="w-full rounded-md border border-slate-300 px-3 py-2" required></textarea>
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Rincian Informasi yang Dibutuhkan<span
                            class="text-red-500">*</span></label>
                    <textarea rows="5" class="w-full rounded-md border border-slate-300 px-3 py-2" required></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Tujuan Mendapatkan Informasi<span
                            class="text-red-500">*</span></label>
                    <textarea rows="3" class="w-full rounded-md border border-slate-300 px-3 py-2" required></textarea>
                </div>
                <fieldset>
                    <legend class="block text-sm font-medium mb-2">Cara Mendapatkan Salinan Informasi<span
                            class="text-red-500">*</span></legend>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-sm">
                        <label class="inline-flex items-center gap-2"><input type="radio" name="salinan" required>
                            Mengambil Langsung</label>
                        <label class="inline-flex items-center gap-2"><input type="radio" name="salinan"> Kurir</label>
                        <label class="inline-flex items-center gap-2"><input type="radio" name="salinan"> Email</label>
                        <label class="inline-flex items-center gap-2"><input type="radio" name="salinan">
                            WhatsApp</label>
                    </div>
                </fieldset>
                <div class="pt-2">
                    <button type="submit"
                        class="ml-auto block w-40 rounded-md bg-sky-600 text-white px-5 py-2 font-semibold hover:bg-sky-700">Submit</button>
                </div>
            </div>
        </form>

        <!-- Dummy form: Pengajuan Keberatan (hidden by default) -->
        <form id="formKeberatan" class="hidden mt-8 grid md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Nama Pemohon<span
                            class="text-red-500">*</span></label>
                    <input type="text" class="w-full rounded-md border border-slate-300 px-3 py-2" required />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Nomor Registrasi Permohonan<span
                            class="text-red-500">*</span></label>
                    <input type="text" class="w-full rounded-md border border-slate-300 px-3 py-2" required />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Alasan Keberatan<span
                            class="text-red-500">*</span></label>
                    <textarea rows="6" class="w-full rounded-md border border-slate-300 px-3 py-2" required></textarea>
                </div>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Kontak</label>
                    <input type="text" class="w-full rounded-md border border-slate-300 px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Lampiran (opsional)</label>
                    <input type="file"
                        class="w-full rounded-md border border-slate-300 px-3 py-2 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-sky-50 file:text-sky-700 hover:file:bg-sky-100" />
                </div>
                <div class="pt-2">
                    <button type="submit"
                        class="ml-auto block w-40 rounded-md bg-sky-600 text-white px-5 py-2 font-semibold hover:bg-sky-700">Kirim
                        Keberatan</button>
                </div>
            </div>
        </form>
    </section>

    <!-- Footer -->
    <footer id="informasi" class="bg-slate-900 text-slate-200">
        <div class="container-wide mx-auto px-4 py-12 grid md:grid-cols-4 gap-10">
            <div class="col-span-1 flex items-start gap-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Lambang_Kabupaten_Bondowoso.png/120px-Lambang_Kabupaten_Bondowoso.png"
                    class="w-14 h-14" alt="Logo" />
                <div>
                    <div class="text-4xl font-extrabold tracking-tight text-sky-400">PPID</div>
                    <p class="text-sm mt-1">Pejabat Pengelola Informasi dan Dokumentasi<br />Kabupaten Bondowoso</p>
                    <div class="flex gap-4 mt-4">
                        <a href="#" aria-label="Instagram" class="hover:text-white"></a>
                        <a href="#" aria-label="Facebook" class="hover:text-white"></a>
                        <a href="#" aria-label="WhatsApp" class="hover:text-white"></a>
                    </div>
                </div>
            </div>

            <div>
                <h4 id="profil" class="font-semibold text-white mb-3">Profil</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white">Profil PPID</a></li>
                    <li><a href="#" class="hover:text-white">Struktur Organisasi</a></li>
                    <li><a href="#" class="hover:text-white">Regulasi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-3">Layanan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#layanan" class="hover:text-white">Layanan Pemerintahan</a></li>
                    <li><a href="#layanan" class="hover:text-white">Layanan Publik</a></li>
                    <li><a href="#layanan" class="hover:text-white">Layanan Pengaduan</a></li>
                    <li><a href="#layanan" class="hover:text-white">Permohonan Informasi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-3">Informasi</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white">Informasi 1</a></li>
                    <li><a href="#" class="hover:text-white">Informasi 2</a></li>
                    <li><a href="#" class="hover:text-white">Informasi 3</a></li>
                    <li><a href="#" class="hover:text-white">Informasi 4</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800">
            <div class="container-wide mx-auto px-4 py-4 text-xs text-slate-400">© <span id="year"></span> PPID
                Kabupaten Bondowoso</div>
        </div>
    </footer>

    <script src="/js/scripts.js"></script>
</body>

</html>