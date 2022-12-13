<?php
/**
 *
 * Copyright © 2015 Vendorcommerce. All rights reserved.
 */

namespace RLTSquare\Unit3\Controller\Account;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Unit3 implements ActionInterface
{
    /**
     * @var PageFactory
     */
    protected PageFactory $resultPageFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
    }

 /**
  * Page creation.
  */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__("My Unit3"));
        return $resultPage;

    }
}
