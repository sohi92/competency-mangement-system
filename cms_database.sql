-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 08, 2018 at 08:48 AM
-- Server version: 5.7.21-log
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Fname`, `Lname`, `Email`, `Contact`, `Country`, `Password`) VALUES
('John', 'Wick', 'johnwick@gmail.cpm', '7894561235', 'Russia', 'jh@123'),
('Nick', 'Furry', 'nickfurry@gmail.cpm', '7458965845', 'America', 'nf@123'),
('Steve', 'Rozer', 'ct.rozer@gmail.com', '7849464164', 'Finland', 'cpt@123'),
('Mini', 'verma', 'mini@frisklancer', '1213889', 'india', '1q2w3e4r5t'),
('aghh', 'esrgdh', 'jct.rozer@gmail.com', '51981651', 'ascdev', '1452'),
('Payal', 'Kumar', 'pmajaukdar@gmail.com', '51981651', 'fewfefew', '111');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_id` varchar(12) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Specialization` varchar(10) NOT NULL,
  `Experiance` double(4,2) NOT NULL,
  PRIMARY KEY (`Emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_id`, `Fname`, `Lname`, `Contact`, `Email`, `Designation`, `Specialization`, `Experiance`) VALUES
('Emp1', 'Illiana', 'Dcruz', '85965236122', 'illianadcrucz@gmail.com', 'Tester', 'multi', 12.50),
('Emp10', 'JP Van', 'Beuzekom', '9585422015', 'jp.van@gmail.com', 'Senior Programmer', 'multi', 20.12),
('Emp100', 'Nathanael', 'Robertson', '9566563222', 'nathanaelrobertson@gmail.com', 'Tester', 'single', 2.60),
('Emp101', 'Russell', 'Erickson', '9556322316', 'russellerickson@gmail.com', 'Senior Programmer', 'single', 6.50),
('Emp102', 'Kimberly', 'Zuniga', '2659623566', 'kimberly@gmail.com', 'Tester', 'multi', 4.30),
('Emp103', 'Anastasia', 'Flynn', '2656321595', 'anastasia@gmail.com', 'Senior Programmer', 'multi', 12.50),
('Emp104', 'Isabelle', 'Boyd', '2623595896', 'isabelleboyd@gmail.com', 'Tester', 'multi', 4.60),
('Emp105', 'Dalia', 'Sims', '9524656232', 'daliasims@gmail.com', 'Senior Programmer', 'multi', 8.30),
('Emp106', 'Camryn', 'Brown', '5961665932', 'camrynbrown@gmail.com', 'Senior Programmer', 'single', 7.20),
('Emp107', 'Alyssa', 'Duran', '5232946548', 'alyssaduran@gmail.com', 'Tester', 'multi', 4.10),
('Emp108', 'Dale', 'Stewart', '4154952662', 'dalestewart@gmail.com', 'Tester', 'single', 3.50),
('Emp109', 'Hudson', 'Khan', '6232948495', 'hudsonKhan@gmail.com', 'Senior Programmer', 'multi', 8.60),
('Emp11', 'Christian', 'Faust', '8854515416', 'cris@gmail.com', 'Senior Programmer', 'Single', 8.50),
('Emp110', 'Marcus', 'Jarvis', '2656265549', 'marcusjarvis@gmail.com', 'Senior Programmer', 'single', 7.50),
('Emp111', 'Cody', 'Booker', '2598596566', 'codybooker@gmail.com', 'Tester', 'multi', 1.60),
('Emp112', 'Fernanda', 'Rosales', '6532195259', 'fernandarosales@gmail.com', 'Software developer', 'multi', 4.00),
('Emp113', 'Alydin', 'Woodward', '9855956265', 'alydin@gmail.com', 'Senior Programmer', 'multi', 12.50),
('Emp114', 'Salma', 'Benjamin', '3262592656', 'salmabenjamin@gmaikl.com', 'Senior Programmer', 'single', 15.80),
('Emp115', 'Iris', 'Orr', '2962265626', 'irisorr@gmail.com', 'Software developer', 'multi', 2.60),
('Emp116', 'Adam', 'Schmidt', '5945126262', 'adamschmidt@gmail.com', 'Senior Programmer', 'multi', 4.20),
('Emp117', 'Maxim', 'Blackwell', '5956962322', 'maximblackwell@gmail.com', 'Tester', 'single', 0.00),
('Emp118', 'Kristen', 'Cohen', '9596326259', 'kristencohen@gmail.com', 'Senior Programmer', 'multi', 7.80),
('Emp119', 'Skyler', 'Mahoney', '5621959556', 'skylermahoney@gmail.com', 'Software developer', 'single', 0.00),
('Emp12', 'Ricky', 'Kwon', '5578896223', 'r.kwon@gmail.com', 'Senior Programmer', 'multi', 4.60),
('Emp120', 'Ashlee', 'Olson', '5962616592', 'ashleeOlson@gmail.com', 'Senior Programmer', 'multi', 6.80),
('Emp13', 'Alfonso', 'Pedregal', '5514515821', 'alfonso@gmail.com', 'Senior Programmer', 'Single', 2.50),
('Emp14', 'Simone', 'Williams', '1254788475', 'simone.williams@gmail.com', 'Software developer', 'multi', 4.50),
('Emp15', 'Michael', 'Naidu', '1477566223', 'michael@gmsail.com', 'Software developer', 'Single', 9.50),
('Emp16', 'Bill', 'Waits', '9852214226', 'billwaits@gmail.com', 'Senior Programmer', 'multi', 7.90),
('Emp17', 'Styeffen', 'Helmschrott', '8541122563', 'styeffen@gmail.com', 'Tester', 'Single', 5.40),
('Emp18', 'Robert', 'Lanza', '9544510255', 'robertlanza@gmail.com', 'Senior Programmer', 'multi', 2.40),
('Emp19', 'Mauro', 'Coelho', '8969551252', 'mauro896@gmail.com', 'Software developer', 'multi', 2.80),
('Emp2', 'Nicolus', 'Cage', '4219865256', 'nicoluscage@gmail.com', 'Software developer', 'Single', 1.10),
('Emp20', 'Wiebe', 'Geldenhuys', '7516525322', 'wiebe@vgmasil.com', 'Senior Programmer', 'multi', 11.12),
('Emp21', 'Louie', 'Nauss', '8812366962', 'louienauss@gmail.com', 'Software developer', 'Single', 9.20),
('Emp22', 'Lowell', 'Frock', '3215215233', 'lowell.frock@gmail.com', 'Tester', 'Single', 1.50),
('Emp23', 'Loyce', 'Sanders', '8512222159', 'Loyce1259@gmail.com', 'Senior Programmer', 'Single', 4.60),
('Emp24', 'Lourdes', 'Navas', '2692214520', 'navas345@gmail.com', 'Tester', 'Single', 22.00),
('Emp25', 'Johnnie', 'Frodge', '8521522155', 'jonnie@gmail.com', 'Tester', 'Single', 11.12),
('Emp26', 'Joie', 'Sandeen', '2245552015', 'joie@gmail.com', 'Senior Programmer', 'Single', 4.40),
('Emp27', 'Jonas', 'Frix', '5218852122', 'jonasFrix@gmail.com', 'Software developer', 'Single', 8.50),
('Emp28', 'Joi', 'Naumes', '1154446962', 'joinaumes@gmail.com', 'Senior Programmer', 'Single', 7.20),
('Emp29', 'Kimi', 'Sandhaus', '8859641499', 'kimi@gmail.com', 'Software developer', 'Single', 1.60),
('Emp3', 'Ana', 'Varela', '2549852155', 'ana.varela@gmail.com', 'Tester', 'single', 5.90),
('Emp30', 'Kiesha', 'Sandercock', '2165449956', 'kiesha@gmail.com', 'Senior Programmer', 'Single', 6.40),
('Emp31', 'Kimbery', 'Nauman', '6458952215', 'kimberry@gmail.com', 'Tester', 'Single', 7.50),
('Emp32', 'Kiara', 'Obin', '8545452152', 'kiara@gmail.com', 'Software developer', 'Single', 6.20),
('Emp33', 'Kiley', 'Obeso', '8512263445', 'kileyobeso@gmail.com', 'Senior Programmer', 'multi', 6.60),
('Emp34', 'Keven', 'Navanjo', '7512669662', 'kaven@gmail.com', 'Tester', 'Single', 10.90),
('Emp35', 'Amelia', 'Oboyle', '8549652330', 'ameliaoboye@gmail.com', 'Senior Programmer', 'multi', 7.40),
('Emp36', 'Ben', 'Oblak', '9266628989', 'benoblak@gmail.com', 'Senior Programmer', 'Single', 9.50),
('Emp37', 'Alysha', 'Froats', '8925365978', 'alyshafroats@gmail.com', 'Software developer', 'multi', 7.80),
('Emp38', 'Ami', 'Panila', '8962569896', 'amipanila@gmail.com', 'Senior Programmer', 'multi', 4.30),
('Emp39', 'Amado', 'Pangle', '6956534965', 'amadopangle@gmail.com', 'Tester', 'multi', 2.20),
('Emp4', 'patricia', 'king', '7854455212', 'patKing@gmail.com', 'Senior Programmer', 'single', 7.40),
('Emp40', 'peter', 'Frizler', '2659595663', 'peterfrizler@gmail.com', 'Senior Programmer', 'multi', 8.70),
('Emp41', 'Wiebe', 'Panias', '9965154652', 'wiebepanias@gmal.com', 'Software developer', 'multi', 4.60),
('Emp42', 'Carolee', 'Yoshi', '8965615622', 'caroleeyoshi@gmail.com', 'Senior Programmer', 'Single', 2.50),
('Emp43', 'Carri', 'Yoseph', '9589662222', 'carriyoseph@gmail.com', 'Senior Programmer', 'Single', 4.90),
('Emp44', 'Carter', 'Yoshi', '4454512222', 'carter@gmail.com', 'Tester', 'multi', 2.70),
('Emp45', 'Tony', 'Stark', '5956561656', 'tonystark56@gmail.com', 'Software developer', 'Single', 1.50),
('Emp46', 'Gven', 'Tenisa', '6123326592', 'gven@gmail.com', 'Senior Programmer', 'multi', 4.80),
('Emp47', 'Dakota', 'Yorker', '9565225956', 'dakota@gmail.com', 'Senior Programmer', 'Single', 4.60),
('Emp48', 'Dalene', 'Yoss', '8546266215', 'saleneyoss@gmail.com', 'Tester', 'multi', 5.50),
('Emp49', 'Damian', 'Winrich', '5965656384', 'damian@gmail.com', 'Software developer', 'multi', 2.30),
('Emp5', 'Charles', 'Monaghan', '4584551156', 'charles@gmail.com', 'Software developer', 'multi', 1.50),
('Emp50', 'Dacia', 'Winkley', '3226599515', '(NULLdacia.winkley@gmail.com', 'Senior Programmer', 'multi', 2.90),
('Emp51', 'peter', 'parker', '8545251155', 'peter.parker@gmail.com', 'Software developer', 'Single', 2.40),
('Emp52', 'Henry', 'Watson', '2185222211', 'henrywatson@gmail.com', 'Tester', 'Single', 5.60),
('Emp53', 'Amenda', 'Yoss', '5145452122', 'amendayoss@gmail.com', 'Senior Programmer', 'multi', 8.80),
('Emp54', 'Anne', 'Lopez', '9569523599', 'annelopez@gmail.com', 'Senior Programmer', 'multi', 13.80),
('Emp55', 'Holly', 'Doyle', '6562326230', 'hollydoyle@gmail.com', 'Software developer', 'single', 5.90),
('Emp56', 'Karina', 'Compton', '5929569562', 'karinacompton@gmail.com', 'Tester', 'multi', 2.50),
('Emp57', 'Desmond', 'Buckley', '2131626232', 'desmondbuckley@gmail.com', 'Software developer', 'multi', 6.60),
('Emp58', 'Harper', 'Hughes', '2623195526', 'harperhughes@gmail.com', 'Software developer', 'single', 1.20),
('Emp59', 'Jade', 'Howell', '2620659499', 'jadehowell@gmail.com', 'Senior Programmer', 'single', 6.90),
('Emp6', 'Fred', 'Schuler', '2554415663', 'fred@gmail.com', 'Software developer', 'multi', 12.10),
('Emp60', 'Kimora', 'Mays', '9595649495', 'kimoramays@gmail.com', 'Software developer', 'single', 14.50),
('Emp61', 'Terrell', 'Potts', '6262326596', 'terrellpotts@gmail.com', 'Senior Programmer', 'single', 4.50),
('Emp62', 'Mohamed', 'George', '5652959636', 'mohamedgeorge@gmail.com', 'Tester', 'multi', 0.11),
('Emp63', 'Yosef', 'Coleman', '9566321111', 'yosefcoleman@gmail.com', 'Software developer', 'single', 1.10),
('Emp64', 'Danna', 'Hensley', '5956559592', 'dannahensley@gmail.com', 'Software developer', 'single', 4.80),
('Emp66', 'Ernesto', 'Bender', '21566653', 'ernesto@gmail.com', 'Software developer', 'Single', 5.60),
('Emp67', 'Fletcher', 'Short', '9965656562', 'short.fletcher@gmail.com', 'Tester', 'multi', 8.50),
('Emp68', 'Yuliana', 'Ewing', '8969559595', 'yuliana@gmail.com', 'Senior Programmer', 'Single', 11.20),
('Emp69', 'Efrain', 'Fields', '9589865562', 'efrain@gmail.com', 'Tester', 'Single', 0.00),
('Emp7', 'John', 'Botts', '8547516562', 'John12@gmail.com', 'Senior Programmer', 'Single', 8.20),
('Emp70', 'Sam', 'Robinson', '9599984655', 'samrobinson@gmail.com', 'Senior Programmer', 'Single', 4.90),
('Emp71', 'Rodrigo', 'Hudson', '8455965595', 'rodrigohudson11@gmail.com', 'Software developer', 'multi', 12.50),
('Emp72', 'Alina', 'Foster', '9595222222', 'alkianafoster5673@gmail.com', 'Tester', 'Single', 4.20),
('Emp73', 'Jadiel', 'Richmond', '8564898922', 'jadielrichmond@gmail.com', 'Senior Programmer', 'multi', 14.60),
('Emp74', 'Markus', 'Lucero', '9592588655', 'markuslucero@gmail.com', 'Tester', 'Single', 2.50),
('Emp75', 'Paxton', 'Walter', '6595665659', 'paxtonwalter@gmail.com', 'Software developer', 'Single', 5.90),
('Emp76', 'Emmett', 'Santiago', '9965369565', 'emmettsantiago@gmail.com', 'Software developer', 'multi', 4.70),
('Emp77', 'Brian', 'Hays', '5495156566', 'brianhays19@gmail.com', 'Tester', 'Single', 4.80),
('Emp777', 'Niolaius', 'Cage', '9849498484', 'nicocage@gmail.com', 'Tester', 'Multi', 2.00),
('Emp78', 'Neil', 'Gamble', '4946959565', 'neilgamble@gmail.com', 'Senior Programmer', 'multi', 15.00),
('Emp79', 'Kristina', 'Levy', '4949461611', 'kristinalevy@gmail.com', 'Software developer', 'Single', 6.00),
('Emp8', 'Frank', 'Vickers', '7511125562', 'Vickers.frank@gmail.com', 'Tester', 'multi', 0.00),
('Emp80', 'Lydia', 'Jennings', '6316352656', 'lydiajennings@gmail.com', 'Tester', 'multi', 5.60),
('Emp81', 'Makhi', 'Mata', '2195461966', 'makhimata@gmail.com', 'Senior Programmer', 'Single', 10.20),
('Emp82', 'Erik', 'Melton', '6262349563', 'erikmelton@gmail.com', 'Senior Programmer', 'single', 10.40),
('Emp83', 'Brennen', 'Patrick', '132396265', '', 'Software developer', 'single', 8.00),
('Emp84', 'Sienna', 'Keller', '9629656626', 'siennakeller@gmail.com', 'Senior Programmer', 'multi', 12.30),
('Emp85', 'Jax', 'Simmons', '2316265296', 'jaxsimmons@gmail.com', 'Senior Programmer', 'single', 9.20),
('Emp86', 'Kristian', 'Ayala', '2626932956', 'kristianayala@gmail.com', 'Tester', 'single', 4.80),
('Emp87', 'Anthony', 'Braun', '2626223126', 'anthonybraun@gmail.com', 'Software developer', 'single', 9.20),
('Emp88', 'Leonard', 'Ali', '2161659223', 'leonardali@gmail.com', 'Senior Programmer', 'single', 5.80),
('Emp89', 'Seamus', 'Shea', '6232154263', 'seamus@gmail.com', 'Tester', 'single', 2.12),
('Emp9', 'Martha', 'Sargent', '6624545222', 'martha@gmail.com', 'Tester', 'single', 0.00),
('Emp90', 'Terrance', 'Randall', '9465629222', 'terrancerandall@gmail.com', 'Software developer', 'single', 9.40),
('Emp91', 'Will', 'Graves', '6261426295', 'willgraves@gmail.com', 'Tester', 'single', 2.30),
('Emp92', 'Matteo', 'Ritter', '6232625956', 'matteoritter@gmail.com', 'Senior Programmer', 'single', 4.10),
('Emp93', 'Carmen', 'Branch', '5962322189', 'carmenbranch@gmail.com', 'Software developer', 'single', 9.10),
('Emp94', 'Dayami', 'Brandt', '6263265659', 'dayamibrandt@gmail.com', 'Tester', 'single', 4.70),
('Emp95', 'Oswaldo', 'Ibarra', '6626265262', 'oswaldoibarra@gmail.com', 'Senior Programmer', 'single', 7.20),
('Emp96', 'Daniela', 'Page', '5989595292', 'danielapage@gmail.com', 'Software developer', 'single', 6.11),
('Emp97', 'Emery', 'Nichols', '5895956562', 'emery@gmail.com', 'Software developer', 'multi', 0.50),
('Emp98', 'Cooper', 'Ball', '9651549595', 'cooperball@gmail.com', 'Senior Programmer', 'single', 13.00),
('Emp99', 'Blaine', 'Cowan', '1525822145', 'blainecoean@gmail.com', 'Software developer', 'multi', 4.70);

-- --------------------------------------------------------

--
-- Table structure for table `skillset`
--

DROP TABLE IF EXISTS `skillset`;
CREATE TABLE IF NOT EXISTS `skillset` (
  `Emp_id` varchar(15) NOT NULL,
  `Skill_name` varchar(30) NOT NULL,
  `Level` varchar(15) NOT NULL,
  `Performance_rating` decimal(3,1) NOT NULL,
  KEY `emp_skill` (`Emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skillset`
--

INSERT INTO `skillset` (`Emp_id`, `Skill_name`, `Level`, `Performance_rating`) VALUES
('Emp60', 'Python', 'medium', '7.8'),
('Emp52', 'Java', 'low', '4.8'),
('Emp100', 'Java', 'medium', '3.5'),
('Emp101', 'Python', 'high', '4.6'),
('Emp36', 'Python', 'high', '7.5'),
('Emp69', 'Python', 'medium', '4.8'),
('Emp59', 'Python', 'medium', '6.5'),
('Emp47', 'Python', 'medium', '1.5'),
('Emp106', 'Python', 'high', '3.2'),
('Emp72', 'Python', 'low', '0.0'),
('Emp108', 'Python', 'medium', '2.5'),
('Emp66', 'Python', 'low', '8.6'),
('Emp11', 'Python', 'low', '9.2'),
('Emp110', 'Python', 'low', '10.0'),
('Emp55', 'Python', 'low', '4.6'),
('Emp51', 'Python', 'low', '5.6'),
('Emp61', 'Python', 'medium', '0.0'),
('Emp114', 'Java', 'medium', '4.5'),
('Emp58', 'Java', 'high', '8.9'),
('Emp45', 'Java', 'low', '1.0'),
('Emp117', 'Java', 'medium', '0.0'),
('Emp7', 'Java', 'medium', '10.0'),
('Emp119', 'Python', 'medium', '9.9'),
('Emp68', 'Java', 'medium', '8.9'),
('Emp74', 'Java', 'medium', '1.5'),
('Emp13', 'Java', 'medium', '0.9'),
('Emp70', 'Python', 'medium', '4.6'),
('Emp15', 'Java', 'medium', '7.5'),
('Emp43', 'Java', 'high', '1.5'),
('Emp42', 'Java', 'low', '2.4'),
('Emp2', 'Java', 'high', '1.6'),
('Emp64', 'Java', 'high', '4.5'),
('Emp21', 'Java', 'high', '8.2'),
('Emp22', 'Python', 'low', '0.5'),
('Emp23', 'Java', 'low', '1.6'),
('Emp24', 'Java', 'high', '3.5'),
('Emp25', 'Java', 'low', '4.7'),
('Emp26', 'Java', 'high', '8.5'),
('Emp27', 'Java', 'high', '9.5'),
('Emp28', 'Python', 'low', '1.5'),
('Emp29', 'Java', 'high', '0.6'),
('Emp3', 'Java', 'high', '6.4'),
('Emp30', 'Java', 'high', '1.5'),
('Emp31', 'Java', 'low', '9.7'),
('Emp32', 'Java', 'high', '4.8'),
('Emp63', 'Java', 'high', '6.4'),
('EMP34', 'Java', 'high', '2.3'),
('Emp4', 'Python', 'low', '6.4'),
('Emp17', 'Python', 'high', '7.9'),
('Emp58', 'Network Security', 'low', '1.5'),
('Emp59', 'C#', 'high', '9.5'),
('Emp60', 'Network Security', 'low', '8.2'),
('Emp61', 'C#', 'high', '4.6'),
('Emp63', 'C#', 'low', '7.2'),
('Emp64', 'C#', 'high', '4.6'),
('Emp66', 'C#', 'medium', '7.5'),
('Emp68', 'Network Security', 'low', '6.3'),
('Emp69', 'C#', 'high', '7.5'),
('Emp7', 'Network Security', 'medium', '1.0'),
('Emp70', 'Network Security', 'low', '0.0'),
('Emp83', 'C#', 'high', '4.6'),
('Emp74', 'Network Security', 'medium', '3.5'),
('Emp75', 'C#', 'low', '5.0'),
('Emp77', 'C#', 'high', '7.6'),
('Emp79', 'Network Security', 'medium', '7.4'),
('Emp82', 'C#', 'low', '4.6'),
('Emp81', 'Network Security', 'high', '8.6'),
('Emp1', 'Network Security', 'low', '3.2'),
('Emp102', 'Network Security', 'medium', '1.2'),
('Emp103', 'C#', 'high', '5.6'),
('Emp104', 'C#', 'high', '9.8'),
('Emp107', 'Network Security', 'medium', '7.5'),
('Emp109', 'C#', 'high', '9.9'),
('Emp113', 'Network Security', 'high', '4.3'),
('Emp115', 'C#', 'low', '2.3'),
('Emp118', 'Network Security', 'high', '7.6'),
('Emp12', 'C#', 'low', '8.7'),
('Emp120', 'Network Security', 'high', '7.6'),
('Emp14', 'C#', 'medium', '8.5'),
('Emp16', 'Network Security', 'low', '4.7'),
('Emp20', 'C#', 'high', '8.9'),
('Emp33', 'Network Security', 'low', '2.3'),
('Emp35', 'C#', 'medium', '4.6'),
('Emp37', 'Network Security', 'high', '1.3'),
('Emp38', 'C#', 'medium', '0.5'),
('Emp39', 'Network Security', 'high', '4.6'),
('Emp40', 'C#', 'medium', '5.6'),
('Emp41', 'Network Security', 'low', '8.9'),
('Emp44', 'C#', 'medium', '9.9'),
('Emp99', 'Network Security', 'low', '7.6'),
('Emp57', 'Network Security', 'high', '7.1'),
('Emp6', 'C#', 'low', '7.0'),
('Emp62', 'Network Security', 'medium', '4.6'),
('Emp67', 'C#', 'high', '3.3'),
('Emp71', 'Network Security', 'medium', '7.7'),
('Emp76', 'C#', 'high', '8.9'),
('Emp78', 'C#', 'medium', '7.4'),
('Emp72', 'Network Security', 'low', '2.3'),
('Emp1', 'Java', 'high', '4.6'),
('Emp102', 'Python', 'low', '9.5'),
('Emp102', 'Java', 'medium', '1.2'),
('Emp103', 'Java', 'low', '5.6'),
('Emp103', 'Python', 'medium', '4.2'),
('Emp104', 'Java', 'low', '7.8'),
('Emp104', 'Network Security', 'medium', '5.6'),
('Emp104', 'Python', 'medium', '4.8'),
('Emp107', 'Java', 'low', '6.9'),
('Emp109', 'Java', 'medium', '4.6'),
('Emp107', 'Python', 'medium', '1.2'),
('Emp109', 'Python', 'low', '0.0'),
('Emp113', 'Java', 'medium', '4.6'),
('Emp113', 'Python', 'medium', '7.9'),
('Emp115', 'Java', 'low', '9.5'),
('Emp118', 'Python', 'high', '10.0'),
('Emp12', 'Java', 'high', '9.2'),
('Emp12', 'Python', 'low', '7.6'),
('Emp120', 'Java', 'high', '1.3'),
('Emp120', 'C#', 'low', '4.6'),
('Emp120', 'Python', 'high', '5.4'),
('Emp14', 'Java', 'high', '7.9'),
('Emp14', 'Python', 'high', '8.5'),
('Emp16', 'Java', 'low', '6.4'),
('Emp16', 'Python', 'medium', '7.7'),
('Emp20', 'Java', 'low', '3.3'),
('Emp33', 'Java', 'high', '5.6'),
('Emp35', 'Java', 'high', '7.9'),
('Emp33', 'Python', 'low', '6.4'),
('Emp35', 'Python', 'medium', '2.8'),
('Emp37', 'Java', 'high', '4.9'),
('Emp37', 'Python', 'low', '2.6'),
('Emp38', 'Java', 'high', '7.9'),
('Emp38', 'Python', 'high', '5.4'),
('Emp39', 'Python', 'low', '6.5'),
('Emp40', 'Java', 'high', '1.2'),
('Emp40', 'Python', 'high', '6.5'),
('Emp41', 'Java', 'low', '4.8'),
('Emp41', 'Python', 'high', '8.9'),
('Emp44', 'Python', 'medium', '7.6'),
('Emp99', 'Java', 'low', '1.3'),
('Emp57', 'Python', 'high', '5.6'),
('Emp99', 'Python', 'low', '6.1'),
('Emp57', 'Java', 'high', '7.1'),
('Emp6', 'Java', 'low', '4.6'),
('Emp6', 'Python', 'high', '9.5'),
('Emp62', 'Java', 'low', '7.5'),
('Emp62', 'Python', 'high', '8.5'),
('Emp67', 'Java', 'low', '4.6'),
('Emp67', 'Python', 'medium', '2.6'),
('Emp71', 'Java', 'low', '7.5'),
('Emp71', 'Python', 'medium', '4.6'),
('Emp76', 'Python', 'low', '9.5'),
('Emp78', 'Java', 'high', '8.2'),
('Emp78', 'Python', 'low', '1.5'),
('Emp48', 'Java', 'medium', '9.4'),
('Emp48', 'Python', 'high', '5.6'),
('Emp49', 'Java', 'low', '4.7'),
('Emp49', 'Python', 'high', '3.5'),
('Emp49', 'PHP', 'low', '6.4'),
('Emp5', 'Java', 'high', '7.6'),
('Emp5', 'Python', 'high', '8.4'),
('Emp5', 'PHP', 'low', '1.5'),
('Emp50', 'Java', 'high', '8.5'),
('Emp50', 'Python', 'low', '6.9'),
('Emp50', 'Network Security', 'high', '7.1'),
('Emp50', 'PHP', 'low', '2.3'),
('Emp53', 'Java', 'high', '4.5'),
('Emp53', 'Python', 'low', '6.7'),
('Emp54', 'Java', 'low', '1.5'),
('Emp54', 'Python', 'high', '3.4'),
('Emp56', 'Java', 'low', '7.6'),
('Emp56', 'Python', 'high', '3.2'),
('Emp56', 'PHP', 'low', '1.4'),
('Emp57', 'Java', 'low', '7.2'),
('Emp57', 'Python', 'high', '4.6'),
('Emp57', 'PHP', 'high', '3.2'),
('Emp6', 'Java', 'high', '2.3'),
('Emp6', 'Python', 'low', '1.5'),
('Emp62', 'Java', 'high', '9.2'),
('Emp62', 'Python', 'low', '0.6'),
('Emp67', 'Java', 'high', '4.7'),
('Emp67', 'Python', 'low', '6.7'),
('Emp67', 'PHP', 'high', '8.1'),
('Emp71', 'Java', 'high', '2.4'),
('Emp71', 'Python', 'low', '6.5'),
('Emp71', 'PHP', 'low', '9.7'),
('Emp73', 'Java', 'low', '4.6'),
('Emp73', 'Python', 'low', '5.6'),
('Emp73', 'PHP', 'high', '7.6'),
('Emp76', 'Java', 'high', '9.8'),
('Emp76', 'Python', 'high', '2.4'),
('Emp78', 'Java', 'high', '3.1'),
('Emp78', 'Python', 'low', '2.4'),
('Emp78', 'PHP', 'high', '8.7'),
('Emp8', 'Java', 'low', '4.3'),
('Emp8', 'Python', 'high', '7.5'),
('Emp8', 'PHP', 'high', '8.2'),
('Emp80', 'Java', 'high', '2.1'),
('Emp80', 'Python', 'low', '4.3'),
('Emp84', 'Java', 'low', '7.2'),
('Emp84', 'Python', 'high', '6.4'),
('Emp84', 'PHP', 'medium', '1.1'),
('Emp97', 'C#', 'high', '0.2'),
('Emp97', 'Java', 'medium', '4.6'),
('Emp97', 'Python', 'low', '6.4'),
('Emp99', 'C#', 'medium', '7.5'),
('Emp99', 'Python', 'high', '8.8'),
('Emp55', 'Java', 'Good', '7.5'),
('Emp14', 'Network Security', 'bad', '1.2'),
('Emp777', 'Python', 'high', '5.0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skillset`
--
ALTER TABLE `skillset`
  ADD CONSTRAINT `FK_skillset` FOREIGN KEY (`Emp_id`) REFERENCES `employee` (`Emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
