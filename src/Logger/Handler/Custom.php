<?php

/**
 * @category   MagePsycho
 * @package    MagePsycho_CustomLogger
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace MagePsycho\CustomLogger\Logger\Handler;

use Monolog\Logger;
use Magento\Framework\Logger\Handler\Base;

class Custom extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/magepsycho_customlogger.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;
}