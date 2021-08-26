<?php
namespace Evdokymova\Blog\Api;

use Evdokymova\Blog\Api\Data\PostInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface PostRepositoryInterface
 * @package Evdokymova\Api
 * @api
 */
interface PostRepositoryInterface
{
    /**
     * @param int $id
     * @return \Evdokymova\Blog\Api\Data\PostInterface
     */
    public function get(int $id);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Evdokymova\Blog\Api\Data\PostSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * @param \Evdokymova\Blog\Api\Data\PostInterface $space
     * @return \Evdokymova\Blog\Api\Data\PostInterface
     */
    public function save(PostInterface $space);

    /**
     * @param \Evdokymova\Blog\Api\Data\PostInterface $space
     * @return bool
     */
    public function delete(PostInterface $space);

    /**
     * @param int $id
     * @return bool
     */
    public function deleteById(int $id);
}
