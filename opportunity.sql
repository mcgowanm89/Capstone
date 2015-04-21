-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2015 at 01:19 PM
-- Server version: 5.6.23
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `megmdesi_betteralamancevolunteers`
--

-- --------------------------------------------------------

--
-- Table structure for table `opportunity`
--

CREATE TABLE IF NOT EXISTS `opportunity` (
  `ID` int(3) DEFAULT NULL,
  `Organization` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL,
  `Description` text,
  `Age Group` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opportunity`
--

INSERT INTO `opportunity` (`ID`, `Organization`, `Category`, `Location`, `Time`, `Description`, `Age Group`) VALUES
(1, 'Alamance County Arts Council', 'Arts/Culture', '213 S. Main Street, Graham NC 27253', '9am-5pm', 'Since we have a staff of 5, it''s a great opportunity for those interested in the arts to have real world experience at a local non-profit. Our Arts Council is quite vibrant given its size, drawing international exhibits every other year. ', '18-54'),
(2, 'Blakely Hall', 'Seniors', '489 Blakey Hall Lane, Elon NC 27244', '8am-4:30pm', 'To promote the social, emotional, psychological, spiritual, and physical well being of each resident in this long term care facility for the elderly. Opportunities for service are in working through the activity department to help meet individual needs of the residents and/or in providing support to children in an after-school environment.', '55+'),
(3, 'Boys and Girls Club', 'Youth', '807 Stockard Street, Burlington NC 27216', '10am-12pm 3pm-4:30pm', 'To enable all youth, especially those that need us the most, to reach their full potential as responsible and caring citizens. Service experiences are centered around tutoring children, working with children in a recreational environment and providing mentoring relationships to help meet individual needs. Service learning tutors should arrange schedule around Power Hour for after-school tutoring from 3:00-4:30.', '18-54'),
(4, 'Burlington Animal Services and Pet Adoption Center', 'Animals', '215 Stone Quarry Rd.\rHaw River, NC 27258', '9am-4:30pm', 'The center is committed to finding permanent loving homes for pets and provide education and awareness about being responsible pet owners. Volunteer times are 9-4:30, Mon-Fri, and 10-3:30 on Saturday. Volunteers are needed occasionally for special/public events. Outreach coordinator will contact volunteers as needed.', 'Under 18'),
(5, 'Children''s Museum of Alamance', 'Arts/Culture', '217 South Main Street\rGraham, NC 27253', '9am-5pm', 'The Children''s Museum of Alamance County encourages children to exercise their curiosity, develop their imagination, and discover their world through exploration. We provide environments where children and adults are given a unique opportunity to play and create together. We promote learning and literacy through a wide array of multi-sensory, interactive, hands-on experiences. We instill in children a greater understanding of themselves and their world which surrounds them.', '55+'),
(6, 'Kernodle Senior Center', 'Seniors', 'PO Box 1358, Burlington NC 27216', '8am-4:30pm', 'The Center provides recreation and services to people 55 years and over. This active senior population participates in Senior Olympics, special classes, physical fitness, crafting and other opportunities at the center. A reduced cost lunch is offered daily. Service learners will have opportunities to interact with seniors in a variety of ways through activities and often may assist with planning an event for them, such as a Valentine?s party. This is a Burlington City run program under Parks and Recreation.', '18-54'),
(7, 'Cottage at Blakely', 'Seniors', '489 Blakely Hall Lane, Elon NC 27244', '8am-4pm', 'The Cottage at Blakey is a Assisted Living Memory Care Unit with 16 residents. We are looking for someone to assist with activities and special functions we have at The Cottage. Residents have limited memory but very physically active (cards, checkers, reading) and enjoy one on one interaction with others. Would like someone who would be comfortable working with dementia residents and finds a challenge in it. Professional dress is required.', '18-54'),
(8, 'Studio 1', 'Arts/Culture', '1332 Plaza Dr, Burlington NC 27215', '8am-5pm', 'Volunteers are needed Friday & Saturday evenings along with Sun afternoons to help with ticket sales & concessions. Administrative help is needed weekly between 8am & 5pm, and grant writing help is also appreciated.', '55+'),
(9, 'Humane Society of Alamance County', 'Animals', 'P.O. Box 3673, Burlington NC 27215', '', 'Volunteer by request. Adoption fairs on the first and third Saturday of every month.', 'Under 18'),
(10, 'Haw River Trail', 'Environment', '3916 R. Dean Coleman Road, Burlington NC 27215', '', 'Potential projects include volunteer organizing and programming, securing funds and marketing (PR). The cities of Burlington and Graham have partnered with Alamance County, Elon University, Preservation North Carolina and the Z. Smith Reynolds Foundation to fund a full-time position to coordinate conservation and trail efforts on the Upper Haw River. ', '18-54'),
(11, 'The ARC of Alamance County', 'People with Disabilities', 'PO Box 1275, Burlington NC 27216', '9am-1pm 4pm-6pm', 'Program works with developmentally disabled to better connect them with community and resources. Mondays 9-1 and Thursdays 4-6', '55+'),
(12, 'Special Olympics of Alamance County', 'People with Disabilities', '3916 R. Dean Coleman Rd, Burlington NC 27215', '8am-5pm', 'We have many hours that we offer programs. We have day hours for administrative tasks and special events, evening for practice, weekend for State Level Competition. Offering programs including Special Olympics, programs for the visually impaired and "heart felt" for adults with severe disabilities who are home bound. ', '18-54'),
(13, 'Sustainable Alamance', 'Environment', 'P.O. Box 298, Alamance, NC 27201', 'flexible', 'Volunteers will be working with indirect services, working with many county agencies, courts, faith based partners to identify, develop, and place ex-offenders in jobs, and new business ventures where they may work and even own one day. Also developing the marketing support for the community education, web site, brochures, etc. for the agency and', '18-54'),
(14, 'Family Abuse Services- Administration', 'Crisis Support', '1950 Martin Street, Burlington NC 27215', '8am-5pm', 'Program offering services to battered women and are committed to zero tolerance of domestic violence. Academic Service experiences are specific to Crisis line volunteer positions with required training.The service positions will be filled with training and phone hours directly spent on the line. Crisis line, shelter support or Some office work, and special projects.', '55+'),
(15, 'DreamAlign Ministries', 'Faith Based', '124 East Pine Street, Graham NC 27253', 'flexible', 'DreamAlign Ministries is a tax exempt 501(c)3 Non-Profit organization. We don''t only want to function as a Non-Profit, we also shepherd the people that we help. Giving them assistance not only for today but for eternity. Programs include pantry,clothing closet and job resources.', 'Under 18'),
(16, 'First Presbyterian Church', 'Faith Based', '4397 Millstone Place, Burlington NC 27215', 'flexible', 'The Furniture Ministry at First Presbyterian Church in Burlington collects donations of gently used furniture and other households items and delivers them to needy families within Alamance County. The project is growing, and it is anticipated that other churches and organizations will soon be asked to join. With this growth, we need to develop communication materials, such as a Power Point presentation and Website, and other marketing strategies. It is in this capacity that we would like to include one or more volunteers who have the technical skills to assist with developing the communications materials and who are also learning the skills of marketing strategies and can help with this aspect of our mission.', '18-54'),
(17, 'Burlington Development Corporation', 'Community', '1209 Chandler Ct, Burlington NC 27217', '8am-5pm', 'The purpose of BDC is to provide housing, academic enrichment activities and economic opportunity programs and services for low-income individuals and families.', '55+'),
(18, 'Alamance Cares', 'Community', '3025 S. Church Street, Burlington NC 27216', 'M-F 9am-5pm', 'Students will help support the program with Education/Prevention at Elon and in the community, Information Services and Support Services. There are confidentiality issues that may limit a service learning student''s ability to interact with clients. M-F 9-5', '55+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
