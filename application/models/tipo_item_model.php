<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pratileira_model
 *
 * @author hairton
 */
class tipo_item_model extends CI_Model {

    function obterTodosTiposItens($qtde=0,$inicio=0) {
        //parametros de paginação
        if($qtde >0 ){$this->db->limit($qtde,$inicio);}
        $this->db->order_by('id_tipo_item','desc');
        return $this->db->get('tipo_item');
    }

    function verificarTipoItemUtilisado($id_tipo_item) {
 
        $this->db->where('id_tipo_item', $id_tipo_item);
        $this->db->from('item');
        return $this->db->count_all_results();
        
    }

    function obterUmTipoItem($id_tipo_item) {
        return $this->db->get_where('tipo_item', array('id_tipo_item' => $id_tipo_item));
    }

    function salvarTipoItem($dados) {
        $this->db->insert('tipo_item', $dados);
    }

    function salvarTipoItemAlterada($dados, $id_tipo_item) {
        $this->db->where('id_tipo_item', $id_tipo_item);
        $this->db->update('tipo_item', $dados);
    }

    function excluirTipoItem($id_tipo_item) {
        $this->db->delete('tipo_item', array('id_tipo_item' => $id_tipo_item));
    }

    //put your code here
}

?>
