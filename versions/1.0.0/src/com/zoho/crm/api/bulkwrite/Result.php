<?php 
namespace com\zoho\crm\api\bulkwrite;

use com\zoho\crm\api\util\Model;

class Result implements Model
{

	private  $downloadUrl;
	private  $keyModified=array();

	/**
	 * The method to get the downloadUrl
	 * @return string A string representing the downloadUrl
	 */
	public function getDownloadUrl()
	{
		return $this->downloadUrl; 

	}

	/**
	 * The method to set the value to downloadUrl
	 * @param string $downloadUrl A string
	 */
	public function setDownloadUrl(string $downloadUrl)
	{
		$this->downloadUrl=$downloadUrl; 
		$this->keyModified['download_url'] = 1; 

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
