<?php

CREATE TABEL pesquisaPedidosTiny(


  ) ENGINE=MyISAM

CREATE TABLE pedidosTiny(
  idreg bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
  timereg timestamp NOT NULL DEFAULT current_timestamp(),
  id_tiny int NOT NULL,


  ) ENGINE=MyISAM

CREATE TABLE obterPedidosTINY(
    idreg bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
    timereg timestamp NOT NULL DEFAULT current_timestamp(),
    id_tiny int NOT NULL,
    empresa int NOT NULL,
    empresa_descricao VARCHAR(50) NOT NULL,
    numero int NOT NULL,
    numero_ecommerce VARCHAR(50) DEFAULT NULL,
    data_pedido DATE DEFAULT NULL,
    data_prevista DATE DEFAULT NULL,
    data_faturamento DATE DEFAULT NULL,
    id_lista_preco int DEFAULT NULL,
    descricao_lista_preco VARCHAR(80) DEFAULT NULL,
    cliente_codigo VARCHAR(30) NOT NULL,
    cliente_nome VARCHAR(30) NOT NULL,
    cliente_nome_fantasia VARCHAR(30) DEFAULT NULL,
    cliente_tipo_pessoa CHAR(1) DEFAULT NULL,
    cliente_cpf_cnpj VARCHAR(18) DEFAULT  NULL,
    cliente_ie VARCHAR(18) DEFAULT NULL,
    cliente_rg VARCHAR(10) DEFAULT NULL,
    cliente_endereco VARCHAR(50) DEFAULT NULL,
    cliente_numero VARCHAR(10) DEFAULT NULL,
    cliente_complemento VARCHAR(50) DEFAULT NULL,
    cliente_bairro VARCHAR(30) DEFAULT NULL,
    cliente_cep VARCHAR(10) DEFAULT NULL,
    cliente_cidade VARCHAR(30) DEFAULT NULL,
    cliente_uf VARCHAR(30) DEFAULT NULL,
    cliente_pais VARCHAR(50) DEFAULT NULL,
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
    endereco_entrega_ie VARCHAR(18) DEFAULT NULL,
    condicao_pagamento VARCHAR(30) DEFAULT NULL,
    forma_pagamento VARCHAR(30) NOT NULL,
    meio_pagamento VARCHAR(100) DEFAULT NULL,
    nome_transportador VARCHAR(30) DEFAULT NULL,
    frete_por_conta CHAR(1) DEFAULT NULL,
    forma_frete VARCHAR(30) DEFAULT NULL,
    valor_frete DECIMAL DEFAULT NULL,
    valor_desconto DECIMAL DEFAULT NULL,
    outras_despesas DECIMAL DEFAULT NULL,
    total_produtos DECIMAL DEFAULT NULL,
    total_pedido DECIMAL DEFAULT NULL,
    situacao VARCHAR(15) DEFAULT NULL,
    numero_ordem_compra VARCHAR(10) DEFAULT NULL,
    id_vendedor INT DEFAULT NULL,
    nome_vendedor VARCHAR(50) DEFAULT NULL,
    obs VARCHAR(100) DEFAULT NULL,
    obs_interna VARCHAR(100) DEFAULT NULL,
    codigo_rastreamento VARCHAR(20) DEFAULT NULL,
    url_rastreamento VARCHAR(120) DEFAULT NULL,
    id_nota_fiscal INT DEFAULT NULL,
    deposito VARCHAR(255) DEFAULT NULL,
    ecommerce_id INT DEFAULT NULL,
    ecommerce_numeroPedidoEcommerce VARCHAR(255) DEFAULT NULL,
    ecommerce_numeroPedidoCanalVenda VARCHAR(255) DEFAULT NULL,
    ecommerce_nomeEcommerce VARCHAR(255) DEFAULT NULL,
    ecommerce_canalVenda VARCHAR(255) DEFAULT NULL,
    intermediador_nome VARCHAR(60) DEFAULT NULL,
    intermediador_cnpj VARCHAR(18) DEFAULT NULL

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
