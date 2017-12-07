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


}