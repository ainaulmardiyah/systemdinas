<style>

:root {
  --numDays: 7;
  --numHours: 16;
  --timeHeight: 60px;
  --calBgColor: #fff1f8;
  --eventBorderColor: #f2d3d8;
  --eventColor1: #ffd6d1;
  --eventColor2: #0066FF;
  --eventColor3: #DC134C;
  --eventColor4: #DC134C;
  --eventColor5: #11cdef;
}

.calendar {
  display: grid;
  gap: 10px;
  grid-template-columns: auto 1fr;
  margin: 2rem;
}

.timeline {
  display: grid;
  grid-template-rows: repeat(var(--numHours), var(--timeHeight));
}

.days {
  display: grid;
  grid-column: 2;
  gap: 5px;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
}

.events {
  display: grid;
  grid-template-rows: repeat(var(--numHours), var(--timeHeight));
  border-radius: 5px;
  background: var(--calBgColor);
}

// Place on Timeline
.start-7am {
  grid-row-start: 1;
}

.start-8am {
  grid-row-start: 2;
}

.start-9am {
  grid-row-start: 3;
}

.start-10am {
  grid-row-start: 4;
}
.start-11am {
  grid-row-start: 5;
}
.start-12am {
  grid-row-start: 6;
}
.end-7am {
  grid-row-start: 1;
}

.end-8am {
  grid-row-start: 1;
}

.end-9am {
  grid-row-start: 2;
}

.end-10am {
  grid-row-start: 3;
}
.end-11am {
  grid-row-start: 4;
}
.end-12am {
  grid-row-start: 5;
}

.start-1pm {
  grid-row-start: 7;
}
.start-2pm {
  grid-row-start: 8;
}
.start-3pm {
  grid-row-start: 9;
}
.start-4pm {
  grid-row-start: 10;
}
.start-5pm {
  grid-row-start: 11;
}
.start-6pm {
  grid-row-start: 12;
}
.start-7pm {
  grid-row-start: 13;
}
.start-8pm {
  grid-row-start: 14;
}
.start-9pm {
  grid-row-start: 15;
}
.start-10pm {
  grid-row-start: 16;
}

.end-1pm {
  grid-row-end: 7;
}

.end-2pm {
  grid-row-end: 8;
}

.end-2pm {
  grid-row-end: 9;
}

.end-3pm {
  grid-row-end: 10;
}

.end-4pm {
  grid-row-end: 11;
}
.end-5pm {
  grid-row-end: 12;
}
.end-6pm {
  grid-row-end: 13;
}
.end-7pm {
  grid-row-end: 14;
}
.end-8pm {
  grid-row-end: 15;
}
.end-9pm {
  grid-row-end: 16;
}
.end-10pm {
  grid-row-end: 17;
}
// Event

.title {
  font-weight: 800;
  margin-bottom: 0.25rem;
}

.event {
  border: 1px solid var(--eventBorderColor);
  border-radius: 5px;
  padding: 0.5rem;
  margin: 0 0.5rem;
  background: white;
}

.space,
.date {
  height: 40px
}

// Global / Etc

body {
  font-family: system-ui, sans-serif;
}

.meeting4 {
  background: #ffd6d1;
  color:black;
  height:90px;
  font-size :12px;
}

.meeting3 {
  background: #0066FF;
  color:white;
  height:90px;
  font-size :12px;
}

.meeting2 {
  background: #DC134C;
  color:white;
  height:90px;
  font-size :12px;
}

.meeting {
  background: #11cdef;
  color:white;
  height:90px;
  font-size :12px;
}

.date {
  display: flex;
  gap: 1em;
}

.date-num {
  font-size: 3rem;
  font-weight: 600;
  display: inline;
}

.date-day {
  display: inline;
  font-size: 3rem;
  font-weight: 100;
}
</style>
<style>
       .page-title{
         position:right;
        height:150px;
        text-align:center;
        background:#11cdef;color:white;
        
         width:100%;
       
      
    }
      </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.css"  />
  
   <div class="page-title">
   <br>
   <h3> Agenda Kerja Selama 1 Bulan</h3><br>
<a href="<?=site_url('cuti');?>"><button class="btn btn-info" type="button">Kembali</button></a>
	</div>	
 <center> <h1 style="color:#11cdef"><?php echo date('F, Y');?></h1></center>	
<div class="calendar">
  <div class="timeline">
    <div class="spacer"></div>
    <div class="time-marker">7 AM</div>
    <div class="time-marker">8 AM</div>
    <div class="time-marker">9 AM</div>
    <div class="time-marker">10 AM</div>
    <div class="time-marker">11 AM</div>
    <div class="time-marker">12 PM</div>
    <div class="time-marker">1 PM</div>
    <div class="time-marker">2 PM</div>
    <div class="time-marker">3 PM</div>
    <div class="time-marker">4 PM</div>
    <div class="time-marker">5 PM</div>
    <div class="time-marker">6 PM</div>
    <div class="time-marker">7 PM</div>
    <div class="time-marker">8 PM</div>
    <div class="time-marker">9 PM</div>
    <div class="time-marker">10 PM</div>
  </div>

  <div class="days">
  <?php

	
	foreach ($agendaall as $b => $row) { 
	
    $BULAN = date('d, F, Y', strtotime($row->date));
        $timestamp = strtotime($row->date);
    $day = date('l', $timestamp);
    $originalDate = $row->date;
    $newDate = date("d", strtotime($originalDate));
    $newmonth = date("m", strtotime($originalDate));
    $month = date('d', $timestamp);
 ?>

<div class="day mon" >
      <div class="date" style="width:200px;font-size:16px;p-align:right"
        <p class="date-num" style="color:#11cdef;"> <h2 style="color:#11cdef;"><?php echo $day.", "?></h2></p>
        <p class="date-day" style="width:200px;font-size:16px;p-align:right"> <h2 style="color:#11cdef;"><?=$month?> </h2></p>
      </div>

      <div class="events" style="margin-top:30px">
        <?php
 
      foreach ($agenda as $b => $r) { 
       // $timestart= 
       
   if($row->id_agenda == $r->id_agenda){ ?>
        <div class="event start-<?=$r->time_start?> end-<?=$r->time_end?> <?=$r->type_notes?>" style="width:120px">
          <p class="title"><?=$r->notes?></p>
          <p class="time"><?=$r->time_start?>- <?=$r->time_end?></p>
        </div>
        <?php
      }
      ?>
        <?php
      
     //  }
        ?>
       
      
<?php


}

?>
      </div>   </div>  
  
    
    
    
      	<?php
		
    
	}
    ?>
   
  </div>
</div>
