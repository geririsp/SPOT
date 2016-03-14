<?php
/** @package OdsDb::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("Customer_Ip_InventoryMap.php");

/**
 * Customer_Ip_InventoryDAO provides object-oriented access to the custip table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package OdsDb::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class Customer_Ip_InventoryDAO extends Phreezable
{
	/** @var int */
	public $Custipid;

	/** @var string */
	public $Subnet;

	/** @var string */
	public $Netmask;

	/** @var string */
	public $Account;

	/** @var string */
	public $Location;

	/** @var string */
	public $SystemName;

	/** @var string */
	public $Entt;

	/** @var string */
	public $RemoteAccess;

	/** @var longtext */
	public $Comments;

	/** @var string */
	public $Valdate;

	/** @var string */
	public $ValidatedBy;

	/** @var timestamp */
	public $Lsmod;

	/** @var string */
	public $Status;



}
?>