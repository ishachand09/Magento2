<?php
namespace vendor1\mod1\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\ObjectManagerInterface;

class Employee extends Action
{
    protected $pageFactory;
    protected $objectManager;
    protected $messageManager;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        ObjectManagerInterface $objectManager,
        ManagerInterface $messageManager
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->objectManager = $objectManager;
        $this->messageManager = $messageManager;
    }

    public function execute()
    {
        $page = $this->pageFactory->create();

        // Handle form submission
        if ($postData = $this->getRequest()->getPostValue()) {
            try {
                // Creating an instance of the Employee model
                $employee = $this->objectManager->create('vendor1\mod1\Model\Employee');
                $employee->setData($postData);
                $employee->save();

                $this->messageManager->addSuccessMessage(__('Employee data saved successfully.'));
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('Error occurred while saving employee data.'));
            }

            // Redirect to the same page after form submission
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setPath('*/*/employee');
            return $resultRedirect;
        }

        return $page;
    }
}
