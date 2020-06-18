<?php

namespace Harriswebworks\Formview\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ltr extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('hww_ltr_request', 'id');
    }
}
