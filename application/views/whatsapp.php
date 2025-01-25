

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>

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
     #tes99{
        margin-top:250px;
        
        radius:3px;
        border:1px;
    }
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
            color:black;
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
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
            color: white !important;
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
         
            font-size: 10px;
        }

        .msg_time_send {
            position: absolute;
            right: 0;
            bottom: -15px;
          
            font-size: 10px;
        }

        .msg_head {
            position: relative;
        }
        .btn-primary{
     
     background-color:#008B8B;
    
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

   height:85px;
   font-size:11px;
}
}
</style>
<?php
}
else{
    

  ?>
  <style>
  @media only screen  and   (min-width:1401px)  and   (max-width:1900px){
  
  .primaryclass{
width:300px;
position:right;
margin-left:100px;
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
   width:100px;
   height:85px;
   font-size:11px;
}
}
    </style>
<?php
}
?>
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
</head>
<!--Coded With Love By Mutiullah Samim-->
<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." name="" class="form-control search">
                            <div class="input-group-prepend">
                                <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body contacts_body">
                        <ui class="contacts">
<?php
	$no = 1;
	foreach ($whatsapp as $b => $row) { ?>


                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        
                                        <img src="<?php echo base_url('assets/logogrup.jpg')?>" class="rounded-circle user_img"><h3><font color="white"><?=$row->nama_bidang?></font></h3>
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <a href="<?=site_url('Whatsapp/detail/'.$row->id_bidang);?>"> <span><font class="btn btn-danger">Chat</font></span></a>
                                        <p></p>
                                    </div>
                                </div>
                            </li>
                 <?php
	}
?>	           
                          

                        </ui>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-8 col-xl-6 chat">
                <div class="card">


                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>


<?php
$iduserlogin = $this->session->iduserlogin;	
	$no = 1;
	foreach ($whatsapps as $b => $row) { ?>
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            
                            <div class="img_cont">
                                <img src="<?php echo base_url('assets/logogrup.jpg')?>" class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                             
                                <span>Chat with <?=$row->nama_bidang?></span>
                                <span class="btn-danger" style="text-align:center;width:200px"> <?=$row->jumchat?>   Messages</span>
                              
                              
                            </div>
                            <script type="text/javascript" src="<?php echo base_url();?>assets/webcam.js"></script>
                            <script type="text/javascript" src="<?php echo base_url();?>assets/webcam.swf"></script>
                            <script language="JavaScript">
                                document.write(webcam.get_html(440, 240));
                            </script>
                            <div class="video_cam">
                               

                               
                            </div>
                        </div>
                        <script type="text/javascript">
                            webcam.set_api_url('<?php echo base_url();?>camera/saveImage');
                            webcam.set_quality(90);
                            webcam.set_shutter_sound(true);
                            webcam.set_hook('onComplete', 'my_completion_handler');

                            function takr() {
                                webcam.snap();
                            }

                            function my_completion_handler(msg) {
                                if (msg.match(/(http\:\/\/\S+)/)) {
                                    document.getElementById('img').innerHTML = '<h3>Upload Successfuly done</h3>' + msg;

                                    document.getElementById('img').innerHTML = "<img src=" + msg + " class=\"img\">";
                                    webcam.reset();
                                } else {
                                    alert("Error occured we are trying to fix now: " + msg);
                                }
                            }
        </script>
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
    <div class="card-body msg_card_body" style="overflow-y:scroll">

	
<?php

	$no = 1;

    $urutkan = [];
    $urutkanpesan = [];
	$getone=0;
	   for($i=4; $i <= 0; $i--){
		//  $j=$i+1;
				$datas = $whatsappreply[$i]->emp_name;
				$datas = $whatsappreply[$i]->messages;
            		
					array_push($urutkan, $datas);
					array_push($urutkanpesan, $datas);

				
				}


	foreach ($whatsappreply as $b => $row) { 
		
		

?>
                     
                      
                     
                        <?php
                                if($row->id_emp == $iduserlogin){
                                    ?>
                        <div style="" class="d-flex justify-content-end mb-4">
                            <?php
                                }
                            else{
                                ?>
                                   <div style="" class="d-flex justify-content-start mb-4">
                                <?php
                                }
                            ?><div  style="overflow:hidden" class="img_cont_msg">

                                
                            <?php
                                    if($row->foto == null){
                                        ?>  
                                        <img src="<?php echo base_url('assets/ig.png')?>" class="rounded-circle user_img_msg" style='width:40px;height:40px;' ><?=$row->userlog?><br>
                               
                                      
                                        <?php  

                                    }
                                    else{
                                        ?>
                               <img src="<?php echo base_url('assets/asetslider/login/sendergrup/'.$row->foto)?>" class="rounded-circle user_img_msg" ><?=$row->userlog?><br>
                               <?php
                                    }  ?>
                            </div>
                            <div  style="overflow:hidden" class="" >
                              
                                <span class=""> </span>
                                <?=$row->userlog?>
                            </div><br>
                            <div  style="overflow:hidden" class="msg_cotainer_send" >
                              
                              <span class="msg_time_send"> </span>
                              <?=$row->messages?>
                          </div>
                           
                        </div>
                       <?php
                       $getone =$getone+1;	
					 
					   ?>
                   

<?php
	}
$getsegment=$this->uri->segment(3); 
if (count($whatsappreply) >= 6) { 
    
          if($level == 'kepala_dinas'){
                          ?>

      <div class="card-footer" style="">
                      <?php
                    }
                      else{
                        ?>
                           <div class="card-footer" style="background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);">
                        <?php
                      }
                      ?>
                      
                      <form method="post" action="<?=site_url('/Whatsapp/proses')?>">
                        
                          <textarea id="" style="color:black;border-style: dotted; border-width: 5px;background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);" name="messages" rows="20" width="400px" class="form-control type_msg" placeholder="Type your message..."></textarea>
                          <input name="id_data" type="hidden" class="form-control type_msg" value="rowst.id_whatsapp"></input>
                         <input name="id_whatsapp_r" type="hidden" class="form-control type_msg" value="<?=$getsegment?>"></input>

                          <input name="foto" type="hidden" class="form-control type_msg" value="1.jpg"></input>
                          <input name="sender_reply" type="hidden" class="form-control type_msg" value="rowst.sender_reply"></input>
                          <?php
                          if($level == 'kepala_dinas'){
                          ?>
                          <button name="add" class="btn btn-info" style="background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);width:500px;">Send</button>
                            <?php
                          }
                          else{
                            ?>
                            <button name="add" class="btn btn-info" style="background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);width:300px;">Send</button>
                          
                            <?php
                          }
                          ?>
                       
                          </form>
                
              </div>
    <?php


}
else{
    ?>
      <?php
                          if($level == 'kepala_dinas'){
                          ?>

      <div class="card-footer" style="">
                      <?php
                          }
                      else{
                        ?>
                           <div class="card-footer" style="background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);">
                        <?php
                      }
                      ?>
                      <form method="post" action="<?=site_url('/Whatsapp/proses')?>">
                        
                          <textarea id="tes99" style="color:black;border-style: dotted; border-width: 5px;background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);" name="messages" rows="20" width="400px" class="form-control type_msg" placeholder="Type your message..."></textarea>
                          <input name="id_data" type="hidden" class="form-control type_msg" value="rowst.id_whatsapp"></input>
                         <input name="id_whatsapp_r" type="hidden" class="form-control type_msg" value="<?=$getsegment?>"></input>

                          <input name="foto" type="hidden" class="form-control type_msg" value="1.jpg"></input>
                          <input name="sender_reply" type="hidden" class="form-control type_msg" value="rowst.sender_reply"></input>
                          <?php
                          if($level == 'kepala_dinas'){
                          ?>
                          <button name="add" class="btn btn-info" style="background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);width:500px;">Send</button>
                            <?php
                          }
                          else{
                            ?>
                            <button name="add" class="btn btn-info" style="background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);width:300px;">Send</button>
                          
                            <?php
                          }
                          ?>
                       
                          </form>
                
              </div>
    <?php
}
	?>


                  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
