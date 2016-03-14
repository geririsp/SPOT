<?php
/** @package Spot::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("UsersMap.php");

/**
 * UsersDAO provides object-oriented access to the users table.  This
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
class UsersDAO extends Phreezable
{
	/** @var int */
	public $UId;

	/** @var string */
	public $Username;

	/** @var string */
	public $Password;

	/** @var int */
	public $URight;

	/** @var string */
	public $UAdUser;

	/** @var blob */
	public $UAdPassword;

	/** @var string */
	public $UPhone;

	/** @var string */
	public $UFullName;

	/** @var string */
	public $UAdEmail;

	/** @var string */
	public $Token;


	/**
	 * Returns a dataset of Notifications objects with matching Userid
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetUseridNotificationss($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "userID", $criteria);
	}

	/**
	 * Returns a dataset of Orders objects with matching Userid
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetUseridOrderss($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "fk_userid_order", $criteria);
	}

	/**
	 * Returns a dataset of Orderslog objects with matching Userid
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetUseridOrderslogs($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "fk_userid", $criteria);
	}

	/**
	 * Returns a dataset of Provisioningnotifications objects with matching Userid
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetUseridProvisioningnotificationss($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "userExist", $criteria);
	}

	/**
	 * Returns a dataset of Tempdata objects with matching Creator
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetCreatorTempdatas($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK__users", $criteria);
	}


}
?>