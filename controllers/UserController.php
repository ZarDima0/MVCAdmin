<?php
class UserController extends Controller 
{
    private $pageTpl = './views/user.tpl.php';

    public function __construct () {
        $this->model = new UserModel();
		$this->view = new View();
    }
    public function Index () {
        $allUser = $this->model->allUser();
        $this->pageData['allUser'] = $allUser;
        $this->pageData['test'] = 'Dima';
        $this->view->render($this->pageTpl,$this->pageData);
    }
}