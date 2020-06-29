<?php

/**
 * @author Felipe Wesley
 * @link https://github.com/felipewesley/mini-framework-php-mvc
 */

namespace App\Controller; 

use MiniFramework\Controller\Action; 
// use MiniFramework\Controller\Debug; 

class IndexController extends Action {
    
    public function index(){

        /**
         * A busca inicial pelas rotas começa aqui
         * Se a rota requisitada não existir no seu projeto, este método será chamado
         */

        $this->view->msg = 'Hello world!'; 

        return $this->render('index', 'layout_default'); 
    }

    public function about(){
        
        $this->view->title = 'About'; 

        return $this->render('about', null, ['css' => 'about']); 
    }
}