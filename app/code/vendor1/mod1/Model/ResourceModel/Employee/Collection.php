<?php
namespace vendor1\mod1\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'employee_id';
    protected $_eventPrefix = 'vendor1_mod1_employee_collection';
    protected $_eventObject = 'employee_collection';

    protected function _construct()
    {
        $this->_init('vendor1\mod1\Model\Employee', 'vendor1\mod1\Model\ResourceModel\Employee');
    }
}
