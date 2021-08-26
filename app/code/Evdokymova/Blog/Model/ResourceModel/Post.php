<?php
namespace Evdokymova\Blog\Model\ResourceModel;

use Evdokymova\Blog\Api\Data\PostInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Post
 * @package Evdokymova\Blog\Model\ResourceModel
 */
class Post extends AbstractDb
{
    /**
     * @var string
     */
    const TABLE_NAME = 'evdokymova_blog_post';

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct() //@codingStandardsIgnoreLine
    {
        $this->_init(self::TABLE_NAME, PostInterface::ID);
    }
}
