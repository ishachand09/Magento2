<?php

namespace vendor1\mod1\Block;

use Magento\Framework\View\Element\Template;

class Message extends Template
{
    // public function _toHtml()
    // {
    //     return '<div>This is displayed on all pages</div>';
    // }

    public function _afterToHtml($html)
    {
        return $html . '<div>Additional Message from _afterToHtml()</div>';
    }
}
