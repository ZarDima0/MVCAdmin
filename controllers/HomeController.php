<?php
class HomeController extends Controller  
{
    private $pageTpl = './views/home.tpl.php';

    public function __construct () {
        $this->model = new HomeModel();
		$this->view = new View();
    }

    public function index () {
        $this->pageData['title'] = 'Кабинет'; 
        $this->view->render($this->pageTpl, $this->pageData);
    }       
}