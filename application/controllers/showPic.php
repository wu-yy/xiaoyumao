<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19
 * Time: 19:42
 */
class showPic extends Application
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('javascript');
    }

    public function index()
    {
        $data['pic_source']=$this->common->getShowPic();
        $this->load->view('showpic/index',$data);
    }

    public function getMore()
    {
        $x=$_POST['all'];
        $x=0;
        $more_info=$this->common->getShowPic();
        $more=array();
        for($i=$x;$i<$x+6&&$i<count($more_info);$i++)
        {
            $more[$i]=$more_info[$i];
        }
        $data=array('more'=>$more,'all'=>$x+6);
        echo json_encode($data);
    }

}