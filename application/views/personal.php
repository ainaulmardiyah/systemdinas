
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <style>


        body, html {
            height: 100%;
            margin: 0;
            background: #7F7FD5;
            background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        }

        .chat {
            margin-top: auto;
            margin-bottom: auto;
        }

        .card {
            height: 500px;
            border-radius: 15px !important;
            background-color: rgba(0,0,0,0.4) !important;
        }

        .contacts_body {
            padding: 0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }

        .msg_card_body {
            overflow-y: auto;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }

        .card-footer {
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }
        form{
           
          
        }

        .container {
            align-content: center;
        }

        .search {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border: 0 !important;
            color: white !important;
        }

            .search:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

        .type_msg {
            background-color: rgba(0,0,0,0.3) !important;
            border: 0 !important;
            color:grey;
            height: 60px !important;
            overflow-y: auto;
        }

            .type_msg:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

        .attach_btn {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .send_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .search_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .contacts {
            list-style: none;
            padding: 0;
        }

            .contacts li {
                width: 100% !important;
                padding: 5px 10px;
                margin-bottom: 15px !important;
            }

        .active {
            background-color: rgba(0,0,0,0.3);
        }

        .user_img {
            height: 70px;
            width: 70px;
            border: 1.5px solid #f5f6fa;
        }

        .user_img_msg {
            height: 40px;
            width: 40px;
            border: 1.5px solid #f5f6fa;
        }

        .img_cont {
            position: relative;
            height: 70px;
            width: 70px;
        }

        .img_cont_msg {
            height: 40px;
            width: 40px;
        }

        .online_icon {
            position: absolute;
            height: 15px;
            width: 15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border: 1.5px solid white;
        }

        .offline {
            background-color: #c23616 !important;
        }

        .user_info {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }

            .user_info span {
                font-size: 20px;
                color: white;
            }

            .user_info p {
                font-size: 10px;
                color: rgba(255,255,255,0.6);
            }

        .video_cam {
            margin-left: 50px;
            margin-top: 5px;
        }

            .video_cam span {
                color: white;
                font-size: 20px;
                cursor: pointer;
                margin-right: 20px;
            }

        .msg_cotainer {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
        }

        .msg_cotainer_send {
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
        }

        .msg_time {
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }

        .msg_time_send {
            position: absolute;
            right: 0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }

        .msg_head {
            position: relative;
        }

        #action_menu_btn {
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }

        .action_menu {
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0,0,0,0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
        }

            .action_menu ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

                .action_menu ul li {
                    width: 100%;
                    padding: 10px 15px;
                    margin-bottom: 5px;
                }

                    .action_menu ul li i {
                        padding-right: 10px;
                    }

                    .action_menu ul li:hover {
                        cursor: pointer;
                        background-color: rgba(0,0,0,0.2);
                    }

        @media(max-width: 576px) {
            .contacts_card {
                margin-bottom: 15px !important;
            }
        }
    </style>

    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
</head>
<!--Coded With Love By Mutiullah Samim-->
<body>
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: absolute;
  float: left;
  left: 75%;
  top: 70%;
  transform: translate(-50%, -50%);
 overflow:hidde;
  width: 100%; /* Full width */
  height: 100%; /* Full height */

  text-align:center;
}

/* Modal Content/Box */
.modal-content {
	text-align:center;
  background: linear-gradient(to right, #1d86df 0%, #39b49a 100%);">;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 25px;
  max-width: 710px;
     
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

</style>
<?php
$level = $this->session->level;	
if($level == 'kepala dinas'){
?>
<style>
.primaryclass{
width:280px;

margin-top:-260px;
font-size:14px;

height:200px;

background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);



}
</style>
<?php
}
?>
<style>
    #rapi2{
height:40px;
width:100px;
margin-left:10px;
font-size:15px;
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
@media screen and (max-width: 480px) {
	
    .primaryclass{
        width:300px;
        margin-top:380px;
        
        height:220px;
        margin-left:55px;
        background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);
  
        
       
    }
    .tombol{
        margin-top:100px;
    }
    #rapi2{
        width:370px;
    }
}
@media (min-width:481px) and (max-width:1400px){
	
    .primaryclass{
width:280px;

margin-top:-260px;
font-size:14px;

height:200px;

background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);



}

.tombol{
margin-top:100px;
}
#rapi3{
    width:90px;
}
#rapi2{
    width:72px;
}
}

</style>
<?php
if($level == 'kepala_dinas'){
?>
<style>
     @media only screen  and   (min-width:1401px)  and   (max-width:1900px){
  
  .primaryclass{
width:300px;
position:right;
font-size:14px;
margin-top:-260px;
height:200px;

background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);



}

.tombol{
margin-top:100px;
}
#rapi3{
   width:100px;
}
#rapi2{
   margin-left:5px;
    width:85px;
   font-size:11px;
}
}
</style>
<?php
}
else{
    

  ?>
  <style>
  @@media only screen  and   (min-width:1401px)  and   (max-width:1900px){
  
    .primaryclass{
      width:280px;
  
  margin-top:-260px;
  font-size:14px;
  
  height:200px;
  
  background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);
  
  
  }
  
  .tombol{
  margin-top:100px;
  }
  #rapi3{
     width:100px;
  }
  #rapi2{
     margin-left:5px;
     width:80px;
     height:85px;
     font-size:11px;
  }
  }
   </style>
  
<?php
}
?>

   
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header">
                        <div class="input-group">
 <div class="input-group-prepend">
                             </div>
                        </div>
                    </div>
                    <div class="card-body contacts_body">
                        <ui class="contacts">
<?php
	$n = 0;
    $id_staf = $this->session->iduserlogin;	
	foreach ($employeeall as $b => $row) { ?>


                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                    <?php
                                    if($row->foto == null){
                                        ?>  
                                       <img src="<?php echo base_url('assets/ig.png')?>" class="rounded-circle user_img"><h3><font color="white"><?=$row->emp_name?></font></h3>
                                    
                               
                                      
                                        <?php  

                                    }
                                    else{
                                        ?>
                                        <img src="<?php echo base_url('assets/asetslider/login/sendergrup/'.$row->foto)?>" class="rounded-circle user_img"><h3><font color="white"><?=$row->emp_name?></font></h3>
                                        <?php  
                                    }
                                 
                                        ?>
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <?php
                                       // if($personalvalidasi[$n]->receive  == $employeeall[$n]->id_emp ){
                                          //  if($row->sender  == $id_staf){
                                            ?>
                                        <a href="<?=site_url('personal/detail/'.$row->id_emp);?>"> <span><font class="btn btn-danger">Chat</font></span></a>
                                        <?php
                                        //    }
                                        ?>
                                        <?php
    //}
                                        ?>
                                        <p></p>
                                    </div>
                                </div>

                               
                            </li>
                 <?php
                 $n++;
	}
?>	           
                          

                        </ui>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <?php
	$getsegment=$this->uri->segment(3); 
if($getsegment  !=null){
 
    ?>
            <div class="col-md-8 col-xl-6 chat">
                <div class="card">




    

	<?php
	$no = 1;
	foreach ($empalls as $b => $row) { ?>
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                            <?php
                                    if($row->foto == null){
                                        ?>  
                                        <img src="<?php echo base_url('assets/ig.png')?>" class="rounded-circle user_img_msg" style='width:80px;height: 80px;' >
                               
                                      
                                        <?php  

                                    }
                                    else{
                                        ?>

                                <img src="<?php echo base_url('assets/asetslider/login/sendergrup/'.$row->foto)?>" class="rounded-circle user_img">
                                <?php
                                  
                                    }
                                    
                                        ?>
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                            <?php
                            
                           $kkkk= (int) $row->jumchat +  (int) $row->jumchat2;
                            ?>
                                <span>Chat with <?=$getnpppp->emp_name?></span>
                                <span class="btn-danger" style="text-align:center"> <?=$row->jumchat?>   Messages</span>
                              
                            </div>
                            <div class="video_cam">
                             
                            </div>
                        </div>
                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="action_menu">
                            <ul>
                                <li><i class="fas fa-user-circle"></i> View profile</li>
                                <li><i class="fas fa-users"></i> Add to close friends</li>
                                <li><i class="fas fa-plus"></i> Add to group</li>
                                <li><i class="fas fa-ban"></i> Block</li>
                            </ul>
                        </div>
                    </div>
<?php
	} ?>
  
	
<?php
	$no = 1;
    $iduserlogin = $this->session->iduserlogin;	
    $usernamelogin = $this->session->username;	
    $fotologin = $this->session->foto;
  
        ?>
          <div class="card-body msg_card_body" style="overflow-y:scroll">

                  
        <?php
	foreach ($personalreply as $b => $row) { ?>

                  
<?php
                                if($row->sender == $iduserlogin){
                                    ?>
                                     <div style="" class="d-flex justify-content-end mb-4">
                        
                            <?php
                                }
                            else{
                                ?>
                                  <div style="" class="d-flex justify-content-start mb-4">
                                <?php
                                }
                            ?>
                            <div  style="" class="msg_cotainer_send" >
                            <?php
                              if($row->sender == $iduserlogin){
                                    ?>
                                     <span class="msg_time_send"> <?=$usernamelogin?></span>
                               <?php
                                }
                                else{
                               ?>
                                <span class="msg_time_send"> <?=$row->username?></span>
                            <?php    
                            }
                        //    if($row->balasan == null)
//{

                                ?>
                                
                                <?=$row->messages?>
                                <?php
//}
                                ?>
                            </div>
                            <div  style="" class="img_cont_msg">
                               <?php
                                if($row->sender == $iduserlogin){
                                    ?>
                                      <?php
                                    if($fotologin== null){
                                        ?>  
                                        <img src="<?php echo base_url('assets/ig.png')?>" class="rounded-circle user_img_msg" style='width:40px;height:40px;' >
                               
                                      
                                        <?php  

                                    }
                                    else{
                                        ?>
                                <img src="<?php echo base_url('assets/asetslider/login/sendergrup/'.$fotologin )?>" class="rounded-circle user_img_msg">
                                    <?php
                                    }
                                }
                                else{
                                ?>
                                 <?php
                                    if($row->foto  == null){
                                        ?>  
                                        <img src="<?php echo base_url('assets/ig.png')?>" class="rounded-circle user_img_msg" style='width:40px;height:40px;' >
                               
                                      
                                        <?php  

                                    }
                                    else{
                                        ?>
                               <img src="<?php echo base_url('assets/asetslider/login/sendergrup/'.$row->foto )?>" class="rounded-circle user_img_msg">
                                    <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                   <? } ?>
				
                    </div>


                                 
                  
                    <div class="card-footer" >
                        <div class="" style="background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);">
                            <div class="input-group-append"  style="background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);">
                                  </div>
                       
                            <form method="post" action="<?=site_url('/Personal/proses')?>">
                      
                                <textarea style="background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);" name="messages" class="form-control type_msg" placeholder="Type your message..." rows="10" width="400px"></textarea>
                                <input name="id_data" type="hidden" class="form-control type_msg" value="rowst.id_chat"></input>
                                <input name="id_chat_r" type="hidden" class="form-control type_msg" value="<?=$getsegment?>"></input>

                                <input name="foto" type="hidden" class="form-control type_msg" value="1.jpg"></input>
                                <input name="sender_reply" type="hidden" class="form-control type_msg" value="rowst.sender_reply"></input>
                               <button type="submit" name="add" style="" class="btn btn-info">Send</button>

                             
                               
                               </form>
                        </div>
                    </div>   


                             
                </div>
            </div>
        </div>
    </div>                    <?php
}
?>

</body>
</html>

<script>
    $(document).ready(function(){
     
        // get Edit Product
        $('.btn-detail').on('click',function(){
          const id = $(this).data('id');
          $('.chattingid').val(id);
            // get data from button edit
            $('#myModal').modal('show');
          
           
          
           
          //  window.location.replace("https://quesioner.my.id/dinas/personal/"+id);
          

        }
        )}
  );
  </script>
 <div id="myModal" class="modal">

<!-- Modal content -->
    
    <!-- Modal content -->

                                           
<div class="modal-content">
 
 

  <div class="modal-header">
    <span class="close">&times;</span>
   
  </div>
  <div class="modal-body">
  <main class=">
    <section>
      <div class="page-header min-vh-100">
        <div class="">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
      
              
            <?php echo form_open('personal/prosesadd'); ?>     



<div  style="color:#11cdef;margin:10" class="form-group row">
		
		<label>Messages</label>
				<input rows="40" style="width:900px;height:300px;color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);" type="text" name="pesanchat"   class="form-control"  value="" required>
		
	
</div>

<div style="color:#11cdef;margin:10" class="form-group row">
		

        <input type="text" name="chattingid" id="chattingid" class="chattingid">
	
</div>
		
<div style="color:#11cdef;margin:10" class="form-group row">
		
				<button type="submit" class="btn btn-info" name="add">Simpan</button>
				<a href="<?=site_url('personal');?>"><button class="btn btn-info" type="button">Kembali</button></a>
			
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