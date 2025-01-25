<style>
$off_white:#fafafa;
$light_grey:#A39D9E;
*{
  box-sizing:border-box;
}

body{
  background-color: $off_white;
}

.container{
 
  margin:100px auto;
  width:100%;
}

.light{
  background-color: #fff;
}
.dark{
  margin-left: 65px;
}

.calendar{
  margin-left:50px;
  width:500px;
  box-shadow: 0px 0px 35px -16px rgba(0,0,0,0.75);
  font-family: 'Roboto', sans-serif;
  padding: 10px 10px;
  color:#363b41;
  display: inline-block;
}

.calendar_header{
  border-bottom: 2px solid rgba(0, 0, 0, 0.08);
}

.header_copy{
  color:$light_grey;
  font-size:20px;
}
.calendar_plan{
  margin:20px 0 40px;
}
.cl_plan{
  width:100%;
  height: 140px;
  background-image: linear-gradient(-222deg, #FF8494, #ffa9b7);
  box-shadow: 0px 0px 52px -18px rgba(0, 0, 0, 0.75);
  padding:30px;
  color:#fff;
}
.cl_plan2{
  width:100%;
  height: 140px;
  background-image: linear-gradient(-222deg, white, white);
  box-shadow: 0px 0px 52px -18px rgba(0, 0, 0, 0.75);
  padding:30px;
  
}
.cl_copy{
  font-size:20px;
  margin: 20px 0;
  display: inline-block;
}

.cl_add{
  display: inline-block;
  width: 40px;
  height:40px;
  border-radius:50%;
  background-color: #fff;
  cursor: pointer;
  margin:0 0 0 65px;
  color:#c2c2c2;
  padding: 11px 13px;
}
.calendar_events{
  color:$light_grey;
}
.ce_title{
  font-size:14px;
}

.event_item{
  margin: 18px 0;
  padding:5px;
  cursor: pointer;
  &:hover{
    background-image: linear-gradient(-222deg, #FF8494, #ffa9b7);
    box-shadow: 0px 0px 52px -18px rgba(0, 0, 0, 0.75);
    .ei_Dot{
      background-color: #fff;
    }
    .ei_Copy,.ei_Title{
      color:#fff;
    }
  }
}
.event_item2{
  margin: 18px 0;
  padding:5px;
  cursor: pointer;
  &:hover{
    background-image: linear-gradient(-222deg, white, white);
    box-shadow: 0px 0px 52px -18px rgba(0, 0, 0, 0.75);
    .ei_Dot{
      background-color: #ffa9b7;
    }
    .ei_Copy,.ei_Title{
      color:#ffa9b7;
    }
  }
}
.ei_Dot,.ei_Title{
  display:inline-block;
}

.ei_Dot{
  border-radius:50%;
  width:10px;
  height: 10px;
  background-color: $light_grey;
  box-shadow: 0px 0px 52px -18px rgba(0, 0, 0, 0.75);
}
.dot_active{
  background-color: #FF8494;
}

.ei_Title{
  margin-left:10px;
  color:#363b41;
}

.ei_Copy{
  font-size:12px;
  margin-left:27px;
}

.dark{
  background-image: linear-gradient(-222deg, #FF8494, #ffa9b7);
  color:#fff;
  .header_title,.ei_Title,.ce_title{
    color:#fff;
  }
  
}
</style>
<style>
       .page-title{
         position:right;
        height:150px;
        text-align:center;
        background:linear-gradient(-222deg, #FF8494, #ffa9b7);
         color:yellow;
         width:100%;
       
      
    }
      </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.css"  />
  
   <div class="page-title">
   <br>
   <h3> Event</h3><br>
<a href="<?=site_url('cuti');?>"><button class="btn btn-warning" type="button">Kembali</button></a>
	</div>	
<?php  $BULAN = date('d, F, Y', strtotime(date('Y-m-d')));
     $tomorrow = new DateTime('tomorrow');

     // e.g. echo 2010-10-13
     $te = $tomorrow->format('d-m-Y');
     $BULAN2 = date('d, F, Y', strtotime($te));
     ?>
<div class="container">
  <div class="calendar light" Style="height:800px;">
    <div class="calendar_header">
      <h1 class = "header_title">Agenda Hari ini</h1>
      <p class="header_copy"> Events</p>
    </div>
    <div class="calendar_plan">
      <div class="cl_plan">
    
        <div class="cl_title">Today</div>
        <div class="cl_copy"><?php echo $BULAN;?></div>
        <div class="cl_add">
          <i class="fas fa-plus"></i>
        </div>
      </div>
    </div>
    <div class="calendar_events">
      <p class="ce_title">Upcoming Events</p>
      
      <?php
	$no = 1;
	foreach ($agendaall as $b => $row) { ?>
      <div class="event_item">
        <div class="ei_Dot dot_active"></div>
        <div class="ei_Title"><?=$row->time_start?> - <?=$row->time_end?></div>
        <div class="ei_Copy"><?=$row->notes?></div>
      </div>
      <?php
    }
	
    ?>
    <?php
	$no = 1;
	foreach ($agendaallpm as $br => $rs) { ?>
      <div class="event_item">
        <div class="ei_Dot dot_active"></div>
        <div class="ei_Title"><?=$rs->time_start?> - <?=$rs->time_end?></div>
        <div class="ei_Copy"><?=$rs->notes?></div>
      </div>
      <?php
    }
	
    ?>
      
    </div>
  </div>

<div class="calendar dark" Style="height:800px;margin-bottom:100px">
    <div class="calendar_header">
      <h1 class = "header_title">Agenda Selanjutnya</h1>
      <p class="header_copy">Events</p>
    </div>
    <div class="calendar_plan">
      <div class="cl_plan">
        <div class="cl_title">Tommorow</div>
        <div class="cl_copy"><?=$BULAN2?></div>
        <div class="cl_add">
          <i class="fas fa-plus"></i>
        </div>
      </div>
    </div>
    <div class="calendar_events">
      <p class="ce_title">Upcoming Events</p>
      
      <?php
	$no = 1;
	foreach ($agenda as $b => $r) { ?>
      <div class="event_item2">
        <div class="ei_Dot dot_active"></div>
        <div class="ei_Title"><?=$r->time_start?> - <?=$r->time_end?></div>
        <div class="ei_Copy"><?=$r->notes?></div>
      </div>
      <?php
    }
	
    ?>
     <?php
	$no = 1;
	foreach ($agendapm as $bt => $tr) { ?>
      <div class="event_item2">
        <div class="ei_Dot dot_active"></div>
        <div class="ei_Title"><?=$tr->time_start?> - <?=$tr->time_end?></div>
        <div class="ei_Copy"><?=$tr->notes?></div>
      </div>
      <?php
    }
	
    ?>
    </div>
  </div>

</div>
  