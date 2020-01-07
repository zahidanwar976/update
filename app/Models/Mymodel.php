<?php namespace App\Models;

use CodeIgniter\Model;

class Mymodel extends Model
{
	    protected $table      = 'task2';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['username','email','password'];

        protected $useTimestamps = false;
        /*protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';*/

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = true;

        public function getdata(){
       
       return $this->findall();
                     // ->where(['id' => $id])
         // $this->db->where('status','pending');
   /* $query = $this->db->get($table)->result();
    return $query;*/
	 }
	// public function remove($id){
	
		// $var = new Mymodel();
		// $var->where('id', 12)->delete();
		// $var->delete($id);

	// 
    /* public function update($id){
        }*/
}

?>
        	     
