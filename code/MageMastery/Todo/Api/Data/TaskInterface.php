<?php
declare(strict_types=1);
namespace MageMastery\Todo\Api\Data;

/**
 * @api
 */
interface TaskInterface
{
/**
 * @return integer
 */
 public function getTaskId(): int;


 /**
  * @return string
  */
    public function getStatus(): string;

    /** 
     * @return string
     */
     public function getLabel(): string;

     /**

      * @param integer $taskId
      * @return void
      */
     public function setTaskId(int $taskId);

     /**
      * @param string $status
      * @return void
      */
     public function setStatus(string $status);

     /**
      * @param string $label
      * @return void
      */
     public function setLabel(string $label);

}





























