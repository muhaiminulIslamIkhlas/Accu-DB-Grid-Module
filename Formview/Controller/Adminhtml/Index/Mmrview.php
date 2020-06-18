<?php

namespace Harriswebworks\Formview\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Mmrview extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $resultPage=$this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('Marketing Materials & Promotional Item Data'));
        return $resultPage;
    }
}
