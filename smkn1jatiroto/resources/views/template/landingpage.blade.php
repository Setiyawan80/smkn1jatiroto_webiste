<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')| Official Website</title>

    <meta name="description"
        content="Website Resmi SMK Negeri 1 Jatiroto, Kabupaten Wonogiri.Terwujudnya tamatan yang berkarakter, terampil, menguasai ilmu pengetahuan dan teknologi serta mampu berkompetisi di dunia global. Menyelenggarakan pendidikan kejuruan unggulan untuk jurusan PPLG, TO, dan AKL.">
    <meta name="keywords"
        content="SMKN 1 Jatiroto, SMK Jatiroto, Wonogiri, PPLG, TO, AKL, Sekolah Wonogiri, SKANJA, SMK Negeri 1 Jatiroto">
    <meta name="author" content="SMK Negeri 1 Jatiroto">

    <link rel="icon" type="image/png" href="img/logo-skanja.png">
    <link rel="apple-touch-icon" href="img/logo-skanja.png">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://smkn1jatirotowonogiri.sch.id/">
    <meta property="og:title" content="SMK Negeri 1 Jatiroto - Kabupaten Wonogiri">
    <meta property="og:description"
        content="Terwujudnya tamatan yang berkarakter, terampil, menguasai ilmu pengetahuan dan teknologi serta mampu berkompetisi di dunia global. Temukan informasi profil, kegiatan, dan prestasi jurusan PPLG, TO, dan AKL di sini.">
    <meta property="og:image" content="img/logo-skanja.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://smkn1jatirotowonogiri.sch.id/">
    <meta name="twitter:title" content="SMK Negeri 1 Jatiroto - Kabupaten Wonogiri">
    <meta name="twitter:description"
        content="Mencetak generasi unggul, terampil, dan berkarakter siap kerja. Temukan informasi profil, kegiatan, dan prestasi jurusan PPLG, TO, dan AKL di sini.">
    <meta name="twitter:image" content="img/Logo SMKN1Jatiroto.png">
    <!-- Tailwind CSS CDN -->
    @vite('resources/css/app.css')
    <!-- FontAwesome untuk Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Menyembunyikan scrollbar untuk bagian story/highlight agar terlihat bersih */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-[#fafafa] text-[#262626] font-sans pt-14 md:pt-20 pb-16 md:pb-0">

    @yield('main')





    <!-- JavaScript Data Dummy & Infinity Scroll -->

    @yield('js')

</body>

</html>
