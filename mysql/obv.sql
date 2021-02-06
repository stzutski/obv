-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 06/02/2021 às 09:35
-- Versão do servidor: 5.7.33-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `obv`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id_arquivo` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `extensao_arquivo` tinytext,
  `nome_arquivo` varchar(255) DEFAULT NULL,
  `dt_arquivo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_arquivo` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nome_cliente` varchar(255) DEFAULT NULL,
  `sobrenome_cliente` varchar(255) DEFAULT NULL,
  `dt_cliente` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_cliente` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `id_user`, `nome_cliente`, `sobrenome_cliente`, `dt_cliente`, `status_cliente`) VALUES
(1, 3, 'Jose Silva', 'Sauro', '2021-02-02 17:13:46', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `desc_empresa` varchar(255) DEFAULT NULL,
  `razao_empresa` varchar(255) DEFAULT NULL,
  `fantasia_empresa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `id_user`, `desc_empresa`, `razao_empresa`, `fantasia_empresa`) VALUES
(1, 2, 'MATRIZ SP', 'EMPRESA NOME RAZAO SOCIAL S/A', 'EMPRESA NOME FANTASIA INC.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `faturas`
--

CREATE TABLE `faturas` (
  `id_fatura` int(11) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `vlr_fatura` float DEFAULT NULL,
  `dt_fatura` date DEFAULT NULL,
  `vcto_fatura` date DEFAULT NULL,
  `obs_fatura` text,
  `status_fatura` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `gateways`
--

CREATE TABLE `gateways` (
  `id_gateways` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nome_gateway` varchar(255) NOT NULL,
  `site_gateway` varchar(255) NOT NULL,
  `modo_gateway` int(1) NOT NULL,
  `status_gateway` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `lancamentos`
--

CREATE TABLE `lancamentos` (
  `id_lancamento` int(11) NOT NULL,
  `id_fatura` int(11) DEFAULT NULL,
  `dt_lancamento` date DEFAULT NULL,
  `tipo_lancamento` int(1) NOT NULL DEFAULT '0',
  `valor_lancamento` float DEFAULT NULL,
  `status_lancamento` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `dt_pedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_pedido` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_itens`
--

CREATE TABLE `pedidos_itens` (
  `id_pedido_item` int(11) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `status_pedido_item` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pwd_recovery`
--

CREATE TABLE `pwd_recovery` (
  `id_pwd_recovery` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hash_recovery` varchar(255) DEFAULT NULL,
  `dt_recovery` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_recovery` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servico` int(11) NOT NULL,
  `nome_servico` varchar(255) DEFAULT NULL,
  `desc_servico` text,
  `nomeplano_servico` varchar(255) DEFAULT NULL,
  `valor_servico` float DEFAULT NULL,
  `status_servico` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos_empresas`
--

CREATE TABLE `servicos_empresas` (
  `id_servico_empresa` int(11) NOT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `status_servico_empresa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos_etapas`
--

CREATE TABLE `servicos_etapas` (
  `id_servico_etapa` int(11) NOT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `nome_servico_etapa` varchar(255) DEFAULT NULL,
  `desc_servico_etapa` varchar(255) DEFAULT NULL,
  `resp_servico_etapa` varchar(10) DEFAULT NULL,
  `fdesc_servico_etapa` text,
  `pos_servico_etapa` int(2) DEFAULT NULL,
  `req_servico_etapa` int(11) DEFAULT NULL,
  `status_servico_etapa` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `suporte_tickets`
--

CREATE TABLE `suporte_tickets` (
  `id_suporte_ticket` int(11) NOT NULL,
  `from_id_usuario` int(11) DEFAULT NULL,
  `to_id_usuario` int(11) DEFAULT NULL,
  `dt_suporte_ticket` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assunto_suporte_ticket` varchar(255) DEFAULT NULL,
  `texto_suporte_ticket` text,
  `status_suporte_ticket` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `suporte_tickets_msg`
--

CREATE TABLE `suporte_tickets_msg` (
  `id_suporte_ticket_msg` int(11) NOT NULL,
  `id_suporte_ticket` int(11) DEFAULT NULL,
  `resp_id_ticket_msg` int(11) DEFAULT NULL,
  `resposta_suporte_ticket_msg` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nome_user` varchar(255) DEFAULT NULL,
  `sobrenome_user` varchar(255) DEFAULT NULL,
  `email_user` varchar(255) DEFAULT NULL,
  `telefone_user` varchar(30) DEFAULT NULL,
  `empresa_user` int(11) DEFAULT NULL,
  `pwd_user` varchar(255) DEFAULT NULL,
  `permissao_user` varchar(25) DEFAULT NULL,
  `dt_user` int(15) DEFAULT NULL,
  `lst_login_user` int(15) DEFAULT NULL,
  `status_user` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id_user`, `nome_user`, `sobrenome_user`, `email_user`, `telefone_user`, `empresa_user`, `pwd_user`, `permissao_user`, `dt_user`, `lst_login_user`, `status_user`) VALUES
(1, 'usuario.m', 'master', 'roberto.rsc@gmail.com', NULL, NULL, '32125', 'master', 1612483782, 1612483784, 1),
(2, 'usuario.a', 'admin', 'roberto.stzutski@gmail.com', '+55 48 996610102', NULL, '32125', 'admin', 1612483547, 1612483782, 1),
(3, 'Jose Silva', 'Sauro', 'stzutski@gmail.com', NULL, NULL, '32125', 'cliente', 1612483811, 1612483800, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id_arquivo`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices de tabela `faturas`
--
ALTER TABLE `faturas`
  ADD PRIMARY KEY (`id_fatura`);

--
-- Índices de tabela `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id_gateways`);

--
-- Índices de tabela `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD PRIMARY KEY (`id_lancamento`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices de tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  ADD PRIMARY KEY (`id_pedido_item`);

--
-- Índices de tabela `pwd_recovery`
--
ALTER TABLE `pwd_recovery`
  ADD PRIMARY KEY (`id_pwd_recovery`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servico`);

--
-- Índices de tabela `servicos_empresas`
--
ALTER TABLE `servicos_empresas`
  ADD PRIMARY KEY (`id_servico_empresa`);

--
-- Índices de tabela `servicos_etapas`
--
ALTER TABLE `servicos_etapas`
  ADD PRIMARY KEY (`id_servico_etapa`);

--
-- Índices de tabela `suporte_tickets`
--
ALTER TABLE `suporte_tickets`
  ADD PRIMARY KEY (`id_suporte_ticket`);

--
-- Índices de tabela `suporte_tickets_msg`
--
ALTER TABLE `suporte_tickets_msg`
  ADD PRIMARY KEY (`id_suporte_ticket_msg`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id_arquivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `faturas`
--
ALTER TABLE `faturas`
  MODIFY `id_fatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id_gateways` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `lancamentos`
--
ALTER TABLE `lancamentos`
  MODIFY `id_lancamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  MODIFY `id_pedido_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pwd_recovery`
--
ALTER TABLE `pwd_recovery`
  MODIFY `id_pwd_recovery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos_empresas`
--
ALTER TABLE `servicos_empresas`
  MODIFY `id_servico_empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos_etapas`
--
ALTER TABLE `servicos_etapas`
  MODIFY `id_servico_etapa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `suporte_tickets`
--
ALTER TABLE `suporte_tickets`
  MODIFY `id_suporte_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `suporte_tickets_msg`
--
ALTER TABLE `suporte_tickets_msg`
  MODIFY `id_suporte_ticket_msg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
