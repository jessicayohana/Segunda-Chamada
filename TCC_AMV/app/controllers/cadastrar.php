<?php
//require_once "cadastro.html";

//print_r($_POST);

//print_r($_GET);

//if (isset($_POST['name']) AND !empty($_POST['name'])) {
//	print_r($_POST);

//	echo $_POST['name'];
//	echo $_REQUEST['name'];

//} else {
//	echo "ainda nao tem nada";
//}
//_______________________________________________________

// O Controlador (de cadastro)é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
$nome = $_POST['name'];
$sobrenome = $_POST['lastname'];
$email = $_POST['email'];
$senha = $_POST['password'];
$confsenha = $_POST['confpassword'];
$nmatricula = $_POST['matricula'];

//faça um require_once para o arquivo da Classe
require_once"../models/Cadastrar.php";

//faça um require_once para o arquivo de Conexao para BD
//require_once"../models/CrudProdutos.php";

//quando um valor da URL for igual a cadastrar faça isso
if ( $senha == $confsenha){

    $user = array(nome=>$nome, sobrenome=>$sobrenome, email=>$email, nmatricula=>$nmatricula);
    //crie um objeto $crud
    $crud = new CrudProdutos();
    $crud->salvar($produto);

    //redirecione para a página de produtos
    header('location:../views/admin/produtos.php');
}




















/* NÃO VOU USAR POR ENQUANTO

//quando um valor da URL for igual a editar faça isso
if ( $atividade == 'editar'){
    //algoritmo para editar
    $produto = array(id=>$id, nome=>$nome, preco=>$preco, categoria=>$categoria, quantidade_estoque=>$quantidade);
    $crud = new CrudProdutos();
    $crud->editar($produto);
    //redirecione para a página de produtos
    header('location:../views/admin/produtos.php');
}

//quando um valor da URL for igual a excluir faça isso
if ( $atividade == 'excluir'){
		
    //algoritmo para excluir
	 $produto = array(id=>$id_delete);
     $crud = new CrudProdutos();
     $crud->excluir($produto);
    //redirecione para a página de produtos
    header('location:../views/admin/produtos.php');
}
*/