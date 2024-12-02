<?php

/**
 * Ação Index do controlador Index do Modulo Index
 */
class ImprimeAction extends Ibe_Action {

    protected $filters = array('inscricao');

    public function execute(Ibe_Request $req) {
        try {
            $codigo = $req->getParam('codigo', NULL);
            $etapa = $req->getParam('etapa', 1);                      
            $dataNascimento = $req->getParam('dataNascimento', NULL);
            $nome = $req->getParam('nome', NULL);
            $cpf = str_replace('.', '', $req->getParam('cpf', NULL, array(Ibe_Request::IS_STRING, 'cpf')));
            $cpf = str_replace('-', '', $cpf);
            $this->comprovante = $this->buscarComprovante($cpf, $codigo,$nome,$dataNascimento, $etapa);            
            $this->codigo = $codigo;

          // Ibe_Debug::error($this->comprovante);
           
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
        return Ibe_View::ACTION;
    }

    private function buscarComprovante($cpf, $codigo,$nome,$dataNascimento, $etapa) {
        $inscricao = new Inscricao('xvestib', null, $codigo);
        if ($cpf !=null){
        	$inscricao->_strCpfCan = $cpf;
        	$inscricao->buscarInscricaoCPF();
        	
        }else{
        	$inscricao->buscarInscricaoPorNomeNascimento($nome,$dataNascimento);
    	}
    	
    	$html = $inscricao->gerarHtmlComprovante($etapa);
        
        return $html;
    }

}
