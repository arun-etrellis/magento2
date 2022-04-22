<?php
namespace Digiteon\DependencyInversion\Observer;

use Magento\Framework\Event\ObserverInterface;

class SaveObserver implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        try {
            // Do something
        } catch (\Exception $e) {
            // silence
        }
    }

   public function abc($order,$itemIds) {
      // Your public function
   }
}