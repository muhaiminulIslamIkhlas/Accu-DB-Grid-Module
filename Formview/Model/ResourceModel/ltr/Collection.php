<?php

namespace Harriswebworks\Formview\Model\ResourceModel\ltr;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Harriswebworks\Formview\Model\ltr;
use Harriswebworks\Formview\Model\ResourceModel\ltr as ltrResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(ltr::class, ltrResource::class);
    }
}
