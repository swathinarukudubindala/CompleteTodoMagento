<?php
namespace MageMastery\Todo\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Task extends AbstractDb
{
    protected function _construct()
    {
        $this->_init( mainTable: 'magemastery_todo_task', idFieldName: 'task_id');
    }
}