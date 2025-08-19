<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil PPID</title>
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

        .navbar {
            display: flex;
            justify-content: space-between;
            background: #f5b7a1;
            padding: 15px 30px;
        }

        .navbar ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        .hero {
            height: 250px;
            background: url('') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 32px;
            font-weight: bold;
        }

        .cover {
            text-align: center;
            padding: 40px 0;
        }

        .cover img,
        .struktur img {
            width: 80%;
            max-width: 600px;
            height: 300px;
            background: #ddd;
            display: block;
            margin: auto;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding: 50px;
            gap: 30px;
        }

        .content .main-text {
            flex: 2;
        }

        .content .sidebar {
            flex: 1;
            background: #fff;
            border: 1px solid #ccc;
            padding: 15px;
        }

        .struktur {
            text-align: center;
            padding: 50px;
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
            transform: translateY(40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
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
        <?php include('navbar.php'); ?>
        <button id="navToggle"
            class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg hover:bg-white/50">
            <span class="sr-only">Menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path d="M3.75 5.25h16.5v1.5H3.75zM3.75 11.25h16.5v1.5H3.75zM3.75 17.25h16.5v1.5H3.75z" />
            </svg>
        </button>
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
                <h1 class="text-white text-2xl md:text-4xl font-extrabold drop-shadow-sm leading-snug uppercase">PROFIL
                    PPID Kabupaten Bondowoso
                </h1>
            </div>
        </div>
    </section>

    <!-- Cards -->
    <section class="cover fade-section flex space-x-32">
        <div
            class="w-1/2 h-96 bg-slate-200 grid place-content-center text-slate-500 text-center rounded-lg shadow-md ml-6">
            Cover Images
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

    <!-- Berita -->
    <section class="content fade-section">
        <div class="main-text">
            <h2>Sejarah PPID</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae mauris non nulla semper
                hendrerit.
                Vivamus tincidunt diam lorem, et imperdiet arcu congue nec...</p>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="struktur fade-section">
        <h2>Struktur Organisasi PPID</h2>
        <div class="aspect-[4/3] bg-slate-200 grid place-content-center text-slate-500">Sturktur Organisasi</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae mauris non nulla semper
            hendrerit.
            Vivamus tincidunt diam lorem, et imperdiet arcu congue nec...</p>
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

    <?php include('footer.php');?>

    <script src="/js/scripts.js"></script>
</body>

</html>