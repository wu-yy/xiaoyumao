<?php
/**
 * Created by PhpStorm.
 * User: wuyongyu
 * Date: 2017/12/7
 * Time: 18:13
 */
class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('javascript');
        //$this->load->library('hahh');
    }

    public function index()
    {
        $this->load->view('test/index');
    }

    public function  thread_2()
    {
        $this->load->view('test/header');
        $this->load->view('test/thread_2');
        $this->load->view('test/footer');
    }

    public function login()
    {
        $e['success']=1;
        return $e;
    }

}