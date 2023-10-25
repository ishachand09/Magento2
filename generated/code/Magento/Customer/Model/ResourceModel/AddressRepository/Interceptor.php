<?php
namespace Magento\Customer\Model\ResourceModel\AddressRepository;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\AddressRepository
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\AddressRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\AddressFactory $addressFactory, \Magento\Customer\Model\AddressRegistry $addressRegistry, \Magento\Customer\Model\CustomerRegistry $customerRegistry, \Magento\Customer\Model\ResourceModel\Address $addressResourceModel, \Magento\Directory\Helper\Data $directoryData, \Magento\Customer\Api\Data\AddressSearchResultsInterfaceFactory $addressSearchResultsFactory, \Magento\Customer\Model\ResourceModel\Address\CollectionFactory $addressCollectionFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null)
    {
        $this->___init();
        parent::__construct($addressFactory, $addressRegistry, $customerRegistry, $addressResourceModel, $directoryData, $addressSearchResultsFactory, $addressCollectionFactory, $extensionAttributesJoinProcessor, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Customer\Api\Data\AddressInterface $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($address);
    }

    /**
     * {@inheritdoc}
     */
    public function getById($addressId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getById');
        return $pluginInfo ? $this->___callPlugins('getById', func_get_args(), $pluginInfo) : parent::getById($addressId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Customer\Api\Data\AddressInterface $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($address);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($addressId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        return $pluginInfo ? $this->___callPlugins('deleteById', func_get_args(), $pluginInfo) : parent::deleteById($addressId);
    }
}
