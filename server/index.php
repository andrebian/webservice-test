<?php
/**
 * Este é o exemplo de um SERVIDOR que fornecerá recursos para seus clientes
 * 
 * O MATERIAL APRESENTADO AQUI SERVE APENAS COMO DIDÁTICA PODENDO SER UTILIZADO
 * PARA APLICAÇÕES REAIS CASO NECESSÁRIO
 * 
 * 
 */

require_once './User.php';

try {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Metodo nao implementado', 405);
    }
    
    $user = new User;
    $userData = $user->searchByEmail($_POST['email']);
    
    if ( !empty( $userData ) ) {
        $xml = new SimpleXMLElement('<xml/>');
        $xml->addChild('status', 200);
        $xml->addChild('message', 'success');
        $xml->addChild('user');
        
        foreach( $userData as $field => $data ) {
            
            if ( $field == 'redes_sociais' ) {
                $xml->user->addChild('redes_sociais');
                
                $redes = json_decode( $data );
                foreach( $redes as $rede => $user ) {
                    $xml->user->redes_sociais->addChild($rede, $user);
                }
                
            } else {
                $xml->user->addChild($field, $data);
            }
        }
        
        print $xml->asXML();
    }

} catch (Exception $e) {
    $xml = new SimpleXMLElement('<xml/>');
    $xml->addChild('status', $e->getCode());
    $xml->addChild('message', $e->getMessage());

    print $xml->asXML();
}