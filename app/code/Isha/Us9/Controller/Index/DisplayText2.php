<?php
namespace Isha\Us9\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Controller\ResultFactory;

class DisplayText2 extends Action
{
    private $scopeConfig;

    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }

    public function execute()
    {
        $isEnabled = $this->scopeConfig->getValue('general1/custom_configuration/enable');
        $isEnabled2 = $this->scopeConfig->getValue('general2/custom_configuration2/enable2');
        $isEnabled3 = $this->scopeConfig->getValue('general2/custom_configuration2/enable3');
        if($isEnabled2 === '1' && $isEnabled3 === '1'){
            $textToDisplay = $this->scopeConfig->getValue('general2/custom_configuration2/text_to_display2');
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
            $resultPage->getConfig()->getTitle()->prepend('Text to Display: ' . $textToDisplay . 'HBWSL');
            return $resultPage;
        }else {
                return $this->resultFactory->create(ResultFactory::TYPE_FORWARD)->forward('noroute');
        }
        // if ($isEnabled === '1') {
        //     $textToDisplay = $this->scopeConfig->getValue('general1/custom_configuration/text_to_display');
        //     $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        //     $resultPage->getConfig()->getTitle()->prepend('Text to Display: ' . $textToDisplay);

        //     return $resultPage;
        // } else {
        //     return $this->resultFactory->create(ResultFactory::TYPE_FORWARD)->forward('noroute');
        // }
    }
}
