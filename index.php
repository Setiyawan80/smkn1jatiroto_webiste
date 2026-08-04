<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Jatiroto | Official Website</title>
    
    <meta name="description" content="Website Resmi SMK Negeri 1 Jatiroto, Kabupaten Wonogiri.Terwujudnya tamatan yang berkarakter, terampil, menguasai ilmu pengetahuan dan teknologi serta 
mampu berkompetisi di dunia global. Menyelenggarakan pendidikan kejuruan unggulan untuk jurusan PPLG, TO, dan AKL.">
    <meta name="keywords" content="SMKN 1 Jatiroto, SMK Jatiroto, Wonogiri, PPLG, TO, AKL, Sekolah Wonogiri, SKANJA, SMK Negeri 1 Jatiroto">
    <meta name="author" content="SMK Negeri 1 Jatiroto">

    <link rel="icon" type="image/png" href="img/logo-skanja.png">
    <link rel="apple-touch-icon" href="img/logo-skanja.png>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://smkn1jatirotowonogiri.sch.id/">
    <meta property="og:title" content="SMK Negeri 1 Jatiroto - Kabupaten Wonogiri">
    <meta property="og:description" content="Terwujudnya tamatan yang berkarakter, terampil, menguasai ilmu pengetahuan dan teknologi serta mampu berkompetisi di dunia global. Temukan informasi profil, kegiatan, dan prestasi jurusan PPLG, TO, dan AKL di sini.">
    <meta property="og:image" content="img/Logo SMKN1Jatiroto.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://smkn1jatirotowonogiri.sch.id/">
    <meta name="twitter:title" content="SMK Negeri 1 Jatiroto - Kabupaten Wonogiri">
    <meta name="twitter:description" content="Mencetak generasi unggul, terampil, dan berkarakter siap kerja. Temukan informasi profil, kegiatan, dan prestasi jurusan PPLG, TO, dan AKL di sini.">
    <meta name="twitter:image" content="img/Logo SMKN1Jatiroto.png">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar { -ms-overflow-style: none;  scrollbar-width: none; }
        
        /* App Store Style Shadow & Card Hover */
        .app-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .app-card:hover {
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased selection:bg-blue-200">

    <!-- Navbar (Sticky with Blur like iOS) -->
    <nav class="fixed w-full top-0 z-50 bg-white/70 backdrop-blur-md border-b border-gray-200/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <img src="img/logo-skanja.png" alt="Logo SMKN 1 Jatiroto" class="h-10 w-10 object-contain rounded-full border border-gray-200">
                    <span class="font-bold text-xl tracking-tight text-gray-800">SMKN 1 Jatiroto</span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#profil" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition-colors">Profil</a>
                    <a href="#kegiatan" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition-colors">Kegiatan</a>
                    <a href="#prestasi" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition-colors">Prestasi</a>
                    <a href="#pengumuman" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition-colors">Pengumuman</a>
                    <!-- <a href="pengumuman.html" class="text-sm font-medium bg-orange-900 rounded-full p-2 text-gray-100 hover:text-blue-200 transition-colors">Pengumuman SPMB</a> -->
                    <a href="https://provjateng.org/" class="bg-green-600 text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-green-700 transition flex gap-3">
                        <img src="img/logo-provinsi.png" alt="Logo Jateng" class="w-5 h-5 ">
                        Provinsi Jateng
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-lg absolute w-full">
            <a href="#profil" class="block px-4 py-3 text-sm font-medium text-gray-700 border-b border-gray-50">Profil</a>
            <a href="#kegiatan" class="block px-4 py-3 text-sm font-medium text-gray-700 border-b border-gray-50">Kegiatan</a>
            <a href="#prestasi" class="block px-4 py-3 text-sm font-medium text-gray-700 border-b border-gray-50">Prestasi</a>
            <a href="#pengumuman" class="block px-4 py-3 text-sm font-medium text-gray-700">Pengumuman</a>
                                <a href="pengumuman.html" class="block px-4 py-3 text-sm font-medium text-gray-700">Pengumuman SPMB</a>

        </div>
    </nav>

    <!-- Hero Section (App Store Feature Header style) -->
    <section class="pt-28 pb-10 px-4 max-w-7xl mx-auto">
        <div class="bg-white rounded-[2rem] p-8 md:p-12 flex flex-col md:flex-row items-center justify-between shadow-sm border border-gray-100 relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute -right-20 -top-20 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-60"></div>
            
            <div class="md:w-1/2 z-10">
                <p class="text-blue-600 font-semibold text-sm tracking-wider uppercase mb-2" id="greeting">Selamat Datang di</p>
                <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-gray-900 leading-tight mb-4">
                    SMK Negeri 1 Jatiroto
                </h1>
                <p class="text-gray-500 text-lg mb-8 leading-relaxed">
                   Terwujudnya tamatan yang berkarakter, terampil, 
menguasai ilmu pengetahuan dan teknologi serta 
mampu berkompetisi di dunia global.

                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#profil" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all">Kenali Kami</a>
                    <a href="#pengumuman" class="bg-gray-100 text-gray-800 px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition-all">Info Terbaru</a>
                </div>
            </div>
            
            <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center z-10">
                <div class="relative">
                    <img src="img/logo-skanja.png" alt="Logo SMKN 1 Jatiroto Besar" class="w-64 h-64 md:w-80 md:h-80 object-contain drop-shadow-2xl app-card rounded-full">
                    <img src="img/logo-provinsi.png" alt="Logo Jateng" class="w-20 h-20 object-contain absolute -bottom-4 -right-4 bg-white p-2 rounded-2xl shadow-lg border border-gray-100">
                </div>
            </div>
        </div>
    </section>

    <section id="headline-news" class="py-8 px-4 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row bg-white rounded-[2rem] overflow-hidden shadow-sm border border-gray-100 app-card">
            
            <!-- Bagian Gambar -->
            <div class="md:w-1/2 relative h-64 md:h-auto">
                <!-- Ganti src dengan gambar berita asli Anda -->
                <img src="picture/spandukmtq.png" alt="Rekapitulasi Realisasi Penggunaan Dana BOSP" class="absolute inset-0 w-full h-full object-cover">
                <!-- Efek gradasi hitam transparan (hanya terlihat di mobile agar gambar lebih dramatis) -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent md:hidden"></div>
            </div>
            
            <!-- Bagian Konten/Teks -->
            <div class="md:w-1/2 p-8 md:p-10 flex flex-col justify-center">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-red-50 text-red-600 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-red-100">Berita Utama</span>
                    <span class="text-gray-400 text-sm font-medium">Hari ini</span>
                </div>
                
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-900 mb-4 leading-tight hover:text-blue-600 transition-colors cursor-pointer">
                    Jawa Tengah Siap Sukseskan MTQ Nasional XXXI 2026 di Semarang: Dinas Pendidikan Ajak Seluruh Satuan Pendidikan Berperan Aktif
                </h2>
                
                <!-- line-clamp-3 digunakan agar teks terpotong otomatis jika terlalu panjang -->
                <p class="text-gray-500 text-base mb-8 leading-relaxed line-clamp-3">
                    SEMARANG — Provinsi Jawa Tengah resmi menjadi tuan rumah penyelenggaraan Musabaqah Tilawatil Qur'an (MTQ) Tingkat Nasional XXXI Tahun 2026. Perhelatan akbar tingkat nasional ini dipusatkan di Kota Semarang pada tanggal 11 s.d. 20 September 2026 dengan mengusung tema “Menebar Cahaya Al-Qur’an Dalam Harmoni Menuju Indonesia Emas Yang Berkeadaban”
                    <br>

                   Menindaklanjuti arahan Sekretaris Daerah Provinsi Jawa Tengah, Kepala Dinas Pendidikan Provinsi Jawa Tengah, Dr. Sadimin, S.Pd., S.Sos., S.IPem., M.Eng., meminta seluruh jajaran Cabang Dinas Pendidikan Wilayah I s.d. XII, Balai Pengembangan Mutu Pembelajaran dan Teknologi Pendidikan, serta Kepala Sekolah SMA, SMK, dan SLB se-Jawa Tengah untuk turut menyemarakkan dan mendukung penuh publikasi kegiatan ini.
                   <br>
                  Bentuk Dukungan & Partisipasi Sekolah/Satuan Pendidikan:
                   
                </p>
                
                <div>
                    <a href="page/mtq.php" class="inline-flex items-center justify-center bg-blue-600 text-white px-6 py-2.5 rounded-full text-sm font-bold shadow-md shadow-blue-200 hover:bg-blue-700 hover:-translate-y-0.5 transition-all">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>
        
    </section>

    <!-- Pengumuman (App Store Editor's Choice Style) -->
    <section id="pengumuman" class="py-8 px-4 max-w-7xl mx-auto">
        <div class="flex justify-between items-end mb-6">
            <div>
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Pengumuman Penting</h2>
                <p class="text-gray-500 text-sm mt-1">Informasi terkini dari sekolah</p>
            </div>
            <a href="#" class="text-blue-600 text-sm font-semibold hover:underline">Lihat Semua</a>
        </div>
        
        <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-[2rem] p-8 text-white shadow-lg relative overflow-hidden app-card">
            <!-- Decoration -->
            <div class="absolute right-0 top-0 w-64 h-full bg-white opacity-10 blur-2xl transform skew-x-12"></div>
            
            <span class="bg-white/20 px-3 py-1 rounded-full text-xs font-semibold tracking-wider uppercase backdrop-blur-sm">BARU</span>
            <h3 class="text-2xl font-bold mt-4 mb-2">Informasi Pengumuman Peserta Didik Baru (PPDB) 2026</h3>
            <p class="text-blue-100 mb-6 max-w-xl">
                Informasi hasil seleksi SMA/SMK sudah bisa di cek dilaman SPMB. Silahkan untuk mengakses dan klik berikut ini : <a href="pengumuman.html" class="text-orange-400">SPMB JATENG 2026</a>.
            </p>
            
            <form action="pengumuman.html" method="get">
                <button class="bg-white text-blue-700 px-6 py-2.5 rounded-full text-sm font-bold shadow-sm hover:scale-105 transition-transform">Lihat Hasil Seleksi</button>
            </form>
            
        </div>
    </section>

    <!-- Profil Sekolah (Grid / Cards) -->
    
        <!-- PROFIL SCROLL -->
             <!-- Prestasi (Horizontal Scroll / App Carousel) -->
            <section id="profil" class="py-8 pl-4 md:pl-0 max-w-7xl mx-auto overflow-hidden">
                <div class="md:px-4 mb-4">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Profil Sekolah</h2>
                    <p class="text-gray-500 text-sm mt-1"><strong>SMK Negeri 1 Jatiroto</strong> (NPSN: <i>69760777</i>) adalah sekolah kejuruan negeri terakreditasi B yang berdiri sejak 2012 di Kec. Jatiroto, Kabupaten Wonogiri.</p>
                </div>
                
                <!-- Scroll Container -->
                <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-8 pt-2 no-scrollbar md:px-4" id="prestasi-scroll">
                    
                    <!-- Item 1 -->
                    <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                        <div class="h-32 bg-yellow-50 rounded-xl mb-4 flex items-center justify-center text-yellow-500">
                             <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                         <h3 class="text-lg font-bold text-gray-900 mb-2">Misi Kami</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    <ul class="list-disc text-gray-500 text-sm leading-relaxed">
                        <li>Menumbuhkan karakter melalui keteladanan dan pembiasaan</li>
                        <li>Membekali peserta didik dengan keterampilan yang sesuai dengan kompetensi keahlianya</li>
                        <li>Membekali peserta didik dengan IPTEK dan seni budaya </li>
                        <li>Menyiapkan peserta didik agar mampu bersaing di dunia global</li>
                    </ul>

                </p>
                    </div>
        
                    <!-- Item 2 -->
                    <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                        <div class="h-32 bg-orange-300/50 rounded-xl mb-4 flex items-center justify-center text-green-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Program Keahlian</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            <ul class="list-disc text-gray-500 text-sm leading-relaxed">
                                <li><b>Teknik Otomotif (TO)</b><br>
                                    <p>
                                        Kuasai keahlian merawat dan memperbaiki mesin, sasis, hingga kelistrikan kendaraan bermotor. Jadilah mekanik profesional yang siap kerja hari ini!
                                    </p>
                                </li>
                                <li><b>Pengembangan Perangkat Lunak dan Gim. (PPLG)</b>
                                    <br>
                                    <p>
                                        Pelajari cara membuat aplikasi, website, dan game dari nol! Jadilah programmer handal yang kreatif dan siap berkarir di dunia teknologi masa depan.
                                    </p>
                                </li>
                                <li><b>Akutansi dan Keuangan Lembaga (AKL)</b>
                                    <br>
                                    <p>
                                        Kuasai keterampilan mencatat transaksi, mengelola dana, hingga membuat laporan keuangan. Jadilah staf akuntansi yang teliti, jujur, dan siap kerja!
                                    </p>
                                </li>
                            </ul>
        
                        </p>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                        <div class="h-32 bg-indigo-50 rounded-xl mb-4 flex items-center justify-center text-green-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Fasilitas Yang Tersedia</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            <ul class="list-disc text-gray-500 text-sm leading-relaxed">
                                <li>Laboratorium Komputer A, B, C dan D</li>
                                <li>Perpustakaan</li>
                                <li>Lapangan Basket, Voli, Pingpong, Upacara, Lompat Jauh</li>
                                <li>Studio Musik, Studio Broadcasting</li>
                                <li>UKS, Ruang Pramuka</li>
                                <li>Masjid</li>
                                <li>Kantin Sekolah</li>
                                <li>Bank Artha Siswa </li>
                                <li>Bengkel Motor</li>
                                <li>Gedung Aula</li>
                                
                            </ul>
                        </p>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                        <div class="h-32 bg-green-50 rounded-xl mb-4 flex items-center justify-center text-green-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>

                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Ekstrakurikuler</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            <ul class="list-disc text-gray-500 text-sm leading-relaxed">
                                <li>Pramuka</li>
                                <li>PMR</li>
                                <li>Paduansuara (Golden Voice)</li>
                                <li>Drum band</li>
                                <li>PASKIBRA (PASSKANSA)</li>
                                <li>ROHIS</li>
                                <li>Band</li>
                                <li>Techno Art</li>
                                <li>Tari</li>
                                <li>Futsal</li>
                                <li>Bola Voli</li>
                                <li>Bulu Tangkis</li>
                                
                            </ul>
                        </p>
                    </div>
            </section>

        <!-- PROFIL SCROLL -->


    <!-- Prestasi (Horizontal Scroll / App Carousel) -->
    <section id="kegiatan" class="py-8 pl-4 md:pl-0 max-w-7xl mx-auto overflow-hidden">
        <div class="md:px-4 mb-4">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">10 Berita Terkini</h2>
            <p class="text-gray-500 text-sm mt-1">Seluruh kegiatan dan informasi </p>
        </div>
        
        <!-- Scroll Container -->
        <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-8 pt-2 no-scrollbar md:px-4" id="prestasi-scroll">
            
            <!-- Item 1 -->
                <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                <div class="h-32 bg-yellow-50 rounded-xl mb-4 flex items-center justify-center text-yellow-500">
                    <img src="picture/foto1.jpeg" class="w-full h-full" alt="">
                   
                </div>
                <span class="text-xs font-bold text-yellow-600 uppercase tracking-wider">Dokumen rekapitulasi realisasi penggunaan dana BOSP Tahap 1 Tahun 2026.</span>
                <h4 class="text-gray-900 font-bold text-lg mt-1 leading-tight">Wujudkan Transparansi, SMKN 1 Jatiroto Laporkan Realisasi Penggunaan Dana BOSP Tahap 1 Tahun 2026</h4>
                <div class="mt-2 p-2 flex justify-center text-sm w-full ">
                    <a href="page/detailberita.php" class="p-2 rounded-full bg-blue-700 hover:bg-blue-600 active:bg-blue-800 text-gray-200 w-full text-center">Selengkapnya</a>
                </div>
            </div>

            <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                <div class="h-32 bg-yellow-50 rounded-xl mb-4 flex items-center justify-center text-yellow-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <span class="text-xs font-bold text-yellow-600 uppercase tracking-wider">IHT Penyusunan Kurikulum</span>
                <h4 class="text-gray-900 font-bold text-lg mt-1 leading-tight">Bapak dan Ibu Pendidik melaksanakan IHT untuk penyusunan Kurikulum 2026/2027</h4>
            </div>

            <!-- Item 2 -->
            <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                <div class="h-32 bg-blue-50 rounded-xl mb-4 flex items-center justify-center text-blue-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">Lembaga Sertifikasi Profesi (LSP)</span>
                <h4 class="text-gray-900 font-bold text-lg mt-1 leading-tight">Pelaksanaan LSP P-1 untuk siswa kelas XII SMKN 1 Jatiroto</h4>
            </div>

            <!-- Item 3 -->
            <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                <div class="h-32 bg-green-50 rounded-xl mb-4 flex items-center justify-center text-green-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <span class="text-xs font-bold text-green-600 uppercase tracking-wider">Gelar Potensi Siswa</span>
                <h4 class="text-gray-900 font-bold text-lg mt-1 leading-tight">Siswa menunjukkan bakat dan minatnya kepada warga SMKN 1 Jatiroto</h4>
            </div>
             <!-- Item 4 -->
            <div class="min-w-[280px] w-[75vw] md:w-[350px] bg-white shadow-sm border border-gray-100 rounded-[1.5rem] p-5 snap-center shrink-0 app-card">
                <div class="h-32 bg-green-50 rounded-xl mb-4 flex items-center justify-center text-green-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <span class="text-xs font-bold text-green-600 uppercase tracking-wider">Penerimaan Raport Semester 2 </span>
                <h4 class="text-gray-900 font-bold text-lg mt-1 leading-tight">Siswa telah melaksanakan pembelajaran di Semester 2</h4>
            </div>

             <!-- Spacer for perfect mobile scroll padding -->
             <div class="min-w-[16px] md:hidden"></div>
        </div>
        <div class="text-center w-full">
            <a class="ml-4 bg-gray-100 text-blue-600 font-bold text-sm px-4 py-1.5 rounded-full hover:bg-gray-200">Lihat Selengkapnya</a>
        </div>
    </section>

    <!-- prestasi (List / List App Style) -->
       <section id="prestasi" class="py-10 px-4 max-w-3xl mx-auto">
        <div class="flex flex-col justify-start items-start mb-6">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Prestasi Terkini</h2>
            <p class="text-gray-500 text-sm mt-1">Bakat dan Minat serta kompetensi membanggakan dari Murid SMKN 1 Jatiroto </p>
        </div>
        
        <div id="kegiatan-container" class="bg-white rounded-[1.5rem] border border-gray-100 shadow-sm overflow-hidden">
            <div class="p-4 text-center text-gray-500">Memuat data...</div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 pb-10 pt-12">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center md:items-start gap-8 text-center md:text-left">
            
            <div class="flex flex-col items-center md:items-start">
                <div class="flex items-center gap-3 mb-4">
                    <img src="img/logo-skanja.png" alt="Logo Sekolah" class="w-10 h-10 object-contain rounded-full">
                    <span class="font-bold text-xl text-gray-800">SMKN 1 Jatiroto</span>
                </div>
                <p class="text-sm text-gray-500 max-w-xs">
                    Jl. Raya Jatiroto - Wonogiri.<br>
                    Kabupaten Wonogiri, Jawa Tengah, Indonesia.
                </p>
            </div>

            <div>
                <h4 class="font-bold text-gray-900 mb-3">Tautan Cepat</h4>
                <ul class="space-y-2 text-sm text-gray-500">
                    <!-- <li><a href="#" class="hover:text-blue-600">Portal e-Learning</a></li>
                    <li><a href="#" class="hover:text-blue-600">Perpustakaan Digital</a></li> -->
                    <li><a href="https://bkksmkn1jatiroto.com/" class="hover:text-blue-600">Bursa Kerja Khusus (BKK)</a></li>
                </ul>
            </div>

            <div class="flex flex-col items-center md:items-end">
                <p class="text-sm font-semibold text-gray-900 mb-3">Didukung oleh:</p>
                <img src="img/logo-provinsi.png" alt="Pemerintah Provinsi Jawa Tengah" class="w-16 h-16 object-contain">
            </div>

        </div>
        <div class="max-w-7xl mx-auto px-4 mt-12 border-t border-gray-100 pt-6 text-center text-xs text-gray-400">
            &copy; 2026 SMK Negeri 1 Jatiroto. All rights reserved.
        </div>
    </footer>

    <!-- JavaScript Pemanis -->
    <script>
    
    document.addEventListener('DOMContentLoaded', () => {
    fetchKegiatan();
});

async function fetchKegiatan() {
    const container = document.getElementById('kegiatan-container');
    const API_URL = 'https://api.domain-anda.com/prestasi'; // Ganti dengan URL API asli nantinya

    // DATA DUMMY: Hapus blok ini jika API asli sudah siap
    const dummyData = [
        {
            id: 1,
            title: "IHT Penyusunan Kurikulum",
            desc: "Bapak dan Ibu Pendidik melaksanakan IHT untuk penyusunan Kurikulum 2026/2027",
            icon: `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>`
        },
        {
            id: 2,
            title: "Lembaga Sertifikasi Profesi (LSP)",
            desc: "Pelaksanaan LSP P-1 untuk siswa kelas XII SMKN 1 Jatiroto",
            icon: `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>`
        },
        {
            id: 3,
            title: "Gelar Potensi Siswa",
            desc: "Siswa menunjukkan bakat dan minatnya kepada warga SMKN 1 Jatiroto",
            icon: `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`
        }
    ];

    try {
        // --- JIKA API SUDAH SIAP, UNCOMMENT 2 BARIS DI BAWAH INI ---
        // const response = await fetch(API_URL);
        // const data = await response.json();
        
        // --- HAPUS BARIS INI JIKA API SUDAH SIAP ---
        const data = dummyData; 

        // Bersihkan kontainer sebelum diisi
        container.innerHTML = '';

        // Looping data dan masukkan ke dalam HTML
        data.forEach((item, index) => {
            // Cek apakah item terakhir untuk menghapus border-b
            const isLast = index === data.length - 1;
            const borderClass = isLast ? '' : 'border-b border-gray-50';

            const htmlItem = `
                <div class="flex items-center p-4 ${borderClass} hover:bg-gray-50 transition cursor-pointer" onclick="lihatDetail(${item.id})">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex-shrink-0 mr-4 flex items-center justify-center text-gray-400">
                        ${item.icon}
                    </div>
                    <div class="flex-grow">
                        <h4 class="font-bold text-gray-900">${item.title}</h4>
                        <p class="text-sm text-gray-500 line-clamp-1">${item.desc}</p>
                    </div>
                    <button class="ml-4 bg-gray-100 text-blue-600 font-bold text-sm px-4 py-1.5 rounded-full hover:bg-gray-200">Lihat</button>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', htmlItem);
        });

    } catch (error) {
        console.error("Gagal mengambil data:", error);
        container.innerHTML = `<div class="p-4 text-center text-red-500 text-sm">Gagal memuat data. Silakan coba lagi nanti.</div>`;
    }
}

// Fungsi dummy untuk tombol "Lihat" atau saat baris diklik
function lihatDetail(id) {
    console.log("Membuka detail untuk ID:", id);
    // window.location.href = `/prestasi/detail/${id}`;
}
    
    
    
        // 1. Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });

        // 2. Dynamic Greeting based on time
        const greetingElement = document.getElementById('greeting');
        const hour = new Date().getHours();
        let greetingText = "Selamat Datang di";
        
        if (hour >= 5 && hour < 11) greetingText = "Halo Selamat Pagi, Selamat Datang di";
        else if (hour >= 11 && hour < 15) greetingText = "Halo Selamat Siang, Selamat Datang di";
        else if (hour >= 15 && hour < 18) greetingText = "Halo Selamat Sore, Selamat Datang di";
        else greetingText = "Selamat Malam, Selamat Datang di";
        
        greetingElement.innerText = greetingText;

        // 3. Optional: Allow mouse drag to scroll horizontally on the 'prestasi' container for desktop
        const slider = document.getElementById('prestasi-scroll');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('cursor-grabbing');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('cursor-grabbing');
        });
        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('cursor-grabbing');
        });
        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; // Scroll-fast multiplier
            slider.scrollLeft = scrollLeft - walk;
        });
    </script>
</body>
</html>