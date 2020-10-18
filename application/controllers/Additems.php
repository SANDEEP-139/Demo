<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/Admin.php");
class Additems extends Admin
{

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);

		$this->load->model('MyModel');
		$this->load->model('Common_model');
	}

	// public function GetSubFirstCat()
	// {
	
    //     $records = $this->MyModel->GetFirstSubCatData();
    //     var_dump($records);die;
	// 	// var_dump($dbdata);
	// 	$this->load->view('AddView/addproducts',['records'=>$records]);
	
	// }
	public function Addstore()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('store_name', 'StoreName', 'required');
		if ($this->form_validation->run() == true) {
			$data = array(
				'store_email' => $_POST['email'],
				'store_password' => $_POST['password'],
				'store_name' => $_POST['store_name'],
				'store_created_at' => date("Y-m-d H:i:s")
			);
			
			
			

			//$user = $this->MyModel->insertBlogData($data);
			$InsertRecord = $this->Common_model->_insert('store_management', $data);

			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				redirect('Admin/StoreManagement');
			} 
			

			 else {
			 	$this->session->set_flashdata("error", "Insert failed!!!");
				 
			 }
			 redirect('Additems/Addstore');
			
		}
		$this->load->view('AddView/AddStore');
	}


	public function Addproduct()
	{
//$pagedata['record3'] = $this->db->get('sub_cat_first')->result_array();

		$this->form_validation->set_rules('sub_cat_name', 'sub_cat_name', 'required');
		$this->form_validation->set_rules('subcategorysecond', 'subcategorysecond', 'required');
		//$this->form_validation->set_rules('brandid', 'brandid', 'required');
		$this->form_validation->set_rules('category_name', 'category_name', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
		//$this->form_validation->set_rules('price', 'price', 'required');
		$this->form_validation->set_rules('omr', 'OMR', 'required');
		$this->form_validation->set_rules('dirham', 'DEHAM', 'required');
		$this->form_validation->set_rules('sar', 'SAR', 'required');
		$this->form_validation->set_rules('size', 'size', 'required');
		$this->form_validation->set_rules('newarrivals', 'newarrivals', 'required');
		$this->form_validation->set_rules('department', 'department', 'required');
		$this->form_validation->set_rules('color', 'color', 'required');
		$this->form_validation->set_rules('fit', 'fit', 'required');
		$this->form_validation->set_rules('store_id', 'Store Name', 'required');
		//$this->form_validation->set_rules('product_currency', 'Currency Name', 'required');
		$this->form_validation->set_rules('description', 'Description Name', 'required');
		// $this->form_validation->set_rules('image', 'image', 'required');
		// echo "<script>alert('hi1')</script>";
		if ($this->form_validation->run() == true) {
		// echo "<script>alert('hi2')</script>";
			$data = array(
				'sub_cat_first_id' => $_POST['sub_cat_name'],
				'sub_cat_second_id' => $_POST['subcategorysecond'],
				//'brand_id' => $_POST['brandid'],
				'category_id' => $_POST['category_name'],
				'product_name' => $_POST['name'],
				//'product_price' => $_POST['price'],
				'product_price_omr' => $_POST['omr'],
				'product_price_dirham' => $_POST['dirham'],
				'product_price_sar' => $_POST['sar'],
				'product_size' => $_POST['size'],
				'product_new_arrivals' => $_POST['newarrivals'],
				'product_department' => $_POST['department'],
				'product_color' => $_POST['color'],
				'product_fit' => $_POST['fit'],
				'store_id' => $_POST['store_id'],
				'product_description' => $_POST['description'],
				//'product_currency' => $_POST['product_currency'],

				'created_at' => date("Y-m-d H:i:s")
			);
			// $data = array();
			$config['upload_path'] = './uploads/ProductImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				// $formArray = array('upload_data' => $this->upload->data());
				// $this->load->view('create', $formArray);
				$filedata = $this->upload->data();
				$data['product_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['product_image'] = $filedata['file_name'];
			// var_dump($data);
			// die();
			$InsertRecord = $this->Common_model->_insert('products', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/productManagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addproduct');
			}
		}
		$sub_cat_first_records = $this->Common_model->_select('sub_cat_first', '*');
		$this->session->set_userdata('sub_cat_first', $sub_cat_first_records);
		
		$sub_cat_first = $this->session->userdata('sub_cat_first');


		$sub_cat_second_records = $this->Common_model->_select('sub_cat_second', '*');
		$this->session->set_userdata('sub_cat_second', $sub_cat_second_records);
		$sub_cat_second = $this->session->userdata('sub_cat_second');

		$brands_records = $this->Common_model->_select('brands', '*');
		$this->session->set_userdata('brand_id', $brands_records);
		$brands = $this->session->userdata('brand_id');

		$category_records = $this->Common_model->_select('category', '*');
		$this->session->set_userdata('category_id', $category_records);
		$category = $this->session->userdata('category_id');

		$store_management_records = $this->Common_model->_select('store_management', '*');
		$this->session->set_userdata('store_id', $store_management_records);
		$store_management = $this->session->userdata('store_id');



		//  $records = $this->Common_model->_select('sub_cat_first', '*');
		// $records = $this->MyModel->GetFirstSubCatData();
        // var_dump($sub_cat_first[0]['sub_cat_first_id']);die;
		// var_dump($dbdata);
		$this->load->view('AddView/addproduct');
		// $this->load->view('AddView/addproduct');
	}
	public function Addsubadmin()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == true) {
			$data = array(
				'email' => $_POST['email'],
				'password' => $_POST['password'],
				 'created_at' => date("Y-m-d H:i:s")
			);
			// $user = $this->MyModel->insertBlogData($data);
			$InsertRecord = $this->Common_model->_insert('sub_admin', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/subadminManagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addsubadmin');
			}
		}
		$this->load->view('AddView/Addsubadmin');
	}
	public function Addcategory()
	{
		$this->form_validation->set_rules('category_name', 'Category Name', 'required');
		//$this->form_validation->set_rules('brands', 'brands', 'required');
		// $this->form_validation->set_rules('file', 'file', 'required');
		if ($this->form_validation->run() == true) {
			$data = array(
				'category_name' => $_POST['category_name'],
				//'brand_name' => $_POST['brands'],
				 'created_at' => date("Y-m-d H:i:s")
			);
			$config['upload_path'] = './uploads/CategoryImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				// $formArray = array('upload_data' => $this->upload->data());
				// $this->load->view('create', $formArray);
				$filedata = $this->upload->data();
				$data['category_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['category_image'] = $filedata['file_name'];

			// $user = $this->MyModel->insertBlogData($data);
			$InsertRecord = $this->Common_model->_insert('category', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/categorymanagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				//return redirect('Admin/categorymanagement');
			}
		}
		$this->load->view('AddView/Addcategory');
	}
	public function Addcategoryfirst()
	{
		$this->form_validation->set_rules('category_name', 'category_name', 'required');

		$this->form_validation->set_rules('sub_cat_name', 'sub_cat_name', 'required');
		
		//$this->form_validation->set_rules('brands', 'brands', 'required');
		// $this->form_validation->set_rules('file', 'file', 'required');
		if ($this->form_validation->run() == true) {
			//echo('hello');
			$data = array(
				'category_id' => $_POST['category_name'],
				'sub_cat_name' => $_POST['sub_cat_name'],
				
				//'brand_name' => $_POST['brands'],
				 'created_at' => date("Y-m-d H:i:s")
			);
			//var_dump($data); die;
			$config['upload_path'] = './uploads/CategoryImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				// echo "<script>alert('hi1')</script>";
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				// $formArray = array('upload_data' => $this->upload->data());
				// $this->load->view('create', $formArray);
				$filedata = $this->upload->data();
				$data['sub_cat_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['sub_cat_image'] = $filedata['file_name'];
            //var_dump($data); die;
			// $user = $this->MyModel->insertBlogData($data);
			$InsertRecord = $this->Common_model->_insert('sub_cat_first', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/firstcategorymanagement');
			} 

			else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				//return redirect('Admin/categorymanagement');
			}
		}
		$records = $this->Common_model->_select('category','*');
		$this->load->view('AddView/Addcategoryfirst');
	}
public function AddcategorySecond()
	{
		$this->form_validation->set_rules('category_name', 'category_name', 'required');
		$this->form_validation->set_rules('sub_cat_name', 'sub_cat_name', 'required');
		$this->form_validation->set_rules('sub_cat_second_name', 'sub_cat_second_name', 'required');
		//$this->form_validation->set_rules('brands', 'brands', 'required');
		// $this->form_validation->set_rules('file', 'file', 'required');
		if ($this->form_validation->run() == true) {
			$data = array(
				'category_id' => $_POST['category_name'],
				'sub_cat_first_id' => $_POST['sub_cat_name'],
				'sub_cat_second_name' => $_POST['sub_cat_second_name'],
				//'brand_name' => $_POST['brands'],
				 'sub_cat_second_created_at' => date("Y-m-d H:i:s")
			);
			$config['upload_path'] = './uploads/CategoryImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				// $formArray = array('upload_data' => $this->upload->data());
				// $this->load->view('create', $formArray);
				$filedata = $this->upload->data();
				$data['sub_cat_second_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['sub_cat_second_image'] = $filedata['file_name'];

			// $user = $this->MyModel->insertBlogData($data);
			$InsertRecord = $this->Common_model->_insert('sub_cat_second', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/secondcategorymanagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				//return redirect('Admin/categorymanagement');
			}
		}
		$this->load->view('AddView/AddcategorySecond');
	}


	public function Addrefund()
	{
		$this->load->view('AddView/refundrequest');
	}
	public function Addcampaign()
	{
		$this->form_validation->set_rules('moduletype', 'moduletype', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('cashbackset', 'cashbackset', 'required');
		if ($this->form_validation->run() == true) {
			$data = array(
				'module_type' => $_POST['moduletype'],
				'cashback_set' => $_POST['cashbackset'],
				'description' => $_POST['description'],
				 'created_at' => date("Y-m-d H:i:s")
			);
			// $user = $this->MyModel->insertBlogData($data);
			$InsertRecord = $this->Common_model->_insert('campaign', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/campaignManagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addcampaign');
			}
		}
		$this->load->view('AddView/addcampaign');
	}

	public function Addoffer()
	{
		$this->form_validation->set_rules('offertitle', 'offertitle', 'required');
		$this->form_validation->set_rules('validtill', 'validtill', 'required');
		//$this->form_validation->set_rules('validtillsec', 'validtillsec', 'required');
		$this->form_validation->set_rules('discount', 'discount', 'required');
		$this->form_validation->set_rules('couponcode', 'couponcode', 'required');
		$this->form_validation->set_rules('product', 'product', 'required');
		$this->form_validation->set_rules('region', 'region', 'required');
		//$this->form_validation->set_rules('offerbenefits', 'offerbenefits', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		//	$this->form_validation->set_rules('couponcode', 'couponcode', 'required');


		// echo "<script>alert('hi1')</script>";
		if ($this->form_validation->run() == true) {
			//echo "<script>alert('hi2')</script>";
			$data = array(
				'offers_title' => $_POST['offertitle'],
				'valid_till' => $_POST['validtill'],
				//'valid_till_sec' => $_POST['validtillsec'],
				'discount' => $_POST['discount'],
				'coupon_code' => $_POST['couponcode'],
				'product' => $_POST['product'],
				'region' => $_POST['region'],
				//'offer_benefit' => $_POST['offerbenefits'],
				'description' => $_POST['description'],
				'created_at' => date("Y-m-d H:i:s")
			);
			//print_r( $data); die;
			$config['upload_path'] = './uploads/OfferImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				// $formArray = array('upload_data' => $this->upload->data());
				// $this->load->view('create', $formArray);
				$filedata = $this->upload->data();
				$data['offers_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['offers_image'] = $filedata['file_name'];
			//var_dump($data);
			// die();
			$InsertRecord = $this->Common_model->_insert('offer', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/offerManagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addoffer');
			}
		}
		$this->load->view('AddView/add-Offers-management');
	}
public function Addbanner()
	{
		$this->form_validation->set_rules('bannername', 'bannername', 'required');
		


		// echo "<script>alert('hi1')</script>";
		if ($this->form_validation->run() == true) {
			//echo "<script>alert('hi2')</script>";
			$data = array(
				'banner_name' => $_POST['bannername'],
				
				'created_at' => date("Y-m-d H:i:s")
			);
			//print_r( $data); die;
			$config['upload_path'] = './uploads/OfferImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				// $formArray = array('upload_data' => $this->upload->data());
				// $this->load->view('create', $formArray);
				$filedata = $this->upload->data();
				$data['bannner_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['	bannner_image'] = $filedata['file_name'];
			//var_dump($data);
			// die();
			$InsertRecord = $this->Common_model->_insert('banner', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/bannerManagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addbanner');
			}
		}
		$this->load->view('AddView/add-banner-management');
	}
	public function Addmobbanner()
	{
		$this->form_validation->set_rules('mobbannername', 'mobbannername', 'required');
		


		// echo "<script>alert('hi1')</script>";
		if ($this->form_validation->run() == true) {
			//echo "<script>alert('hi2')</script>";
			$data = array(
				'mobbanner_name' => $_POST['mobbannername'],
				
				'created_at' => date("Y-m-d H:i:s")
			);
			//print_r( $data); die;
			$config['upload_path'] = './uploads/OfferImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				// $formArray = array('upload_data' => $this->upload->data());
				// $this->load->view('create', $formArray);
				$filedata = $this->upload->data();
				$data['mobbanner_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['mobbanner_image'] = $filedata['file_name'];
			//var_dump($data);
			// die();
			$InsertRecord = $this->Common_model->_insert('mobbanner', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/mobilebannerManagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addmobbanner');
			}
		}
		$this->load->view('AddView/Addmobilebanner');
	}
	public function Addnews()
	{
		$this->form_validation->set_rules('newstitle', 'newstitle', 'required');
		$this->form_validation->set_rules('newsassociatedstore', 'newsassociatedstore', 'required');
		$this->form_validation->set_rules('newsname', 'newsname', 'required');


		if ($this->form_validation->run() == true) {
			//echo "<script>alert('hi2')</script>";
			$data = array(
				'title' => $_POST['newstitle'],
				'news_associated_store' => $_POST['newsassociatedstore'],
				'news_name' => $_POST['newsname'],
				'created_at' => date("Y-m-d H:i:s")

			);
			$config['upload_path'] = './uploads/NewsImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				$filedata = $this->upload->data();
				$data['news_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['news_image'] = $filedata['file_name'];
			$InsertRecord = $this->Common_model->_insert('news', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Admin/newsManagement');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addnews');
			}
		}
		$this->load->view('AddView/addnews');
	}

	public function Addrating()
	{
		$this->form_validation->set_rules('productname', 'productname', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('contact', 'contact', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('storedetails', 'storedetails', 'required');
		$this->form_validation->set_rules('reviews', 'reviews', 'required');
		$this->form_validation->set_rules('ratings', 'ratings', 'required');


		if ($this->form_validation->run() == true) {
			// echo "<script>alert('hi2')</script>";
			$data = array(
				'product_name' => $_POST['productname'],
				'rating_email' => $_POST['email'],
				'rating_contact' => $_POST['contact'],
				'rating_address' => $_POST['address'],
				'store_details' => $_POST['storedetails'],
				'review' => $_POST['reviews'],
				'ratings' => $_POST['ratings'],
				'created'=>date("Y-m-d H:i:s")


			);
			$config['upload_path'] = './uploads/RatingImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				$filedata = $this->upload->data();
				$data['rating_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['rating_image'] = $filedata['file_name'];
			$InsertRecord = $this->Common_model->_insert('rating', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('Additems/Addrating');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addrating');
			}
		}
		$this->load->view('AddView/addratings');
	}

	public function storedeals()
	{
		$this->load->view('AddView/StoreDeals');
	}
	public function Addnotification()
	{
		$this->form_validation->set_rules('productid', 'productname', 'required');
		$this->form_validation->set_rules('Productstatus', 'Productstatus', 'required');
		$this->form_validation->set_rules('Notificationtime', 'Notificationtime', 'required');
		$this->form_validation->set_rules('ProductDescription', 'ProductDescription', 'required');
		// $this->form_validation->set_rules('newsname', 'newsname', 'required');


		if ($this->form_validation->run() == true) {
			//echo "<script>alert('hi2')</script>";
			$data = array(
				'product_name' => $_POST['productname'],
				'product_status' => $_POST['Productstatus'],
				'notification_time' => $_POST['Notificationtime'],
				'product_description' => $_POST['ProductDescription'],
				'created_at' => date("Y-m-d H:i:s")

			);
			$config['upload_path'] = './uploads/NotificationImage/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('product_image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('create', $error);
			} else {
				$filedata = $this->upload->data();
				$data['product_image'] = $filedata['file_name'];
			}
			$filedata = $this->upload->data();
			$data['product_image'] = $filedata['file_name'];
			$InsertRecord = $this->Common_model->_insert('notification', $data);
			if ($InsertRecord) {
				$this->session->set_flashdata("success", "Insert successful");
				return redirect('admin/notification');
			} else {
				$this->session->set_flashdata("error", "Insert failed!!!");
				return redirect('Additems/Addnotification');
			}
			
			$notification_management = $this->MyModel->GetNotificationData('notification', '*');
			$this->session->set_userdata('notification_id', $notification_management);
			$notification_management = $this->session->userdata('notification_id');
	
		}
		$this->load->view('AddView/AddNotification');
	}
//////TIMER controlllerr//
	function index()
	{
		//$this->load->model('User_model');
		$users=$this->MyModel->all();
		$this->session->set_userdata('users',$users);
		$res=$this->session->userdata('users');
		//var_dump($res[0]['date']); die;
	    $data=array();
		$data['users']=$users;
		
		//var_dump($users['date']); die;
		//$users = $users['date'];
		//var_dump($users['date']) ; die;
          //$data = $users['h'];
         // $data = $users['m'];
          //$data = $users['s'];
		$this->load->view('list',$data);
	}
	 function create()
	 {
	 	//$this->load->model('User_model');
	 	$this->form_validation->set_rules('date','date','required');
	 	$this->form_validation->set_rules('h','h','required');
	 	$this->form_validation->set_rules('m','m','required');
	 	$this->form_validation->set_rules('s','s','required');
	 	if($this->form_validation->run()==false)
	 	{
	 		$this->load->view('create');

	 	}
	 	else

	 	{
	 		//save record to database
	 		$formArray=array();
	 		$formArray['date']=$this->input->post('date');
	 		$formArray['h']=$this->input->post('h');
	 		$formArray['m']=date('m');
	 		$formArray['s']=date('s');
	 		$this->MyModel->create($formArray);
	 		$this->session->set_flashdata('success','record added successfully');
	 		redirect( base_url().'Additems/index');
	 	}
	 	
	 }
	 function edit($userId){
	 	//$this->load->model('User_model');
	 	$user=$this->MyModel->getUser($userId);
	 	$data=array( );
	 	$data ['user']=$user;
	 	$this->form_validation->set_rules('date','date','required');
	 	$this->form_validation->set_rules('h','h','required');
	 	$this->form_validation->set_rules('m','m','required');
	 	$this->form_validation->set_rules('s','s','required');
	 	if($this->form_validation->run()==false){
	 	$this->load->view('edit',$data);
}
else{
	$formArray=array();
	$formArray['date']=$this->input->post('date');
	$formArray['h']=$this->input->post('h');
	$formArray['m']=$this->input->post('m');
	$formArray['s']=$this->input->post('s');
	$this->MyModel->updateuser($userId,$formArray);
	$this->session->set_flashdata('success','record update successfully');
	redirect(base_url().'Additems/index');

	//update user recoord
}

	 }


	  function delete($userId)
	  {
	  	//$this->load->model('User_model');
	  	 $user=$this->MyModel->getuser($userId);
	  	 if(empty($user)){
	  	 $this->session->set_flashdata('failure','record not found in database');
	redirect(base_url().'Additems/index');	
	  	 }
	  	 $this->MyModel->deleteuser($userId);
	  	 $this->session->set_flashdata('success','record deleted successfully');
	redirect(base_url().'Additems/index');
	  }
	//end timer//
}
