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
    .page_title{
        height:80px;
        text-align:center;
        background-color: yellow;
        display: block;
      
    }
</style>


<?php echo form_open('pertanyaan/prosesadd'); ?>
<div style="margin-bottom: 20px;">

</div>
<div class="page_title">
                           <center><u><br><h3><font  color="">Edit Pertanyaan Kuisoner</font> </h3><br></u></center>
                           
                              
                           </div>
                               
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
    <?php

    $id_staf = $this->session->iduserlogin;	
	//foreach ($employeeall as $b => $row) { ?>
	 <tr>
			<td>Nama Aspek</td>
		
			<td>
	
			
			<select  class="form-control" style="height:80px"  name="id_aspek">
			<?php
		
			foreach ($aspek as $b => $row) { ?>
			<option value="<?=$row->id_aspek?> " <?php if ($pertanyaan[0]->id_aspek == $row->id_aspek) echo "selected"; ?>> <?=$row->nama_aspek;?></option>
		
			<?php } ?>
			</select>
            </td>
		

            </tr>
            <tr>
			<td>Pertanyaan</td>
		
			<td>
			<input class="form-control" value="<?=$pertanyaan[0]->id_pertanyaan?>" name="id_edit" type="hidden">
				<input class="form-control" value="<?=$pertanyaan[0]->desc_pertanyaan?>" name="desc_pertanyaan" type="text">
			</td>
		</tr>
            <tr>
			<td>Bobot Pertanyaan</td>
		
			<td>
			
				<input class="form-control" value="<?=$pertanyaan[0]->bobot_pertanyaan?>" name="bobot_pertanyaan" type="number" step="0.00001">
			</td>
		</tr>
       
		<tr>
			<td>
				<button class="btn btn-info" type="submit" name="edit">Simpan</button>
                </td>
                <td>
				<a class="btn btn-danger"   href="<?=site_url('pertanyaan');?>">Kembali</a>
            </td>
		</tr>
		
	</table>
            </form>
