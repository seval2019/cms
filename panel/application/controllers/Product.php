<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder="product_v";
        $this->load->model("product_model");
    }

    public function index()
	{
        $viewData=new stdClass();
        /*Tablodan tüm verilerin getirilmesi*/
        $items=$this->product_model->get_all();

        /* view'e gönderilecek değişkenlerin set edilmesi */
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="list";
        $viewData->items=$items;
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
	}
}