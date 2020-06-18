<?php

namespace Harriswebworks\Formview\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class View extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $resultPage=$this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('Custom Quote Request Data'));
        return $resultPage;
    }
}
