<?php

namespace Dolphin\PluginDemo\Controller\Index;

class PluginExample extends \Magento\Framework\App\Action\Action
{
	protected $title;

	public function execute()
	{
		echo $this->setTitle('Welcome Plugin');
		echo $this->getTitle();
	}

	public function setTitle($title)
	{
		return $this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}
}