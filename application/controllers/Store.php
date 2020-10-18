<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store extends CI_Controller
{ 
	public function __construct()
	{
	parent::__construct();
	// $this->output->enable_profiler(TRUE);
	
	$this->load->model('MyModel');
	$this->load->model('Common_model');
	
	}

	public function index()
	{
	    if($this->session->userdata('userInfo') == true)
        {
            redirect("Store/Dashboard");
        }
		$this->load->view('StoreLogin');
	}
	
	public function Login()
	{
	    $this->form_validation->set_rules('store_password','store_password','required');
		$this->form_validation->set_rules('store_email','store_email','required');

		if($this->form_validation->run() == true)
		{
            $email       = $this->input->post('store_email');
            $password    = ($this->input->post('store_password'));

        $record = $this->Common_model->_select('store_management','*', ['store_email' => $email , 'store_password' => $password ]);
             //var_dump($record); die;
		if($record)
		{
		$this->session->set_userdata('userInfo',$record);
		$userInfo = $this->session->userdata('userInfo');
	//var_dump($userInfo[0]['store_id']);die;
        $this->session->set_flashdata('success','Successfully!!!');
        return redirect("Store/Dashboard", "refresh");
		}
		else
		{
            $this->session->set_flashdata('success','not Registered!!');
			return redirect("Store/login", "refresh");
		}
		}
		$this->load->view('StoreLogin');
	}
	
	public function forgotPassword()
	{
	    
	    $this->form_validation->set_rules('store_email','store_email','required');
	    if($this->form_validation->run() == true)
		{        
		    $this->load->library('email');
		    $email = $this->input->post('store_email');
		    
		    $record = $this->Common_model->_select('AdminLogin','*', ['store_email' => $email]);
		    
		    if($email == $record[0]['email']){
		    
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'maildeveloper17@gmail.com';
            $config['smtp_pass']    = 'mail123@developer';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'text'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not      
            $this->email->initialize($config);
            $this->email->from('marche@gmail.com', 'Marché');
            $this->email->to($email); 
            $this->email->subject('Email Test');
            $message = "Your password is ".$record[0]['password']. " .Now you can login!!!" ;
            $this->email->message($message);  

            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'Mail has been sent succesfully.');
                redirect("Store/forgotPassword", "refresh");
            } else {
                show_error($this->email->print_debugger());
                $this->session->set_flashdata('success', 'Mail not sent.');
                redirect("Store/forgotPassword", "refresh");
            }
		    }else{
		        $this->session->set_flashdata('success', 'Email is not registered with us!!!');
                redirect("Store/forgotPassword", "refresh");
		    }
		}
	    $this->load->view('forgotPassword');
	}
	
	public function Dashboard()
	{
        if($this->session->userdata('userInfo') == false)
        {
            redirect("Store/login");
        }
		$this->load->view('dashboard');
	}


	// public function UserManagement()
	// {
	
	// 	$records = $this->Common_model->_select('users', '*');
	// 	// var_dump($dbdata);
	// 	$this->load->view('ListView/UserManagement',['records'=>$records]);
	
	// }

	public function StoreManagement()
	{
		$records = $this->Common_model->_select('store_management', '*');

		$this->load->view('ListView/store-management',['records'=>$records]);
	}
	public function productManagement()
	{
				
		$records = $this->Common_model->_select('products', '*');

		$this->load->view('ListView/product-management',['records'=>$records]);
	}
	// public function Addproduct()
	// {
	// 	$this->load->view('addproduct');
	// }


	// public function invantoryManagement()
	// {
	// 	$records = $this->Common_model->_select('invantory', '*');

	// 	$this->load->view('ListView/invantory-Management',['records'=>$records]);
	// }
	// public function subadminManagement()
	// {
	// 	$records = $this->Common_model->_select('sub_admin', '*');

	// 	$this->load->view('ListView/Sub-Admin-Management',['records'=>$records]);
	// }
	public function categorymanagement()
	{
		$records = $this->Common_model->_select('category','*');

		$this->load->view('ListView/Category-Management',['records'=>$records]);
	}
	// public function firstcategorymanagement()
	// {
	// 	$records = $this->Common_model->_select('sub_cat_first','*');
	// 	//echo "<pre>";
	// 	//var_dump($records); die;

	// 	$this->load->view('ListView/FirstCategory-Management',['records'=>$records]);
	// }
	// public function secondcategorymanagement()
	// {
	// 	$records = $this->Common_model->_select('sub_cat_second','*');

	// 	$this->load->view('ListView/SecondCategory-Management',['records'=>$records]);
	// }
	// public function Addcategory()
	// {
	// 	$this->load->view('Addcategory');
	// }

	public function ordersManagement()
	{
		$records = $this->Common_model->_select('order_management','*');

		$this->load->view('ListView/order-management',['records'=>$records]);
	}
	public function paymentManagement()
	{
		$records = $this->Common_model->_select('payment','*');

		$this->load->view('ListView/payment-management',['records'=>$records]);
	}
	public function refundManagement()
	{
		$records = $this->Common_model->_select('refund','*');

		$this->load->view('ListView/Refund-Management',['records'=>$records]);
	}
	// public function Addrefund()
	// {
	// 	$this->load->view('refundrequest');
	// }
	// public function campaignManagement()
	// {
	// 	$records = $this->Common_model->_select('campaign','*');
				
	// 	$this->load->view('ListView/Campaign-Management',['records'=>$records]);
	// }
	// public function Addcampaign()
	// {
	// 	$this->load->view('addcampaign');
	// }

	// public function offerManagement()
	// {
	// 	$records = $this->Common_model->_select('offer','*');

	// 	$this->load->view('ListView/Offers-Management',['records'=>$records]);
	// }
	// public function Addoffer()
	// {
	// 	$this->load->view('add-Offers-management');
	// }

	// public function newsManagement()
	// {
	// 	$records = $this->Common_model->_select('news','*');

	// 	$this->load->view('ListView/News-Management',['records'=>$records]);
	// }
	// public function Addnews()
	// {
	// 	$this->load->view('addnews');
	// }

	// public function ratingManagement()
	// {
	// 	$records = $this->Common_model->_select('rating','*');

	// 	$this->load->view('ListView/Rating-Management',['records'=>$records]);
	// }
	// // public function Addrating()
	// // {
	// // 	$this->load->view('addratings');
	// }

	// public function feedbackManagement()
	// {
	// 	$records = $this->Common_model->_select('feedback','*');

	// 	$this->load->view('ListView/Feedback-Management',['records'=>$records]);
	// }
	// public function dealsManagement()
	// {
	// 	$records = $this->Common_model->_select('onlinedeals','*');

	// 	$this->load->view('ListView/Deals-Management',['records'=>$records]);
	// }
	// public function storedeals()
	// {
	// 	$records = $this->Common_model->_select('storedeals','*');

	// 	$this->load->view('ListView/StoreDeals',['records'=>$records]);
	// }
	// public function notification()
	// {
	// 	//$records = $this->Common_model->_select('notification','*');
	// 	$records=$this->MyModel->GetNotificationData();

	// 	//echo '<pre>';
	// 	//var_dump($records); die;

	// 	$this->load->view('ListView/Notification_Management',['records'=>$records]);
	// }
	public function logout()
	{
        unset($_SESSION);
        session_destroy();
        redirect("Admin/index");
	}

}
