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
   .formtime{
    margin-bottom:10px;
        margin-left:250px;
      
       
    }
   #formtimedua{
       
    margin-left:150px;
     height:600px;
     width:600px;
     margin-right:20px;
     text-align:right;
     
      
      
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

<form id="formnav" method="post" action="<?=site_url('agenda/prosesevent')?>">
<div id="formtimedua" style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">
<div class="page_title">
                           <center><u><br><h3><font  color="">Tambah Timeline pada Agenda Kerja <?=$agenda[0]->agenda_month?></font> </h3><br></u></center>
                           
                              
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
			<td> Agenda</td>
		
			<td>
	
			
			<select  class="form-control" style="height:80px"  name="id_tunjuk" id="styleone" readonly >
			<?php
		
			foreach ($agendaall as $b => $row) { ?>
			<option value="<?=$row->id_agenda?> " <?php if($agenda[0]->id_agenda == $row->id_agenda) echo "selected"; ?> readonly> <?=$row->agenda_month;?></option>
		
			<?php } ?>
			</select>
            </td>
		

            </tr>


            <tr>
			<td>Start Time</td>
		
			<td>
			<input class="form-control" id="startdate" value="" name="start" placeholder="2pm format(2)" type="number">
            </td><td></td><td></td>
            <td style="margin-left:100px">
                <select id="timeid" name="starttype">
                <option value="am">AM</option>
                <option value="pm">PM</option>
            </select>
			</td>
		</tr>
        <tr>
			<td>End Time</td>
		
			<td>
			<input class="form-control" id="enddate" value="" name="end"  placeholder="7pm format(7)" type="number">
        
        </td><td></td><td></td>
            <td >
			<select name="endtype" id="timeid">
                <option value="am">AM</option>
                <option value="pm">PM</option>
            </select>
            
			</td>
		</tr>
        <tr>
			<td>Event</td>
		
			<td>
			<input class="form-control" name="notes"  id="styleone" type="text">
			<input class="form-control" name="id_edit" value="<?=$agenda[0]->id_agenda?>" type="hidden">
			</td>
		</tr>
        <tr>
			<td>Style Color</td>
		
			<td>
                <select name="type_notes"  id="styleone">
			<option value="meeting">Biru Laut</option>
            <option value="meeting2">Pink</option>
            <option value="meeting3">Biru Tua</option>
            <option value="meeting4">Cream</option>
			</td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit" name="add">Simpan</button>
                </td>
                <td>
				<a class="btn btn-danger"   href="<?=site_url('agenda');?>">Kembali</a>
            </td>
		</tr>
       
        </table>  </form></div>
        <div id="formtime" style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">
    
        <div class="tab2" style="background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">
      
        <div style="margin-top:40px;color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">
       <div class="page_title" style="margin-top:-60px;color:black;">
    <?php
       foreach ($agenda as $b => $row) { ?>
       
       <?=$row->agenda_month?><br><br>

       <?php
       }
       ?>

    </div></div>
    <?php
       foreach ($time as $b => $r) { ?>
       <tr>
       <td><?=$r->notes?><td> <td><b><font color="yellow"><?=$r->time_start?> - <?=$r->time_end?></b></font></td><br>
       </tr>
       <?php
       }
       ?>
         <?php
       foreach ($timepm as $b => $rr) { ?>
       <tr>
       <td><?=$rr->notes?><td> <td><b><font color="yellow"><?=$rr->time_start?> - <?=$rr->time_end?></b></font></td><br>
       </tr>
       <?php
       }
       ?>
       

    </div>
    
    
    </div>
      
            </div></div>
           