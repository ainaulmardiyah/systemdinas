<html>
    <title>Login Staf Dinas</title>
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
    overflow-y: scroll;

}
.kotak2{
	background: #fcfcfc;
	padding: 20px;
	float: center;
	margin-left: 400px;
	width: 150px;
	height: 150px;
	-ms-transform: rotate(30deg); /* Support IE 9 */
    -webkit-transform: rotate(30deg); /* support Safari */
    transform: rotate(20deg); /* Standard syntax */ 
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
    height: 615px
}

.frame-short {
    height: 400px;
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
#box:hover{
    rotate: x 90deg;
    transition: width 10s, height 2s, transform 2s;
}


        /* Container Style */
      

        
        /* Style Text Content */
        .text-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 5px #0059ff;
            letter-spacing: 2px;
            z-index: 10;
        }

        .text-content h4 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .text-content p {
            font-size: 1.5rem;
            font-style: italic;
            font-weight: lighter;
            width: 80%;
        }

        /* Style Snowballs */
        .snow-ball-container .snow-ball {
            position: absolute;
            border-radius: 50%;
            background: white;
        }

        .snow-ball-container .snow-ball:nth-child(even) {
            width: 16px;
            height: 16px;
            animation: flake-motion 15s linear infinite;
        }

        /* Position the Snowballs above the screen */
        .snow-ball-container .snow-ball:nth-child(1) {
            top: -50%;
            left: 5%;
            width: 20px;
            height: 20px;
            animation: snowball-animation 12s linear 2s infinite;
        }

        .snow-ball-container .snow-ball:nth-child(2) {
            top: -20%;
            left: 10%;
        }

        .snow-ball-container .snow-ball:nth-child(3) {
            top: -50%;
            left: 15%;
            animation: snowball-animation 12s linear infinite;
        }

        .snow-ball-container .snow-ball:nth-child(4) {
            top: -10%;
            left: 20%;
        }

        .snow-ball-container .snow-ball:nth-child(5) {
            top: -20%;
            left: 25%;
            width: 20px;
            height: 20px;
            animation: snowball-animation 12s linear 2s infinite;
        }

        .snow-ball-container .snow-ball:nth-child(6) {
            top: -40%;
            left: 30%;
        }

        .snow-ball-container .snow-ball:nth-child(7) {
            top: -30%;
            left: 35%;
            width: 5px;
            height: 5px;
            animation: snowball-animation 12s linear infinite;
        }

        .snow-ball-container .snow-ball:nth-child(8) {
            top: -20%;
            left: 40%;
        }

        .snow-ball-container .snow-ball:nth-child(9) {
            top: -50%;
            left: 45%;
            width: 5px;
            height: 5px;
            animation: snowball-animation 12s linear 2s infinite;
        }

        .snow-ball-container .snow-ball:nth-child(10) {
            top: -5%;
            left: 50%;
        }

        .snow-ball-container .snow-ball:nth-child(11) {
            top: -20%;
            left: 60%;
            animation: snowball-animation 12s linear infinite;
        }

        .snow-ball-container .snow-ball:nth-child(12) {
            top: -10%;
            left: 70%;
        }

        .snow-ball-container .snow-ball:nth-child(13) {
            top: -50%;
            left: 80%;
            width: 5px;
            height: 5px;
            animation: snowball-animation 12s linear 2s infinite;
        }

        .snow-ball-container .snow-ball:nth-child(14) {
            top: -20%;
            left: 90%;
        }

        .snow-ball-container .snow-ball:nth-child(15) {
            top: -50%;
            left: 95%;
            width: 30px;
            height: 30px;
            animation: snowball-animation 12s linear infinite;
        }

        /* Define animations of Snowball and Snowflakes */
        @keyframes snowball-animation {
            0% {
                transform: translate(0);
                opacity: 1;
            }
            20% {
                transform: translate(4px, 100px);
                opacity: 0.8;
            }
            40% {
                transform: translate(-7px, 200px);
                opacity: 0.7;
            }
            60% {
                transform: translate(10px, 400px);
                opacity: 0.5;
            }
            80% {
                transform: translate(-14px, 700px);
                opacity: 0.2;
            }
            100% {
                transform: translate(16px, 900px);
                opacity: 0;
            }
        }

        @keyframes flake-motion {
            0% {
                transform: translate(-2px, 0);
                opacity: 1;
            }
            20% {
                transform: translate(-9px, 200px);
                opacity: 0.9;
            }
            40% {
                transform: translate(14px, 300px);
                opacity: 0.7;
            }
            60% {
                transform: translate(-22px, 400px);
                opacity: 0.6;
            }
            80% {
                transform: translate(30px, 600px);
                opacity: 0.5;
            }
            90% {
                transform: translate(-40px, 800px);
                opacity: 0.3;
            }
            100% {
                transform: translate(52px, 1000px);
                opacity: 0;
            }
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
.hu__hu__ { animation: hu__hu__ infinite 2s ease-in-out }
@keyframes hu__hu__ {
    50% { transform: translateY(30px) }
}
</style>
<script>
$(function() {
$(".btn").click(function() {
$(".form-signin").toggleClass("form-signin-left");
$(".form-signup").toggleClass("form-signup-left");
$(".frame").toggleClass("frame-long");
$(".signup-inactive").toggleClass("signup-active");
$(".signin-active").toggleClass("signin-inactive");
$(".forgot").toggleClass("forgot-left");
$(this).removeClass("idle").addClass("active");
});
});

$(function() {
$(".btn-signup").click(function() {
$(".nav").toggleClass("nav-up");
$(".form-signup-left").toggleClass("form-signup-down");
$(".success").toggleClass("success-left");
$(".frame").toggleClass("frame-short");
});
});

$(function() {
$(".btn-signin").click(function() {
$(".btn-animate").toggleClass("btn-animate-grow");
$(".welcome").toggleClass("welcome-left");
$(".cover-photo").toggleClass("cover-photo-down");
$(".frame").toggleClass("frame-short");
$(".profile-photo").toggleClass("profile-photo-down");
$(".btn-goback").toggleClass("btn-goback-up");
$(".forgot").toggleClass("forgot-fade");
});
});
</script>
<Script>
window.onscroll = function () {
    scrollRotate();
};

function scrollRotate() {
    let image = document.getElementById("container");
    image.style.transform = "rotate(" + window.pageYOffset/4 + "deg)";
}

$(document).ready(function() {
  var rotation = 0;
  $(document).on('keydown', function(e) {
    var keyCode = e.keyCode;
    var div = $("#container");
    e.preventDefault();

    if (keyCode === 37) div.css("left", (div.position().left - 1) + "px");
    if (keyCode === 38) div.css("top", (div.position().top - 1) + "px");
    if (keyCode === 39) div.css("right", (div.position().right + 1) + "px");
    if (keyCode === 40) div.css("down", (div.position().down + 1) + "px");
   
    if (keyCode === 32) {
      rotation -= 90;
      if (rotation < -360)
        rotation = 0;
      
      div.css('transform','rotate('+rotation+'deg)');
    }
  });

  document.onkeydown = function(e) {
    switch (e.keyCode) {
        case 37:
            alert('left');
            break;
        case 38:
            alert('up');
            break;
        case 39:
            alert('right');
            break;
        case 40:
            alert('down');
            break;
    }
};
});


    </script>
     <audio controls autoplay loop>
        <source src="<?php echo base_url('assets/sound.mp3')?>" type="audio/mpeg">
    </audio>
<div class="snow-ball-container">
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
            <div class="snow-ball"></div>
        </div>
</div  >
    <div class="container" id="container">
   
    <div class="frame">
        <div class="nav">
            <ul class="links">
                
                <li class="signin-active"><a class="btn">Login Karyawan Dinas</a></li>
               
            </ul>
        </div>
        <div ng-app ng-init="checked = false">
            <form class="form-signin" action="<?=site_url('Loginstaf/login')?>" method="post" name="form"> 
			<label for="fullname">Username</label><input class="form-styling" type="text" name="username" placeholder="" /> 
			<label for="password">Password</label> <input class="form-styling" type="password" name="password" placeholder="" /> <input type="checkbox" id="checkbox" /> <label for="checkbox"><span class="ui"></span>Keep me signed in</label>
               <button class="btn btn-info" name="login">Login</button>
			    <a class="btn btn-info" href="<?=site_url('loginstaf/addregister');?>" style="background-color:#11cdef;color:white">Register</a>
            </form>
            <form class="form-signup" action="" method="post" name="form"> <label for="fullname">Full name</label> <input class="form-styling" type="text" name="email" placeholder="" /><label for="email">Email</label> <input class="form-styling" type="text" name="email" placeholder="" /> <label for="dlno">Enter DL Number</label> <input class="form-styling" type="text" name="dlno" placeholder="" /> <label for="password">Create password</label> <input class="form-styling" type="text" name="confirmpassword" placeholder="" /> <a ng-click="checked = !checked" class="btn-signup">REGISTER</a> </form>
            <div class="success"> <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                    <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314 c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042 c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                    <div class="successtext">
                        <p> New User registered, Kindly check your email for confirmation.</p>
                    </div>
            </div>
        </div>
        <div class="forgot"> <a href="#">Forgot your password?</a> </div>
        <div>
            <div class="cover-photo"></div>
            <div class="profile-photo"></div>
            <h1 class="welcome">Welcome,User</h1> <a class="btn-goback" value="Refresh" onClick="history.go()">Go back</a>
        </div>
    </div> <a id="refresh" value="Refresh" onClick="history.go()"> <svg class="refreshicon" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;" xml:space="preserve">
            <path d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224 c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5 c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5 c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025 c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614 l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z" /> </svg> </a>
</div>