<?php

namespace Harriswebworks\Formview\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('hww_cqr_request', 'id');
    }
}
