<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */

        // $this->_helper->viewRenderer->setNoRender(true);
 
        // Globally:
        // $this->_helper->removeHelper('viewRenderer');

        // Zend_Controller_Front::getInstance()
        // ->setParam('noViewRenderer', true);
    }

    public function indexAction()
    {
        // action body

        // $this->_helper->viewRenderer->setNoRender();

        // $this->render();

        $this->render('add');
    }


}

