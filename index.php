<?php
    $loader = require __DIR__. '/vendor/autoload.php';

    use MyApp\entidade\Produto;
    use MyApp\repositorio\ProdutoRepositorio;

    use MyApp\entidade\Cliente;
    use MyApp\repositorio\ClienteRepositorio;
	use MyApp\controlador\ClienteControlador;

    use MyApp\entidade\Venda;
    use MyApp\repositorio\VendaRepositorio;

    use MyApp\entidade\DetalheVenda;
    use MyApp\repositorio\DetalheVendaRepositorio;


	$app = new \Slim\Slim();

	$clienteControlador = new ClienteControlador();

	$app->get ( '/', function(){
		echo json_encode(
			[
				"api" => "Venda",
				"version" => "1.0.0",
			]
		);
	} );

	//GET
	$app->get ('/cliente(/(:id))', function($id = null) use ($clienteControlador){
		echo json_encode($clienteControlador->get($id));
	});

	//POST
	$app->post ('/cliente(/)', function() use ($clienteControlador){
		$app = \Slim\Slim::getInstance();
		$json = json_decode($app->request ()->getBody());
		echo json_encode	($clienteControlador->insert($json));
	});



	$app->run();

    /*$produto = new Produto();
    $produto->setId(0);
    $produto->setNome("Macarrao2");
    $produto->setQuantidade(50);
    $produto->setValorCompra(10.00);
    $produto->setValorVenda(12.00);

    $cliente = new Cliente();
    $cliente->setId(0);
    $cliente->setNome("Dinho");
    $cliente->setEmail("dinho@dinho.com");

    $venda = new Venda();
    $time = new DateTime("now");
    $venda->setData($time);
    $venda->setValor($produto->getValorVenda());
    $venda->setCliente($cliente);

    $repProd = new ProdutoRepositorio();
    $repCli = new ClienteRepositorio();
    $repVenda = new VendaRepositorio();

    $repProd->insert($produto);
    $repCli->insert($cliente);
    $repVenda->insert($venda);
    */

?>
