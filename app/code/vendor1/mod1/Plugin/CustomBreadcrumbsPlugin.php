<?php

namespace vendor1\mod1\Plugin;

class CustomBreadcrumbsPlugin
{
    public function beforeAddCrumb(
        \Magento\Theme\Block\Html\Breadcrumbs $subject,
        $crumbName,
        $crumbInfo
    ) {
        $crumbInfo['label'] = 'Hummingbird ' . $crumbInfo['label'] . ' HBWSL';
        // dump($crumbInfo);
        return [$crumbName, $crumbInfo];
    }
}
