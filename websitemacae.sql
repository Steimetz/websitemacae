-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2019 às 19:27
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitemacae`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `name`, `data`, `body`, `created_at`, `updated_at`, `cover_image`) VALUES
(6, 'asdasd', '2019-11-07', '<p>asdasdas</p>', '2019-11-03 18:12:25', '2019-11-03 18:12:25', 'WhatsApp Image 2019-10-19 at 16.51.13_1572797545.jpeg'),
(7, 'teste evento', '2019-11-08', '<h1>O evento &eacute; sobre isso e aquilo etc</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<h2>tem isso</h2>\r\n	</li>\r\n	<li>\r\n	<h2>tem aquilo</h2>\r\n	</li>\r\n	<li>\r\n	<h2>tem td</h2>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2019-11-03 18:39:51', '2019-11-03 18:39:51', 'WhatsApp Image 2019-06-26 at 23.13.03_1572799191.jpeg'),
(8, 'asd', '2019-11-16', '<h1>Titulo</h1>\r\n\r\n<h2>Esse post &eacute; sobre o <strong>evento.</strong></h2>\r\n\r\n<ol>\r\n	<li><strong>um</strong></li>\r\n	<li><strong>2oi</strong>\r\n	<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n		<tbody>\r\n			<tr>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>', '2019-11-03 19:58:28', '2019-11-03 19:58:28', 'ambev_1572803908.jpeg'),
(9, 'Evento 4', '2019-11-19', '<h1>Testando o evento 5</h1>\r\n\r\n<p>Estamos tenstando dnv</p>\r\n\r\n<ul>\r\n	<li>testando msm&nbsp;</li>\r\n	<li>sera q vai</li>\r\n	<li>\r\n	<hr />\r\n	<p>acho que nao</p>\r\n	</li>\r\n</ul>', '2019-11-03 19:59:54', '2019-11-03 19:59:54', 'speint3 (1)_1572803994.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_27_191938_create_eventos_table', 1),
(4, '2019_10_28_140554_create_posts_table', 2),
(5, '2019_11_03_160121_add_cover_image_a_eventos', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `descricao`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Teste notícia', 'Essa noticia é sobre tal tal e isso e aquilo e etecetera e tal', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', NULL, NULL),
(2, 'Teste notícia 2', 'Essa noticia é sobre tal tal e isso e aquilo e etecetera e tal', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', NULL, NULL),
(3, 'Teste notícia 3', 'Essa noticia é sobre tal tal e isso e aquilo e etecetera e tal', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', NULL, NULL),
(4, 'Teste notícia 4', 'Essa noticia é sobre tal tal e isso e aquilo e etecetera e tal', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
