
Feature: visualizarCardapio
    Com um usuario logado
    Fulando quer visualizar o cardapio de um data
    Para que ele tenha informação do cardapio do dia que deseja

Scenario: Data Valida
 Given Que "usúario" esteja autenticado
 And  ele acesse a pagina "cardapio > visualizar" cardapio
 And  insira uma data no campo data
 And depois clique no botão busca para pesquisar um cardapio
 When ele aciona o botão "buscar" pelo cardapio
 Then o sistema retorna um cardapio referente a data inserida com botões para deletar o cardapio ou edita-lo

Scenario: Data Não Cadastrada
 Given Que "usúario" esteja autenticado
 And  ele acesse a pagina "cardapio > visualizar" cardapio
 And  insira uma data no campo data que não esteja cadastrda no BD
 And depois clique no botão "buscar" para pesquisar um cardapio
 When ele aciona o botão "buscar" pelo cardapio
 Then o sistema retorna nenhuma informação, pois a data não esta cadastrada no BD

Scenario: Inserir a data e não clicar em buscar
 Given Que "usúario" esteja autenticado
 And  ele acesse a pagina "cardapio > visualizar" cardapio
 And  insira uma data no campo data
 And  não clicar no botão "buscar"
 When ele esperar algo acontecer
 Then sistema não vai retornar nada, pois o botão  "buscar" não foi acionado

Scenario: Usuario não autenticado
Given Que "usúario" não esteja efetuado o login
And tente a acessar aba visualizar
When inserir a rota visualizarCardapio na ulr
Then o sistema vai retonar para a pagina de logina, assim o usuario vai poder efetuar o seu login se tiver acesso








