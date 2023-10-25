<?php

namespace vendor1\mod1\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use vendor1\mod1\Test;

class DisplayParams extends Action
{
    protected $test;

    public function __construct(Context $context, Test $test)
    {
        parent::__construct($context);
        $this->test = $test;
    }

    public function execute()
    {
        $this->test->displayParams();
        // $output = $this->test->displayParams();
        // $resultPage = $this->_resultPageFactory->create();
        // $resultPage->getConfig()->getTitle()->set(__($output));
        // return $resultPage;
    }
}
