<?php
namespace Barhems\ToDoCrud\Model\ResourceModel;
class TodoItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('barhems_todocrud_todoitem','barhems_todocrud_todoitem_id');
    }
}
