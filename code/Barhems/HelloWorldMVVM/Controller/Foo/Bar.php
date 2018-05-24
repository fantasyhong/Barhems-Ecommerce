<?php    namespace Barhems\HelloWorldMVVM\Controller\Foo;
class Bar extends \Magento\Framework\App\Action\Action
{    
    public function execute()
    {
        var_dump("Proof of life");
    }
}