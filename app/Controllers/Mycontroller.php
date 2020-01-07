<?php namespace App\Controllers;

  use CodeIgniter\Controller;
  use App\Models\Mymodel;

class Mycontroller extends BaseController{
	public function index(){
		 //echo "index";

		// print_r($user);exit();
		 return view('welcome_message');

		
	}
	public function add(){
		
		return view('register');


	}
	public function insert(){
		$user = new Mymodel();
		$data = [
			'username' => $this->request->getVar('username'),
            'email'  => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password'),
		];
		
		// $data = $this->request->postVar();
		$user->insert($data);		
		return redirect()->to("/Mycontroller/show");
 
		// return redirect('Mycontroller/index');
		// print_r($data);exit();
	}
	public function show(){
		$user = new Mymodel();
		$data['abc'] = $user->getdata();
		// print_r($data);exit();
		return view('show',$data);
	}
	public function delete($id){

		 // echo "abc";
		$user = new Mymodel();
		 // print_r($user);exit();
		$user->where('id',$id)->delete();
		// echo $id;

	    return redirect()->route('show');

		// return view('show');


	}
	public function edit(){
		  // $data =array();
		$user['user'] = new Mymodel();
		
	     return view('update',$user);


	 // $user = $this->where('id');


		 // print_r($user['user']);exit();
}
/*
public function update($id){
	$user = new Mymodel();
	$userModel->whereIn('id',$id)->update();
}*/

} 
?>