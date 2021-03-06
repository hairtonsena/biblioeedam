<link rel="stylesheet" href="<?php echo base_url(); ?>js/jquery-ui-1.10.4/themes/base/jquery-ui.css">
<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.4/ui/jquery-ui.js"></script>
<script>
    $(function() {
        $("#dataDevolucao").datepicker({
            dateFormat: 'dd/mm/yy',
            dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
            dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
        });
        
    });
    
    var n = 0;
    function qtd_itens(){
        n = 5;
        alert(n);
        location.href("link");
    }
    
    
</script>

<style>
    .tamanhoIguais {
        height: 100px;
    }
</style>

<div class="col-lg-12">
    <form class="form-horizontal" role="form" action="<?php echo base_url('emprestimo/novo_emprestimo/salvar_emprestimo') ?>" method="post">
        <fieldset>
            <legend>
                Emprestimos / Item  
            </legend>

            <div class="col-sm-3 thumbnail tamanhoIguais">
                <div class="form-group">
                    <div class="col-sm-5 "> <strong> Codigo Leitor </strong> </div>
                    <div class="col-sm-7">
                        <strong> Nome Leitor </strong>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 "> <?php echo $this->session->userdata('id_leitor') ?> </div>
                    <div class="col-sm-7">
                        <?php echo $this->session->userdata('nome_leitor') ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-3 thumbnail tamanhoIguais">

                <strong>Itens adicionados para empréstimo</strong>

                <?php if (!empty($this->session->userdata("item_emprestimo"))) { ?>
                    <a class = "btn" href ="<?php echo base_url("emprestimo/novo_emprestimo/cacelar_itens_emprestimo") ?> "> Limpar </a >
                    <p style="height: 50px; overflow: auto;">
                        <?php
                        $item_em_emprestimo = $this->session->userdata("item_emprestimo");

                        foreach ($item_em_emprestimo as $iee) {
                            echo $iee['nome_item'] . "- Qtde:".$iee['nome_item'] ."<br/>";
                        }
                        ?>
                    </p>
                    <?php
                }
                ?>
            </div>   

            <div class="col-sm-3 thumbnail tamanhoIguais">   




                <div class="form-group">
                    <div class="col-sm-5"> <strong> Data do Emprestimo </strong> </div>
                    <div class="col-sm-7"> <strong> Data de Devolução </strong> </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-5 "> <?php echo $dtAtual; ?> </div>
                    <div class="col-sm-7">
                        <input type="text" id="dataDevolucao" name="dt_devolucao" class="form-control"  placeholder="00/00/0000"/>

                    </div>
                </div>
            </div> 
            <div class="col-sm-3 thumbnail tamanhoIguais">
                <div class="form-group">
                    <br/>
                    <div class="col-sm-5"> <a class="btn btn-default" href="<?php echo base_url("emprestimo/novo_emprestimo/cancelar_emprestimo") ?>">Cancelar</a> </div>
                    <div class="col-sm-7"> <button class="btn btn-primary" type="submit">Salvar</button> </div>
                </div>
            </div>

        </fieldset>
    </form>

</div>
<div class="col-lg-12">
    <h4>
        Itens
    </h4>
    <form name="form_busca_itens" method="post" action="item"> 
        <div class="col-sm-offset-0 col-sm-0">
            <input type="text" name="num_registro" placeholder="Número de Registro"/> <input type="submit" name="botao" value="Buscar" class="btn btn-primary"/>  
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>

                <td>Nome</td>
                <td>Registro</td>
                <td>Autor</td>
                <!--Aqui foi removido o volume a pedido do cliente eeddam-->
                <td>Quantidade</td>
                <td>Disponível</td>
                <td>Quant.p/Emprest.</td>
                <td>incluir</td>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($todos_itens)) { ?>
                <?php foreach ($todos_itens as $ti) { ?>
                    <tr>

                        <td><?php echo $ti->nome_item ?></td>
                        <td><?php echo $ti->numRegistro_item ?></td>
                        <td><?php echo $ti->autor_item ?></td>
                        <!--<td><?php //echo $ti->volume_item ?></td>-->
                        <td><?php echo $ti->quantidade_item ?></td>
                        <td><?php
                            if ($ti->disponivel_item > 1) {
                                echo $ti->disponivel_item;
                            } else {
                                ?>
                                <span class="text-danger"><?php echo $ti->disponivel_item; ?></span>
                                <?php
                            }
                            ?>
                        </td>
                        
                        <td>
                            
                            <input name="quant_emprest" id="<?php echo $ti->id_item; ?>" type="text" size="10" onBlur="qtd_itens();"/>
                            
                        </td>
                        <td><a class="btn btn-primary" href="<?php echo base_url('emprestimo/novo_emprestimo/incluir_item/'. $ti->id_item.'/');?>">incluir</a></td>
                    </tr>
                <?php  } ?>
<?php } ?>
        </tbody>
    </table>
</div>


