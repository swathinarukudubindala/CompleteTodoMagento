<?php
declare(strict_types=1);
namespace MageMastery\Todo\Api;

use MageMastery\Todo\Api\Data\TaskInterface;

/**
 * @api
 */
interface CustomerTaskListInterface{

    /**
     * @return TaskInterface[]
     */
    public function getList();
    
}





























