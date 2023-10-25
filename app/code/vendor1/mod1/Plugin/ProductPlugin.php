<?php
namespace vendor1\mod1\Plugin;

class ProductPlugin
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        if( $subject->getFinalPrice() == 20) {
            return $result . ' On Bumper Sale!';
        }
        else if ($subject->getFinalPrice() <= 35 && $subject->getFinalPrice() >= 25) {
            return $result . ' On Demand Products!';
        }
        else if ($subject->getFinalPrice() >= 70) {
            return $result . ' Premium Products!';
        }
        
        return $result;
    }

    
}
