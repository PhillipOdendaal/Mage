<?php
/**
 * Created by PhpStorm.
 * User: Phillip
 * Date: 11/10/2016
 * Time: 1:12 PM
 */
class M4U_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo "in M4U_HelloWorld_IndexController";

        //$this->loadLayout(array('default'));
        //print_r($this);
        //$this->renderLayout();

        //Get current layout state
        $this->loadLayout();

        $block = $this->getLayout()->createBlock(
            'Mage_Core_Block_Template',
            'M4U_HelloWorld',
            array('template' => 'helloworld/helloworld.phtml')
        );

        $this->getLayout()->getBlock('content')->append($block);

        //Release layout stream... lol... sounds fancy
        $this->renderLayout();
    }
}
