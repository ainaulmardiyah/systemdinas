<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Kalender Dinas</title>
  <link rel="stylesheet" href="./style.css">
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;800&display=swap");
body {
  display: flex;
  flex-flow: column;
  align-items: center;
  font-family: "Poppins", serif;
  background: #eeaeca;
  background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
}

h1 {
  font-weight: 800;
  margin: 1rem 0 0;
}

ul {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  flex-wrap: wrap;
  list-style: none;
}
ul li {
  display: flex;
  width: 15rem;
  height: 12rem;
  margin: 0.25rem;
  flex-flow: column;
  border-radius: 0.2rem;
  padding: 1rem;
  font-weight: 300;
  font-size: 0.8rem;
  box-sizing: border-box;
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);
}
ul li time {
  font-size: 2rem;
  margin: 0 0 1rem 0;
  font-weight: 500;
}
ul .today {
  background: #ffffff70;
}
ul .today time {
  font-weight: 800;
}
</style>
<style>
       .page-title{
         position:right;
        height:150px;
        text-align:center;
        background: #11cdef;color:white;;
         
         width:100%;
       
      
    }
      </style>
</head>
<body style="background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);">
<!-- partial:index.partial.html -->
<!-- days sourced from: https://nationaldaycalendar.com/february/ -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.css"  />
  
   <div class="page-title">
   <br>
   <?php
     $tahun = date('Y');
   
   ?>
   <h3> Kalender <?=$tahun;?></h3><br>
<a href="<?=site_url('cuti');?>"><button class="btn btn-info" type="button">Kembali</button></a>
	</div>	

<ul>

</ul>
<!-- partial -->
  
</body>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php
                $tahun = date('Y');
                $hari = date('j');
 
                for($i=1; $i<=12; $i++){
                    // Dapatkan jumlah hari dalam bulan saat ini
                    $bulan = $i;
                    $jumlah_hari = date('t', mktime(0, 0, 0, $bulan, 1, $tahun));
 
                    // Dapatkan hari pertama dalam bulan ini
                    $hari_pertama = date('w', strtotime($tahun . '-' . $bulan . '-01'));
                    $nama_bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
                    $nama_hari = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
 
                    ?>                    
                    <table class="table table-bordered" style="color:white;background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);" >
                        <thead>
                                <th colspan="7" style="text-align: center;" ><?php echo $nama_bulan[$bulan-1] ?> <?php echo $tahun ?></th>
                            <tr>
                                <?php 
                                foreach ($nama_hari as $hari_) {
                                    ?>
                                    <th><?php echo $hari_ ?></th>
                                    <?php
                                }
                                ?>
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                for ($x = 0; $x < $hari_pertama; $x++) {
                                    ?>
                                    <td>-</td>
                                    <?php                                    
                                }
 
                                for ($nomor_hari = 1; $nomor_hari <= $jumlah_hari; $nomor_hari++) {
                                    $hari_seminggu = date('w', strtotime($tahun . '-' . $bulan . '-' . $nomor_hari));
                                    if ($nomor_hari == $hari) {
                                       ?>
                                       <td><?php echo $nomor_hari ?></td>
                                       <?php                                          
                                    } else {
                                        ?>
                                       <td><?php echo $nomor_hari ?></td>
                                       <?php 
                                    }
                                    if ($hari_seminggu == 6) {
                                        ?>
                                        <tr></tr>
                                        <?php                                        
                                    }
                                }
 
                                // Output sel kosong setelah hari terakhir dalam bulan
                                for ($x = $hari_seminggu; $x < 6; $x++) {
                                     ?>
                                    <td>-</td>
                                    <?php 
                                }
 
                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                }
 
                ?>