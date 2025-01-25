
<html lang="en">
   
   <head>
           <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Dashboard Staf Dinas</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?php echo base_url('assets/images/fevicon.png')?>" type="image/png" />
      <!-- bootstrap css -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.css"  />
  
	  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/colors.css')?>" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.css')?>" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/perfect-scrollbar.css')?>" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>" />
      <link rel="shortcut icon" href="<?php echo base_url('assets/asetslider/images/fevicon.ico.png')?>" type="image/x-icon" />
   <link rel="apple-touch-icon" href="<?php echo base_url('assets/asetslider/images/apple-touch-icon.png')?>">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/asetslider/css/bootstrap.min.css')?>">
   <!-- Site CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/asetslider/style.css')?>">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/asetslider/css/colors.css')?>">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/asetslider/css/versions.css')?>">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/asetslider/css/responsive.css')?>">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/asetslider/css/custom.css')?>">
   <!-- Modernizer for Portfolio -->
   <script src="<?php echo base_url('assets/asetslider/js/modernizer.js')?>"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
      <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap.js"></script>
      
      <link rel="icon" href="<?php echo base_url('assets/images/fevicon.png')?>" type="image/png" />
      <!-- bootstrap css -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap.css"  />
  
	  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/colors.css')?>" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.css')?>" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/perfect-scrollbar.css')?>" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>" />
      <link rel="shortcut icon" href="<?php echo base_url('assets/asetslider/images/fevicon.ico.png')?>" type="image/x-icon" />
  
   <script src="<?php echo base_url('assets/asetslider/js/modernizer.js')?>"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
      <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap.js"></script>
   </head>
<head>
<style>
    *, *:before, *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Nunito', sans-serif;
        color: #384047;
    }

    form {
        max-width: 300px;
        margin: 10px auto;
        padding: 10px 20px;
      
        border-radius: 8px;
    }

    h1 {
        margin: 0 0 30px 0;
        text-align: center;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="datetime"],
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="time"],
    input[type="url"],
    textarea,
    select {
        background: rgba(255,255,255,0.1);
        border: none;
        font-size: 16px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 100%;
        background-color: #e8eeef;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        margin-bottom: 30px;
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin: 0 4px 8px 0;
    }

    select {
        padding: 6px;
        height: 32px;
        border-radius: 2px;
    }
    .page-title{
         position:right;
         float:right;
        height:120px;
        text-align:center;
        background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);
         color:yellow;
         width:300px;
       
      
    }
    .btn-info{
        width:100px;
        height:50px;
        text-align:center;
        position:relative;
  height:50px;
  top:-50%;
  border:solid 1px #ff55aa;
    }
    .primaryclass{
        width:420px;
        background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);
        height:220px;
       
        margin-left:320px;
        text-align:center;
        
       
    }
    button {
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #4bc970;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #3ac162;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
        margin-bottom: 10px;
    }
    .page-title2{
         position:right;
         float:right;
        height:170px;
        text-align:center;
        background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);
         color:yellow;
         width:300px;
       
      
    }
    fieldset {
        margin-bottom: 30px;
        border: none;
    }

    legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

        label.light {
            font-weight: 300;
            display: inline;
        }

    .number {
        background-color: #5fcf80;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255,255,255,0.2);
        border-radius: 100%;
    }

    @media screen and (min-width: 480px) {
      

        form {
            max-width: 480px;
        }
    }
    .indexcity {
  z-index: 9999;
}

.right {
    right: 0 !important;
    left: 0 !important;
}
.navbar{
	background: #212121;
	margin: 0;
	padding: 20px 30px;
}
 
.logo{
	font-size: 14pt;
	font-weight: bold;
	text-decoration: none;
	color: white;
}
 

 
.tombol{
	display: none;
	color: white;
	font-size: 14pt;			
}
 
.tombol:hover{
	cursor: pointer;
}
 
 
 
.menu{
	margin: 0;
	display: flex;
	list-style: none;
	padding: 0;	
 	
}
 
.menu li{
	padding-left: 0;
	margin-right: 10px;
}
 
.menu li a{
	padding:10px;
	color: white;
	text-decoration: none;
	display: inline-block;

}

 
 
@media screen and (max-width: 768px) {
	.menu {
		display:inline-block;
		position: absolute;
		top: 64px;
		background: #11cdef;
		padding: 10px 20px;
		right: 0;
		left: 0;
        
	}
    .page-title2{
        width:400;
        float:right;
        margin-left:80px;
        margin-top:300px;
        background:white;
    }
    .primaryclass{
        width:400px;
        margin-top:600px;
        position:center;
        transform: translateX(-70%);
        position:relative;
        height:220px;
   
        background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);
        text-align:center;
        
       
    }
	.menu.aktif{
		display:inline-block;
		position: absolute;
		top: 64px;
		background: #11cdef;
		padding: 10px 20px;
		right: 0;
		left: 0;
	}
 
	.menu.aktif li a{
		padding: 10px;
		display: inline-block !important;
       
	}
 
	.tombol {
		display: block;
	}
}

@media only screen and (max-width: 767px) {
    .navbar-collapse{
      background-color:#11cdef;
      position: fixed;
      top: 0;
      transition:all 0.8s ease-out;
      height: 200p;
      width: 100%;
      left: 700px;
    }
    .navbar-inverse .navbar-nav>li>a {
    color: #000;
    }
}
</style>

<?php
$username = $this->session->username;
	$bidang_karyawan = $this->session->bidang_karyawan;
   $jabatan_karyawan = $this->session->jabatan_karyawan;
   $foto = $this->session->foto;
   //background:#008B8B;
?>
<body >

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#11cdef;color:white">
      <ul class="menu">
      <li class="nav-item">
       <a class="nav-link" href="<?=site_url('allgrafik');?>" style="background-color:white;color:#11cdef">Dashboard<span class="sr-only"></span></a>
      </li>	
  <?php
   $level = $this->session->level;
   $foto = $this->session->foto;
   if($level == 'kepala_bidang'){
   ?>
    <div style="background-color:white;height:50px">
   
       <a class="nav-link" href="<?=site_url('rankingbidang');?>" style="background-color:#11cdef;color:white">Ranking <span class="sr-only"></span></a>
   </div>	
      <?php
   }
   ?>
    <div style="background-color:white;height:50px">
     
       <a class="nav-link" href="<?=site_url('cuti');?>" style="background-color:#11cdef;color:white">Email<span class="sr-only"></span></a>
   </div>
   <div style="background-color:white;height:50px">
       <a class="nav-link" href="<?=site_url('Kuisoner/nextquestion/1');?>" style="background-color:#11cdef;color:white">Kuisoner<span class="sr-only"></span></a>
</div>
<div style="background-color:white;height:50px">
   
       <a class="nav-link" href="<?=site_url('ranking/answerdetailstaf');?>" style="background-color:#11cdef;color:white">Kompetensi<span class="sr-only"></span></a>
</div>
<div style="background-color:white;height:50px">
 <a class="nav-link" href="<?=site_url('Whatsapp/detail/1');?>" style="background-color:#11cdef;color:white">Forum<span class="sr-only"></span></a>
</div>
<div style="background-color:white;height:50px">
       <a class="nav-link" href="<?=site_url('personal');?>" style="background-color:#11cdef;color:white">Chat <span class="sr-only"></span></a>
</div>	 
<div style="background-color:white;height:50px">
       <a class="nav-link" href="<?=site_url('kalender');?>" style="background-color:#11cdef;color:white">Kalender<span class="sr-only"></span></a>
</div>	
<div style="background-color:white;height:50px">
       <a class="nav-link" href="<?=site_url('timeagenda');?>" style="background-color:#11cdef;color:white">Timeline<span class="sr-only"></span></a>
</div>	
<div style="background-color:white;height:50px">
       <a class="nav-link" href="<?=site_url('event');?>" style="background-color:#11cdef;color:white">Event<span class="sr-only"></span></a>
</div>	
<div style="background-color:white;height:50px">
<a class="nav-link" href="<?=site_url('loginstaf/logout');?>" style="background-color:#11cdef;color:white">Logout <span class="sr-only"></span></a>
</div>
   
		</ul>
 
 
		<div class="tombol" style="color:"yellow"">
			&#9776; Menu
		</div>
 


              </div>

      </div><script type="text/javascript">
		// deklarasi tombol dan menu
		const tombol = document.querySelector('.tombol');
		const menu = document.querySelector('.menu');
 
		// membuat event click
		// pada saat tombol di click, tambahkan class aktif pada class menu
		// saat diklik lagi, maka class aktif dihilangkan dari class menu (toggle)
		tombol.addEventListener('click', () => {
			menu.classList.toggle('aktif');
		});
	</script>
 <script>
jQuery(function($){
    $('.navbar-toggle').click(function(){
    $('.navbar-collapse').toggleClass('right');
    $('.navbar-toggle').toggleClass('indexcity');
    });
})
        </script>
   <div class="primaryclass" style=""><br>
   Welcome <?=$username;?> <br> <?=$bidang_karyawan?> 
      
   <font color="white" ><b>
   <form id="fileUploadForm" action="<?=site_url('Loginstaf/uploadpicture');?>" enctype="multipart/form-data" method="POST">
      <?php
       

       if($foto == null){
        ?>
  <img class="rapi" src="<?php echo base_url('assets/ig.png')?>" style="height:80px;width:80px" onclick="myfunctionhover(this.src)">
<?php
     }
     else{
        ?>
         <img class="rapi" src="<?php echo base_url('assets/asetslider/login/sendergrup/'.$foto)?>" style="height:80px;width:80px" onclick="myfunctionhover(this.src)">
        
            <?php
      }
?><center><input class="btn btn-danger"  id="changeprof" name="changeprof" type="file" title="change profile" placehorder="change profile" style="display:none" onchange="fileUploadForm.submit()"></center>
    </form>
    <script>
           function myfunctionhover() {
              var x = document.getElementById("changeprof");
         
             
x.style.display = "block";

       
     }
    
    </script>  
   </div>
      </div>
</div></nav>
   