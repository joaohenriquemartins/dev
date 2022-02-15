retorno.notas_fiscais[ ].nota_fiscal.id	int	-	opcional	Número de identificação da nota fiscal no Tiny
retorno.notas_fiscais[ ].nota_fiscal.tipo	string	1	opcional	Tipo da nota fiscal (E/S)
retorno.notas_fiscais[ ].nota_fiscal.serie	int	-	opcional	Número de série da nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.numero	int	-	opcional	Número da nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.numero_ecommerce	string	50	opcional	Número do pedido no ecommerce(ou sistema)
retorno.notas_fiscais[ ].nota_fiscal.data_emissao (4)	date	10	opcional	Data de emissão da nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.nome	string	50	opcional	Nome do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente	object	10	opcional	Elemento utilizado para representar o cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.nome	string	50	obrigatório	Nome do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.tipo_pessoa	string	1	opcional	Tipo de pessoa (F - Física, J - Jurídica, E - Estrangeiro)
retorno.notas_fiscais[ ].nota_fiscal.cliente.cpf_cnpj	string	18	opcional	CPF ou CNPJ do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.ie	string	18	opcional	Inscrição estadual do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.endereco	string	50	opcional	Endereço do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.numero	string	10	opcional	Número do endereço do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.complemento	string	50	opcional	Complemento do endereço do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.bairro	string	30	opcional	Bairro do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.cep	string	10	opcional	Cep do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.cidade	string	30	opcional	Nome da cidade do cliente conforme a Tabela de Cidades
retorno.notas_fiscais[ ].nota_fiscal.cliente.uf	string	30	opcional	UF do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.fone	string	40	opcional	Telefone do cliente
retorno.notas_fiscais[ ].nota_fiscal.cliente.email	string	40	opcional	E-mail do cliente
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega	object		opcional	Elemento utilizado para representar o endereço de entrega (se não houver, será retornado o mesmo de cobrança).
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.tipo_pessoa	string	1	opcional	Tipo de pessoa (F - Física, J - Jurídica, E - Estrangeiro)
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.cpf_cnpj	string	18	opcional	CPF ou CNPJ de entrega
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.endereco	string	50	opcional	Endereço de entrega
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.numero	string	10	opcional	Número do endereço de entrega
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.complemento	string	50	opcional	Complemento do endereço de entrega
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.bairro	string	30	opcional	Bairro de entrega
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.cep	string	10	opcional	Cep de entrega
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.cidade	string	30	opcional	Nome da cidade de entrega conforme a Tabela de Cidades
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.uf	string	30	opcional	UF de entrega
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.fone	string	40	opcional	Telefone de entrega
retorno.notas_fiscais[ ].nota_fiscal.endereco_entrega.nome_destinatario	string	60	opcional	Nome do destinatário da entrega
retorno.notas_fiscais[ ].nota_fiscal.transportador	object	-	opcional	Elemento utilizado para representar o transportador
retorno.notas_fiscais[ ].nota_fiscal.transportador.nome	string	30	obrigatório	Nome do transportador
retorno.notas_fiscais[ ].nota_fiscal.valor (5)	decimal	-	opcional	Valor total da nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.valor_produtos (5)	decimal		opcional	Valor dos produtos da nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.valor_frete (5)	decimal		opcional	Valor do frete da nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.id_vendedor	int	15	opcional	Número de identificação do vendedor associado a nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.nome_vendedor	string	50	opcional	Nome do vendedor associado a nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.situacao	int	-	opcional	Código conforme tabela de "Situações das Notas Fiscais"
retorno.notas_fiscais[ ].nota_fiscal.descricao_situacao	string	25	opcional	Descrição conforme tabela de "Situações das Notas Fiscais"
retorno.notas_fiscais[ ].nota_fiscal.chave_acesso	string	100	opcional	Chave de acesso da Nota Fiscal
retorno.notas_fiscais[ ].nota_fiscal.codigo_rastreamento	string	25	opcional	Código de rastreamento da nota fiscal
retorno.notas_fiscais[ ].nota_fiscal.url_rastreamento	string	120	opcional	URL de rastreamento da Nota Fiscal
