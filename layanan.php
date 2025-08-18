<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layanan PPID</title>
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

    <!-- Navbar -->
    <nav class="w-full bg-[#F5B7A1] sticky top-0 z-40 border-b border-black/10">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-4 py-3">
            <div class="flex items-center gap-3">
                <img src="" alt="Logo PPID" class="w-9 h-9 rounded-full bg-slate-200" />
                <span class="text-2xl font-semibold tracking-wide text-sky-600">PPID</span>
            </div>
            <ul class="hidden md:flex items-center gap-10 font-medium">
                <li><a class="hover:text-sky-700" href="profil.php">Profil</a></li>
                <li><a class="text-sky-600 underline underline-offset-8" href="layanan.php">Layanan</a></li>
                <li><a class="hover:text-sky-700" href="informasi.php">Informasi</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <header class="relative h-60 md:h-72 w-full bg-center bg-cover"
        style="background-image:url('https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=1600&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-sky-900/40"></div>
        <div class="absolute inset-0 flex items-center">
            <div class="container-wide mx-auto px-4 fade-section">
                <h1 class="text-white text-3xl md:text-4xl font-extrabold tracking-wide">LAYANAN PPID</h1>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <main class="max-w-6xl mx-auto px-4 py-10 space-y-12">

        <!-- Search & Filter -->
        <section class="container-wide mx-auto px-4 py-10 fade-section">
            <div class="flex items-center gap-3">
                <div class="flex-1">
                    <div class="relative">
                        <input type="text" placeholder="Cari informasi, dokumen, atau layanan..."
                            class="w-full rounded-full border border-slate-300 px-12 py-3 focus:outline-none focus:ring-2 focus:ring-sky-500" />
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
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

        <section class="fade-section">
            <div class="flex justify-center">
                <div class="relative">
                    <!-- Tombol -->
                    <button id="toggleButton" class="text px-4 py-2 bg-slate-200 rounded hover:bg-slate-300">
                        Lainnya
                    </button>
                    <div class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-500">
                        ▼
                    </div>
                </div>
            </div>

            <!-- Konten tambahan -->
            <div id="moreContent" class="hidden mt-4 p-4 bg-slate-100 rounded">
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

    </main>

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