
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.css"  />
  
<style>
    *, *:before, *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        font-family: 'Nunito', sans-serif;
        color: white;
        background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);
    } 
	.container {
        font-family: 'Nunito', sans-serif;
        
		 size:100%;
    }

    form {
        max-width: 700px;
        margin: 10px auto;
        padding: 10px 20px;
       background:#1d86df;
        border-radius: 8px;
    }

    h1 {
        margin: 0 0 30px 0;
        text-align: center;
		  color: #11cdef;
    }

    input[type="text"]{
		
		 background-color: white;
	},
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
         color: #11cdef;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        margin-bottom: 30px;
    }

    input[type="radio"]{
		 background-color: white;
	},
    input[type="checkbox"] {
		 background-color: white;
        margin: 0 4px 8px 0;
    }

    select {
        padding: 6px;
       
        border-radius: 2px;
		 background-color: white;
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
		  color: #11cdef;
    }

    legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 8px;
		  color: #11cdef;
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

   
    .modal {
        
  display: block; /* Hidden by default */
  position: absolute;
  float: left;
  left: 50%;
  top: 10%;
  overflow-y:scroll;
  transform: translate(-50%, -1%);

  width: 100%; /* Full width */
  height: 100%; /* Full height */

  text-align:center;
}

/* Modal Content/Box */
.modal-content {
	text-align:center;
    background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);
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
 
  color: white;
}

/* Modal Body */
.modal-body {padding: 2px 16px;

}

/* Modal Footer */
.modal-footer {
  padding: 2px 16px;
 
  color: white;
}
 
</style>
<body >
    

</div>
  
     <?php
       $segment=$this->uri->segment(3); 
    if($segment == null){
   
?>
  <div class="container">
  <center> <h2><font color="white">Grafik kompetensi</h2></center><br><br>
     <a href="<?=site_url('cuti');?>"><center><button class="btn btn-danger" style="width:100px;" type="button">Kembali</button><center></a>		
   <?php
    }
    else{
        ?>
        <BR>
       
        <?php
    }
  if($segment == null){
    ?>
     <div id="chartaspek"></div>
	 <?php for ($i=0;$i<$lengthdata;$i++) { ?>
        
        <div id="chart[<?=$i?>]"> 
        </div>
        <?php

      
            ?>
          <?php
        }
        ?>
	 <?php } ?>
    
 
		
		
	
   
</div>
 
<script type="text/javascript" src="<?php echo base_url('/assets/jquery-1.7.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/highcharts/highcharts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/highcharts/modules/exporting.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/highcharts/themes/grid.js'); ?>"></script>
<script type="text/javascript">


jQuery(function(){
    new Highcharts.Chart({
        chart: {
            renderTo: 'chartaspek', //id di divnya --> <div id="chart">
            type: 'pie', //jenis chart: spline or column or line or pie
        },
        title: {
            text: 'Jumlah Poin Sesuai Kategori Aspek',
            x: -20 //posisi tulisan
        },
        subtitle: {
            text: 'Jumlah Poin Sesuai Kategori Aspek',
            x: -20 //posisi tulisan
        },
        xAxis: {
            categories:  "",
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },
        series: [{
            name: 'Jumlah',
			color:'red',
             data:[ 
                <?php foreach ($poinaspekall as $b => $row) { ?>
			 [<?php echo json_encode($poinaspekall[$b]->nama_aspek) ?>,   <?php echo $row->total ?>],
			 <?php } ?>
		



            
			 ]
			
			
        }]
		
    });
     <?php for ($i=0;$i<$lengthdata;$i++) { 
        $j=$i+1;
        $k=0;
     
        ?>

    new Highcharts.Chart({
        chart: {
            renderTo: 'chart[<?=$i?>]', //id di divnya --> <div id="chart">
            type: 'column', //jenis chart: spline or column or line or pie
        },
        title: {
            text: 'Jumlah Data Per  <?php echo json_encode($aspeknamee[$j]); ?>',
            x: -20 //posisi tulisan
        },
        subtitle: {
            text: 'Aspek Kompetensi',
            x: -20 //posisi tulisan
        },
        xAxis: {
            categories: <?php echo json_encode($getgraph1[$j]); ?>
        },
        yAxis: [{
            title: {
                text: 'Jumlah Data'
            }, 
        },
		{
            title: {
                text: ''
            }, 
        }],
        series: [{
            name: 'Aspek',
			type: 'column',
			yAxis: 1,
			color:'#11cdef',
            data: <?php echo json_encode($getgraph2[$j]); ?>
			
        },
		
		
		
		]}
       
        , function(chart) {
  chart.renderer.button('Detail Data', 100, 100)
    .attr({
      zIndex: 3
    })
    .on('click', function() {
        window.location.replace("https://quesioner.my.id/dinas/allgrafik/detail/"+<?=$j?>);
     
    })
    .add();

    });
    <?php
    
}
?>
 


   
	 });
   
	 
	 




</script>
    </div>
</body>
</html>

<?php

if($segment != null)	{	
?>		 			 
<div id="myModal" class="modal">
						 <div class="modal-content">
 
 

  <div class="modal-header">
    <span class="close">&times;</span>
   
   
   
  </div>
  <div class="modal-body">
  <main class="main-content  mt-0">
    <section>
   
                  <h4 class="font-weight-bolder" style="color:white;background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);">Data Grafik</h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">
    <form>
                <a href="<?=site_url('Allgrafik');?>"><center><button class="btn btn-warning" style="width:100px;" type="button">Kembali</button><center></a>		

	

                <table id="example"  class="table table-bordered" style="width:100%">
        <thead >
            <tr>
			<th><b>ID</b></th>
                <th><b>Nama</b></th>
                <th><b>Jumlah</b></th>
				
            </tr>
        </thead>
        <tbody>
		<?php
	$no = 1;
	foreach ($datagrafik as $b => $row) { 
 //  $entropylog=log($row->nilai_log_entropy, 2);?>
            <tr>
                <td><?=json_encode($row->id_employee)?></td>
                <td><?=json_encode($row->nama_employee)?></td>
                <td><?=json_encode($row->total)?></td>
               
            </tr>
           
       <?php
	}
?>	
        </tbody>
    
    </table>

</form>		
</div>

  <div class="modal-footer">
    
			
</div>			
</div>
<?php
}
?>
<script>
    $(document).ready(function(){
     
        // get Edit Product
        $('.btn-detail').on('click',function(){
          const id = $(this).data('id');
            // get data from button edit
            window.location.replace("https://quesioner.my.id/dinas/allgrafik/detail/"+id);
          

        }
        )}
  );
  </script>