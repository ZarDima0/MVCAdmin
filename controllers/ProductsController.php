<?php 
class ProductsController extends Controller 
{
    private $pageTpl = './views/products.tpl.php';
    
    public function __construct () {
        $this->model = new ProductsМodel();
		$this->view = new View();
    }
    public function postProduct () {
        $data = $_POST;
        if ($data) {
            $this->model->addProduct($data);
        } else {
            $this->pageData['error'] = 'Данных нет';
        }
        
    }
    public function index () {
        if (!$_SESSION['user']) {
            header('location: /');
        };
        $allProducts = $this->model->allGoods();
        $this->pageData['allProducts'] = $allProducts;
        $this->view->render($this->pageTpl,$this->pageData);
    }

}