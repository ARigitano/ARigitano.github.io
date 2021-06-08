-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 08 juin 2021 à 15:31
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cocktails_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `cocktails`
--

CREATE TABLE `cocktails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredients` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cocktails`
--

INSERT INTO `cocktails` (`id`, `name`, `ingredients`) VALUES
(1, 'Black Russian', 'Vodka;Kahlua'),
(2, 'Margarita', 'Tequila;TripleSec;Lime'),
(3, 'Absinth', 'Absinth;Water;SugarCube'),
(4, 'Long Island Iced Tea', 'Vodka;Gin;RhumWhite;TripleSec;Tequila;Lemon;Cola'),
(5, 'Perfect After Eight', 'Get27;LiquorWhiteCacao'),
(6, 'Cuba Libre', 'RhumWhite;Lime;Cola'),
(7, 'Expresso Martini', 'LiquorWhiteCacao;Kahlua;Vodka'),
(8, 'Caipiroska', 'Vodka;Lime;SugarPowdered'),
(9, 'Mojito', 'RhumWhite;Lime;Mint;WaterSparkling;SugarCaneSyrup'),
(10, 'Aperol Spritz', 'WaterSparkling;WineWhite;Aperol'),
(11, 'Pina Colada', 'RhumWhite;RhumDark;JuicePineapple;MilkCoconut'),
(12, 'Daiquiri', 'RhumWhite;Lime;SugarCaneSyrup'),
(13, 'Mai Tai', 'RhumWhite;RhumDark;TripleSec;SugarCaneSyrup;Lime;SyrupOrgeat'),
(14, 'Grog', 'RhumWhite;SugarCube;Vanilla;Lemon;Cinnamon'),
(15, 'Strawberry Mojito', 'RhumWhite;Mint;Lime;Strawberry;JuiceStrawberry;SugarCaneSyrup'),
(16, 'Eggnog', 'Brandy;Milk;RhumDark;Egg;SugarPowdered;SourCreamLiquid'),
(17, 'Royal Mojito', 'RhumWhite;Lime;SugarCaneSyrup;Mint;Champagne'),
(18, 'Strawberry Daiquiri', 'LiquorStrawberry;RhumWhite;Lemon;SugarPowdered;Strawberry'),
(19, 'Coco Loco', 'RhumWhite;CoconutMilk;SugarPowdered;Milk'),
(20, 'Shrubb', 'SugarCaneSyrup;Orange;Mandarin;RhumWhite;Vanilla;Cinnamon;Nutmeg'),
(21, 'Cosmopolitan', 'Vodka;TripleSec;JuiceCranberry;Lime'),
(22, 'Caipirinha', 'Cachaca;Lime;SugarPowdered'),
(23, 'Blue Lagoon', 'Vodka;CuracaoBlue;Lemon'),
(24, 'Alaska', 'Gin;Chartreuse'),
(26, 'Irish Coffee', 'Whiskey;Coffee;SugarCaneSyrup;SourCreamLiquid'),
(27, 'Bazooka', 'Vodka;CuracaoBlue;Baileys'),
(28, 'Bitter Sweet Symphony', 'Vodka;Campari;JuiceGrapefruit');

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('AlcoholStrong','AlcoholLow','Soft','Other') NOT NULL,
  `have` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `type`, `have`) VALUES
(3, 'Vodka', 'AlcoholStrong', 1),
(4, 'Kahlua', 'AlcoholLow', 1),
(5, 'Tequila', 'AlcoholStrong', 1),
(6, 'TripleSec', 'AlcoholLow', 1),
(7, 'Lime', 'Other', 0),
(8, 'Absinth', 'AlcoholStrong', 1),
(9, 'Water', 'Soft', 1),
(10, 'SugarCube', 'Other', 1),
(11, 'Gin', 'AlcoholStrong', 1),
(12, 'RhumWhite', 'AlcoholStrong', 1),
(13, 'Lemon', 'Other', 1),
(14, 'Cola', 'Soft', 0),
(15, 'Get27', 'AlcoholLow', 1),
(16, 'LiquorWhiteCacao', 'AlcoholLow', 1),
(17, 'SugarPowdered', 'Other', 1),
(18, 'Mint', 'Other', 0),
(19, 'WaterSparkling', 'Soft', 1),
(20, 'SugarCaneSyrup', 'Other', 1),
(21, 'WineWhite', 'AlcoholLow', 0),
(22, 'Aperol', 'AlcoholLow', 0),
(23, 'RhumDark', 'AlcoholStrong', 0),
(24, 'JuicePineapple', 'Soft', 0),
(25, 'MilkCoconut', 'Soft', 0),
(26, 'SyrupOrgeat', 'Other', 0),
(27, 'Vanilla', 'Other', 0),
(28, 'Cinnamon', 'Other', 1),
(29, 'Strawberry', 'Other', 0),
(30, 'JuiceStrawberry', 'Soft', 0),
(31, 'Brandy', 'AlcoholStrong', 0),
(32, 'Milk', 'Soft', 1),
(33, 'Egg', 'Other', 1),
(34, 'SourCreamLiquid', 'Other', 1),
(35, 'Champagne', 'AlcoholLow', 0),
(36, 'LiquorStrawberry', 'AlcoholLow', 1),
(37, 'Orange', 'Other', 0),
(38, 'Mandarin', 'Other', 0),
(39, 'Nutmeg', 'Other', 0),
(40, 'JuiceCranberry', 'Soft', 0),
(41, 'Cachaca', 'AlcoholLow', 0),
(42, 'CuracaoBlue', 'AlcoholLow', 1),
(43, 'Whiskey', 'AlcoholStrong', 1),
(44, 'Chartreuse', 'AlcoholStrong', 1),
(45, 'Baileys', 'AlcoholLow', 1),
(47, 'Campari', 'AlcoholLow', 1),
(48, 'Picon', 'AlcoholLow', 1),
(49, 'LiquorMandarin', 'AlcoholLow', 1),
(50, 'Martini', 'AlcoholLow', 1),
(51, 'LiquorLemon', '', 0),
(52, 'GoldStrike', '', 0),
(53, 'Suze', 'AlcoholLow', 1),
(54, 'Porto', 'AlcoholLow', 1),
(55, 'LiquorGrapefruit', 'AlcoholLow', 1),
(56, 'Americano', 'AlcoholLow', 1),
(57, 'Coffee', 'Soft', 1),
(58, 'JuiceGrapefruit', 'Soft', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ingredientsfood`
--

CREATE TABLE `ingredientsfood` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Meat','Vegetable','Spice','Other') NOT NULL,
  `have` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredientsfood`
--

INSERT INTO `ingredientsfood` (`id`, `name`, `type`, `have`) VALUES
(1, 'Honey', 'Other', 1),
(2, 'Salt', 'Other', 1),
(3, 'Vinegar', 'Other', 1),
(4, 'DuckBreast', 'Meat', 1),
(5, 'Cumin', 'Spice', 1),
(6, 'Curry', 'Spice', 1),
(7, 'Water', 'Other', 1),
(8, 'Potato', 'Vegetable', 1),
(9, 'Carrot', 'Vegetable', 1),
(10, 'Onion', 'Vegetable', 1),
(11, 'Butter', 'Other', 1),
(12, 'SourCream', 'Other', 1);

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredients` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `ingredients`) VALUES
(1, 'Honey duck breast', 'DuckBreast;Honey;Vinegar;Salt'),
(2, 'Carrot soup with cumin', 'Carrot;Cumin;Salt;Curry;Water;Potato;Onion;Butter;SourCream');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cocktails`
--
ALTER TABLE `cocktails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `ingredientsfood`
--
ALTER TABLE `ingredientsfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cocktails`
--
ALTER TABLE `cocktails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `ingredientsfood`
--
ALTER TABLE `ingredientsfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
