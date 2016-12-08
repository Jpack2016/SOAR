<title>
SOAR - A resume builder
</title>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
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

</body>
