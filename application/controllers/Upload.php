<?php
/**
 * Created by PhpStorm.
 * User: wuyongyu
 * Date: 2017/12/7
 * Time: 14:44
 */
 class Upload extends Application
 {
     public function __construct()
     {
         parent::__construct();
         $this->load->helper(array('form','url'));
     }

     public  function  index()
     {
         $this->load->view('upload/uploadForm',array('error'=>''));
     }

     public function do_uploadImage()
     {
        $config['upload_path']='./uploads/userupload';
        $config['allowed_types']='gif|jpg|png|';
        $config['max_size']=512000;
        $config['max_width']=3000;
        $config['max_height']=3000;

        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('userfile'))
        {
            $error=array('error'=>$this->upload->display_errors());
            $this->load->view('upload/uploadForm',$error);
        }else{

            $upload_data=$this->upload->data();
            $insert_data=array(
                'file_name'=>$upload_data['file_name'],
                'file_type'=>$upload_data['file_type'],
                'file_path'=>'uploads/userupload/'.$upload_data['file_name'],
                'orig_name'=>$upload_data['orig_name'],
                'client_name'=>$upload_data['client_name'],
                'file_size'=>$upload_data['file_size'],
                'image_width'=>$upload_data['image_width'],
                'image_height'=>$upload_data['image_height'],
                'image_type'=>$upload_data['image_type']);
           //将图片信息插入数据库
            $this->uploadmodel->insertImage($insert_data);
             foreach ($upload_data as $item => $value)
             {
                 echo $item;
                 echo "  ";
                 echo $value;
                 echo "<br/>";
             }
            $data=array('upload_data'=>$this->upload->data());
            $this->load->view('upload/uploadSuccess',$data);
        }

     }
 }