<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->load->helper('number');
        //$this->load->model('admin/dashboard_model');
    }


	public function index()
	{
		/*
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
        }*/

		/* Title Page */
		$this->data['pagetitle'] = $this->page_title->show();

		/* Breadcrumbs */
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Load Template */
		$this->template->admin_render('admin/simples/addons/charts/index', $this->data);
	}
}
