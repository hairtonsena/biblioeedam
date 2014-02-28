<?php

class Emprestimo_model extends CI_Model {
    
    function obterNomeLeitor($id_leitor){
        $this->db->select('nome_leitor');
        return $this->db->get_where('leitor',array('id_leitor'=>$id_leitor));
    }
    
    function obterTiposItem(){
        return $this->db->get('tipo_item');
    }
    
    function registraEmprestimo($dados=array()){
        $this->db->insert('acao',$dados);
    }
    
}

?>