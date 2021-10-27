<?php 
class ProductsController extends Controller 
{
    private $pageTpl = './views/products.tpl.php';
    
    public function __construct () {
        $this->model = new ProductsМodel();
		$this->view = new View();
    }
    public function index () {
        var_dump($_GET);
    }
}