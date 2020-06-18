<?php


namespace Harriswebworks\Formview\Model;

use Magento\Framework\Model\AbstractModel;

class mmr extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(Harriswebworks\Formview\Model\ResourceModel\mmr::class);
    }
}