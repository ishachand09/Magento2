<?php

namespace vendor1\mod1\Observer;

use Magento\Framework\Event\ObserverInterface;

class LogPageLoad implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $controller = $observer->getControllerAction();
        $html = $controller->getResponse()->getBody();
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class);
        $logger->info("Page HTML: " . $html);
    }
}