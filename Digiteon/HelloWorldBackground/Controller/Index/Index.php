<?php
/**
 * PHP version 7.x
 */
namespace Digiteon\HelloWorldBackground\Controller\Index;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action as ActionController;

class Index extends ActionController
{
	/**
     * @var \Magento\Framework\View\Result\PageFactory
     */
	protected $_pageFactory;
	
    /**
     * Index constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
		$this->_pageFactory = $pageFactory;
        parent::__construct($context);
		
    }

    /**
	 * PageFactory load and render layout
     * @return $this
     */
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
