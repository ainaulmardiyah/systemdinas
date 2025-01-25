
 
            
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
        max-width: 600px;
        margin: 10px auto;
        padding: 10px 20px;
        background: #11cdef;
        border-radius: 8px;
        color:white;
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
    .page_title{
        height:80px;
        text-align:center;
        background-color: yellow;
        display: block;
      
    }

    @media screen and (min-width: 480px) {

        form {
            max-width: 600px;
        }
    }
        </style>


  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="jquery/dataTables.bootstrap.min.css" />
 </div> 


			   <div class="" style="">
                  <div class="">
                    <form>
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                           <center><u><br><h3><font  color="">Bidang Karyawan</font> </h3><br></u></center>
                           
                              
                           </div>
                           <a href="<?=site_url('bidang/adddata');?>" class="btn btn-warning">Tambah Bidang Karyawan</a>
                            
                        </div>
                     </div>



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


                     <div class="row column1 table-responsive">
					   <div class="col-md-12 col-lg-12">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
                <th>ID</th>
                <th>Nama Bidang Karyawan</th>
				 <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		<?php
	$no = 1;
	foreach ($bdg as $b => $row) { ?>

            <tr >
            <td ><?=$row->id_bidang  ?></td>
			 <td ><?=$row->nama_bidang  ?></td>
                <td ><?=$row->keterangan?></td>
                <td >
                <a href="<?=site_url('bidang/edit/'.$row->id_bidang);?>" onclick="return confirm('Are you sure you want to edit this item?');"><i class="fa fa-edit" aria-hidden="true" style="color:yellow" ></i></a>
					<a href="<?=site_url('bidang/del/'.$row->id_bidang);?>"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" aria-hidden="true" style="color:yellow" ></i></a>
    </td >
          
            </tr>
           
       <?php
	}
?>	
        </tbody>
        
    </table>

</form>
         </div>                   
                         </div>   

<script>
    $.extend( $.fn.DataTable.ext.classes, {
  sWrapper: "dataTables_wrapper container-fluid dt-bootstrap4",
} );
    </script>
    