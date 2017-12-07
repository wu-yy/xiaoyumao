<?php
/**
**
** 作者：吴永宇
**
** 创建日期：2015年10月5日15:28:25
**
** 目的：集成一些常用方法
**
** TODO：集成一些常用方法
**
**/
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：处理时间的函数
	**
	**/
	function ymdhis($time=''){
	    !$time && $time= time();
	    return date("Y-m-d H:i:s",$time);
	}

	function date_md($time=''){
	    !$time && $time= time();
	    return date("m-d",$time);
	}
	function date_hi($time=''){
	    !$time && $time= time();
	    return date("H:i",$time);
	}	
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：处理时间的函数,返回年月日时分
	**
	**/
	function ymdhi($time=''){
	    !$time && $time= time();
	    return date("Y-m-d H:i",$time);
	}
/**
 **
 ** 作者：杨国良
 **
 ** 创建日期：2015年10月5日15:34:29
 **
 ** 目的：处理时间的函数，返回年月日
 **
 **/
function ymdyq($time='')
{
	if( !is_numeric($time) )
	{
		$time = strtotime($time);
	}
	else
	{
		$time = $time;
	}

	return date("Y年m月d日",$time);
}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：处理时间的函数，返回年月日
	**
	**/
	function ymd($time='')
	{
		if( !is_numeric($time) )
		{
			$time = strtotime($time);
		}
		else
		{
			$time = $time;
		}		
		
	    return date("Y-m-d",$time);
	}
	
	function get_date_content( $date )
	{
		if( !is_numeric($date) )
		{
			$time = strtotime($date);
		}
		else
		{
			$time = $date;
		}

		$rtime = date("m-d H:i",$time);
		$rtime2 = date("Y-m-d H:i",$time);
		$htime = date("H:i",$time);
		$time = time() - $time;
		if ($time < 60) 
		{
			$str = 'just';
		} 
		elseif ($time < 60 * 60) 
		{
			$min = floor($time/60);
			$str = $min.' Minutes ago';
		} 
		elseif ($time < 60 * 60 * 24) 
		{
			$h = floor($time/(60*60));
			$str = $h.'Hours before';
		} 
		elseif ($time < 60 * 60 * 24 * 3) 
		{
			$d = floor($time/(60*60*24));
			if($d==1)
			   $str = 'One day before';
			else
			   $str = '2 days ago';
		} 
		else 
		{
			if( is_numeric($date) )
			{
				$str = date('Y',$date).'-'.date('m',$date).'-'.date('d',$date);
			}
			else
			{
				$str = date('Y',strtotime($date)).'-'.date('m',strtotime($date)).'-'.date('d',strtotime($date));
			}
		}
			
		return $str;
	}
	
	/**
	* 判断两个日期相差天数
	*/
	function diffDays( $day1,$day2 )
	{
		$second1 = is_numeric($day1) ? $day1 : strtotime($day1);
		$second2 = is_numeric($day2) ? $day2 : strtotime($day2);
		
		if ($second1 < $second2) 
		{
			$tmp = $second2;
			$second2 = $second1;
			$second1 = $tmp;
		}
		return ($second1 - $second2) / 86400;
	}
	
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：处理post的html特殊字符的函数
	**
	**/
	function html_filter_array($array){
		foreach($array as $key=>$one){
			if(!is_array($one)){
				$array[$key] = htmlspecialchars(trim($one),ENT_QUOTES);
			}else{
				$array[$key] = html_filter_array($one);
			}
		}
		return $array;
	}

	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：从数组中随机获取一个value
	**
	**/
	function random_one($array)
	{
	        shuffle($array);
	        return array_pop($array);
	}
	   
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：从中文英文中截取固定长度字符
	**
	**/
	function bc_substr($str='',$from=0,$length=10)
	{
	       return mb_substr($str, $from, $length);
	}

	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：百度dwz.cn的加密
	**
	**/
	function dwz_cn($url=''){
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,"http://dwz.cn/create.php");
		curl_setopt($ch,CURLOPT_POST,true);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		$data=array('url'=>$url);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		$strRes=curl_exec($ch);
		curl_close($ch);
		$arrResponse=json_decode($strRes,true);
		return $arrResponse['tinyurl'];
	}

	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：获取文件后缀名，带有., 例如'.jpg'
	**
	**/
	function get_extension($filename)
    {
		  $x = explode('.', $filename);
		  return '.'.end($x);
    }	

    /**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：简化语言包的输入语句
	**
	**/
	function lang_line($item)
    { 
    	  $CI = & get_instance();
		  return $CI->lang->line($item);
    }

	 /**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：隐藏email的中间几位
	**
	**/
	function hide_email($email=''){
		if(is_numeric($email) && strlen($email)>=10)
			return substr($email,0,3)."*****".substr($email, -2);
		else
			return preg_replace("/[^@]{4}@[^@]{4}/i", "*****", $email);
	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：获取最近的*天组成一个数组
	**
	**/
	function get_recent_days($num='14',$start="-2"){
		$arr= array();
		for($i=0;$i<=14;$i++){
			$arr[] = date("Y-m-d",strtotime(($start+$i)." day"));
		}
		return $arr;
	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：获取任务等级，3:低等级;2:普通等级;1:中等等级;0:高等级;-1:立刻
	**
	**/
	function get_task_level($num='2'){
		switch($num){
			case '3':return "低 P3";break;
			case '2':return "普通 P2";break;
			case '1':return "中等 P1";break;
			case '0':return "紧急 P0";break;
			default:return "立刻";
		}

	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：获取审核类型
	**
	**/
	function get_work_check_type($num='2'){
		switch($num){
			case '1':return "Leader审核";break;
			case '2':return "公司审核";break;
			default:return "平台审核";
		}

	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：获取审核是否通过类型
	**
	**/
	function get_work_if_checked($num='1'){
		switch($num){
			case '0':return "拒绝";break;
			default:return "通过";
		}

	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：获取任务跟踪类型，3:优化建议;2:bug反馈;1:新功能
	**
	**/
	function get_task_track_type($type='1'){
		switch($num){
			case '3':return "优化建议";break;
			case '2':return "bug反馈";break;
			default:return "新功能";
		}

	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：获取任务状态，3:无法复现;2:已经解决;1:新建
	**
	**/
	function get_task_status($status='1'){
		switch($status){
			case '3':return "无法复现";break;
			case '2':return "已经解决";break;
			default:return "新建";
		}

	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月7日00:27:41
	**
	** 目的：获取项目、任务、工单名称
	**
	**/
	function get_title_by_id_table($id='1',$table=""){
		$CI = & get_instance();
		$CI->db->where('id',$id);
		$CI->db->select('title');
		$res = $CI->db->get($table);
		$res_arr = $res->row_array();
		return $res_arr['title'];
	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月8日11:57:09
	**
	** 目的：根据用户一串uid获取用户的姓名
	**
	**/
	function get_username_by_some_uid($uid=''){
		$arr = explode(',', $uid);
		foreach ($arr as $key => $value) {
			$arr[$key] = get_username_by_uid($value);
		}
		return implode(',', $arr);
	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2017年02月7日
	**
	** 目的：根据用户uid获取用户的姓名
	**
	**/
	function get_username_by_uid($uid='5',$table="gr_users"){
		$CI = & get_instance();

		$CI->db->where('id',$uid);
		$CI->db->select('nickname,telephone');
		$res = $CI->db->get($table);
		$res_arr = $res->row_array();
		return $res_arr['nickname']?$res_arr['nickname']:$res_arr['telephone'];
	}
	/*
	 * 根据invite_code获取用户名
	 */
	function get_username_by_invite($invite_code='',$table="gr_users"){
		$CI = & get_instance();
		if(!empty($invite_code)){
			$CI->db->where('invite_id',$invite_code);
			$CI->db->select('nickname,telephone');
			$res = $CI->db->get($table);
			$res_arr = $res->row_array();
			return $res_arr['nickname']?$res_arr['nickname']:$res_arr['telephone'];
		}else{
			return 'error';
		}
	}
	/*
	 * 根据invite_code获取用户邀请了多少好友
	 */
	function get_count_by_invite($invite_code='',$table="gr_users"){
		$CI = & get_instance();
		if(!empty($invite_code)){
			$CI->db->where('invite_code',$invite_code);
			$res=$CI->db->count_all_results($table);
			return $res;
		}else{
			return 'error';
		}
	}

	function get_userinfo_by_uid($uid='5',$table="gr_users"){
		$CI = & get_instance();

		$CI->db->where('id',$uid);
		$CI->db->select('id,nickname,telephone,icon');
		$res = $CI->db->get($table);
		$res_arr = $res->row_array();		
		$res_arr['nickname']=$res_arr['nickname']?$res_arr['nickname']:$res_arr['telephone'];
		return $res_arr;

	}


	function get_postinfo_by_infoid($infoid='5',$table="gr_postinfo"){
		$CI = & get_instance();

		$CI->db->where('id',$infoid);
		$CI->db->select('title,start_time');
		$res = $CI->db->get($table);
		$res_arr = $res->row_array();		
		return $res_arr;

	}
	
	function get_uid_by_username($username='',$table="gr_users"){
		$CI = & get_instance();

		if( $username )
		{		
			$CI->db->where('1',1);
			$CI->db->like('nickname',$username);
			$CI->db->select('id');
			$res = $CI->db->get($table);

			$res_arr = $res->result_array();
			foreach( $res_arr as $value )
			{
				$uids[] = $value['id'];
			}
			return $uids;
		}
		else
		{
			return '';
		}
		

	}	
	
   /**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月7日00:27:41
	**
	** 目的：根据用户uid获取用户的姓名
	**
	**/
	function get_company_by_id($id='1',$table="zb_company"){
		$CI = & get_instance();

		!$id && $id=1;
		$CI->db->where('id',$id);
		$CI->db->select('company_name');
		$res = $CI->db->get($table);
		$res_arr = $res->row_array();
		return $res_arr['company_name'];
	} 
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月5日15:34:29
	**
	** 目的：判断是否为移动浏览器访问
	**
	**/
	function if_mobile(){
		if($_SESSION['v']=='pc'){
			 return false;
		}elseif(stristr($_SERVER['HTTP_VIA'],"wap")){// 先检查是否为wap代理，准确度高
       		 return true;
	    }elseif(strpos(strtoupper($_SERVER['HTTP_ACCEPT']),"VND.WAP.WML") > 0){// 检查浏览器是否接受 WML.
	        return true;
	    }elseif(preg_match('/(blackberry|configuration\/cldc|hp |hp-|htc |htc_|htc-|iemobile|kindle|midp|mmp|motorola|mobile|nokia|opera mini|opera |Googlebot-Mobile|YahooSeeker\/M1A1-R2D2|android|iphone|ipod|mobi|palm|palmos|pocket|portalmmm|ppc;|smartphone|sonyericsson|sqh|spv|symbian|treo|up.browser|up.link|vodafone|windows ce|xda |xda_)/i', $_SERVER['HTTP_USER_AGENT'])){//检查USER_AGENT
	        return true;            
	    }elseif($_SESSION['v']=='mb'){
	        return true;   
	    }else {
	    	return false;
	    }

	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月16日06:52:45
	**
	** 目的：检测权限
	**
	**/
	function check_admin_access($admin_id){
		if(empty($admin_id))redirect('cead/login');
		$CI = & get_instance();
		$CI->db->where('id',$admin_id);
		$CI->db->select('access');
		$res = $CI->db->get($CI->admin_user_table);
		$res_arr = $res->row_array();
//print_r($res_arr);exit;		
		if($res_arr['access'] == 'all'){
			return true;
		}elseif(!empty($res_arr))
		{
			if( $CI->uri->segment(1) == 'cead' )
			{
				$now_url = $CI->uri->segment(3) ? $CI->uri->segment(3) : $CI->uri->segment(2);
			}
			else
			{
				$acc_url = array('check_users','user','check_info','event','info','msg','photo');				
				$now_url = strstr($CI->uri->segment(2),'_') ? explode('_',$CI->uri->segment(2)) : $CI->uri->segment(2);
				if( is_array($now_url) )
				{
					$access_url = array_pop($now_url);
					if( in_array($access_url,$acc_url) )
					{
						//$now_url = $access_url;
					}
				}
				else
				{
					if( in_array($now_url,$line_url) )
					{
						$access_url = $now_url;
					}					
				}
			}
			if( empty($access_url) )
			{
				$access_url = $now_url;
			}
//print_r($access_url);exit;
			$CI->db->where('id IN ('.$res_arr['access'].")");
			$CI->db->where("access_path like '%".$access_url."%'");
			$CI->db->select('access_path');
			$res2 = $CI->db->get($CI->admin_access_table);
//	print_r($CI->db->last_query());exit;
			$res2 = $res2->row_array();
			$pref_url = !strstr($_SERVER['HTTP_REFERER'],$access_url) ? $_SERVER['HTTP_REFERER'] : '/cead/site';
		
			if(!empty($res2)){
					return true;
			}else{	
				
				echo "<script>if(confirm('对不起，您刚才操作的页面禁止访问，原因是：您没有权限！'))location.href='".$pref_url."';else location.href='".$pref_url."';</script>"; 
				exit;		
			}
		}else{
				echo "<script>if(confirm('对不起，您刚才操作的页面禁止访问，原因是：您没有权限！'))location.href='".$pref_url."';else location.href='".$pref_url."';</script>";
				exit;
		}		
	}
	/**
	**
	** 作者：杨国良
	**
	** 创建日期：2015年10月16日07:19:15
	**
	** 目的：获取权限列表
	**
	**/
	function get_admin_access($admin_id){
		if(empty($admin_id))redirect('cead/login');
		$CI = & get_instance();
		$CI->db->where('id',$admin_id);
		$CI->db->select('access');
		$res = $CI->db->get($CI->admin_user_table);
		$res_arr = $res->row_array();
		if($res_arr['access'] == 'all'){
			$CI->db->where('1=1');
		}elseif(!empty($res_arr)){
			$CI->db->where("id IN ('".str_replace(",","','",$res_arr['access'])."')");
		}
		$CI->db->where('if_show','1');
		$CI->db->order_by('list_num','desc');
		$CI->db->select('id,access_path,access_name');
		$res2 = $CI->db->get($CI->admin_access_table);
		
		if(!empty($res2)){
			return $res2->result_array();
		}else{
			return false;
		}	
	}

	/**
	 *
	 * TODO:获取管理员权限名称
	 **/
	function get_admin_access_name($admin_id){
		$str="";
		$res=get_admin_access($admin_id);
		if(!empty($res)){
			foreach($res as $one){
				$str .= $one['access_name'].',';
			}
		}
		return substr($str,0,-1);
	}

	/**
	 *
	 * TODO:获取管理员权限ID
	 **/
	function get_admin_access_id($admin_id){
		$id_arr= array();
		$res=get_admin_access($admin_id);
		if(!empty($res)){
			foreach($res as $one){
				$id_arr[]= $one['id'];
			}
		}
		return $id_arr;
	}

	//功能：根据用户输入的Email跳转到相应的电子邮箱首页 
	function gotomail( $mail )
	{ 
		$t=explode('@',$mail); 
		$t=strtolower($t[1]); 
		if($t=='163.com')
		{ 
			return 'mail.163.com'; 
		}
		elseif($t=='vip.163.com')
		{ 
			return 'vip.163.com'; 
		}
		elseif($t=='126.com')
		{ 
			return 'mail.126.com'; 
		}
		elseif($t=='qq.com'||$t=='vip.qq.com'||$t=='foxmail.com')
		{ 
			return 'mail.qq.com'; 
		}
		elseif($t=='gmail.com')
		{ 
			return 'mail.google.com'; 
		}
		elseif($t=='sohu.com')
		{ 
			return 'mail.sohu.com'; 
		}
		elseif($t=='tom.com')
		{ 
			return 'mail.tom.com'; 
		}
		elseif($t=='vip.sina.com')
		{ 
			return 'vip.sina.com'; 
		}
		elseif($t=='sina.com.cn'||$t=='sina.com')
		{ 
			return 'mail.sina.com.cn'; 
		}
		elseif($t=='tom.com')
		{ 
			return 'mail.tom.com'; 
		}
		elseif($t=='yahoo.com.cn'||$t=='yahoo.cn')
		{ 
			return 'mail.cn.yahoo.com'; 
		}
		elseif($t=='tom.com')
		{ 
			return 'mail.tom.com'; 
		}
		elseif($t=='yeah.net')
		{ 
			return 'www.yeah.net'; 
		}
		elseif($t=='21cn.com')
		{ 
			return 'mail.21cn.com'; 
		}
		elseif($t=='hotmail.com')
		{ 
			return 'www.hotmail.com'; 
		}
		elseif($t=='sogou.com')
		{ 
			return 'mail.sogou.com'; 
		}
		elseif($t=='188.com')
		{ 
			return 'www.188.com'; 
		}
		elseif($t=='139.com')
		{ 
			return 'mail.10086.cn'; 
		}
		elseif($t=='189.cn')
		{ 
			return 'webmail15.189.cn/webmail'; 
		}
		elseif($t=='wo.com.cn')
		{ 
			return 'mail.wo.com.cn/smsmail'; 
		}
		elseif($t=='139.com')
		{ 
			return 'mail.10086.cn'; 
		}
		else 
		{ 
			return '#'; 
		} 
	} 

	function make_dirs($dir)
	{
		if(!is_dir($dir)){
			if(!make_dirs(dirname($dir)))
			{
				return false;
			}
			if(!mkdir($dir,0755))
			{
				return false;
			}
		}
		return true;
	}




	/**
	** 从一个数据生成一个表单，可以定义id和class以及其他字段
	**
	**/

	function array_form($key='',$arr='',$id='',$class="",$otherinfo='',$postinfo=''){
		
		$return = '';
		if($arr['type']==''){
			$arr['type']='text';
			$return = $arr['input_name']." : <input type='".$arr['type']."' value='".$postinfo[$key]."' name='".$key."' id='".$id."' class='".$class."' $otherinfo><br>";

		}elseif($arr['type']=='select'){
			if(!empty($arr['select_arr'])){
				$return .= $arr['input_name'].':'."<select name='".$key."' id='".$id."' class='".$class."' $otherinfo>";
				foreach ($arr['select_arr'] as $key2 => $value2) {
					$if_this = ($postinfo[$key]==$key2)?'checked':'';
					$return .="<option value='".$key2."' ".$if_this.">".$value2."</option>";

				}
				$return .= '</select><br>';
			}

		}elseif($arr['type']=='radio'){
			if(!empty($arr['radio_arr'])){
				$return .= $arr['input_name'].':';
				foreach ($arr['radio_arr'] as $key2 => $value2) {
					$if_this = ($postinfo[$key]==$key2)?'checked':'';
					$return .=" <input type='".$arr['type']."' ".$if_this." name='".$key."' value='".$key2."' id='".$id."' class='".$class."' $otherinfo>".$value2;

				}
				$return .= '<br>';
			}
			
		}elseif($arr['type']=='file'){
			$return = $arr['input_name']." : <input type='".$arr['type']."' value='".$postinfo[$key]."' name='".$key."' id='".$id."' class='".$class."' $otherinfo>";
			$return .= '<br>';
		}

		return $return;

	}


	/**
	** 检查表单
	**/
	function check_form($orginal_form='',$submit_form=''){
		$error = '';
		if(!empty($orginal_form) && !empty($submit_form)){
			foreach ($orginal_form as $key => $value) {
				$submit_value=$submit_form[$key];
				if($value['type']=='file'){
					$submit_value = $_FILES[$key]['name'];
				}

				if(!empty($value['check'])){
					//如果要检查就检查一下是否为空
					if(strstr($value['check'],'required')!==false){
						if(empty($submit_value)){
							$error .=$value['input_name']." is required<br>";
						}
					}
					//核对是否是电话
					if(strstr($value['check'],'telephone')!==false){
						if(!preg_match("/^1[34578]\d{9}$/", $submit_value)){
							$error .=$value['input_name']." is not a telephone<br>";
						}
					}

					//核对是否是电话
					if(strstr($value['check'],'number')!==false){
						if(!is_numeric($submit_value)){
							$error .=$value['input_name']." is not a number<br>";
						}
					}


					//核对是否是时间
					if(strstr($value['check'],'time')!==false){
						$ret = strtotime($submit_value);
						if($ret === FALSE){
							$error .=$value['input_name']." is not a right time format<br>";
						}
					}

					//核对是否重复
					if(strstr($value['check'],'repeat')!==false){
						if(!empty($value['repeat'])){
							if($submit_form[$value['repeat']]!=$submit_value)
							$error .=$value['input_name']." is different with ".$orginal_form[$value['repeat']]['input_name']."<br>";
						}
					}
					
				}


				# code...
			}
		}
		return $error;

	}


	/**
	**计算年龄
	**/

	function get_how_old($birthday=''){
		$birthday = $birthday." 00:00:00";
		$age = time()-strtotime($birthday);
		$age = ceil($age/365/24/60/60);
		return $age;
	}


	/**
	**计算倒计时还有多久
	**/

	function get_left_minute($end_time=''){
		$age = $end_time-time();
		$day = floor($age/24/60/60);
		$hour = floor(($age-$day*24*3600)/60/60);
		$minute = floor(($age-$day*24*3600-$hour*3600)/60);
		return $day.'|'.$hour.'|'.$minute;
	}


	/**
	** 粉丝数
	**/

	function get_fans_num($fans_num=1){
		if( $fans_num == '-1')
		{
			return array(1=>'less than 5,000',2=>'5,000-10,000',3=>'10,000-100,000',4=>'100,000+');
		}
		else
		{
			switch ($fans_num) {
				case '1':
					# code...
				return "less than 5,000";
					break;
				case '2':
					# code...
				return "5,000-10,000";
					break;
				case '3':
					# code...
				return "10,000-100,000";
					break;
				case '4':
					# code...
				return "100,000+";
					break;
				case '5':
					# code...
				return "5-10W";
					break;
				case '6':
					# code...
				return "10-20W";
					break;
				
				default:
					return "50W+";
					break;
			}			
		}

	}


	/**
	** 汉语等级
	**/

	function get_hsk_class($hsk_class=1)
	{
		if( $hsk_class == '-1' )
		{
			$hsk = array(
				1 => 'Under Class 4',
				2 => 'Class 4',
				3 => 'Class 5',
				4 => 'Class 6 +',
				);
			return $hsk;
		}
		else
		{		
			switch ($hsk_class) {
				case '1':
					# code...
				return "Under Class 4";
					break;
				case '2':
					# code...
				return "Class 4";
					break;
				case '3':
					# code...
				return "Class 5";
					break;
				case '4':
					# code...
				return "Class 6 +";
					break;
				
				default:
					return "";
					break;
			}
		}
	}
	
	/*
	 * 英语等级  1: Native 2:Excellent 3:Very Good 4:Good 5:Normal 6:Under Normal
	*/
	function get_eng_class($eng_class=1)
	{
		if( $eng_class == '-1' )
		{
			$eng = array(
				1 => 'Native',
				2 => 'Excellent',
				3 => 'Very Good',
				4 => 'Good',
				5 => 'Normal',
				6 => 'Under Normal',
				);
			return $eng;
		}
		else
		{		
			switch ($eng_class) {
				case '1':
					# code...
				return "Native";
					break;
				case '2':
					# code...
				return "Excellent";
					break;
				case '3':
					# code...
				return "Very Good";
					break;
				case '4':
					# code...
				return "Good";
					break;
				case '5':
					# code...
				return "Normal";
					break;
				case '6':
					# code...
				return "Under Normal";
					break;		
				default:
					return "";
					break;
			}
		}
	}

	/****
	*** 星座
	***/

	function get_xingzuo($birthday='1988-05-28'){
				// 检查参数有效性 
		 $birthday = explode('-', $birthday);
		 $month = $birthday[1];
		 $day = $birthday[2];
		 if ($month < 1 || $month > 12 || $day < 1 || $day > 31) return false;

		 // 星座名称以及开始日期
		 $constellations = array(
		  array( "20" => "宝瓶座"),
		  array( "19" => "双鱼座"),
		  array( "21" => "白羊座"),
		  array( "20" => "金牛座"),
		  array( "21" => "双子座"),
		  array( "22" => "巨蟹座"),
		  array( "23" => "狮子座"),
		  array( "23" => "处女座"),
		  array( "23" => "天秤座"),
		  array( "24" => "天蝎座"),
		  array( "22" => "射手座"),
		  array( "22" => "摩羯座")
		 );

		 list($constellation_start, $constellation_name) = each($constellations[(int)$month-1]);

		 if ($day < $constellation_start) list($constellation_start, $constellation_name) = each($constellations[($month -2 < 0) ? $month = 11: $month -= 2]);

		 return $constellation_name;
	}


	function get_if_check($num='1'){
		switch($num){
			case '0':return "待审核";break;
			case '1':return "审核通过";break;
			case '2':return "审核拒绝";break;
			default:return "未知";
		}

	}


	function get_gender($num='1'){
		switch($num){
			case '1':return "男";break;
			case '2':return "女";break;
			default:return "未知";
		}

	}

	function get_dazhou($num=1)
	{
		if( $num == -1 )
		{
			$area = array(
				1=>'Africa',
				2=>'Aisa',
				3=>'America',
				4=>'Europe',
				5=>'Oceania',
				);
			return $area;
		}
		else
		{
			switch($num){
				case '1':return "Africa";break;
				case '2':return "Aisa";break;
				case '3':return "America";break;
				case '4':return "Europe";break;
				case '5':return "Oceania";break;
				default:return "未知";
			}
		}
	}

	function get_free_time($num='1')
	{
		if( $num == '-1' )
		{
			$time = array(
				0 => 'Unknown',
				1 => '1小时及以下',
				2 => '2小时',
				3 => '3小时以及以上',
				);
			return $time;
		}
		switch($num){
			case '1':return "1小时及以下";break;
			case '2':return "2小时";break;
			case '3':return "3小时以及以上";break;
			default:return "Unknown";
		}

	}

	function get_stay_china_year($num='1')
	{
		if( $num == -1 )
		{
			$years = array(
				0=>'Half a year or below',
				1=>'1 Year',
				2=>'2 Years',
				3=>'3 Years',
				4=>'4 Years or above'
				);
			return $years;
		}
		else
		{
			switch($num){
				case '0':return "Half a year or below ";break;
				case '1':return "1 Year";break;
				case '2':return "2 Years";break;
				case '3':return "3 Years";break;
				case '4':return "4 Years or above";break;
				default:return "Unknown";
			}
		}

	}


	function get_if_show_experience($num='1'){
		switch($num){
			case '0':return "无";break;
			case '1':return "有";break;
			default:return "未知";
		}

	}

	function get_if_if($num='1'){
		switch($num){
			case '0':return "否";break;
			case '1':return "是";break;
			default:return "未知";
		}

	}

	function get_info_status($num='1'){
		switch($num){
			case 0 : return '待审核';break;
			case '1':return "Apply";break;
			case '2':return "Underway";break;
			case '3':return "Closed";break;
			case '-1': return 'Closed';break;
			default:return "Unknown";
		}

	}
	function get_xingqi($time=''){
		$ga = date("w",$time); 
switch( $ga ){ 
case 1 : return "MON";break; 
case 2 : return "TUE";break; 
case 3 : return "WED";break; 
case 4 : return "THU";break; 
case 5 : return "FRI";break; 
case 6 : return "SAT";break; 
default : return "SUN"; 
}; 
	}
	function get_info_lives($num='1'){
		switch($num){
			case '1':return "Live & offline";break;
			case '2':return "Live broadcast";break;
			case '3': return 'Offline activity';break;
			default:return "Offline activity";
		}

	}
	
	function get_category($type='1', $key='1')
	{
		$category_en = array(
			1=>'Fashion&Beauty',
			2=>'Social',
			3=>'Career&Business',
			4=>'Book Clubs',
			5=>'Lanugage&Culture',
			6=>'Music',
			7=>'Film',
			8=>'Sci-Fi& Games',
			9=>'Sports&fitness',				
			);
		$category = array(
			1=>'时尚与服饰',
			2=>'社交',
			3=>'职场',
			4=>'读书会友',
			5=>'语言与文化交流',
			6=>'音乐',
			7=>'电影',
			8=>'科技与游戏',
			9=>'健身与运动',
			);		
		if( $type == -1 || $type == '-2' )
		{
			return $type == '-1' ? $category : $category_en;
		}
		else
		{
			return $type == 1 ? $category[$key] : $category_en[$key];
		}

	}	

	function get_tags($tag='1')
	{
			$tags = array(
				1=>'travel',
				2=>'outdoor',
				3=>'food',
				4=>'n . e-commerce',
				5=>'entertainment',
				6=>'Fitness',
				7=>'Beauty industry',
				8=>'Public welfare',
				9=>'Game',
				10=>'Show',
				11=>'sports',
				12=>'cards',
				13=>'Net red',
				14=>'Infant ',
				15=>'clothing',
				16=>'Parenting',
				17=>'teaching',
				18=>'Finance',
				19=>'foreign language',
				20=>'pets',
				21=>'emotion',
				22=>'beauty',
				23=>'Handsome guy',
				24=>'Freaky',
				25=>'uncle',
				26=>'Older',
				27=>'agriculture',
				);		
		if( $tag == -1 )
		{

			return $tags;
		}
		else
		{
			return $tags[$tag];
		}

	}	
	
	function get_lang_tags($tag='1')
	{
			$tags = array(
				1=>'汉语',
				2=>'英语',
				3=>'法语',
				4=>'德语',
				5=>'西班牙语',
				6=>'日语',
				7=>'韩语',
				8=>'印地语',
				9=>'阿拉伯语',
				10=>'葡萄牙语',
				
				101 => '中国',
				102 => '美国',
				103 => '德国',
				104 => '法国',
				105 => '澳大利亚',
				106 => '意大利',
				107 => '泰国',
				108 => '新西兰',
				109 => '法国',
				110 => '印度',
				111 => '西班牙',
				112 => '加拿大',
				113 => '英国',
				114 => '日本',
				115 => '韩国',
				);		
		if( $tag == -1 )
		{
			$return_tag = array();
			foreach( $tags as $key => $value )
			{
				if( $key < 100 )
				{
					$return_tag[$key] = $value ;
				}
			}
			return $return_tag;
		}
		if( $tag == -2 )
		{
			$return_tag = array();
			foreach( $tags as $key => $value )
			{
				if( $key > 100 )
				{
					$return_tag[$key] = $value ;
				}
			}
			return $return_tag;
		}		
		else
		{
			return $tags[$tag];
		}

	}	

	function get_platform($platform='1')
	{
		$category = array(
		    0=>'Unknown',
		    1=>'一直播',
			2=>'斗鱼tv',
			3=>'花椒直播',
//			0=>'暂无',
//			1=>'斗鱼tv',
//			2=>'战旗tv',
//			3=>'花椒直播',
//			4=>'虎牙直播',
//			5=>'映客直播',
//			6=>'熊猫tv',
//			7=>'YY直播',
//			8=>'龙珠直播',
//			9=>'章鱼直播',
//			10=>'一直播',
//			11=>'六间房直播',
//			12=>'咸蛋家',
//			13=>'NOW直播',
//			14=>'来疯直播',
//			15=>'芒果直播',
//			16=>'人人直播',
//			17=>'触手直播',
//			18=>'天天直播',
//			19=>'繁星直播',
//			20=>'风云直播',
//			21=>'9158视频秀',
//			22=>'千帆直播',
//			23=>'网易BOBO',
//			24=>'我秀直播',
//			25=>'ME直播',
//			26=>'95美女秀',
//			27=>'全民tv直播',
//			28=>'KK直播',
//			29=>'美女直播秀',
//			30=>'爱豆直播',
//			31=>'小米直播',
//			32=>'红人直播',
//			33=>'美播',
//			34=>'视吧',
//			35=>'陌陌直播',
//			36=>'喵播',
//			37=>'淘宝直播',
//			38=>'美拍',
			);		
		if( $platform == '-1' )
		{

			return $category;
		}
		else
		{
			return $category[$platform] ;
		}

	}
	
	function generate_platform_url( $key = 0)
	{
		$urls = array(
			1 => 'http://www.yizhibo.com/member/personel/user_info?memberid=',
			2 => 'https://m.douyu.com/',
			3 => 'http://h.huajiao.com/l/profile?uid=',
//			1 => 'https://www.douyu.com/',
//			2 => 'https://www.zhanqi.tv/',
//			3 => 'http://h.open.huajiao.com/l/index?liveid=',
//			4 => 'http://www.huya.com/',
//			5 => 'http://www.inke.cn/live.html?',
//			6 => 'http://www.panda.tv/',
//			7 => 'http://www.yy.com/',
//			8 => 'http://www.longzhu.com/',
//			9 => 'http://www.zhangyu.tv/',
//			10 => 'http://new.yizhibo.com/l/',
//			11 => 'https://v.6.cn/',
//			12 => '',
//			13 => '',
//			14 => '',
//			15 => 'http://www.mgtv.com/rz/',
//			16 => '',
//			17 => '',
//			18 => '',
//			19 => '',
//			20 => '',
//			21 => '',
//			22 => '',
//			23 => '',
//			24 => '',
//			25 => '',
//			26 => '',
//			27 => 'http://www.quanmin.tv/',
//			28 => '',
//			29 => '',
//			30 => 'https://tv.idol001.com/club/idoltv-',
//			31 => '',
//			32 => '',
//			33 => '',
//			34 => '',
//			35 => '',
//			36 => '',
//			37 => 'https://taobaolive.taobao.com/room/index.htm?',
//			38 => 'http://www.meipai.com/live/',
			);
		return $urls[$key];
	}
		
	//生成订单号
	function get_order_number()
	{
		$number = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
		return $number;
	}

	//获取年级
	function get_grade()
	{
		$grade = array('本科一年级','本科二年级','本科三年级','本科四年级','研究生一年级','研究生二年级','研究生三年级','博士生');
		return $grade;
	}
	//获取国家
	function get_country($c)
	{
		if($c=='Africa'){
			return $country=array("Algeria", "Angola", "Benin", "Botswana", "Burkina faso", "Burundi", "Cameroun", "Cape Verde", "Central African", "Chad", "Comores", "Congo(B)", "Congo(K)", "Cote d’Ivoire", "Djibouti", "Egypt", "Equatorial Guinea", "Eritrea", "Ethiopia", "Gabon", "Gambia", "Ghana", "Guine", "Guine-Bissau", "Kenya", "Lesotho", "Liberia", "Libya", "Madagascar", "Malawi", "Mali", "Maroc", "Mauritius", "Mozambique", "Namibia", "Niger", "Nigeria", "Reunion", "Rwanda", "Saint Helena", "Sao Tome and Principe", "Senegal", "Seychelles", "Sierra Leone", "Somali", "South Africa", "Sudan", "Swaziland", "Tanzania", "Togo", "Tunis", "Uganda", "Western Sahara", "Zambia", "Zimbabwe", "Mauritania");
		}else if($c=='Aisa'){
			return $country=array("Afghanistan", "Armenia", "Bangladesh", "Bhutan ", "Burma", "Cambodia", "China", "Cyprus", "East timor", "Georgia ", "India", "Indonesia ", "Iran", "Iraq", "Israel ", "Japan", "Jordan ", "Kuwait", "Laos", "Lebanon ", "Malaysia", "Mongolia", "Nepal", "North Korea", "Oman ", "Pakistan ", "Qatar", "Saudi Arabia", "Singapore", "South Korea", "Sri Lanka", "Syria", "Thailand", "The Philippines", "Turkey", "Vietnam", "azerbaijan", "bahrain", "brunei", "kazakhstan", "kyrgyzstan", "tajikistan ", "the Palestinian", "the maldives", "the united Arab emirates (uae)", "turkmenistan", "uzbekistan ", "yemen ");
		}else if($c=='America'){
				return $country=array("Antigua and Barbuda", "Argentina", "Bahamas", "Barbados", "Belize", "Bolivia", "Brazil", "Canada", "Chile", "Colombia", "Costa Rica", "Cuba", "Dominican Republic", "Dominique", "Ecuador", "El Salvador", "Grenada", "Guatemala", "Guyana", "Haiti", "Honduras", "Jamaica", "Mexico", "Nicaragua", "Panama", "Paraguay", "Peru", "Saint Lucia", "Saint Vincent and the Grenadines", "St. Christopher and Nevis", "Suriname", "Trinidad and Tobago", "United States", "Uruguay", "Venezuela");
		}else if($c=='Europe'){
				return $country=array('Albania ','Azerbaijan ','Ireland ','Estonia ','Andorra ','Austria ','Belarus ','Bulgaria ','Belgium ','Republic of Bosnia and Herzegovina','Poland ','Denmark ','Germany ','Russia ','France ','Vatican ','Finland ','Georgia ','Kazakstan','Netherlands','Kyrgyzstan','Czech Republic','Croatia','Lithuania ','Liechtenstein ','Luxembourg','Romania','Malta ','Yugoslavia','Norway ','Portugal','Macedonia ','Sweden','Switzerland ','Slovakia ','Slovenia ','Tajikistan','Turkmenstan ','Ukraine ','Uzbekistan ','Spain ','Greece','Hungary ','Italy','United Kingdom GB','United Kingdom of Great Britain and Northern Ireland');

		}else if($c=='Oceania'){
				return $country=array("Australia", "Federated States of Micronesia", "Fiji", "Kiribati", "Marshall Islands", "Nauru", "New Zealand","Palau", "Papua New Guinea", "Samoa", "Solomon Islands", "Tonga", "Tuvalu", "Vanuatu");
				
		}

	}
