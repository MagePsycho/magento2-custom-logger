Custom Logger for Magento 2
===========================

This is a sample for custom logging module for Magento 2.

Installation
-------------
**Using Composer**

Run the following series of command (from root of your Magento2 Installation):
```
composer config repositories.magesycho-magento2-customlogger git git@github.com:MagePsycho/magento2-customlogger.git

composer require magepsycho/magento2-customlogger:dev-master
```

**Using Modman**

Run the following following command:
```
modman init
modman clone git@github.com:MagePsycho/magento2-customlogger.git
```

**Using Zip**
* Download the [Zip File](https://github.com/MagePsycho/magento2-customlogger/archive/master.zip)
* Extract & upload the files to `/path/to/magento2/app/code/MagePsycho/CustomLogger/`

After installation by either means, enable the extension by running following commands (again from root of Magento2 installation):
```
php bin/magento module:enable MagePsycho_CustomLogger --clear-static-content
php bin/magento setup:upgrade
```


Usage
-----
Inject module helper via DI
```
 /**
  * @var \MagePsycho\CustomLogger\Helper
  */
 protected $_helper;
 
 
 public function __construct(
     \MagePsycho\CustomLogger\Helper $helper
 ) {
     $this->_helper          = $helper;
 }
```

And call from any methods
```
 $this->_helper->log(__METHOD__, true); //logging with separator
 $this->_helper->log('message to be logged...');
```
