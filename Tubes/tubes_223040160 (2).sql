-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2023 at 02:26 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_223040160`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `kategori_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `brand`, `gambar`, `deskripsi`, `kategori_id`) VALUES
(13, 'Sony Alpha A7', 'Sony', '647b80faa1ef4.jpg', 'Sony Alpha A7 or Sony A7 camera is a full frame camera with interchangeable lenses and light weight supporting high potability. This camera is a type of mirrorless camera with various advanced features such as rich details, OLED viewfinders, Wifi connectivity, and easy sharing systems make this device in great demand. If you want to know more about this camera, you can read more in the following article.  Sony A7 Camera Full Specifications Before buying Sony A7, first read the complete specifications below:  Lens compatibility: Sony E-mount lenses Sensor type: 35.35 x 8.23 mm full frame Exmor CMOS sensor Number of pixels: Approx. 24.3 megapixels Gamber sensor aspect ratio: 3:2 Viewfinder type XGA OLED color electronic viewfinder 1.3 cm type 0.5 Monitor type: TFT LCD type 3.0\" Connectivity: Wi-Fi with NFC capability Focus type: Fast Hybrid AF, AF detection or contrast detection AF Lighting: 1200 zone evaluative metering measurement Storage media: Memory Stick Pro Duo, Memory Stick PRO-HG Duo, Memory Stick XC-HG Duo, SD memory card, SDHC memory card and SDXC memory card. Audio: Built-in stereo microphone or ECM-CG50/XLR-K1M sold separately, monaural cup speakers Battery: NP-FW50 W Series rechargeable battery pack OS: Compatible with Windows Vista SP2, Windows 7 SP1, Windows 8, Mac OS X ( v10.5-v10.8) Key Features of Sony A7 Mirrorless Camera For its own features, the Sony A7 camera is quite sophisticated. Here are some excellent features on this mirrorless camera:  Body Material The Sony A7 camera is made from magnesium alloy, a strong lightweight metal. ', 1),
(17, 'Canon EOS 80D', 'Canon', '648109cd66997.jpeg', 'Canon EOS 80D Body Only merupakan Kamera DSLR yang menggunakan sepasang sistem fokus kamera yang kuat serta didukung dengan desain intuitif. Kamera Canon EOS 80D Body Only ini memiliki Sensor 24.2MP APS-C CMOS dan prosesor gambar DIGIC 6 yang mampu mengambil Foto dengan resolusi tinggi sampai dengan 7 fps dan Video Full HD 1080p60. Kamera ini juga dilengkapi dengan ISO baik dengan yang bisa diperluas hingga 25600 untuk memfoto dalam kondisi pencahayaan yang redup.', 1),
(18, 'Nikon D750', 'Nikon', '64810b7319379.jpeg', 'Kamera Nikon D750 adalah kamera yang dirancang khusus untuk profesional terutama untuk foto pemandangan atau landscape, fashion, periklanan, produk, dan kegiatan fotografi lainnya. Nikon D750 adalah kamera DSLR full frame dengan format FX besutan Nikon yang mengedepankan pendekatan multimedia untuk fotografi. Kamera ini dapat menghasilkan foto dan video dengan resolusi tinggi dengan dan full frame berkat sensor dan prosesor gambar yang dimilikinya. Secara keseluruhan, Nikon D750 memiliki desain bodi yang tangguh, handling yang nyaman, serta memiliki layar LCD yang dapat dimiringkan. Memiliki fitur-fitur yang menawan, kelebihan Nikon D750 yaitu dapat menghasilkan citra yang mempesona. Dengan kemampuannya tersebut, Nikon D750 sangat cocok digunakan oleh para fotografer profesional karena memiliki banyak fitur manual yang dapat dikustomisasi sesuai kebutuhan. Nikon D750 dibekali dengan sensor CMOS format FX 24.3 MP dan prosesor gambar EXPEED 4 dimana perpaduan ini akan menghasilkan kualitas gambar yang sangat jernih dan kaya warna. Dipadukan dengan ISO yang dapat diperluas ke 51200, Nikon D750 sangat cocok digunakan untuk mengambil gambar di berbagai kondisi pencahayaan. Dari sektor video, kamera ini mampu menghasilkan rekaman video hingga resolusi full HD 1080p 60fps.    Kisaran Harga Rp15.140.000 ', 1),
(19, 'Canon EOS Rebel', 'canon', '64810d362c561.jpeg', 't’s been just over four decades since autofocus 35mm cameras have become a reality. In 1987, Canon had just released their first autofocus 35mm film camera called the EOS 650, with the EF lens mount and lightning-fast autofocus. It was a bold new design that many thought would fail, but the EOS and its successors changed the game for 35mm photography, dominating the industry. Once its dominance in autofocus was secured, Canon began to look for an entry-level system to lure shutterbugs into getting more serious with the hobby, and the Rebel system was born. Canon would often innovate and put new features in their higher-end and professional models, and then a few years later, seed those innovations to the more affordable consumer-grade cameras to keep the platform growing.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Camera'),
(2, 'Lens'),
(3, 'Equipment');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama_lengkap`, `email`, `role`) VALUES
(1, 'avatarr', '$2y$10$7qRFdtKu4x7wai42xFxta.lCwpcKJ5f6pUJ4pcVt5clafuCq9bHhq', 'candra', 'candraadriansyah18@gmail.com', 'user'),
(2, 'admin', '$2y$10$clRfYkw64ECM7Csqr.e9Xu6fk/nj5c0nkgrV8JCf.EccNpdvSKvpC', 'admin', 'admin@mail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
