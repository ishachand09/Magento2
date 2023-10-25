<?php

namespace vendor1\mod1\Plugin;

class CatalogProductViewPlugin
{
    protected $modificationApplied = false;

    public function afterToHtml(\Magento\Catalog\Block\Product\View $subject, $result)
    {
        if (!$this->modificationApplied) {
            $modifiedResult = '<div class="custom-content">Modified Product View</div>';
            
            $result .= $modifiedResult;

            $this->modificationApplied = true;
        }

        return $result;
    }
}
