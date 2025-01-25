<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php 
date_default_timezone_set('Asia/Jakarta');
setlocale(LC_ALL, 'id_ID');
$tgl=date("Y-m-d");
$date = strtotime($tgl);

?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>


  <meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: absolute;
  float: left;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
 overflow:hidde;
  width: 100%; /* Full width */
  height: 100%; /* Full height */

  text-align:center;
}

/* Modal Content/Box */
.modal-content {
	text-align:center;
  background-color: #11cdef;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 25px;
  max-width: 500px;
     
        border-radius: 8px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
   animation-name: animatetop;
  animation-duration: 0.4s
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
/* Modal Header */
.modal-header {
  padding: 2px 16px;
  background-color: #11cdef;
  color: white;
}

/* Modal Body */
.modal-body {
   width:1350px;
}

/* Modal Footer */
.modal-footer {
  padding: 2px 16px;
  background-color: #11cdef;
  color: white;
}




tr:hover {background-color: coral;}
@media only screen and (max-width: 767px) {
 
 .inbox-body{
   width: 200px;
 }
 .modal-body {
   width:300px;
 }
 table{
    width: 480px;

  }
  div.dataTables_wrapper {
  width: 800px;
  margin: 0 auto;
}
}

th{
  font-size: 12px;
}
th:hover {
  background-color:  yellow;
  overflow: scroll;
  color:red;
}
th, td, tr {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

td:hover {
  background-color:  yellow;
  overflow: scroll;
color:red;}
table { 
    table-layout:fixed;
}


td { 
    overflow: hidden; 
    text-overflow: ellipsis; 
    word-wrap: break-word;
}

@media only screen and (max-width: 480px) {
    /* horizontal scrollbar for tables if mobile screen */
    .tablemobile {
      overflow: scroll;
        display: block;
        width:200px;
    }
}

  @media screen and (max-width: 480px) and (orientation: portrait){

html { 
    max-width: 480px;
}


}
@include media-breakpoint-up(sm) {
  table{
    max-width: 480px;

  }
}
@media (min-width: 576px) and (max-width: 1199.98px) { 
  table{
    max-width: 480px;

  }
}
 </style>
    <div id="myModal" class="modal">
    <script>
  $("#tableid").width($(window).width());
  </script>

<!-- Modal content -->
    
    <!-- Modal content -->
                                        
<div class="modal-content">
 
 

  <div class="modal-header">
 <a href="<?=site_url('cuti');?>" > <span class="yellow" style="color:yellow;font-size:23px">close&times;</span></a>
   
  </div>
  <div class="modal-body">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
    
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder" style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">Add Mail</h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">

<?php echo form_open('cuti/prosesadd'); ?>
	

<div style="color:#11cdef;margin:10" class="form-group row">
	<label>Subject</label>
				<input style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);" type="text" name="subject"    class="form-control"  value="" required>
		
</div>
<div  style="color:#11cdef;margin:10" class="form-group row">
		
		<label>Messages</label>
				<input rows="10" style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);" type="text" name="messages"   class="form-control"  value="" required>
		
	
</div>
<div style="color:#11cdef;margin:10" class="form-group row">
		
		<label>Date Start </label>
				<input style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);" type="date" name="tgl_start_cuti"   class="form-control"  value="" required>
		
	
</div>
<div style="color:#11cdef;margin:10" class="form-group row">
		
		<label>Date End</label>
				<input style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);" type="date" name="tgl_end_cuti"   class="form-control"  value="" required>
		
	
</div>
		
<div style="color:#11cdef;" class="form-group row">
		
				<button type="submit" class="btn btn-info" name="add">Simpan</button>
				<a href="<?=site_url('cuti');?>"><button style="margin-top:84px;" class="btn btn-info" type="button">Kembali</button></a>
			
</div></div>  
 </div>	    </div>
                                    </div>
                                 </div>
                              </div>
                           </div> 
  <div class="modal-footer">
    
  </div>	        <!-- Modal -->
                                                </div>
                           </div>
			   <div class="midde_cont" style="background-color:#11cdef;color:white">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>List Cuti</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
					   <div class="col-md-12 col-lg-12">
 <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                  
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Email Box</h2>
                                 </div>
                              </div>
                              <div class="full inbox_inner_section">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full padding_infor_info">
                                          <div class="mail-box">
                                             <aside class="sm-side" >
                                                <div class="user-head" style="background-color:#11cdef;color:white">
                                                   <a class="inbox-avatar" href="javascript:;">
												   <?php
												   	$username_staf = $this->session->username;
													$foto = $this->session->foto;
											
                                       if($foto == null){
         ?>
   <img src="<?php echo base_url('assets/ig.png')?>" style="height:80px;width:80px" onclick="myfunctionhover(this.src)">
<?php
      }
      else{
         ?>
                                                   <img  width="65" src="<?php echo base_url('assets/asetslider/login/sendergrup/'.$foto)?>" alt="#" />
                                                  <?php
      }
      ?>
                                                </a>
												   
                                                   <div class="user-name" >
                                                      <h5><a href="#"><?=$username_staf?></a></h5>
                                                      <span><a href="#"></a></span>
                                                   </div>
                                                </div>
                                                                              <?php
                                          $level = $this->session->level;	
                                          if($level == 'staf' or $level == 'kepala_bidang'){
                                          ?>
                                                <div class="inbox-body" >
                                                   <a href="#myModal" style="background-color:#11cdef;color:white" data-toggle="modal" title="Compose" class="btn btn-compose">
                                                   Compose
                                                   </a>
                                                   <?php
                                                   }
                                                   ?>
												
												<?php
			
				if($level == 'kepala_dinas'){
				?>
                                                <ul class="nav nav-pills nav-stacked labels-category inbox-divider">
												   
                                                   <li>
                                                      <h4>Categories</h4>
                                                   </li>
												   
                                                   <li style="background-color:#11cdef;color:white"><a style="background-color:#11cdef;color:white" href="<?=site_url('cuti/index');?>"><i class="fa fa-plane" ></i> Inbox</a></li>
                                                   <li style="background-color:#11cdef;color:white"><a style="background-color:#11cdef;color:white" href="<?=site_url('cuti/starmail');?>"><i class="fa fa-plane"></i> Star</a></li>
                                                   <li style="background-color:#11cdef;color:white"><a style="background-color:#11cdef;color:white" href="<?=site_url('cuti/draftmail');?>"><i class="fa fa-plane"></i> Draft</a></li>
                                                   <li style="background-color:#11cdef;color:white"><a style="background-color:#11cdef;color:white" href="<?=site_url('cuti/sentmail');?>"><i class="fa fa-plane"></i> Sent</a></li>
                                                   <li style="background-color:#11cdef;color:white"><a style="background-color:#11cdef;color:white" href="<?=site_url('cuti/trashmail');?>"><i class="fa fa-plane"></i> Trash</a></li>
                                             										   
												</ul>
                                                <?php
													}
                                       else{
                                          ?>	 
                                           <ul class="nav nav-pills nav-stacked labels-category inbox-divider">
												   
                                       <li>
                                          <h4>Categories</h4>
                                       </li>
                           
                                       <li style="background-color:#11cdef;color:white"><a style="background-color:#11cdef;color:white" href="<?=site_url('cuti/starmail');?>"><i class="fa fa-plane" ></i> Star</a></li>
                                       <li style="background-color:#11cdef;color:white"><a style="background-color:#11cdef;color:white" href="<?=site_url('cuti/unstarmail');?>"><i class="fa fa-plane"></i> UnStar</a></li>
                                                             
                        </ul>
                                          <?php	
                                       }
												?>	
                                             </aside>
                                                <div  class="inbox-head" style="background-color:#11cdef;color:white" >
                                                   <h3  > <font color="white">Inbox </font></h3>
                                                  
                                                </div>
                                            
					<div class="table-responsive">							                                     
             <table id="example"  class="table table-bordered tablemobile" style="width:100%">
        <thead>
            <tr style="hover:coral;">
			 <th style="background-color:#11cdef;color:white;">Nama</th>
                <th style="background-color:#11cdef;color:white">Subject</th>
                <th style="background-color:#11cdef;color:white">Messages</th>
                <th style="background-color:#11cdef;color:white">Tanggal Cuti</th>
                <th style="background-color:#11cdef;color:white">Status</th>
				<?php
				 if($level == 'staf' or $level == 'kepala_bidang'){
				?>
				 <th style="background-color:#11cdef;color:white">star mail</th>
				  <th style="background-color:#11cdef;color:white">label mail</th>
<?php				
				}
				?>
				<?php
				//$level = $this->session->level;	
				if($level == 'kepala_dinas'){
				?>
				 <th style="background-color:#11cdef;color:white">Action Approve</th>
				 <th style="background-color:#11cdef;color:white">Email Status</th>
				 <th style="background-color:#11cdef;color:white">Mail Action</th>
<?php				
				}
				?>
               
            </tr>
        </thead>
        <tbody>
		<?php
	$no = 1;
	$gets=$this->uri->segment(3);
	foreach ($cuti as $b => $row) {
		?>
            <tr>
                <td style="background-color:#11cdef;color:white"><?=$row->emp_name?></td>
                <td style="background-color:#11cdef;color:white"><?=$row->subject?></td>
                <td style="background-color:#11cdef;color:white"><?=$row->messages?></td>
                <td style="background-color:#11cdef;color:white"><?=$row->tgl_start_cuti?> - <?=$row->tgl_end_cuti?></td>
                <td style="background-color:#11cdef;color:white"><?=$row->status?>
				
				</td> 
				<?php
				 if($level == 'kepala_dinas'){
					
				?>
				<td style="background-color:#11cdef;color:white">
				<a href="<?=site_url('cuti/adminapprove/'.$row->id_cuti);?>"><i class="fa fa-check" aria-hidden="true" style="color:red" ></i></a>
					<a href="<?=site_url('cuti/adminreject/'.$row->id_cuti);?>"><i class="fa fa-ban" aria-hidden="true" style="color:red" ></i></a>
				</td>
				<?php
				 }
				 ?>
				
				<?php
				 if($level == 'staf' or $level == 'kepala_bidang'){
					 if($row->star == 'star'){
				?>
              <td style="background-color:white;color:red"> <i class="fa fa-star" aria-hidden="true"></i></td>
                  <td style="background-color:white;color:red"><i class="fa fa-envelope" aria-hidden="true"></i>                             
		
				 <?php				
					 }
					 else{
						 ?>

<td style="background-color:white;color:red"> 
				 <a href="<?=site_url('cuti/star/'.$row->id_cuti);?>"><i class="fa fa-star"  style="color:grey"  aria-hidden="false"></i></td>
                  <td style="background-color:white;color:red"><i class="fa fa-envelope" aria-hidden="true"></i></td>                               
					
							</td>  
				 
	</div>
                           </div>
						   
						   
						   
						   
						   
						   
<script> 
function selectit(obj) 
  {
    var id = $(obj).val();

		
		
		  $.ajax({  
				    headers: {
						 'Accept': 'application/json',
						'Content-Type': 'application/json',
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  },
						type: "POST", 
            global:            false,
            async:             true,
      
						contentType:"application/json; charset=utf-8",
						dataType:"json",				
						url:"<?php echo site_url('cuti/labeling/'.$row->id_cuti);?>",					   
					   data: {
					
						'id' :id,
					   },
					  
					
						success: function (response) {
							alert('success'+question);
							console.log(response);
						},
						error: function () {
							
							alert('success'+question);
							console.log(response);
						}
					    
				   });
  }
</script>				
				
						 <?php
					 }
				}
				?>
				<?php
				
				if($level == 'kepala_dinas'){
				?>
				<td style="background-color:#11cdef;color:white"><?=$row->email_status?></td>
				<td style="background-color:#11cdef;color:white">
				<a href="<?=site_url('cuti/admininbox/'.$row->id_cuti);?>"><i class="fa fa-envelope"  style="color:red"  aria-hidden="false"></i>
				
				<a href="<?=site_url('cuti/adminstar/'.$row->id_cuti);?>"><i class="fa fa-star"  style="color:red"  aria-hidden="false"></i>
				<a href="<?=site_url('cuti/admindraft/'.$row->id_cuti);?>"><i class="fa fa-edit"  style="color:red"  aria-hidden="false"></i>
				<a href="<?=site_url('cuti/adminsent/'.$row->id_cuti);?>"><i class="fa fa-paper-plane"  style="color:red"  aria-hidden="false"></i>
				<a href="<?=site_url('cuti/admintrash/'.$row->id_cuti);?>"><i class="fa fa-trash"  style="color:red"  aria-hidden="false"></i>
				
				</td>
<?php				
				}
            
				?>
				
            </tr>
           
       <?php
	}
?>	
        </tbody>
      
    </table>
                                                </div> </div>
                                             </aside>
                                          </div>
                                   
                     
                        <!-- table section -->
                     </div>
                  </div>