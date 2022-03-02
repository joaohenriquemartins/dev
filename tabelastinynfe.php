<?php

CREATE TABLE pesquisaPedidosTiny(


  ) ENGINE=MyISAM

CREATE TABLE tiny_nfe_id(
  idreg bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
  timereg timestamp NOT NULL DEFAULT current_timestamp(),
  id_tiny int NOT NULL UNIQUE


  ) ENGINE=MyISAM

CREATE TABLE tiny_pesquisar_nfe(
    idreg bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
    timereg timestamp NOT NULL DEFAULT current_timestamp(),
    empresa int DEFAULT NULL,
    empresa_descricao VARCHAR(50) DEFAULT NULL,
    id_tiny int DEFAULT NULL,
    tipo VARCHAR(1) DEFAULT NULL,
    serie int DEFAULT NULL,
    numero int DEFAULT NULL,
    numero_ecommerce VARCHAR(50) DEFAULT NULL,
    data_emissao DATE DEFAULT NULL,
    nome VARCHAR(50) DEFAULT NULL,
    cliente_nome VARCHAR(50) DEFAULT NULL,
    cliente_tipo_pessoa CHAR(1) DEFAULT NULL,
    cliente_cpf_cnpj VARCHAR(18) DEFAULT  NULL,
    cliente_ie VARCHAR(18) DEFAULT NULL,
    cliente_endereco VARCHAR(50) DEFAULT NULL,
    cliente_numero VARCHAR(10) DEFAULT NULL,
    cliente_complemento VARCHAR(50) DEFAULT NULL,
    cliente_bairro VARCHAR(30) DEFAULT NULL,
    cliente_cep VARCHAR(10) DEFAULT NULL,
    cliente_cidade VARCHAR(30) DEFAULT NULL,
    cliente_uf VARCHAR(30) DEFAULT NULL,
    cliente_fone VARCHAR(40) DEFAULT NULL,
    cliente_email VARCHAR(50) DEFAULT NULL,
    endereco_entrega_tipo_pessoa CHAR(1) DEFAULT NULL,
    endereco_entrega_cpf_cnpj VARCHAR(18) DEFAULT NULL,
    endereco_entrega_endereco VARCHAR(50) DEFAULT NULL,
    endereco_entrega_numero VARCHAR(10) DEFAULT NULL,
    endereco_entrega_complemento VARCHAR(50) DEFAULT NULL,
    endereco_entrega_bairro VARCHAR(30) DEFAULT NULL,
    endereco_entrega_cep VARCHAR(10) DEFAULT NULL,
    endereco_entrega_cidade VARCHAR(30) DEFAULT NULL,
    endereco_entrega_uf VARCHAR(30) DEFAULT NULL,
    endereco_entrega_fone VARCHAR(40) DEFAULT NULL,
    endereco_entrega_nome_destinatario VARCHAR(60) DEFAULT NULL,
    nome_transportador VARCHAR(30) DEFAULT NULL,
    valor DECIMAL(20,10) DEFAULT NULL,
    valor_produtos DECIMAL(20,10) DEFAULT NULL,
    valor_frete DECIMAL(20,10) DEFAULT NULL,
    id_vendedor INT DEFAULT NULL,
    nome_vendedor VARCHAR(50) DEFAULT NULL,
    situacao int DEFAULT NULL,
    descricao_situacao VARCHAR(25) DEFAULT NULL,
    chave_acesso VARCHAR(100) DEFAULT NULL,
    codigo_rastreamento VARCHAR(20) DEFAULT NULL,
    url_rastreamento VARCHAR(120) DEFAULT NULL

  ) ENGINE=MyISAM


//tabela pedido_item
//tabela pedido_parcelas
//tabela pedido_marcador

CREATE TABLE itens_obterPedidosTINY(
  idreg bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
  timereg timestamp NOT NULL DEFAULT current_timestamp(),
  id_tiny int NOT NULL INDEX,
  id_produto INT DEFAULT NULL,
  codigo VARCHAR(20) DEFAULT NULL,
  descricao VARCHAR(120) NOT NULL,
  unidade VARCHAR(3) NOT NULL,
  quantidade DECIMAL NOT NULL,
  valor_unitario DECIMAL NOT NULL,
  info_adicional VARCHAR(255) DEFAULT NULL


) ENGINE=MyISAM

CREATE TABLE parcelas_obterPedidosTINY(
  idreg bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
  timereg timestamp NOT NULL DEFAULT current_timestamp(),
  id_tiny int NOT NULL INDEX,
  dias int(20) DEFAULT NULL,
  data DATE DEFAULT NULL,
  valor DECIMAL DEFAULT NULL,
  obs VARCHAR(100) DEFAULT NULL,
  forma_pagamento VARCHAR(30) NOT NULL,
  meio_pagamento VARCHAR() DEFAULT NULL,


) ENGINE=MyISAM

CREATE TABLE marcador_obterPedidosTINY(
  idreg bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
  timereg timestamp NOT NULL DEFAULT current_timestamp(),
  id_tiny int NOT NULL INDEX,
  marcador_id INT DEFAULT NULL,
  marcador_descricao VARCHAR(50) DEFAULT NULL,
  marcador_cor VARCHAR(255) DEFAULT NULL


) ENGINE=MyISAM



  CREATE TABLE `typetest` (
    `idreg` bigint(20) NOT NULL,
    `timereg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    `idTiny` int(11) NOT NULL,
    `numeroPedido` int(11) NOT NULL
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

  --
  -- Índices para tabelas despejadas
  --

  --
  -- Índices de tabela `typetest`
  --
  ALTER TABLE `typetest`
    ADD PRIMARY KEY (`idreg`),
    ADD UNIQUE KEY `numeroPedido` (`numeroPedido`);

  --
  -- AUTO_INCREMENT para tabelas despejadas
  --

  --
  -- AUTO_INCREMENT de tabela `typetest`
  --
  ALTER TABLE `typetest`
    MODIFY `idreg` bigint(20) NOT NULL AUTO_INCREMENT;

 ?>
