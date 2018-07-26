
<style type="text/css">
<!--
.stylejob {
	font-size: 20px  ;
	font-weight: bold;
}
-->
.maintb { width:100%; border-bottom:dashed 1px #000000; padding-top:0px; padding-bottom:0px; float:left;}
body,td,th {
	font-size: 12px;
	color: #000000;
}
.stylehead {font-size: 14; font-weight: bold; color: #000000; }
</style>


<table width="750" border="0" cellspacing="0" cellpadding="0">
           <tr>
             <td>
              
               <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                 <tr> <td height="1" colspan="4" bgcolor="#FFFFFF" class="maintb"></td></tr>
                 <tr>
                   <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                         <tr>
                           <td width="5%" align="center" valign="bottom"><span class="stylehead">Time</span></td>
                           <td width="8%" align="center" valign="bottom"><span class="stylehead">Flight</span></td>
                           <td width="30%" align="center" valign="bottom"><span class="stylehead">Guest</span></td>
                           <td width="5%" align="center" valign="bottom"><span class="stylehead">Pax</span></td>
                           <td width="25%" align="center" valign="bottom"><span class="stylehead">place</span></td>
                           <td width="27%" align="center" valign="bottom" ><span class="stylehead">Driver</span></td>
                         </tr>

                       </table></td>
                     </tr><td height="1" colspan="4" bgcolor="#FFFFFF" class="maintb"></td>
                     <tr>
                       <td><table width="100%" border="0" cellspacing="3" cellpadding="2">

                         <tr>
                           <td width="5%" align="center" valign="top"><? echo $arr[project][airout_time];?></td>
                           <td width="8%" align="center" valign="top"><?echo $arr[project][air];?><br />
                             <? echo $arr[project][airin_time];?></td>
                           <td width="30%" align="center" valign="top"><?echo $arr[book][guest];?></td>
                           <td width="5%" align="center" valign="top"><?echo $arr[project][pax];?></td>
                           <td width="25%" align="center" valign="top"><strong>From : </strong><?echo $arr[place][topic];?><br />
                               <strong>Tel : </strong><?echo $arr[place][phone];?><br />
                             <strong>Room :</strong> 
                             <? if($arr[projectlist][airroom]=="") {echo "N/A";} else { echo $arr[projectlist][airroom];} ?>
                             <br />
                           <strong>To :</strong> <?echo $arr[to][topic];?><br />
                           <strong>Tel : </strong><?echo $arr[to][phone];?></td>
                           <td width="27%" align="center" valign="top"><strong>Name :</strong> <?echo $arr[driver][name];?><br />
                             <strong>Phone :</strong> <?echo $arr[driver][phone];?></td>
                         </tr>
                       </table></td>
                     </tr>
                   </table></td>
                 </tr><td height="1" colspan="4" bgcolor="#FFFFFF" class="maintb"></td>
                 <tr>
                   <td align="center"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="5" bgcolor="#F1F2F2">
                     <tr>
                       <td width="10%">*<strong>Remark</strong></td>
                       <td><?echo $arr[project][remark];?></td>
                     </tr>
                   </table></td>
                 </tr>
               </table>
               <table width="100%" border="0" cellspacing="3" cellpadding="0">
                 <tr> </tr>
               </table></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
           </tr>
         </table>
         