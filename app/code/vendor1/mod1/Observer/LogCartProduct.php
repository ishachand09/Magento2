<?php

namespace vendor1\mod1\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogCartProduct implements ObserverInterface
{
    protected $logger;

    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        $sku = $product->getSku();
        $name = $product->getName();
        $quantity = $observer->getEvent()->getQuoteItem()->getQty();

        $logMessage = "Product Added to Cart: SKU: $sku, Name: $name, Quantity: $quantity";
        $this->logger->info($logMessage);
    }
}
