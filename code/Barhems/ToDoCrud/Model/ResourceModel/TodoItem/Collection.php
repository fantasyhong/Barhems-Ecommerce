<?php
namespace Barhems\ToDoCrud\Model\ResourceModel\TodoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Barhems\ToDoCrud\Model\TodoItem','Barhems\ToDoCrud\Model\ResourceModel\TodoItem');
    }
}
