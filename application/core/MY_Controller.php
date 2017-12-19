<?php
/**
 * Created by PhpStorm.
 * User: wuyongyu
 * Date: 2017/12/7
 * Time: 18:48
 *
 * 目的：超类，公共方法
 *
 * TODO：集成一些常用方法

*/
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Application extends CI_Controller {

    public $per_page = '10';
    public $if_mobile = 'welcome';
    public $onlineTime = 600;
    public $tokenExpires = 6000;
    public $nof_user = 34;  //系统通知和服务器消息
    public $cen_user = 35;

    //数据库的表名字
    public $user_table = 'users';  //用户
    public $imageSource_table='image_source'; //图片
    public $ci_sessions_table='ci_sessions';//Session
    public $showPic_table='show_pic';

    public $cookie_table = 'gr_cookie';
    public $token_table = 'gr_token';
    public $api_url = '';

    /**
    | 短信网关
     */
    public $alidayu_app_id = '2364';// 短信网关阿里大于appid

    public $alidayu_app_secrect = 'b';// 阿里大于app secrect(阿里大于 管理中心-短信模板管理 获取)

    public $alidayu_sms_code = 'SMS_4778';// 阿里大于短信模版id
    public $alidayu_sms_welcome = 'SMS_7036';
    public $alidayu_sms_sign = '小羽毛';// 阿里大于短信sign

    public $wx_app_id = 'wxc9566196';
    public $wx_secret = 'aceb02959d';
    public $wx_mch_id = '144202';
    public $wx_key = 'y4567';

    public function __construct() {
        parent::__construct();
        $this->per_page = $this->config->item('per_page');
        $this->load->helper(array('url','baseci','form'));
        $this->load->model(array("common","uploadmodel","usermodel"));
        $this->api_url = base_url();
        $this->api_url = substr($this->api_url,0,strlen($this->api_url)-1);

        //$this->output->enable_profiler(TRUE);
        //$this->lang->load('error');
        if( strstr(base_url(),'local') )
        {
            $this->img_url = base_url();
        }
        //wuyy
        /*
        if( $_SESSION['uid'] )
        {
            $num = $this->Quguoren->get_user_num($_SESSION['uid']);
            $_SESSION['msg_count'] = $num['message_num'];
        }
        */
    }

    public function bbs_sync()
    {
        /*
        $error = 'fuck';
        //判断用户是否登录当前站点
        if( $_SESSION['uid'] )//&& empty($_SESSION['bbs_uid']) )
        {
            //查询用户手机号
            $userinfo = $this->Common->get_one( $this->user_table, array('id'=>$_SESSION['uid']) );
            //print_r($userinfo);
            print_r($_SESSION);
            //判断用户是否登录bbs
            $path = str_replace('\\','/',dirname(dirname(dirname(__FILE__))));
            include_once($path.'/bbs/config/config_ucenter.php');
            include_once($path.'/bbs/uc_client/client.php');
            // $pwd = $userinfo['ctime'];
            $pwd = $_SESSION['password'];
            if(empty($pwd)){
                //print_r('empty password');
                $pwd = 'quguoren';
            }

            $userinfo['nickname']= str_replace("'",'',$userinfo['nickname']);
            $userinfo['nickname']= str_replace(",",'',$userinfo['nickname']);
            $email = $userinfo['ctime'].rand(1000,9999).'@quguoren.com';

            //wuyy 这里删除，下面语句执行失败
            //print_r(uc_get_user($_SESSION['uid'],1));
            list($uid,$username,$theemail)= $arr = uc_get_user($_SESSION['uid'],1);


            if( empty($uid) ) //用户不存在
            {
                print_r('test');
                $error = 'not exist uid=-1';
                //同步注册到bbs
                $bbs_user_info = uc_gruser_register($_SESSION['uid'],$userinfo['nickname'],$pwd,$email);
                print_r('empty2');
                if(!empty($userinfo['nickname'])){
                    if($bbs_user_info> 0){
                        $error = 'not exist add sql';
                        if($userinfo['if_check'] == 1){
                            $groupid = 10;
                        }else{
                            $groupid = 8;
                        }
                        $bbs_user = $this->Common->add("bbs_common_member",
                            array(
                                'uid'=>$bbs_user_info,
                                'username'=>str_replace("'",'',$userinfo['nickname']),
                                'password'=>md5($pwd),
                                'gr_uid'=>$userinfo['id'],
                                'email'=>$email,
                                'groupid'=>$groupid
                            ));
                        $this->Common->add("bbs_common_member_status",array('uid'=>$bbs_user_info));
                        $this->Common->add("bbs_common_member_count",array('uid'=>$bbs_user_info));
                        $this->Common->add("bbs_common_member_profile",array('uid'=>$bbs_user_info));
                        $this->Common->add("bbs_common_member_field_forum",array('uid'=>$bbs_user_info));
                        $this->Common->add("bbs_common_member_field_home",array('uid'=>$bbs_user_info));
                    }
                }
                if( $bbs_user > 0 )
                {
                    global $_G;
                    $_G['uid'] = $bbs_user;
                    $_G['username'] = $username;

                    echo uc_user_synlogin($bbs_user);
                    $_SESSION['bbs_uid'] = $bbs_user;
                }
            }
            elseif( $uid > 0  )
            {
                //$_SESSION['bbs_uid'] = $uid;
                $error = 'exist'.$_SESSION['uid'];
                echo uc_user_synlogin($uid);
                // if(count($res)<=1){
                // 	if(!empty($userinfo['nickname'])){
                // 			$res = $this->Common->add("bbs_common_member",
                // 			array(
                // 				 'uid'=>$uid,
                // 				 'username'=>$userinfo['nickname'],
                // 				 'password'=>md5($pwd),
                // 				 'gr_uid'=>$userinfo['id'],
                // 				 'email'=>$email,
                // 				 'groupid'=>10
                // 				));


                // 	}
                // 	echo uc_user_synlogin($uid);
                // }
            }

        }
        return $error;*/
    }


    public function bbs_sync_logout()
    {
        /*
        $userinfo = $this->Common->get_one('bbs_common_member', array('gr_uid'=>$_SESSION['uid']) );
        //判断用户是否登录bbs
        $path = str_replace('\\','/',dirname(dirname(dirname(__FILE__))));
        include_once($path.'/bbs/config/config_ucenter.php');
        include_once($path.'/bbs/uc_client/client.php');
        include_once($path.'/bbs/config/config_global.php');
        $httponly = false;
        $life = time() - 31536000;
        $path = $httponly && PHP_VERSION < '5.2.0' ? $_config['cookie']['cookiepath'].'; HttpOnly' : $_config['cookie']['cookiepath'];

        $secure = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;




        foreach($_COOKIE as $key=>$value){
            if(strpos($key,$_config['cookie']['cookiepre']) !== false){
                setcookie($key, '', $life, $path, $_config['cookie']['cookiedomain'], $secure);
            }
        }

        echo  uc_user_synlogout();
     */



    }


}
