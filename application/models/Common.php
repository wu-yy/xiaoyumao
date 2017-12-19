<?php
/**
 * Created by PhpStorm.
 * User: wuyongyu
 * Date: 2017/12/7
 * Time: 18:53
 */
class Common extends  CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    //上传图片的时候，将图片的信息插入数据库
    public function insertImage($data)
    {
        return $this->db->insert($this->imageSource_table,$data);
    }

    //获取数据库所有的图片信息
    public  function  getImage()
    {
        return $this->db->get($this->imageSource_table)->result_array();
    }

    //获取所有的图片信息

    public function getShowPic()
    {
        return $this->db->get($this->showPic_table)->result_array();
    }

}