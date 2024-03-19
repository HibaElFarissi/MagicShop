-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 07:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m8595_MagicShop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_Globale` varchar(255) NOT NULL,
  `description_Globale` longtext NOT NULL,
  `Title1` varchar(255) NOT NULL,
  `description1` longtext NOT NULL,
  `Mini_Title1` varchar(255) NOT NULL,
  `Slug1` varchar(255) NOT NULL,
  `Mini_Title2` varchar(255) NOT NULL,
  `Slug2` varchar(255) NOT NULL,
  `Title2` varchar(255) NOT NULL,
  `description2` longtext NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `TitleQuotes` varchar(255) NOT NULL,
  `SlugQuotes` varchar(255) NOT NULL,
  `TitleFacts` varchar(255) NOT NULL,
  `SlugFacts` varchar(255) NOT NULL,
  `TitleCategory` varchar(255) NOT NULL,
  `SlugCategory` varchar(255) NOT NULL,
  `TitleFaq` varchar(255) NOT NULL,
  `SlugFaq` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `Title_Globale`, `description_Globale`, `Title1`, `description1`, `Mini_Title1`, `Slug1`, `Mini_Title2`, `Slug2`, `Title2`, `description2`, `image1`, `image2`, `TitleQuotes`, `SlugQuotes`, `TitleFacts`, `SlugFacts`, `TitleCategory`, `SlugCategory`, `TitleFaq`, `SlugFaq`, `created_at`, `updated_at`) VALUES
(1, 'Find Out More About Us', 'Welcome to MagicShop, where enchantment meets convenience! Dive deeper into our mystical realm and uncover the secrets behind our magical offerings.  Join us as we weave magic into every shopping experience and create moments of wonder that last a lifetime. Step into our world and let the magic unfold!', 'Welcome to our enchanted corner of the internet!', 'Step into the mystical world of MagicShop, where every click, scroll, and purchase is a journey into enchantment. Welcome to our enchanted corner of the internet, where magic and convenience converge to create an unforgettable shopping experience.', 'Behind-the-Scenes Sneak Peek', 'Offer a glimpse into the behind-the-scenes magic of your shop. Share photos or stories about how magical products are selected, created, and brought to the digital shelves.', 'Ethical Magic', 'If your magic shop adheres to ethical practices, sustainability, or community involvement, showcase these values. Today\'s consumers appreciate businesses that contribute positively to the world.', 'We are Building The Destination For Getting Things Done', 'Join us as we embark on a magical adventure together, where wonder awaits at every turn. Welcome to MagicShop, where dreams come true and the ordinary becomes extraordinary.', 'About_photos/3dWLrpHFzAn7ukHofTjGGyj3RiZUNHKE9jsfUVsz.svg', 'About_photos/sOC98iqlcshn5e1YLA4UQw6rrR59BmvamTUaIAtq.png', 'Take a look what our clients say about us', 'Dive into the enchanting realm of customer experiences! Discover the magic through the eyes of our cherished patrons. Explore the wonder, joy, and astonishment they\'ve encountered on their magical journeys with us.', 'Take a look what our clients say about us', 'Take a glimpse into the enchanting world of MagicShop through the eyes of our valued clients. Discover what they have to say about their magical experiences with us.', 'Check our Category', 'Here\'s a concise description for some products to order', 'Frequently Asked Questions', 'Here are some questions and their respective answers you might consider for MagicShop Website FAQ section', '2024-03-17 22:55:24', '2024-03-17 22:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `text`, `photo`, `user_id`, `Categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Unveiling the Latest Trends: A Fashionista\'s Guide to Spring 2024', 'fashionistas-guide-to-spring-2024', '<p>As the flowers bloom and the sun emerges, fashion enthusiasts eagerly anticipate the arrival of Spring 2024. This season, the runway is ablaze with vibrant colors, bold prints, and daring silhouettes, promising a feast for the eyes and inspiration for the soul.</p><p><br></p><p>From the catwalks of Paris to the streets of Milan, designers have unleashed a wave of creativity, redefining the boundaries of style and pushing the envelope of innovation. As we bid farewell to winter layers, it\'s time to embrace the lightness and exuberance of spring fashion.</p><p><br></p><p>One of the most prominent trends to emerge this season is the revival of retro glamour. Think \'70s-inspired prints, disco sequins, and psychedelic patterns that transport us back to the heyday of Studio 54. This nostalgic nod to the past infuses modern wardrobes with a sense of whimsy and fun, inviting us to dance our way through the season in style.</p><p><br></p><p>In contrast to the maximalist extravagance of retro glamour, minimalist chic continues to hold its place in the spotlight. Clean lines, neutral palettes, and understated elegance define this timeless aesthetic, offering a sense of calm amidst the fashion frenzy. Whether it\'s a tailored blazer or a sleek slip dress, minimalist pieces exude sophistication and refinement, proving that less truly is more.</p><p><br></p><p>Of course, no spring wardrobe would be complete without a nod to nature-inspired motifs. From floral prints to botanical embroidery, designers draw inspiration from the beauty of the natural world, infusing garments with a sense of vitality and freshness. Whether adorning a floaty dress or a structured blazer, these organic elements bring a touch of the outdoors into our everyday lives, reminding us to pause and appreciate the beauty that surrounds us.</p><p><br></p><p>As we navigate the ever-changing landscape of fashion, one thing remains constant: the power of self-expression. Whether embracing the latest trends or forging our own path, fashion serves as a canvas upon which we can paint our individuality and creativity. So as we step into the new season, let us celebrate the joy of fashion and the endless possibilities it brings.</p><p><br></p><p>Join us on our journey as we unravel the mysteries of Spring 2024 fashion and discover the trends that will shape our wardrobes for seasons to come. From runway reports to style guides, our blog is your ultimate destination for all things fashion. So grab your favorite beverage, settle in, and let the fashion adventure begin!</p>', 'Articles/RQJHipcbPhK1tUYha2uDbBB7GEImCWdiOxr2BIhK.jpg', 1, 2, '2024-03-17 23:05:29', '2024-03-17 23:05:29'),
(2, 'The Ultimate Guide to Choosing the Perfect Travel Bag', 'ultimate-guide-choosing-perfect-travel-bag', '<p>Calling all fashion enthusiasts! Elevate your style game with our curated list of the top 10 must-have bags for every fashionista. From chic crossbody bags to timeless totes, we showcase the hottest trends and classic designs that deserve a place in your wardrobe. Whether you\'re hitting the streets or attending a glamorous event, these statement bags will take your outfit to the next level. Get ready to turn heads and make a fashion statement with these must-have bags!</p><p><br></p><p>Did you know that the humble backpack has undergone a remarkable evolution over the years? In this fascinating exploration, we trace the journey of the backpack from its utilitarian roots to its status as a fashion icon. Discover how this versatile accessory has transcended its functional origins to become a staple in the wardrobes of trendsetters worldwide. Join us as we delve into the history, design innovations, and cultural impact of the beloved backpack.</p><p><br></p><p>\"As the demand for sustainable fashion grows, eco-friendly bags have emerged as a popular choice for the conscious consumer. In this enlightening article, we shine a spotlight on sustainable bag brands that prioritize ethical production practices and eco-friendly materials. From recycled materials to fair trade production, these brands are leading the way in sustainable style. Join the green revolution and make a positive impact on the planet with these eco-friendly bags!\"</p><p><br></p><p>Feel free to use or modify these samples for your blog content!</p>', 'Articles/Y9ekSBdclpqoNVGLbtZU1Gsowv7GCNjkGMnFhuG5.jpg', 1, 3, '2024-03-17 23:09:56', '2024-03-17 23:09:56'),
(3, 'Embrace Your Style: A Journey to Self-Love Through Fashion', 'embrace-your-style-journey-self-love-fashion', '<p>In a world that often dictates trends and standards, it\'s easy to lose sight of our own unique beauty and style. However, true confidence and self-love begin when we embrace our individuality and express ourselves authentically through fashion.</p><p><br></p><p>Fashion is more than just clothing; it\'s a powerful form of self-expression and a reflection of our innermost selves. By curating a wardrobe that resonates with our personality, tastes, and values, we can cultivate a deeper sense of self-acceptance and appreciation.</p><p><br></p><p>In this journey to self-love, it\'s essential to prioritize authenticity over conformity and celebrate the beauty of our differences. Whether it\'s rocking bold colors, experimenting with eclectic patterns, or embracing unconventional styles, every fashion choice becomes an opportunity to honor and love ourselves just as we are.</p><p><br></p><p>So, let\'s break free from society\'s beauty standards and embrace our unique style with confidence and pride. Remember, loving yourself is the ultimate fashion statement, and when you shine from within, your style radiates with unmatched beauty and authenticity.</p>', 'Articles/7Mq6D8aQ00YgSSA5AD1Qw5xXBpwXDXYELisvHl0Y.jpg', 1, 2, '2024-03-17 23:11:44', '2024-03-17 23:11:44'),
(4, 'The Heartwarming Bond: Why Dogs Are Our Best Friends', 'why-dogs-are-our-best-friends', '<p>Dogs, often referred to as \'man\'s best friend,\' hold a special place in our hearts for countless reasons. Their unwavering loyalty, unconditional love, and boundless affection make them more than just pets—they become cherished members of our families.</p><p><br></p><p>One of the most endearing qualities of dogs is their innate ability to form deep connections with humans. From the moment they enter our lives, they shower us with love and devotion, forging a bond that withstands the test of time. Whether it\'s a wagging tail, a gentle nuzzle, or a soulful gaze, dogs have a unique way of understanding and empathizing with our emotions.</p><p><br></p><p>Beyond companionship, dogs also enrich our lives in countless other ways. Their playful antics bring laughter and joy to even the dullest of days, while their unwavering presence provides comfort and solace during times of hardship. Whether it\'s going for a walk in the park, playing fetch in the backyard, or simply cuddling on the couch, every moment spent with our furry friends is filled with warmth and affection.</p><p><br></p><p>Moreover, dogs have an uncanny ability to teach us valuable lessons about loyalty, resilience, and compassion. They remind us to live in the present moment, to appreciate the simple joys in life, and to love unconditionally. In return, we strive to provide them with the care, attention, and affection they deserve, ensuring that their lives are filled with happiness and fulfillment.</p><p><br></p><p>In essence, dogs are more than just pets—they are our confidants, our protectors, and our steadfast companions. They teach us what it means to love and be loved, and their unwavering devotion reminds us of the beauty of the human-animal bond. So let us celebrate our beloved canine companions and cherish the special bond we share with them, for in their presence, we find comfort, joy, and unconditional love</p>', 'Articles/3ZPzjNKbsR02HCVzhaG9sbCKy1l11bfxrmK4ScB1.jpg', 1, 6, '2024-03-17 23:13:02', '2024-03-17 23:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title1` varchar(255) NOT NULL,
  `Slug1` longtext NOT NULL,
  `Title2` varchar(255) NOT NULL,
  `Slug2` longtext NOT NULL,
  `Title3` varchar(255) NOT NULL,
  `Slug3` longtext NOT NULL,
  `Title4` varchar(255) NOT NULL,
  `Slug4` longtext NOT NULL,
  `Title5` varchar(255) NOT NULL,
  `Slug5` longtext NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `image7` varchar(255) DEFAULT NULL,
  `image8` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `Title1`, `Slug1`, `Title2`, `Slug2`, `Title3`, `Slug3`, `Title4`, `Slug4`, `Title5`, `Slug5`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `created_at`, `updated_at`) VALUES
(2, 'Smart Offer', 'Great Summer Collection', 'Smart Offer', 'Save 20% on bags', 'New Arrivals', 'Shop Today\'s Deals & Offers', 'Sale Off', 'Great Summer Collection', 'Smart Offer', 'Save 20% on Woman Clothes', 'Banner_photos/cJ42uHhIrJWgWlFUpsaqAjLURLv4liGQfwVBXzoK.jpg', 'Banner_photos/1lhxBq1C5E3WwrZsPr8jspQY8pAuUzA94NqblJlB.jpg', 'Banner_photos/YFy3zey1VixJkuLvyjNhmmZeaxqAoDNaKIB98jc4.jpg', 'Banner_photos/QXTasj1Wc0EqEOzsOKVZYlmMuf4bM71x3z7txjYF.png', 'Banner_photos/5Jl4zuAclgB69DHSbCRBZgHNPUiIQbeCVj9b8MU9.png', 'Banner_photos/vsGL3bsXYDxUmyvpgKdczc5g7EAJdqrdHuBgHY9c.png', 'Banner_photos/R3rWzZFjrRu4cz1upGwr0bFy4ctInCZuOa1Jw9AJ.png', 'Banner_photos/sLS2Z60uXwZOD9hFrC7PFwc6EdlyyyByXBsk615j.jpg', '2024-03-17 19:27:14', '2024-03-17 23:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'Brands/gA5exr0KNDrRyvCDMDovu4xBuPKJt6koswaCM282.png', 'adidas', '2024-03-17 17:08:34', '2024-03-17 17:08:34'),
(2, 'Zara', 'Brands/AZY4vCmghSb13G4Md3ieQOjmoJpVT0NBRNgHyKWm.png', 'zara', '2024-03-17 17:09:29', '2024-03-17 17:09:29'),
(3, 'Apple', 'Brands/SdicdBt4nsM5K8IEgEasbMksGZXFwCHEDzy8eXzO.png', 'apple', '2024-03-17 17:10:02', '2024-03-17 17:10:02'),
(4, 'Samsung', 'Brands/xubvkq90IqWMCcBusnJbBh1ixvY8PBzvxUlGlsWX.png', 'samsung', '2024-03-17 17:10:37', '2024-03-17 17:10:37'),
(5, 'Cucci', 'Brands/o3s2So2M8AmrY5CMjUi0LyzZzZI7zeSOcNGsVztR.png', 'cucci', '2024-03-17 17:11:27', '2024-03-17 17:11:27'),
(6, 'Dell', 'Brands/mMD1ic5Rkw8ZtULaRvPRfy2Z24VeXC0psDfQKkdq.png', 'dell', '2024-03-17 17:13:17', '2024-03-17 17:13:17'),
(7, 'Rolex', 'Brands/bZJqSpf55CHbsL6QPhmJEVXNcU8voJJeCNbeUyp1.png', 'rolex', '2024-03-17 17:48:27', '2024-03-17 17:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `product_id`, `quantity`, `size`, `color`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 3, 4, NULL, 'Purple', 1, '2024-03-18 01:00:10', '2024-03-18 01:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'category/Cupt9uaRPFMyccZ0ur1VAKkT4TMnQzNh1BRfwO7N.png', '2024-03-17 17:29:50', '2024-03-17 17:29:50'),
(2, 'Clothes', 'category/TPEccWLdY7yBtDB27GnMtAHKpGwjIDb0dgm6DL35.png', '2024-03-17 17:32:07', '2024-03-17 17:32:07'),
(3, 'Bags', 'category/wvyGlZxvnAEKOXlYzKSMIZd8icIwgNBL61EbW1K2.jpg', '2024-03-17 17:32:43', '2024-03-17 17:32:43'),
(4, 'Accessoires', 'category/m1IGn7n6wtNyDaARv6sBbpHdForOy1Y6sAjMj4Pn.png', '2024-03-17 17:36:57', '2024-03-17 17:39:40'),
(5, 'TV Smart', 'category/WQW2Hmo8HqTBIZe2wRVpFn501Zy0Hzg5BAtrA00W.png', '2024-03-17 17:40:42', '2024-03-17 17:40:42'),
(6, 'Books', 'category/NucpeOfxeRY5LJhLfGC1ppSLUzew2ec0fUeRuf7m.png', '2024-03-17 17:42:03', '2024-03-17 17:42:03'),
(7, 'Games', 'category/MmVnlYzpnHLEM1eWaowf53hhnirXR6mPeWieJ7YN.png', '2024-03-17 17:43:56', '2024-03-17 17:43:56'),
(8, 'LapTop', 'category/SZ3u91e62AY8bPGzb6nlAj7WNkpgJ5D2BmvarOZP.png', '2024-03-17 17:44:28', '2024-03-17 17:44:28'),
(9, 'IPad', 'category/QMKuvQqYADQ1AxCeQTPuUCVxFVxY6mIRGet1njkd.png', '2024-03-17 17:44:54', '2024-03-17 17:44:54'),
(10, 'Phones', 'category/Tfk6y09IKUy0aO8ODH9jVbskQDv7TpVxPUUCMR7u.png', '2024-03-17 17:45:25', '2024-03-17 17:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Yellow', '#e2ff05', 'active', '2024-03-17 17:18:00', '2024-03-17 17:18:00'),
(3, 'Black', '#000000', 'active', '2024-03-17 17:18:26', '2024-03-17 17:18:26'),
(4, 'Purple', '#353b92', 'active', '2024-03-17 17:19:19', '2024-03-17 17:19:19'),
(5, 'Pink', '#e708f7', 'active', '2024-03-17 17:21:37', '2024-03-17 17:21:37'),
(6, 'Blue', '#0642f4', 'active', '2024-03-17 17:22:00', '2024-03-17 17:22:00'),
(7, 'Green', '#198005', 'active', '2024-03-17 17:22:35', '2024-03-17 17:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 1, 5, NULL, NULL),
(4, 1, 6, NULL, NULL),
(5, 2, 3, NULL, NULL),
(6, 3, 4, NULL, NULL),
(7, 3, 5, NULL, NULL),
(8, 3, 6, NULL, NULL),
(9, 4, 3, NULL, NULL),
(10, 4, 4, NULL, NULL),
(11, 4, 5, NULL, NULL),
(12, 4, 6, NULL, NULL),
(13, 4, 7, NULL, NULL),
(14, 6, 3, NULL, NULL),
(15, 6, 4, NULL, NULL),
(16, 6, 5, NULL, NULL),
(17, 6, 6, NULL, NULL),
(18, 6, 7, NULL, NULL),
(19, 7, 3, NULL, NULL),
(20, 7, 4, NULL, NULL),
(21, 7, 5, NULL, NULL),
(22, 7, 6, NULL, NULL),
(23, 8, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questions` varchar(255) NOT NULL,
  `answers` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `questions`, `answers`, `created_at`, `updated_at`) VALUES
(1, 'How do I create an account?', 'Creating an account with MagicShop is quick and easy! Simply click on the \"Sign Up\" or \"Register\" button at the top right corner of our website and follow the prompts to set up your account.', '2024-03-18 00:03:51', '2024-03-18 00:03:51'),
(2, 'Do you offer international shipping?', 'Not Yet, we offer normal shipping to select countries. During checkout, you can enter your shipping address to see if we deliver to your location.', '2024-03-18 00:04:26', '2024-03-18 00:04:26'),
(3, 'Do you offer gift wrapping services?', 'Yes, we offer gift wrapping services for select items. During checkout, you\'ll have the option to add gift wrapping to your order for a small fee. You can also include a personalized message with your gift.', '2024-03-18 00:05:04', '2024-03-18 00:05:04'),
(4, 'How can I track my order?', 'in MagicShop You can track your order by logging into your account and navigating to the \"My_Orders\" section. There, you\'ll find detailed information about the status and tracking details of your orders.', '2024-03-18 00:05:30', '2024-03-18 00:05:30'),
(5, 'How do I contact customer support?', 'You can contact our customer support team via email at [magicshop.contact1@gmail.com] or through our online chat feature available on the website. Our dedicated support team is available [hours of operation] to assist you with any queries or concerns.', '2024-03-18 00:06:24', '2024-03-18 00:06:24'),
(6, 'How do I know if a product is in stock?', 'The availability of each product is indicated on its product page. If a product is out of stock, you\'ll see a notification indicating that it\'s currently unavailable for purchase. You can also contact us for more information about product availability.', '2024-03-18 00:07:00', '2024-03-18 00:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `feedback` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `image`, `name`, `job`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'Feedbacks/vkpsXQxjOpRt1hZZIVpkgprmsY4fvSlVaFusT7CE.jpg', 'Alex', 'Project manager', 'Magichop is like stepping into a realm of wonders! Their curated collection of products sparks joy and excitement with each browse. The website\'s mystical ambiance and seamless checkout process make shopping an enchanting adventure. Five stars for casting the perfect shopping spell!', '2024-03-17 22:31:15', '2024-03-17 22:31:15'),
(2, 'Feedbacks/FLuIXUAi0BA7pD66xB4fIcKpNoWbg6OkmaDdZzEo.jpg', 'Jessica', 'freelacer', 'MagicShop has truly made shopping a magical experience! From their enchanting product selection to their lightning-fast delivery, every aspect of my shopping journey has been delightful. I\'m under their spell and can\'t wait to cast my next order', '2024-03-17 22:32:03', '2024-03-17 22:32:03'),
(3, 'Feedbacks/8cOachf9IOlHbpJDTPhsaVZGb4NOyHxtoCT0o7Ap.jpg', 'Olivia', 'Graphic Designer', 'MagicShop has woven its magic into every aspect of the shopping experience. From the ethereal product presentations to the enchanting customer service, every interaction feels like a journey into a magical realm. Shopping here is not just an activity; it\'s an enchanting escape into a world of wonder and delight!', '2024-03-17 22:33:43', '2024-03-17 22:33:43'),
(4, 'Feedbacks/wYYPk3KEkwAzwj6RYLt2LN2X7zD1hXMPhOU0Lr4C.jpg', 'Ryan', 'Illustrator', '\"I\'ve been spellbound by MagicShop\'s exceptional service and attention to detail. Their commitment to customer satisfaction is truly enchanting! Whether I\'m seeking potions for beauty or charms for luck, MagicShop never fails to deliver. It\'s where the magic truly happens!', '2024-03-17 22:34:24', '2024-03-17 22:34:24'),
(5, 'Feedbacks/eeJDcvt02hIrUn7ePvgreuHTSiNLsGG0XhQ0es1X.jpg', 'Michael', 'Software Engineer', 'MagicShop has truly enchanted me with their exceptional service and mystical product offerings. As a software engineer, I appreciate the seamless user experience and intuitive navigation of their website. It\'s like unlocking a treasure trove of magical goodies every time I visit. MagicShop has cast its spell on me, and I\'m eagerly awaiting my next magical discovery', '2024-03-17 22:35:41', '2024-03-17 22:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `LinkIframeMap` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `title`, `adresse`, `email`, `phoneNumber`, `instagram`, `facebook`, `twitter`, `LinkIframeMap`, `created_at`, `updated_at`) VALUES
(1, 'Create Informations', 'Quebec Canada Street bianel N114', 'magicshop.contact1@gmail.com', '+212  615 256 198', 'https://www.gumyhoserewili.org.uk', 'https://www.gumyhoserewili.org.uk', 'https://www.gumyhoserewili.org.uk', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621', '2024-03-17 15:52:46', '2024-03-17 20:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_27_151844_create_categories_table', 1),
(6, '2023_12_27_222352_create_brands_table', 1),
(7, '2023_12_28_182714_create_products_table', 1),
(8, '2024_02_03_003133_create_sliders_table', 1),
(9, '2024_02_08_011004_create_faqs_table', 1),
(10, '2024_02_08_181407_create_abouts_table', 1),
(11, '2024_02_10_024659_create_quotes_table', 1),
(12, '2024_02_10_034553_create_feedback_table', 1),
(13, '2024_03_02_163706_create_colors_table', 1),
(14, '2024_03_02_163818_create_product_colors_table', 1),
(15, '2024_03_02_172237_create_contacts_table', 1),
(16, '2024_03_02_175416_create_sizes_table', 1),
(17, '2024_03_02_180015_create_product_sizes_table', 1),
(18, '2024_03_07_211222_create_reviews_table', 1),
(19, '2024_03_09_175939_create_wishlists_table', 1),
(20, '2024_03_09_235122_create_cart_items_table', 1),
(21, '2024_03_10_013936_create_tags_table', 1),
(22, '2024_03_10_014049_create_project_tags_table', 1),
(23, '2024_03_10_122620_create_orders_table', 1),
(24, '2024_03_10_160226_create_countries_table', 1),
(25, '2024_03_10_160236_create_states_table', 1),
(26, '2024_03_10_160302_create_cities_table', 1),
(27, '2024_03_12_011627_create_articles_table', 1),
(28, '2024_03_12_224612_create_slides_table', 1),
(29, '2024_03_13_000937_create_banners_table', 1),
(30, '2024_03_13_235847_create_infos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `country_region` varchar(255) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `shipping_address`, `telephone_number`, `country_region`, `Full_Name`, `email`, `province`, `city`, `zip_code`, `total_cost`, `created_at`, `updated_at`) VALUES
(1, 1, 'SYBA 3  la rue faris mohamed N122', '+212 615 256 198', '1', 'Haley Wilder', 'elfarissihiba780@gmail.com', '1', '3', '40000', '9580.00', '2024-03-17 23:36:34', '2024-03-17 23:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `color`, `size`, `unit_price`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 'Black', NULL, '4790.00', 1, '2024-03-17 23:36:34', '2024-03-17 23:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `sold` int(11) NOT NULL,
  `price` double UNSIGNED NOT NULL,
  `old_price` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `status` enum('In Stock','Out of Stock') NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `quantity`, `sold`, `price`, `old_price`, `images`, `status`, `category_id`, `brand_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Iphone PRO  12', 'IPhone 12 Pro / 12 Pro Max, 95% Go, 128 Go, Dean, 6 Go de RAM, Super Retina, OLED, Face ID, débloqué, 5G, original, nouveau, 256', '1: Le téléphone portable n\'a pas été démonté, aucune pièce n\'a été remplacée, son étanchéité n\'a pas été endommagée.\r\n\r\n2: L\'aspect général du téléphone portable est bon, avec seulement quelques rayures mineures sur l\'écran ou la couverture arrière, et des empreintes ou des ecchymoses sur le cadre.\r\n\r\n3: L\'écran est original, fonctionne normalement, il n\'y a pas de point, pas de ligne, pas de vieillissement, pas d\'écran vert, pas d\'écran rouge.\r\n\r\n4: La caméra fonctionne normalement, pas de points noirs, pas de bourrage, mise au point réglable, mise au point.\r\n\r\n5: Toutes les fonctions du téléphone fonctionnent correctement.\r\n\r\n6: L\'état de santé de la batterie est supérieur à 86%.', 20, 25, 4900, 6700, '[\"TELEPH1.png\",\"TELEPH2.png\",\"TELEPH3.png\"]', 'In Stock', 10, 3, NULL, '2024-03-17 17:56:39', '2024-03-17 17:56:39'),
(2, 'Camera Canon', 'Full frame DSLR camera, professional camera, sports photography, 4K video, EOS 1D', 'SKU: CA011CM0DUV20NAFAMZ\r\nModèle: EOS 4000D\r\nTaille (Longueur x Largeur x Hauteur cm): 12.9x7.71x10.16\r\nPoids (kg): 0.436\r\nCouleur: Noir\r\nMatière principale: plastique\r\nVidéos EOS: Rendu cinématographique 1080p\r\nType 2,7 pouces: Écran LCD\r\nLiaison sans fil: \'Wi-Fi\' connectivity\r\nGuide fonctions: Astuces faciles à suivre', 30, 20, 4790, 6000, '[\"CAV2.png\",\"CAV3.png\",\"CAV4.png\"]', 'In Stock', 1, 4, NULL, '2024-03-17 18:14:15', '2024-03-17 18:14:15'),
(3, 'Apple iPad Pro (2020)', 'Apple iPad Pro (2020) 4th Gen 12.9\" Liquid Retina 120 Hz, 6Go/128Go - iPadOS - 7 MP/12 MP - Wi-Fi 4G Cellular Argent - Remis à neuf', 'Apple iPad Pro (2020) 12.9 pouces 6Go/128Go Wi-Fi 4G , Cellular Argent\r\n\r\nL\'iPad Pro (2020) 12.9 pouces 128 Go Wi-Fi 4G + Cellular Silver incarne l\'alliance parfaite entre élégance et puissance. Doté d\'un écran Retina Liquid Retina immersif, il offre des couleurs vibrantes et une résolution exceptionnelle. Avec une généreuse capacité de stockage de 128 Go, il répond aux besoins des utilisateurs exigeants en matière de stockage de fichiers, photos et vidéos.', 30, 35, 7999, 9000, '[\"TAB1.png\",\"TAB2.png\",\"TAB3.png\"]', 'In Stock', 9, 3, NULL, '2024-03-17 18:19:45', '2024-03-17 18:19:45'),
(4, 'Apple MacBook  Air M1 2020', 'Apple MacBook Air M1 2020 Gris AZERTY (1 To / 16 Go RAM) - 13.3\" inch - Remis à neuf', 'Apple MacBook Air M1 (2020) Gris Sidéral 16Go Ram / 1 To - Remis à neuf\r\nPC Ultra portable 13.3″ Liquid Rétina (2560 x 1664) – Apple M1 Octo-Core (GPU 8-core) – 16 Go LPDDR5 – SSD 1 To – 1.2 Kg – macOS Monterey\r\nApple MacBook Air M1 (2020) Gris Sideral 16 Go RAM/ 1 To\r\nModalités de reprise d’un produit électronique usagé', 100, 9, 9999, 11000, '[\"PC15.png\",\"PC16.jpg\",\"PC17.jpg\"]', 'In Stock', 8, 3, NULL, '2024-03-17 18:24:32', '2024-03-17 18:24:32'),
(5, 'Samsung 50\" Smart TV', 'Samsung 50\" Smart TV 4K Crystal UHD - Série 7 - Récepteur Intégré - Noir', 'UHD Processor, powerful picture quality\r\nUne qualité d\'image qui vous fait bouger, rendue possible par une puce unique qui orchestre les couleurs, optimise le taux de contraste élevé et maîtrise le HDR.\r\n\r\n \r\nAirPlay 2\r\n\r\nLa marque coréenne Samsung, leader incontesté du marché de la télévision, cherche à innover sans cesse, pour proposer le meilleur de la qualité d\'image et du design pour ces écrans\r\n\r\n \r\n\r\nLes points forts :\r\n\r\nRétroéclairage par LED - UHD dimming\r\nFormat d\'affichage : 4K UHD (2160p)\r\nRésolution : 3840 x 2160\r\nTechnologie HDR : Hybrid Log-Gamma (HLG), HDR 10+\r\nTechnologie d\'amélioration du mouvement : 1400 Picture Quality Index\r\nQté de ports HDMI : 3 ports\r\nTuner TV numérique : Améliorations d\'image : Digital Clean View, Mega Contrast, accentuation du contraste,\r\nPurColor\r\nInterface vidéo : Composant, composite, HDMI', 25, 10, 3998, 5000, '[\"prt-1-1-2TVs.jpg\",\"prt-1-1TVs.png\",\"prt-1-2TVs.jpg\",\"prt-1TVs.png\"]', 'In Stock', 5, 4, NULL, '2024-03-17 18:27:55', '2024-03-17 18:27:55'),
(6, 'T-shirt', 'T-shirt Dice Top Manches longues -', 'SKU: DI009MW0OKIW0NAFAMZ\r\nModèle: TOP Manches longues - femme- noir\r\nPays de production: Egypt\r\nPoids (kg): 0.5\r\nCouleur: noir\r\nMatière principale: cotton 95% lycra 5%\r\nT-Shirt Manches longues -\r\n95% cotton 5% Lycra', 55, 5, 100, 150, '[\"product-3-1.jpg\",\"product-3-2.jpg\",\"product-5-1.jpg\",\"product-5-2.jpg\"]', 'In Stock', 2, 2, NULL, '2024-03-17 20:34:51', '2024-03-17 20:34:51'),
(7, 'Hat Chapeau', 'Hat Chapeau Bob pour homme et femme, chapeau de soleil d\'extérieur, pour printemps et été', 'ce chapeau cloche classique protège des rayons du soleil malgré un bord somme toute discret. Il est entièrement fait de cotton délavé à l\'effet rétro.Taille: 56-58cm Style:marijuana hat design type de motif: feuille d\'érablegenre: unisexmateriau: coton\r\n\r\nTaille: 56-58\r\ncotton\r\nmarijuana design\r\nreciclable\r\n\r\nSKU: HA986FC0Q19DLNAFAMZ\r\nGamme de produits: produit pour tous les ages\r\nModèle: XMH1121\r\nPays de production: France, China\r\nPoids (kg): 0.3\r\nCouleur: noir/rouge\r\nMatière principale: cotton', 20, 9, 96, 120, '[\"product-15-1.jpg\",\"product-15-2.jpg\"]', 'In Stock', 2, 2, NULL, '2024-03-17 20:38:27', '2024-03-17 20:38:27'),
(8, 'Naviforce Watch Men', 'Naviforce Watch Men Luxury Brand Fashion Digital Watches Mens Sports Quartz A', '-100% neuf et de haute qualité.\r\n-Mouvement à quartz japonais précis pour un temps précis.\r\n-3ATM résistant à l\'eau, parfait pour protéger peu d\'eau comme laver la main/sueur/pluie, mais ne peut pas mettre dans l\'eau ou la douche ou nager.\r\n-La couleur peut ne pas apparaître aussi exactement que dans la vie réelle en raison des variations entre les moniteurs d\'ordinateur et la différence de couleur des yeux nus.\r\n-Pack avec boîte cadeau, c\'est un très bon cadeau pour la famille/les amis/l\'amant/vous-même.\r\n\r\nLe paquet comprend:\r\n1 x Véritable montre CURREN\r\n\r\nSKU: NA977FC053S8MNAFAMZ\r\nGamme de produits: montre bracelet en acier inoxydable pour homme\r\nModèle: chronographe\r\nPays de production: China\r\nTaille (Longueur x Largeur x Hauteur cm): 2,4 x 24 x 1\r\nPoids (kg): 1\r\nCouleur: argenté blue\r\nMatière principale: Acier Inoxydable', 15, 7, 299, 350, '[\"cart-8-1.png\"]', 'In Stock', 4, 7, NULL, '2024-03-17 20:43:50', '2024-03-17 20:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, NULL, NULL),
(2, 6, 2, NULL, NULL),
(3, 6, 3, NULL, NULL),
(4, 6, 4, NULL, NULL),
(5, 6, 5, NULL, NULL),
(6, 6, 6, NULL, NULL),
(7, 6, 7, NULL, NULL),
(8, 7, 1, NULL, NULL),
(9, 7, 2, NULL, NULL),
(10, 7, 3, NULL, NULL),
(11, 7, 4, NULL, NULL),
(12, 7, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 4, 2, NULL, NULL),
(6, 5, 1, NULL, NULL),
(7, 6, 3, NULL, NULL),
(8, 6, 4, NULL, NULL),
(9, 6, 5, NULL, NULL),
(10, 6, 6, NULL, NULL),
(11, 7, 3, NULL, NULL),
(12, 7, 4, NULL, NULL),
(13, 8, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ali Master', 'Quotes/GJyvrj01iDf5NSUXtPm891gCJ3fqd2zqhBz3z3PU.jpg', 'Absolutely mesmerized by the spells and enchantments I found here! The magical artifacts are top-notch, and the customer service is as magical as the products. My spells have never been more potent!', '2024-03-17 22:21:19', '2024-03-17 23:49:19'),
(2, 'B.Sarah', 'Quotes/WyiWcYLsOC8crpC5qSQRbvUI7oySRM083H7MrMVC.jpg', 'I love shopping on MagicShop! The website is user-friendly, and I always find the products I need. The checkout process is smooth, and my orders arrive quickly. Highly recommended!', '2024-03-17 22:23:37', '2024-03-17 23:48:55'),
(3, 'john malic', 'Quotes/CLyMwGHGeJNSd4tpo8PYkPWcMCajwo8XRVJ0dIQh.jpg', 'Great selection of products and excellent customer service! I had a question about my order, and the support team responded promptly and resolved my issue. Will definitely be shopping here again.', '2024-03-17 22:24:09', '2024-03-17 23:48:36'),
(4, 'Emily fag', 'Quotes/OhTVihPDxaqH8IHfZVqAyTAZpPLc5SJW9YtlJb92.jpg', 'I\'m impressed with the quality of products and the attention to detail. The packaging was sturdy, and my items arrived in perfect condition. MagicShop has become my go-to destination for all my shopping needs.', '2024-03-17 22:24:42', '2024-03-17 23:48:13'),
(5, 'J.David', 'Quotes/e9WlaNGMQsTaT9YfS9mXocZgtV2yiaBCQ7hVO2UN.jpg', 'The return process was hassle-free, and the staff was very accommodating. I had to exchange an item, and the process was quick and straightforward. Thank you for the excellent service!', '2024-03-17 22:25:48', '2024-03-17 23:47:53'),
(6, 'B.Lisa', 'Quotes/G9nGDv8gqHYg4NFsG8zeE3eG9ABP9BzvlbKNaOjo.jpg', 'MagicShop exceeded my expectations! The prices are competitive, and the shipping was surprisingly fast. I\'m delighted with my purchase and will definitely be shopping here again in the future.', '2024-03-17 22:26:37', '2024-03-17 23:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `content`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'it\'s working Awesome', 4, '2024-03-18 00:22:18', '2024-03-18 00:22:18'),
(2, 1, 4, 'it\'s working Cool', 4, '2024-03-18 00:23:11', '2024-03-18 00:23:11'),
(3, 1, 1, 'amazing', 5, '2024-03-18 00:42:49', '2024-03-18 00:42:49'),
(4, 1, 4, 'oooooh', 4, '2024-03-18 00:52:42', '2024-03-18 00:52:42'),
(5, 1, 4, 'that\'s amazing mac  so bad', 4, '2024-03-18 00:57:49', '2024-03-18 00:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'XL', 'active', '2024-03-17 17:23:04', '2024-03-17 17:23:04'),
(2, 'XXL', 'active', '2024-03-17 17:23:21', '2024-03-17 17:23:21'),
(3, 'S', 'active', '2024-03-17 17:23:35', '2024-03-17 17:23:35'),
(4, 'M', 'active', '2024-03-17 17:23:48', '2024-03-17 17:23:48'),
(5, 'L', 'active', '2024-03-17 17:24:03', '2024-03-17 17:24:03'),
(6, 'XS', 'active', '2024-03-17 17:24:27', '2024-03-17 17:24:27'),
(7, 'XXXL', 'active', '2024-03-17 17:26:07', '2024-03-17 17:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `images`, `created_at`, `updated_at`) VALUES
(1, '[\"books-3.jpg\",\"branding-1.jpg\",\"branding-2.jpg\",\"branding-3.jpg\",\"Cerave.jpg\",\"product-1.jpg\",\"product-2.jpg\"]', '2024-03-17 19:45:27', '2024-03-17 23:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', '2024-03-17 17:14:03', '2024-03-17 17:14:03'),
(2, 'HP', '2024-03-17 17:14:28', '2024-03-17 17:14:28'),
(3, 'Fashion', '2024-03-17 17:14:40', '2024-03-17 17:14:40'),
(4, 'ECommerceStore', '2024-03-17 17:15:41', '2024-03-17 17:15:41'),
(5, 'BuyOnline', '2024-03-17 17:16:01', '2024-03-17 17:16:01'),
(6, 'OnlineShopping', '2024-03-17 17:16:32', '2024-03-17 17:16:32'),
(7, 'iPhone 11', '2024-03-17 17:17:12', '2024-03-17 17:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `Twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','desactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `photo`, `Facebook`, `Twitter`, `instagram`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$12$UCeCUTDdOtbBA.rZjr6UiOBrjNErupgv.hxvXjLsRQVsLu0ob/7fa', 'admin', 'active', NULL, NULL, NULL),
(2, 'User', 'user', NULL, NULL, NULL, NULL, 'user@gmail.com', NULL, '$2y$12$9yFjACrp5B36hCOjZAnpmOMjUmvuv2eGbbs6.0CDqdVg0Iks.AEVO', 'user', 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2024-03-18 00:13:34', '2024-03-18 00:13:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_categorie_id_index` (`Categorie_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_id_index` (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_user_id_foreign` (`user_id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_product_product_id_foreign` (`product_id`),
  ADD KEY `color_product_color_id_foreign` (`color_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`category_id`),
  ADD KEY `products_brand_id_index` (`brand_id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_size_product_id_foreign` (`product_id`),
  ADD KEY `product_size_size_id_foreign` (`size_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tag_product_id_foreign` (`product_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_categorie_id_foreign` FOREIGN KEY (`Categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `color_product`
--
ALTER TABLE `color_product`
  ADD CONSTRAINT `color_product_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `color_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product_size_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
