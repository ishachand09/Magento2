<?php
namespace Isha\Humc\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends Action
{
    protected $resultPageFactory;
    protected $scopeConfig;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function execute()
    {

        $enable = $this->scopeConfig->getValue('general1/custom_section/field_one', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $textToDisplay = $this->scopeConfig->getValue('general1/custom_section/field_two', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);


        $resultPage = $this->resultPageFactory->create();

        if ($enable == '1') {
            $resultPage->getConfig()->getTitle()->set($textToDisplay);

        } else {

            $resultPage->getConfig()->getTitle()->set('mod9 is disabled');
        }
        return $resultPage;
    }
}