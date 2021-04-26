<?php

    namespace App\Controllers;

    //recursos miniframework
    use MF\Controller\Action;
    use MF\Model\Container;

    //models
    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action{

        

        public function index(){

            $this->view->dados = Container::getModel('info')->getInfo();

            $this->render('index','layout1');
        }

        public function sobreNos(){

            $this->view->dados = Container::getModel('produto')->getProdutos();
            $this->render('sobreNos','layout1');
        }

        
    }
?>