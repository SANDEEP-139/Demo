<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/Admin.php");

class Deleteitems extends Admin
{
	public function Deleteuser($id)
	{
		// 	var_dump($id);
		// 	die();
		$records = $this->db->where(['user_id' => $id])
			->delete('users');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/UserManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('ListView/product-management');
	}
	public function Deletestore($id)
	{
		// 	var_dump($id);
		// 	die();
		$records = $this->db->where(['store_id' => $id])
			->delete('store_management');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/StoreManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('ListView/product-management');
	}



	public function Deleteproduct($id)
	{
		// 	var_dump($id);
		// 	die();
		$records = $this->db->where(['product_id' => $id])
			->delete('products');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/productManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('ListView/product-management');
	}


	public function Deletecategory($id)
	{
		// var_dump($id);
		// die();

		$records = $this->db->where(['category_id' => $id])
			->delete('category');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/categorymanagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('Addcategory');
	}
	public function Deletefirstcategory($id)
	{
		// var_dump($id);
		// die();

		$records = $this->db->where(['sub_cat_first_id' => $id])
			->delete('sub_cat_first');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/firstcategorymanagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('Addcategory');
	}
	public function Deletesecondcategory($id)
	{
		// var_dump($id);
		// die();

		$records = $this->db->where(['sub_cat_second_id' => $id])
			->delete('sub_cat_second');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/secondcategorymanagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('Addcategory');
	}
	public function Deleteinvantory($id)
	{
		$records = $this->db->where(['product_id' => $id])
			->delete('invantory');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/invantoryManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('invantoryManagement');
	}
	public function Deletesubadmin($id)
	{
		$records = $this->db->where(['sub_admin_id' => $id])
			->delete('sub_admin');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/subadminManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('invantoryManagement');
	}
	public function Deleteorder($id)
	{
		$records = $this->db->where(['order_id' => $id])
			->delete('order_management');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/ordersManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('invantoryManagement');
	}
	public function Deletepayment($id)
	{
		$records = $this->db->where(['order_id' => $id])
			->delete('payment');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/paymentManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('invantoryManagement');
	}

	public function Deleterefund($id)
	{
		$records = $this->db->where(['order_id' => $id])
			->delete('refund');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/refundManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('refundrequest');
	}
	public function Deletecampaign($id)
	{
		$records = $this->db->where(['campaign_id' => $id])
			->delete('campaign');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/campaignManagement');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('addcampaign');
	}

	public function Deleteoffer($id)
	{
		$records = $this->db->where(['offers_id' => $id])
			->delete('offer');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/offerManagement');
			// $this->load->view('ListView/product-management');
		}
		//$this->load->view('add-Offers-management');
	}
	public function Deletebanner($id)
	{
		$records = $this->db->where(['ban_id' => $id])
			->delete('banner');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/bannerManagement');
			// $this->load->view('ListView/product-management');
		}
		//$this->load->view('add-Offers-management');
	}
	public function Deletemobbanner($id)
	{
		$records = $this->db->where(['mob_id' => $id])
			->delete('mobbanner');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/mobilebannerManagement');
			// $this->load->view('ListView/product-management');
		}
		//$this->load->view('add-Offers-management');
	}

	public function Deletenews($id)
	{
		$records = $this->db->where(['news_id' => $id])
			->delete('news');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/newsManagement');
		}
	}
	// $this->load->view('addnews')

	public function Deleterating($id)
	{
		$records = $this->db->where(['rating_id' => $id])
			->delete('rating');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/ratingManagement');
		}
		// $this->load->view('addratings');
	}
	public function Deletefeedback($id)
	{
		$records = $this->db->where(['feedback_id' => $id])
			->delete('feedback');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/feedbackManagement');
		}
		// $this->load->view('addratings');
	}

	public function Deleteonlinedeals($id)
	{
		$records = $this->db->where(['deal_id' => $id])
			->delete('onlinedeals');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/dealsManagement');
		}
		// $this->load->view('StoreDeals');
	}
	public function Deletestoredeals($id)
	{
		$records = $this->db->where(['store_id' => $id])
			->delete('storedeals');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/storedeals');
		}
		// $this->load->view('StoreDeals');
	}
	
	public function Deletenotification($id)
	{
		// var_dump($id);
		// die();

		$records = $this->db->where(['notification_id' => $id])
			->delete('notification');

		if ($records) {
			$this->session->set_flashdata('success', 'Record Deleted successfully!!');
			return redirect('Admin/notification');
			// $this->load->view('ListView/product-management');
		}
		// $this->load->view('Addcategory');
	}

}
