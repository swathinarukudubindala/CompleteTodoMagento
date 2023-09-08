<?php
namespace MageMastery\Todo\Controller\Index;

use MageMastery\Todo\Service\TaskRepository;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use MageMastery\Todo\Model\Task;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Model\TaskFactory;
use MageMastery\Todo\Api\TaskManagementInterface;


class Index extends Action
{
    private $taskResource;

    private $taskFactory;

    /**
     * @var TaskRepository
     */
    private $taskRepository;


    private $searchCriteriaBuilder;

    private $taskManagement;

    public function __construct(
        Context $context,
        TaskFactory $taskFactory,
        TaskResource $taskResource,
        TaskRepository $taskRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        TaskManagementInterface $taskManagement
    ) {
        $this->taskFactory = $taskFactory;
        $this->taskResource = $taskResource;
        $this->taskRepository = $taskRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->taskManagement = $taskManagement;

        parent:: __construct($context);
    }

    public function execute()
    {
 

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}