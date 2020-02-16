###################
Como Funciona o Sistema?
###################

- Estar rodando na máquina o PHP 5.6.x.
- Clonar o projeto do Git.
- Rodar o Apache e logo em Seguida executar o arquivo DUMP que esta na pasta com o nome SOLIDES.SQL.
- Após a tabela solides ser criada, estar rodando o MySQL Database.
- Com o MySQL Database rodando, executar no terminal o comando php -S "localhost:3030".
- Abrir em seu navegador com o endereço "localhost:3030" e a aplicação será exibida.
- Aplicação sendo exibida, fazer o cadastro de usuário e os lançamentos de horários.

*******************
Fomas de Lançamento
*******************
O Sistema foi pensado para fazer o lançamento de duas formas, sendo manual ou automático, 
onde o usuário irá escolher a forma que mais lhe convém.

- Automático - O usuário através de um clique faz todo o lançamento de sua chegada na empresa, horário de almoço, e saída da empresa facilitando assim seus lançamentos.

- Manual - Caso o usuário prefira fazer os lançamentos manuais, ele consegue também, pois as vezes ele faz o trabalho remoto ou até mesmo, de outras formas, que não consegue computar seu horários, neste caso, ele pode tirar um horário para fazer todos os seus lançamentos.

- OBS - No banco, temos a tabela chamada tb_lancamento onde temos uma coluna com o nome tag, nela, iremos identificar se o lançamento foi feito manual ou automatico, e até mesmo identificar futuras novas tags.
