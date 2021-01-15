
-- INSTALL LARAVEL --

composer install

copy .env.example .env

php artisan key:generate

php artisan serve

Escopo do Projeto

Controle Imobiliário

Home
- Panorama Geral mostrando:
  - Inquilinos com pagamentos a vencer
  - Inquilinos com pagamentos vencidos
  - Inquilinos com pagamentos realizados
  - Boletos gerados e pagos
  - Boletos gerados e vencidos
  - Link de Pagamentos gerados e pagos
  - Link de Pagamentos gerados não pagos
  - Contratos a vencer em x dias
  - Últimos contratos renovados
  - Manutenções Programadas para x dias
  - Manutenções a Programar
  - Imóveis vagos disponíveis para locação
  - Imóveis que serão desocupados em x dias
  - Imóveis locados (Informando data de vencimento do contrato na frente)
  - Balancete financeiro (Entradas e Saídas)
  - Custos com manutenção nos últimos 90 dias (Serviços e Materiais)
  - Custos com manutenção nos últimos 60 dias (Serviços e Materiais)
  - Custos com manutenção nos últimos 30 dias (Serviços e Materiais)
  - Lista de cheques recebidos a compensar
  - Lista de cheques recebidos compensados
  - Lista de cheques recebidos protestados
  - Recebidos por serviços prestados a outros proprietários

Proprietários (Módulo de cadastro de todos os proprietários com todos os dados e contas bancárias para recebimentos)
 - Cadastro/Edição
 - Pesquisa
 - Perfil (Panorama Geral)
 - Relatórios
 
Inquilinos (Módulo para inclusão de todos os dados dos inquilinos, incluindo documentos pessoais do mesmo)
 - Cadastro/Edição
 - Pesquisa
 - Perfil (Panorama Geral)
 - Relatórios
 
Imóveis (Módulo para inclusão de dados e fotos pertinentes a cada um dos imóveis com o máximo de detalhamento possível)
 - Cadastro/Edição
 - Pesquisa
 - Perfil (Panorama Geral do imóvel)
 - Relatórios
 
Manutenções (Gerenciamento e inclusão de Manutenções Preventivas e Corretivas)
 - Cadastro / Edição
 - Andamento de Manutenções
 - Pesquisa
 - Panorama Geral
 - Relatórios
 
Contratos (Módulo para efetivar a locação do imóvel, inquilino previamente cadastrado no módulo correspondente e proprietário também)
 - Cadastro / Edição
 - Atualização de Contrato
 - Pesquisa
 - Panorama Geral
 - Relatórios

Financeiro (Balanço Financeiro, Inclusão de Pagamentos, Gerenciamento da conta bancária e etc)
 - Cadastro / Edição
 - Inserir Pagamento
 - Pesquisa
 - Panorama Geral
 - Relatórios

Usuários (Módulo para gerenciamento de usuários do sistema e devidas permissões de acesso)
 - Cadastro / Edição
 - Gerenciamento de Permissões de Acesso
 - Pesquisa

Os boletos deverão ser baixados no sistema de forma manual, conferindo pagamento na conta e recebimento de comprovante de pagamento pelo inquilino.

Informação importante:

Os arquivos do sistema devem ficar dentro da pasta admin.
As pastas inquilino e proprietario são paineis diferentes, onde quem acessar terá um acesso reduzido comparado ao sistema dentro do admin.

Deu pra entender?
Quem administra o sistema vai acessar admin.alugueisbraga.com.br
Quem é inquilino acessa inquilino.alugueisbraga.com.br
Quem é proprietario acessa proprietario.alugueisbraga.com.br
