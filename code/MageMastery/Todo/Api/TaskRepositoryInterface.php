<?php
declare(strict_types=1);
namespace MageMastery\Todo\Api;

use MageMastery\Todo\Api\Data\TaskSearchResultInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use MageMastery\Todo\Api\Data\TaskInterface;

/*
 * @api
 */
interface TaskRepositoryInterface
{
    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return TaskSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultInterface;
    
    /**
     * @param integer $taskId
     * @return TaskInterface
     */
    public function get(int $taskId): TaskInterface;



   
    
}