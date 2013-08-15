<?php
/**
 * Este é o exemplo de um CLIENTE consumindo recursos de um WEBSERVICE
 * 
 * O MATERIAL APRESENTADO AQUI SERVE APENAS COMO DIDÁTICA PODENDO SER UTILIZADO
 * PARA APLICAÇÕES REAIS CASO NECESSÁRIO
 * 
 * 
 */


// definindo os dados a serem enviados pelo método POST
$data = 'email=andrecardosodev@gmail.com';


// iniciando a conexão remota via CURL passando informações do server a ser localizado
$channel = curl_init('http://localhost:8080');

// definindo as opções de envio
curl_setopt($channel, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($channel, CURLOPT_POST, 1);
curl_setopt($channel, CURLOPT_POSTFIELDS, $data);

// executando a requisição (finalmente)
$result = curl_exec($channel);

// fechando a conexão
curl_close($channel);


// e o resultado final em formato XML
header('Content-type: text/xml');
print $result;
