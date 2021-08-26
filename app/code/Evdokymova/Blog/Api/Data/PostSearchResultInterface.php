<?php
namespace Evdokymova\Blog\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface PostSearchResultInterface
 * @package Evdokymova\Blog\Api\Data
 */
interface PostSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Evdokymova\Blog\Api\Data\PostInterface[]
     */
    public function getItems();

    /**
     * @param \Evdokymova\Blog\Api\Data\PostInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
