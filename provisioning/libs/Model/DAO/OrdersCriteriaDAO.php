<?php
/** @package    Spot::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * OrdersCriteria allows custom querying for the Orders object.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the ModelCriteria class which is extended from this class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @inheritdocs
 * @package Spot::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class OrdersCriteriaDAO extends Criteria
{

	public $Salesorder_Equals;
	public $Salesorder_NotEquals;
	public $Salesorder_IsLike;
	public $Salesorder_IsNotLike;
	public $Salesorder_BeginsWith;
	public $Salesorder_EndsWith;
	public $Salesorder_GreaterThan;
	public $Salesorder_GreaterThanOrEqual;
	public $Salesorder_LessThan;
	public $Salesorder_LessThanOrEqual;
	public $Salesorder_In;
	public $Salesorder_IsNotEmpty;
	public $Salesorder_IsEmpty;
	public $Salesorder_BitwiseOr;
	public $Salesorder_BitwiseAnd;
	public $Crmuid_Equals;
	public $Crmuid_NotEquals;
	public $Crmuid_IsLike;
	public $Crmuid_IsNotLike;
	public $Crmuid_BeginsWith;
	public $Crmuid_EndsWith;
	public $Crmuid_GreaterThan;
	public $Crmuid_GreaterThanOrEqual;
	public $Crmuid_LessThan;
	public $Crmuid_LessThanOrEqual;
	public $Crmuid_In;
	public $Crmuid_IsNotEmpty;
	public $Crmuid_IsEmpty;
	public $Crmuid_BitwiseOr;
	public $Crmuid_BitwiseAnd;
	public $Pgm_Equals;
	public $Pgm_NotEquals;
	public $Pgm_IsLike;
	public $Pgm_IsNotLike;
	public $Pgm_BeginsWith;
	public $Pgm_EndsWith;
	public $Pgm_GreaterThan;
	public $Pgm_GreaterThanOrEqual;
	public $Pgm_LessThan;
	public $Pgm_LessThanOrEqual;
	public $Pgm_In;
	public $Pgm_IsNotEmpty;
	public $Pgm_IsEmpty;
	public $Pgm_BitwiseOr;
	public $Pgm_BitwiseAnd;
	public $Ordertitle_Equals;
	public $Ordertitle_NotEquals;
	public $Ordertitle_IsLike;
	public $Ordertitle_IsNotLike;
	public $Ordertitle_BeginsWith;
	public $Ordertitle_EndsWith;
	public $Ordertitle_GreaterThan;
	public $Ordertitle_GreaterThanOrEqual;
	public $Ordertitle_LessThan;
	public $Ordertitle_LessThanOrEqual;
	public $Ordertitle_In;
	public $Ordertitle_IsNotEmpty;
	public $Ordertitle_IsEmpty;
	public $Ordertitle_BitwiseOr;
	public $Ordertitle_BitwiseAnd;
	public $Heacronym_Equals;
	public $Heacronym_NotEquals;
	public $Heacronym_IsLike;
	public $Heacronym_IsNotLike;
	public $Heacronym_BeginsWith;
	public $Heacronym_EndsWith;
	public $Heacronym_GreaterThan;
	public $Heacronym_GreaterThanOrEqual;
	public $Heacronym_LessThan;
	public $Heacronym_LessThanOrEqual;
	public $Heacronym_In;
	public $Heacronym_IsNotEmpty;
	public $Heacronym_IsEmpty;
	public $Heacronym_BitwiseOr;
	public $Heacronym_BitwiseAnd;
	public $Systemtype_Equals;
	public $Systemtype_NotEquals;
	public $Systemtype_IsLike;
	public $Systemtype_IsNotLike;
	public $Systemtype_BeginsWith;
	public $Systemtype_EndsWith;
	public $Systemtype_GreaterThan;
	public $Systemtype_GreaterThanOrEqual;
	public $Systemtype_LessThan;
	public $Systemtype_LessThanOrEqual;
	public $Systemtype_In;
	public $Systemtype_IsNotEmpty;
	public $Systemtype_IsEmpty;
	public $Systemtype_BitwiseOr;
	public $Systemtype_BitwiseAnd;
	public $Snapavail_Equals;
	public $Snapavail_NotEquals;
	public $Snapavail_IsLike;
	public $Snapavail_IsNotLike;
	public $Snapavail_BeginsWith;
	public $Snapavail_EndsWith;
	public $Snapavail_GreaterThan;
	public $Snapavail_GreaterThanOrEqual;
	public $Snapavail_LessThan;
	public $Snapavail_LessThanOrEqual;
	public $Snapavail_In;
	public $Snapavail_IsNotEmpty;
	public $Snapavail_IsEmpty;
	public $Snapavail_BitwiseOr;
	public $Snapavail_BitwiseAnd;
	public $Pstartdate_Equals;
	public $Pstartdate_NotEquals;
	public $Pstartdate_IsLike;
	public $Pstartdate_IsNotLike;
	public $Pstartdate_BeginsWith;
	public $Pstartdate_EndsWith;
	public $Pstartdate_GreaterThan;
	public $Pstartdate_GreaterThanOrEqual;
	public $Pstartdate_LessThan;
	public $Pstartdate_LessThanOrEqual;
	public $Pstartdate_In;
	public $Pstartdate_IsNotEmpty;
	public $Pstartdate_IsEmpty;
	public $Pstartdate_BitwiseOr;
	public $Pstartdate_BitwiseAnd;
	public $Penddate_Equals;
	public $Penddate_NotEquals;
	public $Penddate_IsLike;
	public $Penddate_IsNotLike;
	public $Penddate_BeginsWith;
	public $Penddate_EndsWith;
	public $Penddate_GreaterThan;
	public $Penddate_GreaterThanOrEqual;
	public $Penddate_LessThan;
	public $Penddate_LessThanOrEqual;
	public $Penddate_In;
	public $Penddate_IsNotEmpty;
	public $Penddate_IsEmpty;
	public $Penddate_BitwiseOr;
	public $Penddate_BitwiseAnd;
	public $Rstartdate_Equals;
	public $Rstartdate_NotEquals;
	public $Rstartdate_IsLike;
	public $Rstartdate_IsNotLike;
	public $Rstartdate_BeginsWith;
	public $Rstartdate_EndsWith;
	public $Rstartdate_GreaterThan;
	public $Rstartdate_GreaterThanOrEqual;
	public $Rstartdate_LessThan;
	public $Rstartdate_LessThanOrEqual;
	public $Rstartdate_In;
	public $Rstartdate_IsNotEmpty;
	public $Rstartdate_IsEmpty;
	public $Rstartdate_BitwiseOr;
	public $Rstartdate_BitwiseAnd;
	public $Renddate_Equals;
	public $Renddate_NotEquals;
	public $Renddate_IsLike;
	public $Renddate_IsNotLike;
	public $Renddate_BeginsWith;
	public $Renddate_EndsWith;
	public $Renddate_GreaterThan;
	public $Renddate_GreaterThanOrEqual;
	public $Renddate_LessThan;
	public $Renddate_LessThanOrEqual;
	public $Renddate_In;
	public $Renddate_IsNotEmpty;
	public $Renddate_IsEmpty;
	public $Renddate_BitwiseOr;
	public $Renddate_BitwiseAnd;
	public $Shippmentdate_Equals;
	public $Shippmentdate_NotEquals;
	public $Shippmentdate_IsLike;
	public $Shippmentdate_IsNotLike;
	public $Shippmentdate_BeginsWith;
	public $Shippmentdate_EndsWith;
	public $Shippmentdate_GreaterThan;
	public $Shippmentdate_GreaterThanOrEqual;
	public $Shippmentdate_LessThan;
	public $Shippmentdate_LessThanOrEqual;
	public $Shippmentdate_In;
	public $Shippmentdate_IsNotEmpty;
	public $Shippmentdate_IsEmpty;
	public $Shippmentdate_BitwiseOr;
	public $Shippmentdate_BitwiseAnd;
	public $Status_Equals;
	public $Status_NotEquals;
	public $Status_IsLike;
	public $Status_IsNotLike;
	public $Status_BeginsWith;
	public $Status_EndsWith;
	public $Status_GreaterThan;
	public $Status_GreaterThanOrEqual;
	public $Status_LessThan;
	public $Status_LessThanOrEqual;
	public $Status_In;
	public $Status_IsNotEmpty;
	public $Status_IsEmpty;
	public $Status_BitwiseOr;
	public $Status_BitwiseAnd;
	public $Polaroidexport_Equals;
	public $Polaroidexport_NotEquals;
	public $Polaroidexport_IsLike;
	public $Polaroidexport_IsNotLike;
	public $Polaroidexport_BeginsWith;
	public $Polaroidexport_EndsWith;
	public $Polaroidexport_GreaterThan;
	public $Polaroidexport_GreaterThanOrEqual;
	public $Polaroidexport_LessThan;
	public $Polaroidexport_LessThanOrEqual;
	public $Polaroidexport_In;
	public $Polaroidexport_IsNotEmpty;
	public $Polaroidexport_IsEmpty;
	public $Polaroidexport_BitwiseOr;
	public $Polaroidexport_BitwiseAnd;
	public $Userid_Equals;
	public $Userid_NotEquals;
	public $Userid_IsLike;
	public $Userid_IsNotLike;
	public $Userid_BeginsWith;
	public $Userid_EndsWith;
	public $Userid_GreaterThan;
	public $Userid_GreaterThanOrEqual;
	public $Userid_LessThan;
	public $Userid_LessThanOrEqual;
	public $Userid_In;
	public $Userid_IsNotEmpty;
	public $Userid_IsEmpty;
	public $Userid_BitwiseOr;
	public $Userid_BitwiseAnd;
	public $Commiteddate_Equals;
	public $Commiteddate_NotEquals;
	public $Commiteddate_IsLike;
	public $Commiteddate_IsNotLike;
	public $Commiteddate_BeginsWith;
	public $Commiteddate_EndsWith;
	public $Commiteddate_GreaterThan;
	public $Commiteddate_GreaterThanOrEqual;
	public $Commiteddate_LessThan;
	public $Commiteddate_LessThanOrEqual;
	public $Commiteddate_In;
	public $Commiteddate_IsNotEmpty;
	public $Commiteddate_IsEmpty;
	public $Commiteddate_BitwiseOr;
	public $Commiteddate_BitwiseAnd;
	public $Moveorder_Equals;
	public $Moveorder_NotEquals;
	public $Moveorder_IsLike;
	public $Moveorder_IsNotLike;
	public $Moveorder_BeginsWith;
	public $Moveorder_EndsWith;
	public $Moveorder_GreaterThan;
	public $Moveorder_GreaterThanOrEqual;
	public $Moveorder_LessThan;
	public $Moveorder_LessThanOrEqual;
	public $Moveorder_In;
	public $Moveorder_IsNotEmpty;
	public $Moveorder_IsEmpty;
	public $Moveorder_BitwiseOr;
	public $Moveorder_BitwiseAnd;
	public $Oracleorder_Equals;
	public $Oracleorder_NotEquals;
	public $Oracleorder_IsLike;
	public $Oracleorder_IsNotLike;
	public $Oracleorder_BeginsWith;
	public $Oracleorder_EndsWith;
	public $Oracleorder_GreaterThan;
	public $Oracleorder_GreaterThanOrEqual;
	public $Oracleorder_LessThan;
	public $Oracleorder_LessThanOrEqual;
	public $Oracleorder_In;
	public $Oracleorder_IsNotEmpty;
	public $Oracleorder_IsEmpty;
	public $Oracleorder_BitwiseOr;
	public $Oracleorder_BitwiseAnd;
	public $Comments_Equals;
	public $Comments_NotEquals;
	public $Comments_IsLike;
	public $Comments_IsNotLike;
	public $Comments_BeginsWith;
	public $Comments_EndsWith;
	public $Comments_GreaterThan;
	public $Comments_GreaterThanOrEqual;
	public $Comments_LessThan;
	public $Comments_LessThanOrEqual;
	public $Comments_In;
	public $Comments_IsNotEmpty;
	public $Comments_IsEmpty;
	public $Comments_BitwiseOr;
	public $Comments_BitwiseAnd;

}

?>