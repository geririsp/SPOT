<?php
/** @package Drbl::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("TblordersMap.php");

/**
 * TblordersDAO provides object-oriented access to the tblOrders table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Drbl::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class TblordersDAO extends Phreezable
{
	/** @var int */
	public $Salesorder;

	/** @var string */
	public $Programmanager;

	/** @var string */
	public $Siteengineer;

	/** @var string */
	public $Sysprodactor;

	/** @var string */
	public $Release;

	/** @var string */
	public $Comment;

	/** @var date */
	public $Startdate;

	/** @var date */
	public $Enddate;

	/** @var date */
	public $Prodstartdate;

	/** @var date */
	public $Prodenddate;

	/** @var string */
	public $Customer;

	/** @var string */
	public $Timezone;

	/** @var string */
	public $Cctsnapshotpath;

	/** @var string */
	public $Sid;

	/** @var string */
	public $Customersigle;

	/** @var int */
	public $Exported;


	/**
	 * Returns a dataset of ItemApplicationserver objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemApplicationservers($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_applicationserver_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemCas objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemCass($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_cas_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemDbserver objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemDbservers($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_dbserver_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemMgt objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemMgts($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_mgt_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemNetwork objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemNetworks($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_network_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemNimserver objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemNimservers($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_nimserver_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemParts objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemPartss($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_parts_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemPeripheral objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemPeripherals($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_peripheral_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemSan objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemSans($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_san_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of ItemVio objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderItemVios($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_item_vio_tblOrders", $criteria);
	}

	/**
	 * Returns a dataset of Tblnetworks objects with matching Salesorder
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetSalesorderTblnetworkss($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "FK_tblNetworks_tblOrders", $criteria);
	}


}
?>