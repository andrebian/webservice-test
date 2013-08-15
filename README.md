Webservice test Client/Server
======================

Este é um exemplo didático somente de como é o funcionamento básico de um
Webservice.
Aqui é exibido o funcionamento do server que recebe os requests e trata-os
retornando os dados em um formato padrão para seu consumidores e também 
o funcionamento de um client que basicamente envia uma requisição ao 
server, obtem seu retorno e trata seus dados.


Como utilizar
-------------

O primeiro passo é criar um banco de dados chamado webservice e importar o aquivo
da pasta database deste projeto. Feito isto configure seus dados de acesso ao 
banco no arquivo /server/Database.php


Em seguida inicie uma nova instância do PHP 5.4 de preferência na porta 8080 que
foi a definida neste exemplo. Caso a porta 8080 já esteja em uso utilizar qualquer 
outra que lhe agrade e alterar no arquivo /client/index.php para que a requisição seja
destinada a tal.

Após iniciar o servidor, digite http://localhost:8080 se tudo ocorreu bem é pra exibir a
mensagem "200Metodo nao implementado" pois não há requisições sendo feitas pelo método
POST.

Estando rodando o nosso server agora inicie o cliente preferencialmente em uma nova instância 
do PHP 5.4 (note que se você estiver rodando o PHP padrão de sua máquina, haverão 3 instâncias 
do PHP rodando simultaneamente. Isto não tem problema pois ao final desta didática as duas 
por aqui iniciadas serão finalizadas.) em qualquer outra porta, aqui definirei como 8880.


Agora no browser digite http://localhost:8880 e acomanhe os resultados. Se tudo ocorreu bem, será exibido 
um xml com o conteúdo que o server forneceu ao cliente. 


Como pôde ser visto, o conceito de um Webservice é relativamente simples, obviamente que que no
âmbito profissional sempre pedirá muito mais que este mero exemplo didático, mas com esta base 
você saberá ao menos o mínimo necessário para alimentar seu cliente de um webservice de terceiro 
ou quem sabe mesmo criar seu próprio webservice.



Detalhe
-------

Não sou dono da razão e muitos programadores podem ter meios muito mais avançados de 
desenvolver clientes e servers para webservices no entanto o intuito deste é apenas didático.


