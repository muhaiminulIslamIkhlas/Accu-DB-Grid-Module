<?php

namespace Harriswebworks\Formview\Block;

use Magento\Framework\View\Element\Template;
use Harriswebworks\Formview\Model\ResourceModel\Item\Collection;
use Harriswebworks\Formview\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
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
        return $this->collectionFactory->create()->getItems();
    }
}