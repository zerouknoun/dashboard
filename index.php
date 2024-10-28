<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" href="img/logo.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dg Nantang Printing - Jasa Sablon Baju Terbaik di Sulawesi Selatan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'fashion-blue': '#3498db',
                        'fashion-pink': '#e91e63',
                        'fashion-yellow': '#f1c40f',
                        'whatsapp-green': '#25D366',
                    }
                }
            }
        }
    </script>
</head>

<?php
// Data untuk konten dinamis
$layanan = [
    [
        'judul' => 'Layanan Sablon Baju Berkualitas di Sulawesi Selatan',
        'deskripsi' => 'Dg Nantang Printing telah lama melayani masyarakat di Makassar dan sekitarnya, menawarkan berbagai layanan sablon yang meliputi sablon manual, sablon digital, dan sablon polyflex. Kami dikenal karena kualitas cetakan yang luar biasa serta kemampuan untuk menangani pesanan dalam jumlah kecil hingga besar.',
        'poin' => [
            'Pengalaman dan reputasi terpercaya',
            'Teknologi sablon terkini',
            'Pelayanan kustom untuk semua kebutuhan'
        ]
    ],
    [
        'judul' => 'Keunggulan Sablon Baju di Dg Nantang Printing',
        'deskripsi' => 'Kami menyediakan berbagai jenis sablon untuk berbagai keperluan di Sulawesi Selatan, termasuk sablon manual, digital, dan polyflex. Setiap jenis sablon kami dirancang untuk memberikan hasil terbaik, baik itu untuk pemesanan kaos perusahaan, acara besar, ataupun kaos satuan.',
        'poin' => [
            'Sablon Manual - Cocok untuk desain sederhana dan tahan lama',
            'Sablon Digital - Ideal untuk desain detail dan berwarna-warni',
            'Sablon Polyflex - Untuk hasil cetak tulisan atau logo kualitas premium'
        ]
    ],
    [
        'judul' => 'Layanan di Makassar, Gowa, Takalar, dan Jeneponto',
        'deskripsi' => 'Kami tidak hanya melayani di Makassar, tetapi juga siap mengirimkan pesanan ke wilayah Gowa, Takalar, dan Jeneponto. Dengan jaringan yang luas, kami pastikan setiap pelanggan di Sulawesi Selatan bisa menikmati layanan sablon baju terbaik tanpa harus jauh-jauh datang ke kota besar.',
        'poin' => [
            'Jangkauan layanan luas di Sulawesi Selatan',
            'Pengiriman cepat dan aman',
            'Konsultasi desain gratis'
        ]
    ]
];
?>

<body class="bg-gray-50 font-sans">

<header class="bg-fashion-blue text-white py-4 sm:py-6 md:py-8 lg:py-10">
    <div class="container mx-auto text-center px-4">
        <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2">Dg Nantang Printing: Jasa Sablon Baju Terbaik di Makassar, Gowa, Takalar, dan Jeneponto</h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl">Spesialis Sablon Baju Berkualitas Tinggi di Sulawesi Selatan</p>
    </div>
</header>

<section class="container mx-auto px-4 py-4 sm:py-6 md:py-8 lg:py-10">
    <div class="w-full sm:w-4/5 md:w-3/4 lg:w-1/2 mx-auto">
        <img src="img/2.jpg" alt="Banner Dg Nantang Printing" class="w-full h-auto rounded-lg shadow-md">
    </div>
</section>

<div class="container mx-auto px-4 py-4 sm:py-6 md:py-8 lg:py-10">
    <?php foreach ($layanan as $index => $item): ?>
    <section class="bg-white rounded-lg shadow-md p-4 sm:p-6 md:p-8 mb-4 sm:mb-6 md:mb-8 border-l-4 <?php echo $index % 3 == 0 ? 'border-fashion-blue' : ($index % 3 == 1 ? 'border-fashion-pink' : 'border-fashion-yellow'); ?>">
        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold <?php echo $index % 3 == 0 ? 'text-fashion-blue' : ($index % 3 == 1 ? 'text-fashion-pink' : 'text-fashion-yellow'); ?> mb-2 sm:mb-4"><?php echo $item['judul']; ?></h2>
        <p class="text-sm sm:text-base md:text-lg text-gray-700 mb-2 sm:mb-4"><?php echo $item['deskripsi']; ?></p>
        <ul class="list-disc list-inside text-gray-600">
            <?php foreach ($item['poin'] as $poin): ?>
            <li class="mb-1 text-sm sm:text-base"><?php echo $poin; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <?php endforeach; ?>
</div>

<div class="fixed bottom-4 right-4 z-50">
    <a href="https://wa.me/6285824456429" target="_blank" class="bg-whatsapp-green hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full shadow-lg transition duration-300 ease-in-out flex items-center">
        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        <span class="hidden sm:inline">Hubungi Kami</span>
    </a>
</div>

<footer class="bg-fashion-blue text-white py-4 sm:py-6 md:py-8">
    <div class="container mx-auto text-center px-4">
        <p class="text-sm sm:text-base">&copy; <?php echo date('Y'); ?> Dg Nantang Printing. Jasa Sablon Baju Terbaik di Sulawesi Selatan.</p>
    </div>
</footer>

</body>
</html>
