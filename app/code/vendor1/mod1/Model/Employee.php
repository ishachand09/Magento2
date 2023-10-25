<?php
namespace vendor1\mod1\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('vendor1\mod1\Model\ResourceModel\Employee');
    }
}
