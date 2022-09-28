Create database if not exists tccweb;
use tccweb;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tccweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

DROP TABLE IF EXISTS `musicas`;
CREATE TABLE IF NOT EXISTS `musicas` (
  `id_musica` int NOT NULL AUTO_INCREMENT,
  `nome_musica` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nome_autor` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data_lanca` date NOT NULL,
  PRIMARY KEY (`id_musica`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlists`
--

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE IF NOT EXISTS `playlists` (
  `id_playlist` int NOT NULL AUTO_INCREMENT,
  `nome_playlist` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_playlist`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL Unique,
  `senha` varchar(40) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL Unique,
  `data_nasc` date DEFAULT NULL,
  `is_admin` enum('S','N'),
  `imagem` blob,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
