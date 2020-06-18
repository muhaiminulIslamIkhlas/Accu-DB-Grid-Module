<?php

namespace Harriswebworks\Formview\Block;

use Magento\Framework\View\Element\Template;
use Harriswebworks\Formview\Model\ResourceModel\mmr\Collection;
use Harriswebworks\Formview\Model\ResourceModel\mmr\CollectionFactory;

class Mmrview extends Template
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

    public function getItems()
    {
        $id = $this->getRequest()->getParam('id');

        $item=$this->collectionFactory->create()->addFieldToFilter('id', $id);
        $item=$item->getData();
        return $item;

    }
}