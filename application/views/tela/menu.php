
﻿<nav class="navbar navbar-default" role="navigation">
    <div class="">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"> Sistema de Biblioteca</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Acervo <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("item") ?>"> Item </a></li>
                        <li><a href="<?php echo base_url("tipo_item") ?>"> Tipo Item</a></li>
                        <li><a href="<?php echo base_url("categoria_item") ?>"> Categoria Item </a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pessoas <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("leitores") ?>"> Leitores</a></li>
                        <li><a href="<?php echo base_url("funcionarios") ?>"> Funcionários</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Organização <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("prateleira") ?>"> Prateleira</a></li>
                        <li><a href="<?php echo base_url("secao") ?>"> Seção </a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Relatórios <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("relatorios/tabela_leitores_pendentes") ?>">Empréstimos Atrasados</a></li>
                        <li><a href="<?php echo base_url("relatorios/busca_leitor") ?>">Dados do Leitor</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="<?php echo base_url("acoes_basicas") ?>"> Ações Básicas</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"> <?php echo $this->session->userdata('nome_funcionario'); ?> </a></li>
                <li><a href="<?php echo base_url() . "seguranca/logoutUser" ?>"> Sair </a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!--<div class="container">-->
