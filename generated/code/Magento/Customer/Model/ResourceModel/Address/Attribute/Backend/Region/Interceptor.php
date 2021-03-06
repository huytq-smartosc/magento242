<?php
namespace Magento\Customer\Model\ResourceModel\Address\Attribute\Backend\Region;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\Address\Attribute\Backend\Region
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\Address\Attribute\Backend\Region implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Directory\Model\RegionFactory $regionFactory)
    {
        $this->___init();
        parent::__construct($regionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }
}
