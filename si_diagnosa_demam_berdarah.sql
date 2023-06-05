-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 15.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_diagnosa_demam_berdarah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` char(4) NOT NULL,
  `id_prov` char(2) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `id_prov`, `nama`) VALUES
('1101', '11', 'KAB. ACEH SELATAN'),
('1102', '11', 'KAB. ACEH TENGGARA'),
('1103', '11', 'KAB. ACEH TIMUR'),
('1104', '11', 'KAB. ACEH TENGAH'),
('1105', '11', 'KAB. ACEH BARAT'),
('1106', '11', 'KAB. ACEH BESAR'),
('1107', '11', 'KAB. PIDIE'),
('1108', '11', 'KAB. ACEH UTARA'),
('1109', '11', 'KAB. SIMEULUE'),
('1110', '11', 'KAB. ACEH SINGKIL'),
('1111', '11', 'KAB. BIREUEN'),
('1112', '11', 'KAB. ACEH BARAT DAYA'),
('1113', '11', 'KAB. GAYO LUES'),
('1114', '11', 'KAB. ACEH JAYA'),
('1115', '11', 'KAB. NAGAN RAYA'),
('1116', '11', 'KAB. ACEH TAMIANG'),
('1117', '11', 'KAB. BENER MERIAH'),
('1118', '11', 'KAB. PIDIE JAYA'),
('1171', '11', 'KOTA BANDA ACEH'),
('1172', '11', 'KOTA SABANG'),
('1173', '11', 'KOTA LHOKSEUMAWE'),
('1174', '11', 'KOTA LANGSA'),
('1175', '11', 'KOTA SUBULUSSALAM'),
('1201', '12', 'KAB. TAPANULI TENGAH'),
('1202', '12', 'KAB. TAPANULI UTARA'),
('1203', '12', 'KAB. TAPANULI SELATAN'),
('1204', '12', 'KAB. NIAS'),
('1205', '12', 'KAB. LANGKAT'),
('1206', '12', 'KAB. KARO'),
('1207', '12', 'KAB. DELI SERDANG'),
('1208', '12', 'KAB. SIMALUNGUN'),
('1209', '12', 'KAB. ASAHAN'),
('1210', '12', 'KAB. LABUHANBATU'),
('1211', '12', 'KAB. DAIRI'),
('1212', '12', 'KAB. TOBA SAMOSIR'),
('1213', '12', 'KAB. MANDAILING NATAL'),
('1214', '12', 'KAB. NIAS SELATAN'),
('1215', '12', 'KAB. PAKPAK BHARAT'),
('1216', '12', 'KAB. HUMBANG HASUNDUTAN'),
('1217', '12', 'KAB. SAMOSIR'),
('1218', '12', 'KAB. SERDANG BEDAGAI'),
('1219', '12', 'KAB. BATU BARA'),
('1220', '12', 'KAB. PADANG LAWAS UTARA'),
('1221', '12', 'KAB. PADANG LAWAS'),
('1222', '12', 'KAB. LABUHANBATU SELATAN'),
('1223', '12', 'KAB. LABUHANBATU UTARA'),
('1224', '12', 'KAB. NIAS UTARA'),
('1225', '12', 'KAB. NIAS BARAT'),
('1271', '12', 'KOTA MEDAN'),
('1272', '12', 'KOTA PEMATANG SIANTAR'),
('1273', '12', 'KOTA SIBOLGA'),
('1274', '12', 'KOTA TANJUNG BALAI'),
('1275', '12', 'KOTA BINJAI'),
('1276', '12', 'KOTA TEBING TINGGI'),
('1277', '12', 'KOTA PADANGSIDIMPUAN'),
('1278', '12', 'KOTA GUNUNGSITOLI'),
('1301', '13', 'KAB. PESISIR SELATAN'),
('1302', '13', 'KAB. SOLOK'),
('1303', '13', 'KAB. SIJUNJUNG'),
('1304', '13', 'KAB. TANAH DATAR'),
('1305', '13', 'KAB. PADANG PARIAMAN'),
('1306', '13', 'KAB. AGAM'),
('1307', '13', 'KAB. LIMA PULUH KOTA'),
('1308', '13', 'KAB. PASAMAN'),
('1309', '13', 'KAB. KEPULAUAN MENTAWAI'),
('1310', '13', 'KAB. DHARMASRAYA'),
('1311', '13', 'KAB. SOLOK SELATAN'),
('1312', '13', 'KAB. PASAMAN BARAT'),
('1371', '13', 'KOTA PADANG'),
('1372', '13', 'KOTA SOLOK'),
('1373', '13', 'KOTA SAWAHLUNTO'),
('1374', '13', 'KOTA PADANG PANJANG'),
('1375', '13', 'KOTA BUKITTINGGI'),
('1376', '13', 'KOTA PAYAKUMBUH'),
('1377', '13', 'KOTA PARIAMAN'),
('1401', '14', 'KAB. KAMPAR'),
('1402', '14', 'KAB. INDRAGIRI HULU'),
('1403', '14', 'KAB. BENGKALIS'),
('1404', '14', 'KAB. INDRAGIRI HILIR'),
('1405', '14', 'KAB. PELALAWAN'),
('1406', '14', 'KAB. ROKAN HULU'),
('1407', '14', 'KAB. ROKAN HILIR'),
('1408', '14', 'KAB. SIAK'),
('1409', '14', 'KAB. KUANTAN SINGINGI'),
('1410', '14', 'KAB. KEPULAUAN MERANTI'),
('1471', '14', 'KOTA PEKANBARU'),
('1472', '14', 'KOTA DUMAI'),
('1501', '15', 'KAB. KERINCI'),
('1502', '15', 'KAB. MERANGIN'),
('1503', '15', 'KAB. SAROLANGUN'),
('1504', '15', 'KAB. BATANGHARI'),
('1505', '15', 'KAB. MUARO JAMBI'),
('1506', '15', 'KAB. TANJUNG JABUNG BARAT'),
('1507', '15', 'KAB. TANJUNG JABUNG TIMUR'),
('1508', '15', 'KAB. BUNGO'),
('1509', '15', 'KAB. TEBO'),
('1571', '15', 'KOTA JAMBI'),
('1572', '15', 'KOTA SUNGAI PENUH'),
('1601', '16', 'KAB. OGAN KOMERING ULU'),
('1602', '16', 'KAB. OGAN KOMERING ILIR'),
('1603', '16', 'KAB. MUARA ENIM'),
('1604', '16', 'KAB. LAHAT'),
('1605', '16', 'KAB. MUSI RAWAS'),
('1606', '16', 'KAB. MUSI BANYUASIN'),
('1607', '16', 'KAB. BANYUASIN'),
('1608', '16', 'KAB. OGAN KOMERING ULU TIMUR'),
('1609', '16', 'KAB. OGAN KOMERING ULU SELATAN'),
('1610', '16', 'KAB. OGAN ILIR'),
('1611', '16', 'KAB. EMPAT LAWANG'),
('1612', '16', 'KAB. PENUKAL ABAB LEMATANG ILIR'),
('1613', '16', 'KAB. MUSI RAWAS UTARA'),
('1671', '16', 'KOTA PALEMBANG'),
('1672', '16', 'KOTA PAGAR ALAM'),
('1673', '16', 'KOTA LUBUK LINGGAU'),
('1674', '16', 'KOTA PRABUMULIH'),
('1701', '17', 'KAB. BENGKULU SELATAN'),
('1702', '17', 'KAB. REJANG LEBONG'),
('1703', '17', 'KAB. BENGKULU UTARA'),
('1704', '17', 'KAB. KAUR'),
('1705', '17', 'KAB. SELUMA'),
('1706', '17', 'KAB. MUKO MUKO'),
('1707', '17', 'KAB. LEBONG'),
('1708', '17', 'KAB. KEPAHIANG'),
('1709', '17', 'KAB. BENGKULU TENGAH'),
('1771', '17', 'KOTA BENGKULU'),
('1801', '18', 'KAB. LAMPUNG SELATAN'),
('1802', '18', 'KAB. LAMPUNG TENGAH'),
('1803', '18', 'KAB. LAMPUNG UTARA'),
('1804', '18', 'KAB. LAMPUNG BARAT'),
('1805', '18', 'KAB. TULANG BAWANG'),
('1806', '18', 'KAB. TANGGAMUS'),
('1807', '18', 'KAB. LAMPUNG TIMUR'),
('1808', '18', 'KAB. WAY KANAN'),
('1809', '18', 'KAB. PESAWARAN'),
('1810', '18', 'KAB. PRINGSEWU'),
('1811', '18', 'KAB. MESUJI'),
('1812', '18', 'KAB. TULANG BAWANG BARAT'),
('1813', '18', 'KAB. PESISIR BARAT'),
('1871', '18', 'KOTA BANDAR LAMPUNG'),
('1872', '18', 'KOTA METRO'),
('1901', '19', 'KAB. BANGKA'),
('1902', '19', 'KAB. BELITUNG'),
('1903', '19', 'KAB. BANGKA SELATAN'),
('1904', '19', 'KAB. BANGKA TENGAH'),
('1905', '19', 'KAB. BANGKA BARAT'),
('1906', '19', 'KAB. BELITUNG TIMUR'),
('1971', '19', 'KOTA PANGKAL PINANG'),
('2101', '21', 'KAB. BINTAN'),
('2102', '21', 'KAB. KARIMUN'),
('2103', '21', 'KAB. NATUNA'),
('2104', '21', 'KAB. LINGGA'),
('2105', '21', 'KAB. KEPULAUAN ANAMBAS'),
('2171', '21', 'KOTA BATAM'),
('2172', '21', 'KOTA TANJUNG PINANG'),
('3101', '31', 'KAB. ADM. KEP. SERIBU'),
('3171', '31', 'KOTA ADM. JAKARTA PUSAT'),
('3172', '31', 'KOTA ADM. JAKARTA UTARA'),
('3173', '31', 'KOTA ADM. JAKARTA BARAT'),
('3174', '31', 'KOTA ADM. JAKARTA SELATAN'),
('3175', '31', 'KOTA ADM. JAKARTA TIMUR'),
('3201', '32', 'KAB. BOGOR'),
('3202', '32', 'KAB. SUKABUMI'),
('3203', '32', 'KAB. CIANJUR'),
('3204', '32', 'KAB. BANDUNG'),
('3205', '32', 'KAB. GARUT'),
('3206', '32', 'KAB. TASIKMALAYA'),
('3207', '32', 'KAB. CIAMIS'),
('3208', '32', 'KAB. KUNINGAN'),
('3209', '32', 'KAB. CIREBON'),
('3210', '32', 'KAB. MAJALENGKA'),
('3211', '32', 'KAB. SUMEDANG'),
('3212', '32', 'KAB. INDRAMAYU'),
('3213', '32', 'KAB. SUBANG'),
('3214', '32', 'KAB. PURWAKARTA'),
('3215', '32', 'KAB. KARAWANG'),
('3216', '32', 'KAB. BEKASI'),
('3217', '32', 'KAB. BANDUNG BARAT'),
('3218', '32', 'KAB. PANGANDARAN'),
('3271', '32', 'KOTA BOGOR'),
('3272', '32', 'KOTA SUKABUMI'),
('3273', '32', 'KOTA BANDUNG'),
('3274', '32', 'KOTA CIREBON'),
('3275', '32', 'KOTA BEKASI'),
('3276', '32', 'KOTA DEPOK'),
('3277', '32', 'KOTA CIMAHI'),
('3278', '32', 'KOTA TASIKMALAYA'),
('3279', '32', 'KOTA BANJAR'),
('3301', '33', 'KAB. CILACAP'),
('3302', '33', 'KAB. BANYUMAS'),
('3303', '33', 'KAB. PURBALINGGA'),
('3304', '33', 'KAB. BANJARNEGARA'),
('3305', '33', 'KAB. KEBUMEN'),
('3306', '33', 'KAB. PURWOREJO'),
('3307', '33', 'KAB. WONOSOBO'),
('3308', '33', 'KAB. MAGELANG'),
('3309', '33', 'KAB. BOYOLALI'),
('3310', '33', 'KAB. KLATEN'),
('3311', '33', 'KAB. SUKOHARJO'),
('3312', '33', 'KAB. WONOGIRI'),
('3313', '33', 'KAB. KARANGANYAR'),
('3314', '33', 'KAB. SRAGEN'),
('3315', '33', 'KAB. GROBOGAN'),
('3316', '33', 'KAB. BLORA'),
('3317', '33', 'KAB. REMBANG'),
('3318', '33', 'KAB. PATI'),
('3319', '33', 'KAB. KUDUS'),
('3320', '33', 'KAB. JEPARA'),
('3321', '33', 'KAB. DEMAK'),
('3322', '33', 'KAB. SEMARANG'),
('3323', '33', 'KAB. TEMANGGUNG'),
('3324', '33', 'KAB. KENDAL'),
('3325', '33', 'KAB. BATANG'),
('3326', '33', 'KAB. PEKALONGAN'),
('3327', '33', 'KAB. PEMALANG'),
('3328', '33', 'KAB. TEGAL'),
('3329', '33', 'KAB. BREBES'),
('3371', '33', 'KOTA MAGELANG'),
('3372', '33', 'KOTA SURAKARTA'),
('3373', '33', 'KOTA SALATIGA'),
('3374', '33', 'KOTA SEMARANG'),
('3375', '33', 'KOTA PEKALONGAN'),
('3376', '33', 'KOTA TEGAL'),
('3401', '34', 'KAB. KULON PROGO'),
('3402', '34', 'KAB. BANTUL'),
('3403', '34', 'KAB. GUNUNG KIDUL'),
('3404', '34', 'KAB. SLEMAN'),
('3471', '34', 'KOTA YOGYAKARTA'),
('3501', '35', 'KAB. PACITAN'),
('3502', '35', 'KAB. PONOROGO'),
('3503', '35', 'KAB. TRENGGALEK'),
('3504', '35', 'KAB. TULUNGAGUNG'),
('3505', '35', 'KAB. BLITAR'),
('3506', '35', 'KAB. KEDIRI'),
('3507', '35', 'KAB. MALANG'),
('3508', '35', 'KAB. LUMAJANG'),
('3509', '35', 'KAB. JEMBER'),
('3510', '35', 'KAB. BANYUWANGI'),
('3511', '35', 'KAB. BONDOWOSO'),
('3512', '35', 'KAB. SITUBONDO'),
('3513', '35', 'KAB. PROBOLINGGO'),
('3514', '35', 'KAB. PASURUAN'),
('3515', '35', 'KAB. SIDOARJO'),
('3516', '35', 'KAB. MOJOKERTO'),
('3517', '35', 'KAB. JOMBANG'),
('3518', '35', 'KAB. NGANJUK'),
('3519', '35', 'KAB. MADIUN'),
('3520', '35', 'KAB. MAGETAN'),
('3521', '35', 'KAB. NGAWI'),
('3522', '35', 'KAB. BOJONEGORO'),
('3523', '35', 'KAB. TUBAN'),
('3524', '35', 'KAB. LAMONGAN'),
('3525', '35', 'KAB. GRESIK'),
('3526', '35', 'KAB. BANGKALAN'),
('3527', '35', 'KAB. SAMPANG'),
('3528', '35', 'KAB. PAMEKASAN'),
('3529', '35', 'KAB. SUMENEP'),
('3571', '35', 'KOTA KEDIRI'),
('3572', '35', 'KOTA BLITAR'),
('3573', '35', 'KOTA MALANG'),
('3574', '35', 'KOTA PROBOLINGGO'),
('3575', '35', 'KOTA PASURUAN'),
('3576', '35', 'KOTA MOJOKERTO'),
('3577', '35', 'KOTA MADIUN'),
('3578', '35', 'KOTA SURABAYA'),
('3579', '35', 'KOTA BATU'),
('3601', '36', 'KAB. PANDEGLANG'),
('3602', '36', 'KAB. LEBAK'),
('3603', '36', 'KAB. TANGERANG'),
('3604', '36', 'KAB. SERANG'),
('3671', '36', 'KOTA TANGERANG'),
('3672', '36', 'KOTA CILEGON'),
('3673', '36', 'KOTA SERANG'),
('3674', '36', 'KOTA TANGERANG SELATAN'),
('5101', '51', 'KAB. JEMBRANA'),
('5102', '51', 'KAB. TABANAN'),
('5103', '51', 'KAB. BADUNG'),
('5104', '51', 'KAB. GIANYAR'),
('5105', '51', 'KAB. KLUNGKUNG'),
('5106', '51', 'KAB. BANGLI'),
('5107', '51', 'KAB. KARANGASEM'),
('5108', '51', 'KAB. BULELENG'),
('5171', '51', 'KOTA DENPASAR'),
('5201', '52', 'KAB. LOMBOK BARAT'),
('5202', '52', 'KAB. LOMBOK TENGAH'),
('5203', '52', 'KAB. LOMBOK TIMUR'),
('5204', '52', 'KAB. SUMBAWA'),
('5205', '52', 'KAB. DOMPU'),
('5206', '52', 'KAB. BIMA'),
('5207', '52', 'KAB. SUMBAWA BARAT'),
('5208', '52', 'KAB. LOMBOK UTARA'),
('5271', '52', 'KOTA MATARAM'),
('5272', '52', 'KOTA BIMA'),
('5301', '53', 'KAB. KUPANG'),
('5302', '53', 'KAB TIMOR TENGAH SELATAN'),
('5303', '53', 'KAB. TIMOR TENGAH UTARA'),
('5304', '53', 'KAB. BELU'),
('5305', '53', 'KAB. ALOR'),
('5306', '53', 'KAB. FLORES TIMUR'),
('5307', '53', 'KAB. SIKKA'),
('5308', '53', 'KAB. ENDE'),
('5309', '53', 'KAB. NGADA'),
('5310', '53', 'KAB. MANGGARAI'),
('5311', '53', 'KAB. SUMBA TIMUR'),
('5312', '53', 'KAB. SUMBA BARAT'),
('5313', '53', 'KAB. LEMBATA'),
('5314', '53', 'KAB. ROTE NDAO'),
('5315', '53', 'KAB. MANGGARAI BARAT'),
('5316', '53', 'KAB. NAGEKEO'),
('5317', '53', 'KAB. SUMBA TENGAH'),
('5318', '53', 'KAB. SUMBA BARAT DAYA'),
('5319', '53', 'KAB. MANGGARAI TIMUR'),
('5320', '53', 'KAB. SABU RAIJUA'),
('5321', '53', 'KAB. MALAKA'),
('5371', '53', 'KOTA KUPANG'),
('6101', '61', 'KAB. SAMBAS'),
('6102', '61', 'KAB. MEMPAWAH'),
('6103', '61', 'KAB. SANGGAU'),
('6104', '61', 'KAB. KETAPANG'),
('6105', '61', 'KAB. SINTANG'),
('6106', '61', 'KAB. KAPUAS HULU'),
('6107', '61', 'KAB. BENGKAYANG'),
('6108', '61', 'KAB. LANDAK'),
('6109', '61', 'KAB. SEKADAU'),
('6110', '61', 'KAB. MELAWI'),
('6111', '61', 'KAB. KAYONG UTARA'),
('6112', '61', 'KAB. KUBU RAYA'),
('6171', '61', 'KOTA PONTIANAK'),
('6172', '61', 'KOTA SINGKAWANG'),
('6201', '62', 'KAB. KOTAWARINGIN BARAT'),
('6202', '62', 'KAB. KOTAWARINGIN TIMUR'),
('6203', '62', 'KAB. KAPUAS'),
('6204', '62', 'KAB. BARITO SELATAN'),
('6205', '62', 'KAB. BARITO UTARA'),
('6206', '62', 'KAB. KATINGAN'),
('6207', '62', 'KAB. SERUYAN'),
('6208', '62', 'KAB. SUKAMARA'),
('6209', '62', 'KAB. LAMANDAU'),
('6210', '62', 'KAB. GUNUNG MAS'),
('6211', '62', 'KAB. PULANG PISAU'),
('6212', '62', 'KAB. MURUNG RAYA'),
('6213', '62', 'KAB. BARITO TIMUR'),
('6271', '62', 'KOTA PALANGKARAYA'),
('6301', '63', 'KAB. TANAH LAUT'),
('6302', '63', 'KAB. KOTABARU'),
('6303', '63', 'KAB. BANJAR'),
('6304', '63', 'KAB. BARITO KUALA'),
('6305', '63', 'KAB. TAPIN'),
('6306', '63', 'KAB. HULU SUNGAI SELATAN'),
('6307', '63', 'KAB. HULU SUNGAI TENGAH'),
('6308', '63', 'KAB. HULU SUNGAI UTARA'),
('6309', '63', 'KAB. TABALONG'),
('6310', '63', 'KAB. TANAH BUMBU'),
('6311', '63', 'KAB. BALANGAN'),
('6371', '63', 'KOTA BANJARMASIN'),
('6372', '63', 'KOTA BANJARBARU'),
('6401', '64', 'KAB. PASER'),
('6402', '64', 'KAB. KUTAI KARTANEGARA'),
('6403', '64', 'KAB. BERAU'),
('6407', '64', 'KAB. KUTAI BARAT'),
('6408', '64', 'KAB. KUTAI TIMUR'),
('6409', '64', 'KAB. PENAJAM PASER UTARA'),
('6411', '64', 'KAB. MAHAKAM ULU'),
('6471', '64', 'KOTA BALIKPAPAN'),
('6472', '64', 'KOTA SAMARINDA'),
('6474', '64', 'KOTA BONTANG'),
('6501', '65', 'KAB. BULUNGAN'),
('6502', '65', 'KAB. MALINAU'),
('6503', '65', 'KAB. NUNUKAN'),
('6504', '65', 'KAB. TANA TIDUNG'),
('6571', '65', 'KOTA TARAKAN'),
('7101', '71', 'KAB. BOLAANG MONGONDOW'),
('7102', '71', 'KAB. MINAHASA'),
('7103', '71', 'KAB. KEPULAUAN SANGIHE'),
('7104', '71', 'KAB. KEPULAUAN TALAUD'),
('7105', '71', 'KAB. MINAHASA SELATAN'),
('7106', '71', 'KAB. MINAHASA UTARA'),
('7107', '71', 'KAB. MINAHASA TENGGARA'),
('7108', '71', 'KAB. BOLAANG MONGONDOW UTARA'),
('7109', '71', 'KAB. KEP. SIAU TAGULANDANG BIARO'),
('7110', '71', 'KAB. BOLAANG MONGONDOW TIMUR'),
('7111', '71', 'KAB. BOLAANG MONGONDOW SELATAN'),
('7171', '71', 'KOTA MANADO'),
('7172', '71', 'KOTA BITUNG'),
('7173', '71', 'KOTA TOMOHON'),
('7174', '71', 'KOTA KOTAMOBAGU'),
('7201', '72', 'KAB. BANGGAI'),
('7202', '72', 'KAB. POSO'),
('7203', '72', 'KAB. DONGGALA'),
('7204', '72', 'KAB. TOLI TOLI'),
('7205', '72', 'KAB. BUOL'),
('7206', '72', 'KAB. MOROWALI'),
('7207', '72', 'KAB. BANGGAI KEPULAUAN'),
('7208', '72', 'KAB. PARIGI MOUTONG'),
('7209', '72', 'KAB. TOJO UNA UNA'),
('7210', '72', 'KAB. SIGI'),
('7211', '72', 'KAB. BANGGAI LAUT'),
('7212', '72', 'KAB. MOROWALI UTARA'),
('7271', '72', 'KOTA PALU'),
('7301', '73', 'KAB. KEPULAUAN SELAYAR'),
('7302', '73', 'KAB. BULUKUMBA'),
('7303', '73', 'KAB. BANTAENG'),
('7304', '73', 'KAB. JENEPONTO'),
('7305', '73', 'KAB. TAKALAR'),
('7306', '73', 'KAB. GOWA'),
('7307', '73', 'KAB. SINJAI'),
('7308', '73', 'KAB. BONE'),
('7309', '73', 'KAB. MAROS'),
('7310', '73', 'KAB. PANGKAJENE KEPULAUAN'),
('7311', '73', 'KAB. BARRU'),
('7312', '73', 'KAB. SOPPENG'),
('7313', '73', 'KAB. WAJO'),
('7314', '73', 'KAB. SIDENRENG RAPPANG'),
('7315', '73', 'KAB. PINRANG'),
('7316', '73', 'KAB. ENREKANG'),
('7317', '73', 'KAB. LUWU'),
('7318', '73', 'KAB. TANA TORAJA'),
('7322', '73', 'KAB. LUWU UTARA'),
('7324', '73', 'KAB. LUWU TIMUR'),
('7326', '73', 'KAB. TORAJA UTARA'),
('7371', '73', 'KOTA MAKASSAR'),
('7372', '73', 'KOTA PARE PARE'),
('7373', '73', 'KOTA PALOPO'),
('7401', '74', 'KAB. KOLAKA'),
('7402', '74', 'KAB. KONAWE'),
('7403', '74', 'KAB. MUNA'),
('7404', '74', 'KAB. BUTON'),
('7405', '74', 'KAB. KONAWE SELATAN'),
('7406', '74', 'KAB. BOMBANA'),
('7407', '74', 'KAB. WAKATOBI'),
('7408', '74', 'KAB. KOLAKA UTARA'),
('7409', '74', 'KAB. KONAWE UTARA'),
('7410', '74', 'KAB. BUTON UTARA'),
('7411', '74', 'KAB. KOLAKA TIMUR'),
('7412', '74', 'KAB. KONAWE KEPULAUAN'),
('7413', '74', 'KAB. MUNA BARAT'),
('7414', '74', 'KAB. BUTON TENGAH'),
('7415', '74', 'KAB. BUTON SELATAN'),
('7471', '74', 'KOTA KENDARI'),
('7472', '74', 'KOTA BAU BAU'),
('7501', '75', 'KAB. GORONTALO'),
('7502', '75', 'KAB. BOALEMO'),
('7503', '75', 'KAB. BONE BOLANGO'),
('7504', '75', 'KAB. PAHUWATO'),
('7505', '75', 'KAB. GORONTALO UTARA'),
('7571', '75', 'KOTA GORONTALO'),
('7601', '76', 'KAB. MAMUJU UTARA'),
('7602', '76', 'KAB. MAMUJU'),
('7603', '76', 'KAB. MAMASA'),
('7604', '76', 'KAB. POLEWALI MANDAR'),
('7605', '76', 'KAB. MAJENE'),
('7606', '76', 'KAB. MAMUJU TENGAH'),
('8101', '81', 'KAB. MALUKU TENGAH'),
('8102', '81', 'KAB. MALUKU TENGGARA'),
('8103', '81', 'KAB MALUKU TENGGARA BARAT'),
('8104', '81', 'KAB. BURU'),
('8105', '81', 'KAB. SERAM BAGIAN TIMUR'),
('8106', '81', 'KAB. SERAM BAGIAN BARAT'),
('8107', '81', 'KAB. KEPULAUAN ARU'),
('8108', '81', 'KAB. MALUKU BARAT DAYA'),
('8109', '81', 'KAB. BURU SELATAN'),
('8171', '81', 'KOTA AMBON'),
('8172', '81', 'KOTA TUAL'),
('8201', '82', 'KAB. HALMAHERA BARAT'),
('8202', '82', 'KAB. HALMAHERA TENGAH'),
('8203', '82', 'KAB. HALMAHERA UTARA'),
('8204', '82', 'KAB. HALMAHERA SELATAN'),
('8205', '82', 'KAB. KEPULAUAN SULA'),
('8206', '82', 'KAB. HALMAHERA TIMUR'),
('8207', '82', 'KAB. PULAU MOROTAI'),
('8208', '82', 'KAB. PULAU TALIABU'),
('8271', '82', 'KOTA TERNATE'),
('8272', '82', 'KOTA TIDORE KEPULAUAN'),
('9012', '96', 'Papua Pelosok'),
('9101', '91', 'KAB. MERAUKE'),
('9102', '91', 'KAB. JAYAWIJAYA'),
('9103', '91', 'KAB. JAYAPURA'),
('9104', '91', 'KAB. NABIRE'),
('9105', '91', 'KAB. KEPULAUAN YAPEN'),
('9106', '91', 'KAB. BIAK NUMFOR'),
('9107', '91', 'KAB. PUNCAK JAYA'),
('9108', '91', 'KAB. PANIAI'),
('9109', '91', 'KAB. MIMIKA'),
('9110', '91', 'KAB. SARMI'),
('9111', '91', 'KAB. KEEROM'),
('9112', '91', 'KAB PEGUNUNGAN BINTANG'),
('9113', '91', 'KAB. YAHUKIMO'),
('9114', '91', 'KAB. TOLIKARA'),
('9115', '91', 'KAB. WAROPEN'),
('9116', '91', 'KAB. BOVEN DIGOEL'),
('9117', '91', 'KAB. MAPPI'),
('9118', '91', 'KAB. ASMAT'),
('9119', '91', 'KAB. SUPIORI'),
('9120', '91', 'KAB. MAMBERAMO RAYA'),
('9121', '91', 'KAB. MAMBERAMO TENGAH'),
('9122', '91', 'KAB. YALIMO'),
('9123', '91', 'KAB. LANNY JAYA'),
('9124', '91', 'KAB. NDUGA'),
('9125', '91', 'KAB. PUNCAK'),
('9126', '91', 'KAB. DOGIYAI'),
('9127', '91', 'KAB. INTAN JAYA'),
('9128', '91', 'KAB. DEIYAI'),
('9171', '91', 'KOTA JAYAPURA'),
('9201', '92', 'KAB. SORONG'),
('9202', '92', 'KAB. MANOKWARI'),
('9203', '92', 'KAB. FAK FAK'),
('9204', '92', 'KAB. SORONG SELATAN'),
('9205', '92', 'KAB. RAJA AMPAT'),
('9206', '92', 'KAB. TELUK BINTUNI'),
('9207', '92', 'KAB. TELUK WONDAMA'),
('9208', '92', 'KAB. KAIMANA'),
('9209', '92', 'KAB. TAMBRAUW'),
('9210', '92', 'KAB. MAYBRAT'),
('9211', '92', 'KAB. MANOKWARI SELATAN'),
('9212', '92', 'KAB. PEGUNUNGAN ARFAK'),
('9271', '92', 'KOTA SORONG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_11_123126_create_tabel_penyakit_table', 1),
(6, '2023_05_11_123144_create_tabel_gejala_table', 1),
(7, '2023_05_11_123156_create_tabel_rule_gejala_table', 1),
(8, '2023_05_11_123237_create_tabel_diagnosa_table', 1),
(9, '2023_05_11_123245_create_tabel_konsultasi_table', 1),
(10, '2023_05_11_123304_create_tabel_hasil_konsultasi_table', 1),
(11, '2023_05_13_150235_tabel_gejala_penyakit_table', 2),
(12, '2014_10_12_100000_create_password_resets_table', 3),
(13, '2023_05_21_030850_create_tabel_pasien_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` char(2) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'DKI Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'DI Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('92', 'Papua'),
('93', 'Papua Tengah'),
('94', 'Papua Pegunungan'),
('95', 'Papua Selatan'),
('96', 'Papua Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_diagnosa`
--

CREATE TABLE `tabel_diagnosa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_diagnosa`
--

INSERT INTO `tabel_diagnosa` (`id`, `penyakit_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 1, 5, '2023-05-24', NULL),
(4, 1, 5, '2023-05-24', NULL),
(5, 1, 5, '2023-05-24', NULL),
(6, 1, 12, '2023-05-26', NULL),
(7, 3, 12, '2023-05-26', NULL),
(8, 1, 12, '2023-05-26', NULL),
(9, 2, 10, '2023-05-26', NULL),
(10, 1, 10, '2023-06-01', NULL),
(11, 1, 10, '2023-06-02', NULL),
(12, 1, 9, '2023-06-05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gejala`
--

CREATE TABLE `tabel_gejala` (
  `id_gejala` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` varchar(30) NOT NULL,
  `nama_gejala` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_gejala`
--

INSERT INTO `tabel_gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(2, 'G2', 'Pilek', NULL, '2023-06-04 12:20:39'),
(3, 'G3', 'Panas', NULL, '2023-06-04 12:20:39'),
(4, 'G4', 'Tidak Nafsu Makan', '2023-05-13 05:19:46', '2023-06-04 12:20:39'),
(5, 'G5', 'Sakit Perut', '2023-05-13 05:58:55', '2023-06-04 12:20:39'),
(6, 'G6', 'Bintik Merah', '2023-06-04 04:26:53', '2023-06-04 12:20:39'),
(7, 'G7', 'Flu', '2023-06-04 05:16:56', '2023-06-04 05:26:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gejala_tabel_penyakit`
--

CREATE TABLE `tabel_gejala_tabel_penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tabel_penyakit_id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `tabel_gejala_id_gejala` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_gejala_tabel_penyakit`
--

INSERT INTO `tabel_gejala_tabel_penyakit` (`id`, `tabel_penyakit_id_penyakit`, `tabel_gejala_id_gejala`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(9, 3, 1, NULL, NULL),
(13, 2, 2, NULL, NULL),
(14, 1, 4, NULL, NULL),
(16, 3, 3, NULL, NULL),
(17, 3, 4, NULL, NULL),
(18, 5, 2, NULL, NULL),
(19, 5, 4, NULL, NULL),
(20, 7, 2, NULL, NULL),
(21, 7, 3, NULL, NULL),
(22, 7, 4, NULL, NULL),
(23, 7, 7, NULL, NULL),
(24, 2, 4, NULL, NULL),
(25, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_hasil_konsultasi`
--

CREATE TABLE `tabel_hasil_konsultasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `hasil_konsultasi` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_hasil_konsultasi`
--

INSERT INTO `tabel_hasil_konsultasi` (`id`, `nama_dokter`, `nama_pasien`, `hasil_konsultasi`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Tigor', 'Legming', 'Terdiagnosa Demam Berdarah Ringan cukup istirahat saja dan minum obat 3 kali sehari', 0, '2023-06-01 00:36:04', '2023-06-01 02:56:09'),
(2, 'rafid', 'Legming', 'Terdiagnosa Demam Berdarah Ringan Cukup istirahat di tempat', 17, '2023-06-03 03:36:35', '2023-06-03 03:41:40'),
(4, 'rafid', 'rohim', 'Cukup Minum obat dari dokter sebanyak 3 kali sehari', 17, '2023-06-05 05:41:52', '2023-06-05 05:42:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_konsultasi`
--

CREATE TABLE `tabel_konsultasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_konsultasi`
--

INSERT INTO `tabel_konsultasi` (`id`, `id_user`, `id_dokter`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 11, 0, '', NULL, NULL),
(2, 5, 0, '', '2023-05-20 21:51:44', '2023-05-20 21:51:44'),
(3, 6, 0, '', NULL, NULL),
(4, 10, 6, '2023-05-29', '2023-05-28 22:13:59', '2023-05-28 22:13:59'),
(5, 10, 6, '2023-05-29', '2023-05-28 22:15:10', '2023-05-28 22:15:10'),
(6, 10, 6, '2023-05-29', '2023-05-28 22:17:10', '2023-05-28 22:17:10'),
(7, 10, 8, '2023-05-29', '2023-05-28 22:17:28', '2023-05-28 22:17:28'),
(8, 10, 8, '2023-06-09', '2023-06-01 04:38:13', '2023-06-01 04:38:13'),
(9, 10, 4, '2023-06-09', '2023-06-02 06:08:46', '2023-06-02 06:08:46'),
(10, 9, 17, '2023-06-08', '2023-06-05 05:39:51', '2023-06-05 05:39:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penyakit`
--

CREATE TABLE `tabel_penyakit` (
  `id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `kode_penyakit` varchar(255) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_penyakit`
--

INSERT INTO `tabel_penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'P1', 'Demam Berdarah Ringan', 'Demam Berdarah Ringan adalah', NULL, '2023-05-20 13:16:10'),
(2, 'P2', 'Demam Berdarah Sedang', 'Demam Berdarah Sedang adlaah', NULL, '2023-06-05 05:36:05'),
(3, 'P3', 'Demam Berdarah Berat', 'DBD BERAT ADALAH', '2023-05-13 05:20:24', '2023-06-04 05:26:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_rule_gejala`
--

CREATE TABLE `tabel_rule_gejala` (
  `id_rule` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `kode_aturan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT '',
  `id_prov` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `id_prov`, `id_kab`) VALUES
(1, 'yudha', 'yudha@gmail.com', NULL, '$2y$10$ImW.WSCyh2lCe9p.r5CBoucd/Kgso6.VMLSbkan4esJNTYWLCC9Gu', 'pLvdCkZf3UjlPJRB14MyagAoPJd0hoVGJBjOhrrIAOhWUphZe1cw0SdJHO1z', '2023-05-20 08:10:24', '2023-05-20 08:10:24', 'admin', 0, 0),
(2, 'kudaponi', 'kudaponi@gmail.com', NULL, '$2y$10$tAe9GgzmtFTPdoHK3FczEeHwB0TgddWtIWL7avppK.f/JR3fgoeKO', 'IYzw3iUIsWEuRlhDzyZZhaB6xmkjpsHlRLikvYUhXUyqEHqyVC9D6JShKjRK', '2023-05-20 11:11:11', '2023-05-20 11:11:11', 'admin', 0, 0),
(3, 'tigor', 'hannessinaga77@gmail.com', NULL, '$2y$10$6wIuR0gzXRPqIFMjU0dt6O.tIK8A3n5IFBW6KlFEgap7n6mp/66za', NULL, '2023-05-20 11:17:23', '2023-05-20 11:17:23', 'admin', 0, 0),
(4, 'yazid', 'dokter@gmail.com', NULL, '$2y$10$AHyBVrtetIPPkUDxClEIJuxxEfJw5gUGe29tKdWijrDsqFwawgHe2', NULL, '2023-05-20 11:30:19', '2023-05-20 11:30:19', 'dokter', 0, 0),
(5, 'Joko', 'joko@gmail.com', NULL, '$2y$10$qz1q.sxFzACLZ/4brznPfeU/4xOjA8nDmPvdYZQlrTZHtucYckXee', NULL, '2023-05-20 11:53:56', '2023-06-05 05:05:54', 'pasien', 0, 0),
(6, 'esa', 'esa@gmail.com', NULL, '12345678', NULL, '2023-05-20 13:23:02', '2023-06-03 08:48:42', 'dokter', 14, 1401),
(7, 'tigor', 'tigor@gmail.com', NULL, '$2y$10$/rzHqundqg9C0CKU3G871eN7hFTYXT3UjuGuH71k16.E7skhqvrpC', NULL, '2023-05-20 13:38:51', '2023-05-20 13:38:51', 'dokter', 0, 0),
(8, 'rian', 'rian@gmail.com', NULL, '$2y$10$ZC0KyvhVh2b1oYF57ItDxed0fUvudu.JWmCaunHwd/1Zm1zOSRm.2', NULL, '2023-05-20 13:57:07', '2023-05-20 13:57:07', 'dokter', 0, 0),
(9, 'rohim', 'rohim@gmail.com', NULL, '$2y$10$AbKfkMtfzenaLAwhzkFe8OqVLS6yc74rr5MfEKtDpfWfAu3gC9FTe', NULL, '2023-05-20 14:12:57', '2023-05-20 14:12:57', 'pasien', 0, 0),
(10, 'legming', 'legming@gmail.com', NULL, '$2y$10$iGD2sFoo5/jP6li9dqBsau./m/bj/l4D5rwOjdtwMH9QDZCmtIfwe', NULL, '2023-05-20 19:40:27', '2023-05-20 19:40:27', 'pasien', 0, 0),
(11, 'udin123', 'udin@gmail.com', NULL, '$2y$10$glDMNy18Id1xSlyXpKjAXu/D6PhN9SmsbooS8/AxEGfLBidimLvOq', NULL, '2023-05-20 20:13:30', '2023-06-05 05:26:14', 'pasien', 0, 0),
(12, 'ahmad', 'ahmad@gmail.com', NULL, '$2y$10$LmyFNSBQ2IVNPq9kMvlVmuHUX0GhyWbHJ.Kp8xUIvixMne4gKlrve', NULL, '2023-05-20 20:17:28', '2023-05-20 20:17:28', 'pasien', 0, 0),
(15, 'yohanes', 'yohanes@gmail.com', NULL, '$2y$10$J/Z/OSj0L3MUAG35.zZUe.g67m1jJg.TWcQL51Ibi4QRWWLNkDz66', NULL, '2023-06-01 03:00:20', '2023-06-01 03:00:20', 'admin', 0, 0),
(16, 'fariz', 'fariz@gmail.com', NULL, '$2y$10$pxlVf/TB6XN8hx83R1x68ej31me9a0JKxPzC6C00W1leN/jvNjctK', NULL, '2023-06-02 23:53:24', '2023-06-02 23:53:24', 'dokter', 0, 0),
(17, 'rafid', 'rafid@gmail.com', NULL, '$2y$10$UKC1TiMQHpkRJ90DisL.veuvhJ6x5fzfocgtHnLLQ9X9TISgBdieS', NULL, '2023-06-03 03:04:58', '2023-06-03 03:04:58', 'dokter', 13, 1301),
(20, 'Basuki', 'basuki@gmail.com', NULL, '$2y$10$DIql4xSbXGNfUVRFYkLb6eZ7S/Zy1hGEq0qB1DrzIk8zsFk2P3Fle', NULL, '2023-06-05 04:26:20', '2023-06-05 04:26:20', 'dokter', 14, 1402);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tabel_diagnosa`
--
ALTER TABLE `tabel_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_gejala`
--
ALTER TABLE `tabel_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tabel_gejala_tabel_penyakit`
--
ALTER TABLE `tabel_gejala_tabel_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gejala` (`tabel_penyakit_id_penyakit`),
  ADD KEY `id_penyakit` (`tabel_gejala_id_gejala`);

--
-- Indeks untuk tabel `tabel_hasil_konsultasi`
--
ALTER TABLE `tabel_hasil_konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_konsultasi`
--
ALTER TABLE `tabel_konsultasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tabel_pasien_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `tabel_rule_gejala`
--
ALTER TABLE `tabel_rule_gejala`
  ADD PRIMARY KEY (`id_rule`),
  ADD KEY `tabel_rule_gejala_gejala_id_foreign` (`gejala_id`),
  ADD KEY `tabel_rule_gejala_penyakit_id_foreign` (`penyakit_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_diagnosa`
--
ALTER TABLE `tabel_diagnosa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tabel_gejala`
--
ALTER TABLE `tabel_gejala`
  MODIFY `id_gejala` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel_gejala_tabel_penyakit`
--
ALTER TABLE `tabel_gejala_tabel_penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tabel_hasil_konsultasi`
--
ALTER TABLE `tabel_hasil_konsultasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tabel_konsultasi`
--
ALTER TABLE `tabel_konsultasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  MODIFY `id_penyakit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel_rule_gejala`
--
ALTER TABLE `tabel_rule_gejala`
  MODIFY `id_rule` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_konsultasi`
--
ALTER TABLE `tabel_konsultasi`
  ADD CONSTRAINT `tabel_konsultasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD CONSTRAINT `tabel_pasien_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
