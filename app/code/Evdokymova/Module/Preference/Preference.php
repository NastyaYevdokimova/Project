<?php
namespace Evdokymova\Module\Preference;

use Magento\Framework\View\Element\Template;

class Preference extends Template
{
    public function outWord($title){
        $a='examplePreference' . $title;
	return $a;
    }



 protected $_categoryCollectionFactory;
    protected $_productCollectionFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        array $data = []
    ) {
        $this->_categoryCollectionFactory = $categoryCollectionFactory;
        $this->_productCollectionFactory = $productCollectionFactory;
        parent::__construct($context, $data);
    }


    public function printCollection()
    {
        $categories = $this->_categoryCollectionFactory
            ->create()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter("include_in_menu",1);
        return $categories;
    }



}

