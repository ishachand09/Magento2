<?php
namespace vendor1\mod1\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use vendor1\mod1\Test;

class Index extends Action
{
    private $test;

    public function __construct(Context $context, Test $test)
    {
        parent::__construct($context);
        $this->test = $test;
    }

    public function execute()
    {
        $this->test->displayParams();
    }
}