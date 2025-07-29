-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2024 at 10:49 AM
-- Server version: 10.6.18-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `igenius_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `status` text NOT NULL,
  `banner_type` int(11) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `url`, `status`, `banner_type`, `creationDate`) VALUES
(47, '263783.gif', 'https://igenius.demovoting.com/index.php', 'Active', 0, '2024-07-05 16:16:24'),
(48, '548129.gif', 'https://igenius.demovoting.com/index.php', 'Active', 0, '2024-07-05 16:16:44'),
(49, '165783.gif', 'https://igenius.demovoting.com/index.php', 'Active', 0, '2024-07-05 16:17:12'),
(54, '627090.gif', 'https://igenius.demovoting.com/index.php', 'Active', 0, '2024-07-06 08:36:09'),
(56, '673484.gif', 'https://igenius.demovoting.com/index.php', 'Active', 0, '2024-07-06 16:35:09'),
(57, '48761.gif', 'https://igenius.demovoting.com/index.php', 'Active', 0, '2024-07-06 16:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `descr` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `title`, `descr`, `creation_on`) VALUES
(175117, '269115.png', 'Unlocking Potential: I-Genius Abacus Brain Development Courses for Kids', '<p>In the digital age, where screens dominate our lives, I-Genius Abacus offers a refreshing and effective way to boost brain development in children aged 4 to 14 years. These courses are designed to engage young minds in the ancient art of the abacus, which has been modernized to fit today&rsquo;s educational needs.</p>\r\n', '2024-07-01 11:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_name` text NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_name`, `blog_img`, `blog_desc`, `created_on`, `updated_on`) VALUES
(21, 'Choosing the Best Abacus Course for Your Child : A Parent’s Guide', '15979.jpeg', '<p>Selecting the <u style=\"color:#0068b1;\"><a href=\"https://igenius.demovoting.com/\"><strong style=\"color:#0068b1;\">Best Abacus Course</strong></a></u> for your child can be a challengingtask. With so many options available, it&#39;s crucial to find a program that aligns with your child&rsquo;s needs and learning style. This guide aims to make things easier by giving parents important information so they can make a good decision.</p>\r\n', '2024-07-11 09:22:07', '2024-07-11 09:22:07'),
(23, 'Why Abacus Training is Essential for KidsCognitive Development', '481433.jpeg', '<p>Abacus Training is more than just learning how to compute; it&#39;s a powerful educational tool that can greatly enhance a child&#39;s cognitive growth. This ancient method has stood the test of time, establishing its value in modern education systems worldwide. In this article, we explore why abacus training is essential for kids&#39; cognitive development and how it benefits their overall growth.</p>\r\n', '2024-07-11 10:16:41', '2024-07-11 10:16:41'),
(24, 'Achieve Superior Results by Combining Abacus and Vedic Math Classes', '854136.jpeg', '<p style=\"margin-left:36.0pt;\">In today&#39;s competitive academic landscape, integrating traditional and modern education techniques can produce exceptional results.</p>\r\n\r\n<p style=\"margin-left:36.0pt;\"><u style=\"color: #1876c0;\"><a href=\"https://igenius.demovoting.com/courses?id=3\"><strong style=\"color: #1876c0;\">Abacus and Vedic Math courses</strong></a>&nbsp;</u>offer a strong synergy that enhances mental abilities, and mathematical skills and grows academic performance.</p>\r\n\r\n<p style=\"margin-left:36.0pt;\">This article delves into the benefits of integrating Abacus and Vedic Math training for children, providing parents with insights into how these ancient techniques can pave the way for superior academic victory .</p>\r\n', '2024-07-11 12:11:02', '2024-07-11 12:11:02'),
(25, 'The Impact of Abacus Math Classes on Academic Performance', '487332.jpeg', '<p><u style=\"color: #1876c0;\"><a href=\"https://igenius.demovoting.com/\"><strong style=\"color: #1876c0;\">Abacus Math Classes</strong></a></u> have been acquiring popularity among parents and educators for their deep impact on children&#39;s academic performance.</p>\r\n\r\n<p>This ancient calculating tool has evolved into a modern educational technique that enhances cognitive abilities and fosters a love for learning.</p>\r\n\r\n<p>In this article, we&#39;ll examine how abacus math classes can boost academic success, and why parents should consider enrolling their children in these programs.</p>\r\n', '2024-07-13 06:27:07', '2024-07-13 06:27:07'),
(26, 'Unlock Your Child\'s Prospect: The Best Abacus Classes for Young Minds', '506923.jpeg', '<p><strong>Introduction</strong></p>\r\n\r\n<p>To improve your child&#39;s educational experience in the ever-changing area of education, you must discover the correct tools. A frequently overlooked tool of this type is the abacus. Abacus classes provide a fusion of traditional and modern teaching approaches that might help your child reach their great potential.</p>\r\n', '2024-07-13 06:41:17', '2024-07-13 06:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `blog_faq`
--

CREATE TABLE `blog_faq` (
  `blog_faq_id` int(11) NOT NULL,
  `blog_faq_que` text NOT NULL,
  `blog_faq_ans` text NOT NULL,
  `blog_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_faq`
--

INSERT INTO `blog_faq` (`blog_faq_id`, `blog_faq_que`, `blog_faq_ans`, `blog_id`, `created_on`, `updated_on`) VALUES
(16, '1.What age should children start abacus training?', 'Children can start as early as 4 years old, but the ideal age may vary depending on the program.', 21, '2024-07-11 10:07:03', '2024-07-11 10:07:03'),
(17, '2. Are online abacus classes as effective as offline ones?', 'Both online and offline classes can be effective if they are well-structured and taught by qualified instructors.', 21, '2024-07-11 10:07:18', '2024-07-11 10:07:18'),
(18, '3. How long does it take to complete an abacus course?', 'Course duration varies; some programs can be completed in a few months, while others may take longer.', 21, '2024-07-11 10:08:03', '2024-07-11 10:08:03'),
(19, '4. What should I look for in an abacus educators?', 'Look for educators with certification, experience, and a teaching style that engages children.', 21, '2024-07-11 10:08:17', '2024-07-11 10:08:17'),
(20, '5. Can abacus training help with other subjects besides math?', 'Yes, the cognitive skills developed through abacus training can enhance overall academic performance.', 21, '2024-07-11 10:08:31', '2024-07-11 10:08:31'),
(21, '1. At what age should children start abacus training?', 'Children can start as early as 4 years old, but it\'s beneficial at any age.', 23, '2024-07-11 11:05:54', '2024-07-11 11:05:54'),
(22, '2. How long does it take to see results from abacus training?', 'Most children show significant improvements within a few months of regular practice.', 23, '2024-07-11 11:06:46', '2024-07-11 11:06:46'),
(23, '3. Is abacus training suitable for children who struggle with math?', 'Yes, abacus training simplifies math concepts, making them easier to understand for children who find traditional math challenging.', 23, '2024-07-11 11:06:58', '2024-07-11 11:06:58'),
(24, '4. Can abacus training be done online?', 'Absolutely. Many programs offer effective online classes.', 23, '2024-07-11 11:07:11', '2024-07-11 11:07:11'),
(25, '5. How does abacus training compare to other cognitive development programs?', 'Abacus training is unique in its ability to engage both hemispheres of the brain, providing comprehensive cognitive benefits.', 23, '2024-07-11 11:07:22', '2024-07-11 11:07:22'),
(26, '1. What is the ideal age to start Abacus and Vedic Math training?', '<p>Children can start as early as 4-5 years old. The sooner they begin, the greater the cognitive benefits.</p>\r\n', 24, '2024-07-13 06:18:37', '2024-07-13 06:18:37'),
(27, '2. How long does it take to see results from combined training?', '<p>Results can vary, but many students show significant improvement within a few months of consistent practice.</p>\r\n', 24, '2024-07-13 06:19:13', '2024-07-13 06:19:13'),
(28, '3. Can my child take both Abacus and Vedic Math classes simultaneously?', '<p>Yes, many programs offer integrated courses that combine both techniques for comprehensive learning.</p>\r\n', 24, '2024-07-13 06:19:35', '2024-07-13 06:19:35'),
(29, '4. Are online classes as effective as offline ones?', '<p>Both online and offline classes can be effective if taught by qualified instructors and tailored to the child&#39;s learning style.</p>\r\n', 24, '2024-07-13 06:20:04', '2024-07-13 06:20:04'),
(30, ' 5. What are the long-term benefits of Abacus and Vedic Maths training?', '<p>Long-term benefits include improved cognitive abilities, enhanced mathematical skills, increased confidence, and better academic performance across subjects.</p>\r\n\r\n<p style=\"margin-left: 40px;\">By understanding the unique advantages of combining Abacus and Vedic Math training, parents can make informed decisions to support their child&#39;s educational journey.</p>\r\n\r\n<p style=\"margin-left: 40px;\">For more understandings, check out our articles on <u style=\"color: #1876c0;\"><a href=\"https://igenius.demovoting.com/blog-detail.php?id=23\"><strong style=\"color: #1876c0;\">Why Abacus Training is Important for Kids Cognitive Development and Choosing the Best Abacus Course for Your Child: A Parent&rsquo;s Guide.</strong></a></u></p>\r\n', 24, '2024-07-13 06:23:08', '2024-07-13 06:23:08'),
(31, '1.	What is the right age to start abacus training? ', '<p>Children can begin as young as 4 years old, with programs designed for different age groups and skill levels.</p>\r\n', 25, '2024-07-13 06:36:56', '2024-07-13 06:36:56'),
(32, '2.	How soon can I expect to see results from abacus training? ', '<p>Results can vary, but many parents notice significant improvements within a few months of consistent practice.</p>\r\n\r\n<p style=\"margin-left:90.0pt;\">&nbsp;</p>\r\n', 25, '2024-07-13 06:37:09', '2024-07-13 06:37:09'),
(33, '3.	Can abacus training benefit subjects other than math? ', '<p>Yes, the cognitive skills developed through abacus training contribute to overall academic performance.</p>\r\n', 25, '2024-07-13 06:37:34', '2024-07-13 06:37:34'),
(34, '4.	 Are online abacus classes as effective as in-person classes? ', '<p><span lang=\"EN-IN\" style=\"font-size: 10.5pt; line-height: 107%; font-family: Arial, &quot;sans-serif&quot;; color: rgb(28, 28, 28); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Both formats can be effective if conducted by qualified instructors and customized to the child&#39;s learning style.&nbsp;</span></p>\r\n', 25, '2024-07-13 06:37:53', '2024-07-13 06:37:53'),
(35, '5.  How can I choose the Best Abacus Course for my child? ', '<p>Consider factors such as the curriculum, educators qualifications, format (online/offline), and reviews from other parents.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Parents can make informed decisions to support their children&#39;s educational journeys by understanding the profound impact abacus training can have on academic performance. For further information on selecting the best abacus course, find our Parents Guide to<a href=\"https://igenius.demovoting.com/blog-detail.php?id=12\"> Choosing the Best Abacus Course</a>&nbsp;And Unlock Your Child&#39;s Potential: The Best Abacus Classes for Young Minds helpful. (link to Other Blog)</p>\r\n', 25, '2024-07-13 06:39:32', '2024-07-13 06:39:32'),
(36, '1. What age group is suitable for abacus classes?', '<p style=\"margin-left: 40px;\">Abacus classes are typically designed for children aged 4 to 14 years.</p>\r\n', 26, '2024-07-13 06:57:10', '2024-07-13 06:57:10'),
(37, '2. How long does it take to see improvements in my child\'s math skills?', '<p>Most children start showing improvements within a few months of regular practice and training.</p>\r\n', 26, '2024-07-13 06:57:47', '2024-07-13 06:57:47'),
(38, '3. Are online abacus classes as effective as offline ones?', '<p>&nbsp;Yes, online abacus classes can be just as effective, provided they are interactive and wellstructured.</p>\r\n', 26, '2024-07-13 06:58:06', '2024-07-13 06:58:06'),
(39, '4. Can abacus training help children who struggle with math?', '<p>Absolutely. Abacus training simplifies complex arithmetic operations, making math easier and more enjoyable.</p>\r\n', 26, '2024-07-13 06:58:29', '2024-07-13 06:58:29'),
(40, '5. How do I enroll my child in I-Genius Abacus Academy?', '<p><a href=\"https://igenius.demovoting.com/contact-us.php\">&nbsp;<u style=\"color: #1876c0;\"><strong style=\"color: #1876c0;\">Visit our website or contact us</strong></u></a><u><strong> </strong></u>directly to learn more about our enrolment process and start your child&rsquo;s abacus journey today.</p>\r\n', 26, '2024-07-13 06:59:28', '2024-07-13 06:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `blog_subtitles`
--

CREATE TABLE `blog_subtitles` (
  `blog_sub_id` int(11) NOT NULL,
  `blog_sub_name` text NOT NULL,
  `blog_sub_desc` text DEFAULT NULL,
  `blog_id` int(11) NOT NULL,
  `blog_title_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_subtitles`
--

INSERT INTO `blog_subtitles` (`blog_sub_id`, `blog_sub_name`, `blog_sub_desc`, `blog_id`, `blog_title_id`, `created_on`, `updated_on`) VALUES
(37, 'Why Choose Abacus?', '<p style=\"margin-left: 40px;\">Abacus training gives multiple academic benefits for children, such as enhanced concentration, improved memory, and better problem-solving skills.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This ancient tool goes above sheer counting; it engages both sides of the brain, promoting overall mental development. It makes math fun and engaging, helping to build a strong foundation in arithmetic. By learning to visualize numbers and perform math mentally, children gain confidence and proficiency in math, which can positively impact their performance in other subjects as well.</p>\r\n\r\n<p style=\"margin-left: 40px;\">By learning to visualize numbers and do math in their heads, children gain confidence and skill in math, which can also help them perform better in other subjects.</p>\r\n', 21, 37, '2024-07-11 09:32:18', '2024-07-11 09:32:18'),
(38, 'Online vs. Offline Classes', '<p style=\"margin-left: 40px;\">When choosing an abacus course, consider whether an online or offline format best suits your child.</p>\r\n\r\n<p style=\"margin-left: 40px;\"><strong>Online classes</strong> give kids the flexibility to learn comfortably at home. They use interactive software and virtual classrooms to make learning enjoyable.</p>\r\n\r\n<p style=\"margin-left: 40px;\">On the other hand, offline classes provide face-to-face interaction and immediate feedback from educators, which can be beneficial for some learners.</p>\r\n\r\n<p style=\"margin-left: 40px;\"><strong>Offline classes</strong> also offer a more structured environment and opportunities for social interaction with peers.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Think about the good and bad points of each way of learning to decide which one works best for how your child learns and your family&#39;s schedule.</p>\r\n', 21, 38, '2024-07-11 09:33:29', '2024-07-11 09:33:29'),
(39, 'Finding the Right Fit', '<p style=\"margin-left:36.0pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin-left: 40px;\">Ensure the course is appropriate for your child&rsquo;s age and skill level.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Abacus programs are designed for kids at various ages and learning levels, from beginners to advanced. Pick a course that matches how well your child can do now and pushes them a bit to help them learn more without getting too frustrated.</p>\r\n\r\n<p style=\"margin-left: 40px;\">A well-structured program will gradually increase in complexity, helping your child build confidence and master new skills step by step.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Consider speaking with instructors or program coordinators to assess your child&rsquo;s readiness and find the best starting point.</p>\r\n', 21, 39, '2024-07-11 09:35:14', '2024-07-11 09:35:14'),
(46, 'What to Look For', '<p style=\"margin-left: 40px;\">Look for a <u style=\"color: #0068b1;\"><a href=\"https://igenius.demovoting.com/courses?id=2\"><strong style=\"color: #0068b1;\">planned coursework</strong></a></u> that covers all essential aspects of abacus training. Effective teaching methods should include interactive and engaging activities that keep children interested and motivated.</p>\r\n\r\n<p style=\"margin-left: 40px;\">A complete coursewill not only teach Abacus Techniques but also include exercises that enhance mental math skills, logical reasoning, and critical thinking. Additionally, The program should offer many practice opportunities and regular assessments to monitor progress effectively.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Using digital tools and games can make learning more fun and helpful.</p>\r\n', 21, 41, '2024-07-11 09:48:28', '2024-07-11 09:48:28'),
(47, 'Ensuring Quality Education', '<p style=\"margin-left: 40px;\">It&#39;s important to have skilled educators in the program. Look for teachers who know abacus techniques well and understand how children learn.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Qualified teachers can adjust their teaching styles to fit different learning styles and give personalized help to each student. Accreditation from reputable educational organizations can also show that the program meets high standards.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Accredited programs are usually well-designed, with effective teaching and good results for students.</p>\r\n', 21, 42, '2024-07-11 09:49:17', '2024-07-11 09:49:17'),
(48, 'Planning Your Schedule', '<p style=\"margin-left: 40px;\">Consider the duration of the course and the time commitment required. Some programs are short-term, lasting a few weeks, while others span several months or even years.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Make sure the class times work for your family and your child&rsquo;s other activities. Choose a course that fits well into your schedule without adding too much stress.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Consistent practice is key to mastering abacus skills, so ensure that your child can commit to the required practice sessions and classes.</p>\r\n', 21, 43, '2024-07-11 09:49:42', '2024-07-11 09:49:42'),
(49, 'Investing in Your Child’s Future', '<p style=\"margin-left: 40px;\">When choosing a program for your child, think about both the cost and what it offers. Look for programs that give good teaching and fair prices.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Some programs might cost more at first, but they can help your child do better in school and think better, which makes them worth the money. Also, check what other help the program gives, like books, online stuff, or extra lessons.</p>\r\n', 21, 44, '2024-07-11 09:50:06', '2024-07-11 09:50:06'),
(50, 'Learning from Other Parents', '<p style=\"margin-left: 40px;\">Read reviews and testimonials from other parents to measuretheeffectiveness of the course.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Positive feedback can provide comfort that you&rsquo;re making the right choice. Look for detailed reviews that discuss the program&rsquo;s impact on children&rsquo;s learning and development, as well as the quality of instruction and support provided.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Feedback from parents whose children have finished the program and shown big improvements can be very helpful.</p>\r\n', 21, 45, '2024-07-11 09:57:40', '2024-07-11 09:57:40'),
(51, 'Try Before You Commit', '<p style=\"margin-left: 40px;\">Many abacus programs offer <u style=\"color: #0068b1;\"><a href=\"https://igenius.demovoting.com/index.php\"><strong style=\"color: #0068b1;\">trial classes or demo sessions</strong></a></u>. Take advantage of these opportunities to see if the teaching style and course content are a good fit for your child.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Demo classes allow your child to experience the learning environment and interact with the educators, giving you a better understanding of what to expect from the program.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Use this opportunity to ask questions, observe the teaching methods, and assess how engaged and comfortable your child feels during the session.</p>\r\n', 21, 46, '2024-07-11 09:58:47', '2024-07-11 09:58:47'),
(54, 'Making the Best Choice', '<p style=\"margin-left: 40px;\">Choosing the best abacus course for your child involves careful consideration of various factors, including the type of course, the curriculum, educators qualifications, and cost.</p>\r\n\r\n<p style=\"margin-left: 40px;\">By doing your research and utilizing resources like reviews and trial classes, you can find a program that will set your child up for success in math and beyond.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Remember, the goal is to provide a learning experience that is not only educational but also enjoyable and motivating for your child.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Choosing the <u style=\"color: #0068b1;\"><a href=\"https://igenius.demovoting.com/\"><strong style=\"color: #0068b1;\">right abacus course</strong></a></u> for your child can open doors to numerous educational benefits and lifelong skills. By following this guide, you can make an informed decision that supports your child&rsquo;s cognitive development and academic success.</p>\r\n', 21, 47, '2024-07-11 10:05:38', '2024-07-11 10:05:38'),
(55, 'Understanding the Basics', '<p style=\"margin-left: 40px;\"><u style=\"color: #0068b1;\"><a href=\"https://igenius.demovoting.com/courses?id=2\"><strong style=\"color: #0068b1;\">Abacus Training</strong></a></u> involves the use of a simple, yet highly effective tool called the abacus. This ancient device, consisting of beads that slide on rods, helps children perform arithmetic calculations through physical manipulation. The training process involves visualizing the abacus in the mind, which strengthens mental arithmetic skills.</p>\r\n', 23, 48, '2024-07-11 10:23:21', '2024-07-11 10:23:21'),
(56, 'From Ancient Times to Today', '<p style=\"margin-left: 40px;\">The abacus has a rich past, dating from thousands of years to old cultures like Mesopotamia, China, and Egypt. Its constant presence in various cultures highlights its effectiveness as a learning tool. Today, modern education techniques around the world have reintroduced the abacus to harness its cognitive benefits</p>\r\n', 23, 49, '2024-07-11 10:24:20', '2024-07-11 10:24:20'),
(57, 'Develop Brain Power', '<p style=\"margin-left: 40px;\">Abacus training enables both Sides of the brain. While the left side handles logical and analytical tasks, the right side is responsible for creativity and visualization. By engaging both sides, abacus training enables holistic brain development.</p>\r\n', 23, 50, '2024-07-11 10:24:52', '2024-07-11 10:24:52'),
(58, 'Making Mathematics Fun and Easy', '', 23, 51, '2024-07-11 10:25:28', '2024-07-11 10:25:28'),
(59, '1. Simplifies Arithmetic', '<p style=\"margin-left: 40px;\">Abacus training facilitates complex calculations, making them more approachable and less intimidating for children.</p>\r\n', 23, 51, '2024-07-11 10:26:08', '2024-07-11 10:26:08'),
(60, '2. Boosts Mental Math', '<p style=\"margin-left: 40px;\">Standard practice with the abacus improves mental arithmetic skills, allowing children to perform calculations quickly and accurately without the need for paper or calculators<strong>.</strong></p>\r\n', 23, 51, '2024-07-11 10:26:46', '2024-07-11 10:26:46'),
(61, '3. Promotes a Positive Attitude Toward Math', '<p style=\"margin-left: 40px;\">The interactive and hands-on nature of abacus training makes learning math enjoyable, helping to eliminate math anxiety</p>\r\n', 23, 51, '2024-07-11 10:27:41', '2024-07-11 10:27:41'),
(65, 'Key Cognitive Skills', '', 23, 52, '2024-07-11 10:50:24', '2024-07-11 10:50:24'),
(67, '1. Improves Focus', '<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">Abacus training requires maintained concentration, which helps improve a child&#39;s ability to focus on tasks for extended periods.<o:p></o:p></span></p>\r\n', 23, 52, '2024-07-11 10:51:22', '2024-07-11 10:51:22'),
(68, '2. Strengthens Memory', '<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">Remembering bead positions and analysis processes enhances both short-term and long-term memory.<o:p></o:p></span></p>\r\n', 23, 52, '2024-07-11 10:52:05', '2024-07-11 10:52:05'),
(69, 'Developing Mental Images', '', 23, 53, '2024-07-11 10:52:31', '2024-07-11 10:52:31'),
(70, '1. Visualizing Numbers', '<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">Abacus training encourages children to visualize numbers and calculations, which strengthens their ability to form mental images.<o:p></o:p></span></p>\r\n', 23, 53, '2024-07-11 10:52:54', '2024-07-11 10:52:54'),
(71, '2. Boosts Creativity', '<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">By engaging the right Sides of the brain, abacus training fosters creative thinking and <o:p></o:p></span></p>\r\n\r\n<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">problem-solving skills.<o:p></o:p></span></p>\r\n', 23, 53, '2024-07-11 10:53:36', '2024-07-11 10:53:36'),
(73, 'A Perfect Combination', '<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">Combining </span><span lang=\"EN-IN\"><u style=\"color: #0068b1;\"><a href=\"https://igenius.demovoting.com/courses?id=3\" target=\"_blank\"><span style=\"color: #0068b1;\"><strong style=\"color: #0068b1;\">Abacus Training with Vedic Mathematics</strong></span></a></u><span style=\"color:#0E101A\"><u><strong> </strong></u>offers a comprehensive approach to learning math. Vedic math, an ancient Indian system, complements abacus training by providing additional mental calculation techniques, further enhancing a child&#39;s cognitive abilities.<o:p></o:p></span></span></p>\r\n', 23, 54, '2024-07-11 10:58:24', '2024-07-11 10:58:24'),
(74, 'What to Look For', '', 23, 55, '2024-07-11 10:59:19', '2024-07-11 10:59:19'),
(76, '1. Qualified Educators', '<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">Confirm that the program is taught by </span><span lang=\"EN-IN\"><u style=\"color: #0068b1;\"><a href=\"https://igenius.demovoting.com/about-us.php\"><strong style=\"color: #0068b1;\">experienced and certified Educators</strong></a></u>&nbsp;<span style=\"color:#0E101A\">who can effectively guide students.<o:p></o:p></span></span></p>\r\n', 23, 55, '2024-07-11 11:03:37', '2024-07-11 11:03:37'),
(77, '2. Structured Curriculum', '<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">Look for a program with a well-structured curriculum that progresses from basic to advanced levels.<o:p></o:p></span></p>\r\n', 23, 55, '2024-07-11 11:04:38', '2024-07-11 11:04:38'),
(78, '3. Interactive Learning', '<p style=\"margin: 0cm 0cm 0.0001pt 40px;\"><span lang=\"EN-IN\" style=\"color:#0E101A\">Choose programs that offer interactive and engaging learning experiences, both online and offline.<o:p></o:p></span></p>\r\n', 23, 55, '2024-07-11 11:04:56', '2024-07-11 11:04:56'),
(79, '1) An Overview of Abacus Training', '<p style=\"margin-left: 40px;\"><strong>Abacus Training</strong> involves the use of a simple counting tool to perform arithmetic calculations.</p>\r\n\r\n<p style=\"margin-left: 40px;\">It helps children develop a strong foundation in basic math operations while promoting both Sides of the brain.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This dual stimulation enhances cognitive functions such as memory, concentration, and logical thinking.</p>\r\n', 24, 57, '2024-07-13 06:01:59', '2024-07-13 06:01:59'),
(81, '2) The Fundamentals of Vedic Math\'s', '<p style=\"margin-left: 40px;\"><strong>Vedic Maths</strong> is an ancient system of mathematics that offers shortcuts and techniques for rapid calculations.</p>\r\n\r\n<p style=\"margin-left: 40px;\">It simplifies complex arithmetic operations, making math more accessible and enjoyable for students.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Vedic Math&#39;s techniques are derived from ancient Indian scriptures and provide efficient methods for solving problems in algebra, geometry, and calculus.</p>\r\n', 24, 57, '2024-07-13 06:03:22', '2024-07-13 06:03:22'),
(82, '1) Cognitive Development through Abacus', '<p style=\"margin-left: 40px;\">Abacus training significantly boosts cognitive development by engaging the left and right brain sides.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This holistic brain activation improves cognitive clarity, enhances problem-solving skills, and boosts memory.</p>\r\n\r\n<p style=\"margin-left: 40px;\">The visible and tactile essence of abacus training also assists in better information retention and recall.</p>\r\n', 24, 58, '2024-07-13 06:03:47', '2024-07-13 06:03:47'),
(84, '2) Enhanced Mathematical Skills', '<p style=\"margin-left: 40px;\">Children trained in abacus develop exceptional mathematical abilities. They become proficient in performing arithmetic operations mentally, which builds a strong foundation for advanced math topics.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This proficiency translates into better performance in school math exams and a deeper understanding of mathematical concepts.</p>\r\n', 24, 58, '2024-07-13 06:05:06', '2024-07-13 06:05:06'),
(85, '1) Speed and Accuracy in Calculations', '<p style=\"margin-left: 40px;\"><u style=\"color: #1876c0;\"><a href=\"https://igenius.demovoting.com/courses?id=3\"><strong style=\"color: #1876c0;\">Vedic Maths Techniques</strong></a></u> are designed to improve speed and accuracy in mathematical calculations.</p>\r\n\r\n<p style=\"margin-left: 40px;\">These techniques allow students to solve complex problems quickly, increasing their confidence and facilitating math pressure.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Mastery of Vedic Maths also improves overall academic performance by making math more approachable and less forbidding.</p>\r\n', 24, 59, '2024-07-13 06:06:27', '2024-07-13 06:06:27'),
(86, '2) Boosting Confidence and Reducing Math Anxiety', '<p style=\"margin-left: 40px;\">Vedic Math instills confidence in students by providing them with efficient problem-solving tools. As they learn these techniques, their self-esteem increases, and their fear of math decreases.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This positive mindset towards math nurtures a lifelong love for the subject and a willingness to tackle challenging problems.</p>\r\n', 24, 59, '2024-07-13 06:07:06', '2024-07-13 06:07:06'),
(87, '1) Complementary Skills for Comprehensive Learning', '<p style=\"margin-left: 40px;\">Merging Abacus and Vedic Maths training presents a complete approach to math education.</p>\r\n\r\n<p style=\"margin-left: 40px;\">While abacus training concentrates on cognitive arithmetic and cognitive development, Vedic Math improves speed and accuracy.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Concurrently, these courses provide a well-rounded skill set that qualifies students for academic victory and real-world problem-solving.</p>\r\n', 24, 60, '2024-07-13 06:07:36', '2024-07-13 06:07:36'),
(88, '2)	Enhancing Problem-Solving Abilities', '<p style=\"margin-left: 40px;\">The <u style=\"color: #1876c0;\"><a href=\"https://igenius.demovoting.com/courses?id=2\"><strong style=\"color: #1876c0;\">Integration of Abacus and Vedic Math</strong></a></u> enhances problem-solving abilities by providing learners with different mathematical tools.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This combination promotes analytical thinking, enhances logical reasoning, and allows students to approach problems from multiple angles.</p>\r\n\r\n<p style=\"margin-left: 40px;\">As a consequence, they become proficient at finding creative solutions to complex challenges.</p>\r\n', 24, 60, '2024-07-13 06:08:50', '2024-07-13 06:08:50'),
(89, 'Real-Life Examples of Combined Training Benefits', '<p style=\"margin-left: 40px;\">Many students have shared great improvements in their academic performance behind incorporating Abacus and Vedic Math training.</p>\r\n\r\n<p style=\"margin-left: 40px;\">For example, children who struggle with math have demonstrated significant improvement, excelling in exams and earning recognition in competitive circumstances.</p>\r\n\r\n<p style=\"margin-left: 40px;\">These success stories highlight the transformative capacity of combining these archaic practices into modern education.</p>\r\n', 24, 61, '2024-07-13 06:10:36', '2024-07-13 06:10:36'),
(90, '1) Factors to Consider in Abacus and Vedic Math\'s Courses', '<p style=\"margin-left: 40px;\">When choosing Abacus and Vedic Math agendas for your child, evaluate factors such as the curriculum, educator credentials, and class format (online or offline).</p>\r\n\r\n<p style=\"margin-left: 40px;\">Look for systems that offer a balanced system, incorporating both methods to provide comprehensive learning.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Additionally, read reviews and testimonials from other parents to gauge the program&#39;s effectiveness.</p>\r\n', 24, 62, '2024-07-13 06:11:04', '2024-07-13 06:11:04'),
(91, '2) Tips for Parents', '<p style=\"margin-left: 40px;\"><strong>Start Early:</strong> Instruct your child to Abacus and Vedic Math training at a young age to maximize their mental development.</p>\r\n\r\n<p style=\"margin-left: 40px;\"><strong>Encourage Practice:</strong> Standard practice is important for learning these techniques. Encourage your child to rehearse every day to strengthen their skills.</p>\r\n\r\n<p style=\"margin-left: 40px;\"><strong>Stay Involved:</strong> Monitor your child&#39;s progress and communicate with instructors to ensure they are getting the most out of the program.</p>\r\n\r\n<p style=\"margin-left:72.0pt;\">&nbsp;</p>\r\n', 24, 62, '2024-07-13 06:11:38', '2024-07-13 06:11:38'),
(92, 'How Abacus Stimulates Brain Development', '<p style=\"margin-left:36.0pt;\">Abacus training engages the left and right sides of the brain, boosting general mind growth.</p>\r\n\r\n<p style=\"margin-left:36.0pt;\">The left side of the brain, which is for logical thinking and analysis, works jointly with the right side, which deals with visual and spatial information.</p>\r\n\r\n<p style=\"margin-left:36.0pt;\">Using both sides of the brain helps improve memory, problem-solving, and mental math skills. When children picture the abacus and move the beads in their minds, they develop special cognitive math abilities that traditional methods don&#39;t deliver.</p>\r\n', 25, 65, '2024-07-13 06:31:05', '2024-07-13 06:31:05'),
(93, ' Building a Strong Foundation in Math', '<p style=\"margin-left: 40px;\">Abacus classes offer children a mathematical basis by introducing basic arithmetic operations engagingly and interactively.</p>\r\n\r\n<p style=\"margin-left: 40px;\">As students evolve their experience with the abacus, they develop a more in-depth knowledge of numerals and mathematical ideas.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This substantial foundation enables them to excel in academic math exams and promotes a genuine curiosity. Moreover, the skills acquired through abacus training make complex math problems more manageable, boosting overall academic performance.</p>\r\n', 25, 66, '2024-07-13 06:31:31', '2024-07-13 06:31:31'),
(94, 'Beyond Numbers: Cognitive Benefits of Abacus', '<p style=\"margin-left: 40px;\">The advantages of <strong>Abacus Training </strong>go outside mathematics. Students develop enhanced mental abilities, including memory, logical reasoning, and critical thinking skills.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Imagining and manipulating the <u style=\"color: #1876c0;\"><a href=\"https://igenius.demovoting.com/courses.php?id=2\"><strong style=\"color: #1876c0;\">abacus beads</strong></a></u> helps create neural connections, improving information processing and retention. These mental skills are transferable and can greatly improve performance in other subjects like science and language arts.</p>\r\n', 25, 67, '2024-07-13 06:32:48', '2024-07-13 06:32:48'),
(95, 'How Abacus Training Improves Attention Span', '<p style=\"margin-left: 40px;\">Abacus training needs extreme concentration and focus as students imagine the bead moves and execute calculations simultaneously.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This approach helps children develop a more extended concentration span and better focus, essential skills for academic success.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Enhanced concentration not only improves performance in math but also benefits other areas of study, guiding overall educational improvement.</p>\r\n', 25, 68, '2024-07-13 06:33:20', '2024-07-13 06:33:20'),
(96, 'Building Confidence Through Mastery', '<p style=\"margin-left: 40px;\">As children master abacus strategies and notice their skills enhance, they achieve a sense of achievement and confidence.</p>\r\n\r\n<p style=\"margin-left: 40px;\">This enhanced self-esteem contributes to better performance in school, as children feel more capable of tackling challenging tasks.</p>\r\n\r\n<p style=\"margin-left: 40px;\">The favourable support from satisfying abacus exercises encourages them to aim for excellence in all their academic efforts.</p>\r\n', 25, 69, '2024-07-13 06:34:45', '2024-07-13 06:34:45'),
(97, 'How Abacus Skills Benefit Other Academic Areas', '<p style=\"margin-left: 40px;\">The skills acquired via abacus training are highly transferable. Improved memory, concentration, and problem-solving abilities benefit students in all subjects.</p>\r\n\r\n<p style=\"margin-left: 40px;\">For example, enhanced logical reasoning helps in science experiments, while better understanding helps reading comprehension.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Abacus training provides children with a universal skill set that helps general academic excellence.</p>\r\n', 25, 70, '2024-07-13 06:35:26', '2024-07-13 06:35:26'),
(98, 'Real-Life Examples of Academic Improvement', '<p style=\"margin-left: 40px;\">Many parents and educators have marked significant progress in kids&rsquo; academic performance behind registering them in abacus classes.</p>\r\n\r\n<p style=\"margin-left: 40px;\">For example, students who struggle with mathematics have noticed incredible progress, moving from below-average grades to excelling in their exams. These success reports emphasize the transformative capacity of abacus training and its ongoing impact on children&#39;s academic paths.</p>\r\n', 25, 71, '2024-07-13 06:35:59', '2024-07-13 06:35:59'),
(99, 'The Origins and Evolution of the Abacus', '<p style=\"margin-left:36.0pt;\">The abacus, an ancient calculation tool, dates back thousands of years. Originating in Mesopotamia and later refined in China and Japan, the abacus has been used for centuries to perform arithmetic operations quickly and efficiently. Today, this timeless tool is making a comeback in educational circles, particularly for young learners.</p>\r\n', 26, 73, '2024-07-13 06:44:47', '2024-07-13 06:44:47'),
(100, '1. Enhances Cognitive Skills', '<p style=\"margin-left:36.0pt;\"><u style=\"color: #1876c0;\"><a href=\"https://igenius.demovoting.com/\"><strong style=\"color: #1876c0;\">Abacus Training</strong></a></u> enables both sides of the brain, improving mind functions such as memory, concentration, and problem-solving skills.</p>\r\n', 26, 74, '2024-07-13 06:46:03', '2024-07-13 06:46:03'),
(101, '2. Builds a Strong Mathematical Foundation', '<p style=\"margin-left:36.0pt;\">Children effortlessly tackle complex arithmetic operations, laying a rock-solid foundation for future math success.</p>\r\n', 26, 74, '2024-07-13 06:46:24', '2024-07-13 06:46:24'),
(102, '3. Boosts Confidence', '<p style=\"margin-left:36.0pt;\">Mastering the abacus gives children a sense of achievement, increasing their confidence and self-esteem.</p>\r\n', 26, 74, '2024-07-13 06:46:42', '2024-07-13 06:46:42'),
(103, '4. Improves Academic Performance', '<p style=\"margin-left:36.0pt;\">Skills honed in abacus classes often lead to improved performance in school subjects, especially math.</p>\r\n', 26, 74, '2024-07-13 06:47:13', '2024-07-13 06:47:13'),
(104, '5. Develops Fine Motor Skills', '<p style=\"margin-left:36.0pt;\">Managing the abacus beads helps in improving fine motor skills and hand-eye coordination.</p>\r\n', 26, 74, '2024-07-13 06:47:31', '2024-07-13 06:47:31'),
(105, '1. Qualified educators', '<p style=\"margin-left: 40px;\">&nbsp; Ensure that the instructors are well-trained and experienced in teaching abacus.</p>\r\n', 26, 75, '2024-07-13 06:48:05', '2024-07-13 06:48:05'),
(106, '2. Structured Curriculum', '<p style=\"margin-left:36.0pt;\">&nbsp;Look for a program with a well-structured curriculum that progresses from basic to advanced levels.</p>\r\n', 26, 75, '2024-07-13 06:48:24', '2024-07-13 06:48:24'),
(107, '3. Interactive Learning', '<p style=\"margin-left: 40px;\">Classes should be interactive and engaging, using fun methods to teach complex concepts.</p>\r\n', 26, 75, '2024-07-13 06:48:49', '2024-07-13 06:48:49'),
(108, '4. Flexibility', '<p style=\"margin-left: 40px;\">Look for programs that offer both online and offline classes to suit your schedule.</p>\r\n', 26, 75, '2024-07-13 06:49:24', '2024-07-13 06:49:24'),
(109, '5. Proven Track Record', '<p style=\"margin-left:36.0pt;\">Check for testimonials and reviews from other parents to gauge the effectiveness of the program.</p>\r\n', 26, 75, '2024-07-13 06:49:50', '2024-07-13 06:49:50'),
(110, 'Curriculum and Learning Environment', '', 26, 76, '2024-07-13 06:50:10', '2024-07-13 06:50:10'),
(111, '1. Regular Practice', '<p style=\"margin-left:36.0pt;\">Consistent training is key to mastering the abacus. Courses typically apply regular assignments and practice sessions.</p>\r\n', 26, 76, '2024-07-13 06:50:43', '2024-07-13 06:50:43'),
(112, '2. Fun and Engaging Lessons', '<p style=\"margin-left:36.0pt;\">Classes are designed to be fun and engaging, keeping children motivated and curious.</p>\r\n', 26, 76, '2024-07-13 06:51:15', '2024-07-13 06:51:15'),
(113, '3. Progress Tracking', '<p style=\"margin-left:36.0pt;\">Periodic assessments and feedback help track your child&rsquo;s progress and identify areas for improvement.</p>\r\n', 26, 76, '2024-07-13 06:51:40', '2024-07-13 06:51:40'),
(115, 'Why Choose I-Genius Abacus Academy', '<p><a href=\"https://igenius.demovoting.com/about-us.php\">I-Genius Abacus Academy</a> stands out as a premier provider of abacus training. Here&rsquo;s why:</p>\r\n', 26, 77, '2024-07-13 06:53:17', '2024-07-13 06:53:17'),
(116, '1. Experienced Educators:', '<p style=\"margin-left:36.0pt;\">I-Genius Abacus Academy educators are highly trained and experienced in delivering effective abacus education.</p>\r\n', 26, 77, '2024-07-13 06:53:42', '2024-07-13 06:53:42'),
(117, '2. Comprehensive Curriculum:', '<p style=\"margin-left: 40px;\">Our curriculum is designed to cater to children of different age groups and skill levels.</p>\r\n', 26, 77, '2024-07-13 06:54:11', '2024-07-13 06:54:11'),
(118, '3. Flexible Learning Options:', '<p style=\"margin-left: 40px;\">We offer both online and offline classes, making it convenient for parents and children.</p>\r\n', 26, 77, '2024-07-13 06:54:48', '2024-07-13 06:54:48'),
(119, '4. Proven Success:', '<p style=\"margin-left:36.0pt;\">With a track record of helping thousands of children excel, I-Genius Abacus Academy is a trusted name in abacus education.</p>\r\n', 26, 77, '2024-07-13 06:55:03', '2024-07-13 06:55:03'),
(120, 'Real Experiences and Success Stories', '', 26, 78, '2024-07-13 06:55:29', '2024-07-13 06:55:29'),
(121, 'Parent Testimonial:', '<p style=\"margin-left:36.0pt;\">&quot;Enrolling my child in I-Genius Abacus Academy was one of the best decisions we made. Her math skills have improved tremendously, and she loves going to class every week.&quot;</p>\r\n', 26, 78, '2024-07-13 06:55:48', '2024-07-13 06:55:48'),
(122, 'Student Testimonial:', '<p style=\"margin-left: 40px;\">&quot;I love my abacus classes! It&#39;s so much fun, and I can do math faster than my friends.&quot;</p>\r\n', 26, 78, '2024-07-13 06:56:15', '2024-07-13 06:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_titles`
--

CREATE TABLE `blog_titles` (
  `blog_title_id` int(11) NOT NULL,
  `blog_title_name` text NOT NULL,
  `blog_title_desc` text DEFAULT NULL,
  `blog_id` int(11) NOT NULL,
  `has_subtitle` tinyint(1) NOT NULL DEFAULT 0,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_titles`
--

INSERT INTO `blog_titles` (`blog_title_id`, `blog_title_name`, `blog_title_desc`, `blog_id`, `has_subtitle`, `created_on`, `updated_on`) VALUES
(37, '1. Understanding the Benefits of Abacus Training', '', 21, 0, '2024-07-11 09:24:11', '2024-07-11 09:24:11'),
(38, '2. Types of Abacus Courses', '', 21, 0, '2024-07-11 09:25:33', '2024-07-11 09:25:33'),
(39, '3. Age and Skill Level Considerations', '', 21, 0, '2024-07-11 09:25:45', '2024-07-11 09:25:45'),
(41, '4. Curriculum and Teaching Methods', '', 21, 0, '2024-07-11 09:26:15', '2024-07-11 09:26:15'),
(42, '5. Qualified Instructors and Accreditation', '', 21, 0, '2024-07-11 09:29:17', '2024-07-11 09:29:17'),
(43, '6. Course Duration and Commitment', '', 21, 0, '2024-07-11 09:29:25', '2024-07-11 09:29:25'),
(44, '7. Cost and Value', '', 21, 0, '2024-07-11 09:29:34', '2024-07-11 09:29:34'),
(45, '8. Reviews and Testimonials', '', 21, 0, '2024-07-11 09:29:41', '2024-07-11 09:29:41'),
(46, '9. Trial Classes and Demos', '', 21, 0, '2024-07-11 09:29:50', '2024-07-11 09:29:50'),
(47, '10. Conclusion', '', 21, 0, '2024-07-11 09:29:57', '2024-07-11 09:29:57'),
(48, '1. What is Abacus Training?', '', 23, 0, '2024-07-11 10:17:50', '2024-07-11 10:17:50'),
(49, '2. History of the Abacus', '', 23, 0, '2024-07-11 10:18:06', '2024-07-11 10:18:06'),
(50, '3. Benefits of Abacus Training', '', 23, 0, '2024-07-11 10:18:15', '2024-07-11 10:18:15'),
(51, '4. Impact on Mathematical Skills', '', 23, 0, '2024-07-11 10:18:37', '2024-07-11 10:18:37'),
(52, '5. Enhancing Concentration and Memory', '', 23, 0, '2024-07-11 10:19:20', '2024-07-11 10:19:20'),
(53, '6. Improving Visualization and Imagination', '', 23, 0, '2024-07-11 10:19:35', '2024-07-11 10:19:35'),
(54, '7. Abacus and Vedic Math', '', 23, 0, '2024-07-11 10:19:59', '2024-07-11 10:19:59'),
(55, '8. Choosing the Right Abacus Training Program', '', 23, 0, '2024-07-11 10:20:15', '2024-07-11 10:20:15'),
(56, '9. Conclusion', '<p style=\"margin:0cm;margin-bottom:.0001pt\"><span lang=\"EN-IN\" style=\"color:#0E101A\">Abacus training is a powerful tool for enhancing mental development in children. By improving concentration, memory, visualization, and mathematical skills, abacus training provides a strong foundation for academic success and lifelong learning. Investing in abacus training for your child is an investment in their future, ensuring they develop the skills and confidence needed to excel in all areas of life.<o:p></o:p></span></p>\r\n', 23, 0, '2024-07-11 10:21:03', '2024-07-11 10:21:03'),
(57, '1. Understanding Abacus and Vedic Math\'s	', '', 24, 0, '2024-07-13 05:54:01', '2024-07-13 05:54:01'),
(58, '2. The Benefits of Abacus Training', '', 24, 0, '2024-07-13 05:54:26', '2024-07-13 05:54:26'),
(59, '3. The Advantages of Vedic Math\'s', '', 24, 0, '2024-07-13 05:55:26', '2024-07-13 05:55:26'),
(60, '4. The Synergy of Combining Abacus and Vedic Math\'s', '', 24, 0, '2024-07-13 05:55:54', '2024-07-13 05:55:54'),
(61, '5. Success Stories and Testimonials', '', 24, 0, '2024-07-13 05:56:32', '2024-07-13 05:56:32'),
(62, '6. Choosing the Right Program for Your Child', '', 24, 0, '2024-07-13 05:56:45', '2024-07-13 05:56:45'),
(64, '7.Conclusion', '<p style=\"margin-left: 40px;\">Combining <u style=\"color: #1876c0;\"><a href=\"https://igenius.demovoting.com/courses?id=2\"><strong style=\"color: #1876c0;\">Abacus and Vedic Maths Training</strong></a></u> delivers a powerful academic strategy that improves cognitive abilities, improves mathematical skills, and boosts overall academic performance.</p>\r\n\r\n<p style=\"margin-left: 40px;\">By providing children with a various set of tools for problem-solving and mental mathematics, parents can open their child&#39;s full potential and cover the way for lifelong success.</p>\r\n', 24, 0, '2024-07-13 06:00:22', '2024-07-13 06:00:22'),
(65, '1. The Science Behind Abacus Training', '', 25, 0, '2024-07-13 06:28:04', '2024-07-13 06:28:04'),
(66, '2. Enhanced Mathematical Skills', '', 25, 0, '2024-07-13 06:28:14', '2024-07-13 06:28:14'),
(67, '3. Improved Mental Abilities', '', 25, 0, '2024-07-13 06:28:25', '2024-07-13 06:28:25'),
(68, '4. Better Concentration and Focus', '', 25, 0, '2024-07-13 06:28:34', '2024-07-13 06:28:34'),
(69, '5. Increased Confidence and Self-Esteem', '', 25, 0, '2024-07-13 06:28:48', '2024-07-13 06:28:48'),
(70, '6. Transferable Skills Across Subjects', '', 25, 0, '2024-07-13 06:28:58', '2024-07-13 06:28:58'),
(71, '7. Testimonials and Success Stories', '', 25, 0, '2024-07-13 06:29:09', '2024-07-13 06:29:09'),
(72, '8. Conclusion', '<p style=\"margin-left: 40px;\">Abacus math classes present a wide range of benefits that extend far beyond improving mathematical skills. Abacus training provides children with the tools they need for academic success by improving mental abilities, concentration, and confidence. Parents looking to give their children a competitive edge should consider the transformative potential of abacus education.</p>\r\n', 25, 0, '2024-07-13 06:29:46', '2024-07-13 06:29:46'),
(73, '1. Understanding the Abacus: A Brief History', '', 26, 0, '2024-07-13 06:42:04', '2024-07-13 06:42:04'),
(74, '2. Benefits of Abacus Learning for Children', '', 26, 0, '2024-07-13 06:42:21', '2024-07-13 06:42:21'),
(75, '3. Choosing the Best Abacus Classes', '', 26, 0, '2024-07-13 06:42:57', '2024-07-13 06:42:57'),
(76, '4. What to Expect from Abacus Training', '', 26, 0, '2024-07-13 06:43:14', '2024-07-13 06:43:14'),
(77, '5. The I-Genius Abacus Advantage', '', 26, 0, '2024-07-13 06:43:25', '2024-07-13 06:43:25'),
(78, '6. Testimonials from Parents and Students', '', 26, 0, '2024-07-13 06:43:31', '2024-07-13 06:43:31'),
(79, '7. Conclusion', '<p style=\"margin-left:36.0pt;\">Unlocking your child&#39;s potential starts with providing them with the right tools and opportunities. Abacus classes offer a unique and effective way to enhance cognitive and mathematical skills. With the right program, such as the one offered by I-Genius Abacus Academy, your child can develop a love for learning and build a strong foundation for future success.</p>\r\n', 26, 0, '2024-07-13 06:44:04', '2024-07-13 06:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `content_video`
--

CREATE TABLE `content_video` (
  `id` int(11) NOT NULL,
  `video_url` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_video`
--

INSERT INTO `content_video` (`id`, `video_url`, `status`, `creation_on`) VALUES
(3, 'https://www.youtube.com/embed/cHUb-UL0cwE?si=SP-0X3TJoo6gEb_i', 'Active', '2024-06-28 05:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `course_faq`
--

CREATE TABLE `course_faq` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_faq`
--

INSERT INTO `course_faq` (`id`, `course_id`, `title`, `description`, `creation_on`) VALUES
(8, 2, 'What is an Abacus?', 'An abacus is a simple tool used to perform arithmetic calculations more easily, quickly, and accurately. It consists of beads or rods that represent numerical values.', '2024-07-04 04:43:20'),
(9, 2, 'What are the benefits of Abacus class to kids?', 'Abacus improves Abacus math classes not only enhance a child’s mathematical skills but also significantly improve concentration and mental abilities, leading to success in other subjects.', '2024-07-04 04:43:35'),
(10, 2, 'What is the age group for leaning Abacus?', 'The ideal age of learning abacus for children between 4 to 14 years, or 1st to 6th Standard. Because by the age of 14 children have 90% brain development and their concentration level is very good so abacus is very beneficial for them.', '2024-07-04 04:43:47'),
(11, 2, 'How many classes are conducted in a week and how many levels are there in your Program?', 'The entire program of I-Genius Abacus is of eight levels. The classes are conducted once a week for two hours. Each level gets completed in 2-3 Months and the duration of the entire program is of two years.', '2024-07-04 04:44:03'),
(12, 2, 'How long does it take to learn a full course of Abacus? ', 'The Abacus course has a total 8 levels and takes approximately two years to complete the course', '2024-07-04 04:44:50'),
(13, 2, 'Do you take physical classes also?', 'I-Genius Abacus having the option of Abacus Centres provided physical classes which are conducted at our 550 plus I-Genius Abacus Franchisee Centres globally. \r\nThus now we have both the options of learning available for our students. Those who want to take physical classes can have the same at our centers and those who wish to learn online from their home can go for the E-Learning platform. \r\n', '2024-07-04 04:45:05'),
(14, 2, 'How will I be able to help my child in his/her practice?', 'Since we give Abacus training online, we have also made sure that practice sheets are provided to the students. You can download and get these printed. You can guide your children to practice at home with these.Also, contacting the trainer for any help is always an available option.', '2024-07-04 04:45:24'),
(15, 2, 'Do you conduct State Level, National Level, and International Level Competition?', 'Yes, we do conduct Center, State, National, and International Level Competitions. The Competitions are conducted through online & offline mode. Students can enroll in these competitions through a I-Genius Abacus Center. The students registered at I-Genius Abacus Franchisee / centers only can participate in these competitions. You can view photographs of State, National, and International level Competitions in our photo gallery.', '2024-07-04 04:45:41'),
(16, 3, 'What is the Vedic Math’s?', 'Vedic Math’s is a system of mathematics that was discovered or complied by indian mathematician and scholar Bharti Krishna Tirthaji Maharaj in the early 20th century. Vedic math’s consists of 16 Sutras (Formulae) and 13 sub-sutras (Sub Formulae)', '2024-07-04 04:46:49'),
(17, 3, 'Which age is perfect for learning Vedic Math’s?', 'As for Vedic Math’s the minimum age requirement is 13 or above age group all students. ', '2024-07-04 04:47:04'),
(18, 3, 'What is the course duration of Vedic Math’s?', 'The Vedic Math’s basic course can easily be completed in 1-2 months of duration, depend on the number of hours are spend on daily basis.', '2024-07-04 04:47:19'),
(19, 3, 'How Vedic Math’s useful for students?', 'The most immediate benefit of Vedic mathematics is the simplification of complex calculations. From arithmetic to algebra, the techniques of Vedic mathematics can break down seemingly daunting problems into manageable parts, making the process of solving them easier and more intuitive. Improve faster calculations students can perform mental calculation quickly.', '2024-07-04 04:47:34'),
(20, 3, 'How many methods are there in Vedic Math’s?', 'The foundation of Vedic maths lies in sixteen mathematical sutras, or formulas, extracted from the Vedas. These sutras serve as concise and efficient methods for solving various mathematical problems.', '2024-07-04 04:47:51'),
(22, 3, 'How is Vedic Math different from regular math tuitions?', 'Vedic maths has many tricks to perform different mathematical operations such as addition, subtraction, multiplication, division, squares, square roots, etc. All these tricks help to compute the numerical problems in very little time when compared to the normal maths procedures.', '2024-07-04 04:49:08'),
(23, 4, 'What is a Rubik’s Cube?', 'The Rubik’s Cube is a 3-D combination Puzzle that was invented in 1974 by Hungarian sculptor and professor of architecture Ernő Rubik. Rubik’s Cube is a Puzzle with a six-coloured cube, whose faces each include nine squares, eight of which can be rotated separately.', '2024-07-06 07:56:36'),
(24, 4, 'What is the maximum number of moves required to solve Rubik’s Cube?', 'The maximum number of moves for a 3×3 Rubik’s Cube is 20 moves.\r\n', '2024-07-06 07:57:39'),
(25, 4, 'What is the formula of cube?', 'Based on this, we can also write the volume of cube formula since cube has equal length, breadth and height. Therefore, the volume of cube formula is a × a × a = a3. It is to be noted that the number obtained using cube formula is the perfect cube number.', '2024-07-06 08:07:05'),
(26, 4, 'Which cube is very fast?', 'After speaking to experts and spending extensive time researching and solving 14 different cubes, I\'ve learned that the MoYu RS3M Maglev is the best option for those getting into speed cubing thanks to its combination of adjustability, quality, and price.', '2024-07-06 08:07:56'),
(27, 5, 'What causes good handwriting?', 'Handwriting is influenced by a person\'s anatomy, for example, bone structure affects how one holds a pen. Hand-eye coordination, muscle memory and mental ability in copying proper penmanship also influence writing […] Handwriting can change over time as these physical and mental characteristics change.”', '2024-07-06 08:09:56'),
(28, 5, 'What is the science of handwriting?', 'Graphology is the analysis of handwriting in an attempt to determine the writer\'s personality traits.', '2024-07-06 08:10:37'),
(29, 5, 'Is handwriting an important skill?', 'Handwriting is a foundational skill crucial for literacy success. Early fine motor skills indicate readiness. Handwriting leads directly to reading acquisition. Writing by hand engages the brain in learning.', '2024-07-06 08:11:00'),
(30, 5, 'What is the fastest method of handwriting?', 'Expert Tip: Cursive handwriting is often faster than print. More connected letters allow for a smoother and faster transition between words.', '2024-07-06 08:12:40'),
(31, 5, 'Does handwriting improve memory?', 'Engaging the fine motor system to write by hand has been shown to have positive effects on learning and memory. ', '2024-07-06 08:14:52'),
(32, 5, 'Does handwriting affect learning?', 'Numerous studies have shown a strong connection between handwriting skills and literacy development. It helps students recognize and remember letters and words more effectively.', '2024-07-06 08:15:54'),
(33, 9, 'asasa', 'sasas', '2024-07-13 07:08:18'),
(34, 10, 'abc', 'xasa', '2024-07-13 11:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobile` text NOT NULL,
  `password` text NOT NULL,
  `gst` text NOT NULL,
  `pan_no` text NOT NULL,
  `status` text NOT NULL,
  `activate_code` text NOT NULL,
  `reset_code` text NOT NULL,
  `type` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `first_name`, `last_name`, `email`, `mobile`, `password`, `gst`, `pan_no`, `status`, `activate_code`, `reset_code`, `type`, `created_on`, `updated_on`) VALUES
(1944400954, 'admin', '', 'admin@admin.com', '9921753001', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', '', '', '1', '', '', 1, '2022-08-04 15:22:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `descr` text NOT NULL,
  `status` text NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `descr`, `status`, `created_on`) VALUES
(3, 'Who can become a Franchise of I-Genius?', 'Any Graduate with a passion for teaching and who is regularly available.', 'Active', '2024-06-17 00:00:00'),
(4, 'I am a house wife can i get franchise?', 'Yes, if you have the thirst to prove yourself and are determined to run programe, you can get a franchise.', 'Active', '2024-06-17 00:00:00'),
(5, 'Will i be provided with the Franchise Certificate?', 'Yes, you would be providing with the franchise certificate valid 3 years. After renewal, we will provide you with the new one.', 'Active', '2024-06-17 00:00:00'),
(6, 'Will you provide the teachers to teachabacus in my franchise?', 'No, you have to appoint the teachers their locally. If interested, you can yourself be the trainer.', 'Active', '2024-06-17 00:00:00'),
(7, 'How is appointed teacher training session held?', 'The training is will be online. It would be a 2 hrs session. Only five days is needed for the initial training. After the training is done, the trainer needs to practice with the worksheet and videos for level 1. If any doubts arise during practice, they can note it down and we would arrange another session to clear them.', 'Active', '2024-06-17 00:00:00'),
(8, 'Is there any specific qualification needed for the teachers to be appointed as a abacus trainer?', 'Specific education qualification in mathematics is not mandatory to be an abacus trainer.', 'Active', '2024-06-17 00:00:00'),
(9, 'Is a teacher training importing only once?', 'No, there are usually 3 session of training for the trainer. First one is held initially, where the basics of abacus and addition/subtraction method of abacus calculation is taught. Next is held before the 4th level to teach multiplication method and lastly before the 6th level for teaching division methods on abacus.', 'Active', '2024-06-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `franchise_testimonial`
--

CREATE TABLE `franchise_testimonial` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `division` text NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `franchise_testimonial`
--

INSERT INTO `franchise_testimonial` (`id`, `image`, `name`, `division`, `description`, `status`, `creation_on`) VALUES
(4, '960918.png', 'Mrs. Mrunal Sonawane', 'Unit Franchisee, Nashik', 'We started working with I-Genius a last 3 years back. The support from I-Genius Team is very good moreover they are keen on keeping the business relation will not interfere with our functioning. We are excited to be the partner of I-Genius and hope to continue our business relation for a long time.', 'Active', '2024-06-17 11:44:11'),
(5, '648482.JPG', 'Mrs. Ujjwala Bachhav', 'Master Franchisee, Nashik', 'Hello, I am a partner, can say a part owner of I-GENIUS since 2015, this is only the name, space we all franchisee have got. I-GENIUS has given me a good growth, a great height, good support, good all members of company. In 2020 I started new centre and now I have few centres under me also schools. I have got a new good Identity... All thanks to I-GENIUS.', 'Active', '2024-06-17 11:44:48'),
(6, '921043.jpg', 'Mrs. Pratibha Shelar', 'Master Franchisee-Malegaon Dhule Division', 'I have lot of experience of abacus as I am in touch of I-Genius from last 10 years. The course contents are designed in such a way that it is a part of school curriculum So the children are very comfortable with abacus course. I thank I-Genius for introducing such a unique & useful course. Even I thank for giving me a fixed & stable income.', 'Active', '2024-06-17 11:45:22'),
(7, '621763.jpg', 'Mrs. Rupali Deore', 'Master Franchise – Chh.Sambhajinagar', 'Hello everyone, there is a lot to speak about I-GENIUS in short I have been working since 2018, it has given me a god name, a new confidence, self-respect and a very good earning of course. Always supportive and helpful. Just an amazing partner for me thank you I-GENIUS', 'Active', '2024-06-17 11:46:00'),
(8, '939556.png', 'Mrs. Harshada Patil', 'Unit Franchisee, Nashik', 'I am feeling very proud to be part of IGENIUS Abacus Classes. I think IGENIUS is the only one of the Company who is teaches smartly, easily, friendly to improve/increase Children’s IQ Level. Special thanks to Nita Pawar Mam for giving me such a good life line of my Success.', 'Active', '2024-06-17 11:46:35'),
(9, '814494.png', 'Mrs. Bharti Sonawane', 'Unit Franchisee, Pune', 'It is a pleasure being part of I-Genius family, have been associated with I-Genius for past 2 years and the guidance and support received is beyond words.\r\n\r\n', 'Active', '2024-06-17 11:47:14'),
(13, '12723.jpg', 'Mrs. Suvarna Shewale', 'Unit Franchise Thane', 'I wanted to take a moment to express my heartfelt gratitude for awarding me the \"Best Teacher\" award. It means a lot to me to receive this recognition from someone as accomplished and respected as you.\r\nYour dedication, passion, and expertise have been instrumental in shaping my career and enabling me to become the teacher that I am today. I am truly grateful for all the support and guidance you have provided me over the years.\r\n', 'Active', '2024-06-26 09:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `image`, `name`, `designation`, `creation_on`) VALUES
(5, '273442.jpg', 'NITA PAWAR', 'Founder & Director', '2024-06-26 09:05:41'),
(6, '877247.png', 'YOGESH PAWAR', 'Director', '2024-06-26 09:06:05'),
(7, '677107.png', 'DATTATRAY S', 'Executive Head ', '2024-06-26 09:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `parent_testi`
--

CREATE TABLE `parent_testi` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `about` text NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_testi`
--

INSERT INTO `parent_testi` (`id`, `image`, `name`, `about`, `description`, `status`, `creation_on`) VALUES
(5, '554305.jpeg', 'Shital Bachhav', 'A Parents of Ishita Pawar', 'I-Genius abacus mental math is a great program. My son Pranav joined two years back. I observed tremendous improvements in mathematics and being appreciated in school. Not only mathematics his personality also has improve a lot. This is because of sincere and professional attitude of I-Genius Teacher and management. Thank you Team I-Genius', 'Active', '2024-06-26 08:53:04'),
(6, '862895.jpeg', 'Purwa Shinde', 'A Student of I-Genius', 'I m a I-Genius Vedic Math student. It made my math easy and removed my phobia of math. This is a magic of numbers. My teacher from I-Genius has also taught me very well, till I understand. Now I can solve huge sums with few seconds only. Thank you I-Genius', 'Active', '2024-06-26 08:53:39'),
(7, '629662.jpeg', 'Pankaj Gangurde', 'A Parent of Manas Gangurde, Nashik', 'We would like to take this opportunity to thank the entire I-Genius team for their effort and results of our ward Master Manas. The results have surprised us and it has developed an interest in our ward towards maths.  This has been purely the due to the effort put up by the I-Genius team. We would specially like to thank Ms. Harshada (Abacus Tutor) for having taken the extra effort in grooming and upgrading the maths skill of our ward.', 'Active', '2024-06-26 08:54:42'),
(8, '928195.jpeg', 'Pranjal Shevale', 'A Parent’s of Sayee  Shewale', 'My daughter Sayee was initiated into I-Genius abacus last year. I’m happy with her progress thanks to the sincere and patient efforts of her teacher. I-Genius Annual Competition velocity is a good concept as it encourages children to practice the basics in a time bound manner.\r\nThank You Team I-Genius\r\n', 'Active', '2024-06-26 09:03:24'),
(15, '288920.jpg', 'Dinesh Shewalekar', 'A Parents of Aryan', 'Dear I-Genius Team,\r\n“Our son, Aryan, has shown remarkable improvement in his math skills since joining I-Genius. The innovative teaching methods and supportive environment have made a significant difference. We are particularly thankful to Ms. Kranti Patil (Abacus Tutor) for her exceptional guidance. We are excited about Aryan’s future with I-Genius.”\r\n\r\nSincerely,\r\nMr. Dinesh Mrs. Manisha\r\n', 'Active', '2024-07-22 07:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `descr` text NOT NULL,
  `status` text NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `title`, `descr`, `status`, `created_on`) VALUES
(1, 'How can I add new products?', 'L Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate eu scelerisquefelis. Vel pretium lectus quam id leo in vitae turpis massa.', 'Active', '2022-09-02'),
(2, 'How can I know stock?', 'L Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus.', 'Active', '2022-09-02'),
(3, 'How do I get paid?', 'L Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate eu scelerisquefelis.', 'Active', '2022-09-02'),
(4, 'Do I need a credit or debit card to create a shop?', 'L Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Active', '2022-09-02'),
(6, 'How can vv', 'sdfsdfd', 'Active', '2022-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `school_testimonial`
--

CREATE TABLE `school_testimonial` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_testimonial`
--

INSERT INTO `school_testimonial` (`id`, `image`, `name`, `about`, `description`, `status`, `creation_on`) VALUES
(15, '563494.png', NULL, NULL, NULL, 'Active', '2024-07-08 11:29:52'),
(16, '962286.png', NULL, NULL, NULL, 'Active', '2024-07-08 11:35:40'),
(17, '621068.png', NULL, NULL, NULL, 'Active', '2024-07-08 11:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `side_banner`
--

CREATE TABLE `side_banner` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `url` text NOT NULL,
  `photo` text NOT NULL,
  `status` text NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `side_banner`
--

INSERT INTO `side_banner` (`id`, `text`, `url`, `photo`, `status`, `creationDate`, `updationDate`) VALUES
(5, 'bake wonders', 'https://bakewonders.com/', '802147.jpg', 'Active', '2024-02-24 07:23:45', ''),
(6, 'bake wonders', 'https://bakewonders.com/', '333419.jpg', 'Active', '2024-02-24 07:24:08', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `content`, `creation_on`, `updation_on`) VALUES
(1, '<h3 class=\"main-heading\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.75rem; color: rgb(34, 34, 34); font-family: Poppins, sans-serif;\">An ISO 9001-2015 Certified Company I Authorised by EBVTR Govt. of India&nbsp;</h3>\r\n\r\n<p class=\"pt-2\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; padding-top: 0.5rem !important;\"><span class=\"text-dark fw-bold\" style=\"box-sizing: border-box; font-weight: 700 !important;\">Welcome to I-Genius Abacus Academy India Pvt. Ltd&nbsp;</span>LtdRunned by Prayas Shaikshanik Samajik Bahuuddeshiy Sanstha by established in the year 2009, with its corporate office located in Nashik Maharashtra, I-Genius has been a pioneer in providing high-quality Abacus Education to students across India and abroad. With strong commitment to excellence and passion for education.Our academy is proud to have a network of&nbsp;<span class=\"text-danger fw-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; color: rgb(220, 53, 69) !important;\">550 Franchisees&nbsp;</span>running all over India and abroad.&nbsp;<span class=\"text-info fw-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; color: rgb(13, 202, 240) !important;\">165+ School Project&nbsp;Associations</span>&nbsp;and we successfully trained over&nbsp;<span class=\"text-success fw-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; color: rgb(25, 135, 84) !important;\">1.5 lakh Students&nbsp;</span>in Abacus Education Since the of year 2007.<br style=\"box-sizing: border-box;\" />\r\n<span style=\"box-sizing: border-box; color: orange;\">At I-Genius&nbsp;</span>Abacus we offer dedicated Online / Offline Classes for Kids of every Course offered by the Academy. The Courses are designed for students in the age group of 6- 14 years. These courses promote Whole Brain development by stimulating both sides of the brain along with enhancement in skills, which leads to greater confidence in students to succeed in School Curriculum &amp; also in all walks of life.<br style=\"box-sizing: border-box;\" />\r\nAt I-Genius Abacus Academy, we believe in the power of abacus training to enhance cognitive skills, improve concentration, and boost overall academic performance. Our experienced instructors are dedicated to providing a supportive and nurturing learning environment where students can thrive and reach their full potential.<br style=\"box-sizing: border-box;\" />\r\nContact us now to learn more about our abacus programs and how your child can benefit from our innovative approach to education. Join the I-Genius Abacus Academy family today!</p>\r\n\r\n<p class=\"pt-2\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; padding-top: 0.5rem !important;\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2024-06-24 05:42:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_achivement`
--

CREATE TABLE `tbl_achivement` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_achivement`
--

INSERT INTO `tbl_achivement` (`id`, `image`, `name`, `creation_on`) VALUES
(12, '637265.png', 'Best Performance in Abacus Education', '2024-07-03 05:53:28'),
(16, '826604.png', 'I-Genius Best Franchisee Award 2023', '2024-07-03 06:05:59'),
(17, '84772.png', 'Maharashtra Business Icon Award 2023', '2024-07-03 06:06:23'),
(18, '681281.png', 'World Record Certificate', '2024-07-03 06:06:45'),
(19, '729425.png', 'World Record Certificate', '2024-07-03 06:07:39'),
(20, '426691.png', 'I-Genius One of The Best Abacus Institute In Maharashtra', '2024-07-03 06:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_index`
--

CREATE TABLE `tbl_blog_index` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `content` text NOT NULL,
  `faq_que` text NOT NULL,
  `faq_ans` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_blog_index`
--

INSERT INTO `tbl_blog_index` (`id`, `blog_id`, `name`, `slug`, `content`, `faq_que`, `faq_ans`, `creation_on`) VALUES
(1, 175117, ' Mental Arithmetic Skills', '', 'I-Genius Abacus courses stand out because they foster mental arithmetic skills through fun and interactive methods. This approach makes learning enjoyable and helps children develop a love for mathematics early on.', '1.	What is Abacus?', 'An abacus is a simple tool used to perform arithmetic calculations more easily, quickly, and accurately. It consists of beads or rods that represent numerical values.', '2024-07-01 11:48:00'),
(2, 100553, 'g df', '', 'gdf', 'gdfg', 'gdf', '2024-07-02 06:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career`
--

CREATE TABLE `tbl_career` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `qualification` text NOT NULL,
  `experience` text NOT NULL,
  `about` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_career`
--

INSERT INTO `tbl_career` (`id`, `title`, `qualification`, `experience`, `about`, `creation_on`) VALUES
(3, 'Abacus Teacher', 'Graduation', 'Fresher', 'The Abacus Financial Analyst / Accountant is responsible for managing and analyzing financial data to ensure the accuracy and integrity of the company’s financial operations. This role involves using traditional abacus methods, along with modern accounting software, to perform various financial tasks including bookkeeping, financial reporting, budgeting, and compliance.', '2024-06-28 08:55:14'),
(4, 'Vedic Math Trainer', 'Graduation', 'min 1 year', 'The Vedic Math Trainer is responsible for teaching Vedic Mathematics techniques to students, helping them develop faster and more efficient methods for solving mathematical problems. This role involves creating lesson plans, conducting training sessions, and assessing students\' progress. The trainer will also promote the benefits of Vedic Math and encourage its application in academic and competitive environments.', '2024-06-28 08:56:50'),
(7, 'Accountant ', 'B.Com', '2-3 Years', 'Maintaining all accounts, GST filing & returns, Product Inventory, stock maintain, TDS, ITR Filling, Employee Salary, Bank Reconciliations, journal entries, daily expenditures etc. ', '2024-07-27 11:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `city` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city`, `state_id`, `creation_on`) VALUES
(1, 'North and Middle Andaman', 32, '2024-07-18 06:04:52'),
(2, 'South Andaman', 32, '2024-07-18 06:04:52'),
(3, 'Nicobar', 32, '2024-07-18 06:04:52'),
(4, 'Adilabad', 1, '2024-07-18 06:04:52'),
(5, 'Anantapur', 1, '2024-07-18 06:04:52'),
(6, 'Chittoor', 1, '2024-07-18 06:04:52'),
(7, 'East Godavari', 1, '2024-07-18 06:04:52'),
(8, 'Guntur', 1, '2024-07-18 06:04:52'),
(9, 'Hyderabad', 1, '2024-07-18 06:04:52'),
(10, 'Kadapa', 1, '2024-07-18 06:04:52'),
(11, 'Karimnagar', 1, '2024-07-18 06:04:52'),
(12, 'Khammam', 1, '2024-07-18 06:04:52'),
(13, 'Krishna', 1, '2024-07-18 06:04:52'),
(14, 'Kurnool', 1, '2024-07-18 06:04:52'),
(15, 'Mahbubnagar', 1, '2024-07-18 06:04:52'),
(16, 'Medak', 1, '2024-07-18 06:04:52'),
(17, 'Nalgonda', 1, '2024-07-18 06:04:52'),
(18, 'Nellore', 1, '2024-07-18 06:04:52'),
(19, 'Nizamabad', 1, '2024-07-18 06:04:52'),
(20, 'Prakasam', 1, '2024-07-18 06:04:52'),
(21, 'Rangareddi', 1, '2024-07-18 06:04:52'),
(22, 'Srikakulam', 1, '2024-07-18 06:04:52'),
(23, 'Vishakhapatnam', 1, '2024-07-18 06:04:52'),
(24, 'Vizianagaram', 1, '2024-07-18 06:04:52'),
(25, 'Warangal', 1, '2024-07-18 06:04:52'),
(26, 'West Godavari', 1, '2024-07-18 06:04:52'),
(27, 'Anjaw', 3, '2024-07-18 06:04:52'),
(28, 'Changlang', 3, '2024-07-18 06:04:52'),
(29, 'East Kameng', 3, '2024-07-18 06:04:52'),
(30, 'Lohit', 3, '2024-07-18 06:04:52'),
(31, 'Lower Subansiri', 3, '2024-07-18 06:04:52'),
(32, 'Papum Pare', 3, '2024-07-18 06:04:52'),
(33, 'Tirap', 3, '2024-07-18 06:04:52'),
(34, 'Dibang Valley', 3, '2024-07-18 06:04:52'),
(35, 'Upper Subansiri', 3, '2024-07-18 06:04:52'),
(36, 'West Kameng', 3, '2024-07-18 06:04:52'),
(37, 'Barpeta', 2, '2024-07-18 06:04:52'),
(38, 'Bongaigaon', 2, '2024-07-18 06:04:52'),
(39, 'Cachar', 2, '2024-07-18 06:04:52'),
(40, 'Darrang', 2, '2024-07-18 06:04:52'),
(41, 'Dhemaji', 2, '2024-07-18 06:04:52'),
(42, 'Dhubri', 2, '2024-07-18 06:04:52'),
(43, 'Dibrugarh', 2, '2024-07-18 06:04:52'),
(44, 'Goalpara', 2, '2024-07-18 06:04:52'),
(45, 'Golaghat', 2, '2024-07-18 06:04:52'),
(46, 'Hailakandi', 2, '2024-07-18 06:04:52'),
(47, 'Jorhat', 2, '2024-07-18 06:04:52'),
(48, 'Karbi Anglong', 2, '2024-07-18 06:04:52'),
(49, 'Karimganj', 2, '2024-07-18 06:04:52'),
(50, 'Kokrajhar', 2, '2024-07-18 06:04:52'),
(51, 'Lakhimpur', 2, '2024-07-18 06:04:52'),
(52, 'Marigaon', 2, '2024-07-18 06:04:52'),
(53, 'Nagaon', 2, '2024-07-18 06:04:52'),
(54, 'Nalbari', 2, '2024-07-18 06:04:52'),
(55, 'North Cachar Hills', 2, '2024-07-18 06:04:52'),
(56, 'Sibsagar', 2, '2024-07-18 06:04:52'),
(57, 'Sonitpur', 2, '2024-07-18 06:04:52'),
(58, 'Tinsukia', 2, '2024-07-18 06:04:52'),
(59, 'Araria', 4, '2024-07-18 06:04:52'),
(60, 'Aurangabad', 4, '2024-07-18 06:04:52'),
(61, 'Banka', 4, '2024-07-18 06:04:52'),
(62, 'Begusarai', 4, '2024-07-18 06:04:52'),
(63, 'Bhagalpur', 4, '2024-07-18 06:04:52'),
(64, 'Bhojpur', 4, '2024-07-18 06:04:52'),
(65, 'Buxar', 4, '2024-07-18 06:04:52'),
(66, 'Darbhanga', 4, '2024-07-18 06:04:52'),
(67, 'Purba Champaran', 4, '2024-07-18 06:04:52'),
(68, 'Gaya', 4, '2024-07-18 06:04:52'),
(69, 'Gopalganj', 4, '2024-07-18 06:04:52'),
(70, 'Jamui', 4, '2024-07-18 06:04:52'),
(71, 'Jehanabad', 4, '2024-07-18 06:04:52'),
(72, 'Khagaria', 4, '2024-07-18 06:04:52'),
(73, 'Kishanganj', 4, '2024-07-18 06:04:52'),
(74, 'Kaimur', 4, '2024-07-18 06:04:52'),
(75, 'Katihar', 4, '2024-07-18 06:04:52'),
(76, 'Lakhisarai', 4, '2024-07-18 06:04:52'),
(77, 'Madhubani', 4, '2024-07-18 06:04:52'),
(78, 'Munger', 4, '2024-07-18 06:04:52'),
(79, 'Madhepura', 4, '2024-07-18 06:04:52'),
(80, 'Muzaffarpur', 4, '2024-07-18 06:04:52'),
(81, 'Nalanda', 4, '2024-07-18 06:04:52'),
(82, 'Nawada', 4, '2024-07-18 06:04:52'),
(83, 'Patna', 4, '2024-07-18 06:04:52'),
(84, 'Purnia', 4, '2024-07-18 06:04:52'),
(85, 'Rohtas', 4, '2024-07-18 06:04:52'),
(86, 'Saharsa', 4, '2024-07-18 06:04:52'),
(87, 'Samastipur', 4, '2024-07-18 06:04:52'),
(88, 'Sheohar', 4, '2024-07-18 06:04:52'),
(89, 'Sheikhpura', 4, '2024-07-18 06:04:52'),
(90, 'Saran', 4, '2024-07-18 06:04:52'),
(91, 'Sitamarhi', 4, '2024-07-18 06:04:52'),
(92, 'Supaul', 4, '2024-07-18 06:04:52'),
(93, 'Siwan', 4, '2024-07-18 06:04:52'),
(94, 'Vaishali', 4, '2024-07-18 06:04:52'),
(95, 'Pashchim Champaran', 4, '2024-07-18 06:04:52'),
(96, 'Bastar', 36, '2024-07-18 06:04:52'),
(97, 'Bilaspur', 36, '2024-07-18 06:04:52'),
(98, 'Dantewada', 36, '2024-07-18 06:04:52'),
(99, 'Dhamtari', 36, '2024-07-18 06:04:52'),
(100, 'Durg', 36, '2024-07-18 06:04:52'),
(101, 'Jashpur', 36, '2024-07-18 06:04:52'),
(102, 'Janjgir-Champa', 36, '2024-07-18 06:04:52'),
(103, 'Korba', 36, '2024-07-18 06:04:52'),
(104, 'Koriya', 36, '2024-07-18 06:04:52'),
(105, 'Kanker', 36, '2024-07-18 06:04:52'),
(106, 'Kawardha', 36, '2024-07-18 06:04:52'),
(107, 'Mahasamund', 36, '2024-07-18 06:04:52'),
(108, 'Raigarh', 36, '2024-07-18 06:04:52'),
(109, 'Rajnandgaon', 36, '2024-07-18 06:04:52'),
(110, 'Raipur', 36, '2024-07-18 06:04:52'),
(111, 'Surguja', 36, '2024-07-18 06:04:52'),
(112, 'Diu', 29, '2024-07-18 06:04:52'),
(113, 'Daman', 29, '2024-07-18 06:04:52'),
(114, 'Central Delhi', 25, '2024-07-18 06:04:52'),
(115, 'East Delhi', 25, '2024-07-18 06:04:52'),
(116, 'New Delhi', 25, '2024-07-18 06:04:52'),
(117, 'North Delhi', 25, '2024-07-18 06:04:52'),
(118, 'North East Delhi', 25, '2024-07-18 06:04:52'),
(119, 'North West Delhi', 25, '2024-07-18 06:04:52'),
(120, 'South Delhi', 25, '2024-07-18 06:04:52'),
(121, 'South West Delhi', 25, '2024-07-18 06:04:52'),
(122, 'West Delhi', 25, '2024-07-18 06:04:52'),
(123, 'North Goa', 26, '2024-07-18 06:04:52'),
(124, 'South Goa', 26, '2024-07-18 06:04:52'),
(125, 'Ahmedabad', 5, '2024-07-18 06:04:52'),
(126, 'Amreli District', 5, '2024-07-18 06:04:52'),
(127, 'Anand', 5, '2024-07-18 06:04:52'),
(128, 'Banaskantha', 5, '2024-07-18 06:04:52'),
(129, 'Bharuch', 5, '2024-07-18 06:04:52'),
(130, 'Bhavnagar', 5, '2024-07-18 06:04:52'),
(131, 'Dahod', 5, '2024-07-18 06:04:52'),
(132, 'The Dangs', 5, '2024-07-18 06:04:52'),
(133, 'Gandhinagar', 5, '2024-07-18 06:04:52'),
(134, 'Jamnagar', 5, '2024-07-18 06:04:52'),
(135, 'Junagadh', 5, '2024-07-18 06:04:52'),
(136, 'Kutch', 5, '2024-07-18 06:04:52'),
(137, 'Kheda', 5, '2024-07-18 06:04:52'),
(138, 'Mehsana', 5, '2024-07-18 06:04:52'),
(139, 'Narmada', 5, '2024-07-18 06:04:52'),
(140, 'Navsari', 5, '2024-07-18 06:04:52'),
(141, 'Patan', 5, '2024-07-18 06:04:52'),
(142, 'Panchmahal', 5, '2024-07-18 06:04:52'),
(143, 'Porbandar', 5, '2024-07-18 06:04:52'),
(144, 'Rajkot', 5, '2024-07-18 06:04:52'),
(145, 'Sabarkantha', 5, '2024-07-18 06:04:52'),
(146, 'Surendranagar', 5, '2024-07-18 06:04:52'),
(147, 'Surat', 5, '2024-07-18 06:04:52'),
(148, 'Vadodara', 5, '2024-07-18 06:04:52'),
(149, 'Valsad', 5, '2024-07-18 06:04:52'),
(150, 'Ambala', 6, '2024-07-18 06:04:52'),
(151, 'Bhiwani', 6, '2024-07-18 06:04:52'),
(152, 'Faridabad', 6, '2024-07-18 06:04:52'),
(153, 'Fatehabad', 6, '2024-07-18 06:04:52'),
(154, 'Gurgaon', 6, '2024-07-18 06:04:52'),
(155, 'Hissar', 6, '2024-07-18 06:04:52'),
(156, 'Jhajjar', 6, '2024-07-18 06:04:52'),
(157, 'Jind', 6, '2024-07-18 06:04:52'),
(158, 'Karnal', 6, '2024-07-18 06:04:52'),
(159, 'Kaithal', 6, '2024-07-18 06:04:52'),
(160, 'Kurukshetra', 6, '2024-07-18 06:04:52'),
(161, 'Mahendragarh', 6, '2024-07-18 06:04:52'),
(162, 'Mewat', 6, '2024-07-18 06:04:52'),
(163, 'Panchkula', 6, '2024-07-18 06:04:52'),
(164, 'Panipat', 6, '2024-07-18 06:04:52'),
(165, 'Rewari', 6, '2024-07-18 06:04:52'),
(166, 'Rohtak', 6, '2024-07-18 06:04:52'),
(167, 'Sirsa', 6, '2024-07-18 06:04:52'),
(168, 'Sonepat', 6, '2024-07-18 06:04:52'),
(169, 'Yamuna Nagar', 6, '2024-07-18 06:04:52'),
(170, 'Palwal', 6, '2024-07-18 06:04:52'),
(171, 'Bilaspur', 7, '2024-07-18 06:04:52'),
(172, 'Chamba', 7, '2024-07-18 06:04:52'),
(173, 'Hamirpur', 7, '2024-07-18 06:04:52'),
(174, 'Kangra', 7, '2024-07-18 06:04:52'),
(175, 'Kinnaur', 7, '2024-07-18 06:04:52'),
(176, 'Kulu', 7, '2024-07-18 06:04:52'),
(177, 'Lahaul and Spiti', 7, '2024-07-18 06:04:52'),
(178, 'Mandi', 7, '2024-07-18 06:04:52'),
(179, 'Shimla', 7, '2024-07-18 06:04:52'),
(180, 'Sirmaur', 7, '2024-07-18 06:04:52'),
(181, 'Solan', 7, '2024-07-18 06:04:52'),
(182, 'Una', 7, '2024-07-18 06:04:52'),
(183, 'Anantnag', 8, '2024-07-18 06:04:52'),
(184, 'Badgam', 8, '2024-07-18 06:04:52'),
(185, 'Bandipore', 8, '2024-07-18 06:04:52'),
(186, 'Baramula', 8, '2024-07-18 06:04:52'),
(187, 'Doda', 8, '2024-07-18 06:04:52'),
(188, 'Jammu', 8, '2024-07-18 06:04:52'),
(189, 'Kargil', 8, '2024-07-18 06:04:52'),
(190, 'Kathua', 8, '2024-07-18 06:04:52'),
(191, 'Kupwara', 8, '2024-07-18 06:04:52'),
(192, 'Leh', 8, '2024-07-18 06:04:52'),
(193, 'Poonch', 8, '2024-07-18 06:04:52'),
(194, 'Pulwama', 8, '2024-07-18 06:04:52'),
(195, 'Rajauri', 8, '2024-07-18 06:04:52'),
(196, 'Srinagar', 8, '2024-07-18 06:04:52'),
(197, 'Samba', 8, '2024-07-18 06:04:52'),
(198, 'Udhampur', 8, '2024-07-18 06:04:52'),
(199, 'Bokaro', 34, '2024-07-18 06:04:52'),
(200, 'Chatra', 34, '2024-07-18 06:04:52'),
(201, 'Deoghar', 34, '2024-07-18 06:04:52'),
(202, 'Dhanbad', 34, '2024-07-18 06:04:52'),
(203, 'Dumka', 34, '2024-07-18 06:04:52'),
(204, 'Purba Singhbhum', 34, '2024-07-18 06:04:52'),
(205, 'Garhwa', 34, '2024-07-18 06:04:52'),
(206, 'Giridih', 34, '2024-07-18 06:04:52'),
(207, 'Godda', 34, '2024-07-18 06:04:52'),
(208, 'Gumla', 34, '2024-07-18 06:04:52'),
(209, 'Hazaribagh', 34, '2024-07-18 06:04:52'),
(210, 'Koderma', 34, '2024-07-18 06:04:52'),
(211, 'Lohardaga', 34, '2024-07-18 06:04:52'),
(212, 'Pakur', 34, '2024-07-18 06:04:52'),
(213, 'Palamu', 34, '2024-07-18 06:04:52'),
(214, 'Ranchi', 34, '2024-07-18 06:04:52'),
(215, 'Sahibganj', 34, '2024-07-18 06:04:52'),
(216, 'Seraikela and Kharsawan', 34, '2024-07-18 06:04:52'),
(217, 'Pashchim Singhbhum', 34, '2024-07-18 06:04:52'),
(218, 'Ramgarh', 34, '2024-07-18 06:04:52'),
(219, 'Bidar', 9, '2024-07-18 06:04:52'),
(220, 'Belgaum', 9, '2024-07-18 06:04:52'),
(221, 'Bijapur', 9, '2024-07-18 06:04:52'),
(222, 'Bagalkot', 9, '2024-07-18 06:04:52'),
(223, 'Bellary', 9, '2024-07-18 06:04:52'),
(224, 'Bangalore Rural District', 9, '2024-07-18 06:04:52'),
(225, 'Bangalore Urban District', 9, '2024-07-18 06:04:52'),
(226, 'Chamarajnagar', 9, '2024-07-18 06:04:52'),
(227, 'Chikmagalur', 9, '2024-07-18 06:04:52'),
(228, 'Chitradurga', 9, '2024-07-18 06:04:52'),
(229, 'Davanagere', 9, '2024-07-18 06:04:52'),
(230, 'Dharwad', 9, '2024-07-18 06:04:52'),
(231, 'Dakshina Kannada', 9, '2024-07-18 06:04:52'),
(232, 'Gadag', 9, '2024-07-18 06:04:52'),
(233, 'Gulbarga', 9, '2024-07-18 06:04:52'),
(234, 'Hassan', 9, '2024-07-18 06:04:52'),
(235, 'Haveri District', 9, '2024-07-18 06:04:52'),
(236, 'Kodagu', 9, '2024-07-18 06:04:52'),
(237, 'Kolar', 9, '2024-07-18 06:04:52'),
(238, 'Koppal', 9, '2024-07-18 06:04:52'),
(239, 'Mandya', 9, '2024-07-18 06:04:52'),
(240, 'Mysore', 9, '2024-07-18 06:04:52'),
(241, 'Raichur', 9, '2024-07-18 06:04:52'),
(242, 'Shimoga', 9, '2024-07-18 06:04:52'),
(243, 'Tumkur', 9, '2024-07-18 06:04:52'),
(244, 'Udupi', 9, '2024-07-18 06:04:52'),
(245, 'Uttara Kannada', 9, '2024-07-18 06:04:52'),
(246, 'Ramanagara', 9, '2024-07-18 06:04:52'),
(247, 'Chikballapur', 9, '2024-07-18 06:04:52'),
(248, 'Yadagiri', 9, '2024-07-18 06:04:52'),
(249, 'Alappuzha', 10, '2024-07-18 06:04:52'),
(250, 'Ernakulam', 10, '2024-07-18 06:04:52'),
(251, 'Idukki', 10, '2024-07-18 06:04:52'),
(252, 'Kollam', 10, '2024-07-18 06:04:52'),
(253, 'Kannur', 10, '2024-07-18 06:04:52'),
(254, 'Kasaragod', 10, '2024-07-18 06:04:52'),
(255, 'Kottayam', 10, '2024-07-18 06:04:52'),
(256, 'Kozhikode', 10, '2024-07-18 06:04:52'),
(257, 'Malappuram', 10, '2024-07-18 06:04:52'),
(258, 'Palakkad', 10, '2024-07-18 06:04:52'),
(259, 'Pathanamthitta', 10, '2024-07-18 06:04:52'),
(260, 'Thrissur', 10, '2024-07-18 06:04:52'),
(261, 'Thiruvananthapuram', 10, '2024-07-18 06:04:52'),
(262, 'Wayanad', 10, '2024-07-18 06:04:52'),
(263, 'Alirajpur', 11, '2024-07-18 06:04:52'),
(264, 'Anuppur', 11, '2024-07-18 06:04:52'),
(265, 'Ashok Nagar', 11, '2024-07-18 06:04:52'),
(266, 'Balaghat', 11, '2024-07-18 06:04:52'),
(267, 'Barwani', 11, '2024-07-18 06:04:52'),
(268, 'Betul', 11, '2024-07-18 06:04:52'),
(269, 'Bhind', 11, '2024-07-18 06:04:52'),
(270, 'Bhopal', 11, '2024-07-18 06:04:52'),
(271, 'Burhanpur', 11, '2024-07-18 06:04:52'),
(272, 'Chhatarpur', 11, '2024-07-18 06:04:52'),
(273, 'Chhindwara', 11, '2024-07-18 06:04:52'),
(274, 'Damoh', 11, '2024-07-18 06:04:52'),
(275, 'Datia', 11, '2024-07-18 06:04:52'),
(276, 'Dewas', 11, '2024-07-18 06:04:52'),
(277, 'Dhar', 11, '2024-07-18 06:04:52'),
(278, 'Dindori', 11, '2024-07-18 06:04:52'),
(279, 'Guna', 11, '2024-07-18 06:04:52'),
(280, 'Gwalior', 11, '2024-07-18 06:04:52'),
(281, 'Harda', 11, '2024-07-18 06:04:52'),
(282, 'Hoshangabad', 11, '2024-07-18 06:04:52'),
(283, 'Indore', 11, '2024-07-18 06:04:52'),
(284, 'Jabalpur', 11, '2024-07-18 06:04:52'),
(285, 'Jhabua', 11, '2024-07-18 06:04:52'),
(286, 'Katni', 11, '2024-07-18 06:04:52'),
(287, 'Khandwa', 11, '2024-07-18 06:04:52'),
(288, 'Khargone', 11, '2024-07-18 06:04:52'),
(289, 'Mandla', 11, '2024-07-18 06:04:52'),
(290, 'Mandsaur', 11, '2024-07-18 06:04:52'),
(291, 'Morena', 11, '2024-07-18 06:04:52'),
(292, 'Narsinghpur', 11, '2024-07-18 06:04:52'),
(293, 'Neemuch', 11, '2024-07-18 06:04:52'),
(294, 'Panna', 11, '2024-07-18 06:04:52'),
(295, 'Rewa', 11, '2024-07-18 06:04:52'),
(296, 'Rajgarh', 11, '2024-07-18 06:04:52'),
(297, 'Ratlam', 11, '2024-07-18 06:04:52'),
(298, 'Raisen', 11, '2024-07-18 06:04:52'),
(299, 'Sagar', 11, '2024-07-18 06:04:52'),
(300, 'Satna', 11, '2024-07-18 06:04:52'),
(301, 'Sehore', 11, '2024-07-18 06:04:52'),
(302, 'Seoni', 11, '2024-07-18 06:04:52'),
(303, 'Shahdol', 11, '2024-07-18 06:04:52'),
(304, 'Shajapur', 11, '2024-07-18 06:04:52'),
(305, 'Sheopur', 11, '2024-07-18 06:04:52'),
(306, 'Shivpuri', 11, '2024-07-18 06:04:52'),
(307, 'Sidhi', 11, '2024-07-18 06:04:52'),
(308, 'Singrauli', 11, '2024-07-18 06:04:52'),
(309, 'Tikamgarh', 11, '2024-07-18 06:04:52'),
(310, 'Ujjain', 11, '2024-07-18 06:04:52'),
(311, 'Umaria', 11, '2024-07-18 06:04:52'),
(312, 'Vidisha', 11, '2024-07-18 06:04:52'),
(313, 'Ahmednagar', 12, '2024-07-18 06:04:52'),
(314, 'Akola', 12, '2024-07-18 06:04:52'),
(315, 'Amrawati', 12, '2024-07-18 06:04:52'),
(316, 'Aurangabad', 12, '2024-07-18 06:04:52'),
(317, 'Bhandara', 12, '2024-07-18 06:04:52'),
(318, 'Beed', 12, '2024-07-18 06:04:52'),
(319, 'Buldhana', 12, '2024-07-18 06:04:52'),
(320, 'Chandrapur', 12, '2024-07-18 06:04:52'),
(321, 'Dhule', 12, '2024-07-18 06:04:52'),
(322, 'Gadchiroli', 12, '2024-07-18 06:04:52'),
(323, 'Gondiya', 12, '2024-07-18 06:04:52'),
(324, 'Hingoli', 12, '2024-07-18 06:04:52'),
(325, 'Jalgaon', 12, '2024-07-18 06:04:52'),
(326, 'Jalna', 12, '2024-07-18 06:04:52'),
(327, 'Kolhapur', 12, '2024-07-18 06:04:52'),
(328, 'Latur', 12, '2024-07-18 06:04:52'),
(329, 'Mumbai City', 12, '2024-07-18 06:04:52'),
(330, 'Mumbai suburban', 12, '2024-07-18 06:04:52'),
(331, 'Nandurbar', 12, '2024-07-18 06:04:52'),
(332, 'Nanded', 12, '2024-07-18 06:04:52'),
(333, 'Nagpur', 12, '2024-07-18 06:04:52'),
(334, 'Nashik', 12, '2024-07-18 06:04:52'),
(335, 'Osmanabad', 12, '2024-07-18 06:04:52'),
(336, 'Parbhani', 12, '2024-07-18 06:04:52'),
(337, 'Pune', 12, '2024-07-18 06:04:52'),
(338, 'Raigad', 12, '2024-07-18 06:04:52'),
(339, 'Ratnagiri', 12, '2024-07-18 06:04:52'),
(340, 'Sindhudurg', 12, '2024-07-18 06:04:52'),
(341, 'Sangli', 12, '2024-07-18 06:04:52'),
(342, 'Solapur', 12, '2024-07-18 06:04:52'),
(343, 'Satara', 12, '2024-07-18 06:04:52'),
(344, 'Thane', 12, '2024-07-18 06:04:52'),
(345, 'Wardha', 12, '2024-07-18 06:04:52'),
(346, 'Washim', 12, '2024-07-18 06:04:52'),
(347, 'Yavatmal', 12, '2024-07-18 06:04:52'),
(348, 'Bishnupur', 13, '2024-07-18 06:04:52'),
(349, 'Churachandpur', 13, '2024-07-18 06:04:52'),
(350, 'Chandel', 13, '2024-07-18 06:04:52'),
(351, 'Imphal East', 13, '2024-07-18 06:04:52'),
(352, 'Senapati', 13, '2024-07-18 06:04:52'),
(353, 'Tamenglong', 13, '2024-07-18 06:04:52'),
(354, 'Thoubal', 13, '2024-07-18 06:04:52'),
(355, 'Ukhrul', 13, '2024-07-18 06:04:52'),
(356, 'Imphal West', 13, '2024-07-18 06:04:52'),
(357, 'East Garo Hills', 14, '2024-07-18 06:04:52'),
(358, 'East Khasi Hills', 14, '2024-07-18 06:04:52'),
(359, 'Jaintia Hills', 14, '2024-07-18 06:04:52'),
(360, 'Ri-Bhoi', 14, '2024-07-18 06:04:52'),
(361, 'South Garo Hills', 14, '2024-07-18 06:04:52'),
(362, 'West Garo Hills', 14, '2024-07-18 06:04:52'),
(363, 'West Khasi Hills', 14, '2024-07-18 06:04:52'),
(364, 'Aizawl', 15, '2024-07-18 06:04:52'),
(365, 'Champhai', 15, '2024-07-18 06:04:52'),
(366, 'Kolasib', 15, '2024-07-18 06:04:52'),
(367, 'Lawngtlai', 15, '2024-07-18 06:04:52'),
(368, 'Lunglei', 15, '2024-07-18 06:04:52'),
(369, 'Mamit', 15, '2024-07-18 06:04:52'),
(370, 'Saiha', 15, '2024-07-18 06:04:52'),
(371, 'Serchhip', 15, '2024-07-18 06:04:52'),
(372, 'Dimapur', 16, '2024-07-18 06:04:52'),
(373, 'Kohima', 16, '2024-07-18 06:04:52'),
(374, 'Mokokchung', 16, '2024-07-18 06:04:52'),
(375, 'Mon', 16, '2024-07-18 06:04:52'),
(376, 'Phek', 16, '2024-07-18 06:04:52'),
(377, 'Tuensang', 16, '2024-07-18 06:04:52'),
(378, 'Wokha', 16, '2024-07-18 06:04:52'),
(379, 'Zunheboto', 16, '2024-07-18 06:04:52'),
(380, 'Angul', 17, '2024-07-18 06:04:52'),
(381, 'Boudh', 17, '2024-07-18 06:04:52'),
(382, 'Bhadrak', 17, '2024-07-18 06:04:52'),
(383, 'Bolangir', 17, '2024-07-18 06:04:52'),
(384, 'Bargarh', 17, '2024-07-18 06:04:52'),
(385, 'Baleswar', 17, '2024-07-18 06:04:52'),
(386, 'Cuttack', 17, '2024-07-18 06:04:52'),
(387, 'Debagarh', 17, '2024-07-18 06:04:52'),
(388, 'Dhenkanal', 17, '2024-07-18 06:04:52'),
(389, 'Ganjam', 17, '2024-07-18 06:04:52'),
(390, 'Gajapati', 17, '2024-07-18 06:04:52'),
(391, 'Jharsuguda', 17, '2024-07-18 06:04:52'),
(392, 'Jajapur', 17, '2024-07-18 06:04:52'),
(393, 'Jagatsinghpur', 17, '2024-07-18 06:04:52'),
(394, 'Khordha', 17, '2024-07-18 06:04:52'),
(395, 'Kendujhar', 17, '2024-07-18 06:04:52'),
(396, 'Kalahandi', 17, '2024-07-18 06:04:52'),
(397, 'Kandhamal', 17, '2024-07-18 06:04:52'),
(398, 'Koraput', 17, '2024-07-18 06:04:52'),
(399, 'Kendrapara', 17, '2024-07-18 06:04:52'),
(400, 'Malkangiri', 17, '2024-07-18 06:04:52'),
(401, 'Mayurbhanj', 17, '2024-07-18 06:04:52'),
(402, 'Nabarangpur', 17, '2024-07-18 06:04:52'),
(403, 'Nuapada', 17, '2024-07-18 06:04:52'),
(404, 'Nayagarh', 17, '2024-07-18 06:04:52'),
(405, 'Puri', 17, '2024-07-18 06:04:52'),
(406, 'Rayagada', 17, '2024-07-18 06:04:52'),
(407, 'Sambalpur', 17, '2024-07-18 06:04:52'),
(408, 'Subarnapur', 17, '2024-07-18 06:04:52'),
(409, 'Sundargarh', 17, '2024-07-18 06:04:52'),
(410, 'Karaikal', 27, '2024-07-18 06:04:52'),
(411, 'Mahe', 27, '2024-07-18 06:04:52'),
(412, 'Puducherry', 27, '2024-07-18 06:04:52'),
(413, 'Yanam', 27, '2024-07-18 06:04:52'),
(414, 'Amritsar', 18, '2024-07-18 06:04:52'),
(415, 'Bathinda', 18, '2024-07-18 06:04:52'),
(416, 'Firozpur', 18, '2024-07-18 06:04:52'),
(417, 'Faridkot', 18, '2024-07-18 06:04:52'),
(418, 'Fatehgarh Sahib', 18, '2024-07-18 06:04:52'),
(419, 'Gurdaspur', 18, '2024-07-18 06:04:52'),
(420, 'Hoshiarpur', 18, '2024-07-18 06:04:52'),
(421, 'Jalandhar', 18, '2024-07-18 06:04:52'),
(422, 'Kapurthala', 18, '2024-07-18 06:04:52'),
(423, 'Ludhiana', 18, '2024-07-18 06:04:52'),
(424, 'Mansa', 18, '2024-07-18 06:04:52'),
(425, 'Moga', 18, '2024-07-18 06:04:52'),
(426, 'Mukatsar', 18, '2024-07-18 06:04:52'),
(427, 'Nawan Shehar', 18, '2024-07-18 06:04:52'),
(428, 'Patiala', 18, '2024-07-18 06:04:52'),
(429, 'Rupnagar', 18, '2024-07-18 06:04:52'),
(430, 'Sangrur', 18, '2024-07-18 06:04:52'),
(431, 'Ajmer', 19, '2024-07-18 06:04:52'),
(432, 'Alwar', 19, '2024-07-18 06:04:52'),
(433, 'Bikaner', 19, '2024-07-18 06:04:52'),
(434, 'Barmer', 19, '2024-07-18 06:04:52'),
(435, 'Banswara', 19, '2024-07-18 06:04:52'),
(436, 'Bharatpur', 19, '2024-07-18 06:04:52'),
(437, 'Baran', 19, '2024-07-18 06:04:52'),
(438, 'Bundi', 19, '2024-07-18 06:04:52'),
(439, 'Bhilwara', 19, '2024-07-18 06:04:52'),
(440, 'Churu', 19, '2024-07-18 06:04:52'),
(441, 'Chittorgarh', 19, '2024-07-18 06:04:52'),
(442, 'Dausa', 19, '2024-07-18 06:04:52'),
(443, 'Dholpur', 19, '2024-07-18 06:04:52'),
(444, 'Dungapur', 19, '2024-07-18 06:04:52'),
(445, 'Ganganagar', 19, '2024-07-18 06:04:52'),
(446, 'Hanumangarh', 19, '2024-07-18 06:04:52'),
(447, 'Juhnjhunun', 19, '2024-07-18 06:04:52'),
(448, 'Jalore', 19, '2024-07-18 06:04:52'),
(449, 'Jodhpur', 19, '2024-07-18 06:04:52'),
(450, 'Jaipur', 19, '2024-07-18 06:04:52'),
(451, 'Jaisalmer', 19, '2024-07-18 06:04:52'),
(452, 'Jhalawar', 19, '2024-07-18 06:04:52'),
(453, 'Karauli', 19, '2024-07-18 06:04:52'),
(454, 'Kota', 19, '2024-07-18 06:04:52'),
(455, 'Nagaur', 19, '2024-07-18 06:04:52'),
(456, 'Pali', 19, '2024-07-18 06:04:52'),
(457, 'Pratapgarh', 19, '2024-07-18 06:04:52'),
(458, 'Rajsamand', 19, '2024-07-18 06:04:52'),
(459, 'Sikar', 19, '2024-07-18 06:04:52'),
(460, 'Sawai Madhopur', 19, '2024-07-18 06:04:52'),
(461, 'Sirohi', 19, '2024-07-18 06:04:52'),
(462, 'Tonk', 19, '2024-07-18 06:04:52'),
(463, 'Udaipur', 19, '2024-07-18 06:04:52'),
(464, 'East Sikkim', 20, '2024-07-18 06:04:52'),
(465, 'North Sikkim', 20, '2024-07-18 06:04:52'),
(466, 'South Sikkim', 20, '2024-07-18 06:04:52'),
(467, 'West Sikkim', 20, '2024-07-18 06:04:52'),
(468, 'Ariyalur', 21, '2024-07-18 06:04:52'),
(469, 'Chennai', 21, '2024-07-18 06:04:52'),
(470, 'Coimbatore', 21, '2024-07-18 06:04:52'),
(471, 'Cuddalore', 21, '2024-07-18 06:04:52'),
(472, 'Dharmapuri', 21, '2024-07-18 06:04:52'),
(473, 'Dindigul', 21, '2024-07-18 06:04:52'),
(474, 'Erode', 21, '2024-07-18 06:04:52'),
(475, 'Kanchipuram', 21, '2024-07-18 06:04:52'),
(476, 'Kanyakumari', 21, '2024-07-18 06:04:52'),
(477, 'Karur', 21, '2024-07-18 06:04:52'),
(478, 'Madurai', 21, '2024-07-18 06:04:52'),
(479, 'Nagapattinam', 21, '2024-07-18 06:04:52'),
(480, 'The Nilgiris', 21, '2024-07-18 06:04:52'),
(481, 'Namakkal', 21, '2024-07-18 06:04:52'),
(482, 'Perambalur', 21, '2024-07-18 06:04:52'),
(483, 'Pudukkottai', 21, '2024-07-18 06:04:52'),
(484, 'Ramanathapuram', 21, '2024-07-18 06:04:52'),
(485, 'Salem', 21, '2024-07-18 06:04:52'),
(486, 'Sivagangai', 21, '2024-07-18 06:04:52'),
(487, 'Tiruppur', 21, '2024-07-18 06:04:52'),
(488, 'Tiruchirappalli', 21, '2024-07-18 06:04:52'),
(489, 'Theni', 21, '2024-07-18 06:04:52'),
(490, 'Tirunelveli', 21, '2024-07-18 06:04:52'),
(491, 'Thanjavur', 21, '2024-07-18 06:04:52'),
(492, 'Thoothukudi', 21, '2024-07-18 06:04:52'),
(493, 'Thiruvallur', 21, '2024-07-18 06:04:52'),
(494, 'Thiruvarur', 21, '2024-07-18 06:04:52'),
(495, 'Tiruvannamalai', 21, '2024-07-18 06:04:52'),
(496, 'Vellore', 21, '2024-07-18 06:04:52'),
(497, 'Villupuram', 21, '2024-07-18 06:04:52'),
(498, 'Dhalai', 22, '2024-07-18 06:04:52'),
(499, 'North Tripura', 22, '2024-07-18 06:04:52'),
(500, 'South Tripura', 22, '2024-07-18 06:04:52'),
(501, 'West Tripura', 22, '2024-07-18 06:04:52'),
(502, 'Almora', 33, '2024-07-18 06:04:52'),
(503, 'Bageshwar', 33, '2024-07-18 06:04:52'),
(504, 'Chamoli', 33, '2024-07-18 06:04:52'),
(505, 'Champawat', 33, '2024-07-18 06:04:52'),
(506, 'Dehradun', 33, '2024-07-18 06:04:52'),
(507, 'Haridwar', 33, '2024-07-18 06:04:52'),
(508, 'Nainital', 33, '2024-07-18 06:04:52'),
(509, 'Pauri Garhwal', 33, '2024-07-18 06:04:52'),
(510, 'Pithoragharh', 33, '2024-07-18 06:04:52'),
(511, 'Rudraprayag', 33, '2024-07-18 06:04:52'),
(512, 'Tehri Garhwal', 33, '2024-07-18 06:04:52'),
(513, 'Udham Singh Nagar', 33, '2024-07-18 06:04:52'),
(514, 'Uttarkashi', 33, '2024-07-18 06:04:52'),
(515, 'Agra', 23, '2024-07-18 06:04:52'),
(516, 'Allahabad', 23, '2024-07-18 06:04:52'),
(517, 'Aligarh', 23, '2024-07-18 06:04:52'),
(518, 'Ambedkar Nagar', 23, '2024-07-18 06:04:52'),
(519, 'Auraiya', 23, '2024-07-18 06:04:52'),
(520, 'Azamgarh', 23, '2024-07-18 06:04:52'),
(521, 'Barabanki', 23, '2024-07-18 06:04:52'),
(522, 'Badaun', 23, '2024-07-18 06:04:52'),
(523, 'Bagpat', 23, '2024-07-18 06:04:52'),
(524, 'Bahraich', 23, '2024-07-18 06:04:52'),
(525, 'Bijnor', 23, '2024-07-18 06:04:52'),
(526, 'Ballia', 23, '2024-07-18 06:04:52'),
(527, 'Banda', 23, '2024-07-18 06:04:52'),
(528, 'Balrampur', 23, '2024-07-18 06:04:52'),
(529, 'Bareilly', 23, '2024-07-18 06:04:52'),
(530, 'Basti', 23, '2024-07-18 06:04:52'),
(531, 'Bulandshahr', 23, '2024-07-18 06:04:52'),
(532, 'Chandauli', 23, '2024-07-18 06:04:52'),
(533, 'Chitrakoot', 23, '2024-07-18 06:04:52'),
(534, 'Deoria', 23, '2024-07-18 06:04:52'),
(535, 'Etah', 23, '2024-07-18 06:04:52'),
(536, 'Kanshiram Nagar', 23, '2024-07-18 06:04:52'),
(537, 'Etawah', 23, '2024-07-18 06:04:52'),
(538, 'Firozabad', 23, '2024-07-18 06:04:52'),
(539, 'Farrukhabad', 23, '2024-07-18 06:04:52'),
(540, 'Fatehpur', 23, '2024-07-18 06:04:52'),
(541, 'Faizabad', 23, '2024-07-18 06:04:52'),
(542, 'Gautam Buddha Nagar', 23, '2024-07-18 06:04:52'),
(543, 'Gonda', 23, '2024-07-18 06:04:52'),
(544, 'Ghazipur', 23, '2024-07-18 06:04:52'),
(545, 'Gorkakhpur', 23, '2024-07-18 06:04:52'),
(546, 'Ghaziabad', 23, '2024-07-18 06:04:52'),
(547, 'Hamirpur', 23, '2024-07-18 06:04:52'),
(548, 'Hardoi', 23, '2024-07-18 06:04:52'),
(549, 'Mahamaya Nagar', 23, '2024-07-18 06:04:52'),
(550, 'Jhansi', 23, '2024-07-18 06:04:52'),
(551, 'Jalaun', 23, '2024-07-18 06:04:52'),
(552, 'Jyotiba Phule Nagar', 23, '2024-07-18 06:04:52'),
(553, 'Jaunpur District', 23, '2024-07-18 06:04:52'),
(554, 'Kanpur Dehat', 23, '2024-07-18 06:04:52'),
(555, 'Kannauj', 23, '2024-07-18 06:04:52'),
(556, 'Kanpur Nagar', 23, '2024-07-18 06:04:52'),
(557, 'Kaushambi', 23, '2024-07-18 06:04:52'),
(558, 'Kushinagar', 23, '2024-07-18 06:04:52'),
(559, 'Lalitpur', 23, '2024-07-18 06:04:52'),
(560, 'Lakhimpur Kheri', 23, '2024-07-18 06:04:52'),
(561, 'Lucknow', 23, '2024-07-18 06:04:52'),
(562, 'Mau', 23, '2024-07-18 06:04:52'),
(563, 'Meerut', 23, '2024-07-18 06:04:52'),
(564, 'Maharajganj', 23, '2024-07-18 06:04:52'),
(565, 'Mahoba', 23, '2024-07-18 06:04:52'),
(566, 'Mirzapur', 23, '2024-07-18 06:04:52'),
(567, 'Moradabad', 23, '2024-07-18 06:04:52'),
(568, 'Mainpuri', 23, '2024-07-18 06:04:52'),
(569, 'Mathura', 23, '2024-07-18 06:04:52'),
(570, 'Muzaffarnagar', 23, '2024-07-18 06:04:52'),
(571, 'Pilibhit', 23, '2024-07-18 06:04:52'),
(572, 'Pratapgarh', 23, '2024-07-18 06:04:52'),
(573, 'Rampur', 23, '2024-07-18 06:04:52'),
(574, 'Rae Bareli', 23, '2024-07-18 06:04:52'),
(575, 'Saharanpur', 23, '2024-07-18 06:04:52'),
(576, 'Sitapur', 23, '2024-07-18 06:04:52'),
(577, 'Shahjahanpur', 23, '2024-07-18 06:04:52'),
(578, 'Sant Kabir Nagar', 23, '2024-07-18 06:04:52'),
(579, 'Siddharthnagar', 23, '2024-07-18 06:04:52'),
(580, 'Sonbhadra', 23, '2024-07-18 06:04:52'),
(581, 'Sant Ravidas Nagar', 23, '2024-07-18 06:04:52'),
(582, 'Sultanpur', 23, '2024-07-18 06:04:52'),
(583, 'Shravasti', 23, '2024-07-18 06:04:52'),
(584, 'Unnao', 23, '2024-07-18 06:04:52'),
(585, 'Varanasi', 23, '2024-07-18 06:04:52'),
(586, 'Birbhum', 24, '2024-07-18 06:04:52'),
(587, 'Bankura', 24, '2024-07-18 06:04:52'),
(588, 'Bardhaman', 24, '2024-07-18 06:04:52'),
(589, 'Darjeeling', 24, '2024-07-18 06:04:52'),
(590, 'Dakshin Dinajpur', 24, '2024-07-18 06:04:52'),
(591, 'Hooghly', 24, '2024-07-18 06:04:52'),
(592, 'Howrah', 24, '2024-07-18 06:04:52'),
(593, 'Jalpaiguri', 24, '2024-07-18 06:04:52'),
(594, 'Cooch Behar', 24, '2024-07-18 06:04:52'),
(595, 'Kolkata', 24, '2024-07-18 06:04:52'),
(596, 'Malda', 24, '2024-07-18 06:04:52'),
(597, 'Midnapore', 24, '2024-07-18 06:04:52'),
(598, 'Murshidabad', 24, '2024-07-18 06:04:52'),
(599, 'Nadia', 24, '2024-07-18 06:04:52'),
(600, 'North 24 Parganas', 24, '2024-07-18 06:04:52'),
(601, 'South 24 Parganas', 24, '2024-07-18 06:04:52'),
(602, 'Purulia', 24, '2024-07-18 06:04:52'),
(603, 'Uttar Dinajpur', 24, '2024-07-18 06:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `area` text NOT NULL,
  `medium` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `name`, `area`, `medium`, `status`, `creation_on`) VALUES
(8, 'Abhinav Balvikas Mandir', 'Indira Nagar, Nashik ', 'Primary- Marathi Medium ', 'Active', '2024-06-19 06:54:29'),
(9, 'New Maratha High School', 'KTHM Campus, Gangapur Road Nashik', 'Primary- Marathi Medium ', 'Active', '2024-06-19 06:55:25'),
(10, 'Abhinav Balvikas Mandir,', 'Gangapur Road , Nashik ', 'Primary- Marathi Medium ', 'Active', '2024-06-19 06:56:29'),
(11, 'Wagh Guruji Balshikshan Mandir ', 'Gangapur Road , Nashik ', 'Primary- Marathi Medium ', 'Active', '2024-06-19 06:56:50'),
(12, 'Abhinav Balvikas Mandir', 'Uttam Nagar, Cidco Nashik ', 'Primary- Marathi Medium ', 'Active', '2024-06-19 06:57:20'),
(13, 'Balshikshan Mandir', 'Primary- Marathi Medium ', 'Goreram Lane, Nashik ', 'Active', '2024-06-19 06:57:41'),
(14, 'Abhinav Balvikas Mandir', 'Niphad, Pimpalgaon Baswant, Nashik', 'Primary- Marathi Medium ', 'Active', '2024-06-19 06:58:31'),
(15, 'Abhinav Balvikas Mandir', 'Wakhari Road, Gunjalnagar, Deola', 'Primary- Marathi Medium ', 'Active', '2024-06-19 06:59:03'),
(16, 'Abhinav Balvikas Mandir', 'Primary- Marathi Medium ', 'Unnamed Road, Gamane Mala, Makhmalabad, Nashik', 'Active', '2024-06-19 06:59:40'),
(17, 'Abhinav Balvikas Mandir', 'Ozar, Dist: Nashik', 'Primary- Marathi Medium ', 'Active', '2024-06-19 07:00:17'),
(18, 'Horizon Academy (CBSE)', 'Near Chintamani Mangal Karyalay, Gangapur Road', 'Primary- English Medium ', 'Active', '2024-06-19 07:01:37'),
(19, 'Udoji Horizon Academy', 'Near Chintamani Mangal Karyalay, Gangapur Road, Nashik-422014', 'Primary- English Medium ', 'Active', '2024-06-19 07:02:05'),
(20, 'Horizon International Academy,', 'Ashwin Nagar, Cidco, Nashik-422009', 'Primary- English Medium ', 'Active', '2024-06-19 07:03:38'),
(21, 'Horizon Academy', 'Ozar, Dist: Nashik', 'Primary- English Medium ', 'Active', '2024-06-19 07:04:19'),
(22, 'Horizon Academy', 'Makhmalabad, Nashik ', 'Primary- English Medium ', 'Active', '2024-06-19 07:05:03'),
(23, 'Horizon Academy', 'Niphad, Dist. Nashik ', 'Primary- English Medium ', 'Active', '2024-06-19 07:05:41'),
(24, 'Horizon Academy', 'Sinner, Nashik ', 'Primary- English Medium ', 'Active', '2024-06-19 07:07:17'),
(25, 'Aadarsh English Medium School,', 'Sinnar,Gnagaves, Nashik', 'Primary- English Medium ', 'Active', '2024-06-19 07:07:48'),
(26, 'Aadarsh English Medium School', 'Dindori , Nashik', 'Primary- English Medium ', 'Active', '2024-06-19 07:08:29'),
(27, 'Sunrise English Medium School', 'Wadner, Nashik', 'Primary- English Medium ', 'Active', '2024-06-19 07:08:51'),
(28, 'Rajiv Gandhi International Senior Secondary School', 'Dabhadi, Tel: Malegaon Dist: Nashik ', 'Primary- English Medium ', 'Active', '2024-06-19 07:09:22'),
(29, 'Vardhaman High School', 'Near Ram Setu Pool, Malegaon, Nashik', 'Primary- English Medium ', 'Active', '2024-06-19 07:09:55'),
(30, 'Kakani Primary School', '162, Hakeem Ajmal, Wazir Khan Rd, Motipura, Malegaon', 'Primary- Marathi Medium ', 'Active', '2024-06-19 07:10:27'),
(31, 'Kakani Girls Highschool', '162, Hakeem Ajmal, Wazir Khan Rd, Motipura, Malegaon', 'Primary- Marathi Medium ', 'Active', '2024-06-19 07:11:02'),
(32, 'Kakani  Boys Highschool', '162, Hakeem Ajmal, Wazir Khan Rd, Motipura, Malegaon', 'Primary- Marathi Medium ', 'Active', '2024-06-19 07:11:35'),
(33, 'Spartan Learning Academy', 'Camp Road, Malegaon,Nashik ', 'Primary- English Medium ', 'Active', '2024-06-19 07:12:04'),
(34, 'The Santa Kids International School ', 'Camp Road, Malegaon,Nashik ', 'Primary- English Medium ', 'Active', '2024-06-19 07:12:30'),
(35, 'Vidya Vikas International School', 'Nilgavan, Malegaon, Nashik', 'Primary- English Medium ', 'Active', '2024-06-19 07:12:54'),
(36, 'J.A.T Girls Primary School', 'Imam Ahmed Raza Rd, Islampura, Malegaon,', 'Primary- English Medium ', 'Active', '2024-06-19 07:13:24'),
(37, 'Haroon Ansari Urdu School', 'Imam Ahmed Raza Rd, Islampura, Malegaon', 'Primary- English Medium ', 'Active', '2024-06-19 07:13:59'),
(38, 'Haroon Ansari English School', 'Imam Ahmed Raza Rd, Islampura, Malegaon', 'Primary- English Medium ', 'Active', '2024-06-19 07:14:30'),
(39, 'Zainab English Medium School', 'Imam Ahmed Raza Rd, Islampura, Malegaon,', 'Primary- English Medium ', 'Active', '2024-06-19 07:14:56'),
(40, '\"Chaitanya Valley International School', 'Karmad-Jalna Road, Aurangabad', 'Primary- English Medium ', 'Active', '2024-06-19 07:15:26'),
(41, 'Oracle International School', 'Matruchaya Banglow, Aazad Nager, Charholi Bk', 'Primary- English Medium ', 'Active', '2024-06-19 07:15:54'),
(42, 'Ganesh Vidhyalay', 'Kalyan ( W) ', 'Primary- English Medium ', 'Active', '2024-06-19 07:16:19'),
(43, 'Ideal English Medium School', 'Kalyan (E) ', 'Primary- English Medium ', 'Active', '2024-06-19 07:16:46'),
(44, 'HAP International School', 'Chh. Sambhaji Nagar', 'Primary & Secondary- English Medium ', 'Active', '2024-06-19 07:17:09'),
(45, 'Divine English Medium School', 'Satana, Nashik ', 'Primary & Secondary- English Medium ', 'Active', '2024-06-19 07:17:32'),
(46, 'Takshila English Medium School', 'Malegaon, Nashik', 'Primary & Secondary- English Medium ', 'Active', '2024-06-19 07:17:55'),
(47, 'Dyanganga English Medium School', 'Alandi, Pune', 'Primary & Secondary- English Medium ', 'Active', '2024-06-19 07:24:12'),
(51, 'tfhrtfg', 'grfgrgr', 'fgrfgff', 'Active', '2024-07-15 05:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int(11) NOT NULL,
  `countryCode` text NOT NULL,
  `name` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `countryCode`, `name`, `creation_on`) VALUES
(1, 'AD', 'Andorra', '2024-07-18 06:00:28'),
(2, 'AE', 'United Arab Emirates', '2024-07-18 06:00:28'),
(3, 'AF', 'Afghanistan', '2024-07-18 06:00:28'),
(4, 'AG', 'Antigua and Barbuda', '2024-07-18 06:00:28'),
(5, 'AI', 'Anguilla', '2024-07-18 06:00:28'),
(6, 'AL', 'Albania', '2024-07-18 06:00:28'),
(7, 'AM', 'Armenia', '2024-07-18 06:00:28'),
(8, 'AO', 'Angola', '2024-07-18 06:00:28'),
(9, 'AQ', 'Antarctica', '2024-07-18 06:00:28'),
(10, 'AR', 'Argentina', '2024-07-18 06:00:28'),
(11, 'AS', 'American Samoa', '2024-07-18 06:00:28'),
(12, 'AT', 'Austria', '2024-07-18 06:00:28'),
(13, 'AU', 'Australia', '2024-07-18 06:00:28'),
(14, 'AW', 'Aruba', '2024-07-18 06:00:28'),
(15, 'AX', 'Åland', '2024-07-18 06:00:28'),
(16, 'AZ', 'Azerbaijan', '2024-07-18 06:00:28'),
(17, 'BA', 'Bosnia and Herzegovina', '2024-07-18 06:00:28'),
(18, 'BB', 'Barbados', '2024-07-18 06:00:28'),
(19, 'BD', 'Bangladesh', '2024-07-18 06:00:28'),
(20, 'BE', 'Belgium', '2024-07-18 06:00:28'),
(21, 'BF', 'Burkina Faso', '2024-07-18 06:00:28'),
(22, 'BG', 'Bulgaria', '2024-07-18 06:00:28'),
(23, 'BH', 'Bahrain', '2024-07-18 06:00:28'),
(24, 'BI', 'Burundi', '2024-07-18 06:00:28'),
(25, 'BJ', 'Benin', '2024-07-18 06:00:28'),
(26, 'BL', 'Saint Barthélemy', '2024-07-18 06:00:28'),
(27, 'BM', 'Bermuda', '2024-07-18 06:00:28'),
(28, 'BN', 'Brunei', '2024-07-18 06:00:28'),
(29, 'BO', 'Bolivia', '2024-07-18 06:00:28'),
(30, 'BQ', 'Bonaire', '2024-07-18 06:00:28'),
(31, 'BR', 'Brazil', '2024-07-18 06:00:28'),
(32, 'BS', 'Bahamas', '2024-07-18 06:00:28'),
(33, 'BT', 'Bhutan', '2024-07-18 06:00:28'),
(34, 'BV', 'Bouvet Island', '2024-07-18 06:00:28'),
(35, 'BW', 'Botswana', '2024-07-18 06:00:28'),
(36, 'BY', 'Belarus', '2024-07-18 06:00:28'),
(37, 'BZ', 'Belize', '2024-07-18 06:00:28'),
(38, 'CA', 'Canada', '2024-07-18 06:00:28'),
(39, 'CC', 'Cocos [Keeling] Islands', '2024-07-18 06:00:28'),
(40, 'CD', 'Democratic Republic of the Congo', '2024-07-18 06:00:28'),
(41, 'CF', 'Central African Republic', '2024-07-18 06:00:28'),
(42, 'CG', 'Republic of the Congo', '2024-07-18 06:00:28'),
(43, 'CH', 'Switzerland', '2024-07-18 06:00:28'),
(44, 'CI', 'Ivory Coast', '2024-07-18 06:00:28'),
(45, 'CK', 'Cook Islands', '2024-07-18 06:00:28'),
(46, 'CL', 'Chile', '2024-07-18 06:00:28'),
(47, 'CM', 'Cameroon', '2024-07-18 06:00:28'),
(48, 'CN', 'China', '2024-07-18 06:00:28'),
(49, 'CO', 'Colombia', '2024-07-18 06:00:28'),
(50, 'CR', 'Costa Rica', '2024-07-18 06:00:28'),
(51, 'CU', 'Cuba', '2024-07-18 06:00:28'),
(52, 'CV', 'Cape Verde', '2024-07-18 06:00:28'),
(53, 'CW', 'Curacao', '2024-07-18 06:00:28'),
(54, 'CX', 'Christmas Island', '2024-07-18 06:00:28'),
(55, 'CY', 'Cyprus', '2024-07-18 06:00:28'),
(56, 'CZ', 'Czech Republic', '2024-07-18 06:00:28'),
(57, 'DE', 'Germany', '2024-07-18 06:00:28'),
(58, 'DJ', 'Djibouti', '2024-07-18 06:00:28'),
(59, 'DK', 'Denmark', '2024-07-18 06:00:28'),
(60, 'DM', 'Dominica', '2024-07-18 06:00:28'),
(61, 'DO', 'Dominican Republic', '2024-07-18 06:00:28'),
(62, 'DZ', 'Algeria', '2024-07-18 06:00:28'),
(63, 'EC', 'Ecuador', '2024-07-18 06:00:28'),
(64, 'EE', 'Estonia', '2024-07-18 06:00:28'),
(65, 'EG', 'Egypt', '2024-07-18 06:00:28'),
(66, 'EH', 'Western Sahara', '2024-07-18 06:00:28'),
(67, 'ER', 'Eritrea', '2024-07-18 06:00:28'),
(68, 'ES', 'Spain', '2024-07-18 06:00:28'),
(69, 'ET', 'Ethiopia', '2024-07-18 06:00:28'),
(70, 'FI', 'Finland', '2024-07-18 06:00:28'),
(71, 'FJ', 'Fiji', '2024-07-18 06:00:28'),
(72, 'FK', 'Falkland Islands', '2024-07-18 06:00:28'),
(73, 'FM', 'Micronesia', '2024-07-18 06:00:28'),
(74, 'FO', 'Faroe Islands', '2024-07-18 06:00:28'),
(75, 'FR', 'France', '2024-07-18 06:00:28'),
(76, 'GA', 'Gabon', '2024-07-18 06:00:28'),
(77, 'GB', 'United Kingdom', '2024-07-18 06:00:28'),
(78, 'GD', 'Grenada', '2024-07-18 06:00:28'),
(79, 'GE', 'Georgia', '2024-07-18 06:00:28'),
(80, 'GF', 'French Guiana', '2024-07-18 06:00:28'),
(81, 'GG', 'Guernsey', '2024-07-18 06:00:28'),
(82, 'GH', 'Ghana', '2024-07-18 06:00:28'),
(83, 'GI', 'Gibraltar', '2024-07-18 06:00:28'),
(84, 'GL', 'Greenland', '2024-07-18 06:00:28'),
(85, 'GM', 'Gambia', '2024-07-18 06:00:28'),
(86, 'GN', 'Guinea', '2024-07-18 06:00:28'),
(87, 'GP', 'Guadeloupe', '2024-07-18 06:00:28'),
(88, 'GQ', 'Equatorial Guinea', '2024-07-18 06:00:28'),
(89, 'GR', 'Greece', '2024-07-18 06:00:28'),
(90, 'GS', 'South Georgia and the South Sandwich Islands', '2024-07-18 06:00:28'),
(91, 'GT', 'Guatemala', '2024-07-18 06:00:28'),
(92, 'GU', 'Guam', '2024-07-18 06:00:28'),
(93, 'GW', 'Guinea-Bissau', '2024-07-18 06:00:28'),
(94, 'GY', 'Guyana', '2024-07-18 06:00:28'),
(95, 'HK', 'Hong Kong', '2024-07-18 06:00:28'),
(96, 'HM', 'Heard Island and McDonald Islands', '2024-07-18 06:00:28'),
(97, 'HN', 'Honduras', '2024-07-18 06:00:28'),
(98, 'HR', 'Croatia', '2024-07-18 06:00:28'),
(99, 'HT', 'Haiti', '2024-07-18 06:00:28'),
(100, 'HU', 'Hungary', '2024-07-18 06:00:28'),
(101, 'ID', 'Indonesia', '2024-07-18 06:00:28'),
(102, 'IE', 'Ireland', '2024-07-18 06:00:28'),
(103, 'IL', 'Israel', '2024-07-18 06:00:28'),
(104, 'IM', 'Isle of Man', '2024-07-18 06:00:28'),
(105, 'IN', 'India', '2024-07-18 06:00:28'),
(106, 'IO', 'British Indian Ocean Territory', '2024-07-18 06:00:28'),
(107, 'IQ', 'Iraq', '2024-07-18 06:00:28'),
(108, 'IR', 'Iran', '2024-07-18 06:00:28'),
(109, 'IS', 'Iceland', '2024-07-18 06:00:28'),
(110, 'IT', 'Italy', '2024-07-18 06:00:28'),
(111, 'JE', 'Jersey', '2024-07-18 06:00:28'),
(112, 'JM', 'Jamaica', '2024-07-18 06:00:28'),
(113, 'JO', 'Jordan', '2024-07-18 06:00:28'),
(114, 'JP', 'Japan', '2024-07-18 06:00:28'),
(115, 'KE', 'Kenya', '2024-07-18 06:00:28'),
(116, 'KG', 'Kyrgyzstan', '2024-07-18 06:00:28'),
(117, 'KH', 'Cambodia', '2024-07-18 06:00:28'),
(118, 'KI', 'Kiribati', '2024-07-18 06:00:28'),
(119, 'KM', 'Comoros', '2024-07-18 06:00:28'),
(120, 'KN', 'Saint Kitts and Nevis', '2024-07-18 06:00:28'),
(121, 'KP', 'North Korea', '2024-07-18 06:00:28'),
(122, 'KR', 'South Korea', '2024-07-18 06:00:28'),
(123, 'KW', 'Kuwait', '2024-07-18 06:00:28'),
(124, 'KY', 'Cayman Islands', '2024-07-18 06:00:28'),
(125, 'KZ', 'Kazakhstan', '2024-07-18 06:00:28'),
(126, 'LA', 'Laos', '2024-07-18 06:00:28'),
(127, 'LB', 'Lebanon', '2024-07-18 06:00:28'),
(128, 'LC', 'Saint Lucia', '2024-07-18 06:00:28'),
(129, 'LI', 'Liechtenstein', '2024-07-18 06:00:28'),
(130, 'LK', 'Sri Lanka', '2024-07-18 06:00:28'),
(131, 'LR', 'Liberia', '2024-07-18 06:00:28'),
(132, 'LS', 'Lesotho', '2024-07-18 06:00:28'),
(133, 'LT', 'Lithuania', '2024-07-18 06:00:28'),
(134, 'LU', 'Luxembourg', '2024-07-18 06:00:28'),
(135, 'LV', 'Latvia', '2024-07-18 06:00:28'),
(136, 'LY', 'Libya', '2024-07-18 06:00:28'),
(137, 'MA', 'Morocco', '2024-07-18 06:00:28'),
(138, 'MC', 'Monaco', '2024-07-18 06:00:28'),
(139, 'MD', 'Moldova', '2024-07-18 06:00:28'),
(140, 'ME', 'Montenegro', '2024-07-18 06:00:28'),
(141, 'MF', 'Saint Martin', '2024-07-18 06:00:28'),
(142, 'MG', 'Madagascar', '2024-07-18 06:00:28'),
(143, 'MH', 'Marshall Islands', '2024-07-18 06:00:28'),
(144, 'MK', 'Macedonia', '2024-07-18 06:00:28'),
(145, 'ML', 'Mali', '2024-07-18 06:00:28'),
(146, 'MM', 'Myanmar [Burma]', '2024-07-18 06:00:28'),
(147, 'MN', 'Mongolia', '2024-07-18 06:00:28'),
(148, 'MO', 'Macao', '2024-07-18 06:00:28'),
(149, 'MP', 'Northern Mariana Islands', '2024-07-18 06:00:28'),
(150, 'MQ', 'Martinique', '2024-07-18 06:00:28'),
(151, 'MR', 'Mauritania', '2024-07-18 06:00:28'),
(152, 'MS', 'Montserrat', '2024-07-18 06:00:28'),
(153, 'MT', 'Malta', '2024-07-18 06:00:28'),
(154, 'MU', 'Mauritius', '2024-07-18 06:00:28'),
(155, 'MV', 'Maldives', '2024-07-18 06:00:28'),
(156, 'MW', 'Malawi', '2024-07-18 06:00:28'),
(157, 'MX', 'Mexico', '2024-07-18 06:00:28'),
(158, 'MY', 'Malaysia', '2024-07-18 06:00:28'),
(159, 'MZ', 'Mozambique', '2024-07-18 06:00:28'),
(160, 'NA', 'Namibia', '2024-07-18 06:00:28'),
(161, 'NC', 'New Caledonia', '2024-07-18 06:00:28'),
(162, 'NE', 'Niger', '2024-07-18 06:00:28'),
(163, 'NF', 'Norfolk Island', '2024-07-18 06:00:28'),
(164, 'NG', 'Nigeria', '2024-07-18 06:00:28'),
(165, 'NI', 'Nicaragua', '2024-07-18 06:00:28'),
(166, 'NL', 'Netherlands', '2024-07-18 06:00:28'),
(167, 'NO', 'Norway', '2024-07-18 06:00:28'),
(168, 'NP', 'Nepal', '2024-07-18 06:00:28'),
(169, 'NR', 'Nauru', '2024-07-18 06:00:28'),
(170, 'NU', 'Niue', '2024-07-18 06:00:28'),
(171, 'NZ', 'New Zealand', '2024-07-18 06:00:28'),
(172, 'OM', 'Oman', '2024-07-18 06:00:28'),
(173, 'PA', 'Panama', '2024-07-18 06:00:28'),
(174, 'PE', 'Peru', '2024-07-18 06:00:28'),
(175, 'PF', 'French Polynesia', '2024-07-18 06:00:28'),
(176, 'PG', 'Papua New Guinea', '2024-07-18 06:00:28'),
(177, 'PH', 'Philippines', '2024-07-18 06:00:28'),
(178, 'PK', 'Pakistan', '2024-07-18 06:00:28'),
(179, 'PL', 'Poland', '2024-07-18 06:00:28'),
(180, 'PM', 'Saint Pierre and Miquelon', '2024-07-18 06:00:28'),
(181, 'PN', 'Pitcairn Islands', '2024-07-18 06:00:28'),
(182, 'PR', 'Puerto Rico', '2024-07-18 06:00:28'),
(183, 'PS', 'Palestine', '2024-07-18 06:00:28'),
(184, 'PT', 'Portugal', '2024-07-18 06:00:28'),
(185, 'PW', 'Palau', '2024-07-18 06:00:28'),
(186, 'PY', 'Paraguay', '2024-07-18 06:00:28'),
(187, 'QA', 'Qatar', '2024-07-18 06:00:28'),
(188, 'RE', 'Réunion', '2024-07-18 06:00:28'),
(189, 'RO', 'Romania', '2024-07-18 06:00:28'),
(190, 'RS', 'Serbia', '2024-07-18 06:00:28'),
(191, 'RU', 'Russia', '2024-07-18 06:00:28'),
(192, 'RW', 'Rwanda', '2024-07-18 06:00:28'),
(193, 'SA', 'Saudi Arabia', '2024-07-18 06:00:28'),
(194, 'SB', 'Solomon Islands', '2024-07-18 06:00:28'),
(195, 'SC', 'Seychelles', '2024-07-18 06:00:28'),
(196, 'SD', 'Sudan', '2024-07-18 06:00:28'),
(197, 'SE', 'Sweden', '2024-07-18 06:00:28'),
(198, 'SG', 'Singapore', '2024-07-18 06:00:28'),
(199, 'SH', 'Saint Helena', '2024-07-18 06:00:28'),
(200, 'SI', 'Slovenia', '2024-07-18 06:00:28'),
(201, 'SJ', 'Svalbard and Jan Mayen', '2024-07-18 06:00:28'),
(202, 'SK', 'Slovakia', '2024-07-18 06:00:28'),
(203, 'SL', 'Sierra Leone', '2024-07-18 06:00:28'),
(204, 'SM', 'San Marino', '2024-07-18 06:00:28'),
(205, 'SN', 'Senegal', '2024-07-18 06:00:28'),
(206, 'SO', 'Somalia', '2024-07-18 06:00:28'),
(207, 'SR', 'Suriname', '2024-07-18 06:00:28'),
(208, 'SS', 'South Sudan', '2024-07-18 06:00:28'),
(209, 'ST', 'São Tomé and Príncipe', '2024-07-18 06:00:28'),
(210, 'SV', 'El Salvador', '2024-07-18 06:00:28'),
(211, 'SX', 'Sint Maarten', '2024-07-18 06:00:28'),
(212, 'SY', 'Syria', '2024-07-18 06:00:28'),
(213, 'SZ', 'Swaziland', '2024-07-18 06:00:28'),
(214, 'TC', 'Turks and Caicos Islands', '2024-07-18 06:00:28'),
(215, 'TD', 'Chad', '2024-07-18 06:00:28'),
(216, 'TF', 'French Southern Territories', '2024-07-18 06:00:28'),
(217, 'TG', 'Togo', '2024-07-18 06:00:28'),
(218, 'TH', 'Thailand', '2024-07-18 06:00:28'),
(219, 'TJ', 'Tajikistan', '2024-07-18 06:00:28'),
(220, 'TK', 'Tokelau', '2024-07-18 06:00:28'),
(221, 'TL', 'East Timor', '2024-07-18 06:00:28'),
(222, 'TM', 'Turkmenistan', '2024-07-18 06:00:28'),
(223, 'TN', 'Tunisia', '2024-07-18 06:00:28'),
(224, 'TO', 'Tonga', '2024-07-18 06:00:28'),
(225, 'TR', 'Turkey', '2024-07-18 06:00:28'),
(226, 'TT', 'Trinidad and Tobago', '2024-07-18 06:00:28'),
(227, 'TV', 'Tuvalu', '2024-07-18 06:00:28'),
(228, 'TW', 'Taiwan', '2024-07-18 06:00:28'),
(229, 'TZ', 'Tanzania', '2024-07-18 06:00:28'),
(230, 'UA', 'Ukraine', '2024-07-18 06:00:28'),
(231, 'UG', 'Uganda', '2024-07-18 06:00:28'),
(232, 'UM', 'U.S. Minor Outlying Islands', '2024-07-18 06:00:28'),
(233, 'US', 'United States', '2024-07-18 06:00:28'),
(234, 'UY', 'Uruguay', '2024-07-18 06:00:28'),
(235, 'UZ', 'Uzbekistan', '2024-07-18 06:00:28'),
(236, 'VA', 'Vatican City', '2024-07-18 06:00:28'),
(237, 'VC', 'Saint Vincent and the Grenadines', '2024-07-18 06:00:28'),
(238, 'VE', 'Venezuela', '2024-07-18 06:00:28'),
(239, 'VG', 'British Virgin Islands', '2024-07-18 06:00:28'),
(240, 'VI', 'U.S. Virgin Islands', '2024-07-18 06:00:28'),
(241, 'VN', 'Vietnam', '2024-07-18 06:00:28'),
(242, 'VU', 'Vanuatu', '2024-07-18 06:00:28'),
(243, 'WF', 'Wallis and Futuna', '2024-07-18 06:00:28'),
(244, 'WS', 'Samoa', '2024-07-18 06:00:28'),
(245, 'XK', 'Kosovo', '2024-07-18 06:00:28'),
(246, 'YE', 'Yemen', '2024-07-18 06:00:28'),
(247, 'YT', 'Mayotte', '2024-07-18 06:00:28'),
(248, 'ZA', 'South Africa', '2024-07-18 06:00:28'),
(249, 'ZM', 'Zambia', '2024-07-18 06:00:28'),
(250, 'ZW', 'Zimbabwe', '2024-07-18 06:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cource_detail`
--

CREATE TABLE `tbl_cource_detail` (
  `id` int(11) NOT NULL,
  `contain` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `banner` text NOT NULL,
  `c_image` text DEFAULT NULL,
  `name` text NOT NULL,
  `contain` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `image`, `banner`, `c_image`, `name`, `contain`, `status`, `creation_on`) VALUES
(2, '873295.png', '69646.png', '437241.png', 'Abacus', '<div class=\"py-4\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; padding-top: 1.5rem !important; padding-bottom: 1.5rem !important;\">\r\n<h4 class=\"main-heading\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 18px; color: rgb(34, 34, 34);\">Abacus Mental Arithmetic Math Skills &amp; Brain Development Program for the Age of 4 to 15&nbsp;Years Child</h4>\r\n</div>\r\n\r\n<h3 class=\"mh1\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.25rem; color: rgb(0, 38, 151); font-family: Poppins, sans-serif;\">WHAT IS ABACUS ?</h3>\r\n\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px;\">An abacus is a centuries old tool, made up movable beads. On this tool, user can add, subtract, multiply and divide numbers and gradually users start to visualize this tools in mind, and do mental calculation.</p>\r\n', 'Active', '2024-06-14 05:10:45'),
(3, '703979.png', '131616.png', '619969.png', 'Vedic Math', '<h4 class=\"main-heading\">(Eligibility: From 13th to all age groups)</h4>\r\n\r\n<h3 class=\"mh1\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.25rem; color: rgb(0, 38, 151); font-family: Poppins, sans-serif;\">WHAT IS VEDIC MATH&#39;S ?</h3>\r\n\r\n<p>Vedic Mathermatics is a system of mathematics that was discovered or compiled by Indian mathermatidan and scholar Bharat Krishna Tirthaji Maharaj in the early 20th century The Vedic Mathematics system consists of a set of 16 sutras and 13 sub-sutras (further corollaries to the main sutas). These sutras cover various mathematical operations such as addition, subtraction, multiplication, division, square roots, cube roots, and more. The system is known for its simplicity, efficiency, and flexibility in solving complexmathematical problems quickly.</p>\r\n\r\n<p><strong>Course Duration: </strong><strong>1 Month (Weekly 5 Hours)</strong></p>\r\n', 'Active', '2024-06-14 08:37:53'),
(4, '915655.png', '948750.png', '185988.png', 'Rubik Cube', '<div class=\"py-4\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, sans-serif; font-size: 16px; padding-top: 1.5rem !important; padding-bottom: 1.5rem !important;\">\r\n<h4 class=\"main-heading\" style=\"line-height: 1.2; box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 18px; color: rgb(34, 34, 34);\"><strong><span background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" color:=\"\" lang=\"EN-IN\" style=\"font-size: 13pt; line-height: 107%; font-family: Arial, \">Eligibility: From 1<sup>st </sup>Std. &amp; Above all age groups</span></strong></h4>\r\n\r\n<p><strong>Course Duration: </strong>1 Month (Weekly 2 Hours)</p>\r\n\r\n<h3 class=\"mh1\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.25rem; color: rgb(0, 38, 151); font-family: Poppins, sans-serif;\">WHAT IS RUBIK&#39;S CUBE&nbsp;?</h3>\r\n\r\n<p>The Rubik&#39;s Cube is a 3-D combination puzzle invented in 1974 by Hungarian sculptor and professor of architecture Ern? Rubik. Originally called the Magic Cube, the puzzle was licensed by Rubik to be sold by Ideal Toy Corp. in 1980 via businessman Tibor Laczi and Seven Towns founder Tom Kremer.</p>\r\n</div>\r\n', 'Active', '2024-06-14 08:39:29'),
(5, '94002.png', '755867.png', '660705.png', 'Handwriting Improvement', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>The handwriting course is divided into two parts, Basic &amp; Advanced</strong><br />\r\n<span><strong><span class=\"text-danger \" style=\"color: #be3e7b;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Eligibility : </span></strong> 6 to 14 year&rsquo;s Students</span><br />\r\n<span><strong><span class=\"text-danger \" style=\"color: #be3e7b;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Course Duration : </span></strong> 6 Month (Weekly 2 Hours)</span></p>\r\n\r\n<div><span><strong><span class=\"mh4 \" style=\"color: #002697;\">Marathi Handwriting-Basic Course : </span></strong> (1 Month Weekly 2 Hours)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class=\"mh4 \" style=\"color: rgb(0, 38, 151);\"><strong>Marathi Handwriting-Advance Course</strong>&nbsp;:&nbsp;</span>(1 Month Weekly 2 Hours)<br />\r\n<span><strong><span class=\"mh4 \" style=\"color: #002697;\">English Handwriting-Basic Course : </span></strong> (1 Month Weekly 2 Hours)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><strong><span class=\"mh4 \" style=\"color: rgb(0, 38, 151);\">English Handwriting-Advance Course :&nbsp;</span></strong>(1 Month Weekly 2 Hours)<br />\r\n<span><strong><span class=\"mh4 \" style=\"color: #002697;\">Cursive Writing-Basic Course : </span></strong> (1 Month Weekly 2 Hours)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><strong><span class=\"mh4 \" style=\"color: rgb(0, 38, 151);\">Cursive Writing-Advance Course :&nbsp;</span></strong>(1 Month Weekly 2 Hours)<br />\r\n&nbsp;</div>\r\n', 'Active', '2024-06-14 08:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_type`
--

CREATE TABLE `tbl_course_type` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_course_type`
--

INSERT INTO `tbl_course_type` (`id`, `c_id`, `name`, `description`, `creation_on`) VALUES
(3, 2, 'ABACUS (Age Group 4-14 Years)', 'The Total Course completed in 8 Levels, and the course syllabus developed in three parts which are Basic, Advance & Master Course.', '2024-06-14 08:46:58'),
(5, 2, '', '', '2024-06-14 08:53:27'),
(6, 2, '1.Basic Course: (Jr. Kg, Sr. Kg / 1st 2nd Std.)', 'Beginner, Elementary, Intermediate Levels are covered in the basic course program, each level is to 3 to 4 months depending on the class timing and the syllabus to be covered. After completing each level an examination is conducted and the student is given the next level course', '2024-06-14 08:54:17'),
(7, 2, ' 2.Advance Course: (1st to 4th Std.)', '1st Level, 2nd Level & 3rd Level are covered in the Advance course program, each level is to 2 to 3 months depending on the class timing and the syllabus to be covered. After completing each level an examination is conducted and the student is given the next level course.', '2024-06-14 08:55:38'),
(8, 2, '3.Master Course: (5th, 6th Std.)', '4th Level, 5th Level & 6th Level are covered in the Master course program, each level is to 2 to 3 months depending on the class timing and the syllabus to be covered. After completing each level an examination is conducted and the student is given the next level course.', '2024-06-14 08:56:41'),
(9, 3, 'Benefits of Vedic Math’s: ', 'Vedic Maths helps in building speed and accuracy in calculations which are based on addition, subtraction, multiplication, division, square, roots and higher calculations.', '2024-06-14 10:11:46'),
(11, 3, '1.Speed and accuracy:', 'Vedic Mathematics techniques enable students to perform calculations quickly and accurately. This can be particularly useful in competitive exams and real-life situations where mental math skills are important.', '2024-06-14 10:13:19'),
(12, 3, '2.Improve math calculation speed: ', 'Using Vedic Math’s sticks students can make any table within some seconds & can do fast addition / subtraction, multiplication, division (both-Above & Below base number) and squaring a two / three-digit numbers.', '2024-06-17 09:52:32'),
(13, 3, '3.Enhances mental math skills: ', 'Vedic Mathematics encourages students to use mental calculations rather than relying on paper and pencil. This improves mental math skills and enhances cognitive abilities.', '2024-06-17 09:52:55'),
(14, 3, '4.Improves problem-solving skills: ', 'Vedic Mathematics provides versatile techniques for solving mathematical problems, making it easier for students to approach and solve complex problems effectively.', '2024-06-17 09:53:19'),
(16, 4, 'Benefits of solving Rubik’s Cube :', '', '2024-06-17 10:08:29'),
(17, 4, '1.Enhances Problem-Solving Skills:', 'Solving the Rubik\'s Cube involves breaking down complex patterns and algorithms into smaller, manageable steps, which can help improve students\' problem-solving skills.', '2024-06-17 10:08:51'),
(18, 4, '2.Increases Logical Thinking:', 'Solving the Rubik\'s Cube requires students to think logically and strategically to solve the puzzle, helping them develop critical thinking and analytical skills.', '2024-06-17 10:09:27'),
(19, 4, '3.Boosts Patience and Perseverance: ', 'Solving the Rubik\'s Cube can be challenging and may require multiple attempts, encouraging students to develop patience, persistence, and resilience in the face of difficulties.', '2024-06-17 10:09:55'),
(24, 5, 'Benefits of Handwriting Course :', '', '2024-06-17 11:01:06'),
(26, 5, '1.Supports Academic Success: ', 'Good handwriting is essential for academic success, as it helps students take notes more effectively, complete assignments neatly, and communicate their ideas clearly.', '2024-06-17 11:01:43'),
(27, 5, '2.Cognitive Development:', 'Writing by hand is a complex task that engages multiple parts of the brain, helping to improve cognitive skills such as memory, attention, and problem-solving.', '2024-06-17 11:02:04'),
(28, 5, '3.Better Hand-Eye Coordination:', 'Practicing handwriting improves hand-eye coordination, which is important for tasks that require precision and accuracy.', '2024-06-17 11:02:21'),
(29, 5, '4.Good hand-writing gives good marks and grade in the exams.', '', '2024-06-17 11:02:44'),
(30, 5, '5.Good hand-writing helps to increases positivity and creative thinking', '', '2024-06-17 11:02:54'),
(31, 5, '', 'Overall, handwriting classes provide a range of benefits that can help kids develop important skills, boost their confidence, and support their academic success.', '2024-06-17 11:03:02'),
(32, 4, '4.Enhance Brain, Eye-Hand coordination and reflexes.', '', '2024-07-04 05:08:26'),
(33, 4, '5.Removing phobia of watching television and mobile phone.', '', '2024-07-04 05:08:36'),
(34, 4, '', 'Overall, solving the Rubik\'s Cube can be a fun and challenging activity that offers numerous cognitive, emotional, and developmental benefits for students of all ages. It can help improve their mathematical abilities, problem-solving skills, memory, concentration, and overall cognitive function, making it a valuable educational tool for students.', '2024-07-04 05:08:55'),
(35, 9, 'dsas', 'asasasa', '2024-07-13 07:07:40'),
(36, 10, 'benifit', 'avgfsg', '2024-07-13 11:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_c_img`
--

CREATE TABLE `tbl_c_img` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_c_img`
--

INSERT INTO `tbl_c_img` (`id`, `c_id`, `image`, `creation_on`) VALUES
(15, 2, '717112.png', '2024-06-14 06:29:34'),
(16, 3, '965403.png', '2024-06-14 09:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_c_video`
--

CREATE TABLE `tbl_c_video` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `video_url` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_c_video`
--

INSERT INTO `tbl_c_video` (`id`, `c_id`, `video_url`, `creation_on`, `updation_on`) VALUES
(1, 0, 'https://youtu.be/JRKk7gxcpMc', '2024-06-14 07:37:00', ''),
(2, 0, 'https://youtu.be/JRKk7gxcpMc', '2024-06-14 07:37:27', ''),
(3, 0, 'https://youtu.be/JRKk7gxcpMc', '2024-06-14 07:37:50', ''),
(4, 0, 'https://youtu.be/JRKk7gxcpMc', '2024-06-14 07:45:21', ''),
(10, 3, 'https://www.youtube.com/embed/BI1-BEccV84?si=AcX_ZvMrmmUNFbjX', '2024-06-17 09:57:03', ''),
(11, 3, 'https://www.youtube.com/embed/3mOUcClBLcM?si=KxiUJwGe86RR5w1T\"', '2024-06-17 09:58:06', ''),
(12, 3, 'https://www.youtube.com/embed/Pje1b6-rMUE?si=NaFsGXKGIL0d5WeT', '2024-06-17 09:58:54', ''),
(13, 4, 'https://www.youtube.com/embed/3mOUcClBLcM?si=ni7sLNKV6XQ48Dtk', '2024-06-17 10:15:48', ''),
(14, 5, 'https://www.youtube.com/embed/cttWMICOplQ?si=VR1vgLBgzYuQzEjm', '2024-06-17 11:05:14', ''),
(15, 9, 'https://www.youtube.com/embed/J59lSgUl1vY?si=L8pMmKZyVi30YIA1', '2024-07-13 07:08:47', ''),
(16, 10, 'https://www.youtube.com/embed/73Uwf9khb9c?si=5qs4iwW8xYaU-Tjf', '2024-07-13 11:13:12', ''),
(18, 2, 'https://www.youtube.com/embed/CQ-0xIn5W4k?si=kVGnEXWUnjJNDyYG\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', '2024-07-27 10:07:26', ''),
(19, 2, 'https://www.youtube.com/embed/BI1-BEccV84?si=xfygV5p6hEJeUh7G\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', '2024-07-27 10:09:14', ''),
(20, 2, 'https://www.youtube.com/embed/BvHQoUCrasU?si=uHP-XFBIzIZU2t7y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', '2024-07-27 10:10:39', ''),
(21, 2, 'https://www.youtube.com/embed/Pje1b6-rMUE?si=nmb-4pBvPCXd-SdF\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', '2024-07-27 10:11:56', ''),
(22, 2, 'https://www.youtube.com/embed/Zz8OidJqZQ8?si=Y2x_9_TAhpmUXs9t\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', '2024-07-27 10:13:16', ''),
(23, 2, 'https://www.youtube.com/embed/Zz8OidJqZQ8?si=Y2x_9_TAhpmUXs9t\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', '2024-07-27 10:22:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `image`, `name`, `status`, `creation_on`) VALUES
(5, '161198.jpg', 'Abacus 7th State Level Competition 2024', '', '2024-06-29 09:25:12'),
(6, '386618.jpg', 'IG- Franchisee Authorization Ceremony_ Annual Program 2024', '', '2024-06-29 09:30:57'),
(7, '572166.JPG', 'Abacus 6th State Level Competition 2023', '', '2024-06-29 09:36:57'),
(8, '890638.jpg', 'I-Genius Abacus Mental Arithmetic 6th National Level Competition 2023 Hyderabad', '', '2024-06-29 09:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_details`
--

CREATE TABLE `tbl_event_details` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_event_details`
--

INSERT INTO `tbl_event_details` (`id`, `event_id`, `image`, `creation_on`) VALUES
(1, 1, '862418.png', '2024-06-26 06:20:56'),
(2, 0, '996920.png', '2024-06-26 06:21:41'),
(4, 3, '31.png', '2024-06-26 06:23:40'),
(5, 3, '454372.jpeg', '2024-06-26 06:23:45'),
(6, 3, '217412.jpg', '2024-06-26 06:24:34'),
(7, 3, '865935.jpeg', '2024-06-26 06:24:39'),
(8, 3, '544887.jpeg', '2024-06-26 06:25:51'),
(9, 3, '834674.jpeg', '2024-06-26 06:27:00'),
(10, 3, '868537.jpg', '2024-06-26 06:27:05'),
(11, 3, '802946.png', '2024-06-26 06:27:16'),
(12, 3, '755979.png', '2024-06-26 06:29:28'),
(13, 3, '727270.jpg', '2024-06-26 06:29:34'),
(14, 3, '713739.jpg', '2024-06-26 06:30:14'),
(15, 3, '427540.jpg', '2024-06-26 06:32:00'),
(16, 3, '711311.jpg', '2024-06-26 06:32:12'),
(18, 5, '533332.JPG', '2024-06-29 09:27:16'),
(19, 5, '981129.JPG', '2024-06-29 09:27:27'),
(20, 5, '848739.JPG', '2024-06-29 09:27:37'),
(21, 5, '204634.JPG', '2024-06-29 09:27:48'),
(22, 5, '13371.JPG', '2024-06-29 09:27:59'),
(23, 5, '216285.JPG', '2024-06-29 09:28:14'),
(24, 5, '158135.JPG', '2024-06-29 09:28:32'),
(25, 5, '675177.JPG', '2024-06-29 09:28:45'),
(26, 5, '406364.JPG', '2024-06-29 09:28:57'),
(27, 5, '344813.JPG', '2024-06-29 09:29:08'),
(28, 5, '609037.jpg', '2024-06-29 09:29:21'),
(29, 5, '662886.jpg', '2024-06-29 09:29:30'),
(30, 5, '209594.jpg', '2024-06-29 09:29:41'),
(31, 5, '517204.jpg', '2024-06-29 09:29:50'),
(32, 5, '534969.jpg', '2024-06-29 09:30:01'),
(33, 5, '804078.jpg', '2024-06-29 09:30:15'),
(34, 6, '815232.jpg', '2024-06-29 09:31:19'),
(35, 6, '192108.jpg', '2024-06-29 09:31:26'),
(36, 6, '912839.jpg', '2024-06-29 09:31:34'),
(37, 6, '765500.jpg', '2024-06-29 09:31:46'),
(38, 6, '726054.jpg', '2024-06-29 09:31:52'),
(39, 6, '41187.jpg', '2024-06-29 09:32:22'),
(40, 6, '469896.jpg', '2024-06-29 09:32:54'),
(41, 6, '802379.jpg', '2024-06-29 09:33:01'),
(42, 6, '159901.jpg', '2024-06-29 09:33:12'),
(43, 6, '270503.jpg', '2024-06-29 09:33:20'),
(44, 6, '232411.jpg', '2024-06-29 09:33:32'),
(45, 6, '705509.jpg', '2024-06-29 09:34:00'),
(46, 6, '187112.jpg', '2024-06-29 09:34:15'),
(47, 6, '972291.jpg', '2024-06-29 09:34:26'),
(48, 6, '724678.jpg', '2024-06-29 09:34:37'),
(49, 6, '289797.jpg', '2024-06-29 09:34:46'),
(50, 7, '726630.JPG', '2024-06-29 09:37:12'),
(51, 7, '902039.JPG', '2024-06-29 09:37:22'),
(52, 7, '422001.JPG', '2024-06-29 09:37:30'),
(53, 7, '65160.JPG', '2024-06-29 09:37:39'),
(54, 7, '854906.jpg', '2024-06-29 09:37:48'),
(55, 7, '994866.jpg', '2024-06-29 09:37:57'),
(56, 7, '842535.jpg', '2024-06-29 09:38:05'),
(57, 8, '506374.jpg', '2024-06-29 09:39:13'),
(58, 8, '639243.jpg', '2024-06-29 09:39:21'),
(59, 8, '846543.jpg', '2024-06-29 09:39:30'),
(60, 8, '914152.jpg', '2024-06-29 09:39:39'),
(61, 8, '114841.jpg', '2024-06-29 09:39:47'),
(62, 8, '499457.jpg', '2024-06-29 09:39:57'),
(63, 8, '733967.jpg', '2024-06-29 09:40:10'),
(64, 8, '488571.jpg', '2024-06-29 09:40:18'),
(65, 8, '138079.jpg', '2024-06-29 09:40:30'),
(66, 8, '119730.jpg', '2024-06-29 09:40:40'),
(67, 8, '907142.jpg', '2024-06-29 09:40:49'),
(68, 8, '466185.jpg', '2024-06-29 09:40:59'),
(69, 8, '99225.jpg', '2024-06-29 09:41:13'),
(70, 8, '117956.jpg', '2024-06-29 09:41:24'),
(71, 8, '444740.jpg', '2024-06-29 09:41:34'),
(72, 9, '854929.png', '2024-07-04 04:33:48'),
(73, 11, '676944.png', '2024-07-13 11:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_franchies_enquiry`
--

CREATE TABLE `tbl_franchies_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_franchies_enquiry`
--

INSERT INTO `tbl_franchies_enquiry` (`id`, `name`, `email`, `mobile`, `address`, `message`, `created_on`, `updated_on`) VALUES
(1, 'Namrata', 'namratayevale7@gmail.com', '9022645448', 'Nashik', 'Hello', '2024-08-01 06:26:19', '2024-08-01 06:26:19'),
(2, 'Namrata', 'namratayevale7@gmail.com', '9022645448', 'Nashik', 'hello', '2024-08-01 06:27:39', '2024-08-01 06:27:39'),
(3, 'Dipak Shimpi', 'dipakshimpi9604@gmail.com', '9604090082', 'Nashik', 'Testing', '2024-08-01 06:28:59', '2024-08-01 06:28:59'),
(4, 'Namrata', 'namratayevale7@gmail.com', '9022645448', 'NGHU', 'HIO', '2024-08-03 05:42:43', '2024-08-03 05:42:43'),
(5, 'Dipak Shimpi', 'dipakshimpi9604@gmail.com', '9404001941', 'Nashik', 'Testing', '2024-08-03 06:37:39', '2024-08-03 06:37:39'),
(6, 'Namrata', 'namratayevale7@gmail.com', '9022645448', 'nashik', 'heo', '2024-08-03 06:44:15', '2024-08-03 06:44:15'),
(7, 'Namrata', 'namratayevale7@gmail.com', '9022645448', 'nsk', 'hii', '2024-08-03 06:49:33', '2024-08-03 06:49:33'),
(8, 'Namrata', 'namratayevale7@gmail.com', '9022645448', 'nsk', 'hii', '2024-08-03 07:29:59', '2024-08-03 07:29:59'),
(9, 'Randivey3@gmail.com', 'Randivey3@gmail.com', '8424888787', 'Sutar Building, Gavanpada, Mulund (W)', '', '2024-08-09 09:42:58', '2024-08-09 09:42:58'),
(10, 'Dipak Shimpi', 'dipakshimpi9604@gmail.com', '9404001941', 'Nashik', 'Testing Rich Sol', '2024-08-21 09:48:19', '2024-08-21 09:48:19'),
(11, 'Dipak Shimpi', 'dipakshimpi9604@gmail.com', '9404001941', 'Nashik', 'Testing Event', '2024-08-22 07:29:54', '2024-08-22 07:29:54'),
(12, 'Yogesh', 'namratayevale7@gmail.com', '9022645448', 'Nashik', 'hello', '2024-08-23 06:14:41', '2024-08-23 06:14:41'),
(13, 'Dipak Shimpi', 'dipakshimpi9604@gmail.com', '9404001941', 'Nashik', 'for job', '2024-08-23 06:15:55', '2024-08-23 06:15:55'),
(14, 'Dipak Shimpi', 'dipakshimpi9604@gmail.com', '9404001941', 'Nagpur', 'Testing', '2024-08-24 09:28:15', '2024-08-24 09:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_franchise_video`
--

CREATE TABLE `tbl_franchise_video` (
  `id` int(11) NOT NULL,
  `video_url` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_franchise_video`
--

INSERT INTO `tbl_franchise_video` (`id`, `video_url`, `status`, `creation_on`) VALUES
(10, 'https://www.youtube.com/embed/yrZlMRTxSzU?si=rsxZsysllh1YGQ1v\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', 'Active', '2024-07-27 09:49:57'),
(11, 'https://www.youtube.com/embed/khVVTl1qzJk?si=DHRpkSOj08iHSMpR\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', 'Active', '2024-07-27 09:53:39'),
(12, 'https://www.youtube.com/embed/Sz0_0Rjrat0?si=epSsa5pjsVkTi0uD\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', 'Active', '2024-07-27 09:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaders`
--

CREATE TABLE `tbl_leaders` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_leaders`
--

INSERT INTO `tbl_leaders` (`id`, `image`, `name`, `designation`, `creation_on`) VALUES
(16, '976024.png', 'ROSHANI', 'Head IT', '2024-07-03 06:13:22'),
(17, '6386.png', 'SUVARNA', 'Head Admin', '2024-07-03 06:14:04'),
(18, '829385.png', 'ANITA', 'Head Training', '2024-07-03 06:14:54'),
(21, '18786.png', 'KRANTI', 'Leader Pune Division', '2024-07-03 06:16:40'),
(28, '326469.png', 'HARSHADA', 'Leader School Project', '2024-07-03 08:42:42'),
(29, '780170.png', 'NUTAN', 'Leader School Project', '2024-07-03 08:43:46'),
(31, '899066.png', 'PRATIBHA', 'Leader Dhule Malegaon Division', '2024-07-03 08:46:34'),
(32, '937703.png', ' UJJWALA', ' Leader Nashik Division Private', '2024-07-03 08:47:06'),
(33, '935029.png', 'RUPALI', 'Leader Chh. Sambhaji Nagar Division', '2024-07-03 08:47:32'),
(34, '283335.png', 'KISHORI', 'Leader School Project English Medium', '2024-07-03 08:47:55'),
(35, '534611.png', 'MANSI', 'Leader Malegaon Division Private', '2024-07-03 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area` text NOT NULL,
  `name` text NOT NULL,
  `school_name` text NOT NULL,
  `address` text NOT NULL,
  `contact_no` text NOT NULL,
  `map` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `state_id`, `city_id`, `area`, `name`, `school_name`, `address`, `contact_no`, `map`, `status`, `creation_on`) VALUES
(8, 12, 344, 'Kalyan East', '', 'Anita Pawar', 'Flat No.01, D, Wing Dasharath Plaza, Shankar Pawshe Rd, Pandurang Nagar, Katemanivali, Kalyan East, Kalyan, Maharashtra 421306', '7770045402', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15069.414097171557!2d73.147756!3d19.2234186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7959492cbf0d7%3A0x254cd256a39d4dee!2sI-Genius%20Abacus%20Academy%2C%20Kalyan%20(%20East)_Winners%20Academy!5e0!3m2!1sen!2sin!4v1721629997363!5m2!1sen!2sin', 'Active', '2024-07-22 06:34:08'),
(11, 12, 337, 'Alandi, Charholi BK', 'IG_Centre_Charholi BK', 'Kranti Patil ', 'Shop No107, Tanishq Orchid, Phase-2, Charholi Bk, Pune', '7770045402', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15120.08143378974!2d73.8957482!3d18.6630824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c75500d6c57d%3A0x67d0e3ea44bc0c6c!2sI-Genius%20Abacus%20Academy%2C%20Charholi%20BK%20Pune%20Branch!5e0!3m2!1sen!2sin!4v1721635414392!5m2!1sen!2sin', 'Active', '2024-07-22 08:16:49'),
(14, 12, 316, 'Jalana Road', 'IG_Centre_Aurangabad Jalana Road', 'Rupali Deore', 'Cambridge Chowk, Shop No.3, Guruvishwa Apartments, Jalna Road, Near Sai Mandir, Chh.Sambhajinagar-431009', '7770045402', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15009.697892997572!2d75.4341044!3d19.8642904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba31631003d15%3A0x4569a01b360466e8!2sI-Genius%20Abacus%20Academy%20%2C%20Aurangabad%20Branch!5e0!3m2!1sen!2sin!4v1721639036410!5m2!1sen!2sin', 'Active', '2024-07-22 09:04:34'),
(21, 12, 334, 'Amrutdham', 'IG_Centre_Nashik', 'Roshani Pawar', 'Rh no D, Khushi Row Banglow, Omkareshwar Colony, Sai Nagar Road, Amrutdham-422003', '7770045402', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.6116942216595!2d73.8226944!3d20.024805600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddea6b7337eced%3A0x53753a8f882d20b5!2s2RFF%2BX4H%2C%20Trikoni%20Bangala%20Rd%2C%20Ayodhya%20nagari%2C%20Nashik%2C%20Maharashtra%20422207!5e0!3m2!1sen!2sin!4v1722062254131!5m2!1sen!2sin', 'Active', '2024-07-27 06:38:14'),
(22, 12, 334, 'Sharanpur Road', 'IG_Centre_Nashik', 'Harshada Patil', 'Flat No. 01, Vishnu Prasad Society, Bagad Associate, Sharanpur Road, Nashik-422005', '7770045402', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3749.211434050403!2d73.7720278!3d19.9996389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDU5JzU4LjciTiA3M8KwNDYnMTkuMyJF!5e0!3m2!1sen!2sin!4v1722062334339!5m2!1sen!2sin', 'Active', '2024-07-27 06:40:53'),
(23, 12, 334, 'Gangapur Road', 'IG_Centre_Nashik', 'Anita Pawar', 'Flat No 02, Prerna Housing Society, Gangapur Road, Nashik 422005', '7770045402', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.8775404145235!2d73.7604528758539!3d20.013653721867207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb910707862b%3A0x61f9329cb9a6b42e!2sSwami%20Samarth%20Mandir%20Rd%2C%20D.%20K.%20Nagar%2C%20Nashik%2C%20Maharashtra%20422005!5e0!3m2!1sen!2sin!4v1722062900055!5m2!1sen!2sin', 'Active', '2024-07-27 06:48:56'),
(24, 12, 334, 'Satana', 'IG_Centre_Satana', 'Manisha Bachhav', 'At/Post Satana 423301', '7770045402', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3734.831769633388!2d74.20210677524484!3d20.594926680947918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDM1JzQxLjciTiA3NMKwMTInMTYuOSJF!5e0!3m2!1sen!2sin!4v1722063964874!5m2!1sen!2sin', 'Active', '2024-07-27 07:07:07'),
(25, 12, 334, 'Malegaon_D.K.Stop', 'IG_Centre_Malegaon', 'Mansi Borole', 'Plot No.9 Morya Colony, Near D.K Stop Tel: Malegaon Dist: Nashik Pin-423105', '7770045402', 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d466.96609557210843!2d74.5059657!3d20.5582758!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDMzJzM1LjciTiA3NMKwMzAnMzEuOCJF!5e0!3m2!1sen!2sin!4v1722064285293!5m2!1sen!2sin', 'Active', '2024-07-27 07:15:51'),
(26, 12, 334, 'Khutwad Nagar', 'IG_Centre_Nashik', 'Poonam Nitin Sangale', 'A1, Aakash Residency, Kamatwada, Khutwad Nagar, Nashik-422008', '7770045402', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3749.649858377097!2d73.7466111!3d19.981222199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDU4JzUyLjQiTiA3M8KwNDQnNDcuOCJF!5e0!3m2!1sen!2sin!4v1722064748011!5m2!1sen!2sin', 'Active', '2024-07-27 07:19:43'),
(27, 12, 344, 'Chinchpada', 'IG_Centre_Kalyan_East', 'Rakesh Patil', '103 Manas Pyaradise, Near Vaishani Dhan Apt. Rahul Nagar, Chinchpada, Kalyan East- 421301', '7770045402', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3767.608248506669!2d73.1414167!3d19.212305600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDEyJzQ0LjMiTiA3M8KwMDgnMjkuMSJF!5e0!3m2!1sen!2sin!4v1722065247968!5m2!1sen!2sin', 'Active', '2024-07-27 07:28:37'),
(28, 12, 325, 'Kajgaon (Tal-Bhadgaon)', 'IG_Centre_Kajgaon', 'Gautami Nyati', 'Kajgaon Near Bus Stand, Balaji Super Shop, Tal. Bhadgaon Dist. Jalgaon 412005', '9021893063 (7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3735.4494692776516!2d75.1428889!3d20.5696944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDM0JzEwLjkiTiA3NcKwMDgnMzQuNCJF!5e0!3m2!1sen!2sin!4v1722075388455!5m2!1sen!2sin', 'Active', '2024-07-27 10:17:16'),
(29, 12, 344, 'Kalyan East  ( Kolsewadi ) ', 'IG_Centre_Kalyan', 'Dipika Rajesh Jadhav', 'A/9, New Pawanganga Apt. Kolsewadi, Kalyan East Thane- 421301', '9022139053 (7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3767.203240939929!2d73.1403333!3d19.229972199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDEzJzQ3LjkiTiA3M8KwMDgnMjUuMiJF!5e0!3m2!1sen!2sin!4v1722075644488!5m2!1sen!2sin', 'Active', '2024-07-27 10:21:24'),
(30, 12, 316, 'Itkheda ', 'IG_Centre_Itkheda', 'Sharyu Satish Bhagwatkar', 'Flat No. 3, Second Floor, Siya Enclave, Ear Kalyani Dream\'s, Shivsamdhan Colony ,Itkheda, Ch.Sambhaji Nagar 431001', '7972656155(7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3752.8747938035767!2d75.2988611!3d19.845250000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDUwJzQyLjkiTiA3NcKwMTcnNTUuOSJF!5e0!3m2!1sen!2sin!4v1722076061625!5m2!1sen!2sin', 'Active', '2024-07-27 10:28:20'),
(31, 12, 334, 'Hirawadi, Panchawati', 'IG_Centre_Nashik', 'Surekha Amol Dhomse', 'Flat No. 8 Shyam Siddhi Apartment, Near NMC Water Tank Hirawadi, Panchvati Nashik -422003', '9168202711 (7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3748.806391590855!2d73.8137778!3d20.016638900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDAwJzU5LjkiTiA3M8KwNDgnNDkuNiJF!5e0!3m2!1sen!2sin!4v1722076417159!5m2!1sen!2sin', 'Active', '2024-07-27 10:34:13'),
(32, 12, 334, 'Dindori Road', 'IG_Centre_Nashik', 'Bhagyashri Shrikrishna Varungase', 'Grishmata Banglow, Near Water Tank, Vakratund Apt. Prabhat Nagar, Dindori Road Nasik- 422202', '9075062634 (7770045402)', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3747.9514499863208!2d73.7998214!3d20.0524762!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdde986ea16294b%3A0x3a0bb39a4829e744!2s3R32%2B3WM%20Wadhane%20Colony%2C%20Hari%20Har%20Colony%2C%20Prabhat%20Nagar%2C%20Nashik%2C%20Maharashtra%20422004!5e0!3m2!1sen!2sin!4v1722076703859!5m2!1sen!2sin', 'Active', '2024-07-27 10:39:15'),
(33, 12, 334, 'Gangapur Gaon', 'IG_Centre_Nashik', 'Pallavi Mali', 'Flat No. 5, Amey Residency, Eden Colony, Gangapur Gaon, Nashik 422222', '7744065689 (7770045402)', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3748.5762663562055!2d73.7126712!3d20.0262913!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddec3afdeac8f3%3A0xb39c87a8abbd4d93!2s2PG8%2BJ44%2C%20Gangapur%2C%20Nashik%2C%20Maharashtra%20422003!5e0!3m2!1sen!2sin!4v1722077070484!5m2!1sen!2sin', 'Active', '2024-07-27 10:45:11'),
(34, 12, 334, 'Kamatwada', 'IG_Centre_Nashik', 'Trupti Durgesh Deshmukh', 'Row House No 3, Green Park, Bunglow, Chanakya Nagar, ITI Ambad Link Road, Kamatwada Nashik: 422008', '7038646990 (7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3749.6372990664436!2d73.7465!3d19.981749999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDU4JzU0LjMiTiA3M8KwNDQnNDcuNCJF!5e0!3m2!1sen!2sin!4v1722077465945!5m2!1sen!2sin', 'Active', '2024-07-27 10:51:40'),
(35, 12, 334, 'Malegaon_Satana_Naka', 'IG_Centre_Nashik', 'Suvarna Sujit Patil', 'Near Riddhi Siddhi English Medium School, Satana Naka, Malegaon Pin-423105', '9271907386(7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3735.7137872540998!2d74.50681517524383!3d20.558888280975452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDMzJzMyLjAiTiA3NMKwMzAnMzMuOCJF!5e0!3m2!1sen!2sin!4v1722230871052!5m2!1sen!2sin', 'Active', '2024-07-29 08:39:09'),
(36, 12, 334, 'Malegaon_Satana_Naka', 'IG_Centre_Malegaon', 'Yogita Deepak Pawar', 'Near Riddhi Siddhi English Medium School, Satana Naka, Malegaon Pin-423105', '9271907386(7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3735.7137872540998!2d74.50681517524383!3d20.558888280975452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDMzJzMyLjAiTiA3NMKwMzAnMzMuOCJF!5e0!3m2!1sen!2sin!4v1722230871052!5m2!1sen!2sin', 'Active', '2024-07-29 08:41:25'),
(37, 12, 334, 'Malegaon_Collector_Patta', 'IG_Centre_Malegaon', 'Tejaswini saurabh Dusane ', 'House No. 171/3,Sharad Nagar, near Ganpati Mandir, Collector Patta, Malegaon 424001', '7218780901(7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3781.279997590255!2d73.75443107519372!3d18.606471782503885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTjCsDM2JzIzLjMiTiA3M8KwNDUnMjUuMiJF!5e0!3m2!1sen!2sin!4v1722233344878!5m2!1sen!2sin', 'Active', '2024-07-29 08:45:58'),
(38, 12, 334, 'Konark Nagar (Panchavati)', 'IG_Centre_Nashik', 'Jyoti Sudhir Kale', 'Rh No. 2, Krishna Park, Konark Nagar, Adgaon Shivar, Panchvati Nashik- 422003', '7387229967(7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3748.755711855887!2d73.846952!3d20.018765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDAxJzA3LjYiTiA3M8KwNTAnNDkuMCJF!5e0!3m2!1sen!2sin!4v1722232048250!5m2!1sen!2sin', 'Active', '2024-07-29 08:49:09'),
(39, 12, 334, 'Cidco (Pawan Nagar)', 'IG_Centre_Nashik', 'Kavita Girish Pawar', 'N42-JB2-30/7 Opp. Om Computers, Pawan Nagar, Cidco Nashik- 422009', '9021114569(7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3749.762835474584!2d73.75641547522834!3d19.976473781422495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDU4JzM1LjMiTiA3M8KwNDUnMzIuNCJF!5e0!3m2!1sen!2sin!4v1722235052471!5m2!1sen!2sin', 'Active', '2024-07-29 08:51:10'),
(40, 12, 334, 'Bali Mandir, Rasbihari Road', 'IG_Centre_Nashik', 'Prajkta Deore', 'Row House-03, Sakar Residency, Mane Nagar, Rasbihari Meri Link Road, Bali Mandir Nashik-422003', '7741070282(7770045402)', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3748.522425068544!2d73.82378767522975!3d20.02854898138225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDAxJzQyLjgiTiA3M8KwNDknMzQuOSJF!5e0!3m2!1sen!2sin!4v1722598892090!5m2!1sen!2sin', 'Active', '2024-08-02 11:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_math_video`
--

CREATE TABLE `tbl_math_video` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_math_video`
--

INSERT INTO `tbl_math_video` (`id`, `url`, `status`, `creation_on`) VALUES
(13, 'https://www.youtube.com/embed/BI1-BEccV84?si=AEJGPyYmmk3OLlPx', 'Active', '2024-06-17 11:32:58'),
(14, 'https://www.youtube.com/embed/BvHQoUCrasU?si=-uGAWblN0x7a6xJG', 'Active', '2024-06-17 11:33:43'),
(15, 'https://www.youtube.com/embed/Pje1b6-rMUE?si=sAHTLmyyXk1QcLy', 'Active', '2024-06-17 11:34:33'),
(18, 'https://www.youtube.com/embed/BI1-BEccV84?si=qsHfPu4qLqtMsopa', 'Active', '2024-06-20 05:08:47'),
(19, 'https://www.youtube.com/embed/CQ-0xIn5W4k?si=4lEIV47fuHbn39eP', 'Active', '2024-06-20 05:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `image`, `name`, `creation_on`) VALUES
(3, '515034.jpeg', 'I-Genius abacus exam', '2024-06-17 12:12:08'),
(4, '441573.jpeg', 'Purva Shinde selected for international Abacus Comptition', '2024-06-17 12:13:47'),
(5, '175351.jpeg', 'Success of I-Genius in the abacus exam', '2024-06-17 12:15:11'),
(6, '256500.jpeg', 'Avadhut musale and Aaryan dalavi\'s success in abacus competition,selection for international exam', '2024-06-17 12:18:05'),
(7, '274900.jpeg', 'Aaryan Dalavi\'s Success in Abacus', '2024-06-17 12:18:47'),
(8, '198332.jpeg', 'Student success for I-Genius abacus', '2024-06-17 12:19:59'),
(9, '956754.jpeg', 'Avdhut Musale\'s Succcess in abacus examination', '2024-06-17 12:20:42'),
(10, '267231.jpg', 'National level selection of students from Satana', '2024-06-17 12:22:12'),
(11, '738932.jpg', 'Students of i-Genius abacus succeed in state level comptition', '2024-06-17 12:23:41'),
(12, '175791.jpg', 'Selection of 157 students from malegoan division for abacus national level examination', '2024-06-17 12:25:39'),
(13, '635204.jpg', 'Student success of I-Genius Abacus', '2024-06-17 12:26:55'),
(14, '693299.jpg', 'Success of rajiv gandhi school students in abacus examination', '2024-06-17 12:28:21'),
(16, '403051.png', 'FDEW', '2024-07-13 11:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_data`
--

CREATE TABLE `tbl_other_data` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_other_data`
--

INSERT INTO `tbl_other_data` (`id`, `name`, `content`, `creation_on`) VALUES
(1, 'VISION\r\n', '<p>Our vision at I-Genius Abacus Academy is to empower grassroots students with the valuable skills and knowledge of abacus calculation, enabling them to excel academically and thrive in today&#39;s competitive world.&nbsp;</p>\r\n', '2024-06-24 06:12:32'),
(2, 'MISSION', '<p>Our mission is to provide high-quality accessible, and effective abacus training to grassroots students, regardless of their background or socioeconomic status. We are committed to fostering a love for learning promoting cognitive development, and building confidence in our students through our innovative abacus programs.</p>\r\n', '2024-06-24 06:12:32'),
(3, 'OBJECTIVE', '<p style=\"box-sizing: border-box;\">1.To make abacus training accessible to grassroots students in order to enhance their mental arithmetic skills and overall academic performance.<br />\r\n2.To provide a supportive and nurturing learning environment where students can develop their cognitive abilities, critical thinking skills, and problem-solving techniques.<br />\r\n3.To instil a sense of confidence and self-belief in students, empowering them to overcome challenges and achieve success in their educational journey.<br />\r\n4.To promote the benefits of abacus training in improving concentration, memory retention, and overall brain development among grassroots students.<br />\r\n5.To continuously innovate and improve our abacus programs, ensuring that we stay at the forefront of educational excellence and meet the evolving needs of our students.</p>\r\n\r\n<p style=\"box-sizing: border-box;\">&nbsp;</p>\r\n', '2024-06-24 06:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`id`, `image`, `name`, `creation_on`) VALUES
(4, '635851.JPG', 'Abacus 6th State Level Competition 2023', '2024-06-26 10:03:05'),
(5, '393184.jpg', 'I-Genius Abacus Mental Arithmetic 6th National Level Competition 2023 Hyderabad', '2024-06-26 10:15:30'),
(6, '751879.JPG', 'Abacus 7th State Level Competition 2024', '2024-06-26 10:20:47'),
(7, '35306.jpg', 'IG- Franchisee Authorization Ceremony_ Annual Program 2024', '2024-06-26 10:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_popup`
--

CREATE TABLE `tbl_popup` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_popup`
--

INSERT INTO `tbl_popup` (`id`, `image`, `creation_on`, `updation_on`) VALUES
(12, '945328.png', '2024-07-15 05:02:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_video`
--

CREATE TABLE `tbl_school_video` (
  `id` int(11) NOT NULL,
  `video_url` text NOT NULL,
  `status` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_school_video`
--

INSERT INTO `tbl_school_video` (`id`, `video_url`, `status`, `creation_on`, `updation_on`) VALUES
(9, 'https://www.youtube.com/embed/K7IHo2HZRsQ?si=c5WI-rJ21mM2Xmu3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', 'Active', '2024-07-27 10:33:03', ''),
(10, 'https://www.youtube.com/embed/OHhKbrrGUz4?si=P9ApOOAZpjzaThIo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', 'Active', '2024-07-27 10:34:08', ''),
(11, 'https://www.youtube.com/embed/A2svB8madeU?si=fDt1R25RibQ1TIyu\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', 'Active', '2024-07-27 10:35:08', ''),
(12, 'https://www.youtube.com/embed/iXXSSO4Dz0U?si=pztPC3JO86FgIsrD\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', 'Active', '2024-07-27 10:36:18', ''),
(13, 'https://www.youtube.com/embed/cttWMICOplQ?si=AUrP4fQXwmdfV8dm\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin', 'Active', '2024-07-27 10:37:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scroll_text`
--

CREATE TABLE `tbl_scroll_text` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `compitation_menu` text NOT NULL,
  `category` text NOT NULL,
  `exam_details` text NOT NULL,
  `contact` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_scroll_text`
--

INSERT INTO `tbl_scroll_text` (`id`, `name`, `date`, `compitation_menu`, `category`, `exam_details`, `contact`, `creation_on`) VALUES
(7, 'I-Genius Abacus National Level Competition August 2024', '2024-08-25', 'Pune', 'Offline ', 'I-Genius Abacus Open National Level Offline Competition will be held on 25th August 2024 at Pune Location, The competition will be open to all participants, competition timing 20 Minutes 100 Maths sums.', '7770045402', '2024-07-27 11:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `name`, `country_id`, `creation_on`) VALUES
(1, 'ANDHRA PRADESH', 105, '2024-07-18 06:02:35'),
(2, 'ASSAM', 105, '2024-07-18 06:02:35'),
(3, 'ARUNACHAL PRADESH', 105, '2024-07-18 06:02:35'),
(4, 'BIHAR', 105, '2024-07-18 06:02:35'),
(5, 'GUJRAT', 105, '2024-07-18 06:02:35'),
(6, 'HARYANA', 105, '2024-07-18 06:02:35'),
(7, 'HIMACHAL PRADESH', 105, '2024-07-18 06:02:35'),
(8, 'JAMMU & KASHMIR', 105, '2024-07-18 06:02:35'),
(9, 'KARNATAKA', 105, '2024-07-18 06:02:35'),
(10, 'KERALA', 105, '2024-07-18 06:02:35'),
(11, 'MADHYA PRADESH', 105, '2024-07-18 06:02:35'),
(12, 'MAHARASHTRA', 105, '2024-07-18 06:02:35'),
(13, 'MANIPUR', 105, '2024-07-18 06:02:35'),
(14, 'MEGHALAYA', 105, '2024-07-18 06:02:35'),
(15, 'MIZORAM', 105, '2024-07-18 06:02:35'),
(16, 'NAGALAND', 105, '2024-07-18 06:02:35'),
(17, 'ORISSA', 105, '2024-07-18 06:02:35'),
(18, 'PUNJAB', 105, '2024-07-18 06:02:35'),
(19, 'RAJASTHAN', 105, '2024-07-18 06:02:35'),
(20, 'SIKKIM', 105, '2024-07-18 06:02:35'),
(21, 'TAMIL NADU', 105, '2024-07-18 06:02:35'),
(22, 'TRIPURA', 105, '2024-07-18 06:02:35'),
(23, 'UTTAR PRADESH', 105, '2024-07-18 06:02:35'),
(24, 'WEST BENGAL', 105, '2024-07-18 06:02:35'),
(25, 'DELHI', 105, '2024-07-18 06:02:35'),
(26, 'GOA', 105, '2024-07-18 06:02:35'),
(27, 'PONDICHERY', 105, '2024-07-18 06:02:35'),
(28, 'LAKSHDWEEP', 105, '2024-07-18 06:02:35'),
(29, 'DAMAN & DIU', 105, '2024-07-18 06:02:35'),
(30, 'DADRA & NAGAR', 105, '2024-07-18 06:02:35'),
(31, 'CHANDIGARH', 105, '2024-07-18 06:02:35'),
(32, 'ANDAMAN & NICOBAR', 105, '2024-07-18 06:02:35'),
(33, 'UTTARANCHAL', 105, '2024-07-18 06:02:35'),
(34, 'JHARKHAND', 105, '2024-07-18 06:02:35'),
(35, 'CHATTISGARH', 105, '2024-07-18 06:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `id` int(11) NOT NULL,
  `video_url` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_videos`
--

INSERT INTO `tbl_videos` (`id`, `video_url`, `name`, `description`, `creation_on`) VALUES
(3, 'https://www.youtube.com/embed/8Wq1DRJ2m50?si=WYz8C57-wzHykEqD', 'Abacus Boosted Our Kid’s Confidence in Math! I-Genius Happy Parents Review', '', '2024-06-17 12:05:51'),
(4, 'https://www.youtube.com/embed/PROSih4Tzg4?si=ar5Mnl0KL7WuDIqi', 'How Abacus Transformed Our Child’s Math Skills! ', '', '2024-06-17 12:06:49'),
(5, 'https://www.youtube.com/embed/cHUb-UL0cwE?si=NJBiuPIvXB9vriec', 'I-Genius Abacas Academy_Our Genius Students Presenting Abacus Introduction...', '', '2024-06-17 12:08:02'),
(6, 'https://www.youtube.com/embed/nfdkHolvVRA?si=_Qmdq4tD9e53uwPd', 'I-Genius Abacas 6th State Level Winners Award Fest 2022-23', '', '2024-06-17 12:08:54'),
(7, 'https://www.youtube.com/embed/Sz0_0Rjrat0?si=c8__ZfWx9ooa-G-h', 'I-Genius Abacas', '', '2024-06-17 12:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_view_photos`
--

CREATE TABLE `tbl_view_photos` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `creation_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_view_photos`
--

INSERT INTO `tbl_view_photos` (`id`, `photo_id`, `image`, `creation_on`) VALUES
(2, 2, '485820.jpg', '2024-06-26 07:06:19'),
(3, 4, '997470.JPG', '2024-06-26 10:07:54'),
(4, 4, '494616.JPG', '2024-06-26 10:08:02'),
(5, 4, '281290.JPG', '2024-06-26 10:08:10'),
(6, 4, '662200.JPG', '2024-06-26 10:08:19'),
(7, 4, '173466.jpg', '2024-06-26 10:08:28'),
(8, 4, '668994.jpg', '2024-06-26 10:08:38'),
(9, 4, '149121.jpg', '2024-06-26 10:08:47'),
(12, 5, '92329.jpg', '2024-06-26 10:16:11'),
(13, 5, '811098.jpg', '2024-06-26 10:16:23'),
(14, 5, '770944.jpg', '2024-06-26 10:16:33'),
(15, 5, '284803.jpg', '2024-06-26 10:16:43'),
(16, 5, '324334.jpg', '2024-06-26 10:16:54'),
(17, 5, '514940.jpg', '2024-06-26 10:17:06'),
(18, 5, '8990.jpg', '2024-06-26 10:17:15'),
(19, 5, '117183.jpg', '2024-06-26 10:17:37'),
(20, 5, '171738.jpg', '2024-06-26 10:17:49'),
(21, 5, '96403.jpg', '2024-06-26 10:18:00'),
(22, 5, '272473.jpg', '2024-06-26 10:18:13'),
(23, 6, '834782.JPG', '2024-06-26 10:23:17'),
(24, 6, '97436.JPG', '2024-06-26 10:23:27'),
(25, 6, '149026.JPG', '2024-06-26 10:23:36'),
(26, 6, '208653.JPG', '2024-06-26 10:23:48'),
(27, 6, '389613.JPG', '2024-06-26 10:23:58'),
(28, 6, '298863.JPG', '2024-06-26 10:24:06'),
(29, 6, '631520.JPG', '2024-06-26 10:24:22'),
(30, 6, '600868.JPG', '2024-06-26 10:24:33'),
(31, 6, '998692.jpg', '2024-06-26 10:24:46'),
(32, 6, '894340.jpg', '2024-06-26 10:24:56'),
(33, 6, '471602.jpg', '2024-06-26 10:25:09'),
(34, 6, '831373.jpg', '2024-06-26 10:25:17'),
(35, 6, '347802.jpg', '2024-06-26 10:25:25'),
(36, 6, '579503.jpg', '2024-06-26 10:25:40'),
(37, 6, '277833.jpg', '2024-06-26 10:25:57'),
(38, 6, '167375.jpg', '2024-06-26 10:26:08'),
(39, 7, '990918.jpg', '2024-06-26 10:53:10'),
(40, 7, '442425.jpg', '2024-06-26 10:53:21'),
(41, 7, '382247.jpg', '2024-06-26 10:53:30'),
(42, 7, '282879.jpg', '2024-06-26 10:53:38'),
(43, 7, '721733.jpg', '2024-06-26 10:53:46'),
(44, 7, '437326.jpg', '2024-06-26 10:53:56'),
(45, 7, '818323.jpg', '2024-06-26 10:54:04'),
(46, 7, '900005.jpg', '2024-06-26 10:54:22'),
(47, 7, '462763.jpg', '2024-06-26 10:54:30'),
(48, 7, '210869.jpg', '2024-06-26 10:54:38'),
(49, 7, '847044.jpg', '2024-06-26 10:54:47'),
(50, 7, '692229.jpg', '2024-06-26 10:55:07'),
(51, 7, '819295.jpg', '2024-06-26 10:55:14'),
(52, 7, '760078.jpg', '2024-06-26 10:55:23'),
(53, 7, '878241.jpg', '2024-06-26 10:55:33'),
(54, 7, '332138.jpg', '2024-06-26 10:55:42'),
(55, 7, '667586.jpg', '2024-06-26 10:55:57'),
(56, 7, '858258.jpg', '2024-06-26 10:56:08'),
(57, 7, '730485.jpg', '2024-06-26 10:56:19'),
(58, 7, '762678.jpg', '2024-06-26 10:56:31'),
(59, 7, '816247.jpg', '2024-06-26 10:56:38'),
(60, 8, '987108.png', '2024-06-29 06:09:29'),
(61, 10, '819817.png', '2024-07-13 11:46:14'),
(62, 10, '231557.png', '2024-07-13 11:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `photo` text NOT NULL,
  `thumb` text NOT NULL,
  `status` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `rating` text NOT NULL,
  `title` text NOT NULL,
  `designation` text NOT NULL,
  `description` text NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_faq`
--
ALTER TABLE `blog_faq`
  ADD PRIMARY KEY (`blog_faq_id`);

--
-- Indexes for table `blog_subtitles`
--
ALTER TABLE `blog_subtitles`
  ADD PRIMARY KEY (`blog_sub_id`);

--
-- Indexes for table `blog_titles`
--
ALTER TABLE `blog_titles`
  ADD PRIMARY KEY (`blog_title_id`);

--
-- Indexes for table `content_video`
--
ALTER TABLE `content_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_faq`
--
ALTER TABLE `course_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchise_testimonial`
--
ALTER TABLE `franchise_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_testi`
--
ALTER TABLE `parent_testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_testimonial`
--
ALTER TABLE `school_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `side_banner`
--
ALTER TABLE `side_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_achivement`
--
ALTER TABLE `tbl_achivement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog_index`
--
ALTER TABLE `tbl_blog_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_career`
--
ALTER TABLE `tbl_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cource_detail`
--
ALTER TABLE `tbl_cource_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course_type`
--
ALTER TABLE `tbl_course_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_c_img`
--
ALTER TABLE `tbl_c_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_c_video`
--
ALTER TABLE `tbl_c_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event_details`
--
ALTER TABLE `tbl_event_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_franchies_enquiry`
--
ALTER TABLE `tbl_franchies_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_franchise_video`
--
ALTER TABLE `tbl_franchise_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leaders`
--
ALTER TABLE `tbl_leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_math_video`
--
ALTER TABLE `tbl_math_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_other_data`
--
ALTER TABLE `tbl_other_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_popup`
--
ALTER TABLE `tbl_popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_school_video`
--
ALTER TABLE `tbl_school_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_scroll_text`
--
ALTER TABLE `tbl_scroll_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_view_photos`
--
ALTER TABLE `tbl_view_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175118;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `blog_faq`
--
ALTER TABLE `blog_faq`
  MODIFY `blog_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `blog_subtitles`
--
ALTER TABLE `blog_subtitles`
  MODIFY `blog_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `blog_titles`
--
ALTER TABLE `blog_titles`
  MODIFY `blog_title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `content_video`
--
ALTER TABLE `content_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_faq`
--
ALTER TABLE `course_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1944400955;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `franchise_testimonial`
--
ALTER TABLE `franchise_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parent_testi`
--
ALTER TABLE `parent_testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_testimonial`
--
ALTER TABLE `school_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `side_banner`
--
ALTER TABLE `side_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_achivement`
--
ALTER TABLE `tbl_achivement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_blog_index`
--
ALTER TABLE `tbl_blog_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_career`
--
ALTER TABLE `tbl_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `tbl_cource_detail`
--
ALTER TABLE `tbl_cource_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_course_type`
--
ALTER TABLE `tbl_course_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_c_img`
--
ALTER TABLE `tbl_c_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_c_video`
--
ALTER TABLE `tbl_c_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_event_details`
--
ALTER TABLE `tbl_event_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_franchies_enquiry`
--
ALTER TABLE `tbl_franchies_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_franchise_video`
--
ALTER TABLE `tbl_franchise_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_leaders`
--
ALTER TABLE `tbl_leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_math_video`
--
ALTER TABLE `tbl_math_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_other_data`
--
ALTER TABLE `tbl_other_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_popup`
--
ALTER TABLE `tbl_popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_school_video`
--
ALTER TABLE `tbl_school_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_scroll_text`
--
ALTER TABLE `tbl_scroll_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_view_photos`
--
ALTER TABLE `tbl_view_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
