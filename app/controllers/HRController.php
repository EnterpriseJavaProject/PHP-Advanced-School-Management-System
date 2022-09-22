<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class HRController extends \BaseController {

	var $data = array();
	var $panelInit ;
	var $layout = 'dashboard';
	
	public function __construct(){
		$this->panelInit = new \DashboardInit();
		$this->data['panelInit'] = $this->panelInit;
		$this->data['breadcrumb']['Settings'] = \Illuminate\Support\Facades\URL::to('/dashboard/languages');
		$this->data['users'] = \Illuminate\Support\Facades\Auth::user();
		if($this->data['users']->role != "hr") exit;
	}
	
	public function index($method = "main")
	{
		$this->panelInit->viewop($this->layout,'languages',$this->data);
	}

	
	public function listAll()
	{
		
		return User::where('role','hr')->get();
	}

	public function delete($id){
		
		User::where('role','hr')->find($id)->delete();	
		return 1;
	}

	public function create(){
		if(User::where('username',trim(Input::get('username')))->count() > 0){
			return json_encode(array("jsTitle"=>$this->panelInit->language['addHR'],"jsStatus"=>"0","jsMessage"=>$this->panelInit->language['usernameAlreadyUsed'] ));
			exit;
		}
		if(User::where('email',Input::get('email'))->count() > 0){
			return json_encode(array("jsTitle"=>$this->panelInit->language['addHR'],"jsStatus"=>"0","jsMessage"=>$this->panelInit->language['emailAlreadyUsed'] ));
			exit;
		}
		$User = new User();
		$User->username = Input::get('username');
		$User->email = Input::get('email');
		$User->fullName = Input::get('fullName');
		$User->password = Hash::make(Input::get('password'));
		$User->role = "hr";
		$User->save();
		return json_encode(array("jsTitle"=>$this->panelInit->language['addHR'],"jsMessage"=>$this->panelInit->language['HRUpdated'],"users"=>User::where('role','hr')->get()->toArray() ));
	}

	function fetch($id){
		return User::where('role','hr')->where('id',$id)->first();
	}

	function edit($id){
		if(User::where('username',trim(Input::get('username')))->where('id','<>',$id)->count() > 0){
			echo $this->panelInit->language['usernameAlreadyUsed'];
			exit;
		}
		if(User::where('email',Input::get('email'))->where('id','<>',$id)->count() > 0){
			echo $this->panelInit->language['emailAlreadyUsed'];
			exit;
		}
		$User = User::find($id);
		$User->username = Input::get('username');
		$User->email = Input::get('email');
		$User->fullName = Input::get('fullName');
		if(Input::get('password') != ""){
			$User->password = Hash::make(Input::get('password'));
		}
		$User->save();
		return json_encode(array("jsTitle"=>$this->panelInit->language['editHR'],"jsMessage"=>$this->panelInit->language['HRUpdated'],"users"=>User::where('role','hr')->get()->toArray() ));
	}
}