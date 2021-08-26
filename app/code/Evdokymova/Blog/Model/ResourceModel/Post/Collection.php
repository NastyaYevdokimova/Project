<?php
namespace Evdokymova\Blog\Model\ResourceModel\Post;

use Evdokymova\Blog\Model\Post;
use Evdokymova\Blog\Model\ResourceModel\Post as PostResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Evdokymova\Blog\Model\ResourceModel\Post
 */
class Collection extends AbstractCollection
{
    /**
     * @inheritdoc
     */
    protected function _construct() //@codingStandardsIgnoreLine
    {
        $this->_init(Post::class, PostResource::class);
    }
}
