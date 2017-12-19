<?php

class Test2 extends Application
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('javascript');
    }

    public function index()
    {
        $more_info=$this->common->getShowPic();
        $more=array();
        $x=0;
        for($i=$x;$i<$x+36&&$i<count($more_info);$i++)
        {
            $more[$i]=$more_info[$i];
        }
        $data['pic_source']=$more;
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
