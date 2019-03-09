<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->load->helper('number');
        //$this->load->model('admin/dashboard_model');
    }

	public function login()
	{
		/* Load Template */
		$this->template->admin_render('admin/simples/addons/pages/login', $this->data);
    }
    
	public function register()
	{
		/* Load Template */
		$this->template->admin_render('admin/simples/addons/pages/register', $this->data);
    }
    
	public function forget_password()
	{
		/* Load Template */
		$this->template->admin_render('admin/simples/addons/pages/forget-password', $this->data);
    }
    
	public function page_404()
	{
		/* Load Template */
		$this->template->admin_render('admin/simples/addons/pages/404-page', $this->data);
    }
    
	public function page_blank()
	{
		/* Load Template */
		$this->template->admin_render('admin/simples/addons/pages/blank-page', $this->data);
	}    
}
