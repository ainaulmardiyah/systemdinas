<?php 
date_default_timezone_set('Asia/Jakarta');
setlocale(LC_ALL, 'id_ID');
$tgl=date("Y-m-d");
$date = strtotime($tgl);

?>
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
.modal-body {padding: 2px 16px;}

/* Modal Footer */
.modal-footer {
  padding: 2px 16px;
  background-color: #11cdef;
  color: white;
}

.page_title{
        height:80px;
        text-align:center;
        background-color: yellow;
        color:red;
        display: block;
      
    }

    .page_title2{
      
        text-align:center;
        background:yellow;
        color:red;
        font-size:18px;
        font-style:bold;
        display: block;
      
    }
    @media screen and (max-width: 768px) {
   .clinic_version{
      background: #11cdef;
   }
   #graph_head{
    background: #11cdef;
   }
   .navbar{
      background: #11cdef;
margin-right:80px;
   height:200px;
  
}
    .page-title2{
       
        height:300px;
      
    }
  }
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}
 </style>
 
 <div class="midde_cont" style="background-color:#11cdef;color:white">>
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>List Rank</h2>
                           </div>
                        </div>
                     </div>
                     <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                  
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div id="graph_head" class="full graph_head" style="">
                                 <div class="heading1 margin_0">
                                    <h2>Rangking Karyawan
                                 </div>
                              </div>
                              <div class="full inbox_inner_section">
                                 <div class="row table-responsive">
                                    <div class="col-md-12">
                                       <div class="full padding_infor_info">
                                          <div class="mail-box">
                                             <aside class="sm-side" >
                                                <div class="user-head" style="background-color:#11cdef;color:white">
                      
							
<table id="example"  class="table table-bordered" style="width:100%;background-color:#11cdef;color:white">

        <thead >
            <tr>
			<th><b>Nama Karyawan</b></th>
                <th><b>Total Aspek</b></th>
                <th><b>Jumlah Kompeten</b></th>
                <th><b>Jumlah Tidak Kompeten</b></th>
                <th>detail</th>
				
            </tr>
        </thead>
        <tbody>
		<?php
	$no = 1;
  $jumkompeten=0;
  $tidakkompeten=0;
  $fp=5;
  $fn=10;
  
	foreach ($ranks as $b => $row) { 
    $sss =$row->aspek_total * log($row->aspek_total, 2);
    ?>

            <tr>
                <td><?=$row->emp_name?></td>
                <td><?=$row->aspek_total?></td>
                <td><?=$row->jumlah_kompeten?></td>
                <td><?=$row->jumlah_tdk_kompeten?></td>
                 <td colspan="2" style="width:15%"><button type="button" class="btn btn-info btn-sm btn-detail" style="color:white;background-color:#e91e63"  data-name="<?=$row->id_user_ranking;?>" data-id="<?=$row->id_user_ranking;?>"  /> Detail</button></td>
     
            </tr>
           
       <?php
       $jumkompeten=$jumkompeten+$row->jumlah_kompeten;
       $tidakkompeten=$tidakkompeten+$row->jumlah_tdk_kompeten;
	}
  $akurasiok = (($jumkompeten + $tidakkompeten) /($jumkompeten + $tidakkompeten + $fp + $fn))*100;
  $presisiok = (($jumkompeten) /($jumkompeten + $fp)) * 100;
  $recallok = (($jumkompeten) /($jumkompeten + $fn)) * 100;
  ?>


  <div class="page_title2">
                           <center><br><h4><font  color="red"><u>Jumlah Presisi Akurasi dan Recall</u></font> </h4></center>
     <?php                     
  echo  "Akurasi : ".$akurasiok."% <br >";
  echo   "Presisisi : ".$presisiok."% <br >";
  echo "Recall : ".$recallok."% <br >";

?>	
  </div>        </tbody>
        
    </table>

     
         </div>                   
                         </div>   
						 			 
	   <div id="myModal" class="modal">
						 <div class="modal-content">
 
 

  <div class="modal-header">
    <span class="close">&times;</span>
   
   
   
  </div>
  <div class="modal-body">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
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
		
		</tr>
</div>
<div style="color:#11cdef;margin:10" class="form-group row">
		
		<label>Date Start </label>
				<input style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);" type="date" name="tgl_start_cuti"   class="form-control"  value="" required>
		
		</tr>
</div>
<div style="color:#11cdef;margin:10" class="form-group row">
		
		<label>Date End</label>
				<input style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);" type="date" name="tgl_end_cuti"   class="form-control"  value="" required>
		
		</tr>
</div>
		
<div style="color:#11cdef;margin:10" class="form-group row">
		
				<button type="submit" class="btn btn-info" name="add">Simpan</button>
			<a href="<?=site_url('pointjawaban');?>"><button class="btn btn-info" type="button">Kembali</button></a>








			
</div>

  <div class="modal-footer">
    
			
</div>			
</div>
<script>
    $(document).ready(function(){
     
        // get Edit Product
        $('.btn-detail').on('click',function(){
          const id = $(this).data('id');
            // get data from button edit
            window.location.replace("https://quesioner.my.id/dinas/ranking/detail/"+id);
          

        }
        )}
  );
  </script>