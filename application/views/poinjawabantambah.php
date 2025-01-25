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
        width: 700px;
   
        margin-left:-206px;
        padding: 10px 20px;
        background: white;
        border-radius: 8px;
        color:white;
     
        float:left; 
    }
    #content { 
  overflow:auto; 
  width: 1400px; 
  background: white; 
  margin-left:-100px;
} 
    .tab2 {
        margin-left:20px;
        width: 400px;
        float:right;
        padding: 10px 20px;
        background: #11cdef;
        border-radius: 8px;
        color:white;
        height:500px;
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
    .page_title{
       
       height:80px;
       text-align:center;
       background-color: yellow;
       display: block;
     
   }
   @media only screen  and   (min-width:1401px)  and   (max-width:1900px){

   #rapi2{
   
    
   }
   #rapi3{
   }
    #konten{
       
    }

   
   .primaryclass{
    text-align:center;
   }
   #formtime{
    margin-bottom:10px;
        margin-right:-50px;
      padding:5px;
      
       
    }
   #formtimedua{
       
    margin-left:50px;
     height:450px;
     width:780px;
     margin-right:20px;
     text-align:right;
     padding-right:10px;
     
      
      
   }
}
    @media screen and (max-width: 480px) {

        #formnav {
           
            margin-left:-100px;
          
            background:white;
        }
        form{
            margin-left:-208px;
            width:300px
          background:white;
        }
    .page_title{
       
        height:80px;
        text-align:center;
        background-color: yellow;
        display: block;
      
    }

    #content{
        max-width: 580px;
        margin-right:200px; 
        
        background:white;

    }
    
    #formtimedua{
       
        margin-left:170px; 
        width:420px;
        margin-right:400px;
    
       
    }
    textarea{
        width:40px;
    }
    #formtime{
        margin-left:50px;
        width:528px; 
        height:100%;
        margin-top:-200px;
       
    }
    .tab2{
        margin-right:80px; 
    }
    #startdate{
        width: 180px;
       
    }
    #enddate{
        width: 180px;
    }
    #timeid{
        
        margin-left:-150px;
        width:120px;
    }
    #styleone{
        width:340px;
    }
}
</style>



<div id="content">

<form id="formnav" method="post" action="<?=site_url('Poinjawaban/prosesadd')?>">
<div id="formtimedua" style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">
<div class="page_title">
                           <center><u><br><h3><font  color="">Tambah Agenda Kerja Dinas</font> </h3><br></u></center>
                           
                              
                           </div>
                               
                      
                        
                       	<table>
    <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error) {
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $this->session->flashdata('error'); ?>                    
    </div>
    <?php } ?>
    <?php  
        $success = $this->session->flashdata('success');
        if($success)
        {
    ?> <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php } ?>  
	
        
            <tr>
			<td> Pertanyaan</td>
		
			<td>
	
			
			<select  class="form-control" style="height:80px"  name="id_pertanyaan_jwb">
			<?php
		
			foreach ($pertanyaan as $b => $row) { ?>
			<option value="<?=$row->id_pertanyaan?> "> <?=$row->desc_pertanyaan;?></option>
		
			<?php } ?>
			</select>
            </td>
		

            </tr>
			<tr>
			<td>Jawaban</td>
		
			<td>
			
				<input class="form-control" name="desc" type="text">
			</td>
		</tr>
        <tr>
			<td>Bobot Jawaban</td>
		
			<td>
			
				<input class="form-control" name="poin" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-info" type="submit" name="add">Simpan</button>
                </td>
                <td>
				<a class="btn btn-danger"   href="<?=site_url('poinjawaban');?>">Kembali</a>
            </td>
		</tr>
       
        </table> </form></div>
        <div id="formtime" style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">
    
      
        <div class="tab2" style="background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">
        <div class="page_title" style="color:black;margin-bottom:100px;">
                Dinas Kependudukan Panjen Kota Malang
        <img   style="margin-top:50px;margin-right:10px" src="<?php echo base_url('assets/dukcapil.png')?>">
            </div> </div>
      
            </div>
    
    
  
           