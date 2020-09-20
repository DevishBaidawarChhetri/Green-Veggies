-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 01:08 PM
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
-- Database: `greenveggies`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Test Name', 'test@test.com', 'Subject Here', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut earum necessitatibus, neque possimus quisquam quo sapiente! Assumenda ea nulla quo sapiente? Blanditiis cum, cupiditate itaque laboriosam quaerat quibusdam ratione.', NULL, NULL),
(2, 'Isaac Stoltenberg', 'jamar.hintz@farrell.com', 'Aut cupiditate rerum nemo quos.', 'Ducimus sequi porro molestiae eum tempore. Quidem architecto aliquam illo error laborum cupiditate. Exercitationem autem error accusamus nihil. Velit quis inventore repudiandae rerum vero blanditiis. Debitis ad similique quo temporibus ut. Voluptatem qui cumque aut magnam tenetur. Fuga nam esse impedit reprehenderit quasi error. Corrupti corporis neque cumque dolores. Est illum assumenda numquam iure quidem doloribus nulla. Nam doloribus exercitationem omnis commodi est earum. Id ad sunt inventore. Similique ea velit ipsa voluptate dolorem et ab. Corporis consequatur accusamus neque minima quidem suscipit in.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(3, 'Maci Kreiger', 'kayla.herman@murazik.com', 'Non et sequi sapiente eum qui molestiae.', 'Ea ratione assumenda et quia. Ea recusandae soluta aspernatur ducimus non. Recusandae nihil tempore voluptatum. Enim molestias atque ipsa cumque quae vero. Quo id in velit et et delectus ut. Doloremque est ducimus corrupti commodi. Laborum reiciendis aut qui delectus error. Et et incidunt velit officia corrupti eos a.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(4, 'Ryan Durgan III', 'berge.birdie@cormier.com', 'Et explicabo eius autem est qui eum quae.', 'Voluptatem aperiam necessitatibus id. Iusto non pariatur occaecati temporibus sunt voluptate nulla ratione. Praesentium itaque nulla aut laborum consectetur sed ipsum. Voluptas aperiam temporibus nemo atque ut. Dolorem amet expedita sunt ut dolor nesciunt quam minus. Eveniet consequuntur aut eius sint quod et. Dolor expedita impedit quasi. Dolorem velit maiores dolores corporis ut explicabo labore. Ullam dignissimos sit laborum omnis veniam quo aut aut. Aperiam et eius rem assumenda doloremque tempore.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(5, 'Miss Rebekah Koelpin PhD', 'shanie36@lang.net', 'Necessitatibus blanditiis quia voluptas ut veniam omnis eligendi.', 'Magni dolor repellendus reiciendis. Sit molestiae non dolor voluptas itaque officia dolores. Qui rerum error iusto consequatur hic. Quaerat facilis enim rem distinctio aspernatur. Debitis ut ut eius in. Totam omnis aut quasi fugiat ad quod. Sit et debitis ut odit non molestias enim. Quos et voluptatem repellendus laboriosam et maiores. Maiores et rerum impedit soluta quas. Odio nobis amet dolore aliquam. Et iusto officiis commodi vel deleniti sapiente. Illo velit cum fuga in.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(6, 'Arvid McGlynn', 'jackson94@yahoo.com', 'Eius consequatur consequatur ipsam inventore enim.', 'Voluptates atque ipsam dolorem sed quo tempora unde aut. Est perspiciatis a quidem iure. Laudantium aut voluptatum quis at mollitia nulla aut. Sit distinctio rerum ipsa ut et porro vel. Voluptas expedita sunt explicabo. Amet quam omnis nulla omnis ut. Voluptas hic eligendi non quae ex accusamus ipsum. Sit quidem omnis culpa delectus voluptatibus ut atque. Ex illum commodi consequuntur et. Incidunt laboriosam ullam dolorem nihil. Ipsa voluptas tempora delectus quod nihil et. Facilis ipsam error rerum ut. Mollitia et officia dolor aperiam numquam est. At aliquid et officiis ipsa omnis.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(7, 'Wilfrid Kassulke', 'kstreich@gmail.com', 'Ipsam quos quaerat vitae ea voluptas.', 'Dolore velit est possimus eum nihil temporibus delectus. Beatae beatae eos quas. Dolor iure sint et consequatur. Sint enim sequi atque consequuntur maxime. Facere qui iusto nobis illum fugiat blanditiis. Et quam occaecati in iure omnis modi deserunt qui. Dolor quos quod dicta. Non non neque nulla molestiae explicabo voluptatum nobis. Cum deleniti et voluptates ratione distinctio possimus qui. Placeat qui repellendus voluptate delectus et dicta nesciunt fuga. Nesciunt impedit distinctio dolor enim quo iste. Porro esse voluptas consequatur. Eos sit optio hic maxime.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(8, 'Prof. Luigi Reichert PhD', 'johnston.mariano@gleason.com', 'Ut ut asperiores dolor quia.', 'Atque voluptate quas possimus repudiandae impedit id quas culpa. Aut voluptas beatae ut quia. Aliquam modi quia inventore et minus ab. Sed soluta officia provident quis distinctio sequi a. Animi soluta delectus quo quidem odio consectetur. Et mollitia ea fugiat amet cupiditate. Omnis quo ut culpa animi vel et omnis. Voluptatem quia et ipsa laudantium accusamus quidem fugiat. Quia ut cumque consequuntur dolores rerum. Ullam est nam tenetur aut et eum quis. In illo consequatur cum rerum aut. Fugiat dicta accusamus doloribus voluptas. Veniam omnis sapiente optio voluptas. Eveniet aut doloremque recusandae pariatur odit.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(9, 'Leo Homenick', 'greta.hoppe@yahoo.com', 'Libero a qui consequatur repellat et culpa.', 'Ullam hic velit et ex libero et ut sint. Et et reiciendis accusantium quasi eum iure. Autem est non occaecati adipisci praesentium nobis. Sunt nobis voluptatibus neque consectetur nihil quia. Amet rerum aut aut omnis. Ut asperiores est sed nostrum quo ullam. Pariatur reprehenderit quo vitae nisi et culpa. Quis aut aspernatur cumque. Quia et magni cumque aut maxime amet accusamus. Et quidem iste ratione quis quas. Quis molestiae non dolor suscipit velit nesciunt praesentium.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(10, 'Dr. Gerardo Reynolds', 'stracke.kirk@kozey.com', 'Incidunt ut provident at fugit.', 'Et in tempora quis iusto. Quo consequatur corporis facilis architecto vero ducimus. Cum harum nostrum ipsa aliquam doloremque id inventore. Aliquam incidunt laboriosam qui sit sint. Quisquam aut libero iure nostrum tempora ipsa. Ut explicabo quo facere at nam aut suscipit. Tempore eaque dolor ut commodi in optio. Ipsam pariatur voluptatibus doloribus sequi ut voluptatibus.', '2020-09-20 11:06:08', '2020-09-20 11:06:08'),
(11, 'Herminio Kozey PhD', 'wzboncak@yahoo.com', 'Assumenda ut ab officiis sapiente eos ipsam.', 'Accusantium sit tenetur beatae eaque aliquid esse. Corporis et ut aliquid exercitationem minima. Eveniet dolor voluptates hic aperiam qui accusamus. Quisquam exercitationem natus odio vero sunt nemo. Rem aperiam cupiditate qui blanditiis ea culpa incidunt consequuntur. Illo quo sit amet exercitationem totam et. Omnis dolore ratione et deserunt est natus quia. Eveniet fuga sit omnis non quasi excepturi. Accusamus maxime voluptatem tempora reiciendis eveniet voluptatem rem. Quam aliquid minus quo doloribus. Molestiae atque quas aut id enim. Doloremque vero aut architecto id et sint cumque.', '2020-09-20 11:06:08', '2020-09-20 11:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orginalPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discountedPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discountRate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productOwnerId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productDescription`, `orginalPrice`, `discountedPrice`, `discountRate`, `categories`, `productImage`, `productOwnerId`, `created_at`, `updated_at`) VALUES
(1, 'Fresho Avocado', 'Avocados are oval shaped fruits with a thick green and a bumpy, leathery outer skin. They have a unique-texture, with a creamy and light green coloured flesh that has a buttery flavour and special aroma. Avocados are also known as an alligator pear or butter fruit. Fresho avocados delivered to you, will not just entice your taste buds but will also ensure your well being.', '500', '475', '5', 'fruits', '1600598836.jpg', 1, '2020-09-20 10:47:16', '2020-09-20 10:47:16'),
(2, 'Fresho Cabbage', 'With a texture of crispness and juiciness the moment you take the first bite, cabbages are sweet and grassy flavoured with dense and smooth leafy layers.', '50', '49', '2', 'vegetables', '1600598889.jpg', 1, '2020-09-20 10:48:09', '2020-09-20 10:48:09'),
(3, 'Green Lime', 'With a segmented flesh that has a unique pleasant aroma and a strong sour taste, lemons are round/oval and have a green, texturized external peel.', '450', '436.5', '3', 'fruits', '1600598975.jpg', 1, '2020-09-20 10:49:35', '2020-09-20 10:49:35'),
(4, 'Peach', 'A peach is a soft, juicy and fleshy stone fruit produced by a peach tree.', '250', '225', '10', 'fruits', '1600599056.jpg', 1, '2020-09-20 10:50:56', '2020-09-20 10:50:56'),
(5, 'Pumpkin - Disco', 'Disc\' shaped pumpkins with smooth, yellowish orange skin have creamish to orange flesh with a pleasant squash-like taste. Their flat, edible seeds ( pepitas) are tender and mildly sweet.', '100', '95', '5', 'vegetables', '1600599106.jpg', 1, '2020-09-20 10:51:46', '2020-09-20 10:51:46'),
(6, 'Spinach', 'With a sweet, nutty and tangent flavour, Palaks are green leafy vegetables that are succulent and spoon shaped.', '100', '99', '1', 'vegetables', '1600599179.jpg', 1, '2020-09-20 10:52:59', '2020-09-20 10:52:59'),
(7, 'Tomato', 'Tomato are high-quality fruits compared to desi, local tomatoes. They contain numerous edible seeds and are red in colour due to lycopene, an anti-oxidant.', '60', '58.8', '2', 'vegetables', '1600599254.jpg', 1, '2020-09-20 10:54:14', '2020-09-20 10:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'test@test.com', NULL, NULL),
(4, 'helga.hyatt@hamill.biz', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(5, 'marley.jacobi@yahoo.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(6, 'cthompson@yahoo.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(7, 'odell22@ortiz.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(8, 'fwhite@gmail.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(9, 'kendra43@yahoo.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(10, 'monserrate.rippin@kohler.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(11, 'nicholas.barrows@yahoo.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(12, 'karine94@kertzmann.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47'),
(13, 'neoma.dach@yahoo.com', '2020-09-20 11:06:47', '2020-09-20 11:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profileImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `telephone`, `address`, `gender`, `password`, `regType`, `profileImage`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'admin@admin.com', NULL, '9843324021', 'Satdobato', 'male', '$2y$04$4DpSlHtgC54TAvNLHI.EHOK.mPeR3D3/NsiY3m7RaL1zFIirwmIAm', 'ADMIN', 'default.png', 1, 'qumgoQxqFZvARM9JpEn3PgMDmlg8g5DHJi0g53uTzEOC0KGL2EOZmJTtBbVd', '2020-08-28 17:40:48', '2020-08-28 17:40:48'),
(2, 'Devish Baidawar Chhetri', 'devish@gmail.com', NULL, '9843324021', 'Sunakothi, Lalitpur', 'male', '$2y$10$KW99cAxSVySZFAdqEPIwZumfHzhtQOGNDefR/s6.koeL7LwL6J66u', 'buyer', '1600599395.jpg', 0, NULL, '2020-09-20 10:56:35', '2020-09-20 10:56:35'),
(3, 'Ronisha Shrestha', 'ronisha@gmail.com', NULL, '9874451235', 'Patan, Lalitpur', 'female', '$2y$10$XZNOZi0NUnfIR5C9knlX0u/OPS4UvZ2bcV.GGr2bpOchnpecGmpXy', 'buyer', '1600599619.jpg', 0, NULL, '2020-09-20 11:00:19', '2020-09-20 11:00:19'),
(4, 'Saugat Subedi', 'saugat@gmail.com', NULL, '9845521235', 'Mahalaxmistha', 'male', '$2y$10$S0.yMMNevJrn1ZhfNhYkrOM3wyVFOavIpqdVC2x28a69HHSxhYX/K', 'buyer', '1600599756.png', 0, NULL, '2020-09-20 11:02:36', '2020-09-20 11:02:36'),
(5, 'Cho Lei Naing', 'cho@gmail.com', NULL, '9845210325', 'Kathmandu, Nepal', 'female', '$2y$10$NWQy./k7iiieoyy4bcfk/.qvN9bJp3RyJ59WURfSJ6CvDZPeVE/1K', 'buyer', '1600599831.jpg', 0, NULL, '2020-09-20 11:03:51', '2020-09-20 11:03:51'),
(6, 'Anish Kumar Thakur', 'anish@gmail.com', NULL, '9845123065', 'Bhainsepati', 'male', '$2y$10$v21t4afE0cngliHSLVnSaOcsbHDUhMdP1InYwu/0rj0JCZ7us/vWW', 'buyer', '1600599879.png', 0, NULL, '2020-09-20 11:04:39', '2020-09-20 11:04:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_productownerid_foreign` (`productOwnerId`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_productownerid_foreign` FOREIGN KEY (`productOwnerId`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
