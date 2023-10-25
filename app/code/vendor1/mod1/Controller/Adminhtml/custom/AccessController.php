<?php

namespace vendor1\mod1\Controller\Adminhtml\custom;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class AccessController extends Action
{
    // public function execute()
    // {
    //     $accessParam = $this->getRequest()->getParam('access');

    //     if ($accessParam === 'true') {
    //         // Your admin controller logic here
    //         $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    //         $resultPage->getConfig()->getTitle()->set("Admin Controller");
    //         return $resultPage;
    //     } else {
    //         $this->messageManager->addErrorMessage(__('Access denied.'));
    //         return $this->_redirect('*/*/index');
    //     }
    // }

    // public function execute()
    // {
    //     $access = $this->getRequest()->getParam('access');
    //     if ($access === 'True') {
    //         echo "Admin Controller Accessed";

    //         $this->_view->loadLayout();
    //         $this->_view->renderLayout();
    //     } else {
    //         echo "Access Denied";
    //         $this->_redirect('adminhtml/index/noroute');
    //     }
    // }

    public function execute()
    {
        $access = $this->getRequest()->getParam('access');
        if ($access === 'True') {
            echo "Admin Controller Accessed";
        } else {
            echo "Access Denied";
        }
    }

}
