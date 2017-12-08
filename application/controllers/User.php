<?php
/**
 * Created by PhpStorm.
 * User: wuyongyu
 * Date: 2017/12/6
 * Time: 17:19
 */
 class User extends Application
 {

     public function __construct()
     {
         parent::__construct();
         $this->load->helper('url_helper');
         $this->load->library('session');

     }

     public function  index()
     {
         redirect('user/login');
     }
     public function  login()
     {
         //加载需要的附加类
         $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
         $data['title']='登录';

         //这里是设置选项是必须填写的
         $this->form_validation->set_rules('username','用户名','required|min_length[2]|max_length[12]', array('required' => '你必须提供一个 %s.'));
         $this->form_validation->set_rules('password','密码','required',array('required' => '你必须输入 %s.'));
         //$this->form_validation->set_rules('lsub','登录按钮','required');
         if($this->form_validation->run()==TRUE)
         {
            $isLogin=$this->usermodel->is_register();
            if($isLogin==true)
            {
                $data['pageInfo']='登录成功';
                $username=$this->input->post('username');
                $result_Array=$this->usermodel->get_userInfoByName($username=$username);

                $newdata = array(
                    'username'  => $username,
                    'userid'=>$result_Array[0]['userid']
                );
                $this->session->set_userdata($newdata);
                redirect('welcome/index');
            }
            else{
                redirect('user/login');
            }

         }
         else
         {
             //$this->load->view('templates/header',$data);
             $this->load->view('user/login',$data);
             //$this->load->view('templates/footer',$data);

         }

     }
     public  function register()
     {

         //加载需要的附加类
         $this->load->helper('form');
         $this->load->helper('url');
         $this->load->library('form_validation');

         $data['title']='注册用户';

         //从数据库获取所有的用户信息
         $info=$this->usermodel->get_userInfo();
         $users['username']=array();
         $users['email']=array();
         foreach ($info as $item)
         {
             Array_push($users['username'],$item['username']);
             Array_push($users['email'],$item['username']);

         }
         //var_dump($users['username'],$users['email']);

         //这里是设置选项是必须填写的
         $this->form_validation->set_rules('username','用户名','required|min_length[2]|max_length[12]|is_unique[users.username]', array('required' => '你必须提供一个 %s.',
             'is_unique' => '这个 %s 已经存在.'));
         $this->form_validation->set_rules('email','邮箱','required|valid_email|is_unique[users.email]',array('required' => '你必须提供一个 %s。','
         valid_email'=>'请提供一个正确的邮箱！','is_unique'=>'此邮箱已经注册！'));
         $this->form_validation->set_rules('password','密码','required',array('required' => '你必须提供一个 %s.'));
         $this->form_validation->set_rules('repassword','再次输入密码','required|matches[password]',array('required' => '你必须提供一个 %s.','matches'=>'两次输入的密码不同！'));
         if($this->form_validation->run()===false) //只有form 匹配了所有的规则，才会返回True
         {
             //$this->load->view('templates/header',$data);
             $this->load->view('user/register',$data);
            // $this->load->view('templates/footer',$data);
         }else{

             $this->usermodel->register();
             //注册成功回到登录页面
             redirect('user/login');

         }
     }




 }