-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 28. bře 2018, 15:27
-- Verze serveru: 10.1.26-MariaDB
-- Verze PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `omts_at51`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `act`
--

CREATE TABLE `act` (
  `movie_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `act`
--

INSERT INTO `act` (`movie_id`, `actor_id`) VALUES
(45678, 1148),
(54321, 2034),
(54354, 2012),
(54354, 3893),
(76576, 5873),
(87687, 9593),
(98765, 2012),
(98798, 2039);

-- --------------------------------------------------------

--
-- Struktura tabulky `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `d_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `actor`
--

INSERT INTO `actor` (`ID`, `fname`, `lname`, `d_birth`) VALUES
(1148, 'Amy', 'Adams', '1974-08-20'),
(2012, 'Harrison', 'Ford', '1942-07-13'),
(2034, 'Martin', 'Freeman', '1971-09-08'),
(2039, 'Mark', 'Hamill', '1951-09-25'),
(3893, 'Robin', 'Wright', '1966-04-06'),
(5873, 'Zachary', 'Quinto', '1977-06-02'),
(9593, 'Meryl', 'Streep', '1949-06-22');

-- --------------------------------------------------------

--
-- Struktura tabulky `complex`
--

CREATE TABLE `complex` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `street_Name` varchar(55) DEFAULT NULL,
  `street_Number` int(11) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `state` varchar(55) DEFAULT NULL,
  `zip` varchar(6) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `complex`
--

INSERT INTO `complex` (`ID`, `street_Name`, `street_Number`, `city`, `state`, `zip`, `phone`) VALUES
(123, 'Hanover Ct', 18, 'Belleville', 'Arizona', '765679', '5456768252'),
(132, 'Greenlees Dr', 203, 'Whitby', 'Kansas', '368596', '4537894637'),
(141, 'Biscayne St', 25, 'New Castle', 'Alaska', '838747', '9283746574');

-- --------------------------------------------------------

--
-- Struktura tabulky `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `d_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `director`
--

INSERT INTO `director` (`ID`, `fname`, `lname`, `d_birth`) VALUES
(1234, 'Rian', 'Johnson', '1973-12-17'),
(1810, 'Rob', 'Marshall', '1960-10-17'),
(2345, 'Denis', 'Villeneuve', '1967-10-03'),
(3847, 'Ridley', 'Scott', '1937-11-30'),
(4637, 'Peter', 'Jackson', '1961-10-31'),
(5678, 'Justin', 'Lin', '1973-10-11'),
(7983, 'Kevin', 'Lima', '1962-06-12');

-- --------------------------------------------------------

--
-- Struktura tabulky `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `director_id` int(11) DEFAULT NULL,
  `production` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `rating` varchar(5) DEFAULT NULL,
  `synopsis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `movie`
--

INSERT INTO `movie` (`ID`, `director_id`, `production`, `title`, `duration`, `rating`, `synopsis`) VALUES
(45678, 7983, 'Disney', 'Enchanted', 109, 'G', 'A young maiden in a land called Andalasia, who is prepared to be wed, is sent away to New York City by an evil queen, where she falls in love with a lawyer.'),
(54321, 4637, 'New Line Cinema', 'The Hobbit: An Unexpected Journey', 135, 'PG', 'A reluctant Hobbit, Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home, and the gold within it from the dragon Smaug.'),
(54354, 2345, 'Colombia Pictures', 'Blade Runner 2049', 160, 'R', 'A young blade runners discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who has been missing for thirty years.'),
(76576, 5678, 'Paramount Pictures', 'Star Trek: Beyond', 120, 'PG', 'The U.S.S. Enterprise crew explores the furthest reaches of uncharted space, where they encounter a new ruthless enemy, who puts them, and everything the Federation stands for, to the test.'),
(87687, 1810, 'Disney', 'Into the Woods', 120, 'PG', 'A witch tasks a childless baker and his wife with procuring magical items from classic fairy tales to reverse the curse put on their family tree.'),
(98765, 3847, 'Warner Bros', 'Blade Runner', 140, 'R', 'A blade runner must pursue and try to terminate four replicants who stole a ship in space and have returned to Earth to find their creator.'),
(98798, 1234, 'Disney', 'Star Wars: The Last Jedi', 130, 'PG', 'Rey develops her newly discovered abilities with the guidance of Luke Skywalker, who is unsettled by the strength of her powers. Meanwhile, the Resistance prepares for battle with the First Order.');

-- --------------------------------------------------------

--
-- Struktura tabulky `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `showing_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `run`
--

CREATE TABLE `run` (
  `movie_id` int(11) NOT NULL,
  `complex_id` int(11) NOT NULL,
  `s_date` date DEFAULT NULL,
  `e_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `run`
--

INSERT INTO `run` (`movie_id`, `complex_id`, `s_date`, `e_date`) VALUES
(45678, 123, '2018-04-01', '2018-05-17'),
(54321, 123, '2018-04-01', '2018-06-01'),
(54354, 141, '2018-03-21', '2018-05-01'),
(76576, 141, '2018-03-17', '2018-04-25'),
(87687, 141, '2018-04-12', '2018-05-29'),
(98765, 132, '2018-03-10', '2018-04-25'),
(98798, 123, '2018-04-10', '2018-05-11');

-- --------------------------------------------------------

--
-- Struktura tabulky `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `showing`
--

CREATE TABLE `showing` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `theatre_id` int(11) DEFAULT NULL,
  `complex_id` int(11) DEFAULT NULL,
  `s_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `showing`
--

INSERT INTO `showing` (`ID`, `movie_id`, `theatre_id`, `complex_id`, `s_time`) VALUES
(102938, 45678, 103, 123, '2018-04-16 14:35:00'),
(112345, 87687, 142, 141, '2018-04-17 19:05:00'),
(127383, 54354, 151, 141, '2018-04-17 16:15:00'),
(219283, 54321, 133, 123, '2018-04-16 16:45:00'),
(383838, 98765, 125, 132, '2018-04-16 16:35:00'),
(992376, 98798, 103, 123, '2018-04-17 18:50:00'),
(998876, 76576, 142, 141, '2018-04-16 18:10:00');

-- --------------------------------------------------------

--
-- Struktura tabulky `supplier`
--

CREATE TABLE `supplier` (
  `name` varchar(255) NOT NULL,
  `street_name` varchar(55) DEFAULT NULL,
  `street_number` int(11) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `state` varchar(55) DEFAULT NULL,
  `zip` varchar(6) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `contact_fname` varchar(55) DEFAULT NULL,
  `contact_lname` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `supplier`
--

INSERT INTO `supplier` (`name`, `street_name`, `street_number`, `city`, `state`, `zip`, `phone`, `contact_fname`, `contact_lname`) VALUES
('Distributors Inc', 'MacDonnell St', 10, 'Whitby', 'Alaska', '19284', '9051234560', 'Jim', 'Filmore'),
('Supplies International', 'Sunnyside Ave', 1034, 'York', 'Alabama', '28375', '9055678109', 'Trish', 'Johnson');

-- --------------------------------------------------------

--
-- Struktura tabulky `supply`
--

CREATE TABLE `supply` (
  `movie_id` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `supply`
--

INSERT INTO `supply` (`movie_id`, `supplier`) VALUES
(45678, 'Distributors Inc'),
(54321, 'Distributors Inc'),
(54354, 'Supplies International'),
(76576, 'Distributors Inc'),
(87687, 'Distributors Inc'),
(98765, 'Supplies International'),
(98798, 'Supplies International');

-- --------------------------------------------------------

--
-- Struktura tabulky `theatre`
--

CREATE TABLE `theatre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `complex_ID` int(11) DEFAULT NULL,
  `max_seats` int(11) DEFAULT NULL,
  `screen` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `theatre`
--

INSERT INTO `theatre` (`ID`, `complex_ID`, `max_seats`, `screen`) VALUES
(103, 123, 150, 'Large'),
(125, 132, 150, 'Large'),
(133, 123, 100, 'Medium'),
(142, 141, 100, 'Medium'),
(151, 141, 50, 'Small');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `street_Name` varchar(55) DEFAULT NULL,
  `street_Number` int(11) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `state` varchar(55) DEFAULT NULL,
  `zip` varchar(6) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `card_expiration` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `password`, `fname`, `lname`, `street_Name`, `street_Number`, `city`, `state`, `zip`, `phone`, `email`, `card_number`, `card_expiration`) VALUES
(1, 1, '1fluffy1', 'Joey', 'Bextra', 'Sundae St', 108, 'Kingston', 'Maryland', '38457', '2828373746', 'joeybear@msn.com', 2003933, '0719'),
(2, 1, 'unusualPlants', 'Amy', 'Beermansion', 'Maple Ln', 74, 'Cambridge', 'Maryland', '38489', '2837363534', 'cactus@outlook.ca', 4002822, '0920'),
(3, 1, 'iLuvPie12345', 'Alizabeth', 'Bax', 'Maquaw Rd', 195, 'London', 'Arizona', '19283', '1937498598', 'pie@hotmail.com', 1003033, '0522'),
(4, 0, 'shrek3wasactuallyPrettygood', 'Taylor', 'Smith', 'Chia Seed Ave', 41, 'London', 'Oregon', '92837', '3736464537', 'shrekisluv@gmail.com', 2003738, '0821'),
(5, 0, '', 'Petr', 'Tichy', 'King', 987, 'Kingston', 'Ontario', 'K7L3A3', '456789123', 'test@test.cz', 2147483647, '22/55'),
(6, 0, 'pass123', 'Jack', 'Doe', 'Bri-an', 123, 'Dublin', 'Ireland', '79846', '789465235', 'jack@doe.ir', 2147483647, '0051');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `act`
--
ALTER TABLE `act`
  ADD PRIMARY KEY (`movie_id`,`actor_id`),
  ADD KEY `actor_id` (`actor_id`);

--
-- Klíče pro tabulku `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `complex`
--
ALTER TABLE `complex`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `director_id` (`director_id`);

--
-- Klíče pro tabulku `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `showing_id` (`showing_id`);

--
-- Klíče pro tabulku `run`
--
ALTER TABLE `run`
  ADD PRIMARY KEY (`movie_id`,`complex_id`),
  ADD KEY `complex_id` (`complex_id`);

--
-- Klíče pro tabulku `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`,`reservation_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Klíče pro tabulku `showing`
--
ALTER TABLE `showing`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `theatre_id` (`theatre_id`),
  ADD KEY `complex_id` (`complex_id`);

--
-- Klíče pro tabulku `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`name`);

--
-- Klíče pro tabulku `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`movie_id`,`supplier`),
  ADD KEY `supplier` (`supplier`);

--
-- Klíče pro tabulku `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `complex_ID` (`complex_ID`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL  AUTO_INCREMENT, AUTO_INCREMENT=9594;

ALTER TABLE `complex`
  MODIFY `id` int(11) NOT NULL  AUTO_INCREMENT, AUTO_INCREMENT=142;

ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL  AUTO_INCREMENT, AUTO_INCREMENT=7983;

ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL  AUTO_INCREMENT, AUTO_INCREMENT=98798;

ALTER TABLE `showing`
  MODIFY `id` int(11) NOT NULL  AUTO_INCREMENT, AUTO_INCREMENT=998877;

ALTER TABLE `theatre`
  MODIFY `id` int(11) NOT NULL  AUTO_INCREMENT, AUTO_INCREMENT=152;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `act`
--
ALTER TABLE `act`
  ADD CONSTRAINT `act_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `act_ibfk_2` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`ID`);

--
-- Omezení pro tabulku `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`director_id`) REFERENCES `director` (`ID`);

--
-- Omezení pro tabulku `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`showing_id`) REFERENCES `showing` (`ID`);

--
-- Omezení pro tabulku `run`
--
ALTER TABLE `run`
  ADD CONSTRAINT `run_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `run_ibfk_2` FOREIGN KEY (`complex_id`) REFERENCES `complex` (`ID`);

--
-- Omezení pro tabulku `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`ID`);

--
-- Omezení pro tabulku `showing`
--
ALTER TABLE `showing`
  ADD CONSTRAINT `showing_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `showing_ibfk_2` FOREIGN KEY (`theatre_id`) REFERENCES `theatre` (`ID`),
  ADD CONSTRAINT `showing_ibfk_3` FOREIGN KEY (`complex_id`) REFERENCES `complex` (`ID`);

--
-- Omezení pro tabulku `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `supply_ibfk_2` FOREIGN KEY (`supplier`) REFERENCES `supplier` (`name`);

--
-- Omezení pro tabulku `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `theatre_ibfk_1` FOREIGN KEY (`complex_ID`) REFERENCES `complex` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
