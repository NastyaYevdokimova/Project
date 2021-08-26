<?php
namespace Evdokymova\Blog\Model;

use Evdokymova\Blog\Api\Data\PostInterface;
use Evdokymova\Blog\Model\ResourceModel\Post as PostResource;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Post
 * @package Evdokymova\Blog\Model
 */
class Post extends AbstractModel implements PostInterface
{
    /**
     * @var string
     */
    protected $_idFieldName = PostInterface::ID; //@codingStandardsIgnoreLine

    /**
     * @inheritdoc
     */
    protected function _construct() //@codingStandardsIgnoreLine
    {
        $this->_init(PostResource::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(PostInterface::NAME);
    }

    /**
     * @param int $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setData(PostInterface::NAME, $name);
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->getData(PostInterface::COUNTRY);
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->setData(PostInterface::COUNTRY, $country);
        return $this;
    }

    /**
     * @return string
     */
    public function getStages()
    {
        return $this->getData(PostInterface::STAGES);
    }

    /**
     * @param string $stages
     * @return $this
     */
    public function setStages(string $stages)
    {
        $this->setData(PostInterface::STAGES, $stages);
        return $this;
    }

   }
