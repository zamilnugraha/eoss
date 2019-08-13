<? 
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
@session_start();
$ticket_id = $_GET['pid'];
$ticketdetail_id = $_GET['pid'];
$username = $_GET['username'];
$usrlevel = $_SESSION['user_level'];
$usrnik = $_SESSION['user_nik'];
?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">

      <form action="index.php?m=form&a=ncapsubmgr&pid=<?=$_GET['pid']?>" method="post" enctype="multipart/form-data" id="form1" name="form1" onSubmit="return">
        <table width="100%" border="0">
		<tr>
		 <td valign="top">  <span class="note" style="color:red;"></span></td>
            <td valign="top">
			<div style="color:orange;font-weight:bold;text-decoration:underline;">
				Mohon Maaf, Anda Belum Bisa Melakukan Approval untuk tiket ini, Silahkan Menunggu Approval dari ROM Terlebih Dahulu. Terimakasih.
			</div>		
			</td>		
		</tr>	

		</table>
	  </form>	  

<? ?>

<script type="text/javascript">
//add by aryn
	$(document).ready(function() {
			$('#form1').validate({
				rules: {
				/* ticketapprovalstatus_id: { 
						required: true 
				} 
				 ticketapprovalstatus_id2: { 
						required: true 
				} 
				 ticketapprovalstatus_id3: { 
						required: true 
				} */
				
				},
				messages: {			
					
					ticketapprovalstatus_id: {		
						required: "Status Approval Harus Dipilih"
					},
					ticketapprovalstatus_id2: {
						required: "Status Approval Harus Dipilih"
					},
					ticketapprovalstatus_id3: {
						required: "Status Approval Harus Dipilih"
					}					
				}
			});
		});
</script>		
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>