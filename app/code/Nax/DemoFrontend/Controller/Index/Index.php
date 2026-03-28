<?php

namespace Nax\DemoFrontend\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);

        $html = "
            <h1>Hello Shubhams your Magento 2 Frontend Controller Working 🎉</h1>
            <p>This content is coming from frontend controller.</p>
        ";

        return $result->setContents($html);
    }
}