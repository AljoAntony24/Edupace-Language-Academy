-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 02:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edupace_language_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `category`, `image`, `status`) VALUES
(4, 'HAAD', '65a662c727bc2.jpeg', 1),
(5, 'DHA', '65a7ac68d0881.jpeg', 1),
(6, 'SAUDI', '65a7ae0e6cbf5.jpeg', 1),
(7, 'MOH', '65a7b1b7576bd.jpeg', 1),
(8, 'NHRA', '65a7bbf76e8d8.jpeg', 1),
(9, 'QATAR', '65a7bccef3057.jpeg', 1),
(10, 'OMAN', '65a7bd4400ce7.jpeg', 1),
(12, 'Home', '65b0be4269028.jpeg', 1),
(13, 'Home', 'Best Study Abroad Coching Center.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image_slider` varchar(255) NOT NULL,
  `image_phone` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image_slider`, `image_phone`, `status`) VALUES
(16, '65a4d4946b0dd.jpg', '65a4d4946b0e1.jpg', 1),
(17, '65a4d4a7d61ec.jpeg', '65a4d4a7d61f2.jpg', 1),
(18, '65a4d4b7459bf.png', '65a4d4b7459cb.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `date`, `title`, `description`, `image`) VALUES
(3, 'Vyshnavi Prasee', '2024-01-16 10:09:11', 'German language course in Thrissur', '<p>Are you considering enrolling in a&nbsp;<strong>Thrissur German language course?</strong>&nbsp;edupace! Comprehensive German language instruction is offered in Thrissur for both beginning and seasoned students. The fundamentals of language, including syntax, vocabulary, pronunciation, and writing techniques, can be learned from these classes. In order to aid with language proficiency, Go Germany also offers students expert advice and assistance. Go Germany&#39;s primary goal is to give each student a personalized learning plan so they can complete their coursework at their own pace. Consider enrolling at one of our Thrissur centers or institutes right now if you want to learn German!</p>\r\n\r\n<h2><strong>Online German Language Training in Thrissur</strong></h2>\r\n\r\n<p>In Thrissur, there are numerous choices for learning German. Our German language institute offers classroom, online, and one-on-one instruction for students wishing to study in Germany as well as job prospects for nurses, engineers, drivers, and other professions seeking to work in Germany.</p>\r\n\r\n<h3><strong>German Language Courses Offered in Thrissur</strong></h3>\r\n\r\n<p>To apply for nurse, driver, engineer, or trainee jobs in Germany, you must have a valid work visa.and good German knowledge.Having relevant qualifications and experience is also essential. You can look for a job.openings online or contact recruitment agencies and headhunters who specialize in finding nurses, drivers, and engineers.When applying, make sure to highlight your skills and experience that are relevant to the job description.Also, include an up-to-date CV, a cover letter, and other relevant documents such as references or certificates.Finally, please keep track of your applications and promptly follow up with the employers after submitting them.</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost/ddfc7c75-96de-4a49-8644-9fd7c8faf9f6\" width=\"4160\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<ul>\r\n	<li><strong>Online Training Programs:&nbsp;</strong>If you want to learn German at home without going to regular courses, the best alternative is to enroll in an online training program. Go Germany provides all-inclusive online courses for learning German, complete with audio lectures, video lessons, tests, and quizzes.</li>\r\n	<li><strong>Individualized Instruction:</strong>&nbsp;We offer individualized online German language instruction from qualified instructors one-on-one. A one-on-one lesson works well for students who have specific learning objectives or who require further assistance grasping particular ideas. The majority of teachers offer advice and comments so you can meet your learning goals fast.</li>\r\n	<li><strong>Group classes:&nbsp;</strong>For students who would want to study the language alongside other students, our institute offers group lessons. Basic grammar, vocabulary, and specialized subjects like conversational or business German are usually included in these classes.</li>\r\n</ul>\r\n', '65a655c7df1e8.png'),
(4, 'test', '2024-01-24 10:12:26', 'Test', '<p>Teest</p>\r\n', 'Best Study Abroad Coching Center.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `career_abroad`
--

CREATE TABLE `career_abroad` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career_abroad`
--

INSERT INTO `career_abroad` (`id`, `category`, `image`, `status`) VALUES
(3, 'Nurses To Germany', '65a7718abb3e8.jpeg', 1),
(4, 'Nurses To Germany', '65a771987423a.jpeg', 1),
(5, 'Nurses To Germany', '65a771a9a7dc3.jpeg', 1),
(6, 'Nurses To Germany', '65a771b54924e.jpeg', 1),
(7, 'Drivers To Germany', '65a792fbec11c.jpeg', 1),
(8, 'Drivers To Germany', '65a79309458e3.jpeg', 1),
(9, 'Drivers To Germany', '65a79312ea68c.jpeg', 1),
(10, 'Drivers To Germany', '65a7932015a83.jpeg', 1),
(11, 'Doctors To Spain', '65a794d450f96.jpeg', 1),
(12, 'Doctors To Spain', '65a794df48632.jpeg', 1),
(13, 'Doctors To Spain', '65a794ea69846.jpeg', 1),
(14, 'Doctors To Spain', '65a794f5e9c09.jpeg', 1),
(15, 'Doctors To Spain', '65a7952dca35c.jpeg', 1),
(16, 'Doctors To Spain', '65a795379363c.jpeg', 1),
(17, 'Doctors To Spain', '65a7954039e61.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email_id`, `message`, `status`) VALUES
(7, 'Aparna', '', 'I get to know various ideas of and information about the academy in thrissur. The academy was very helpful, i would highly recommend to visit Edupace Language Academy', 1),
(8, 'Amal Suresh', '', '100% trustable agency in Thrissur I will suggest to those who want to study with\r\nStipend and settle with a job in Germany. Their dedication in service to send students safety is appreciable.', 1),
(9, 'Riiya', '', 'I joined Edupace Language Academy recently I realized this is the great place to learn and grow both professionally and personally. If looking to switch for better career opportunities your search end here', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `l_name`, `email_id`, `phone`, `description`) VALUES
(2, 'Aljo', 'Antony', 'cto@plusitpark.com', '8606475101', 'Test'),
(3, 'test', 'test', 'cto@plusitpark.com', '8606475101', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `image`, `status`) VALUES
(3, '65a4dc45bfa4f.jpeg', 1),
(4, '65a4dc57df102.jpeg', 1),
(5, '65a4dc64f166b.jpeg', 1),
(6, '65a4dc8477869.jpeg', 1),
(7, 'Best Study Abroad Coching Center.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `footer_contact`
--

CREATE TABLE `footer_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_contact`
--

INSERT INTO `footer_contact` (`id`, `name`, `phone`, `message`) VALUES
(1, 'test', 'test', 'test'),
(2, 'Aljo', '8606475101', 'Test'),
(3, 'Aljo', '8606475101', 'Test'),
(4, 'dsa', 'sda', 'asd'),
(5, 'Aljo', 'test', 'hhjj'),
(6, 'Aljo1', 'test1', 'test'),
(7, 'as', 'as', 'sa'),
(8, 'As', 'saAs', 'AS'),
(9, 'Zx', 'zx', 'Xz'),
(10, 'SAD', 'SDA', 'SDA'),
(11, 'sanjay', 'sad', 'sadsda'),
(12, 'ddsa', 'asd', 'asd'),
(13, 'nbvbv', 'bnvbv', 'nbgnvn'),
(14, 'test', '8606475101', 'test'),
(15, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `language_training`
--

CREATE TABLE `language_training` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language_training`
--

INSERT INTO `language_training` (`id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'Aljo', 'cto@plusitpark.com', '8606475101', 'Test'),
(3, 'OET', 'cto@plusitpark.com', '8592926900', 'OET'),
(4, 'PTE', 'cto@plusitpark.com', '8606475101', 'PTE'),
(5, 'German', 'cto@plusitpark.com', '8606475101', 'test'),
(6, 'Spanish', 'cto@plusitpark.com', '8606475101', 'test'),
(7, 'French', 'cto@plusitpark.com', '8592926900', 'sja');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'edupace', '9dbb02c9f65da66153a7bb7094577371');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_feed` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_feed`, `status`) VALUES
(4, 'Direct client interview for Ausbildung candidates ! January : 23,24,25 | ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `study_abroad`
--

CREATE TABLE `study_abroad` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study_abroad`
--

INSERT INTO `study_abroad` (`id`, `category`, `youtube_link`, `description`) VALUES
(2, 'Ausbildung In Germany', 'NCYBE9xeJKU', ''),
(3, 'Vocational Training Program', 'NCYBE9xeJKU', ''),
(4, 'Master Program At Germany', 'NCYBE9xeJKU', ''),
(5, 'Doctors To Spain', 'NCYBE9xeJKU', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `place`, `description`, `date`) VALUES
(5, 'Vyshnavi Prasee', 'Thrissur', '<p>I had a fantastic experience with Edupace Language Academy in Thrissur. They were remarkably efficient, and they helped me through the process. Despite their tight schedule, they remained responsive throughout. I&#39;m truly grateful and highly recommend Edupace Language Academy to anyone in Thrissur looking for an education abroad.</p>\r\n', '2024-01-15 09:57:32'),
(6, 'Dana Sidhik', 'Calicut', '<p>I had a great time getting my student visa for Germany through Edupace Language Academy in Thrissur. Everything went smoothly, and the team was really helpful and responsive to my questions. I want to thank the whole team for their support. I highly recommend Edupace Language Academy in Thrissur for an easy and hassle-free experience. Thanks, Team Edupace, for making my dream a reality!</p>\r\n', '2024-01-15 09:58:07'),
(7, 'Sanjay Santhosh', 'Thrissur', '<p>I had a great experience with Edupace Language Academy Thrissur. They helped me throughout my application process, clarified my doubts, trained me to attend the client interview, and also helped me get accommodation in the Germany without commission. I am really grateful to all the members of the Edupace Language Academy team. Thank you.</p>\r\n', '2024-01-15 09:58:41'),
(8, 'Anju C S', 'Kottayam', '<p>I strongly recommend Edupace Language Academy Thrissur for anyone dreaming of studying abroad. Their staff is knowledgeable, professional, and always ready to help with any questions. They went the extra mile to assist me in every step, from choosing the right program to handling visa applications. Their expertise, attention to detail, and personalized approach make them an excellent choice for anyone in Thrissur seeking guidance in international education.</p>\r\n', '2024-01-15 09:59:10'),
(9, 'Swetha K Sathyan', 'Ernakulam', '<p>Edupace Language Academy has my sincere gratitude for making my dream of studying in the Spain a reality. Thank you so much. They followed a systematic approach from beginning to end, supporting me through my journey. The whole team at Edupace is working hard to achieve my dream. All the processes and procedures are really smooth. Once again, I felt gratitude for all the team members who worked behind this successful journey to the Germany.</p>\r\n', '2024-01-15 09:59:32'),
(10, 'Shinto Roy', 'kuriachira', '<p>I&#39;m extremely delighted by the service provided by Edupace Language Academy in Thrissur. The staff is well-mannered, polite, and really helpful in each and every step. I would personally prefer the Edupace service for anyone who&#39;s looking to study abroad. Thank you for your service, and I wish you goodwill in your future endeavors.</p>\r\n', '2024-01-15 10:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `video_reel`
--

CREATE TABLE `video_reel` (
  `id` int(11) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_reel`
--

INSERT INTO `video_reel` (`id`, `youtube_link`, `status`) VALUES
(3, 'NCYBE9xeJKU', 1),
(5, 'K34UyBVnsaQ', 1),
(6, 'K34UyBVnsaQ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_abroad`
--
ALTER TABLE `career_abroad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_contact`
--
ALTER TABLE `footer_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_training`
--
ALTER TABLE `language_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_abroad`
--
ALTER TABLE `study_abroad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_reel`
--
ALTER TABLE `video_reel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `career_abroad`
--
ALTER TABLE `career_abroad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer_contact`
--
ALTER TABLE `footer_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `language_training`
--
ALTER TABLE `language_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `study_abroad`
--
ALTER TABLE `study_abroad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video_reel`
--
ALTER TABLE `video_reel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
