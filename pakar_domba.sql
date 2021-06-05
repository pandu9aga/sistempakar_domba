-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2021 pada 04.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

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
-- Struktur dari tabel `riwayat_jawaban`
--

CREATE TABLE `riwayat_jawaban` (
  `id_jawaban` int(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `jawaban` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_jawaban`
--

INSERT INTO `riwayat_jawaban` (`id_jawaban`, `waktu`, `jawaban`) VALUES
(51, '2021-06-04 18:25:04', 'G42 G43 G44 G45 G46 G47'),
(52, '2021-06-04 18:25:04', 'G42 G43 G44 G45 G46 G47'),
(53, '2021-06-04 18:34:19', 'G11 G12 G13 G14'),
(54, '2021-06-04 19:24:19', 'G1 G5'),
(55, '2021-06-04 19:26:07', 'G11 G13 G14'),
(56, '2021-06-04 20:37:23', 'G42 G43 G44 G45 G46 G47'),
(57, '2021-06-04 20:38:23', 'G18 G20'),
(58, '2021-06-04 20:39:11', 'G42 G44 G46'),
(59, '2021-06-04 20:44:46', 'G0'),
(60, '2021-06-04 20:48:55', 'G1'),
(61, '2021-06-04 20:54:47', 'G11 G12'),
(62, '2021-06-04 22:17:05', 'G1 G2 G3 G4 G5'),
(63, '2021-06-04 22:28:52', 'G11 G13 G14'),
(64, '2021-06-04 22:29:19', 'G21 G22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(10) NOT NULL,
  `nama_penyakit` varchar(60) NOT NULL,
  `ketentuan` varchar(50) NOT NULL,
  `penjelasan` varchar(5000) NOT NULL,
  `gejala` varchar(5000) NOT NULL,
  `penanganan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`, `ketentuan`, `penjelasan`, `gejala`, `penanganan`) VALUES
(1, 'Bloat', 'G1 G2 G3 G4 G5', 'Disebut juga tympany, kembung. Berdasarkan teori domba bisa kembung seperti pada sapi. Kembung adalah adanya akumulasi gas yang berlebihan di dalam rumen. Gas tersebut bisa berupa gas bebas atau gas berbuih yang bercampur dengan bahan asing yang masuk ke dalam rumen, bisa bahan pakan, benda padat lain yang tidak terkunyah sempurna, atau karena makan bahan pakan yang bisa menimbulkan gas, seperti golongan leguminosa. Tingkat kematian pada kasus bloat sangat tinggi.\r\n', 'Domba yang mengalami bloat akan menunjukkan pembesaran perut khususnya sebelah kiri,  terutama di area legok lapar, dan bisa meluas hingga legok lapar sebelah kanan pada kasus berat. Domba biasanya mengalami hipersalivasi dan anxious, bernafas melalui mulut, ambruk, dan susah mengeluarkan feses.\r\n', 'Tingginya kematian pada kasus bloat ini membutuhkan penanganan pertama yang bisa dilakukan oleh peternak sembari menunggu dokter hewan datang. Pertolongan yang bisa dilakukan adalah menurunkan stabilitas gas dan buih dengan memberikan minum dengan minyak mineral/ minyak kelapa yang dicampur dengan air hangat. '),
(2, 'Cacing Hati', 'G6 G7 G8 G9 G10', 'Cacing hati memiliki istilah medis fasciolosis karena penyebabnya adalah cacing Fasciola gigantica maupun F. Hepatica. Cacing ini termasuk kelas Trematoda. Penyebaran penyakit ini melalui inang antara berupa siput Lymneaea rubiginosa. Cacing ini hidup di daerah yang lembab, basah, dan tersebar di daerah tropis dan subtropis. Cacing hati menyerang spesies rentan seperti ternak sapi, kambing, dan domba.', 'Cacing hati menyerang organ hati dengan membentuk jaringan ikat pada hati dan peradangan kronis pada saluran empedu, sehingga domba mengalami sakit di daerah hati, ditandai dengan sakit perut, diare, demam, dan anemia. Selain itu, pertumbuhan domba mengalami gangguan, sulit gemuk, penurunan berat badan, dan penurunan produksi susu. Infestasi cacing hati yang kronis akan menimbulkan gejala klinis adanya pembengkakan di area rahang bawah domba. ', 'Hindari pakan yang semiakuatik, tanaman di sekitar rawa-rawa yang berpotensi hidup berdampingan dengan inang antara berupa siput. Berikan bolus obat cacing dosis domba setiap 2-3 bulan sekali. Jika perkembangan tidak kunjung membaik segera hubungi dokter hewan praktik terdekat.'),
(3, 'Scabies', 'G11 G12 G13 G14', 'Disebut juga dengan gudigan atau kudis. Penyakit ini bersifat zoonosis (menular dari hewan ke manusia, atau sebaliknya). Scabies identik dengan rendahnya tingkat sanitasi dan higenitas di daerah kandang, over populasi, dan penularan yang sangat cepat. Penyebab penyakit yang paling sering dan dianggap paling patogen adalah tungau Sarcoptes scabiei, namun ada spesies tungau lain seperti Psoroptes ovis, Notoedres sp, Chorioptes sp. Tungau ini menyerang kulit domba dengan cara membuat terowongan di bawah lapisan kulit sehingga menimbulkan gejala klinis tertentu. Scabies pada domba lebih sering dilaporkan karena lebih rentan dimana bulu yang lebat, panjang, dan kotor sehingga merupakan tempat yang ideal bagi tungau S. scabiei. ', 'Penularan scabies terjadi melalui kontak langsung antar domba dengan sifat penularan yang cepat, khususnya pada kandang domba yang padat. Scabies menyebabkan gatal, kerontokan bulu, kerusakan kulit, turunnya produksi (daging, susu, wol, kulit), penurunan nafsu makan, bahkan kematian ketika kejadiannya kronis.', 'Penanganan yang bisa dilakukan oleh peternak adalah memisahkan domba yang terjangkit scabies dengan yang sehat pada kandang karantina. Pengobatan menggunakan obat yang digunakan secara langsung pada kulit antara lain 1% larutan yang berisi serbuk BHC dengan kadar 0,625%, namun karena lokasi tungau ada di dalam kulit, maka pengobatan butuh kesabaran. Pengobatan sistemik hanya bisa dilakukan oleh dokter hewan.'),
(4, 'Orf', 'G15 G16 G17', 'Merupakan penyakit menular pada domba dan kambing yang disebabkan oleh virus grup DNA bernama Parapox dan bersifat zoonosis. Penyakit ini ditandai dengan terbentuknya papula, vesikula, dan keripeng pada kulit di daerah bibir atau sekitarnya. Orf sering menyerang domba muda sekitar 3-5 bulan dengan angka kesakitan penyakit ini bisa mencapai 90% dan sering terjadi pada kandang koloni, khususnya domba yang baru datang karena terinfeksi dalam perjalanan.', 'Orf ditularkan melalui kontak langsung melalui kulit yang terinfeksi virus kepada domba yang sehat. Bentukan lesinya mirip dengan jerawat pada manusia namun lebih besar karena mengalami peradangan, berisi cairan, dan membentuk kerak saat mengelupas setelah 1-2 minggu. Lesi orf menciri khas karena menyerang area bibir dan sekitarnya, kelopak mata, alat genital, ambing, dan kaki yang jarang ditumbuhi bulu. Domba yang terserang orf umumnya mengalami penurunan nafsu makan akibat lesi yang ada di sekitar mulut. Orf biasanya berlangsung selama 3-4 minggu, namun jika tidak segera ditangani akan terjadi komplikasi dengan infeksi sekunder seperti bakteri sehingga menyebabkan tingkat kesembuhan semakin lama, bahkan kematian.', 'Pemberian multivitamin secara oral sangat dianjurkan untuk memberbaiki imunitas tubuh, dan memberikan salep/cream berisi jodium tincture pada kulit yang terinfeksi.'),
(5, 'Diare Colibacillosis', 'G18 G19 G20', 'Diare pada domba adalah penyakit yang kerap terjadi, sebenarnya penyebab diare bermacam-macam, bisa disebabkkan oleh agen penyakit bakteri, parasit, atau virus. Salah satu yang paling sering terjadi adalah penyakit colibacillosis dengan agen penyakit bakterial Escherichia coli (E. coli). Bakteri ini bisa ditemukan juga di usus manusia dan menyerang banyak ternak rentan berusia muda seperti sapi, babi, domba, kambing, dan kuda. Kejadian colibacillosis sangat erat kaitannya dengan kondisi lingkungan seperti higenitas, sanitasi, kebersihan, dan kepadatan kandang.', 'Domba akan mengalami diare akibat memakan atau meminum bahan pakan yang tercemar oleh bakteri E. coli. Penyakit berkembang dengan cepat dengan derajat kematian tinggi, khususnya pada newborn atau anakan. Peneguhan diagnosis dilakukan oleh dokter hewan dengan pemeriksaan laboratorium terhadap kotoran domba dengan uji feses.', 'Hindarkan domba dari pakan atau lingkungan yang kotor. Colibacillosis adalah penyakit bakterial yang harus diobati secara sistemik dengan dosis obat tertentu, jadi penanganan terapi hanya bisa dilakukan oleh seorang dokter hewan. Mencegah penyebaran penyakit lebih baik daripada mengobati.'),
(6, 'Pink Eye', 'G21 G22', 'Adalah penyakit menular pada ternak seperti sapi, kerbau, domba, dan kambing yang menyerang mata. Penyakit ini menimbulkan kerugian ekonomi karena ternak mangalami penurunan nafsu makan sehingga terjadi penurunan berat badan. Penyebab penyakit ini bisa berupa bakteri, virus, rickettsia, atau chlamydia, namun yang sering ditemukan adalah bakteri Rickettsia conjungtivae, Mycoplasma conjungtivae, Brahanella catarrahalis, dan Chlamydia. Penyakit pink eye terjadi pada saat musim panas saat banyak debu berterbangan dan meningkatnya populasi lalat. Akan tetapi, kasus kronis berlangsung sepanjang tahun.', 'Pink eye memiliki gejala klinis berupa radang dan kemerahan pada konjungtiva dan kornea keruh. Domba yang mengalami pink eye dapat bersifat karier, artinya berpotensi untuk terinfeksi lagi.', 'Pink eye bisa ditangani oleh peternak jika derajatnya belum kronis, bisa diminimalisir dengan pemberian obat cuci mata untuk mengurangi derajat radang dan kemerahannya. Jika belum membaik silahkan hubungi dokter hewan.'),
(7, 'Anthraks', 'G23 G24 G25 G26', 'Disebut juga penyakit radang limpa, merupakan penyakit mematikan yang sangat diwaspadai karena bersifat infeksius terhadap ternak memamah biak khususnya sapi dan domba, serta  zoonosis. Penyebab panyakit ini adalah bakteri Bacillus anthracis yang bersifat akut atau perakut. Ternak yang sudah terinfeksi anthraks tidak boleh dipotong karena sifat bakterinya aerob dan mampu membentuk spora sehingga mampu bertahan hidup hingga puluhan tahun di lingkungan.', 'Penyakit anthraks ini adalah penyakit yang sifatnya sangat mendadak. Domba yang terinfeksi anthraks akan mengalami demam tinggi yang disertai dengan gigi gemeretak, terlihat berputar putar, hipersalivasi, pernafasan berat, frekuensi jantung meningkat, feses dan urin bercampur darah, tidak lama kemudian ternak mati. Jika ternak mati ditandai dengan perdarahan dari lubang-lubang alami seperti telinga, hidung, kemaluan, dan rektum.', 'Anthraks merupakan penyakit kompleks yang butuh peneguhan diagnosa lebih lanjut dan dilakukan oleh dokter hewan. Jika ada ternak domba yang menunjukkan gejala di atas segera laporkan pada dokter hewan.'),
(8, 'Mastitis', 'G27 G28 G29', 'Adalah radang ambing yang sering terjadi pada semua jenis mamalia, khususnya ternak perah seperti domba, kambing, dan sapi perah. Sifat dari penyakit ini bisa akut, subakut, atau kronis dan disebabkan oleh berbagai jenis bakteri (golongan Streptococcus sp dan Staphylococcus sp) atau mikoplasma. Mastitis bisa terjadi karena faktor lingkungan yang kurang bersih, lantai kandang, atau alat-alat perah yang tercemar.', 'Ambing membengkak jika ditekan terasa berjonjot dan panas, domba merasa kesakitan jika ambing disentuh, susu yang diperah pecah dan kadang bercampur nanah.', 'Penanganan pertama yang bisa dilakukan oleh peternak adalah memerah ambing yang bengkak secara perlahan-lahan sampai tuntas, kemudian dikompres menggunakan air hangat. Pengobatan lebih lanjut untuk membunuh agen bakterial segera hubungi dokter hewan. '),
(9, 'Myiasis', 'G30 G31 G32', 'Myiasis adalah penyakit yang disebabkan oleh infestasi larva lalat (Myia) di dalam jaringan hidup dalam waktu tertentu untuk memakan jaringan inang dan cairan tubuh. Lalat yang sering menjadi penyebab myiasis adalah Chrysomya bezziana. Disebut juga sebagai penyakit belatungan. Belatung atau larva lalat yang ada di jaringan inang berawal dari luka berdarah yang cukup dalam dan tidak segera sembuh. Aroma darah yang anyir itulah yang mengundang lalat untuk meletakkan telurnya.', 'Luka pada jaringan domba akan dipenuhi larva lalat, jika tidak segera ditangani larva akan merongrong jaringan lebih dalam dan meluas, domba akan merasa risih, gatal, bahkan kesakitan.', 'Secara tradisional myiasis bisa diobati dengan air tembakau sebagai penanganan pertama. Jika tidak kunjung sembuh segera laporkan ke dokter hewan.'),
(10, 'Tetanus', 'G33 G34 G35', 'Tetanus merupakan salah satu penyakit keracunan yang disebabkan oleh neurotoksi bakteri Clostridium tetani. Kejadian tetanus pada domba biasanya terjadi melalu kontaminasi spora bakteri Cl. Tetani di tanah atau area kandang. Tetanus terjadi karena ada perlukaan tertutup yang terkontaminasi oleh bakteri Cl. tetani yang berkembang dengan baik karena luka tertutup akan menimbulkan kondisi anaerob. Bakteri Cl. tetani akan mengeluarkan toksin berupa tetanotoksin.', 'Domba rentan terinfeksi tetanus ketika dilakukan pencukuran bulu, pemasangan ear tag, kelahiran, atau luka tusuk pada kaki. Gejala klinis yang muncul adalah spasmus atau kekauan otot-otot pada tubuh dengan angka mortalitas hampir 100%.', 'Jika ternak domba di kandang mengalami luka segera bersihkan dengan antiseptik agar tidak menimbulkan kondisi anaerob pada luka yang berpotensi berkembangnya bakteri Cl. tetani. Jauhkan benda-benda yang bersifat melukai ternak seperti, pisau, paku, atau benda tajam lainnya.'),
(11, 'Prolaps Uteri', 'G36 G37', 'Merupakan gangguan reproduksi setelah kelahiran dimana keadaan uterus keluar dari tubuh dan menggantung saat domba betina merejan untuk melahirkan. Biasanya uterus keluar beberapa saat setelah anak domba keluar. Hal ini disebabkan oleh beberapa faktor seperti kurangnya exercise, kadar estrogen yang tinggi, tekanan perut saat berbaring, plasenta yang tidak segera keluar.', 'Uterus menggantung di luar tubuh, kadang sebagian atau seluruhnya beberapa saat setelah melahirkan.', 'Penanganan yang aman hanya bisa dilakukan oleh tenaga kesehatan hewan. Peternak bisa meminimalisir pencemaran lingkungan (tanah, kotoran, kencing) terhadap uterus yang keluar dengan membersihkannya menggunakan air bersih, dan menyediakan alas bersih untuk uterus yang keluar jika domba berbaring.'),
(12, 'Kuku Busuk', 'G38 G39 G40 41', 'Penyakit kuku busuk adalah penyakit menular yang sering terjadi pada kambing dan domba dengan agen penyakit bakteri Dichelobacter nodosus. Penyebab munculnya bakteri ini kemudian menginfeksi domba adalah kandang yang basah dan kotor, sehingga domba sering menginjak air dan menyebabkan kuku menjadi lunak kemudian berlanjut pada pembusukan yang didukung dengan bakteri kuku busuk.', 'Celah-celah kuku yang mengalami kuku busuk akan bengkak dan mengeluarkan cairan putih keruh, nanah, kulit kuku mengelupas, muncul benjolan yang membuat domba sakit sehigga menyebabkan kepincangan bahkan kelumpuhan, jika infeksi berlanjut bisa menimbulkan kematian.', 'Bersihkan celah-celah kuku yang mengalami pembusukan dengan larutan antiseptik hingga bersih, kemudian berikan antibiotik topikal, dan balut dengan rapat. Berikan domba tempat yang kering, bersih, dan higienis. Jika mengalami kesulitan pembersihan luka silahkan hubungi dokter hewan agar mendapatkan penanganan yang lebih baik.'),
(13, 'Keracunan Urea', 'G42 G43 G44 G45 G46 G47', 'Penggunaan urea pada pakan amoniasi jerami yang tidak tepat takaran bisa mengakibatkan keracunan pada ternak domba jika dikonsumsi. Di dalam tubuh urea akan dimanfaatkan oleh mikroba rumen dan menghasilkan amonia. Amonia di dalam tubuh adalah zat beracun dan akan menyebabkan respon tubuh yang tidak normal.', 'Keracunan urea biaanya muncul setelah 10-15 menit setelah urea masuk ke dalam tubuh. Mulut mengalami hipersalivasi dan berbuih, gigi menggeretak karena sakit, tampak telinga dan wajah menegang. Perut mengalami kesakitan bahkan bloat, pernafasan berat dan cepat, domba lebih sering kencing, kejang, ambruk, bahkan kematian.', 'Penanganan keracunan urea tidak cukup memuaskan, pertolongan pertama yang bisa dilakukan peternak adalah menngelontor air dingin sebanyak 15 liter dicampur dengan asam asetat 6% atau cuka melalui gelonggong atau contang. Penanganan lebih tepat silahkan hubungi dokter hewan. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(10) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL,
  `id_penyakit` int(10) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `mayor` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `pertanyaan`, `id_penyakit`, `kode`, `mayor`) VALUES
(1, 'Apakah perut sebelah kiri domba mengalami pembesaran/pembengkakan?', 1, 'G1', 'Y'),
(2, 'Apakah pembengkakan sudah meluas ke perut sebelah kanan?', 1, 'G2', 'N'),
(3, 'Apakah domba anda mengalami pengeluaran air liur yang berlebih?', 1, 'G3', 'N'),
(4, 'Apakah domba bernapas melalui mulut?', 1, 'G4', 'N'),
(5, 'Apakah domba sulit membuang air besar?', 1, 'G5', 'N'),
(6, 'Apakah domba mengalami diare?', 2, 'G6', 'Y'),
(7, 'Apakah domba tersebut demam dan anemia?', 2, 'G7', 'N'),
(8, 'Apakah domba mengalami penurunan berat badan?', 2, 'G8', 'N'),
(9, 'Apakah domba mengalami penurunan produksi susu?', 2, 'G9', 'N'),
(10, 'Apakah ada pembengkakan di area rahang bawah?', 2, 'G10', 'N'),
(11, 'Apakah domba mengalami gatal-gatal, dan kerontokan pada bulunya?', 3, 'G11', 'Y'),
(12, 'Apakah kulit domba rusak (luka, borok)?', 3, 'G12', 'N'),
(13, 'Apakah domba mengalami penurunan produksi (daging, susu, wol, kulit)?', 3, 'G13', 'N'),
(14, 'Apakah domba mengalami penurunan nafsu makan?', 3, 'G14', 'N'),
(15, 'Apakah domba anda melemas dan tidak bersemangat?', 4, 'G15', 'Y'),
(16, 'Apakah terdapat luka yang mirip dengan jerawat pada area bibir, kelopak mata, alat genital, dan kaki?', 4, 'G16', 'N'),
(17, 'Apakah domba anda sedang mengalami penurunan nafsu makan?', 4, 'G17', 'N'),
(18, 'Apakah domba mengalami demam?', 5, 'G18', 'Y'),
(19, 'Apakah domba tiba-tiba tidak nafsu makan?', 5, 'G19', 'N'),
(20, 'Apakah domba mengalami diare?', 5, 'G20', 'N'),
(21, 'Apakah domba sulit dalam melihat?', 6, 'G21', 'Y'),
(22, 'Apakah mata domba mengalami kemerahan/berwarna merah?', 6, 'G22', 'N'),
(23, 'Apakah domba anda mengalami demam dan gigi gemeretak?', 7, 'G23', 'Y'),
(24, 'Apakah domba mengalami pengeluaran air liur yang banyak?', 7, 'G24', 'N'),
(25, 'Apakah domba sulit bernafas (pernafasan berat)?', 7, 'G25', 'N'),
(26, 'Apakah ketika buang air besar dan ketika melakukan buang air kecil bercampur dengan keluarnya darah?', 7, 'G26', 'N'),
(27, 'Apakah ketika puting di pegang domba merasa kesakitan?', 8, 'G27', 'Y'),
(28, 'Apakah domba mengalami pembengkakan pada area puting susu?', 8, 'G28', 'N'),
(29, 'Apakah ketika diperah susu bercampur dengan nanah?', 8, 'G29', 'N'),
(30, 'Apakah domba merasa gatal dan risih?', 9, 'G30', 'Y'),
(31, 'Apakah domba mengalami kesakitan?', 9, 'G31', 'N'),
(32, 'Apakah domba mempunyai luka dan dipenuhi oleh lalat larva?', 9, 'G32', 'N'),
(33, 'Apakah domba sering dilakukan pencukuran bulu dan menggunakan ear tag?', 10, 'G33', 'Y'),
(34, 'Apakah domba mengalami kaku otot?', 10, 'G34', 'N'),
(35, 'Apakah ada luka pada bagian tubuh domba?', 10, 'G35', 'N'),
(36, 'Apakah saat melahirkan anakan domba uterus (rahim) menggantung di luar tubuh?', 11, 'G36', 'Y'),
(37, 'Apakah domba mengalami kesakitan?', 11, 'G37', 'N'),
(38, 'Apakah ada benjolan di area kaki domba sehingga domba mengalami kepincangan?', 12, 'G38', 'Y'),
(39, 'Apakah kuku pada domba mengeluarkan cairan (cairan putih, nanah)?', 12, 'G39', 'N'),
(40, 'Apakah kulit kuku domba mengelupas?', 12, 'G40', 'N'),
(41, 'Apakah kuku pada domba mengalami pembengkakan?', 12, 'G41', 'N'),
(42, 'Apakah domba menggeretakkan giginya?', 13, 'G42', 'Y'),
(43, 'Apakah domba mengalami pengeluaran air liur berlebih dan berbuih?', 13, 'G43', 'N'),
(45, 'Apakah domba mengalami penegangan pada telinga dan wajah nya?', 13, 'G44', 'N'),
(46, 'Apakah domba mengalami pembesaran perut sebelah?', 13, 'G45', 'N'),
(47, 'Apakah domba sulit bernapas dan sering kencing?', 13, 'G46', 'N'),
(48, 'Apakah domba pernah mengalami kejang?', 13, 'G47', 'N');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  MODIFY `id_jawaban` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
