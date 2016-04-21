<?php
namespace plance\widget;

class Menu extends \yii\base\Widget
{
	private static $items_ar = [];
	
    public function run()
    {
		if(sizeof(self::$items_ar) > 0)
		{
			return '<p>'.join(' ', self::$items_ar).'</p>';
		}
    }
	
	/**
	 * Устанавливат меню модуля или пункты меню
	 *
	 * @param array $items массив пунктов меню
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