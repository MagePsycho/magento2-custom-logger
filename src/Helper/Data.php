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
    protected $_customLogger;

    /**
     * Data constructor.
     *
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Psr\Log\LoggerInterface $customLogger
     * @param \Magento\Framework\Module\ModuleListInterface $moduleList
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Psr\Log\LoggerInterface $customLogger,
        \Magento\Framework\Module\ModuleListInterface $moduleList
    ) {
        $this->_customLogger            = $customLogger;
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
        #$this->_customLogger->pushHandler( new \Monolog\Handler\StreamHandler( BP. '/var/log/magepsycho_customlogger.log') );

        if ($useSeparator) {
            $this->_customLogger->addDebug(str_repeat('=', 100));
        }

        $this->_customLogger->addDebug($message);
    }

}