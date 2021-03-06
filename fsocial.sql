-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31-Maio-2019 às 13:12
-- Versão do servidor: 5.7.21
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
-- Database: `fsocial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairro`
--

DROP TABLE IF EXISTS `bairro`;
CREATE TABLE IF NOT EXISTS `bairro` (
  `id_bairro` int(11) NOT NULL AUTO_INCREMENT,
  `desc_bairro` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bairro`)
) ENGINE=MyISAM AUTO_INCREMENT=394 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bairro`
--

INSERT INTO `bairro` (`id_bairro`, `desc_bairro`) VALUES
(2, 'Cidade de Deus'),
(3, 'Cidade Nova'),
(4, 'Colonia Santo Antonio'),
(5, 'Colonia Terra Nova'),
(6, 'Lago Azul'),
(7, 'Monte das Oliveiras'),
(8, 'Nova Cidade'),
(9, 'Novo Aleixo'),
(10, 'Novo Israel'),
(11, 'Santa Etelvina'),
(12, 'Agnus Day'),
(13, 'aguas Claras'),
(14, 'Amadeu Botelho'),
(15, 'Amazonino Mendes'),
(16, 'América do Sul'),
(17, 'Bairro Novo'),
(18, 'Boas Novas'),
(19, 'Campo Dourado'),
(20, 'Carlos Braga'),
(22, 'Colonia Japonesa'),
(23, 'Comagi'),
(24, 'Fazendinha'),
(25, 'Florestal'),
(26, 'Francisca Mendes'),
(27, 'Galileia'),
(28, 'Gustavo Nascimento'),
(29, 'Ismail Aziz'),
(30, 'Jardim Canaranas'),
(31, 'Jardim Fortaleza'),
(32, 'Jardim Independente'),
(33, 'José Bonifacio'),
(34, 'Luiz Otavio'),
(35, 'Manoa'),
(36, 'Monte Pascoal'),
(37, 'Monte Sinai'),
(38, 'Mundo Novo'),
(39, 'Mutirão'),
(40, 'Nossa Senhora de Fatima'),
(41, 'Nossa Senhora do Perpétuo Socorro'),
(42, 'Novo MilleniumOmar Aziz'),
(43, 'Oswaldo Américo'),
(44, 'Oswaldo Frota'),
(45, 'Parque Canaã'),
(46, 'Parque Celebridade'),
(47, 'Parque das Garças'),
(48, 'Parque das Nações'),
(49, 'Parque dos Buritis'),
(50, 'Parque dos Ingleses'),
(63, 'Alfredo Nascimento'),
(64, 'Aliança com Deus'),
(118, 'Américo Medeiros'),
(119, 'Bairro do Céu'),
(21, 'Colonia Cachoeira Grande'),
(154, 'Parque Senador Jefferson Péres'),
(155, 'Raio de Sol'),
(156, 'Renato Souza Pinto'),
(157, 'Riacho Doce'),
(158, 'Ribeiro Júnior'),
(159, 'Rio Piorini'),
(160, 'Santa Marta'),
(161, 'São João'),
(162, 'Vale do Sinai'),
(163, 'Vila Manaus'),
(164, 'Vila Nova'),
(165, 'Vitoria Régia'),
(166, 'Armando Mendes'),
(167, 'Colonia Antonio Aleixo'),
(168, 'Coroado'),
(169, 'Distrito Industrial II'),
(170, 'Gilberto Mestrinho'),
(171, 'Jorge Teixeira'),
(172, 'Mauazinho'),
(173, 'Puraquequara'),
(174, 'São José Operario'),
(175, 'Tancredo Neves'),
(176, 'Zumbi dos Palmares'),
(177, 'Acariquara'),
(178, 'Asteca'),
(179, 'Bela Vista'),
(180, 'Braga Mendes'),
(181, 'Buritizal'),
(182, 'Castanheira'),
(183, 'Cidade do Leste'),
(184, 'Colina do Aleixo'),
(185, 'Com Colonia Antonio Aleixo'),
(186, 'Com Nova Esperança'),
(187, 'Com Planalto'),
(188, 'Do Vale'),
(189, 'Fé'),
(190, 'Grande Vitoria'),
(191, 'Itacolomi'),
(192, 'João Bosco'),
(193, 'João Paulo'),
(194, 'Monte Sião'),
(195, 'Nova Conquista'),
(196, 'Nova Floresta'),
(197, 'Nova Jerusalém'),
(198, 'Nova Vitoria'),
(199, 'Novo Reino'),
(200, 'Ouro Verde'),
(201, 'Parque Rouxinol'),
(202, 'Parque São Cristovão'),
(203, 'Parque Sucupiras'),
(204, 'Petro'),
(205, 'Portelinha'),
(206, 'Presidente Lula'),
(207, 'Rio Negro'),
(208, 'Santa Inês'),
(209, 'São Lucas'),
(210, 'Sharp'),
(211, 'Tiradentes'),
(212, 'Valparaiso'),
(213, '11 de Maio'),
(214, 'Betânia'),
(215, 'Cachoeirinha'),
(216, 'Centro'),
(217, 'Colonia Oliveira Machado'),
(218, 'Crespo'),
(219, 'Distrito Industrial I'),
(220, 'Educandos'),
(221, 'Japiim'),
(222, 'Morro da Liberdade'),
(223, 'Nossa Senhora de Aparecida'),
(224, 'Petropolis'),
(225, 'Praça 14 de Janeiro'),
(226, 'Presidente Vargas'),
(227, 'Raiz'),
(228, 'Santa Luzia'),
(229, 'São Francisco'),
(230, 'São Lazaro'),
(231, 'Vila Buriti'),
(232, 'Andreaza'),
(233, 'Baixa da Égua'),
(234, 'Ceasa'),
(235, 'Costa e Silva'),
(236, 'Getúlio Vargas'),
(237, 'Jap. Codajas'),
(238, 'Japiinlândia'),
(239, 'Jardim Brasil'),
(240, 'Jardim Petropolis'),
(241, 'Jarulândia'),
(242, 'Jerusalém'),
(243, 'Lagoa Verde'),
(244, 'Matinha'),
(245, 'Nova República'),
(246, 'Quarenta'),
(247, 'São Sebastião'),
(248, 'Vale do Sol'),
(249, 'Vila Humaita'),
(250, '31 de Março'),
(251, '22 de Outubro'),
(252, 'Adrianopolis'),
(253, 'Aleixo'),
(254, 'Chapada'),
(255, 'Flores'),
(256, 'Nossa Senhora das Graças'),
(257, 'Parque 10 de Novembro'),
(258, 'São Geraldo'),
(259, 'Abilio Nery'),
(260, 'Aefam'),
(261, 'Agricentro'),
(262, 'Arthur Reis'),
(263, 'Anavilhanas'),
(264, 'Bairro da União'),
(265, 'Barra Bela'),
(266, 'Beija Flor'),
(267, 'Beverly Hills'),
(268, 'Castelo Branco'),
(269, 'Celetra'),
(270, 'Copacabana'),
(271, 'Duque de Caxias'),
(272, 'Eldorado'),
(273, 'Encol'),
(274, 'Fernando Fritz'),
(275, 'Floral'),
(276, 'Huascar Angelim'),
(277, 'Ica Magistral'),
(278, 'Ica Paraiba'),
(279, 'Ipanema'),
(280, 'Jardim Amazonas'),
(281, 'Jardim California'),
(282, 'Jardim Espanha'),
(283, 'Jardim Eucaliptos'),
(284, 'Jardim Haydea'),
(285, 'Jardim Iara'),
(286, 'Jardim Imperial'),
(287, 'Jardim Italia'),
(288, 'Jardim Meridional'),
(289, 'Jardim Olivia'),
(290, 'Jardim Oriente'),
(291, 'Jardim Paulista'),
(292, 'Jardim Primavera'),
(293, 'Jardim Sakura'),
(294, 'Jardim Yolanda'),
(295, 'Juliana'),
(296, 'Levillage Blanc'),
(297, 'Malibu'),
(298, 'Morada do Sol'),
(299, 'Mucuripe'),
(300, 'Murici'),
(301, 'Nascente aguas Claras'),
(302, 'Nova Friburgo'),
(303, 'Novo Horizonte'),
(304, 'Novo Mundo'),
(305, 'Parque das Laranjeiras'),
(306, 'Parque Residencial Monte Libano'),
(307, 'Parque Shangri-la'),
(308, 'Parque Tropical'),
(309, 'Pindorama'),
(310, 'Portal do Japão'),
(311, 'Presidente Getúlio Vargas'),
(312, 'Real'),
(313, 'Rio Mar'),
(314, 'Rio Maracanã'),
(315, 'Samambaia'),
(316, 'Santa Cruz'),
(317, 'São José do Rio Negro'),
(318, 'Sausalito'),
(319, 'Sol Morar'),
(320, 'Tapajos'),
(321, 'Uirapuru'),
(322, 'Verdes Mares'),
(323, 'Vieiralves'),
(324, 'Vila Amazonas'),
(325, 'Vila da Barra'),
(326, 'Vila do Rey'),
(327, 'Vila Mariana'),
(328, 'Vila Municipal'),
(329, 'Compensa'),
(330, 'Gloria'),
(331, 'Lirio do Vale'),
(332, 'Nova Esperança'),
(333, 'Ponta Negra'),
(334, 'Santo Agostinho'),
(335, 'Santo Antonio'),
(336, 'São Jorge'),
(337, 'São Raimundo'),
(338, 'Tarumã'),
(339, 'Tarumã-Açu'),
(340, 'Vila da Prata'),
(341, 'Augusto Montenegro'),
(342, 'Ayapua'),
(343, 'Campos Sales'),
(344, 'Com Promorar'),
(345, 'Com Vitoria Régia'),
(346, 'Ipase'),
(347, 'Jardim América'),
(348, 'Jardim dos Barés'),
(349, 'Jardim Europa'),
(350, 'Jesus Me Deu'),
(351, 'Mediterrâneo'),
(352, 'Meu Bem, Meu Mal'),
(353, 'Parque Aruanã'),
(354, 'Parque do Lago'),
(355, 'Parque Residencial Itapuranga'),
(356, 'Parque Riachuelo'),
(357, 'Rio Xingu'),
(358, 'Rumo Certo'),
(359, 'Santo Antonio Areal'),
(360, 'Santo Antonio Igreja'),
(361, 'Santo Antonio Manda Brasa'),
(362, 'São Pedro'),
(363, 'União da Vitoria'),
(364, 'Vila Marinho'),
(365, 'Vila Verde'),
(366, 'Vivenda Verde'),
(367, 'Alvorada'),
(368, 'Bairro da Paz'),
(369, 'Dom Pedro'),
(370, 'Planalto'),
(371, 'Redenção'),
(372, 'Ajuricaba'),
(373, 'Aripuanã'),
(374, 'Aristocratico'),
(375, 'Belvedere'),
(376, 'Campos Eliseos'),
(377, 'Canaã'),
(378, 'Com Ouro Verde'),
(379, 'Déborah'),
(380, 'Flamanal'),
(381, 'Hileia'),
(382, 'Jardim Versailles'),
(383, 'Jurua'),
(384, 'Jussara'),
(385, 'Kissia'),
(386, 'Marina Taua'),
(387, 'Parque e Gomes'),
(388, 'Promorar'),
(389, 'Rio Jamar'),
(390, 'Santa Barbara'),
(391, 'Santa Teresinha'),
(392, 'Santos Dumont'),
(393, 'Vista Bela');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `cid_desc` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cidade`)
) ENGINE=MyISAM AUTO_INCREMENT=296 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `cid_desc`) VALUES
(1, 'ALTA FLORESTA D\'OESTE'),
(2, 'ARIQUEMES'),
(3, 'CABIXI'),
(4, 'CACOAL'),
(5, 'CEREJEIRAS'),
(6, 'COLORADO DO OESTE'),
(7, 'CORUMBIARA'),
(8, 'COSTA MARQUES'),
(9, 'ESPIGÃO D\'OESTE'),
(10, 'GUAJARÁ-MIRIM'),
(11, 'JARU'),
(12, 'JI-PARANÁ'),
(13, 'MACHADINHO D\'OESTE'),
(14, 'NOVA BRASILÂNDIA D\'OESTE'),
(15, 'OURO PRETO DO OESTE'),
(16, 'PIMENTA BUENO'),
(17, 'PORTO VELHO'),
(18, 'PRESIDENTE MÉDICI'),
(19, 'RIO CRESPO'),
(20, 'ROLIM DE MOURA'),
(21, 'SANTA LUZIA D\'OESTE'),
(22, 'VILHENA'),
(23, 'SÃO MIGUEL DO GUAPORÉ'),
(24, 'NOVA MAMORÉ'),
(25, 'ALVORADA D\'OESTE'),
(26, 'ALTO ALEGRE DOS PARECIS'),
(27, 'ALTO PARAÍSO'),
(28, 'BURITIS'),
(29, 'NOVO HORIZONTE DO OESTE'),
(30, 'CACAULÂNDIA'),
(31, 'CAMPO NOVO DE RONDÔNIA'),
(32, 'CANDEIAS DO JAMARI'),
(33, 'CASTANHEIRAS'),
(34, 'CHUPINGUAIA'),
(35, 'CUJUBIM'),
(36, 'GOVERNADOR JORGE TEIXEIRA'),
(37, 'ITAPUÃ DO OESTE'),
(38, 'MINISTRO ANDREAZZA'),
(39, 'MIRANTE DA SERRA'),
(40, 'MONTE NEGRO'),
(41, 'NOVA UNIÃO'),
(42, 'PARECIS'),
(43, 'PIMENTEIRAS DO OESTE'),
(44, 'PRIMAVERA DE RONDÔNIA'),
(45, 'SÃO FELIPE D\'OESTE'),
(46, 'SÃO FRANCISCO DO GUAPORÉ'),
(47, 'SERINGUEIRAS'),
(48, 'TEIXEIRÓPOLIS'),
(49, 'THEOBROMA'),
(50, 'URUPÁ'),
(51, 'VALE DO ANARI'),
(52, 'VALE DO PARAÍSO'),
(53, 'ACRELÂNDIA'),
(54, 'ASSIS BRASIL'),
(55, 'BRASILÉIA'),
(56, 'BUJARI'),
(57, 'CAPIXABA'),
(58, 'CRUZEIRO DO SUL'),
(59, 'EPITACIOLÂNDIA'),
(60, 'FEIJÓ'),
(61, 'JORDÃO'),
(62, 'MÂNCIO LIMA'),
(63, 'MANOEL URBANO'),
(64, 'MARECHAL THAUMATURGO'),
(65, 'PLÁCIDO DE CASTRO'),
(66, 'PORTO WALTER'),
(67, 'RIO BRANCO'),
(68, 'RODRIGUES ALVES'),
(69, 'SANTA ROSA DO PURUS'),
(70, 'SENADOR GUIOMARD'),
(71, 'SENA MADUREIRA'),
(72, 'TARAUACÁ'),
(73, 'XAPURI'),
(74, 'PORTO ACRE'),
(75, 'ALVARÃES'),
(76, 'AMATURÁ'),
(77, 'ANAMÃ'),
(78, 'ANORI'),
(79, 'APUÍ'),
(80, 'ATALAIA DO NORTE'),
(81, 'AUTAZES'),
(82, 'BARCELOS'),
(83, 'BARREIRINHA'),
(84, 'BENJAMIN CONSTANT'),
(85, 'BERURI'),
(86, 'BOA VISTA DO RAMOS'),
(87, 'BOCA DO ACRE'),
(88, 'BORBA'),
(89, 'CAAPIRANGA'),
(90, 'CANUTAMA'),
(91, 'CARAUARI'),
(92, 'CAREIRO'),
(93, 'CAREIRO DA VÁRZEA'),
(94, 'COARI'),
(95, 'CODAJÁS'),
(96, 'EIRUNEPÉ'),
(97, 'ENVIRA'),
(98, 'FONTE BOA'),
(99, 'GUAJARÁ'),
(100, 'HUMAITÁ'),
(101, 'IPIXUNA'),
(102, 'IRANDUBA'),
(103, 'ITACOATIARA'),
(104, 'ITAMARATI'),
(105, 'ITAPIRANGA'),
(106, 'JAPURÁ'),
(107, 'JURUÁ'),
(108, 'JUTAÍ'),
(109, 'LÁBREA'),
(110, 'MANACAPURU'),
(111, 'MANAQUIRI'),
(112, 'MANAUS'),
(113, 'MANICORÉ'),
(114, 'MARAÃ'),
(115, 'MAUÉS'),
(116, 'NHAMUNDÁ'),
(117, 'NOVA OLINDA DO NORTE'),
(118, 'NOVO AIRÃO'),
(119, 'NOVO ARIPUANÃ'),
(120, 'PARINTINS'),
(121, 'PAUINI'),
(122, 'PRESIDENTE FIGUEIREDO'),
(123, 'RIO PRETO DA EVA'),
(124, 'SANTA ISABEL DO RIO NEGRO'),
(125, 'SANTO ANTÔNIO DO IÇÁ'),
(126, 'SÃO GABRIEL DA CACHOEIRA'),
(127, 'SÃO PAULO DE OLIVENÇA'),
(128, 'SÃO SEBASTIÃO DO UATUMÃ'),
(129, 'SILVES'),
(130, 'TABATINGA'),
(131, 'TAPAUÁ'),
(132, 'TEFÉ'),
(133, 'TONANTINS'),
(134, 'UARINI'),
(135, 'URUCARÁ'),
(136, 'URUCURITUBA'),
(137, 'AMAJARI'),
(138, 'ALTO ALEGRE'),
(139, 'BOA VISTA'),
(140, 'BONFIM'),
(141, 'CANTÁ'),
(142, 'CARACARAÍ'),
(143, 'CAROEBE'),
(144, 'IRACEMA'),
(145, 'MUCAJAÍ'),
(146, 'NORMANDIA'),
(147, 'PACARAIMA'),
(148, 'RORAINÓPOLIS'),
(149, 'SÃO JOÃO DA BALIZA'),
(150, 'SÃO LUIZ'),
(151, 'UIRAMUTÃ'),
(152, 'ABAETETUBA'),
(153, 'ABEL FIGUEIREDO'),
(154, 'ACARÁ'),
(155, 'AFUÁ'),
(156, 'ÁGUA AZUL DO NORTE'),
(157, 'ALENQUER'),
(158, 'ALMEIRIM'),
(159, 'ALTAMIRA'),
(160, 'ANAJÁS'),
(161, 'ANANINDEUA'),
(162, 'ANAPU'),
(163, 'AUGUSTO CORRÊA'),
(164, 'AURORA DO PARÁ'),
(165, 'AVEIRO'),
(166, 'BAGRE'),
(167, 'BAIÃO'),
(168, 'BANNACH'),
(169, 'BARCARENA'),
(170, 'BELÉM'),
(171, 'BELTERRA'),
(172, 'BENEVIDES'),
(173, 'BOM JESUS DO TOCANTINS'),
(174, 'BONITO'),
(175, 'BRAGANÇA'),
(176, 'BRASIL NOVO'),
(177, 'BREJO GRANDE DO ARAGUAIA'),
(178, 'BREU BRANCO'),
(179, 'BREVES'),
(180, 'BUJARU'),
(181, 'CACHOEIRA DO PIRIÁ'),
(182, 'CACHOEIRA DO ARARI'),
(183, 'CAMETÁ'),
(184, 'CANAÃ DOS CARAJÁS'),
(185, 'CAPANEMA'),
(186, 'CAPITÃO POÇO'),
(187, 'CASTANHAL'),
(188, 'CHAVES'),
(189, 'COLARES'),
(190, 'CONCEIÇÃO DO ARAGUAIA'),
(191, 'CONCÓRDIA DO PARÁ'),
(192, 'CUMARU DO NORTE'),
(193, 'CURIONÓPOLIS'),
(194, 'CURRALINHO'),
(195, 'CURUÁ'),
(196, 'CURUÇÁ'),
(197, 'DOM ELISEU'),
(198, 'ELDORADO DO CARAJÁS'),
(199, 'FARO'),
(200, 'FLORESTA DO ARAGUAIA'),
(201, 'GARRAFÃO DO NORTE'),
(202, 'GOIANÉSIA DO PARÁ'),
(203, 'GURUPÁ'),
(204, 'IGARAPÉ-AÇU'),
(205, 'IGARAPÉ-MIRI'),
(206, 'INHANGAPI'),
(207, 'IPIXUNA DO PARÁ'),
(208, 'IRITUIA'),
(209, 'ITAITUBA'),
(210, 'ITUPIRANGA'),
(211, 'JACAREACANGA'),
(212, 'JACUNDÁ'),
(213, 'JURUTI'),
(214, 'LIMOEIRO DO AJURU'),
(215, 'MÃE DO RIO'),
(216, 'MAGALHÃES BARATA'),
(217, 'MARABÁ'),
(218, 'MARACANÃ'),
(219, 'MARAPANIM'),
(220, 'MARITUBA'),
(221, 'MEDICILÂNDIA'),
(222, 'MELGAÇO'),
(223, 'MOCAJUBA'),
(224, 'MOJU'),
(225, 'MOJUÍ DOS CAMPOS'),
(226, 'MONTE ALEGRE'),
(227, 'MUANÁ'),
(228, 'NOVA ESPERANÇA DO PIRIÁ'),
(229, 'NOVA IPIXUNA'),
(230, 'NOVA TIMBOTEUA'),
(231, 'NOVO PROGRESSO'),
(232, 'NOVO REPARTIMENTO'),
(233, 'ÓBIDOS'),
(234, 'OEIRAS DO PARÁ'),
(235, 'ORIXIMINÁ'),
(236, 'OURÉM'),
(237, 'OURILÂNDIA DO NORTE'),
(238, 'PACAJÁ'),
(239, 'PALESTINA DO PARÁ'),
(240, 'PARAGOMINAS'),
(241, 'PARAUAPEBAS'),
(242, 'PAU D\'ARCO'),
(243, 'PEIXE-BOI'),
(244, 'PIÇARRA'),
(245, 'PLACAS'),
(246, 'PONTA DE PEDRAS'),
(247, 'PORTEL'),
(248, 'PORTO DE MOZ'),
(249, 'PRAINHA'),
(250, 'PRIMAVERA'),
(251, 'QUATIPURU'),
(252, 'REDENÇÃO'),
(253, 'RIO MARIA'),
(254, 'RONDON DO PARÁ'),
(255, 'RURÓPOLIS'),
(256, 'SALINÓPOLIS'),
(257, 'SALVATERRA'),
(258, 'SANTA BÁRBARA DO PARÁ'),
(259, 'SANTA CRUZ DO ARARI'),
(260, 'SANTA IZABEL DO PARÁ'),
(261, 'SANTA LUZIA DO PARÁ'),
(262, 'SANTA MARIA DAS BARREIRAS'),
(263, 'SANTA MARIA DO PARÁ'),
(264, 'SANTANA DO ARAGUAIA'),
(265, 'SANTARÉM'),
(266, 'SANTARÉM NOVO'),
(267, 'SANTO ANTÔNIO DO TAUÁ'),
(268, 'SÃO CAETANO DE ODIVELAS'),
(269, 'SÃO DOMINGOS DO ARAGUAIA'),
(270, 'SÃO DOMINGOS DO CAPIM'),
(271, 'SÃO FÉLIX DO XINGU'),
(272, 'SÃO FRANCISCO DO PARÁ'),
(273, 'SÃO GERALDO DO ARAGUAIA'),
(274, 'SÃO JOÃO DA PONTA'),
(275, 'SÃO JOÃO DE PIRABAS'),
(276, 'SÃO JOÃO DO ARAGUAIA'),
(277, 'SÃO MIGUEL DO GUAMÁ'),
(278, 'SÃO SEBASTIÃO DA BOA VISTA'),
(279, 'SAPUCAIA'),
(280, 'SENADOR JOSÉ PORFÍRIO'),
(281, 'SOURE'),
(282, 'TAILÂNDIA'),
(283, 'TERRA ALTA'),
(284, 'TERRA SANTA'),
(285, 'TOMÉ-AÇU'),
(286, 'TRACUATEUA'),
(287, 'TRAIRÃO'),
(288, 'TUCUMÃ'),
(289, 'TUCURUÍ'),
(290, 'ULIANÓPOLIS'),
(291, 'URUARÁ'),
(292, 'VIGIA'),
(293, 'VISEU'),
(294, 'VITÓRIA DO XINGU'),
(295, 'XINGUARA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `demandas`
--

DROP TABLE IF EXISTS `demandas`;
CREATE TABLE IF NOT EXISTS `demandas` (
  `dem_id` int(11) NOT NULL AUTO_INCREMENT,
  `dem_data` date NOT NULL,
  `dem_status` varchar(30) NOT NULL,
  `dem_usu_id` int(11) NOT NULL,
  PRIMARY KEY (`dem_id`),
  KEY `fk_usuario` (`dem_usu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `demandas`
--

INSERT INTO `demandas` (`dem_id`, `dem_data`, `dem_status`, `dem_usu_id`) VALUES
(29, '2019-05-12', 'Transferido', 3),
(30, '2019-05-12', 'Transferido', 3),
(27, '2019-05-12', 'Alta', 3),
(57, '2019-04-15', 'Óbito', 3),
(55, '2019-02-01', 'Internado', 4),
(58, '2019-04-15', 'Transferido', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `internacao`
--

DROP TABLE IF EXISTS `internacao`;
CREATE TABLE IF NOT EXISTS `internacao` (
  `interna_id` int(11) NOT NULL AUTO_INCREMENT,
  `interna_data` date NOT NULL,
  `interna_admissao` varchar(100) NOT NULL,
  `interna_clinica` varchar(100) NOT NULL,
  `interna_leito` varchar(10) NOT NULL,
  `interna_diagnostico` varchar(200) NOT NULL,
  `interna_status` varchar(20) NOT NULL,
  `interna_mov` date DEFAULT NULL,
  `interna_pac_id` int(11) NOT NULL,
  `interna_usu_id` int(11) NOT NULL,
  PRIMARY KEY (`interna_id`),
  KEY `fk_usuario` (`interna_usu_id`),
  KEY `fk_paciente` (`interna_pac_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `internacao`
--

INSERT INTO `internacao` (`interna_id`, `interna_data`, `interna_admissao`, `interna_clinica`, `interna_leito`, `interna_diagnostico`, `interna_status`, `interna_mov`, `interna_pac_id`, `interna_usu_id`) VALUES
(9, '2019-05-01', 'HUGV', 'Médica', '11', 'Fratuta eposta', 'Transferido', '2019-05-12', 26, 3),
(10, '2019-05-12', 'HUGV', 'Médica', '15', 'Cancer', 'Transferido', '2019-04-15', 20, 3),
(8, '2019-03-10', 'HUGV', 'Médica', '10', 'Insuficiencia cardiaca', 'Transferido', '2019-05-08', 25, 0),
(14, '2019-02-01', 'HUGV', 'Médica', '5', 'Fratura', 'Internado', NULL, 27, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `pac_id` int(11) NOT NULL AUTO_INCREMENT,
  `pac_entrevista` date DEFAULT NULL,
  `pac_prontuario` varchar(15) NOT NULL,
  `pac_cadsus` varchar(20) NOT NULL,
  `pac_cpf` varchar(11) DEFAULT NULL,
  `pac_documento` varchar(20) DEFAULT NULL,
  `pac_nome` varchar(200) NOT NULL,
  `pac_endereco` varchar(200) NOT NULL,
  `pac_estado` varchar(50) NOT NULL,
  `pac_telefone` varchar(15) DEFAULT NULL,
  `pac_recado` varchar(50) DEFAULT NULL,
  `pac_celular` varchar(100) DEFAULT NULL,
  `pac_nome_pai` varchar(200) DEFAULT NULL,
  `pac_prof_pai` varchar(100) DEFAULT NULL,
  `pac_nome_mae` varchar(200) DEFAULT NULL,
  `pac_prof_mae` varchar(100) DEFAULT NULL,
  `pac_conjugue` varchar(200) DEFAULT NULL,
  `pac_prof_conjugue` varchar(100) DEFAULT NULL,
  `pac_responsavel` varchar(200) DEFAULT NULL,
  `pac_responsavel_vinc` varchar(100) DEFAULT NULL,
  `pac_naturalidade` varchar(100) NOT NULL,
  `pac_nascimento` date NOT NULL,
  `pac_idade` int(11) NOT NULL,
  `pac_sexo` varchar(10) NOT NULL,
  `pac_agregacao` varchar(100) DEFAULT NULL,
  `pac_escolaridade` varchar(100) DEFAULT NULL,
  `pac_pessoas_res` varchar(100) DEFAULT NULL,
  `pac_pessoas_rend` int(11) DEFAULT NULL,
  `pac_renda` varchar(30) DEFAULT NULL,
  `pac_tipo_casa` varchar(100) NOT NULL,
  `pac_const_casa` varchar(100) NOT NULL,
  `pac_comodos` int(20) NOT NULL,
  `pac_esgoto` varchar(100) NOT NULL,
  `pac_agua` varchar(100) NOT NULL,
  `pac_luz` varchar(100) NOT NULL,
  `pac_ocupa` varchar(100) DEFAULT NULL,
  `pac_profissao` varchar(100) DEFAULT NULL,
  `pac_local_trabalho` varchar(200) DEFAULT NULL,
  `pac_relacao_trabalhista` varchar(100) DEFAULT NULL,
  `pac_vinculo_prev` varchar(100) DEFAULT NULL,
  `pac_orgao_vinc` varchar(100) DEFAULT NULL,
  `pac_bairro` varchar(150) NOT NULL,
  `pac_cidade_id` int(11) NOT NULL,
  `pac_usu_id` int(11) NOT NULL,
  PRIMARY KEY (`pac_id`),
  KEY `fk_usuario` (`pac_usu_id`),
  KEY `fk_cidade` (`pac_cidade_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`pac_id`, `pac_entrevista`, `pac_prontuario`, `pac_cadsus`, `pac_cpf`, `pac_documento`, `pac_nome`, `pac_endereco`, `pac_estado`, `pac_telefone`, `pac_recado`, `pac_celular`, `pac_nome_pai`, `pac_prof_pai`, `pac_nome_mae`, `pac_prof_mae`, `pac_conjugue`, `pac_prof_conjugue`, `pac_responsavel`, `pac_responsavel_vinc`, `pac_naturalidade`, `pac_nascimento`, `pac_idade`, `pac_sexo`, `pac_agregacao`, `pac_escolaridade`, `pac_pessoas_res`, `pac_pessoas_rend`, `pac_renda`, `pac_tipo_casa`, `pac_const_casa`, `pac_comodos`, `pac_esgoto`, `pac_agua`, `pac_luz`, `pac_ocupa`, `pac_profissao`, `pac_local_trabalho`, `pac_relacao_trabalhista`, `pac_vinculo_prev`, `pac_orgao_vinc`, `pac_bairro`, `pac_cidade_id`, `pac_usu_id`) VALUES
(20, NULL, '3333', '333', '73722189268', '16137191', 'Jackson Gonçalves Gomes', 'Rua Sinval de Moura, 449', 'Amazonas', '(92) 3305-4780', '', '(92) 98238-2882', 'teste', 'teste', 'teste', 'testes', 'test', 'test', 'test', 'Pai', 'Nhamundá-AM', '1983-04-12', 36, 'Masculino', 'Reside com esposo(a) e/ou filhos', '8) Superior incompleto', '2) 04 a 06 pessoas', 2, 'Mais de 07 SM', 'Própria', '1) Alvenaria', 10, 'Tubulação', '1) Rede básica', '1) Elétrica regularizada', '4) Outros', 'Tecnico em informatica', 'HUGV', '1) CLT', '1) Empregado', 'INSS', 'Petropolis', 224, 4),
(25, '2019-05-06', '444', '4444', '', '', 'Analizz Souza Gomes', 'Rua teste', 'Amazonas', '', '', '', 'Jackson Gonçalves Gomes', 'Técnico em Informática', 'Alessandra Souza Nascimento', 'Contadora', '', '', 'Jackson Gonçalves Gomes', 'Pai', 'Manaus/AM', '2017-04-21', 2, 'Feminino', 'Reside com pais e/ou irmãos', 'Não alfabetizado', '04 a 06', 2, 'Mais de 07 SM', 'Própria', 'Alvenaria', 10, 'Tubulação', 'Rede básica', 'Elétrica regularizada', 'Estudante', '', '', '', '', '', 'Petropolis', 224, 6),
(26, '2019-05-06', '555', '5555', '', '', 'Analice Souza Gomes', 'Rua Sinval de Moura, 449', 'Amazonas', '', '(92) 98238-2882', '', 'Jackson Gonçalves Gomes', 'Técnico em Informática', 'Alessandra Souza Nascimento', 'Contadora', '', '', 'Jackson Gonçalves Gomes', 'Pai', 'Manaus/AM', '2008-04-21', 11, 'Feminino', 'Reside com pais e/ou irmãos', 'Fundamental incompleto', '04 a 06', 2, 'Mais de 07 SM', 'Própria', 'Alvenaria', 10, 'Tubulação', 'Rede básica', 'Elétrica regularizada', 'Estudante', '', '', '', '', '', 'Petropolis', 224, 6),
(27, '2019-05-06', '666', '6666', '', '', 'Alessandra Souza Nascimento', 'Rua Sinval de Moura, 449', 'Amazonas', '', '', '', '', '', '', '', 'Jackson Gonçalves Gomes', 'Técnico em Informática', '', '', 'Carauari/AM', '1979-10-25', 39, 'Feminino', 'Reside com esposo(a) e/ou filhos', 'Superior completo', '04 a 06', 2, 'Mais de 07 SM', 'Própria', 'Alvenaria', 10, 'Tubulação', 'Rede básica', 'Elétrica regularizada', 'Outros', 'Contadora', 'COEL da Amazônia', 'CLT', 'Empregado', '', 'Petropolis', 224, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(100) NOT NULL,
  `usu_cargo` varchar(50) NOT NULL,
  `usu_perfil` varchar(30) NOT NULL,
  `usu_login` varchar(50) NOT NULL,
  `usu_senha` varchar(32) NOT NULL,
  `usu_status` varchar(20) NOT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nome`, `usu_cargo`, `usu_perfil`, `usu_login`, `usu_senha`, `usu_status`) VALUES
(3, 'Jackson Gomes', 'Técnico em Informática', 'Administrador', 'jackson.gomes', '202cb962ac59075b964b07152d234b70', 'Ativado'),
(4, 'usuario', 'teste', 'Usuário', 'usuario', '202cb962ac59075b964b07152d234b70', 'Ativado'),
(5, 'Gabriel Faraco de Andrade Rodrigues', 'TÃ©cnico em InformÃ¡tica', 'UsuÃ¡rio', 'faracogabriel', '446a58b465d3ba7c4188dc432c3ddf1b', 'ativado'),
(6, 'Administrador', 'Administrador', 'Administrador', 'administrador', '202cb962ac59075b964b07152d234b70', 'Ativado');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
