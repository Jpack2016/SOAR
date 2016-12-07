<title>
SOAR - A resume builder
</title>
<head>
<style>
.button {
border-radius: 4px;
background-color: #f4511e;
border: none;
color: #FFFFFF;
font-size: 28px;
padding: 20px;
width: 200px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.button span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.button span:after {
content: '»';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.button:hover span {
padding-right: 25px;
}

.button:hover span:after {
opacity: 1;
right: 0;
}
.stylez{
        list-style: none;
        text-align: center;

    }
li{
        display: inline-block;
        margin: 2%;
    }
</style>
</head>
<body>
<h1 style="text-align:center; font-size:55px;">Welcome to SOAR </h1>

<ul class="stylez">
    <li><button class="button"><span>Create Resume </span></button></li>
    <li><button class="button"><span>Edit Resume </span></button></li>
    <li><button class="button"><span>Search Database </span></button></li>
</ul>


<div class="wrapper">
    <h1>Google Profile Details </h1>
    <?php
    echo '<div class="welcome_txt">Welcome <b>'.$_SESSION['google_data']['given_name'].'</b></div>';
     echo '<div class="google_box">';
     echo '<p class="image"><img src="'.$_SESSION['google_data']['picture'].'" alt="" width="300" height="220"/></p>';
     echo '<p><b>Google ID : </b>' . $_SESSION['google_data']['id'].'</p>';
     echo '<p><b>Name : </b>' . $_SESSION['google_data']['name'].'</p>';
     echo '<p><b>Email : </b>' . $_SESSION['google_data']['email'].'</p>';
     echo '<p><b>Gender : </b>' . $_SESSION['google_data']['gender'].'</p>';
     echo '<p><b>Locale : </b>' . $_SESSION['google_data']['locale'].'</p>';
     echo '<p><b>Google+ Link : </b>' . $_SESSION['google_data']['link'].'</p>';
     echo '<p><b>You are login with : </b>Google</p>';
     echo '<p><b>Logout from <a href="logout.php?logout">Google</a></b></p>';
     echo '</div>';
    ?>
</div>
</body>
