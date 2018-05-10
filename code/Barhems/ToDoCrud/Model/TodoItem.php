<?php
namespace Barhems\ToDoCrud\Model;
class TodoItem extends \Magento\Framework\Model\AbstractModel implements \Barhems\ToDoCrud\Api\Data\TodoItemInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'barhems_todocrud_todoitem';

    protected function _construct()
    {
        $this->_init('Barhems\ToDoCrud\Model\ResourceModel\TodoItem');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
