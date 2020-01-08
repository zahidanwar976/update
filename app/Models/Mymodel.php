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

        
     public function getupdate($id){
       // $query = /$this->where('id',$id);
        // print_r($query);exit();
          // return  $this->get('task2'); 

          $query = $this->get_where('task2',array('id'=>$id));
          return $query; 
     }

}

?>
        	     
