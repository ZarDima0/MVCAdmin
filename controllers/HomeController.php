<?php
class HomeController extends Controller  
{
    private $pageTpl = './views/home.tpl.php';

    public function __construct () {
        $this->model = new HomeModel();
		$this->view = new View();
    }

    public function index () {
        if (!$_SESSION['user']) {
            header('location: /');
        }

        $this->pageData['title'] = 'Кабинет'; 

        $users = $this->model->getUserCount();
        $products = $this->model->getProductsCount();
        $orders = $this->model->getOrdersCount();
        $getOrders = $this->model->getOrders();

        $this->pageData['getOrders'] = $orders;
        $this->pageData['userCount'] = $users;
        $this->pageData['products'] = $products;
        $this->pageData['orders'] = $orders;
        $this->pageData['getOrders'] = $getOrders;
        $this->view->render($this->pageTpl, $this->pageData);
    }   
    public function logout () {
        session_unset();
        header('location: /');
    }    
}