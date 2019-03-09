<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilities extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->load->helper('number');
        //$this->load->model('admin/dashboard_model');
    }

	public function colors()
	{
		/* Title Page */
		$this->data['pagetitle'] = $this->page_title->show();

		/* Breadcrumbs */
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Load Template */
		$this->template->admin_render('admin/simples/utilities/color', $this->data);
    }
    
    public function borders()
	{
        $this->template->admin_render('admin/simples/utilities/border', $this->data);
    }

    public function animations()
	{
        $this->template->admin_render('admin/simples/utilities/animation', $this->data);
    }
    
    public function other()
	{
        $this->template->admin_render('admin/simples/utilities/other', $this->data);
    }    
}
