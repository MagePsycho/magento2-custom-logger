<?php
namespace MagePsycho\CustomLogger\Helper;

/**
 * @category   MagePsycho
 * @package    MagePsycho_CustomLogger
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_logger;

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Module\ModuleListInterface $moduleList
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Module\ModuleListInterface $moduleList
    ) {
        $this->_logger                  = $logger; //$context->getLogger();
        $this->_moduleList              = $moduleList;

        parent::__construct($context);
    }

    /**
     * Logging Utility
     *
     * @param $message
     * @param bool|false $useSeparator
     */
    public function log($message, $useSeparator = false)
    {
        //Even this is not working
        #$this->_logger->pushHandler( new \Monolog\Handler\StreamHandler( '/var/log/magepsycho_customlogger.log') );

        if ($useSeparator) {
            $this->_logger->addDebug(str_repeat('=', 100));
        }

        $this->_logger->addDebug($message);
    }

}