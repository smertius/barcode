<?php

namespace Barcode\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


/**
 * Created by JetBrains PhpStorm.
 * User: Kamil Pietrzak
 * Date: 20.03.13
 * Time: 19:16
 */
class IndexController extends AbstractActionController{

    public function indexAction() {
        return new ViewModel();
    }
}
