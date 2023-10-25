<?php

namespace vendor1\mod1\Observer;

use Magento\Framework\Event\ObserverInterface;

class LogProductView implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        $productName = $product->getName();
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class);
        $logger->info("Product Viewed: " . $productName);
    }
}
