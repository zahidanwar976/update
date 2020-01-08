<?php namespace App\Controllers;

  use CodeIgniter\Controller;
  use App\Models\Mymodel;


class Mycontroller extends BaseController{
/*
	public function __construct(){
		parent:: __construct();
        // protected $table = 'task2';
	}*/
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
		return redirect()->to("show");
 
		// return redirect('Mycontroller/index');
		// print_r($data);exit();
	}
	public function show(){
		$user = new Mymodel();
		$data['abc'] = $user->findall();
	  // print_r($data);exit();
		return view('show',$data);
	}
	public function delete($id){

		 // echo "abc";
		$user = new Mymodel();
		 // print_r($user);exit();
		$user->where('id',$id)->delete();
		// echo $id;

	    return redirect()->to("show");

		// return view('show');


	}
public function edit($id){
// $data =array();
$user = new Mymodel();
$data['user'] = $user->find($id);
// print_r($data);exit();
return view('update',$data);

}

public function update(){

// $user = new Mymodel();
// $user_id =   $this->request->getVar('id'),


$user = new Mymodel();
$user_id = $this->request->getVar('id');
$data = [
'username' => $this->request->getVar('username'),
'email' => $this->request->getVar('email'),
'password' => $this->request->getVar('password'),
];
$user->update($user_id, $data);
return redirect()->to('show');
}






}
?>