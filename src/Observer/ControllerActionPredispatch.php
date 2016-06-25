<?php
namespace MagePsycho\CustomLogger\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use MagePsycho\CustomLogger\Helper\Data as CustomLoggerHelper;

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
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger;

    /**
     * @var CustomLoggerHelper $helper
     */
    protected $_helper;


    public function __construct(
        CustomLoggerHelper $helper,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_helper          = $helper;
        $this->_logger          = $logger;
    }

    public function execute(Observer $observer)
    {
        // This logs to the custom file
        $this->_logger->debug(__METHOD__ . ' > Observer DI');

        // But this doesn't (always logs to debug.log)
        $this->_helper->log(__METHOD__ . ' > Helper DI', true);
    }
}