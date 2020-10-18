<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/Admin.php");


class Edititems extends Admin
{
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);

		$this->load->model('MyModel');
		$this->load->model('Common_model');
	}

	public function Editstore()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('store_management', '*', ['store_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('email', 'email', 'required');
				$this->form_validation->set_rules('password', 'password', 'required');
				$this->form_validation->set_rules('store_name', 'Store Name', 'required');
				if ($this->form_validation->run() == true) {


					$dataArray['store_email'] = $this->input->post('email');
					$dataArray['store_password'] = $this->input->post('password');
					$dataArray['store_name'] = $this->input->post('store_name');
					$updateRecord = $this->Common_model->_update('store_management', $dataArray, ['store_id' => $id]);
					if ($updateRecord) {

						$this->session->set_flashdata('success', 'You have successfully updated store details.');
						return redirect('Admin/StoreManagement');
					}
					
					else{

						$this->session->set_flashdata('error', 'Update failed.');

						return redirect('Edititems/Editstore/');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editstore', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something we');
			//  redirect('Edititems/Editproduct', "refresh");
		}
		// $this->load->view('EditView/EditStore');
	}
	public function Editproduct()
	{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('products', '*', ['product_id' => $id]);
			
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('subcategoryfirst', 'subcategoryfirst', 'required');
				$this->form_validation->set_rules('sub_cat_second_name', 'sub_cat_second_name', 'required');
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
				// $this->form_validation->set_rules('image', 'image', 'required');
				// echo "<script>alert('hi1')</script>";
				$config['upload_path'] = './uploads/ProductImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['product_image'] = $fileData['file_name'];
					}
					$dataArray['sub_cat_first_id'] = $this->input->post('subcategoryfirst');
					$dataArray['sub_cat_second_id'] = $this->input->post('sub_cat_second_name');
					//$dataArray['brand_id'] = $this->input->post('brandid');
					$dataArray['category_id'] = $this->input->post('category_name');
					$dataArray['product_name'] = $this->input->post('name');
					$dataArray['product_price_omr'] = $this->input->post('omr');
					$dataArray['product_price_dirham'] = $this->input->post('dirham');
					$dataArray['product_price_sar'] = $this->input->post('sar');
					$dataArray['product_size'] = $this->input->post('size');
					$dataArray['product_new_arrivals'] = $this->input->post('newarrivals');
					$dataArray['product_department'] = $this->input->post('department');
					$dataArray['product_color'] = $this->input->post('color');
					$dataArray['product_fit'] = $this->input->post('fit');
					$dataArray['store_id'] = $this->input->post('store_id');
					//$dataArray['product_currency'] = $this->input->post('product_currency');
					$updateRecord = $this->Common_model->_update('products', $dataArray, ['product_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/ProductImage/' . $dbdata['product_image'])) {
									unlink('./uploads/ProductImage/' . $dbdata['product_image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated product.');
						return redirect('Admin/productManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$sub_cat_first_records = $this->Common_model->_select('sub_cat_first', '*');
				//var_dump($sub_cat_first_records); die;
				$this->session->set_userdata('sub_cat_first', $sub_cat_first_records);
				$sub_cat_first = $this->session->userdata('sub_cat_first');
				//echo"<pre>";
				//var_dump($sub_cat_first); die;

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
				//var_dump($store_management=>'store_name'); die; 


				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/EditProduct', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
	public function Editpayment()
	{
		//echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('payment', '*', ['order_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('orderdate', 'orderdate', 'required');
				$this->form_validation->set_rules('orderprice', 'orderprice', 'required');
				$this->form_validation->set_rules('orderstatus', 'orderstatus', 'required');
				$this->form_validation->set_rules('productquantity', 'productquantity', 'required');
				$this->form_validation->set_rules('deliverystatus', 'deliverystatus', 'required');
				
				$config['upload_path'] = './uploads/PaymentImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['image'] = $fileData['file_name'];
					}
					$dataArray['name'] = $this->input->post('name');
					$dataArray['order_date'] = $this->input->post('orderdate');
					$dataArray['order_price'] = $this->input->post('orderprice');
					$dataArray['order_status'] = $this->input->post('orderstatus');
					$dataArray['product_quantity'] = $this->input->post('productquantity');
					$dataArray['delivery_status'] = $this->input->post('deliverystatus');
				//	'created_at' => date('Y-m-d H:i:s')
					// $dataArray['product_size'] = $this->input->post('size');
					// $dataArray['product_new_arrivals'] = $this->input->post('newarrivals');
					// $dataArray['product_department'] = $this->input->post('department');
					// $dataArray['product_color'] = $this->input->post('color');
					// $dataArray['product_fit'] = $this->input->post('fit');
					$updateRecord = $this->Common_model->_update('payment', $dataArray, ['order_id' => $id]);
					//print_r($updateRecord); 
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/PaymentImage/' . $dbdata['image'])) {
									unlink('./uploads/PaymentImage/' . $dbdata['image']);
								}
							}
							
						}
						$this->session->set_flashdata('success', 'You have successfully updated Payment.');
							return redirect('Admin/paymentManagement');
						
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editpayment', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
	public function Editorder()
	{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('order_management', '*', ['order_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('name', 'name', 'required');
				// $this->form_validation->set_rules('orderdate', 'orderdate', 'required');
				$this->form_validation->set_rules('orderprice', 'orderprice', 'required');
				$this->form_validation->set_rules('orderstatus', 'orderstatus', 'required');
				$this->form_validation->set_rules('orderquantity', 'orderquantity', 'required');
				// $this->form_validation->set_rules('deliverystatus', 'deliverystatus', 'required');

				// echo "<script>alert('hi1')</script>";
				$config['upload_path'] = './uploads/OrderImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['order_image'] = $fileData['file_name'];
					}
					$dataArray['user_name'] = $this->input->post('name');
					// $dataArray['order_date'] = $this->input->post('orderdate');
					$dataArray['order_price'] = $this->input->post('orderprice');
					$dataArray['order_status'] = $this->input->post('orderstatus');
					$dataArray['order_quantity'] = $this->input->post('orderquantity');

					$updateRecord = $this->Common_model->_update('order_management', $dataArray, ['order_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/OrderImage/' . $dbdata['order_image'])) {
									unlink('./uploads/OrderImage/' . $dbdata['order_image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated order.');
						return redirect('Admin/ordersManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editorder', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
	public function Editrefund()
	{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('refund', '*', ['order_id' => $id]);
		//	var_dump($dbdata); die;
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('orderdate', 'orderdate', 'required');
				$this->form_validation->set_rules('orderprice', 'orderprice', 'required');
				$this->form_validation->set_rules('orderstatus', 'orderstatus', 'required');
				$this->form_validation->set_rules('productquantity', 'productquantity', 'required');
				$this->form_validation->set_rules('refundstatus', 'refundstatus', 'required');

				// echo "<script>alert('hi1')</script>";
				$config['upload_path'] = './uploads/RefundImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['image'] = $fileData['file_name'];
					}
					$dataArray['name'] = $this->input->post('name');
					$dataArray['order_date'] = $this->input->post('orderdate');
					$dataArray['order_price'] = $this->input->post('orderprice');
					$dataArray['order_status'] = $this->input->post('orderstatus');
					$dataArray['product_quantity'] = $this->input->post('productquantity');
					$dataArray['refund_status'] = $this->input->post('refundstatus');

					$updateRecord = $this->Common_model->_update('refund', $dataArray, ['order_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/RefundImage/' . $dbdata['image'])) {
									unlink('./uploads/RefundImage/' . $dbdata['image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated Refund.');
						 return redirect('Admin/refundManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editrefund', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
	public function Editinvantory()
	{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('invantory', '*', ['product_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('subcategoryfirst', 'subcategoryfirst', 'required');
				// $this->form_validation->set_rules('subcategorysecond', 'subcategorysecond', 'required');
				//$this->form_validation->set_rules('brandid', 'brandid', 'required');
				$this->form_validation->set_rules('categorname', 'categorname', 'required');
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('price', 'price', 'required');
				$this->form_validation->set_rules('size', 'size', 'required');
				$this->form_validation->set_rules('newarrivals', 'newarrivals', 'required');
				$this->form_validation->set_rules('department', 'department', 'required');
				$this->form_validation->set_rules('color', 'color', 'required');
				$this->form_validation->set_rules('fit', 'fit', 'required');
				// $this->form_validation->set_rules('image', 'image', 'required');
				// echo "<script>alert('hi1')</script>";
				$config['upload_path'] = './uploads/ProductImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					 echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['product_image'] = $fileData['file_name'];
					}
					$dataArray['sub_category_id'] = $this->input->post('subcategoryfirst');
					// $dataArray['sub_category_sec_id'] = $this->input->post('subcategorysecond');
					//$dataArray['brand_id'] = $this->input->post('brandid');
					$dataArray['category_id'] = $this->input->post('categorname');
					$dataArray['product_name'] = $this->input->post('name');
					$dataArray['product_price'] = $this->input->post('price');
					$dataArray['product_size'] = $this->input->post('size');
					$dataArray['product_new_arrivals'] = $this->input->post('newarrivals');
					$dataArray['product_department'] = $this->input->post('department');
					$dataArray['product_color'] = $this->input->post('color');
					$dataArray['product_fit'] = $this->input->post('fit');
					$updateRecord = $this->Common_model->_update('invantory', $dataArray, ['product_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/ProductImage/' . $dbdata['product_image'])) {
									unlink('./uploads/ProductImage/' . $dbdata['product_image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated product.');
						 return redirect('Admin/invantoryManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						  return redirect('Edititems/Editinvantory');
					}
				}
				$sub_cat_first_records = $this->Common_model->_select('sub_cat_first', '*');
				$this->session->set_userdata('sub_cat_first', $sub_cat_first_records);
				$sub_cat_first = $this->session->userdata('sub_cat_first');


				$brands_records = $this->Common_model->_select('brands', '*');
				$this->session->set_userdata('brand_id', $brands_records);
				$brands = $this->session->userdata('brand_id');

				$category_records = $this->Common_model->_select('category', '*');
				$this->session->set_userdata('category_id', $category_records);
				$category = $this->session->userdata('category_id');




				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editinvantory', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
	public function Editsubadmin()
	{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('sub_admin', '*', ['sub_admin_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('email', 'email', 'required');
				$this->form_validation->set_rules('password', 'password', 'required');
				if ($this->form_validation->run() == true) {


					$dataArray['email'] = $this->input->post('email');
					$dataArray['password'] = $this->input->post('password');
					$updateRecord = $this->Common_model->_update('sub_admin', $dataArray, ['sub_admin_id' => $id]);
					if ($updateRecord) {

						$this->session->set_flashdata('success', 'You have successfully updated this Candidate.');
						redirect('Admin/subadminManagement');

						$this->session->set_flashdata('error', 'Update failed.');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/EditSubAdmin', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
	public function Editcategory()
{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('category', '*', ['category_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
			$this->form_validation->set_rules('category_name', 'Category Name', 'required');
				
				$config['upload_path'] = './uploads/CategoryImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['category_image'] = $fileData['file_name'];
					}
				
					$dataArray['category_name'] = $this->input->post('category_name');
					
					
					$updateRecord = $this->Common_model->_update('category', $dataArray, ['category_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/CategoryImage/' . $dbdata['image'])) {
									unlink('./uploads/CategoryImage/' . $dbdata['image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated Payment.');
						 return redirect('Admin/categorymanagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/EditCategory', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
		//$this->load->view('EditView/EditCategory');
	public function Editfirstcategory()
{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('sub_cat_first', '*', ['sub_cat_first_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
			$this->form_validation->set_rules('category_name', 'category_name', 'required');
			$this->form_validation->set_rules('sub_cat_name', 'sub_cat_name', 'required');
				
				$config['upload_path'] = './uploads/CategoryImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['sub_cat_image'] = $fileData['file_name'];
					}
					$dataArray['category_id'] = $this->input->post('category_name');
				
					$dataArray['sub_cat_name'] = $this->input->post('sub_cat_name');
					
					
					$updateRecord = $this->Common_model->_update('sub_cat_first', $dataArray, ['sub_cat_first_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/CategoryImage/' . $dbdata['image'])) {
									unlink('./uploads/CategoryImage/' . $dbdata['image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated Payment.');
						 return redirect('Admin/firstcategorymanagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/EditFirstCategory', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
public function Editsecondcategory()
{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('sub_cat_second', '*', ['sub_cat_second_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
		     $this->form_validation->set_rules('category_name', 'category_name', 'required');
		     $this->form_validation->set_rules('sub_cat_name', 'sub_cat_name', 'required');
			$this->form_validation->set_rules('sub_cat_second_name', 'sub_cat_second_name', 'required');
				
				$config['upload_path'] = './uploads/CategoryImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['sub_cat_second_image'] = $fileData['file_name'];
					}
				    $dataArray['category_id'] =$this->input->post('category_name');
				    $dataArray['sub_cat_first_id'] =$this->input->post('sub_cat_name');
					$dataArray['sub_cat_second_name'] = $this->input->post('sub_cat_second_name');
					//'sub_cat_second_created_at' => date("Y-m-d H:i:s")
					
					
					$updateRecord = $this->Common_model->_update('sub_cat_second', $dataArray, ['sub_cat_second_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/CategoryImage/' . $dbdata['image'])) {
									unlink('./uploads/CategoryImage/' . $dbdata['image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated Payment.');
						 return redirect('Admin/secondcategorymanagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/EditSecondCategory', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
	public function Editcampaign()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('campaign', '*', ['campaign_id' => $id]);
			// var_dump($dbdata); die();
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('module', 'module', 'required');
				$this->form_validation->set_rules('cashback', 'cashback', 'required');
				$this->form_validation->set_rules('description', 'description', 'required');

				if ($this->form_validation->run() == true) {

					$dataArray['module_type'] = $this->input->post('module');
					$dataArray['cashback_set'] = $this->input->post('cashback');
					$dataArray['description'] = $this->input->post('description');
					$updateRecord = $this->Common_model->_update('campaign', $dataArray, ['campaign_id' => $id]);
					if ($updateRecord) {

						$this->session->set_flashdata('success', 'You have successfully updated this Candidate.');
						 return redirect('Admin/campaignManagement');
						$this->session->set_flashdata('error', 'Update failed.');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editcampaign', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
		// $this->load->view('EditView/EditCampaign');
	}

	public function Editoffer()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			//  echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('offer', '*', ['offers_id' => $id]);
			if (!empty($dbdata)) {
				//  echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('offertitle', 'offertitle', 'required');
				$this->form_validation->set_rules('validtill', 'validtill', 'required');
				//$this->form_validation->set_rules('validtillsec', 'validtillsec', 'required');
				$this->form_validation->set_rules('discount', 'discount', 'required');
				$this->form_validation->set_rules('couponcode', 'couponcode', 'required');
				$this->form_validation->set_rules('product', 'product', 'required');
				$this->form_validation->set_rules('region', 'region', 'required');
				//$this->form_validation->set_rules('offerbenefits', 'offerbenefits', 'required');
				$this->form_validation->set_rules('description', 'description', 'required');
				// $this->form_validation->set_rules('department', 'department', 'required');
				// $this->form_validation->set_rules('color', 'color', 'required');
				// $this->form_validation->set_rules('fit', 'fit', 'required');
				// $this->form_validation->set_rules('image', 'image', 'required');
				// echo "<script>alert('hi1')</script>";
				$config['upload_path'] = './uploads/OfferImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					//echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['offers_image'] = $fileData['file_name'];
					}
					$dataArray['offers_title'] = $this->input->post('offertitle');
					$dataArray['valid_till'] = $this->input->post('validtill');
					//$dataArray['valid_till_sec'] = $this->input->post('validtillsec');
					$dataArray['discount'] = $this->input->post('discount');
					$dataArray['coupon_code'] = $this->input->post('couponcode');
					$dataArray['product	'] = $this->input->post('product');
					$dataArray['region'] = $this->input->post('region');
					//$dataArray['offer_benefit'] = $this->input->post('offerbenefits');
					$dataArray['description'] = $this->input->post('description');
					
					// $dataArray['product_department'] = $this->input->post('department');
					// $dataArray['product_color'] = $this->input->post('color');
					// $dataArray['product_fit'] = $this->input->post('fit');
					$updateRecord = $this->Common_model->_update('offer', $dataArray, ['offers_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/OfferImage/' . $dbdata['offers_image'])) {
									unlink('./uploads/OfferImage/' . $dbdata['offers_image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated product.');
						 return redirect('Admin/offerManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						  return redirect('Edititems/Editoffer');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Edit-Offers-management', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
		// $this->load->view('EditView/Edit-Offers-management');
	}
	public function Editbanner()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			//  echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('banner', '*', ['ban_id' => $id]);
			if (!empty($dbdata)) {
				//  echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('bannername', 'bannername', 'required');
				
				$config['upload_path'] = './uploads/OfferImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					//echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['bannner_image'] = $fileData['file_name'];
					}
					$dataArray['banner_name'] = $this->input->post('bannername');
					//'created_at' => date("Y-m-d H:i:s");
					
					// $dataArray['product_department'] = $this->input->post('department');
					// $dataArray['product_color'] = $this->input->post('color');
					// $dataArray['product_fit'] = $this->input->post('fit');
					$updateRecord = $this->Common_model->_update('banner', $dataArray, ['ban_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/OfferImage/' . $dbdata['bannner_image'])) {
									unlink('./uploads/OfferImage/' . $dbdata['bannner_image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated banner.');
						 return redirect('Admin/bannerManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						  return redirect('Edititems/Editbanner');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Edit-banner-Management', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
		// $this->load->view('EditView/Edit-Offers-management');
	}
	public function Editmobbanner()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			//  echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('mobbanner', '*', ['mob_id' => $id]);
			if (!empty($dbdata)) {
				//  echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('mobbannername', 'mobbannername', 'required');
				
				$config['upload_path'] = './uploads/OfferImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					//echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['mobbanner_image'] = $fileData['file_name'];
					}
					$dataArray['mobbanner_name'] = $this->input->post('mobbannername');
					//'created_at' => date("Y-m-d H:i:s");
					
					// $dataArray['product_department'] = $this->input->post('department');
					// $dataArray['product_color'] = $this->input->post('color');
					// $dataArray['product_fit'] = $this->input->post('fit');
					$updateRecord = $this->Common_model->_update('mobbanner', $dataArray, ['mob_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/OfferImage/' . $dbdata['mobbanner_image'])) {
									unlink('./uploads/OfferImage/' . $dbdata['mobbanner_image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated banner.');
						 return redirect('Admin/mobilebannerManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						  return redirect('Edititems/Editmobbanner');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/EditMobileBanner', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
		// $this->load->view('EditView/Edit-Offers-management');
	}


	public function Editnews()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('news', '*', ['news_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('newstitle', 'newstitle', 'required');
				$this->form_validation->set_rules('newsassociatedstore', 'newsassociatedstore', 'required');
				$this->form_validation->set_rules('newsname', 'newsname', 'required');

				$config['upload_path'] = './uploads/NewsImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['news_image'] = $fileData['file_name'];
					}
					$dataArray['title'] = $this->input->post('newstitle');
					$dataArray['news_associated_store'] = $this->input->post('newsassociatedstore');
					$dataArray['news_name'] = $this->input->post('newsname');
					$updateRecord = $this->Common_model->_update('news', $dataArray, ['news_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/NewsImage/' . $dbdata['news_image'])) {
									unlink('./uploads/NewsImage/' . $dbdata['news_image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated product.');
					 return redirect('Admin/newsManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editnews', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
		// $this->load->view('EditView/Editnews');
	}

	public function Editrating()
	{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			// $dbdata = $this->Common_model->_selectById('rating', '*', ['rating_id' => $id]);
				$GetRatingData_records = $this->MyModel->GetRatingData($id);
				$this->session->set_userdata('GetRatingData', $GetRatingData_records);
				$dbdata = $this->session->userdata('GetRatingData');
				// var_dump($dbdata);die;

			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
		
				$this->form_validation->set_rules('review', 'review', 'required');
				$this->form_validation->set_rules('ratings', 'ratings', 'required');

				// echo "<script>alert('hi1')</script>";
		
				 if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
			
					$dataArray['review'] = $this->input->post('review');
					$dataArray['ratings'] = $this->input->post('ratings');

					$updateRecord = $this->Common_model->_update('rating', $dataArray, ['rating_id' => $id]);
					if ($updateRecord) {
				
				
						$this->session->set_flashdata('success', 'You have successfully updated order.');
						// return redirect('Edititems/Editproduct');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				
				// var_dump($RatingData_records);die;


				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editrating', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
		// $this->load->view('EditView/EditRatings');
	}
	public function Editfeedback()
	{

		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('feedback', '*', ['feedback_id' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('feedbakname', 'feedbakname', 'required');
				$this->form_validation->set_rules('email', 'email', 'required');
				$this->form_validation->set_rules('number', 'number', 'required');
				$this->form_validation->set_rules('against', 'against', 'required');
				$this->form_validation->set_rules('feedbacknote', 'feedbacknote', 'required');
				$this->form_validation->set_rules('storedetails', 'storedetails', 'required');			// $this->form_validation->set_rules('image', 'image', 'required');
				// echo "<script>alert('hi1')</script>";
				$config['upload_path'] = './uploads/FeedbackImage/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						$fileData = $this->upload->data();
						$dataArray['feedback_image'] = $fileData['file_name'];
					}
					$dataArray['feedback_name'] = $this->input->post('feedbakname');
					$dataArray['feedback_email'] = $this->input->post('email');
					$dataArray['feedback_mobile'] = $this->input->post('number');
					$dataArray['against'] = $this->input->post('against');
					$dataArray['store_details'] = $this->input->post('storedetails');
					$dataArray['feedback_note'] = $this->input->post('feedbacknote');

					$updateRecord = $this->Common_model->_update('feedback', $dataArray, ['feedback_id' => $id]);
					if ($updateRecord) {
						if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
							if (!empty($dbdata['image'])) {
								if (file_exists('./uploads/FeedbackImage/' . $dbdata['feedback_image'])) {
									unlink('./uploads/FeedbackImage/' . $dbdata['feedback_image']);
								}
							}
						}
						$this->session->set_flashdata('success', 'You have successfully updated feedback.');
						 return redirect('Admin/feedbackManagement');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editfeedback', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
	}
	public function Editonlinedeals()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('onlinedeals', '*', ['deal_id ' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('productname', 'productname', 'required');
				$this->form_validation->set_rules('date', 'date', 'required');
				// $this->form_validation->set_rules('email', 'email', 'required');
				if ($this->form_validation->run() == true) {


					$dataArray['product_name'] = $this->input->post('productname');
					$dataArray['deal_time'] = $this->input->post('date');
					$updateRecord = $this->Common_model->_update('onlinedeals', $dataArray, ['deal_id' => $id]);
					if ($updateRecord) {

						$this->session->set_flashdata('success', 'You have successfully updated Deal.');
                               redirect('Admin/dealsManagement');
						$this->session->set_flashdata('error', 'Update failed.');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editonlinedeals', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}

		// $this->load->view('EditView/StoreDeals');
	}
	public function Editstoredeals()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			$dbdata = $this->Common_model->_selectById('storedeals', '*', ['store_id ' => $id]);
			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
				$this->form_validation->set_rules('productname', 'productname', 'required');
				$this->form_validation->set_rules('date', 'date', 'required');
				$this->form_validation->set_rules('storename', 'storename', 'required');
				if ($this->form_validation->run() == true) {


					$dataArray['product_name'] = $this->input->post('productname');
					$dataArray['deal_time'] = $this->input->post('date');
					$dataArray['store_name'] = $this->input->post('storename');
					$updateRecord = $this->Common_model->_update('storedeals', $dataArray, ['store_id ' => $id]);
					if ($updateRecord) {

						$this->session->set_flashdata('success', 'You have successfully updated this Candidate.');
                         redirect('Admin/storedeals');
						$this->session->set_flashdata('error', 'Update failed.');
					}
				}
				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editstoredeals', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}

		// $this->load->view('EditView/StoreDeals');
	}
	public function Editnotification()
	{
		// echo "<script>alert('hi')</script>";
		$id = $this->uri->segment(3);
		if ($id != '') {
			// echo "<script>alert('hi1')</script>";
			// $dbdata = $this->Common_model->_selectById('rating', '*', ['rating_id' => $id]);
				$GetRatingData_records = $this->MyModel->GetRatingData($id);
				$this->session->set_userdata('GetRatingData', $GetRatingData_records);
				$dbdata = $this->session->userdata('GetRatingData');
				// var_dump($dbdata);die;

			if (!empty($dbdata)) {
				// echo "<script>alert('hi2')</script>";
		
				$this->form_validation->set_rules('review', 'review', 'required');
				$this->form_validation->set_rules('ratings', 'ratings', 'required');

				// echo "<script>alert('hi1')</script>";
		
				 if ($this->form_validation->run() == true) {
					// echo "<script>alert('hi3')</script>";
			
					$dataArray['review'] = $this->input->post('review');
					$dataArray['ratings'] = $this->input->post('ratings');

					$updateRecord = $this->Common_model->_update('rating', $dataArray, ['rating_id' => $id]);
					if ($updateRecord) {
				
				
						$this->session->set_flashdata('success', 'You have successfully updated order.');
						// return redirect('Edititems/Editproduct');
					} else {
						$this->session->set_flashdata('error', 'Update failed.');
						//   return redirect('Edititems/Editproduct');
					}
				}
				
				// var_dump($RatingData_records);die;


				$this->viewData['dbdata'] = $dbdata;
				$this->load->view('EditView/Editrating', $this->viewData);
			}
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Please try again.');
			//  redirect('Edititems/Editproduct', "refresh");
		}
		// $this->load->view('EditView/EditRatings');
	}

}
