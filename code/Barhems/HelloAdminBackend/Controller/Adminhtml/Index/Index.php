<?php
namespace Barhems\HelloAdminBackend\Controller\Adminhtml\Index;
class Index extends \Magento\Backend\App\Action
{
    
    const ADMIN_RESOURCE = 'Index';       
        
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        parent::__construct($context);
    }
    
    public function execute()
    {
        $page = $this->resultPageFactory->create();
        $page->setActiveMenu('Barhems_HelloAdminBackend::a_menu_item');
        $page->getConfig()->getTitle()->prepend(__('Barhems'));
        return $page;
    }

     protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Barhems_HelloAdminBackend::menu_1');
    }   
}
