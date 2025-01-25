<?php
error_reporting(0);
session_start();
$setemail = $this->session->email;
$setpassword = $this->session->password;
$setiduserlogin = $this->session->iduserlogin;
if($setemail == 'adminakurat876@gmail.com'  && $setpassword== 'adminakurat127765' && $setiduserlogin == '98635')
{

?>
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





th{
  font-size: 12px;
}
th:hover {
  background-color:  yellow;
  overflow: scroll;
  color:red;
}
td:hover {
  background-color:  yellow;
color:white;}
th{
  font-size: 12px;
}
th:hover {
  background-color:  yellow;
  overflow: scroll;
  color:red;
}
table { 
    table-layout:fixed;
}


td { 
    overflow: hidden; 
    text-overflow: ellipsis; 
    word-wrap: break-word;
    
}
td:hover {
  overflow: scroll;
  color:red;
}
@media only screen and (max-width: 480px) {
    /* horizontal scrollbar for tables if mobile screen */
    .tablemobile {
        overflow-x: auto;
        display: block;
    }
 
}
 </style>
 <style>
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
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
             	<center><br><h3><font  color="#11cdef"><u>Point Jawaban List</u></font> </h3><br></center>
					 <a href="<?=site_url('pointjawaban/add/');?>"><button  class="btn btn-info" >Tambah Point Jawaban</button></a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <div class="">
                                 <div class="row">
                                    <div class="">
                                       <div class="full padding_infor_info">
                                          <div class="mail-box">
                                             <aside class="sm-side" >
                                                <div class="user-head" style="background-color:white;">
                                              
              <table id="example"  class="table table-bordered tablemobile" style="width:100%">
                  <thead>
                    <tr>
					<th><font color="#11cdef">No.</th>
					<th><font color="#11cdef">question</th>
					<th><font color="#11cdef">jawaban</th>
					<th><font color="#11cdef">bobot poin</th>
                   
					<th><font color="#11cdef">Edit/Delete</th></font>
                     
                    </tr>
                  </thead>
                  <tbody>
				  <?php
	$no = 1;
	foreach ($kalkmodel as $b => $row) { ?>
			
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                          <img src="<?php echo base_url('assets/img/theme/react.jpg')?>" class="avatar avatar-sm me-3" alt="user1">
                        
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                          
                          </div>
                        </div>
                    
                       <p class="text-xs font-weight-bold mb-0"><?=$no++;?></p>
                      
                      </td>
							 <td>
                       <p class="text-xs font-weight-bold mb-0"><?=$row->question;?></p>
                      
                      </td>
							 <td>
                       <p class="text-xs font-weight-bold mb-0"><?=$row->descjawaban;?></p>
                      
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?=$row->bobotpoin;?></p>
                      
                      </td>
					 
                      <td class="text-xs font-weight-bold mb-0">
                        <a href="<?=site_url('pointjawaban/edit/'.$row->id_poinjwb);?>"><i  style="color:#11cdef"  class="fa fa-edit">Edit</i></a>
				<a  href="<?=site_url('pointjawaban/del/'.$row->id_poinjwb);?>" onclick="return confirm('Yakin akan menghapus data?')"><i  style="color:#11cdef"  class="fa fa-delete">Delete</i></a>
			
                      </td>
                    </tr>
                  <?php	
	} ?> 
                  
                  
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
  $("#tableid").width($(window).width());
  </script>
<script>
  $(document).ready(function() {
  new DataTable('#example', {
    layout: {
        bottomEnd: {
            paging: {
                firstLast: false
            }
        }
    }
});




});
  </script>

<?php
}
else{
    echo "<script>
    alert('Silahkan Login Dulu...');
    window.location.href='admin';
    </script>";
   
  //  echo "Silahkan Login Dulu";
    //redirect('Admin');
}

?>