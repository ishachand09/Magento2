<?php

namespace vendor1\mod1\Plugin;

class Footer
{
   public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
   {
      return '© 2023 Isha Chand. All Rights Reserved.';
   }
}