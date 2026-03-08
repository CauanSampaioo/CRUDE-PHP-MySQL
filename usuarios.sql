-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08/03/2026 às 01:17
-- Versão do servidor: 8.4.7
-- Versão do PHP: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `created`, `modified`) VALUES
(1, 'Lucas Almeida', 'lucas.almeida@email.com', '0000-00-00 00:00:00', NULL),
(2, 'Mariana Souza', 'mariana.souza@email.com', '0000-00-00 00:00:00', NULL),
(3, 'Gabriel Santos', 'gabriel.santos@email.com', '0000-00-00 00:00:00', NULL),
(4, 'Ana Clara Oliveira', 'anaclara.oliveira@email.com', '0000-00-00 00:00:00', NULL),
(5, 'Pedro Henrique Lima', 'pedro.lima@email.com', '0000-00-00 00:00:00', NULL),
(6, 'Juliana Ferreira', 'juliana.ferreira@email.com', '0000-00-00 00:00:00', NULL),
(7, 'Rafael Costa', 'rafael.costa@email.com', '0000-00-00 00:00:00', NULL),
(8, 'Beatriz Rodrigues', 'beatriz.rodrigues@email.com', '0000-00-00 00:00:00', NULL),
(9, 'Felipe Martins', 'felipe.martins@email.com', '0000-00-00 00:00:00', NULL),
(10, 'Larissa Gomes', 'larissa.gomes@email.com', '0000-00-00 00:00:00', NULL),
(11, 'Bruno Carvalho', 'bruno.carvalho@email.com', '0000-00-00 00:00:00', NULL),
(12, 'Camila Ribeiro', 'camila.ribeiro@email.com', '0000-00-00 00:00:00', NULL),
(13, 'Thiago Alves', 'thiago.alves@email.com', '0000-00-00 00:00:00', NULL),
(14, 'Amanda Barbosa', 'amanda.barbosa@email.com', '0000-00-00 00:00:00', NULL),
(15, 'Daniel Moreira', 'daniel.moreira@email.com', '0000-00-00 00:00:00', NULL),
(16, 'Isabela Mendes', 'isabela.mendes@email.com', '0000-00-00 00:00:00', NULL),
(17, 'Vinicius Rocha', 'vinicius.rocha@email.com', '0000-00-00 00:00:00', NULL),
(18, 'Carolina Nunes', 'carolina.nunes@email.com', '0000-00-00 00:00:00', NULL),
(19, 'João Vitor Araújo', 'joaovitor.araujo@email.com', '0000-00-00 00:00:00', NULL),
(20, 'Letícia Teixeira', 'leticia.teixeira@email.com', '0000-00-00 00:00:00', NULL),
(21, 'Matheus Castro', 'matheus.castro@email.com', '0000-00-00 00:00:00', NULL),
(22, 'Eduarda Freitas', 'eduarda.freitas@email.com', '0000-00-00 00:00:00', NULL),
(23, 'Leonardo Lopes', 'leonardo.lopes@email.com', '0000-00-00 00:00:00', NULL),
(24, 'Bianca Moraes', 'bianca.moraes@email.com', '0000-00-00 00:00:00', NULL),
(25, 'Gustavo Pinto', 'gustavo.pinto@email.com', '0000-00-00 00:00:00', NULL),
(26, 'Natália Cardoso', 'natalia.cardoso@email.com', '0000-00-00 00:00:00', NULL),
(27, 'André Fernandes', 'andre.fernandes@email.com', '0000-00-00 00:00:00', NULL),
(28, 'Paula Monteiro', 'paula.monteiro@email.com', '0000-00-00 00:00:00', NULL),
(29, 'Caio Duarte', 'caio.duarte@email.com', '0000-00-00 00:00:00', NULL),
(30, 'Fernanda Araújo', 'fernanda.araujo@email.com', '0000-00-00 00:00:00', NULL),
(31, 'Rodrigo Melo', 'rodrigo.melo@email.com', '0000-00-00 00:00:00', NULL),
(32, 'Patrícia Ramos', 'patricia.ramos@email.com', '0000-00-00 00:00:00', NULL),
(33, 'Igor Farias', 'igor.farias@email.com', '0000-00-00 00:00:00', NULL),
(34, 'Tatiane Correia', 'tatiane.correia@email.com', '0000-00-00 00:00:00', NULL),
(35, 'Marcelo Vieira', 'marcelo.vieira@email.com', '0000-00-00 00:00:00', NULL),
(36, 'Vanessa Batista', 'vanessa.batista@email.com', '0000-00-00 00:00:00', NULL),
(37, 'Fábio Moura', 'fabio.moura@email.com', '0000-00-00 00:00:00', NULL),
(38, 'Aline Peixoto', 'aline.peixoto@email.com', '0000-00-00 00:00:00', NULL),
(39, 'Renan Borges', 'renan.borges@email.com', '0000-00-00 00:00:00', NULL),
(40, 'Gabriela Coelho', 'gabriela.coelho@email.com', '0000-00-00 00:00:00', NULL),
(41, 'Diego Pires', 'diego.pires@email.com', '0000-00-00 00:00:00', NULL),
(42, 'Luana Cavalcante', 'luana.cavalcante@email.com', '0000-00-00 00:00:00', NULL),
(43, 'Sérgio Tavares', 'sergio.tavares@email.com', '0000-00-00 00:00:00', NULL),
(44, 'Michele Andrade', 'michele.andrade@email.com', '0000-00-00 00:00:00', NULL),
(45, 'Emanuel Silva', 'emanuel.silva@email.com', '0000-00-00 00:00:00', NULL),
(46, 'Yasmin Cunha', 'yasmin.cunha@email.com', '0000-00-00 00:00:00', NULL),
(47, 'Douglas Matos', 'douglas.matos@email.com', '0000-00-00 00:00:00', NULL),
(48, 'Raquel Azevedo', 'raquel.azevedo@email.com', '0000-00-00 00:00:00', NULL),
(49, 'Alan Guimarães', 'alan.guimaraes@email.com', '0000-00-00 00:00:00', NULL),
(50, 'Brenda Rezende', 'brenda.rezende@email.com', '0000-00-00 00:00:00', NULL),
(51, 'Carlos Eduardo Lopes', 'carloseduardo.lopes@email.com', '0000-00-00 00:00:00', NULL),
(52, 'Débora Nascimento', 'debora.nascimento@email.com', '0000-00-00 00:00:00', NULL),
(53, 'Henrique Dantas', 'henrique.dantas@email.com', '0000-00-00 00:00:00', NULL),
(54, 'Jéssica Barros', 'jessica.barros@email.com', '0000-00-00 00:00:00', NULL),
(55, 'Luiz Otávio Fernandes', 'luizotavio.fernandes@email.com', '0000-00-00 00:00:00', NULL),
(56, 'Mayara Sales', 'mayara.sales@email.com', '0000-00-00 00:00:00', NULL),
(57, 'Otávio Martins', 'otavio.martins@email.com', '0000-00-00 00:00:00', NULL),
(58, 'Priscila Campos', 'priscila.campos@email.com', '0000-00-00 00:00:00', NULL),
(59, 'Ricardo Antunes', 'ricardo.antunes@email.com', '0000-00-00 00:00:00', NULL),
(60, 'Simone Guedes', 'simone.guedes@email.com', '0000-00-00 00:00:00', NULL),
(61, 'Tomás Ribeiro', 'tomas.ribeiro@email.com', '0000-00-00 00:00:00', NULL),
(62, 'Viviane Borges', 'viviane.borges@email.com', '0000-00-00 00:00:00', NULL),
(63, 'Wesley Fonseca', 'wesley.fonseca@email.com', '0000-00-00 00:00:00', NULL),
(64, 'Zilda Almeida', 'zilda.almeida@email.com', '0000-00-00 00:00:00', NULL),
(65, 'Arthur Braga', 'arthur.braga@email.com', '0000-00-00 00:00:00', NULL),
(66, 'Bruna Lacerda', 'bruna.lacerda@email.com', '0000-00-00 00:00:00', NULL),
(67, 'César Nogueira', 'cesar.nogueira@email.com', '0000-00-00 00:00:00', NULL),
(68, 'Daniele Prado', 'daniele.prado@email.com', '0000-00-00 00:00:00', NULL),
(69, 'Elton Xavier', 'elton.xavier@email.com', '0000-00-00 00:00:00', NULL),
(70, 'Flávia Queiroz', 'flavia.queiroz@email.com', '0000-00-00 00:00:00', NULL),
(71, 'Gilberto Reis', 'gilberto.reis@email.com', '0000-00-00 00:00:00', NULL),
(72, 'Helena Siqueira', 'helena.siqueira@email.com', '0000-00-00 00:00:00', NULL),
(73, 'Ivan Oliveira', 'ivan.oliveira@email.com', '0000-00-00 00:00:00', NULL),
(74, 'Jaqueline Torres', 'jaqueline.torres@email.com', '0000-00-00 00:00:00', NULL),
(75, 'Kleber Macedo', 'kleber.macedo@email.com', '0000-00-00 00:00:00', NULL),
(76, 'Lívia Santana', 'livia.santana@email.com', '0000-00-00 00:00:00', NULL),
(77, 'Murilo Barros', 'murilo.barros@email.com', '0000-00-00 00:00:00', NULL),
(78, 'Nayara Mendes', 'nayara.mendes@email.com', '0000-00-00 00:00:00', NULL),
(79, 'Orlando Figueiredo', 'orlando.figueiredo@email.com', '0000-00-00 00:00:00', NULL),
(80, 'Pablo Santana', 'pablo.santana@email.com', '0000-00-00 00:00:00', NULL),
(81, 'Quésia Duarte', 'quesia.duarte@email.com', '0000-00-00 00:00:00', NULL),
(82, 'Roberta Carvalho', 'roberta.carvalho@email.com', '0000-00-00 00:00:00', NULL),
(83, 'Samuel Nogueira', 'samuel.nogueira@email.com', '0000-00-00 00:00:00', NULL),
(84, 'Talita Mourão', 'talita.mourao@email.com', '0000-00-00 00:00:00', NULL),
(85, 'Ulisses Campos', 'ulisses.campos@email.com', '0000-00-00 00:00:00', NULL),
(86, 'Valéria Furtado', 'valeria.furtado@email.com', '0000-00-00 00:00:00', NULL),
(87, 'William Castro', 'william.castro@email.com', '0000-00-00 00:00:00', NULL),
(88, 'Xênia Batista', 'xenia.batista@email.com', '0000-00-00 00:00:00', NULL),
(89, 'Yuri Almeida', 'yuri.almeida@email.com', '0000-00-00 00:00:00', NULL),
(90, 'Zaqueu Moreira', 'zaqueu.moreira@email.com', '0000-00-00 00:00:00', NULL),
(91, 'Adriana Lima', 'adriana.lima@email.com', '0000-00-00 00:00:00', NULL),
(92, 'Bernardo Moraes', 'bernardo.moraes@email.com', '0000-00-00 00:00:00', NULL),
(93, 'Cláudia Ferreira', 'claudia.ferreira@email.com', '0000-00-00 00:00:00', NULL),
(94, 'Davi Ramos', 'davi.ramos@email.com', '0000-00-00 00:00:00', NULL),
(95, 'Elaine Teixeira', 'elaine.teixeira@email.com', '0000-00-00 00:00:00', NULL),
(96, 'Fernando Alves', 'fernando.alves@email.com', '0000-00-00 00:00:00', NULL),
(97, 'Geovana Rocha', 'geovana.rocha@email.com', '0000-00-00 00:00:00', NULL),
(98, 'Hugo Pereira', 'hugo.pereira@email.com', '0000-00-00 00:00:00', NULL),
(99, 'Isadora Lima', 'isadora.lima@email.com', '0000-00-00 00:00:00', NULL),
(100, 'https://github.com/CauanSampaioo', 'sampaiocauan12@gmail.com', '0000-00-00 00:00:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
