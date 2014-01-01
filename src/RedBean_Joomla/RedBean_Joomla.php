<?php

class RedBean_Joomla
{
	public static function joomla( $prefix, $facade=null )
	{
		$app = JFactory::getApplication();

		if ( $app->getCfg('dbtype') == 'mysqli' ) {
			$type = 'mysql';
		} else {
			$type = $app->getCfg('dbtype');
		}

		if ( is_null($facade) ) {
			R::addDatabase(
				'joomla',
				$type . ':'
				. 'host=' . $app->getCfg('host') . ';'
				. 'dbname=' . $app->getCfg('db'),
				$app->getCfg('user'),
				$app->getCfg('password')
			);

			R::selectDatabase('joomla');

			R::prefix($prefix);
		} else {
			$facade::addDatabase(
				'joomla',
				$type . ':'
				. 'host=' . $app->getCfg('host') . ';'
				. 'dbname=' . $app->getCfg('db'),
				$app->getCfg('user'),
				$app->getCfg('password')
			);

			$facade::selectDatabase('joomla');

			$facade::prefix($prefix, $facade);
		}
	}
}
