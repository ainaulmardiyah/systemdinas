<?php 
error_reporting(0);
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
display: block;

  float: left;
  left: 50%;
 top: 20%;
  transform: translate(-50%, -50%);
 overflow:hidden;
  width: 100%; /* Full width */
  height: 1000px; /* Full height */
	color:white;
  text-align:center;
}

/* Modal Content/Box */
.modal-content {
	text-align:center;
  background-color: #11cdef;
  margin: 25% auto; /* 15% from the top and centered */
  padding: 25px;
  max-width: 1400px;
     
       
  border: 1px solid #888;
  width: 1400px; /* Could be more or less, depending on screen size */
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


/* Modal Footer */
.modal-footer {
  padding: 2px 16px;
  background-color: #11cdef;
  color: white;
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

tr:hover {background-color: blue;}
@media only screen and (max-width: 480px) {
 
 .inbox-body{
   width: 50%;
 }
 .modal-body {
   width:50%;
 }
 #myModal{
   overflow:scroll;
   border:1;

 }
 table{
    width: 50%;

  }
  div.dataTables_wrapper {
  width: 800px;
  margin: 0 auto;
}
}
 </style>
 
 <div class="midde_cont" style="background-color:#11cdef;color:white">
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
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Rangking Karyawan
                                 </div>
                              </div>
                              <div class="full inbox_inner_section">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full padding_infor_info">
                                          <div class="mail-box">
                                             <aside class="sm-side" >
                                                <div class="user-head" style="background-color:#11cdef;color:white">
                                                   

     
         </div>                   
                         </div>   
						 			 
	   <div id="myModal" class="modal">
						 <div class="modal-content">
 
 

  <div class="modal-header">
    <span class="close">&times;</span>
   
   
   
  </div>
  <div class="">
  <main class="">
    <section>
      <div class="">
        <div class="container">
          <div class="row">
            <div class="">
              <div class="">
                <div class="">
                  <h4 class="font-weight-bolder" style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">nilai log entropy</h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body" style="background-color:white">

                     <!-- dashboard inner -->
               
								  <?php
								  $no = 1;
	?>
                                    <h2>aspek Karyawan  <?=$ranks[0]->emp_name?>
				
                                 </div>
                              </div>
                              <div class="full inbox_inner_section" style="background-color:white">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full padding_infor_info">
                                          <div class="mail-box">
                                             <aside class="sm-side" >
                                                <div class="user-head" style="background-color:#11cdef;color:white">
       <?php
	$no = 1;
	$getone=0;
	$hitung = [];
	
	   for($i=0; $i < 39; $i++){
		  $j=$i+1;
				$datas = $ranks[$i]->jumlah_jawaban_poin + $ranks[$i+1]->jumlah_jawaban_poin +  $ranks[$i+2]->jumlah_jawaban_poin;
				$j=$j+2;
				if($j %3 == 0){
						
					array_push($hitung, $datas);
					
				
				
				}
				
				
				
			}
//print_r($hitung);			
?>
	<a href="<?=site_url('ranking/detail/'.$ranks[0]->id_emp);?>"><button class="btn btn-info" type="button">Kembali</button></a>
			
<table id="example"  class="table table-bordered" style="width:100%">
        <thead >
            <tr style="color:white">
			<th><b>Status Kompetensi</b></th>
				<th><b>nama_aspek</b></th>
			<th><b>max poin aspek</b></th>
			<th><b>poin 3 pertanyaan 1 aspek</b></th>
                <th><b>pertanyaan</b></th>
                <th><b>jawaban</b></th>
				 <th><b>poin</b></th>
				
            </tr>
        </thead>
        <tbody>
		<?php
	foreach ($ranks as $b => $row) { ?>      	
            <tr>
			
		<?php 
			
			if($row->id_pertanyaan  == $no){
			?>
			<td  rowspan="3" style="color:white">
			
			<?php 
			if($hitung[$getone] > $row->nilai_min_kompeten)
			echo "kompeten";
		else{
			echo "tidak kompeten";
		}
			?>
			
			</td>
			<td rowspan="3" style="color:white"><?=$row->nama_aspek?></td>
			 <td rowspan="3" style="color:white">Maksimum : <?=$row->nilai_max_kompeten?><br> Minimum : <?=$row->nilai_min_kompeten?></td>
			  <td rowspan="3" style="color:white"><?=$hitung[$getone]?></td>
			<?php
				$no=$no+3;
$getone =$getone+1;				
			}
			?>
               
                <td style="color:white"><?=$row->desc_pertanyaan?></td>
                <td style="color:white"><?=$row->desc?></td>
				<td style="color:white"> <?=$row->jumlah_jawaban_poin?></td>
           		
            </tr>
			
           <?php
			
			?>	 
       <?php
	 
	}
?>	
        </tbody>
     
    </table>
			
</div>

  <div class="modal-footer">
    
			
</div>			
</div>
<script>
    $(document).ready(function(){
     
        // get Edit Product
       
            $('#myModal').modal('show');

        
        }
  );

  </script>