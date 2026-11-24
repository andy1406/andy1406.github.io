<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kenali Andy Putra, lulusan D-3 Manajemen Informatika dengan pengalaman teknisi komputer, administrasi, dan pekerjaan proyek.">
    <meta name="theme-color" content="#f3f1e9">
    <title>Andy Putra — IT, Administrasi & Operasional</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <header class="site-header sticky top-0 z-50 border-b border-[#17231f]/[0.08] bg-[#f3f1e9]/90 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-3.5 sm:px-8 lg:px-12">
            <a href="#beranda" class="flex items-center gap-3" aria-label="Andy Putra, kembali ke beranda">
                <span class="grid size-10 place-items-center rounded-xl bg-[#172a23] text-sm font-bold text-[#d9f99d]">AP</span>
                <span>
                    <span class="block text-sm font-bold tracking-tight">Andy Putra</span>
                    <span class="block text-[10px] uppercase tracking-[0.16em] text-[#788179]">Portofolio profesional</span>
                </span>
            </a>

            <nav aria-label="Navigasi utama" class="hidden items-center gap-7 text-[13px] font-medium text-[#68736b] lg:flex">
                <a class="transition hover:text-[#17231f]" href="#profil">Profil</a>
                <a class="transition hover:text-[#17231f]" href="#pengalaman">Pengalaman</a>
                <a class="transition hover:text-[#17231f]" href="#pendidikan">Pendidikan</a>
                <a class="transition hover:text-[#17231f]" href="#keahlian">Keahlian</a>
            </nav>

            <a href="mailto:andy.kamil14@gmail.com" class="inline-flex items-center gap-2 rounded-full bg-[#172a23] px-4 py-2.5 text-xs font-semibold text-white transition hover:bg-[#30483b] sm:px-5 sm:text-sm">
                Hubungi saya <span aria-hidden="true">↗</span>
            </a>
        </div>
    </header>

    <main>
        <section id="beranda" class="hero-shell relative overflow-hidden bg-[#172a23] text-white">
            <div class="hero-orb hero-orb-one" aria-hidden="true"></div>
            <div class="hero-orb hero-orb-two" aria-hidden="true"></div>
            <div class="hero-lines" aria-hidden="true"></div>

            <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-5 py-14 sm:px-8 sm:py-20 lg:grid-cols-[1.12fr_0.88fr] lg:gap-16 lg:px-12 lg:py-24">
                <div class="relative z-10">
                    <p class="mb-7 inline-flex items-center gap-2.5 rounded-full border border-white/15 bg-white/[0.06] px-4 py-2.5 text-[11px] font-semibold uppercase tracking-[0.17em] text-white/80">
                        <span class="relative flex size-2">
                            <span class="absolute inline-flex size-full animate-ping rounded-full bg-[#d9f99d] opacity-40"></span>
                            <span class="relative inline-flex size-2 rounded-full bg-[#d9f99d]"></span>
                        </span>
                        Terbuka untuk kesempatan kerja
                    </p>

                    <p class="text-sm font-medium tracking-[0.12em] text-[#d9f99d]">KANDIDAT DI BIDANG IT & OPERASIONAL</p>
                    <h1 class="display-font mt-4 text-[clamp(3.6rem,9vw,7.3rem)] leading-[0.88] tracking-[-0.06em]">
                        Andy<br>
                        <span class="hero-name-accent italic">Putra.</span>
                    </h1>
                    <h2 class="mt-7 max-w-xl text-xl font-medium leading-snug tracking-tight text-white/90 sm:text-2xl">
                        Teknisi komputer, administrasi, dan operasional lapangan.
                    </h2>
                    <p class="mt-4 max-w-xl text-sm leading-7 text-white/65 sm:text-base">
                        Lulusan D-3 Manajemen Informatika dengan pengalaman kerja yang beragam. Siap belajar, bekerja sama, dan memberikan kontribusi terbaik di lingkungan kerja baru.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="{{ asset('documents/andy-putra-cv.pdf') }}" download class="inline-flex items-center gap-3 rounded-full bg-[#d9f99d] px-6 py-3.5 text-sm font-bold text-[#172a23] transition hover:bg-white">
                            Unduh CV saya <span aria-hidden="true">↓</span>
                        </a>
                        <a href="#pengalaman" class="inline-flex items-center gap-2 rounded-full border border-white/25 px-6 py-3.5 text-sm font-semibold text-white transition hover:border-white hover:bg-white/10">
                            Lihat pengalaman <span aria-hidden="true">↘</span>
                        </a>
                    </div>

                    <div class="mt-9 flex flex-wrap gap-x-6 gap-y-3 text-sm text-white/65">
                        <a class="inline-flex items-center gap-2 transition hover:text-[#d9f99d]" href="mailto:andy.kamil14@gmail.com">
                            <span aria-hidden="true">✉</span> andy.kamil14@gmail.com
                        </a>
                        <a class="inline-flex items-center gap-2 transition hover:text-[#d9f99d]" href="https://wa.me/6285271696776" target="_blank" rel="noopener noreferrer" aria-label="Hubungi Andy Putra melalui WhatsApp">
                            <span class="whatsapp-mark" aria-hidden="true">WA</span> +62 852 7169 6776
                        </a>
                    </div>
                </div>

                <div class="relative mx-auto w-full max-w-[28rem] lg:ml-auto">
                    <div class="portrait-backdrop" aria-hidden="true"></div>
                    <div class="portrait-card">
                        <div class="portrait-frame relative aspect-[0.84]">
                            <img
                                src="{{ asset('images/andy-putra.jpg') }}"
                                alt="Foto profil Andy Putra"
                                class="h-full w-full object-cover"
                                fetchpriority="high"
                            >
                        </div>
                        <div class="portrait-meta">
                            <span class="portrait-monogram" aria-hidden="true">AP</span>
                            <span class="min-w-0 flex-1">
                                <span class="portrait-meta-label">PROFIL PROFESIONAL</span>
                                <span class="portrait-meta-title">IT · Administrasi · Operasional</span>
                            </span>
                            <span class="portrait-meta-arrow" aria-hidden="true">↗</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="Ringkasan profil" class="border-b border-[#17231f]/10 bg-[#e7e9de]">
            <div class="mx-auto grid max-w-7xl gap-0 px-5 sm:px-8 md:grid-cols-3 lg:px-12">
                <div class="summary-item flex flex-col justify-center border-b border-[#17231f]/10 py-5 md:border-b-0 md:border-r md:py-6 md:pr-8">
                    <p class="text-xs font-semibold text-[#34443a] sm:text-sm">Pendidikan</p>
                    <p class="mt-1 text-sm leading-5 text-[#69736a] sm:text-base">D-3 Manajemen Informatika</p>
                </div>
                <div class="summary-item flex flex-col justify-center border-b border-[#17231f]/10 py-5 md:border-b-0 md:border-r md:px-8 md:py-6">
                    <p class="text-xs font-semibold text-[#34443a] sm:text-sm">Indeks Prestasi Kumulatif</p>
                    <p class="mt-1 text-sm leading-5 text-[#69736a] sm:text-base">3,28 dari 4,00</p>
                </div>
                <div class="summary-item flex flex-col justify-center py-5 md:pl-8 md:py-6">
                    <p class="text-xs font-semibold text-[#34443a] sm:text-sm">Bidang pengalaman</p>
                    <p class="mt-1 text-sm leading-5 text-[#69736a] sm:text-base">IT, administrasi, dan proyek</p>
                </div>
            </div>
        </section>

        <section id="profil" class="mx-auto grid max-w-7xl gap-8 px-5 py-16 sm:px-8 sm:py-20 lg:grid-cols-[0.72fr_1.28fr] lg:gap-16 lg:px-12 lg:py-24">
            <div>
                <p class="section-kicker"><span>01</span> PROFIL SINGKAT</p>
                <h2 class="display-font mt-5 text-4xl leading-[1.04] sm:text-5xl">Bukan hanya satu jenis pengalaman.</h2>
            </div>
            <div class="lg:pt-8">
                <p class="text-lg leading-8 text-[#34443a] sm:text-xl sm:leading-9">
                    Saya membawa bekal pendidikan teknologi informasi sekaligus pengalaman langsung di pekerjaan teknis, administrasi, dan proyek lapangan.
                </p>
                <p class="mt-5 max-w-2xl text-sm leading-7 text-[#6b756e] sm:text-base">
                    Terbiasa menangani tugas dengan teliti, berkoordinasi bersama tim, dan mengikuti prosedur kerja. Saya siap beradaptasi dengan tanggung jawab baru serta terus mengembangkan kemampuan.
                </p>
                <div class="mt-8 grid gap-3 sm:grid-cols-3">
                    <div class="profile-point">
                        <span class="profile-point-icon" aria-hidden="true">01</span>
                        <span class="text-sm font-semibold">Cepat belajar</span>
                    </div>
                    <div class="profile-point">
                        <span class="profile-point-icon" aria-hidden="true">02</span>
                        <span class="text-sm font-semibold">Disiplin & teliti</span>
                    </div>
                    <div class="profile-point">
                        <span class="profile-point-icon" aria-hidden="true">03</span>
                        <span class="text-sm font-semibold">Kerja sama tim</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="pengalaman" class="border-y border-[#17231f]/10 bg-white/55">
            <div class="mx-auto max-w-7xl px-5 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
                <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
                    <div>
                        <p class="section-kicker"><span>02</span> PENGALAMAN KERJA</p>
                        <h2 class="display-font mt-5 max-w-2xl text-4xl leading-[1.04] sm:text-5xl">Pengalaman yang membentuk cara saya bekerja.</h2>
                    </div>
                    <p class="max-w-sm text-sm leading-6 text-[#6b756e]">Berikut tugas nyata yang pernah saya tangani di bidang IT, administrasi, dan pekerjaan lapangan.</p>
                </div>

                <div class="mt-10 grid gap-4 lg:grid-cols-3">
                    <article class="experience-card flex flex-col rounded-3xl border border-[#17231f]/10 bg-[#f8f7f2] p-6 sm:p-7">
                        <div class="flex items-center justify-between">
                            <span class="experience-icon" aria-hidden="true">⌘</span>
                            <span class="experience-date">MAGANG · 2016</span>
                        </div>
                        <p class="mt-7 text-xs font-semibold uppercase tracking-[0.14em] text-[#72806f]">IT & Layanan</p>
                        <h3 class="mt-2 text-xl font-bold tracking-tight">Teknisi Komputer</h3>
                        <p class="mt-1 text-sm font-semibold text-[#547148]">Aldy Computer</p>
                        <p class="mt-4 text-sm leading-6 text-[#6b756e]">Instalasi, perawatan, dan perbaikan komputer serta jaringan, termasuk layanan servis pelanggan.</p>
                        <div class="mt-auto flex flex-wrap items-center justify-between gap-3 border-t border-[#17231f]/10 pt-5">
                            <span class="text-xs font-medium text-[#818a81]">4 April – 2 Juli 2016</span>
                            <a class="text-xs font-bold text-[#547148] transition hover:text-[#17231f]" href="pengalaman-kerja/#teknisi">Detail ↗</a>
                        </div>
                    </article>

                    <article class="experience-card flex flex-col rounded-3xl border border-[#17231f]/10 bg-[#f8f7f2] p-6 sm:p-7">
                        <div class="flex items-center justify-between">
                            <span class="experience-icon" aria-hidden="true">▤</span>
                            <span class="experience-date">MAGANG · 2021</span>
                        </div>
                        <p class="mt-7 text-xs font-semibold uppercase tracking-[0.14em] text-[#72806f]">Administrasi</p>
                        <h3 class="mt-2 text-xl font-bold tracking-tight">Staf Administrasi</h3>
                        <p class="mt-1 text-sm font-semibold text-[#547148]">MIN 4 Agam</p>
                        <p class="mt-4 text-sm leading-6 text-[#6b756e]">Mendukung pengarsipan dokumen dan kegiatan operasional harian kantor Tata Usaha.</p>
                        <div class="mt-auto flex flex-wrap items-center justify-between gap-3 border-t border-[#17231f]/10 pt-5">
                            <span class="text-xs font-medium text-[#818a81]">9 Agustus – 25 September 2021</span>
                            <a class="text-xs font-bold text-[#547148] transition hover:text-[#17231f]" href="pengalaman-kerja/#administrasi">Detail ↗</a>
                        </div>
                    </article>

                    <article class="experience-card flex flex-col rounded-3xl border border-[#17231f]/10 bg-[#f8f7f2] p-6 sm:p-7">
                        <div class="flex items-center justify-between">
                            <span class="experience-icon" aria-hidden="true">↗</span>
                            <span class="experience-date">2019 — OKTOBER 2026</span>
                        </div>
                        <p class="mt-7 text-xs font-semibold uppercase tracking-[0.14em] text-[#72806f]">Operasional Lapangan</p>
                        <h3 class="mt-2 text-xl font-bold tracking-tight">Pekerja Konstruksi</h3>
                        <p class="mt-1 text-sm font-semibold text-[#547148]">Freelance / proyekan</p>
                            <p class="mt-4 text-sm leading-6 text-[#6b756e]">Perjalanan kerja dari pekerja kasar konstruksi hingga bekerja di lingkungan pertukangan.</p>
                            <p class="mt-3 text-xs font-medium leading-5 text-[#818a81]">2019–2022 · Pekerja kasar<br>2023–Oktober 2026 · Pertukangan</p>
                            <div class="mt-auto flex flex-wrap items-center justify-between gap-3 border-t border-[#17231f]/10 pt-5">
                                <span class="text-xs font-medium text-[#818a81]">Berbagai proyek konstruksi</span>
                                <a class="text-xs font-bold text-[#547148] transition hover:text-[#17231f]" href="pengalaman-kerja/#konstruksi">Detail ↗</a>
                            </div>
                    </article>
                </div>

                <div class="mt-7 text-center">
                    <a href="pengalaman-kerja/" class="inline-flex items-center gap-2 rounded-full border border-[#17231f]/15 px-5 py-3 text-sm font-bold text-[#34443a] transition hover:border-[#547148] hover:bg-[#e7e9de]">
                            Lihat semua detail pengalaman <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </section>

        <section id="pendidikan" class="mx-auto grid max-w-7xl gap-8 px-5 py-16 sm:px-8 sm:py-20 lg:grid-cols-[0.72fr_1.28fr] lg:gap-16 lg:px-12 lg:py-24">
            <div>
                <p class="section-kicker"><span>03</span> PENDIDIKAN</p>
                <h2 class="display-font mt-5 text-4xl leading-[1.04] sm:text-5xl">Pondasi untuk terus berkembang.</h2>
                <div class="mt-7 inline-flex items-center gap-3 rounded-2xl bg-[#e7e9de] px-4 py-3">
                    <span class="text-2xl font-bold tracking-tight text-[#23372b]">3,28</span>
                    <span class="text-xs leading-4 text-[#69736a]">IPK<br>AMIK Bukittinggi</span>
                </div>
            </div>
            <div class="education-list lg:pt-3">
                <div class="education-item">
                    <span class="education-year">2019 — 2022</span>
                    <div>
                        <h3 class="font-bold">D-3 Manajemen Informatika</h3>
                        <p class="mt-1 text-sm text-[#6b756e]">AMIK Bukittinggi · IPK 3.28 / 4.00</p>
                    </div>
                </div>
                <div class="education-item">
                    <span class="education-year">2014 — 2017</span>
                    <div>
                        <h3 class="font-bold">Teknik Komputer dan Jaringan</h3>
                        <p class="mt-1 text-sm text-[#6b756e]">SMK Negeri 1 Ampek Angkek</p>
                    </div>
                </div>
                <div class="education-item">
                    <span class="education-year">2011 — 2014</span>
                    <div>
                        <h3 class="font-bold">MTsN Kubang Putih</h3>
                        <p class="mt-1 text-sm text-[#6b756e]">Pendidikan menengah pertama</p>
                    </div>
                </div>
                <div class="education-item">
                    <span class="education-year">2005 — 2011</span>
                    <div>
                        <h3 class="font-bold">SDN 07 Kubang Putih</h3>
                        <p class="mt-1 text-sm text-[#6b756e]">Pendidikan dasar</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="keahlian" class="border-y border-[#17231f]/10 bg-[#e7e9de]">
            <div class="mx-auto grid max-w-7xl gap-9 px-5 py-16 sm:px-8 sm:py-20 lg:grid-cols-[0.72fr_1.28fr] lg:gap-16 lg:px-12 lg:py-24">
                <div>
                    <p class="section-kicker"><span>04</span> KEAHLIAN</p>
                    <h2 class="display-font mt-5 text-4xl leading-[1.04] sm:text-5xl">Kemampuan yang siap saya bawa.</h2>
                    <p class="mt-5 max-w-sm text-sm leading-7 text-[#6b756e]">Kombinasi keterampilan teknis, operasional, dan interpersonal untuk mendukung pekerjaan.</p>
                </div>
                <div class="grid gap-3 sm:grid-cols-2">
                    <div class="skill-group">
                        <span class="skill-group-label">01 / TEKNIS</span>
                        <h3 class="mt-3 font-bold">Teknologi & komputer</h3>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="skill-chip">Instalasi komputer</span>
                            <span class="skill-chip">Troubleshooting</span>
                            <span class="skill-chip">Microsoft Office</span>
                            <span class="skill-chip">Desain web dasar</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <span class="skill-group-label">02 / OPERASIONAL</span>
                        <h3 class="mt-3 font-bold">Kerja lapangan & K3</h3>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="skill-chip">Penanganan material</span>
                            <span class="skill-chip">Keselamatan kerja</span>
                            <span class="skill-chip">Ketahanan fisik</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <span class="skill-group-label">03 / INTERPERSONAL</span>
                        <h3 class="mt-3 font-bold">Cara bekerja</h3>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="skill-chip">Komunikasi</span>
                            <span class="skill-chip">Kerja sama tim</span>
                            <span class="skill-chip">Disiplin waktu</span>
                            <span class="skill-chip">Adaptabilitas</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <span class="skill-group-label">04 / MINAT</span>
                        <h3 class="mt-3 font-bold">Di luar pekerjaan</h3>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="skill-chip">Sepak bola</span>
                            <span class="skill-chip">Menggambar</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontak" class="mx-auto max-w-7xl px-5 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
            <div class="contact-panel relative overflow-hidden rounded-[2rem] bg-[#172a23] px-6 py-10 text-white sm:px-12 sm:py-14 lg:px-16">
                <div class="contact-decoration" aria-hidden="true"></div>
                <div class="relative z-10 grid gap-8 md:grid-cols-[1fr_auto] md:items-end">
                    <div class="max-w-2xl">
                        <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#d9f99d]">05 / LANGKAH BERIKUTNYA</p>
                        <h2 class="display-font mt-4 text-4xl leading-[1.05] sm:text-5xl lg:text-6xl">Mari bicarakan kesempatan berikutnya.</h2>
                        <p class="mt-5 max-w-xl text-sm leading-7 text-white/65 sm:text-base">Jika profil saya sesuai dengan kebutuhan tim Anda, saya senang untuk berkenalan dan membahas peluang kerja lebih lanjut.</p>
                    </div>
                    <div class="flex flex-wrap gap-3 md:flex-col">
                        <a href="mailto:andy.kamil14@gmail.com" class="inline-flex items-center justify-center gap-2 rounded-full bg-[#d9f99d] px-5 py-3 text-sm font-bold text-[#172a23] transition hover:bg-white">Kirim email ↗</a>
                        <a href="{{ asset('documents/andy-putra-cv.pdf') }}" download class="inline-flex items-center justify-center gap-2 rounded-full border border-white/25 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white/10">Unduh CV ↓</a>
                    </div>
                </div>
                <div class="relative z-10 mt-9 flex flex-wrap gap-x-6 gap-y-2 border-t border-white/15 pt-5 text-xs text-white/55 sm:text-sm">
                    <a class="transition hover:text-[#d9f99d]" href="mailto:andy.kamil14@gmail.com">andy.kamil14@gmail.com</a>
                    <a class="transition hover:text-[#d9f99d]" href="https://wa.me/6285271696776" target="_blank" rel="noopener noreferrer">WhatsApp · +62 852 7169 6776</a>
                    <a class="transition hover:text-[#d9f99d]" href="{{ asset('documents/andy-putra-cv-lama.pdf') }}" download>CV versi sebelumnya</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-[#17231f]/10">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 px-5 py-5 text-xs text-[#778078] sm:flex-row sm:items-center sm:justify-between sm:px-8 lg:px-12">
            <p>© {{ now()->year }} Andy Putra · Portofolio profesional</p>
            <a href="#beranda" class="font-semibold transition hover:text-[#17231f]">Kembali ke atas ↑</a>
        </div>
    </footer>
</body>
</html>
