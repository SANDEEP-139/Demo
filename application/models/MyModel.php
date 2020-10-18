<?php

class MyModel extends CI_Model
{
   public function GetLoginRecords($email,$password)
   {
   	$query = $this->db->get_where('users',array('email'=> $email,'password'=>$password));
   	return  $query->row();
   }
   
    public function get_Access_records()
    {
        $query = $this->db->get('register');
//        return  $query->row();
        return  $query->result();
    }    

    public function GetFirstSubCatData()
    {
        $this->db->select('scf.sub_cat_first_id,scf.sub_cat_name,scs.sub_cat_second_id,scs.sub_cat_second_name,b.brand_id,b.brand_name,c.category_id,c.category_name,sm.store_id,sm.store_name');
        $this->db->from('products p');
        $this->db->join('sub_cat_first scf', 'p.sub_cat_first_id = scf.sub_cat_first_id'); // this joins the user table to topics
        $this->db->join('sub_cat_second scs', 'p.sub_cat_second_id = scs.sub_cat_second_id'); // this joins the quote table to the topics table
        $this->db->join('brands b', 'p.brand_id = b.brand_id'); // this joins the quote table to the topics table
        $this->db->join('category c', 'p.category_id = c.category_id'); // this joins the quote table to the topics table
        $this->db->join('store_management sm', 'sm.store_id = sm.store_id');
        // $this->db->join('store_management s', 'p.store_id = s.store_id'); // this joins the quote table to the topics table
        $query = $this->db->get();
        // return $query->num_rows();
        // if($query->num_rows() > 0)
        // {
        //     return  $query->row();
        // }
        return $query->result();
    }
    public function GetRatingData($id)
    {
        $this->db->select('*');
        $this->db->from('rating r');
        $this->db->join('products p', 'r.product_id = p.product_id'); // this joins the user table to topics
        $this->db->where('r.rating_id' ,$id);
        // $this->db->join('sub_cat_second scs', 'p.sub_cat_second_id = scs.sub_cat_second_id'); // this joins the quote table to the topics table
        // $this->db->join('brands b', 'p.brand_id = b.brand_id'); // this joins the quote table to the topics table
        // $this->db->join('category c', 'p.category_id = c.category_id'); // this joins the quote table to the topics table
        // $this->db->join('store_management sm', 'sm.store_id = sm.store_id');
        // // $this->db->join('store_management s', 'p.store_id = s.store_id'); // this joins the quote table to the topics table
        $query = $this->db->get();
        // return $query->num_rows();
        if($query->num_rows() > 0)
        {
            return  $query->row();
        }
        // return $query->result();
    }
    public function GetFirstCatData()
    {
      $this->db->select('*');
      $this->db->from('category c');
      $this->db->join('sub_cat_first scf','c.category_id = scf.category_id');
      $this->db->order_by("c.category_id", "desc");
      $query = $this->db->get()->result_array();
      return $query;
    }

    public function GetSecondCatData()
{
    $this->db->select('c.category_id,c.category_name,scs.sub_cat_second_id,scs.sub_cat_second_name,scs.sub_cat_second_image,scf.sub_cat_first_id,scf.sub_cat_name');
            $this->db->from('sub_cat_second scs');
          $this->db->join('category c','scs.category_id = c.category_id');
            $this->db->join('sub_cat_first scf','scs.sub_cat_first_id = scf.sub_cat_first_id');
          $query = $this->db->get()->result_array();
           return $query;
}
    public function GetNotificationData()
    {
        $this->db->select('*');
        $this->db->from('products p');
        $this->db->join('notification n', 'n.product_id = n.product_id'); // this joins the user table to topics
        // $this->db->join('sub_cat_second scs', 'p.sub_cat_second_id = scs.sub_cat_second_id'); // this joins the quote table to the topics table
        // $this->db->join('brands b', 'p.brand_id = b.brand_id'); // this joins the quote table to the topics table
        // $this->db->join('category c', 'p.category_id = c.category_id'); // this joins the quote table to the topics table
        // $this->db->join('store_management sm', 'sm.store_id = sm.store_id');
        // $this->db->join('store_management s', 'p.store_id = s.store_id'); // this joins the quote table to the topics table
        $query = $this->db->get()->result_array();
        // return $query->num_rows();
        // if($query->num_rows() > 0)
        // {
        //     return  $query->row();
        // }
        return $query;
    }
    
    //getting data audition table............
    
    public function getAllBlogs($limit,$offset)
   {
   		$query = $this->db->limit($limit,$offset)
                          ->get('blogs');
		return $query->result();
   }    
   
   
   public function getAdminLoginRecord($userid)
   {
   	$query = $this->db->get_where('adminlogin',array('id'=> $userid));
        if($query->num_rows() > 0)
        {
            return  $query->row();
        }
    }
    
    public function UpdatePassword($newPass,$userid)
    {
        $data = array('pass'=> $newPass);
        return $this->db->where('id',$userid)
                        ->update('adminlogin',$data);
    }

    
    //....for pagination.....
    
    public function num_rows()
   {
   		$query = $this->db->get('blogs');
		return $query->num_rows();
   }  

   public function insertBlogData($data)
	{
	 return	$this->db->insert('blogs',$data);
	} 
    
    public function deleteBlog($id)
    {
        return $this->db->where(['id'=>$id])
                         ->delete('blogs');
    }

    ////Timer model//
    function create($formArray)
    {
        $this->db->insert('timer' ,$formArray);
         // insert into table  


    }

    function all(){

        // $this->db->from('timer');
        // $this->db->order_by("id", "desc");
        //$query = $this->db->get(); 
        // return $query->result_array();
        $result = $this->db->get('timer')->result_array();
        return $result;

        // return $users=$this->db->get('timer')->result_array();
         //select * from users
    }
     function getUser($userId){
        $this->db->where( 'id' ,$userId);
         return $user=$this->db->get('timer')->row_array();
         //select * table where id
     }
     function updateuser($userId,$formArray)
     {
        $this->db->where( 'id' ,$userId);
        $this->db->update('timer',$formArray);
     } 
     //update users where id
        function deleteuser($userId)
        {
            $this->db->where('id' ,$userId);
            $this->db->delete('timer');
            // delete from table where id
        }

    //end model//


}








?>