
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
            <a class="navbar-brand" href="<?php echo base_url(); ?>"> Sistema Biblioteca </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu01 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu01</a></li>
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu02</a></li>
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu03</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu02 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu01</a></li>
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu02</a></li>
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu03</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu03 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu01</a></li>
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu02</a></li>
                        <li><a href="<?php echo base_url("funcionarios_controller") ?>"> Funcionario</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pratileira <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("pratileira") ?>"> Pratileira</a></li>
                        <li><a href="<?php echo base_url("#") ?>"> SubMenu02</a></li>
                        <li><a href="<?php echo base_url("funcionarios_controller") ?>"> Funcionario</a></li>

                    </ul>
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