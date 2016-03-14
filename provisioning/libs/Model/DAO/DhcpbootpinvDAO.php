<?php
/** @package Spot::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("DhcpbootpinvMap.php");

/**
 * DhcpbootpinvDAO provides object-oriented access to the dhcpBootpInv table.  This
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
class DhcpbootpinvDAO extends Phreezable
{
	/** @var string */
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



}
?>