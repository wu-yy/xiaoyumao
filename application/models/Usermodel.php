<?php
/**
 * Created by PhpStorm.
 * User: wuyongyu
 * Date: 2017/12/6
 * Time: 17:21
 */

//从数据库中查找个人信息

class Usermodel extends  CI_Model
{
    public function __construct()
    {
        $this->load->helper('url');
        $this->load->database();
    }

    //获取数据库的所有用户信息
    public function  get_userInfo()
    {

        $query=$this->db->get('users');
        return $query->result_array();
    }

    //获取数据库的所有用户信息
    public function  get_userInfoByName($username='')
    {

        $query=$this->db->get('users');
        $query=$this->db->get_where('users',array('username'=>$username));
        return $query->result_array();
    }

    //检查数据库用户是否登录成功
    public  function is_register()
    {
        //$this->load->helper('url');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $query=$this->db->get_where('users',array('username'=>$username,'password'=>$password));
        if(empty($query->result_array())) //判断是否登录成功
        {
            return false;
        }else
        {
            return true;
        }
    }


    public function set_userInfoForm()
    {
        //$this->load->helper('url');
        $data=array(
            'nickname'=>$this->input->post('title'),
            'username'=>$this->input->post('text')

        );
        print_r('执行数据库插入');
        return $this->db->insert('users',$data);

    }

    public function register()
    {
        //$this->load->helper('url');
        $data=array(
          'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password')
        );
        return $this->db->insert('users',$data);
    }
}
