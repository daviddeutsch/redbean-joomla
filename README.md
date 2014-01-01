RedBean for Joomla
==================

Takes care of all the instantiation and prefixes you need to have for making
RedBean work in Joomla.

### Usage

```php
// Include or autoload the files in this library

R::ext( 'joomla', array('RedBean_Joomla', 'joomla') );

// Specify 'prefix' for your component prefix
R::joomla('prefix');

// If you are juggling components, you may want to go the instance approach:

$r2db2 = R::instance();

$r2db2::joomla('prefix', $r2db2);

```
