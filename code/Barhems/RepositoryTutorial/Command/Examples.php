<?php
namespace Barhems\RepositoryTutorial\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Examples extends Command
{
    protected $objectManager;
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\App\State $appState,
        $name=null
    )
    {
        $this->objectManager = $objectManager;
        $appState->setAreaCode('frontend');
        parent::__construct($name);
    }
    protected function configure()
    {
        $this->setName("ps:examples");
        $this->setDescription("A command the programmer was too lazy to enter a description for.");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // $repo = $this->objectManager->get('Magento\Cms\Model\PageRepository');
        // $page = $repo->getById(7);        
        // echo $page->getTitle(),"\n";
        // $page->setTitle($page->getTitle() . ', Edited by code!');
        // $repo->save($page); 
        // echo $page->getTitle(),"\n";
        //var_dump($page); 
        //create our filter
        $filter = $this->objectManager->create('Magento\Framework\Api\Filter');
        $filter->setData('field','sku');
        $filter->setData('value','%MG%');
        $filter->setData('condition_type','like');

        //create our filter2
        $filter2 = $this->objectManager->create('Magento\Framework\Api\Filter');
        $filter2->setData('field','sku');
        $filter2->setData('value','%2');
        $filter2->setData('condition_type','like');

        //add our filter(s) to a group (OR filters)
        // $filter_group = $this->objectManager->create('Magento\Framework\Api\Search\FilterGroup');
        // $filter_group->setData('filters', [$filter,$filter2]);

        //add our filter(s) to a group(AND filters)
        $filter_group = $this->objectManager->create('Magento\Framework\Api\Search\FilterGroup');
        $filter_group->setData('filters', [$filter]);
        $filter_group2 = $this->objectManager->create('Magento\Framework\Api\Search\FilterGroup');
        $filter_group2->setData('filters', [$filter2]);

        //add the group(s) to the search criteria object
        //$search_criteria = $this->objectManager->create('Magento\Framework\Api\SearchCriteriaInterface');
        //$search_criteria->setFilterGroups([$filter_group]);
        //$search_criteria->setFilterGroups([$filter_group, $filter_group2]);

        $search_criteria = $this->objectManager
        ->create('Magento\Framework\Api\SearchCriteriaBuilder')
        ->addFilter('sku','%MG%', 'like')
        ->addFilter('sku','%3', 'like')
        ->create();       

        //query the repository for the object(s)
        $repo = $this->objectManager->get('Magento\Catalog\Model\ProductRepository');                        
        $result = $repo->getList($search_criteria);
        $products = $result->getItems();
        foreach($products as $product)
        {
            echo $product->getSku(),"\n";
        }
    }

} 