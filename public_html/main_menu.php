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


<div class="heading">PHP Google OAuth 2.0 Login</div>
<div class="box">
  <div>
	<!-- Show Login if the OAuth Request URL is set -->
    <?php if (isset($authUrl)): ?>
	  <img src="images/user.png" width="100px" size="100px" /><br/>
      <a class='login' href='<?php echo $authUrl; ?>'><img class='login' src="images/sign-in-with-google.png" width="250px" size="54px" /></a>
	<!-- Show User Profile otherwise-->
    <?php else: ?>
	  <img class="circle-image" src="<?php echo $userData["picture"]; ?>" width="100px" size="100px" /><br/>
	  <p class="welcome">Welcome <a href="<?php echo $userData["link"]; ?>" /><?php echo $userData["name"]; ?></a>.</p>
	  <p class="oauthemail"><?php echo $userData["email"]; ?></p>
	  <div class='logout'><a href='?logout'>Logout</a></div>
    <?php endif ?>
  </div>
</div>
</body>
