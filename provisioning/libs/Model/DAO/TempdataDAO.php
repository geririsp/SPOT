<?php
/** @package Spot::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("TempdataMap.php");

/**
 * TempdataDAO provides object-oriented access to the tempData table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Spot::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class TempdataDAO extends Phreezable
{
	/** @var int */
	public $Salesorder;

	/** @var mediumblob */
	public $Data;

	/** @var string */
	public $Status;

	/** @var timestamp */
	public $Timestamps;

	/** @var string */
	public $Message;

	/** @var int */
	public $Creator;

	/** @var int */
	public $Dwprocessed;


	/**
	 * Returns the foreign object based on the value of Creator
	 * @return Users
	 */
	public function GetCreatorUsers()
	{
		return $this->_phreezer->GetManyToOne($this, "FK__users");
	}


}
?>