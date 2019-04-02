<?php
/**
 * Created by PhpStorm.
 * User: bangweiwei
 * Date: 2019-04-01
 * Time: 11:37
 */
include_once __DIR__.'/vendor/autoload.php';
var_dump(\Bonwe\WebDriver\WebDriverBy::id(33));
//$capabilities = \Bonwe\WebDriver\Remote\DesiredCapabilities::safari();
//
//        $driver = \Bonwe\WebDriver\Remote\RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities, 2000);
//        $driver->get('http://www.baidu.com');