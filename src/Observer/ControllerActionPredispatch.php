<?php
namespace MagePsycho\CustomLogger\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * @category   MagePsycho
 * @package    MagePsycho_CustomLogger
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ControllerActionPredispatch implements ObserverInterface
{
    /**
     * @var \MagePsycho\CustomLogger\Helper\Data
     */
    protected $_customLoggerHelper;


    public function __construct(
        \MagePsycho\CustomLogger\Helper\Data $customLoggerHelper
    ) {
        $this->_customLoggerHelper          = $customLoggerHelper;
    }

    public function execute(Observer $observer)
    {
        $this->_customLoggerHelper->log(__METHOD__, true);
        $this->_customLoggerHelper->log($observer->getEvent()->getName() . ' > Helper DI');
    }
}