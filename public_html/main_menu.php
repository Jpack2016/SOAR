<title>
SOAR - A resume builder
</title>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
.button {
background-color: #00426B; /* FAU Blue */
border: none;
border-radius:4px;
color: white;
border-radius: 4px;
border: none;
font-size: 28px;
padding: 20px;
width: 200px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.button span {
background-color: #00426B; /* FAU Blue */
border: none;
border-radius:4px;
color: white;
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.button span:after {
background-color: #00426B; /* FAU Blue */
border: none;
border-radius:4px;
color: white;
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

#welcome {
  display:block;
  font-weight: bold;
  font-size: 2.5em;
  font-family: "Verdana", Verdana, sans-serif;
  margin:auto;
  width:50%;
  color:#B60215;
  text-align:center;
}
</style>
</head>
<body>
<h1 style="text-align:center; font-size:55px;" id="welcome">Welcome to SOAR </h1>

<ul class="stylez">
    <li><button class="button" onclick="location.href='soarsearch.php';"><span>Search Database </span></button></li>
    <li><button class="button" onclick="location.href='';"><span>View/Export Resume </span></button></li>
</ul>

</body>
