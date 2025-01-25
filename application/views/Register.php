<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap.css"  />
  
<style>
html,
body * {
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif
}

body {
    background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);

}

.container {
    width: 100%;
    padding-top: 60px;
    padding-bottom: 100px
}

.frame {
    height: 600px;
    width: 420px;
    background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS82mL0lCjn8cUhnzzoE1oYnjPkobX4USGFXw&usqp=CAU) no-repeat center center;
    background-size: cover;
    margin-left: auto;
    margin-right: auto;
    border-top: solid 1px rgba(255, 255, 255, .5);
    border-radius: 5px;
    box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: all .5s ease
}

.frame-long {
    height: 900px
}

.frame-short {
    height: 900px;
    margin-top: 50px;
    box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.1)
}

.nav {
    width: 100%;
    height: 100px;
    padding-top: 40px;
    opacity: 1;
    transition: all .5s ease
}

.nav-up {
    transform: translateY(-100px);
    opacity: 0
}

li {
    padding-left: 10px;
    font-size: 18px;
    display: inline;
    text-align: left;
    text-transform: uppercase;
    padding-right: 10px;
    color: #ffffff
}

.signin-active a {
    padding-bottom: 10px;
    color: #ffffff;
    text-decoration: none;
    border-bottom: solid 2px #1059FF;
    transition: all .25s ease;
    cursor: pointer
}

.signin-inactive a {
    padding-bottom: 0;
    color: rgba(255, 255, 255, .3);
    text-decoration: none;
    border-bottom: none;
    cursor: pointer
}

.signup-active a {
    cursor: pointer;
    color: #ffffff;
    text-decoration: none;
    border-bottom: solid 1px #1059FF;
    padding-bottom: 10px
}

.signup-inactive a {
    cursor: pointer;
    color: rgba(255, 255, 255, .3);
    text-decoration: none;
    transition: all .25s ease
}

.form-signin {
    width: 430px;
    height: 375px;
    font-size: 16px;
    font-weight: 300;
    padding-left: 37px;
    padding-right: 37px;
    padding-top: 55px;
    transition: opacity .5s ease, transform .5s ease
}

.form-signin-left {
    transform: translateX(-400px);
    opacity: .0
}

.form-signup {
    width: 430px;
    height: 375px;
    font-size: 12px;
    font-weight: 300;
    padding-left: 37px;
    padding-right: 37px;
    padding-top: 55px;
    position: relative;
    top: -375px;
    left: 400px;
    opacity: 0;
    transition: all .5s ease
}

.form-signup-left {
    transform: translateX(-399px);
    opacity: 1
}

.form-signup-down {
    top: 0px;
    opacity: 0
}

.success {
    width: 80%;
    height: 150px;
    text-align: center;
    position: relative;
    top: -890px;
    left: 450px;
    opacity: .0;
    transition: all .8s .4s ease
}

.success-left {
    transform: translateX(-406px);
    opacity: 1
}

.successtext {
    color: #ffffff;
    font-size: 16px;
    font-weight: 300;
    margin-top: -35px;
    padding-left: 37px;
    padding-right: 37px
}

#check path {
    stroke: #ffffff;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-width: .85px;
    stroke-dasharray: 60px 300px;
    stroke-dashoffset: -166px;
    fill: rgba(255, 255, 255, .0);
    transition: stroke-dashoffset 2s ease .5s, fill 1.5s ease 1.0s
}

#check.checked path {
    stroke-dashoffset: 33px;
    fill: rgba(255, 255, 255, .03)
}

.form-signin input,
.form-signup input {
    color: #ffffff;
    font-size: 13px
}

.form-styling {
    width: 100%;
    height: 35px;
    padding-left: 15px;
    border: none;
    border-radius: 20px;
    margin-bottom: 20px;
    background: rgba(255, 255, 255, .2)
}

label {
    font-weight: 400;
    text-transform: uppercase;
    font-size: 13px;
    padding-left: 15px;
    padding-bottom: 10px;
    color: rgba(255, 255, 255, .7);
    display: block
}

:focus {
    outline: none
}

.form-signin input:focus,
textarea:focus,
.form-signup input:focus,
textarea:focus {
    background: rgba(255, 255, 255, .3);
    border: none;
    padding-right: 40px;
    transition: background .5s ease
}

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
    position: absolute;
    display: none
}

[type="checkbox"]:not(:checked)+label,
[type="checkbox"]:checked+label {
    position: relative;
    padding-left: 85px;
    padding-top: 2px;
    cursor: pointer;
    margin-top: 8px
}

[type="checkbox"]:not(:checked)+label:before,
[type="checkbox"]:checked+label:before,
[type="checkbox"]:not(:checked)+label:after,
[type="checkbox"]:checked+label:after {
    content: '';
    position: absolute
}

[type="checkbox"]:not(:checked)+label:before,
[type="checkbox"]:checked+label:before {
    width: 65px;
    height: 30px;
    background: rgba(255, 255, 255, .2);
    border-radius: 15px;
    left: 0;
    top: -3px;
    transition: all .2s ease
}

[type="checkbox"]:not(:checked)+label:after,
[type="checkbox"]:checked+label:after {
    width: 10px;
    height: 10px;
    background: rgba(255, 255, 255, .7);
    border-radius: 50%;
    top: 7px;
    left: 10px;
    transition: all .2s ease
}

[type="checkbox"]:checked+label:before {
    background: #0F4FE6
}

[type="checkbox"]:checked+label:after {
    background: #ffffff;
    top: 7px;
    left: 45px
}

[type="checkbox"]:checked+label .ui,
[type="checkbox"]:not(:checked)+label .ui:before,
[type="checkbox"]:checked+label .ui:after {
    position: absolute;
    left: 6px;
    width: 65px;
    border-radius: 15px;
    font-size: 14px;
    font-weight: bold;
    line-height: 22px;
    transition: all .2s ease
}

[type="checkbox"]:not(:checked)+label .ui:before {
    content: "no";
    left: 32px;
    color: rgba(255, 255, 255, .7)
}

[type="checkbox"]:checked+label .ui:after {
    content: "yes";
    color: #ffffff
}

[type="checkbox"]:focus+label:before {
    box-sizing: border-box;
    margin-top: -1px
}

.btn-signup {
    float: left;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    text-align: center;
    color: #ffffff;
    padding-top: 8px;
    width: 100%;
    height: 35px;
    border: none;
    border-radius: 20px;
    margin-top: 23px;
    background-color: #1059FF
}

.btn-signin {
    float: left;
    padding-top: 8px;
    width: 100%;
    height: 35px;
    border: none;
    border-radius: 20px;
    margin-top: -8px
}

.btn-animate {
    float: left;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    text-align: center;
    color: rgba(255, 255, 255, 1);
    padding-top: 8px;
    width: 100%;
    height: 35px;
    border: none;
    border-radius: 20px;
    margin-top: 23px;
    background-color: rgba(16, 89, 255, 1);
    left: 0px;
    top: 0px;
    transition: all .5s ease, top .5s ease .5s, height .5s ease .5s, background-color .5s ease .75s
}

.btn-animate-grow {
    width: 130%;
    height: 625px;
    position: relative;
    left: -55px;
    top: -420px;
    color: rgba(255, 255, 255, 0);
    background-color: rgba(255, 255, 255, 1)
}

a.btn-signup:hover,
a.btn-signin:hover {
    cursor: pointer;
    background-color: #0F4FE6;
    transition: background-color .5s
}

.forgot {
    height: 100px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    padding-top: 24px;
    margin-top: -535px;
    border-top: solid 1px rgba(255, 255, 255, .3);
    transition: all 0.5s ease
}

.forgot-left {
    transform: translateX(-400px);
    opacity: 0
}

.forgot-fade {
    opacity: 0
}

.forgot a {
    color: rgba(255, 255, 255, .3);
    font-weight: 400;
    font-size: 13px;
    text-decoration: none
}

.welcome {
    width: 100%;
    height: 50px;
    position: relative;
    color: rgba(35, 43, 85, 0.75);
    opacity: 0;
    transition: transform 1.5s ease .25s, opacity .1s ease 1s
}

.welcome-left {
    transform: translateY(-780px);
    opacity: 1
}

.cover-photo {
    height: 150px;
    position: relative;
    left: 0px;
    top: -900px;
    background: linear-gradient(rgba(35, 43, 85, 0.75), rgba(35, 43, 85, 0.95)), url(https://img.icons8.com/bubbles/100/000000/user.png);
    background-size: cover;
    opacity: 0;
    transition: all 1.5s ease 0.55s
}

.cover-photo-down {
    top: -575px;
    opacity: 1
}

.profile-photo {
    height: 125px;
    width: 125px;
    position: relative;
    border-radius: 70px;
    left: 155px;
    top: -1000px;
    background: url(https://img.icons8.com/bubbles/100/000000/user.png);
    background-size: 100% 135%;
    background-position: 100% 100%;
    opacity: 0;
    transition: top 1.5s ease 0.35s, opacity .75s ease .5s;
    border: solid 3px #ffffff
}

.profile-photo-down {
    top: -636px;
    opacity: 1
}

h1 {
    color: #ffffff;
    font-size: 35px;
    font-weight: 300;
    text-align: center
}

.btn-goback {
    position: relative;
    margin-right: auto;
    top: -400px;
    float: left;
    padding: 8px;
    width: 83%;
    margin-left: 37px;
    margin-right: 37px;
    height: 35px;
    border-radius: 20px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    text-align: center;
    color: #1059FF;
    margin-top: -8px;
    border: solid 1px #1059FF;
    opacity: 0;
    transition: top 1.5s ease 0.35s, opacity .75s ease .5s
}

.btn-goback-up {
    top: -1080px;
    opacity: 1
}

a.btn-goback:hover {
    cursor: pointer;
    background-color: #0F4FE6;
    transition: all .5s;
    color: #ffffff
}

#refresh {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #ffffff;
    width: 50px;
    height: 50px;
    border-radius: 25px;
    box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.1);
    padding: 13px 0 0 13px
}

.refreshicon {
    fill: #d3d3d3;
    transform: rotate(0deg);
    transition: fill .25s ease, transform .25s ease
}

.refreshicon:hover {
    cursor: pointer;
    fill: #1059FF;
    transform: rotate(180deg)
}
form {
        max-width: 400px;
		
        margin: 10px auto;
        padding: 10px 20px;
      
    }
</style>
		
<div class="">
    <div class="">
	<form class="form-signin" action="<?=site_url('Loginstaf/register')?>" method="post"  enctype="multipart/form-data"  name="form"> 
	
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">Register User</a></li>
               
            </ul>
        </div>
		
      
            <label for="emp_name">Nama Depan</label><input class="form-styling" type="text" name="emp_name" placeholder="" /> 
			<label for="emp_name_last">Nama Belakang</label><input class="form-styling" type="text" name="emp_name_last" placeholder="" /> 
			  <label for="bidang_karyawan">bidang karyawan</label> 
            <select name="bidang_karyawan" class="form-styling">
                <?php
                foreach($resultbidang as $r => $row){
                    ?>
                    <option value="<?=$row->id_bidang?>"><?=$row->nama_bidang?></option>
                    <?php

                }
               
                ?>
            </select>
            <label for="jabatan_karyawan">jabatan karyawan</label> 
                
            <select name="jabatan_karyawan" class="form-styling">
            <option value="kepala_bidang">Kepala Bidang</option>
                <option value="staf">Staf</option>
            </select>
           
            <label for="phone">Phone</label> <input class="form-styling" type="text" name="phone" placeholder="" /> 
             
			 <select name="jenis_kelamin" class="form-styling">
			 <option value="laki-laki">laki-laki</option>
			 <option value="perempuan">perempuan</option>
			 </select>
			 <label for="email">Email</label> <input class="form-styling" type="text" name="emp_email" placeholder="" /> 
              <label for="alamat">Alamat</label> <input class="form-styling" type="text" name="alamat_emp" placeholder="" /> 
               <label for="username">Username</label> <input class="form-styling" type="text" name="username" placeholder="" required /> 
                   <label for="password">Password</label> <input class="form-styling" type="password" name="password" required /> 
                     <label for="foto">foto</label> <input class="form-styling" type="file" name="foto" placeholder="" /> 
                      
			  <button class="btn btn-info" name="register">register</button>
     
           
 </div>       </form>