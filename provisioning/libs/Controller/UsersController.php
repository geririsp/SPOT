<?php
/** @package    SPOT::Controller */

/** import supporting libraries */
require_once("AppBaseController.php");
require_once("Model/Users.php");

/**
 * UsersController is the controller class for the Users object.  The
 * controller is responsible for processing input from the user, reading/updating
 * the model as necessary and displaying the appropriate view.
 *
 * @package SPOT::Controller
 * @author ClassBuilder
 * @version 1.0
 */
class UsersController extends AppBaseController
{

	/**
	 * Override here for any controller-specific functionality
	 *
	 * @inheritdocs
	 */
	protected function Init()
	{
		parent::Init();

		// TODO: add controller-wide bootstrap code
		
		// TODO: if authentiation is required for this entire controller, for example:
		// $this->RequirePermission(ExampleUser::$PERMISSION_USER,'SecureExample.LoginForm');
	}

	/**
	 * Displays a list view of Users objects
	 */
	public function ListView()
	{
		$this->Render();
	}

	/**
	 * API Method queries for Users records and render as JSON
	 */
	public function Query()
	{
		try
		{
			$criteria = new UsersCriteria();
			
			// TODO: this will limit results based on all properties included in the filter list 
			$filter = RequestUtil::Get('filter');
			if ($filter) $criteria->AddFilter(
				new CriteriaFilter('UId,Username,Password,URight,UAdUser,UAdPassword,UPhone,UFullName,UAdEmail,Token'
				, '%'.$filter.'%')
			);

			// TODO: this is generic query filtering based only on criteria properties
			foreach (array_keys($_REQUEST) as $prop)
			{
				$prop_normal = ucfirst($prop);
				$prop_equals = $prop_normal.'_Equals';

				if (property_exists($criteria, $prop_normal))
				{
					$criteria->$prop_normal = RequestUtil::Get($prop);
				}
				elseif (property_exists($criteria, $prop_equals))
				{
					// this is a convenience so that the _Equals suffix is not needed
					$criteria->$prop_equals = RequestUtil::Get($prop);
				}
			}

			$output = new stdClass();

			// if a sort order was specified then specify in the criteria
 			$output->orderBy = RequestUtil::Get('orderBy');
 			$output->orderDesc = RequestUtil::Get('orderDesc') != '';
 			if ($output->orderBy) $criteria->SetOrder($output->orderBy, $output->orderDesc);

			$page = RequestUtil::Get('page');

			if ($page != '')
			{
				// if page is specified, use this instead (at the expense of one extra count query)
				$pagesize = $this->GetDefaultPageSize();

				$userses = $this->Phreezer->Query('Users',$criteria)->GetDataPage($page, $pagesize);
				$output->rows = $userses->ToObjectArray(true,$this->SimpleObjectParams());
				$output->totalResults = $userses->TotalResults;
				$output->totalPages = $userses->TotalPages;
				$output->pageSize = $userses->PageSize;
				$output->currentPage = $userses->CurrentPage;
			}
			else
			{
				// return all results
				$userses = $this->Phreezer->Query('Users',$criteria);
				$output->rows = $userses->ToObjectArray(true, $this->SimpleObjectParams());
				$output->totalResults = count($output->rows);
				$output->totalPages = 1;
				$output->pageSize = $output->totalResults;
				$output->currentPage = 1;
			}


			$this->RenderJSON($output, $this->JSONPCallback());
		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method retrieves a single Users record and render as JSON
	 */
	public function Read()
	{
		try
		{
			$pk = $this->GetRouter()->GetUrlParam('uId');
			$users = $this->Phreezer->Get('Users',$pk);
			$this->RenderJSON($users, $this->JSONPCallback(), true, $this->SimpleObjectParams());
		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method inserts a new Users record and render response as JSON
	 */
	public function Create()
	{
		try
		{
						
			$json = json_decode(RequestUtil::GetBody());

			if (!$json)
			{
				throw new Exception('The request body does not contain valid JSON');
			}

			$users = new Users($this->Phreezer);

			// TODO: any fields that should not be inserted by the user should be commented out

			// this is an auto-increment.  uncomment if updating is allowed
			// $users->UId = $this->SafeGetVal($json, 'uId');

			$users->Username = $this->SafeGetVal($json, 'username');
			$users->Password = $this->SafeGetVal($json, 'password');
			$users->URight = $this->SafeGetVal($json, 'uRight');
			$users->UAdUser = $this->SafeGetVal($json, 'uAdUser');
			$users->UAdPassword = $this->SafeGetVal($json, 'uAdPassword');
			$users->UPhone = $this->SafeGetVal($json, 'uPhone');
			$users->UFullName = $this->SafeGetVal($json, 'uFullName');
			$users->UAdEmail = $this->SafeGetVal($json, 'uAdEmail');
			$users->Token = $this->SafeGetVal($json, 'token');

			$users->Validate();
			$errors = $users->GetValidationErrors();

			if (count($errors) > 0)
			{
				$this->RenderErrorJSON('Please check the form for errors',$errors);
			}
			else
			{
				$users->Save();
				$this->RenderJSON($users, $this->JSONPCallback(), true, $this->SimpleObjectParams());
			}

		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method updates an existing Users record and render response as JSON
	 */
	public function Update()
	{
		try
		{
						
			$json = json_decode(RequestUtil::GetBody());

			if (!$json)
			{
				throw new Exception('The request body does not contain valid JSON');
			}

			$pk = $this->GetRouter()->GetUrlParam('uId');
			$users = $this->Phreezer->Get('Users',$pk);

			// TODO: any fields that should not be updated by the user should be commented out

			// this is a primary key.  uncomment if updating is allowed
			// $users->UId = $this->SafeGetVal($json, 'uId', $users->UId);

			$users->Username = $this->SafeGetVal($json, 'username', $users->Username);
			$users->Password = $this->SafeGetVal($json, 'password', $users->Password);
			$users->URight = $this->SafeGetVal($json, 'uRight', $users->URight);
			$users->UAdUser = $this->SafeGetVal($json, 'uAdUser', $users->UAdUser);
			$users->UAdPassword = $this->SafeGetVal($json, 'uAdPassword', $users->UAdPassword);
			$users->UPhone = $this->SafeGetVal($json, 'uPhone', $users->UPhone);
			$users->UFullName = $this->SafeGetVal($json, 'uFullName', $users->UFullName);
			$users->UAdEmail = $this->SafeGetVal($json, 'uAdEmail', $users->UAdEmail);
			$users->Token = $this->SafeGetVal($json, 'token', $users->Token);

			$users->Validate();
			$errors = $users->GetValidationErrors();

			if (count($errors) > 0)
			{
				$this->RenderErrorJSON('Please check the form for errors',$errors);
			}
			else
			{
				$users->Save();
				$this->RenderJSON($users, $this->JSONPCallback(), true, $this->SimpleObjectParams());
			}


		}
		catch (Exception $ex)
		{


			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method deletes an existing Users record and render response as JSON
	 */
	public function Delete()
	{
		try
		{
						
			// TODO: if a soft delete is prefered, change this to update the deleted flag instead of hard-deleting

			$pk = $this->GetRouter()->GetUrlParam('uId');
			$users = $this->Phreezer->Get('Users',$pk);

			$users->Delete();

			$output = new stdClass();

			$this->RenderJSON($output, $this->JSONPCallback());

		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}
}

?>
