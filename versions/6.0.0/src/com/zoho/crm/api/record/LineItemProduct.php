<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\tags\Tag;
use com\zoho\crm\api\users\MinifiedUser;
use com\zoho\crm\api\util\Model;

class LineItemProduct extends Record implements Model
{


	/**
	 * The method to get the productCode
	 * @return string A string representing the productCode
	 */
	public function getProductCode()
	{
		return $this->getKeyValue('Product_Code'); 

	}

	/**
	 * The method to set the value to productCode
	 * @param string $productCode A string
	 */
	public function setProductCode(string $productCode)
	{
		$this->addKeyValue('Product_Code', $productCode); 

	}

	/**
	 * The method to get the currency
	 * @return string A string representing the currency
	 */
	public function getCurrency()
	{
		return $this->getKeyValue('Currency'); 

	}

	/**
	 * The method to set the value to currency
	 * @param string $currency A string
	 */
	public function setCurrency(string $currency)
	{
		$this->addKeyValue('Currency', $currency); 

	}

	/**
	 * The method to get the name
	 * @return string A string representing the name
	 */
	public function getName()
	{
		return $this->getKeyValue('name'); 

	}

	/**
	 * The method to set the value to name
	 * @param string $name A string
	 */
	public function setName(string $name)
	{
		$this->addKeyValue('name', $name); 

	}

	/**
	 * The method to get the id
	 * @return string A string representing the id
	 */
	public function getId()
	{
		return $this->getKeyValue('id'); 

	}

	/**
	 * The method to set the value to id
	 * @param string $id A string
	 */
	public function setId(string $id)
	{
		$this->addKeyValue('id', $id); 

	}

	/**
	 * The method to get the createdBy
	 * @return MinifiedUser An instance of MinifiedUser
	 */
	public function getCreatedBy()
	{
		return $this->getKeyValue('Created_By'); 

	}

	/**
	 * The method to set the value to createdBy
	 * @param MinifiedUser $createdBy An instance of MinifiedUser
	 */
	public function setCreatedBy(MinifiedUser $createdBy)
	{
		$this->addKeyValue('Created_By', $createdBy); 

	}

	/**
	 * The method to get the createdTime
	 * @return \DateTime An instance of \DateTime
	 */
	public function getCreatedTime()
	{
		return $this->getKeyValue('Created_Time'); 

	}

	/**
	 * The method to set the value to createdTime
	 * @param \DateTime $createdTime An instance of \DateTime
	 */
	public function setCreatedTime(\DateTime $createdTime)
	{
		$this->addKeyValue('Created_Time', $createdTime); 

	}

	/**
	 * The method to get the modifiedBy
	 * @return MinifiedUser An instance of MinifiedUser
	 */
	public function getModifiedBy()
	{
		return $this->getKeyValue('Modified_By'); 

	}

	/**
	 * The method to set the value to modifiedBy
	 * @param MinifiedUser $modifiedBy An instance of MinifiedUser
	 */
	public function setModifiedBy(MinifiedUser $modifiedBy)
	{
		$this->addKeyValue('Modified_By', $modifiedBy); 

	}

	/**
	 * The method to get the modifiedTime
	 * @return \DateTime An instance of \DateTime
	 */
	public function getModifiedTime()
	{
		return $this->getKeyValue('Modified_Time'); 

	}

	/**
	 * The method to set the value to modifiedTime
	 * @param \DateTime $modifiedTime An instance of \DateTime
	 */
	public function setModifiedTime(\DateTime $modifiedTime)
	{
		$this->addKeyValue('Modified_Time', $modifiedTime); 

	}

	/**
	 * The method to get the tag
	 * @return array A array representing the tag
	 */
	public function getTag()
	{
		return $this->getKeyValue('Tag'); 

	}

	/**
	 * The method to set the value to tag
	 * @param array $tag A array
	 */
	public function setTag(array $tag)
	{
		$this->addKeyValue('Tag', $tag); 

	}
} 
