<?php
namespace plance\widget;

use yii\helpers\Html;

class Menu extends \yii\base\Widget
{
	private static $items_ar = [];
	
    public function run()
    {
		if(sizeof(self::$items_ar) > 0)
		{
			return Html::tag('p', join(' ', self::$items_ar));
		}
    }
	
	/**
	 * Set menu items
	 * @param array $items menu items
	 */
	public static function set($items)
	{
		if(is_array($items) == true)
		{
			self::$items_ar =  array_merge(self::$items_ar, $items);
		}
		else
		{
			self::$items_ar[] = $items;
		}
	}
}