<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(dirname(dirname(dirname(__FILE__))).'/360safe/360webscan.php');

class Welcome extends Application {
	//初始化
	public  function __construct()
    {
        parent::__construct();
        $this->load->library('session');
         //包含自己所建的库 library
        /*
        $path = dirname(dirname(__FILE__));
        include_once($path . "/libraries/wx_pay/lib/WxPay.Api.php");
        */
    }

    public function index()
	{

	    //得到数据库里面的所有的图片资源
	    $imageSource=$this->uploadmodel->getImage();
	    //var_dump($imageSource);
        $data['imageSource']=$imageSource;
		$this->load->view('welcome/welcome',$data);
	}
}
