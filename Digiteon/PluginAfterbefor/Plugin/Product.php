<?php
namespace Digiteon\PluginAfterbefor\Plugin;

class Product
{
    private $logger;
    public function __construct() {
        $this->logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
    }   
 
    public function beforeGetName(\Magento\Catalog\Model\Product $subject)
    {
        $this->logger->debug('VNCOSY-GN-before');          
    }    

    public function aroundGetName(\Magento\Catalog\Model\Product $subject, \Closure $proceed) {
        $this->logger->debug('VNCOSY-GN-around-begin');         
        $returnValue = $proceed();
        $this->logger->debug('VNCOSY-GN-around-end');  
        return $returnValue;
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
        $this->logger->debug('VNCOSY-GN-after');          
        return $result;
    }
 
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        $this->logger->debug('VNCOSY-SN-before');          
        $name = $name.'>>';
        return $name;
    }
    
    public function aroundSetName(\Magento\Catalog\Model\Product $subject, \Closure $proceed, ...$args) {
        $this->logger->debug('VNCOSY-SN-around-begin');   
        $returnValue = $proceed(...$args);
        $this->logger->debug('VNCOSY-SN-around-end');  
        return $returnValue;
    }

    public function afterSetName(\Magento\Catalog\Model\Product $subject, $result) {
        $this->logger->debug('VNCOSY-SN-after');          
        return $result;
    } 
}