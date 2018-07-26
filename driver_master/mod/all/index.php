 <? //  include ("load/loading/page_mod.php");?> 

<style>
 
.outer-loading-mod {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999; background-color: rgba(255, 255, 255, 0.9) !important;
 
}

.inner-loading {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
	    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
	background:none;    
}

 .navload {
  display: block;
  background-color: #f7f7f7;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f7f7), to(#e7e7e7));
  background-image: -webkit-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -moz-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -ms-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -o-linear-gradient(top, #f7f7f7, #e7e7e7); 
color: #3C8DBC;
 
  width:  60px;
  height: 60px;
 
  text-align: center;
 
  border-radius: 50%;
  box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
}


</style>


 <script>
 var load_main_mod='<div class="outer-loading-mod"   id="main_index_load_page_mod"><div class="inner-loading"><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div></div></div>';
</script>


 <script>
 var load_main_mod_table='<br><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div';
 
 
  ///var load_main_mod_table='';
</script>
 



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="calendar/css/smoothness/main.css"> 
<script src="js/jquery-main.js"></script> 
<script   src="calendar/js/th.js"></script>

<style>
.ui-datepicker {
    width: 90%; max-width:400px;
    padding: 0; left:0px; z-index:999;
  }
  .ui-widget {
    font-size: 16px;  
  }
  .ui-datepicker table {
    font-size:18px; 
  }
</style>

<script>


$(document).ready(function() {
 var url_place_th = "go.php?name=load/all&daytype=all&file=index&find=day&day="+$("#date_report").val()+"&sort="+$("#work_sort").val()+"&work_type="+$("#work_type").val()+"&work_day="+$("#work_day").val()+"";
 
 $('#load_th').html(load_main_mod_table);
 $('#load_th').load(url_place_th); 


});


 
  $(function(){
 
	$("#date_report").datepicker({ dateFormat: 'yy-mm-dd',
	dateFormat: 'yy-mm-dd',
	todayHighlight: true,
	minDate: new Date('2018-01-01'), //
	maxDate: '+1Y',
	//showOn: "both", 
	// buttonImage: 'calendar/dateselect.gif',
	//buttonText: "<i class='fa fa-calendar'></i>",
	// buttonImageOnly: true ,    
  numberOfMonths: 1,
  onSelect: function(dateText, inst) {
  
//$('.loader').show();
 var date_report = $("#date_report").val();
	//alert(date_report);
	
	$('#load_cn').hide();
	
	//var url_place_th = "go.php?name=load/all&file=all&server=th&day="+$("#date_report").val()+"";
 var url_place_th = "go.php?name=load/all&daytype=all&file=index&find=day&day="+$("#date_report").val()+"&sort="+$("#work_sort").val()+"&work_type="+$("#work_type").val()+"&work_day="+$("#work_day").val()+"";
	
	 
	
	
	$('#load_th').show();
	$('#load_th').html(load_main_mod_table);
	$('#load_th').load(url_place_th); 
 
		

    }
	 
	 }
 
	);
 
});









  </script> 
 
 
 

<div  style=" font-size:20px; font-weight:bold; background-color:#FFF; padding:1PX;border-radius: 0px;   margin:0px;margin-top:0px;border-radius:25px;border :  2px solid #DADADA; padding:10PX;    " >

<div class="form-group">
                <label class="font_20"><i class="fa fa-calendar" style="font-size: 20px; color:#999999"></i> เลือกวันที่</label>

                <div class="input-group date">
   
                  <input type="text" class="form-control pull-right" value="<?=date('Y-m-d');?>"  name="date_report" id="date_report"  readonly="true" style="background-color:#FFFFFF; height:40px; font-size:24px ">               <div class="input-group-addon"  id="btn_calendar" style="cursor:pointer ">
                     <i class="fa fa-calendar" style="font-size:24px; "></i> 
                  </div>
                </div>
                <!-- /.input group -->
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div id="box_find" style="display:noned">
                
                
                
                
                
                
                
                
    
                <div style="margin-top:10px;" >
                
                
                 <label class="font_20"><i class="fa fa-check-circle-o" style="font-size: 20px; color:#999999"></i> การเรียงลำดับงาน</label>
              <select name="work_sort" size="0"    id="work_sort"  class="form-control"  style="font-size:20px;   margin-left:0px; height:40px; " >
 
  <option value="all" selected="selected"  >งานทั้งหมดตามเวลารับ</option>		
 
 <option value="no" >งานไม่สำเร็จอยู่ด้านบน</option>
		
<option value="yes" >งานสำเร็จอยู่ด้านบน</option>
              
                       
 
                       
</select>  
                </div>
                


    
                <div style="margin-top:10px;" >
                 <label class="font_20"><i class="fa fa fa-clock-o" style="font-size: 20px; color:#999999"></i> การเรียงเวลางาน</label>
              <select name="work_day" size="0"    id="work_day"  class="form-control"  style="font-size:20px;   margin-left:0px; height:40px; " >
 
  <option value="0" selected="selected"  >ฝ่ายจัดรถ</option>		
 
 <option value="1" >ตามเวลาจริง</option>
 
              
                       
 
                       
</select>  
                </div>
                



<div style="margin-top:10px;" >
                 <label class="font_20"><i class="fa fa fa-car" style="font-size: 20px; color:#999999"></i> ประเภทงาน</label>
              <select name="work_type" size="0"    id="work_type"  class="form-control"  style="font-size:20px;   margin-left:0px; height:40px; " >
 
  <option value="all" selected="selected"  >ทุกประเภท</option>		
 
 <option value="private" >งานไพรเวท</option>
 <option value="join" >งานจอย</option>
 
              
                       
 
                       
</select>  
                </div>


 
</div>
 
 
 
                
                
                
       </div>         
                
                
 
              </div>
<script type="text/javascript">
$(document).ready(function() {
    $("#datepicker").datepicker();
});
// $('#date_report').datepick({altField: '#star_cal' 	, dateFormat: 'yyyy-mm-dd' 	, showTrigger: '#calImgInx' }); 

$("#btn_calendar").click(function(){
 
 $('#date_report').datepicker('show'); 

});

 


 

/*
var url_place_th = "go.php?name=load/all&file=all&server=th&day="+$("#date_report").val()+"";
	$('#load_th').show();
	$('#load_th').load('load/page/loading.php');
	$('#load_th').load(url_place_th); 
	/*
	//// cn
		var url_place_cn = "go.php?name=load/all&file=all&server=cn&day="+$("#date_report").val()+"";
	$('#load_cn').show();
	$('#load_cn').load('load/page/loading.php');
	$('#load_cn').load(url_place_cn); 
	//$('.loader').show();


*/


$( "#work_sort" ).change(function() {
 
 var url_place_th = "go.php?name=load/all&daytype=all&file=index&find=day&day="+$("#date_report").val()+"&sort="+$("#work_sort").val()+"&work_type="+$("#work_type").val()+"&work_day="+$("#work_day").val()+"";
	
	
	
 
 
	$('#load_th').show();
	$('#load_th').html(load_main_mod_table);
	$('#load_th').load(url_place_th); 
 
});


$( "#work_day" ).change(function() {
 
 var url_place_th = "go.php?name=load/all&daytype=all&file=index&find=day&day="+$("#date_report").val()+"&sort="+$("#work_sort").val()+"&work_type="+$("#work_type").val()+"&work_day="+$("#work_day").val()+"";
	///alert(url_place_th);
 
	$('#load_th').show();
	$('#load_th').html(load_main_mod_table);
	$('#load_th').load(url_place_th); 
 
});



$( "#work_type" ).change(function() {
 
 var url_place_th = "go.php?name=load/all&daytype=all&file=index&find=day&day="+$("#date_report").val()+"&sort="+$("#work_sort").val()+"&work_type="+$("#work_type").val()+"&work_day="+$("#work_day").val()+"";
	///alert(url_place_th);
 
	$('#load_th').show();
	$('#load_th').html(load_main_mod_table);
	$('#load_th').load(url_place_th); 
 
});

        
</script> 
 
 
 
 
 
 
 
 
 <br>

 

 <div  id="load_th"  > 
</div>

 

<style>
.form-group { background:none;

}

</style>

