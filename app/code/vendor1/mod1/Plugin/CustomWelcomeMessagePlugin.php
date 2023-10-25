<?php

namespace vendor1\mod1\Plugin;

class CustomWelcomeMessagePlugin
{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        return "Welcome to Our Custom Store!";
    }
}
