-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 03:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar_domba`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jawaban`
--

CREATE TABLE `riwayat_jawaban` (
  `id_jawaban` int(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `jawaban` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_jawaban`
--

INSERT INTO `riwayat_jawaban` (`id_jawaban`, `waktu`, `jawaban`) VALUES
(70, '2021-07-31 13:13:25', 'G1'),
(71, '2021-07-31 13:27:17', 'G1 G2 G3 G4 G5'),
(85, '2021-07-31 13:35:34', 'G1 G3 G5 G7 G9 G11 G13 G15 G17 G19 G21 G23 G25 G27 G29 G31 G33 G35'),
(86, '2021-07-31 13:40:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(10) NOT NULL,
  `gejala` varchar(300) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`, `kode_gejala`) VALUES
(1, 'Perut kiri bengkak', 'G1'),
(2, 'Perut kanan juga bengkak', 'G2'),
(3, 'Pengeluaran air liur berlebih', 'G3'),
(4, 'Sulit bernafas (Bernafas melalui mulut)', 'G4'),
(5, 'Sulit membuang air besar', 'G5'),
(6, 'Diare pada domba', 'G6'),
(7, 'Demam pada domba', 'G7'),
(8, 'Penurunan berat badan', 'G8'),
(9, 'Penurunan produksi susu', 'G9'),
(10, 'Pembengkakan rahang bawah', 'G10'),
(11, 'Gatal-gatal dan rontoknya bulu', 'G11'),
(12, 'Kulit rusak', 'G12'),
(13, 'Penurunan nafsu makan', 'G13'),
(14, 'Mengeluarkan kotoran cair dan berbau busuk', 'G14'),
(15, 'Lemas dan tidak bersemangat', 'G15'),
(16, 'Luka mirip jerawat pada bagian bawah bibir & kelopak mata', 'G16'),
(17, 'Sulit melihat', 'G17'),
(18, 'Mata memerah', 'G18'),
(19, 'Gigi gemertak', 'G19'),
(20, 'BAB dan buang air kecil bercampur darah', 'G20'),
(21, 'Sakit ketika puting dipegang', 'G21'),
(22, 'Pembengkakan area puting', 'G22'),
(23, 'Domba merasa kesakitan', 'G23'),
(24, 'Luka dan dipenuhi lalat larva', 'G24'),
(25, 'Pencukuran dan penggunaan ear tag', 'G25'),
(26, 'Luka pada tubuh', 'G26'),
(27, 'Kaku pada otot', 'G27'),
(28, 'Rahim menggantung', 'G28'),
(29, 'Benjolan pada kaki', 'G29'),
(30, 'Pembengkakan kuku', 'G30'),
(31, 'Kulit kuku mengelupas', 'G31'),
(32, 'Kuku mengeluarkan cairan', 'G32'),
(33, 'Sering kencing', 'G33'),
(34, 'Penegangan telinga dan wajah', 'G34'),
(35, 'Mengalami kejang', 'G35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(10) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(60) NOT NULL,
  `penjelasan` varchar(5000) NOT NULL,
  `gejala` varchar(5000) NOT NULL,
  `penanganan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `penjelasan`, `gejala`, `penanganan`) VALUES
(1, 'P1', 'Bloat', 'Disebut juga tympany, kembung. Berdasarkan teori domba bisa kembung seperti pada sapi. Kembung adalah adanya akumulasi gas yang berlebihan di dalam rumen. Gas tersebut bisa berupa gas bebas atau gas berbuih yang bercampur dengan bahan asing yang masuk ke dalam rumen, bisa bahan pakan, benda padat lain yang tidak terkunyah sempurna, atau karena makan bahan pakan yang bisa menimbulkan gas, seperti golongan leguminosa. Tingkat kematian pada kasus bloat sangat tinggi.\r\n', 'Domba yang mengalami bloat akan menunjukkan pembesaran perut khususnya sebelah kiri,  terutama di area legok lapar, dan bisa meluas hingga legok lapar sebelah kanan pada kasus berat. Domba biasanya mengalami hipersalivasi dan anxious, bernafas melalui mulut, ambruk, dan susah mengeluarkan feses.\r\n', 'Tingginya kematian pada kasus bloat ini membutuhkan penanganan pertama yang bisa dilakukan oleh peternak sembari menunggu dokter hewan datang. Pertolongan yang bisa dilakukan adalah menurunkan stabilitas gas dan buih dengan memberikan minum dengan minyak mineral/ minyak kelapa yang dicampur dengan air hangat. '),
(2, 'P2', 'Cacing Hati', 'Cacing hati memiliki istilah medis fasciolosis karena penyebabnya adalah cacing Fasciola gigantica maupun F. Hepatica. Cacing ini termasuk kelas Trematoda. Penyebaran penyakit ini melalui inang antara berupa siput Lymneaea rubiginosa. Cacing ini hidup di daerah yang lembab, basah, dan tersebar di daerah tropis dan subtropis. Cacing hati menyerang spesies rentan seperti ternak sapi, kambing, dan domba.', 'Cacing hati menyerang organ hati dengan membentuk jaringan ikat pada hati dan peradangan kronis pada saluran empedu, sehingga domba mengalami sakit di daerah hati, ditandai dengan sakit perut, diare, demam, dan anemia. Selain itu, pertumbuhan domba mengalami gangguan, sulit gemuk, penurunan berat badan, dan penurunan produksi susu. Infestasi cacing hati yang kronis akan menimbulkan gejala klinis adanya pembengkakan di area rahang bawah domba. ', 'Hindari pakan yang semiakuatik, tanaman di sekitar rawa-rawa yang berpotensi hidup berdampingan dengan inang antara berupa siput. Berikan bolus obat cacing dosis domba setiap 2-3 bulan sekali. Jika perkembangan tidak kunjung membaik segera hubungi dokter hewan praktik terdekat.'),
(3, 'P3', 'Scabies', 'Disebut juga dengan gudigan atau kudis. Penyakit ini bersifat zoonosis (menular dari hewan ke manusia, atau sebaliknya). Scabies identik dengan rendahnya tingkat sanitasi dan higenitas di daerah kandang, over populasi, dan penularan yang sangat cepat. Penyebab penyakit yang paling sering dan dianggap paling patogen adalah tungau Sarcoptes scabiei, namun ada spesies tungau lain seperti Psoroptes ovis, Notoedres sp, Chorioptes sp. Tungau ini menyerang kulit domba dengan cara membuat terowongan di bawah lapisan kulit sehingga menimbulkan gejala klinis tertentu. Scabies pada domba lebih sering dilaporkan karena lebih rentan dimana bulu yang lebat, panjang, dan kotor sehingga merupakan tempat yang ideal bagi tungau S. scabiei. ', 'Penularan scabies terjadi melalui kontak langsung antar domba dengan sifat penularan yang cepat, khususnya pada kandang domba yang padat. Scabies menyebabkan gatal, kerontokan bulu, kerusakan kulit, turunnya produksi (daging, susu, wol, kulit), penurunan nafsu makan, bahkan kematian ketika kejadiannya kronis.', 'Penanganan yang bisa dilakukan oleh peternak adalah memisahkan domba yang terjangkit scabies dengan yang sehat pada kandang karantina. Pengobatan menggunakan obat yang digunakan secara langsung pada kulit antara lain 1% larutan yang berisi serbuk BHC dengan kadar 0,625%, namun karena lokasi tungau ada di dalam kulit, maka pengobatan butuh kesabaran. Pengobatan sistemik hanya bisa dilakukan oleh dokter hewan.'),
(4, 'P4', 'Orf', 'Merupakan penyakit menular pada domba dan kambing yang disebabkan oleh virus grup DNA bernama Parapox dan bersifat zoonosis. Penyakit ini ditandai dengan terbentuknya papula, vesikula, dan keripeng pada kulit di daerah bibir atau sekitarnya. Orf sering menyerang domba muda sekitar 3-5 bulan dengan angka kesakitan penyakit ini bisa mencapai 90% dan sering terjadi pada kandang koloni, khususnya domba yang baru datang karena terinfeksi dalam perjalanan.', 'Orf ditularkan melalui kontak langsung melalui kulit yang terinfeksi virus kepada domba yang sehat. Bentukan lesinya mirip dengan jerawat pada manusia namun lebih besar karena mengalami peradangan, berisi cairan, dan membentuk kerak saat mengelupas setelah 1-2 minggu. Lesi orf menciri khas karena menyerang area bibir dan sekitarnya, kelopak mata, alat genital, ambing, dan kaki yang jarang ditumbuhi bulu. Domba yang terserang orf umumnya mengalami penurunan nafsu makan akibat lesi yang ada di sekitar mulut. Orf biasanya berlangsung selama 3-4 minggu, namun jika tidak segera ditangani akan terjadi komplikasi dengan infeksi sekunder seperti bakteri sehingga menyebabkan tingkat kesembuhan semakin lama, bahkan kematian.', 'Pemberian multivitamin secara oral sangat dianjurkan untuk memberbaiki imunitas tubuh, dan memberikan salep/cream berisi jodium tincture pada kulit yang terinfeksi.'),
(5, 'P5', 'Diare Colibacillosis', 'Diare pada domba adalah penyakit yang kerap terjadi, sebenarnya penyebab diare bermacam-macam, bisa disebabkkan oleh agen penyakit bakteri, parasit, atau virus. Salah satu yang paling sering terjadi adalah penyakit colibacillosis dengan agen penyakit bakterial Escherichia coli (E. coli). Bakteri ini bisa ditemukan juga di usus manusia dan menyerang banyak ternak rentan berusia muda seperti sapi, babi, domba, kambing, dan kuda. Kejadian colibacillosis sangat erat kaitannya dengan kondisi lingkungan seperti higenitas, sanitasi, kebersihan, dan kepadatan kandang.', 'Domba akan mengalami diare akibat memakan atau meminum bahan pakan yang tercemar oleh bakteri E. coli. Penyakit berkembang dengan cepat dengan derajat kematian tinggi, khususnya pada newborn atau anakan. Peneguhan diagnosis dilakukan oleh dokter hewan dengan pemeriksaan laboratorium terhadap kotoran domba dengan uji feses.', 'Hindarkan domba dari pakan atau lingkungan yang kotor. Colibacillosis adalah penyakit bakterial yang harus diobati secara sistemik dengan dosis obat tertentu, jadi penanganan terapi hanya bisa dilakukan oleh seorang dokter hewan. Mencegah penyebaran penyakit lebih baik daripada mengobati.'),
(6, 'P6', 'Pink Eye', 'Adalah penyakit menular pada ternak seperti sapi, kerbau, domba, dan kambing yang menyerang mata. Penyakit ini menimbulkan kerugian ekonomi karena ternak mangalami penurunan nafsu makan sehingga terjadi penurunan berat badan. Penyebab penyakit ini bisa berupa bakteri, virus, rickettsia, atau chlamydia, namun yang sering ditemukan adalah bakteri Rickettsia conjungtivae, Mycoplasma conjungtivae, Brahanella catarrahalis, dan Chlamydia. Penyakit pink eye terjadi pada saat musim panas saat banyak debu berterbangan dan meningkatnya populasi lalat. Akan tetapi, kasus kronis berlangsung sepanjang tahun.', 'Pink eye memiliki gejala klinis berupa radang dan kemerahan pada konjungtiva dan kornea keruh. Domba yang mengalami pink eye dapat bersifat karier, artinya berpotensi untuk terinfeksi lagi.', 'Pink eye bisa ditangani oleh peternak jika derajatnya belum kronis, bisa diminimalisir dengan pemberian obat cuci mata untuk mengurangi derajat radang dan kemerahannya. Jika belum membaik silahkan hubungi dokter hewan.'),
(7, 'P7', 'Anthraks', 'Disebut juga penyakit radang limpa, merupakan penyakit mematikan yang sangat diwaspadai karena bersifat infeksius terhadap ternak memamah biak khususnya sapi dan domba, serta  zoonosis. Penyebab panyakit ini adalah bakteri Bacillus anthracis yang bersifat akut atau perakut. Ternak yang sudah terinfeksi anthraks tidak boleh dipotong karena sifat bakterinya aerob dan mampu membentuk spora sehingga mampu bertahan hidup hingga puluhan tahun di lingkungan.', 'Penyakit anthraks ini adalah penyakit yang sifatnya sangat mendadak. Domba yang terinfeksi anthraks akan mengalami demam tinggi yang disertai dengan gigi gemeretak, terlihat berputar putar, hipersalivasi, pernafasan berat, frekuensi jantung meningkat, feses dan urin bercampur darah, tidak lama kemudian ternak mati. Jika ternak mati ditandai dengan perdarahan dari lubang-lubang alami seperti telinga, hidung, kemaluan, dan rektum.', 'Anthraks merupakan penyakit kompleks yang butuh peneguhan diagnosa lebih lanjut dan dilakukan oleh dokter hewan. Jika ada ternak domba yang menunjukkan gejala di atas segera laporkan pada dokter hewan.'),
(8, 'P8', 'Mastitis', 'Adalah radang ambing yang sering terjadi pada semua jenis mamalia, khususnya ternak perah seperti domba, kambing, dan sapi perah. Sifat dari penyakit ini bisa akut, subakut, atau kronis dan disebabkan oleh berbagai jenis bakteri (golongan Streptococcus sp dan Staphylococcus sp) atau mikoplasma. Mastitis bisa terjadi karena faktor lingkungan yang kurang bersih, lantai kandang, atau alat-alat perah yang tercemar.', 'Ambing membengkak jika ditekan terasa berjonjot dan panas, domba merasa kesakitan jika ambing disentuh, susu yang diperah pecah dan kadang bercampur nanah.', 'Penanganan pertama yang bisa dilakukan oleh peternak adalah memerah ambing yang bengkak secara perlahan-lahan sampai tuntas, kemudian dikompres menggunakan air hangat. Pengobatan lebih lanjut untuk membunuh agen bakterial segera hubungi dokter hewan. '),
(9, 'P9', 'Myiasis', 'Myiasis adalah penyakit yang disebabkan oleh infestasi larva lalat (Myia) di dalam jaringan hidup dalam waktu tertentu untuk memakan jaringan inang dan cairan tubuh. Lalat yang sering menjadi penyebab myiasis adalah Chrysomya bezziana. Disebut juga sebagai penyakit belatungan. Belatung atau larva lalat yang ada di jaringan inang berawal dari luka berdarah yang cukup dalam dan tidak segera sembuh. Aroma darah yang anyir itulah yang mengundang lalat untuk meletakkan telurnya.', 'Luka pada jaringan domba akan dipenuhi larva lalat, jika tidak segera ditangani larva akan merongrong jaringan lebih dalam dan meluas, domba akan merasa risih, gatal, bahkan kesakitan.', 'Secara tradisional myiasis bisa diobati dengan air tembakau sebagai penanganan pertama. Jika tidak kunjung sembuh segera laporkan ke dokter hewan.'),
(10, 'P10', 'Tetanus', 'Tetanus merupakan salah satu penyakit keracunan yang disebabkan oleh neurotoksi bakteri Clostridium tetani. Kejadian tetanus pada domba biasanya terjadi melalu kontaminasi spora bakteri Cl. Tetani di tanah atau area kandang. Tetanus terjadi karena ada perlukaan tertutup yang terkontaminasi oleh bakteri Cl. tetani yang berkembang dengan baik karena luka tertutup akan menimbulkan kondisi anaerob. Bakteri Cl. tetani akan mengeluarkan toksin berupa tetanotoksin.', 'Domba rentan terinfeksi tetanus ketika dilakukan pencukuran bulu, pemasangan ear tag, kelahiran, atau luka tusuk pada kaki. Gejala klinis yang muncul adalah spasmus atau kekauan otot-otot pada tubuh dengan angka mortalitas hampir 100%.', 'Jika ternak domba di kandang mengalami luka segera bersihkan dengan antiseptik agar tidak menimbulkan kondisi anaerob pada luka yang berpotensi berkembangnya bakteri Cl. tetani. Jauhkan benda-benda yang bersifat melukai ternak seperti, pisau, paku, atau benda tajam lainnya.'),
(11, 'P11', 'Prolaps Uteri', 'Merupakan gangguan reproduksi setelah kelahiran dimana keadaan uterus keluar dari tubuh dan menggantung saat domba betina merejan untuk melahirkan. Biasanya uterus keluar beberapa saat setelah anak domba keluar. Hal ini disebabkan oleh beberapa faktor seperti kurangnya exercise, kadar estrogen yang tinggi, tekanan perut saat berbaring, plasenta yang tidak segera keluar.', 'Uterus menggantung di luar tubuh, kadang sebagian atau seluruhnya beberapa saat setelah melahirkan.', 'Penanganan yang aman hanya bisa dilakukan oleh tenaga kesehatan hewan. Peternak bisa meminimalisir pencemaran lingkungan (tanah, kotoran, kencing) terhadap uterus yang keluar dengan membersihkannya menggunakan air bersih, dan menyediakan alas bersih untuk uterus yang keluar jika domba berbaring.'),
(12, 'P12', 'Kuku Busuk', 'Penyakit kuku busuk adalah penyakit menular yang sering terjadi pada kambing dan domba dengan agen penyakit bakteri Dichelobacter nodosus. Penyebab munculnya bakteri ini kemudian menginfeksi domba adalah kandang yang basah dan kotor, sehingga domba sering menginjak air dan menyebabkan kuku menjadi lunak kemudian berlanjut pada pembusukan yang didukung dengan bakteri kuku busuk.', 'Celah-celah kuku yang mengalami kuku busuk akan bengkak dan mengeluarkan cairan putih keruh, nanah, kulit kuku mengelupas, muncul benjolan yang membuat domba sakit sehigga menyebabkan kepincangan bahkan kelumpuhan, jika infeksi berlanjut bisa menimbulkan kematian.', 'Bersihkan celah-celah kuku yang mengalami pembusukan dengan larutan antiseptik hingga bersih, kemudian berikan antibiotik topikal, dan balut dengan rapat. Berikan domba tempat yang kering, bersih, dan higienis. Jika mengalami kesulitan pembersihan luka silahkan hubungi dokter hewan agar mendapatkan penanganan yang lebih baik.'),
(13, 'P13', 'Keracunan Urea', 'Penggunaan urea pada pakan amoniasi jerami yang tidak tepat takaran bisa mengakibatkan keracunan pada ternak domba jika dikonsumsi. Di dalam tubuh urea akan dimanfaatkan oleh mikroba rumen dan menghasilkan amonia. Amonia di dalam tubuh adalah zat beracun dan akan menyebabkan respon tubuh yang tidak normal.', 'Keracunan urea biaanya muncul setelah 10-15 menit setelah urea masuk ke dalam tubuh. Mulut mengalami hipersalivasi dan berbuih, gigi menggeretak karena sakit, tampak telinga dan wajah menegang. Perut mengalami kesakitan bahkan bloat, pernafasan berat dan cepat, domba lebih sering kencing, kejang, ambruk, bahkan kematian.', 'Penanganan keracunan urea tidak cukup memuaskan, pertolongan pertama yang bisa dilakukan peternak adalah menngelontor air dingin sebanyak 15 liter dicampur dengan asam asetat 6% atau cuka melalui gelonggong atau contang. Penanganan lebih tepat silahkan hubungi dokter hewan. ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id_rule` int(5) NOT NULL,
  `kode_rule` varchar(5) NOT NULL,
  `kode_gejala` varchar(1000) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rule`
--

INSERT INTO `tb_rule` (`id_rule`, `kode_rule`, `kode_gejala`, `kode_penyakit`) VALUES
(1, 'R1', 'G1 G2 G3 G4 G5', 'P1'),
(2, 'R2', 'G6 G7 G8 G9 G10', 'P2'),
(3, 'R3', 'G9 G11 G12 G13', 'P3'),
(4, 'R4', 'G8 G13 G15 G16', 'P4'),
(5, 'R5', 'G6 G7 G13 G14', 'P5'),
(6, 'R6', 'G17 G18', 'P6'),
(7, 'R7', 'G3 G4 G7 G19 G20', 'P7'),
(8, 'R8', 'G21 G22 G23', 'P8'),
(9, 'R9', 'G11 G23 G24', 'P9'),
(10, 'R10', 'G25 G26 G27', 'P10'),
(11, 'R11', 'G23 G28', 'P11'),
(12, 'R12', 'G23 G29 G30 G31 G32', 'P12'),
(13, 'R13', 'G1 G2 G3 G19 G33 G34 G35', 'P13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  MODIFY `id_jawaban` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_rule`
--
ALTER TABLE `tb_rule`
  MODIFY `id_rule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
