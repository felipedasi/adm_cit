<?php require 'conexao.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />

    <!--css materialize-->
    <link rel="stylesheet" href="materialize/css/materialize.css" />
    <link rel="stylesheet" href="materialize/css/geral.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Controle Estoque LAB-206</title>
</head>

<body>
    <!--header-->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/tecnologia3.png" />
                <!-- random image -->
                <div class="caption left-align">
                    <h5 class="titulo">CADASTRO DE SHIELDS
                        <h6 class="light grey-text text-lighten-3">
                            lab 206-cotada</h4>
                        </h6>
                </div>
            </li>
        </ul>
    </div>
    <!--final header-->
    <!--menu tbs-->
    <div class="row ">

        <div class="col s12 #3949ab indigo darken-1">
            <ul class="tabs #3949ab indigo darken-1">
                <li class="tab col s3"><a class="active" href="#test1">Cadastrar item</a></li>
                <li class="tab col s3"><a href="#test2">Consultar itens</a></li>


            </ul>
        </div>
        <!--cadastro de empresas-->

        <div id="test1">
            <div class="container">
                <form method="post" action="cadastra.php">
                    <div class="col s12 ">
                        <div class="row">

                            <div class="row  ">
                                <div class="input-field col s6">
                                    <input name="item" id="item" type="text" class="validate">
                                    <label for="item">Item</label>
                                </div>
                                <div class="input-field col s6">
                                    <input name="nome" id="nome" type="text" class="validate">
                                    <label for="nome">Emprestado para</label>
                                </div>


                            </div>

                            <button class="btn #0d47a1 blue darken-4
">Cadastrar</button>

                </form>
                </div>

                </div>

            </div>
        </div>




    </div>
    <div id="test2">
    <table class="highlight">
    <thead>
        <tr>
            <th data-field="id">Aluno</th>
            <th data-field="name">Item</th>
            <th data-field="devolvido">Devolvido?</th>
  
  <?php   $select = $conm->prepare("SELECT *FROM itens");
$select->execute();
$fecth = $select->fetchAll();
  



            foreach($fecth as $produto) {  ?>
                <!--patente-->
            
    <?php
             
              
               echo 
             
             '
    
    <tbody>
    <tr>
            
        <td>'.$produto['item'].'</td>
        <td>'.$produto['aluno'].'</td>
       <td> <a   href="delete.php?id='.$produto['id'].'">
        <i class="material-icons ">check_box</i>    </a>
    </form></td>
       


    '

?>



<!--fim-->
  <?php }?> </tr>
        
        </tbody>
    </table>
    
    </form>









    </div>
    </div>
    <!--fim menu tabs-->

</body>
<!--jquery-->
<script type="text/javascript" src="materialize/js/jquery.js"></script>
<!--javascript materialize-->
<script type="text/javascript" src="materialize/js/materialize.js"></script>
<script>
    //header
    $(document).ready(function() {
        $(".slider").slider({
            indicators: false,
            height: 100

        });
    });
</script>

</html>