<?php

namespace src;

class EmailService {

    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    public function __construct(
        // caso não sejam passados, serão preenchidos com as informações padrões abaixo
        string $de = 'contato@site.com.br',
        string $para = '',
        string $assunto = '',
        string $conteudo = '',
    ){
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }

    public static function dispararEmail(){
        return '--- envia e-mail ---';
    }
}