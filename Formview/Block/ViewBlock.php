<?php

namespace Harriswebworks\Formview\Block;

use Magento\Framework\View\Element\Template;
use Harriswebworks\Formview\Model\ResourceModel\Item\Collection;
use Harriswebworks\Formview\Model\ResourceModel\Item\CollectionFactory;

class ViewBlock extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Mastering\SampleModule\Model\Item[]
     */
    public function getItems()
    {
        $id = $this->getRequest()->getParam('id');

        $item=$this->collectionFactory->create()->addFieldToFilter('id', $id);
        $item=$item->getData();
        return $item;

    }
}