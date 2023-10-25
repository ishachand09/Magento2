<?php

namespace Isha\Us9\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
// use Magento\Catalog\Model\Product\Attribute\Source\Status;
use Magento\Framework\App\Area;
use Magento\Store\Model\App\Emulation;

use Magento\Catalog\Model\Product\Attribute\Source\Status;
use Magento\Catalog\Model\ResourceModel\Product\Action;

class MultipleProductEnabler extends Action
{
    /**
     * @var Action
     */
    private $productAction;

    public function __construct(
        Action $productAction
    ) {
        $this->productAction = $productAction;
    }

    public function execute()
    {
        /** Array of product ids */
        $productIds = [2];

        /** Contains the id of the store in which you would like to enable/disable the product */
        $storeId = 1;

        /**
         * You can put any number of product attributes here. However, in the scope of this code we are going to
         * only enable/disable the product.
         */
        $attributes = [
            'status' => Status::STATUS_DISABLED
        ];

        $this->productAction->updateAttributes($productIds, $attributes, $storeId);
    }
}

// class ProductDisable
// {
//     /**
//      * @var Emulation
//      */
//     private $emulation;

//     /**
//      * @var ProductRepositoryInterface
//      */
//     private $productRepository;
//     private $scopeConfig;

//     public function __construct(
//         Emulation $emulation,
//         ProductRepositoryInterface $productRepository,
//         ScopeConfigInterface $scopeConfig
//     ) {
//         $this->emulation = $emulation;
//         $this->productRepository = $productRepository;
//         $this->scopeConfig = $scopeConfig;
//     }

//     public function execute()
//     {
//         $storeId = 1;
//         /** This is the store id  */
//         $this->emulation->startEnvironmentEmulation($storeId, Area::AREA_FRONTEND);
//         $isDisabled = $this->scopeConfig->getValue('general3/custom_configuration3/enable4');
//         if ($isDisabled  === '1') {
            
//             /** @var ProductInterface $product */
//             $product = $this->productRepository->get('BlackHoodie');
//             $product->setStatus(Status::STATUS_DISABLED);
//             $this->productRepository->save($product);
//         }



//         $this->emulation->stopEnvironmentEmulation();
//     }
// }
