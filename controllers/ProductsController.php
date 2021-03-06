<?php
 
class ProductsController extends Controller 
{
    private $pageTpl = './views/products.tpl.php';
    private $uploadsDir ='./uploads';
    private $allowed = ['gif', 'png', 'jpeg','svg+xml'];
    
    public function __construct () {
        $this->model = new ProductsМodel();
		$this->view = new View();
    }

    private function fileCheck ($file) {
        $fileName = $file['file']['name'];
        $fileType = explode('/',$file['file']['type']);
        if(in_array($fileType[1],$this->allowed)) {
            $fileName = $this->getRandomFileName($fileName,$fileType[1]);
            move_uploaded_file($_FILES['file']['tmp_name'],$this->uploadsDir . '/' . $fileName);
            $target = $this->uploadsDir . '/' . $fileName;
            return $target;
        } else {
            $error = ['error' => 'не тот файл'];
            echo json_encode($error);
            return false;
        }
    }
    private function getRandomFileName ($newFileName,$type) {
        do {
            $name = md5(microtime() . rand(0,9999)) . '.' . $type;
            $newFileName = $name;
        }while(file_exists($file));
        return $newFileName;
    }

    public function postProduct () {
        $data = $_POST;
        if ($data) {
            if ($_FILES && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
                $fileTarget = $this->fileCheck($_FILES);
                if($fileTarget) {
                    $data = $this->model->addProduct($data,$fileTarget);
                    echo json_encode($data);
                }else {
                    $error = ['error'=>'Ошибка файла'];
                }
            }
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
