<?php
/** @package Spot::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("RemotecommandsMap.php");

/**
 * RemotecommandsDAO provides object-oriented access to the remoteCommands table.  This
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
class RemotecommandsDAO extends Phreezable
{
	/** @var int */
	public $Remotecommandid;

	/** @var int */
	public $Salesorder;

	/** @var int */
	public $Rack;

	/** @var string */
	public $Shelf;

	/** @var string */
	public $Clientaddress;

	/** @var string */
	public $Arguments;

	/** @var int */
	public $Exesequence;

	/** @var int */
	public $Scriptid;

	/** @var int */
	public $Returncode;

	/** @var string */
	public $Returnstdout;

	/** @var string */
	public $Returnstderr;

	/** @var int */
	public $Executionflag;

	/** @var timestamp */
	public $Logtime;

	/** @var int */
	public $Exectime;


	/**
	 * Returns the foreign object based on the value of Executionflag
	 * @return Executionflagcodes
	 */
	public function GetExecutionflagExecutionflagcodes()
	{
		return $this->_phreezer->GetManyToOne($this, "fk_execFlag");
	}

	/**
	 * Returns the foreign object based on the value of Scriptid
	 * @return Provisioningscripts
	 */
	public function GetScriptidProvisioningscripts()
	{
		return $this->_phreezer->GetManyToOne($this, "scriptID");
	}


}
?>