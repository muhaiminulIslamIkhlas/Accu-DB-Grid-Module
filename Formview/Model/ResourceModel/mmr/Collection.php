<?php

namespace Harriswebworks\Formview\Model\ResourceModel\mmr;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Harriswebworks\Formview\Model\mmr;
use Harriswebworks\Formview\Model\ResourceModel\mmr as mmrResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(mmr::class, mmrResource::class);
    }
}
