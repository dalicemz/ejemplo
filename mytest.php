<?php

require_once(__DIR__ . '/vendor/autoload.php');

$host = 'http://192.168.43.86:4444/wd/hub'; // this is the default
$USE_FIREFOX = false; // if false, will use chrome.

if ($USE_FIREFOX)
{
    $driver = Facebook\WebDriver\Remote\RemoteWebDriver::create(
        $host, 
        Facebook\WebDriver\Remote\DesiredCapabilities::firefox()
    );
}
else
{
    $driver = Facebook\WebDriver\Remote\RemoteWebDriver::create(
        $host, 
        Facebook\WebDriver\Remote\DesiredCapabilities::chrome()
    );
}
$driver->get("http://34.70.49.21:80/view/login.php");
#$driver->get("http://www.facebook.com");
sleep(5);
#$driver->get("http://www.google.com");
# enter text into the search field

#$driver->findElement(Facebook\WebDriver\WebDriverBy::id('usuario'))->click();
#$driver->getKeyboard()->sendKeys('jose');
#sleep(1);
$driver->findElement(Facebook\WebDriver\WebDriverBy::id('usuario'))->click();
$driver->findElement(Facebook\WebDriver\WebDriverBy::id('usuario'))->sendKeys('juan');
sleep(1);
$driver->findElement(Facebook\WebDriver\WebDriverBy::id('clave'))->click();
sleep(1);
$driver->findElement(Facebook\WebDriver\WebDriverBy::id('clave'))->sendKeys('empleado');
#sleep(1);
# Click the search button
$driver->findElement(Facebook\WebDriver\WebDriverBy::id('login'))->click();
