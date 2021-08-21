<?php 
    $nome = ($_POST['txtNome']);
    $periodo = ($_POST['txtPeriodo']);
    $altura = ($_POST['txtAltura']);
    $comprimento = ($_POST['txtComprimento']);
    $peso = ($_POST['txtPeso']);
    $alimentacao = ($_POST['txtAlimentacao']);
    $local = ($_POST['txtLocal']);

    if($nome == '' || 
        $periodo == '' ||
        $altura == '' || 
        $comprimento == '' || 
        $peso == '' || 
        $alimentacao == '' ||
        $local == ''
    ){
        echo '<script> var res = alert("Preencha todos os Campos 😞 ");
        if(res == null){
            window.location.href = "area-restrita/exposicoes.php";
        }
        </script>';
    }
    else{

    require_once 'global.php';

    try{

        echo '<script> var res = alert("Cadastro realizado com sucesso 😀 ");
        if(res == null){
            window.location.href = "area-restrita/exposicoes.php";
        }
        </script>';
        
        $fossil = new Fossil();
        $fossil->setNome($nome);
        $fossil->setPeriodo($periodo);
        $fossil->setAltura($altura);
        $fossil->setComprimento($comprimento);
        $fossil->setPeso($peso);
        $fossil->setAlimentacao($alimentacao);
        $fossil->setLocal($local);


        //Cadastrar Imagem

        
        $fossil-> setDescImagem ($_POST['txtDescImagem']);
        
        $fossil-> setNomeImagem ( $_FILES['txtImagem']['name']);
        $arquivo = $_FILES['txtImagem']['tmp_name'];

        $fossil-> setCaminhoImagem ( "img/");


        $fossil-> setNomeImagem2 ( $_FILES['txtImagem2']['name']);
        $arquivo2 = $_FILES['txtImagem2']['tmp_name'];

        $fossil-> setCaminhoImagem2 ( "img/");

        $fossil-> setNomeImagem3 ( $_FILES['txtImagem3']['name']);
        $arquivo3 = $_FILES['txtImagem3']['tmp_name'];

        $fossil-> setCaminhoImagem3 ( "img/");

      

        move_uploaded_file($arquivo, 
                         
        $fossil->getCaminhoImagem() .  $fossil->getNomeImagem());
        
         $fossil-> setCaminhoImagem($fossil->getCaminhoImagem() .  $fossil->getNomeImagem());


         move_uploaded_file($arquivo2, 
                         
        $fossil->getCaminhoImagem2() .  $fossil->getNomeImagem2());
        
         $fossil-> setCaminhoImagem2($fossil->getCaminhoImagem2() .  $fossil->getNomeImagem2());


         move_uploaded_file($arquivo3, 
                         
        $fossil->getCaminhoImagem3() .  $fossil->getNomeImagem3());
        
         $fossil-> setCaminhoImagem3($fossil->getCaminhoImagem3() .  $fossil->getNomeImagem3());
         

        //Fim do cadastrar imagem

        echo $fossil->cadastrar2($fossil);

    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

}

?>