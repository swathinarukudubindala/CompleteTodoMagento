<?php
declare(strict_types=1);
namespace MageMastery\Todo\Model;

use MageMastery\Todo\Api\Data\TaskInterface;
use Magento\Framework\Model\AbstractModel;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;

class Task extends AbstractModel implements TaskInterface
{
    const TASK_ID = 'task_id';
    const STATUS = 'status';
    const LABEL = 'label';

    protected function _construct()
    {
        $this->_init(resourceModel: TaskResource::class);
        
    }

    /**
 * @return integer
 */
    public function getTaskId(): int
    {
        return (int) $this->getData( key: self::TASK_ID);
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return  $this->getData( key: self::STATUS);
        

    }
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return  $this->getData( key: self::LABEL);
        }

        /**
         * @param integer $taskId
         */
        public function setTaskId(int $taskId)
        {
            $this->setData(self::TASK_ID, $taskId);

        }

        /**
         * @param string $status
         */
        public function setStatus(string $status)
        {
            $this->setData(self::STATUS, $status);
        }

        /**
         * @param string $label
         */
        public function setLabel(string $label)
        {
            $this->setData(self::LABEL, $label);
        }

}