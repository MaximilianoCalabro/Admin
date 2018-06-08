-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2018 a las 19:00:51
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adminbase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactenos`
--

CREATE TABLE `contactenos` (
  `idcontactenos` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `numtel` varchar(20) NOT NULL,
  `correo` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contactenos`
--

INSERT INTO `contactenos` (`idcontactenos`, `titulo`, `direccion`, `numtel`, `correo`) VALUES
(1, 'Contactenos', 'Crespo 2417 2º piso / Santa Fe, Argentina', '+54 0342 4530322', 'Info@nkstudios.net');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucional`
--

CREATE TABLE `institucional` (
  `idinstitucional` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `prezi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucional`
--

INSERT INTO `institucional` (`idinstitucional`, `titulo`, `prezi`) VALUES
(1, 'Institucional', 'https://prezi.com/embed/8tvdkmqhq42q/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;landing_data=bHVZZmNaNDBIWnNjdEVENDRhZDFNZGNIUE43MHdLNWpsdFJLb2ZHanI5dkdPcmR0TW9qOG8yZHNJbU9GcFNjMFJ3PT0&amp;landing_sign=-VvLreCyYH43N4Mp0CZ0-SBrO_IGq0Q-UkIb2fZQwTs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `idportfolio` int(11) NOT NULL,
  `separadores` varchar(45) NOT NULL,
  `filtro1` varchar(45) NOT NULL,
  `filtro2` varchar(45) NOT NULL,
  `filtro3` varchar(45) NOT NULL,
  `imagen_portfolio` varchar(75) NOT NULL,
  `subtitulo` varchar(45) NOT NULL,
  `pagina` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `portfolio`
--

INSERT INTO `portfolio` (`idportfolio`, `separadores`, `filtro1`, `filtro2`, `filtro3`, `imagen_portfolio`, `subtitulo`, `pagina`) VALUES
(1, 'Diseño y Programación Web / Hosting', 'filter-dp', 'filter-h', '-', 'tecsa.jpg', 'Tecsa S.A.', 'http://www.tecsa-sa.com/'),
(2, 'Community Manager / Hosting', 'filter-dp', '-', '-', 'stfmateriales.jpg', 'Santa Fe Materiales', 'http://www.santafemateriales.com.ar/'),
(3, 'Community Manager / Hosting', 'filter-cm', 'filter-h', '-', 'carnave.jpg', 'Carnave', 'http://www.carnave.com.ar/'),
(4, 'Community Manager', 'filter-cm', '-', '-', 'amiunfb.jpg', 'AMIUN Toyota Santa Fe', 'https://www.facebook.com/Amiun.Toyota.SantaFe'),
(5, 'Diseño y Programación Web / Hosting', 'filter-dp', 'filter-h', '-', 'amiun.jpg', 'AMIUN Toyota', 'http://www.amiun.com.ar'),
(6, 'Hosting', 'filter-h', '-', '-', 'speedagro.jpg', 'SpeedAgro', 'https://www.speedagro.com.ar'),
(7, 'Community Manager', 'filter-cm', '-', '-', 'carmiel.jpg', 'Carmiel', 'https://www.facebook.com/CarmielHeladosyCafe'),
(8, 'Diseño y Programación Web', 'filter-dp', '-', '-', 'cac.jpg', 'CAC Santa Fe', 'http://www.camarco.org.ar'),
(9, 'Diseño y Programación Web', 'filter-dp', '-', '-', 'ambithotel.jpg', 'Ambit Boulevard Boutique', 'http://www.ambithotel.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idservicios` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idservicios`, `titulo`, `texto`) VALUES
(1, 'Servicios', 'Brindamos una amplia gama de servicios y asesoramiento adaptándonos a la medida y exigencias de nuestros clientes:');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idslider` int(11) NOT NULL,
  `imagen_slider` varchar(75) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idslider`, `imagen_slider`, `titulo`, `texto`) VALUES
(3, '1.jpg', 'Somos Profesionales', 'En NKStudios SRL, desde el año 2000 desarrollamos paginas web y sitios de ecommerce a medida para una gran variedad de clientes tanto nacionales como del exterior. La experiencia lograda nos permite comprender las ideas, necesidades y objetivos de nuestros clientes a la hora de desarrollar sus proyectos web.'),
(4, '2.jpg', 'Seriedad Laboral', 'Sentimos cada proyecto como propio, es por esto que los trabajos que aceptamos son desarrollados con el único propósito de satisfacer las expectativas y objetivos de cada cliente.'),
(5, '3.jpg', 'Amplia Experiencia', 'Hemos desarrollado paginas web para: inmobiliarias, concesionarias de automóviles, fabricas, industrias, profesionales, artistas, fundaciones, comercios, entretenimientos, asociaciones, portales temáticos, paginas para venta online, agencias, clubes, mutuales y también desarrollamos proyectos para empresas de diseño que tercerizan sus proyectos en nosotros.'),
(6, '4.jpg', 'Amplia gama de servicios', 'Los servicios que ofrecemos comprenden desde el diseño, la programación, desarrollo de contenidos, traducción de contenidos, el alojamiento web, marketing en Internet, optimización y posicionamiento en buscadores.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subservicios`
--

CREATE TABLE `subservicios` (
  `idsubservicios` int(11) NOT NULL,
  `icono` varchar(100) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `subtexto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subservicios`
--

INSERT INTO `subservicios` (`idsubservicios`, `subtitulo`, `subtexto`) VALUES
(1, 'icono1.png', 'Marketing y Publicidad', 'NK ofrece a sus clientes un equipo de trabajo especializado, profesional, con gran capacidad y experiencia que se integra a su empresa, local o emprendimiento convirtiéndose en su estructura de Marketing.'),
(2, 'icono2.png', 'Social Media', 'Escuchamos, planificamos y actuamos para alcanzar tu mercado objetivo y así aumentar tus ventas, tu contacto con tus seguidores o dar a conocer tus actividades, ideas o convicciones.'),
(3, 'icono3.jpg', 'Diseño y Programación Web', 'Realizados a medida, utilizando las mas actualizadas herramientas y estrategias digitales, sustentados con la experiencia de mas de 17 años en el rubro e infinidad de clientes y desafíos que forman parte de la experiencia y la calidad de nuestros desarrollos.'),
(4, 'icono4.jpg', 'Arquitectura Publicitaria', 'Desarrollamos ideas para hacer más visibles tus productos, ideas para que tu presencia en ferias o exposiciones sea la mas adecuada a tu estrategia de Marketing ferial.'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maximiliano Pablo Calabro', 'maxi_calabro@hotmail.com', '$2y$10$LqCXTIREgumUt4lO/Fgiy.rqkY80NjLAamKG7sYc3wHOv8gjniojK', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  ADD PRIMARY KEY (`idcontactenos`);

--
-- Indices de la tabla `institucional`
--
ALTER TABLE `institucional`
  ADD PRIMARY KEY (`idinstitucional`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`idportfolio`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idservicios`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`idslider`);

--
-- Indices de la tabla `subservicios`
--
ALTER TABLE `subservicios`
  ADD PRIMARY KEY (`idsubservicios`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  MODIFY `idcontactenos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `institucional`
--
ALTER TABLE `institucional`
  MODIFY `idinstitucional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `idportfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idservicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `subservicios`
--
ALTER TABLE `subservicios`
  MODIFY `idsubservicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
