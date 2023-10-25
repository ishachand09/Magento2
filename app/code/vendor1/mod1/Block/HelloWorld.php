<?php

namespace vendor1\mod1\Block;

use Magento\Framework\View\Element\Template;

class HelloWorld extends Template
{

    protected function _afterToHtml($html)
    {
        return '<h1> Isha </h1>'. $html;
    }
}