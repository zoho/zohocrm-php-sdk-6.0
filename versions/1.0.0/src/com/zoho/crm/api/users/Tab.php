<?php 
namespace com\zoho\crm\api\users;

use com\zoho\crm\api\util\Choice;
use com\zoho\crm\api\util\Model;

class Tab implements Model
{

	private  $fontColor;
	private  $background;
	private  $keyModified=array();

	/**
	 * The method to get the fontColor
	 * @return Choice An instance of Choice
	 */
	public function getFontColor()
	{
		return $this->fontColor; 

	}

	/**
	 * The method to set the value to fontColor
	 * @param Choice $fontColor An instance of Choice
	 */
	public function setFontColor(Choice $fontColor)
	{
		$this->fontColor=$fontColor; 
		$this->keyModified['font_color'] = 1; 

	}

	/**
	 * The method to get the background
	 * @return Choice An instance of Choice
	 */
	public function getBackground()
	{
		return $this->background; 

	}

	/**
	 * The method to set the value to background
	 * @param Choice $background An instance of Choice
	 */
	public function setBackground(Choice $background)
	{
		$this->background=$background; 
		$this->keyModified['background'] = 1; 

	}

	/**
	 * The method to check if the user has modified the given key
	 * @param string $key A string
	 * @return int A int representing the modification
	 */
	public function isKeyModified(string $key)
	{
		if(((array_key_exists($key, $this->keyModified))))
		{
			return $this->keyModified[$key]; 

		}
		return null; 

	}

	/**
	 * The method to mark the given key as modified
	 * @param string $key A string
	 * @param int $modification A int
	 */
	public function setKeyModified(string $key, int $modification)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
