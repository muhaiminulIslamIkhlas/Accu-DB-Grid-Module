<?php

namespace Harriswebworks\Formview\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class mmr extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('hww_mmr_request', 'id');
    }
}
