<?php
namespace MageMastery\Todo\Model\ResourceModel\Task;

use MageMastery\Todo\Api\Data\TaskSearchResultInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use \MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use \MageMastery\Todo\Model\Task;

class Collection extends AbstractCollection  implements TaskSearchResultInterface
{

   /**
     * @var SearchCriteriaInterface
     */
    private $searchCriteria;

    protected function _construct()
    {
        $this->_init( model: Task::class, resourceModel: TaskResource::class);
    }

     /**
     * Get search criteria
     *
     * @return SearchCriteriaInterface|null
     */
    public function getSearchCriteria()
    {
       return $this->searchCriteria;
    }

    /**
     * Set search criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return Collection
     * @SuppressWarning(PHPMD.UnusedFormulaParameter)
     */
    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null)
    {
        
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
 
    /**
     * Get total count.
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->getSize();
    }

    /**
     * Set total count.
     *
     * @param int $totalCount
     * @return $this
     * @SuppressWarning(PHPMD.UnusedFormulaParameter)
     */
    public function setTotalCount($totalCount)
    {
        return $this;
    }

/**
     * @param array|null $items
     * @return $this
     * @throws \Exception
     */
    public function setItems(array $items = null)
    {
        if (!$items) {
            return $this;
        }
        foreach($items as $item) {
            $this->addItem($item);
        }
        return $this;
}
}