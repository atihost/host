-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Jan-2018 às 02:17
-- Versão do servidor: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orlando_agencia02`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_nome` varchar(255) DEFAULT NULL,
  `cliente_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cliente_nome`, `cliente_img`) VALUES
(1, 'cliente 01', 'img/cliente/aetuts.jpg'),
(2, 'cliente 02', 'img/cliente/creative-market.jpg'),
(3, 'cliente 03', 'img/cliente/designmodo.jpg'),
(4, 'cliente 04', 'img/cliente/envato.jpg'),
(5, 'cliente 05', 'img/cliente/microlancer.jpg'),
(6, 'cliente 06', 'img/cliente/themeforest.jpg'),
(7, 'cliente 07', 'img/cliente/wordpress.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `config_site_nome` varchar(255) DEFAULT NULL,
  `config_keywords` longtext,
  `config_autor` varchar(255) DEFAULT NULL,
  `config_ga` longtext,
  `config_site_descricao` longtext,
  `config_og_image` varchar(255) DEFAULT NULL,
  `config_share_buttons` longtext,
  `config_icon` varchar(255) DEFAULT NULL,
  `config_telefone1` varchar(30) DEFAULT NULL,
  `config_telefone2` varchar(30) DEFAULT NULL,
  `config_telefone3` varchar(30) DEFAULT NULL,
  `config_email` varchar(150) DEFAULT NULL,
  `config_rodape_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`config_id`, `config_site_nome`, `config_keywords`, `config_autor`, `config_ga`, `config_site_descricao`, `config_og_image`, `config_share_buttons`, `config_icon`, `config_telefone1`, `config_telefone2`, `config_telefone3`, `config_email`, `config_rodape_img`) VALUES
(1, 'Agência Monstros', 'Dev, PHP, back-end, desenvolvimento, web', 'Orlando Almeida', '<!-- Global site tag (gtag.js) - Google Analytics -->\r\n    <script async src=\"https://www.googletagmanager.com/gtag/js?id=\"></script>\r\n    <script>\r\n       \r\n    </script>', 'Um site com painel administrativo utilizando o framework codeigniter', 'img/public/header-bg.jpg', '<script type=\"text/javascript\" src=\"\"></script>                                                                                                                                                                ', 'img/public/1499168437_Web_Developmen.png', '(13) 33333-3333', '(13) 3333-3333', '', 'admin@admin.com', 'img/public/map-image.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `equipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipe_nome` varchar(255) DEFAULT NULL,
  `equipe_cargo` varchar(255) DEFAULT NULL,
  `equipe_linkedin` varchar(255) DEFAULT NULL,
  `equipe_facebook` varchar(255) DEFAULT NULL,
  `equipe_instagram` varchar(255) DEFAULT NULL,
  `equipe_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`equipe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`equipe_id`, `equipe_nome`, `equipe_cargo`, `equipe_linkedin`, `equipe_facebook`, `equipe_instagram`, `equipe_img`) VALUES
(2, 'Orlando Almeida', 'GIT PUSH --FORCE', 'https://www.linkedin.com/in/orlando-almeida/', 'https://www.facebook.com/orlando.almeida.16', 'https://www.instagram.com/orlandoeal/', 'img/equipe/eu.png'),
(3, 'Octavio Pires', 'full stack ninja developer', '', '', '', 'img/equipe/octavio.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portifolio`
--

DROP TABLE IF EXISTS `portifolio`;
CREATE TABLE IF NOT EXISTS `portifolio` (
  `portifolio_id` int(11) NOT NULL AUTO_INCREMENT,
  `portifolio_categoria` varchar(55) DEFAULT NULL,
  `portifolio_titulo` varchar(55) DEFAULT NULL,
  `portifolio_subtitulo` varchar(55) DEFAULT NULL,
  `portifolio_descricao` longtext,
  `portifolio_link` varchar(255) DEFAULT NULL,
  `portifolio_img` varchar(255) DEFAULT NULL,
  `portifolio_img_full` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`portifolio_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `portifolio`
--

INSERT INTO `portifolio` (`portifolio_id`, `portifolio_categoria`, `portifolio_titulo`, `portifolio_subtitulo`, `portifolio_descricao`, `portifolio_link`, `portifolio_img`, `portifolio_img_full`) VALUES
(4, 'Site Institucional', 'Apet Hotel', 'Hotel de Cães e PetShop', '<p><span style=\"color: rgb(0, 0, 0);\">Hotel para cães / cachorros 5 estrelas Jundiaí - SP</span></p><p><span style=\"font-size: 18px; font-weight: bold; color: rgb(0, 0, 0);\">CAMÊRAS ONLINE EM HD 24 HORAS</span></p><ul><li><span style=\"color: rgb(0, 0, 0); font-weight: 700; font-size: 12px;\">NOSSO ESPAÇO POSSUI CÂMERAS DE ALTA QUALIDADE. DISPONÍVEL PARA ACESSO REMOTO VIA WEB.</span></li></ul><p><span style=\"color: rgb(0, 0, 0); font-weight: 700; font-size: 12px;\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-weight: 700; font-size: 18px;\">PLAYGROUND O DIA INTEIRO!</span></p><ul><li><span style=\"color: rgb(0, 0, 0); font-size: 12px; font-weight: 700;\">OS ANIMAIS TÊM ACESSO A TODA NOSSA ÁREA DE LAZER, ONDE VÃO PODER FAZER NOVAS AMIZADES, PARTICIPAR DE VÁRIAS BRINCADEIRAS, BRINCAR COM NOSSOS BRINQUEDOS ANTIESTRESSE E O PRINCIPAL: GASTAR MUITA ENERGIA!</span></li></ul><p><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 18px; font-weight: bold;\">SUÍTES COM SERVIÇO DE QUARTO</span></p><ul><li><span style=\"color: rgb(0, 0, 0); font-size: 12px; font-weight: 700;\">CARDÁPIO ADAPTADO AO GOSTO DO CÃOZINHO.</span></li></ul><p><span style=\"color: rgb(0, 0, 0); font-size: 12px; font-weight: 700;\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-weight: 700; font-size: 18px;\">SUPERVISÃO VETERINÁRIA 24 HORAS</span></p><ul><li><span style=\"color: rgb(0, 0, 0); font-size: 12px; font-weight: 700;\">PARA QUE VOCÊ VIAJE TRANQUILAMENTE, SABENDO QUE SEU CÃOZINHO ESTARÁ EM BOAS MÃOS, NOSSA EQUIPE POSSUI SUPERVISÃO VETERINÁRIA 24 HORAS POR DIA NO HOTEL</span></li></ul><p><span style=\"color: rgb(0, 0, 0); font-size: 12px; font-weight: 700;\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-weight: 700; font-size: 18px;\">TÁXI DOG</span></p><ul><li><span style=\"color: rgb(0, 0, 0); font-size: 12px; font-weight: 700;\">NÓS OFERECEMOS O SERVIÇO DE LEVA E TRAZ COM AR-CONDICIONADO OU AR-QUENTE. ATENDEMOS A CAPITAL DE SÃO PAULO E INTERIOR.</span></li></ul><p><br></p><p><span style=\"color: rgb(0, 0, 0); font-weight: 700; font-size: 18px;\">ATIVIDADES E BRINQUEDOS ANTIESTRESSE</span></p><p></p><ul><li><span style=\"color: rgb(0, 0, 0); font-size: 12px; font-weight: 700;\">COM OS BRINQUEDOS ANTIESTRESSE OS ANIMAIS PASSAM MAIS TEMPO ENTRETIDOS NAS BRINCADEIRAS E PORTANTO MAIS TEMPO SE DIVERTINDO E GASTANDO MAIS ENERGIA. GERANDO UM AUMENTO DO BEM ESTAR ANIMAL.</span></li></ul>', 'http://www.apethotel.com.br/', 'img/portifolio/dreams.png', 'img/portifolio/roundicons-free.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `servicos_id` int(11) NOT NULL AUTO_INCREMENT,
  `servicos_titulo` varchar(255) DEFAULT NULL,
  `servicos_icone` varchar(50) DEFAULT NULL,
  `servicos_descricao` longtext,
  PRIMARY KEY (`servicos_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`servicos_id`, `servicos_titulo`, `servicos_icone`, `servicos_descricao`) VALUES
(6, 'Sistemas Web de Qualidade Em PHP', 'fa-code', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.'),
(4, 'Amamos O Que Fazemos', 'fa-heart', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.'),
(3, 'Alavancamos Seu Negócio !', 'fa-rocket', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `smtp`
--

DROP TABLE IF EXISTS `smtp`;
CREATE TABLE IF NOT EXISTS `smtp` (
  `smtp_id` int(11) NOT NULL AUTO_INCREMENT,
  `smtp_host` varchar(200) DEFAULT NULL,
  `smtp_email` varchar(200) DEFAULT NULL,
  `smtp_senha` varchar(200) DEFAULT NULL,
  `smtp_porta` varchar(10) DEFAULT NULL,
  `smtp_copia_oculta` varchar(200) DEFAULT NULL,
  `smtp_nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`smtp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `smtp`
--

INSERT INTO `smtp` (`smtp_id`, `smtp_host`, `smtp_email`, `smtp_senha`, `smtp_porta`, `smtp_copia_oculta`, `smtp_nome`) VALUES
(1, 'mx1.hostinger.com.br', 'contato@orlandoalmeida.com.br', 'YcBTfMi7AGIj', '587', 'orlando.ealmeida@gmail.com', 'Agência Monstros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

DROP TABLE IF EXISTS `sobre`;
CREATE TABLE IF NOT EXISTS `sobre` (
  `sobre_id` int(11) NOT NULL AUTO_INCREMENT,
  `sobre_titulo` varchar(255) DEFAULT NULL,
  `sobre_subtitulo` varchar(255) DEFAULT NULL,
  `sobre_desc` longtext,
  `sobre_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sobre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`sobre_id`, `sobre_titulo`, `sobre_subtitulo`, `sobre_desc`, `sobre_img`) VALUES
(5, '2009-2011', 'Our Humble Beginnings', '<p><span style=\"color: rgb(119, 119, 119); font-family: \" roboto=\"\" slab\",=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" right;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</span><br></p>', 'img/sobre/1.jpg'),
(8, 'MARCH 2011', 'An Agency is Born', '<p><span style=\"color: rgb(119, 119, 119); font-family: &quot;Roboto Slab&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</span><br></p>', 'img/sobre/2.jpg'),
(9, 'DECEMBER 2012', 'Transition to Full Service', '<p><span style=\"color: rgb(119, 119, 119); font-family: &quot;Roboto Slab&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: right;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</span><br></p>', 'img/sobre/3.jpg'),
(10, 'JULY 2014', 'Phase Two Expansion', '<p><span style=\"color: rgb(119, 119, 119); font-family: &quot;Roboto Slab&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</span><br></p>', 'img/sobre/4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `social`
--

DROP TABLE IF EXISTS `social`;
CREATE TABLE IF NOT EXISTS `social` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `social_facebook_url` varchar(255) DEFAULT NULL,
  `social_linkedin_url` varchar(255) DEFAULT NULL,
  `social_instagram_url` varchar(255) DEFAULT NULL,
  `social_google_url` varchar(255) DEFAULT NULL,
  `social_github_url` varchar(255) DEFAULT NULL,
  `social_bitbucket_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `social`
--

INSERT INTO `social` (`social_id`, `social_facebook_url`, `social_linkedin_url`, `social_instagram_url`, `social_google_url`, `social_github_url`, `social_bitbucket_url`) VALUES
(1, 'https://www.facebook.com/orlando.almeida.16', 'https://www.linkedin.com/in/orlando-almeida/', 'https://www.instagram.com/orlandoeal/', 'https://plus.google.com/u/0/112920672951524234426', 'https://github.com/orlandoeal', 'https://bitbucket.org/orlandoalmeida/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto`
--

DROP TABLE IF EXISTS `texto`;
CREATE TABLE IF NOT EXISTS `texto` (
  `texto_id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_servico` varchar(50) DEFAULT NULL,
  `texto_sub_servico` varchar(255) DEFAULT NULL,
  `texto_portifolio` varchar(50) DEFAULT NULL,
  `texto_sub_portifolio` varchar(255) DEFAULT NULL,
  `texto_sobre` varchar(50) DEFAULT NULL,
  `texto_sub_sobre` varchar(255) DEFAULT NULL,
  `texto_equipe` varchar(50) DEFAULT NULL,
  `texto_sub_equipe` varchar(255) DEFAULT NULL,
  `texto_contato` varchar(50) DEFAULT NULL,
  `texto_sub_contato` varchar(255) DEFAULT NULL,
  `texto_titulo` varchar(50) DEFAULT NULL,
  `texto_subtitulo` varchar(50) DEFAULT NULL,
  `texto_botao_topo` varchar(25) DEFAULT NULL,
  `texto_botao_mensagem` varchar(25) DEFAULT NULL,
  `texto_sobre_final` varchar(150) DEFAULT NULL,
  `texto_equipe_final` longtext,
  PRIMARY KEY (`texto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`texto_id`, `texto_servico`, `texto_sub_servico`, `texto_portifolio`, `texto_sub_portifolio`, `texto_sobre`, `texto_sub_sobre`, `texto_equipe`, `texto_sub_equipe`, `texto_contato`, `texto_sub_contato`, `texto_titulo`, `texto_subtitulo`, `texto_botao_topo`, `texto_botao_mensagem`, `texto_sobre_final`, `texto_equipe_final`) VALUES
(1, 'SERVIÇOS', 'Conheça Nossos Serviços', 'PORTIFÓLIO', 'Veja Alguns de Nossos Trabalhos.', 'SOBRE', 'Conheça Um Pouco Mais Sobre Nós!', 'NOSSA EQUIPE', 'Conheça Nossa Equipe.', 'CONTATE-NOS', 'Envie-nos Sua Mensagem.', 'Bem Vindo À Nossa Agência !', 'Prazer em conhece-lo !', 'CONHEÇA MAIS', 'ENVIAR MENSAGEM', 'SEJA PARTE  DA NOSSA  HISTÓRIA!', 'O trabalho em equipe vai além das paredes da Nossa Empresa: chega até as salas dos nossos clientes e parceiros. É por isso que procuramos conhecer a fundo cada um deles e nos envolvemos em suas estratégias, buscando influenciar, criar novos modelos de negócios e revelar oportunidades. Nos orgulhamos de trabalhar para marcas admiradas. Mas principalmente para empresas e pessoas que admiramos profundamente.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_nome` varchar(255) DEFAULT NULL,
  `usuario_email` varchar(255) DEFAULT NULL,
  `usuario_senha` varchar(255) DEFAULT NULL,
  `usuario_nivel` int(11) DEFAULT '1',
  PRIMARY KEY (`usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_senha`, `usuario_nivel`) VALUES
(1, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
