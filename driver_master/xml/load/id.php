<?
///// to place
$driver_data_load = new DOMDocument(); 
@$driver_data_load->load( '../data/xml/driver/all/'.$xml_load_driver.'.xml' ); 
//echo $xml_load_driver;
$driver_data_xml = $driver_data_load->getElementsByTagName( "driver" ); 
foreach( $driver_data_xml as $load) 
{ 

 $arr[web_driver][id]=$load->getElementsByTagName('id')->item(0)->nodeValue;
$arr[web_driver][category]=$load->getElementsByTagName('category')->item(0)->nodeValue;
$arr[web_driver][nickname]=$load->getElementsByTagName('nickname')->item(0)->nodeValue;
$arr[web_driver][birthday]=$load->getElementsByTagName('birthday')->item(0)->nodeValue;
$arr[web_driver][star]=$load->getElementsByTagName('star')->item(0)->nodeValue;
$arr[web_driver][topic]=$load->getElementsByTagName('topic')->item(0)->nodeValue;
$arr[web_driver][topic_en]=$load->getElementsByTagName('topic_en')->item(0)->nodeValue;
$arr[web_driver][detail]=$load->getElementsByTagName('detail')->item(0)->nodeValue;
$arr[web_driver][feature]=$load->getElementsByTagName('feature')->item(0)->nodeValue;
$arr[web_driver][posted]=$load->getElementsByTagName('posted')->item(0)->nodeValue;
$arr[web_driver][post_date]=$load->getElementsByTagName('post_date')->item(0)->nodeValue;
$arr[web_driver][update_date]=$load->getElementsByTagName('update_date')->item(0)->nodeValue;
$arr[web_driver][service]=$load->getElementsByTagName('service')->item(0)->nodeValue;
$arr[web_driver][pageview]=$load->getElementsByTagName('pageview')->item(0)->nodeValue;
$arr[web_driver][phone_back]=$load->getElementsByTagName('phone_back')->item(0)->nodeValue;
$arr[web_driver][phone]=$load->getElementsByTagName('phone')->item(0)->nodeValue;
$arr[web_driver][start_work]=$load->getElementsByTagName('start_work')->item(0)->nodeValue;
$arr[web_driver][name]=$load->getElementsByTagName('name')->item(0)->nodeValue;
$arr[web_driver][idcard]=$load->getElementsByTagName('idcard')->item(0)->nodeValue;
$arr[web_driver][iddriving]=$load->getElementsByTagName('iddriving')->item(0)->nodeValue;
$arr[web_driver][idcard_finish]=$load->getElementsByTagName('idcard_finish')->item(0)->nodeValue;
$arr[web_driver][iddriving_finish]=$load->getElementsByTagName('iddriving_finish')->item(0)->nodeValue;
$arr[web_driver][contact]=$load->getElementsByTagName('contact')->item(0)->nodeValue;
$arr[web_driver][contact_phone]=$load->getElementsByTagName('contact_phone')->item(0)->nodeValue;
$arr[web_driver][status]=$load->getElementsByTagName('status')->item(0)->nodeValue;
$arr[web_driver][email]=$load->getElementsByTagName('email')->item(0)->nodeValue;
$arr[web_driver][address]=$load->getElementsByTagName('address')->item(0)->nodeValue;
$arr[web_driver][car_num]=$load->getElementsByTagName('car_num')->item(0)->nodeValue;
$arr[web_driver][company]=$load->getElementsByTagName('company')->item(0)->nodeValue;
$arr[web_driver][name_en]=$load->getElementsByTagName('name_en')->item(0)->nodeValue;
$arr[web_driver][wechat_id]=$load->getElementsByTagName('wechat_id')->item(0)->nodeValue;
$arr[web_driver][line_id]=$load->getElementsByTagName('line_id')->item(0)->nodeValue;
$arr[web_driver][skype_id]=$load->getElementsByTagName('skype_id')->item(0)->nodeValue;
$arr[web_driver][whatsapp_id]=$load->getElementsByTagName('whatsapp_id')->item(0)->nodeValue;
$arr[web_driver][username]=$load->getElementsByTagName('username')->item(0)->nodeValue;
$arr[web_driver][password]=$load->getElementsByTagName('password')->item(0)->nodeValue;
$arr[web_driver][pic_card]=$load->getElementsByTagName('pic_card')->item(0)->nodeValue;
$arr[web_driver][pic_driver]=$load->getElementsByTagName('pic_driver')->item(0)->nodeValue;
$arr[web_driver][pic_home]=$load->getElementsByTagName('pic_home')->item(0)->nodeValue;
$arr[web_driver][pic_job]=$load->getElementsByTagName('pic_job')->item(0)->nodeValue;
$arr[web_driver][pic_main]=$load->getElementsByTagName('pic_main')->item(0)->nodeValue;
$arr[web_driver][pic_qr_line]=$load->getElementsByTagName('pic_qr_line')->item(0)->nodeValue;
$arr[web_driver][pic_qr_wechat]=$load->getElementsByTagName('pic_qr_wechat')->item(0)->nodeValue;
$arr[web_driver][pic_qr_whatsapp]=$load->getElementsByTagName('pic_qr_whatsapp')->item(0)->nodeValue;
$arr[web_driver][zello_id]=$load->getElementsByTagName('zello_id')->item(0)->nodeValue;
$arr[web_driver][pay_bank_name]=$load->getElementsByTagName('pay_bank_name')->item(0)->nodeValue;
$arr[web_driver][pay_bank]=$load->getElementsByTagName('pay_bank')->item(0)->nodeValue;
$arr[web_driver][pay_bank_sub]=$load->getElementsByTagName('pay_bank_sub')->item(0)->nodeValue;
$arr[web_driver][pay_bank_number]=$load->getElementsByTagName('pay_bank_number')->item(0)->nodeValue;
$arr[web_driver][main_company]=$load->getElementsByTagName('main_company')->item(0)->nodeValue;
$arr[web_driver][alert_new_work]=$load->getElementsByTagName('alert_new_work')->item(0)->nodeValue;
$arr[web_driver][alert_change_work]=$load->getElementsByTagName('alert_change_work')->item(0)->nodeValue;
$arr[web_driver][alert_lab_call]=$load->getElementsByTagName('alert_lab_call')->item(0)->nodeValue;
$arr[web_driver][alert_lab_call_terminal]=$load->getElementsByTagName('alert_lab_call_terminal')->item(0)->nodeValue;
$arr[web_driver][alert_cancel_work]=$load->getElementsByTagName('alert_cancel_work')->item(0)->nodeValue;
$arr[web_driver][alert_cancel_work_time]=$load->getElementsByTagName('alert_cancel_work_time')->item(0)->nodeValue;
$arr[web_driver][check_alert_new_work]=$load->getElementsByTagName('check_alert_new_work')->item(0)->nodeValue;
$arr[web_driver][check_alert_change_work]=$load->getElementsByTagName('check_alert_change_work')->item(0)->nodeValue;
$arr[web_driver][check_alert_lab_call]=$load->getElementsByTagName('check_alert_lab_call')->item(0)->nodeValue;
 $arr[web_driver][code_login]=$load->getElementsByTagName('code_login')->item(0)->nodeValue;
$arr[web_driver][salary]=$load->getElementsByTagName('salary')->item(0)->nodeValue;
$arr[web_driver][social_money]=$load->getElementsByTagName('social_money')->item(0)->nodeValue;
$arr[web_driver][work_stop]=$load->getElementsByTagName('work_stop')->item(0)->nodeValue;
$arr[web_driver][start_h]=$load->getElementsByTagName('start_h')->item(0)->nodeValue;
$arr[web_driver][start_m]=$load->getElementsByTagName('start_m')->item(0)->nodeValue;
$arr[web_driver][finish_h]=$load->getElementsByTagName('finish_h')->item(0)->nodeValue;
$arr[web_driver][finish_m]=$load->getElementsByTagName('finish_m')->item(0)->nodeValue;

/////
 
$arr[web_driver][finish_m]=$load->getElementsByTagName('finish_m')->item(0)->nodeValue;

 
} 
 
?>


