<title>
SOAR - A resume builder
</title>

<body>
<h1>Welcome to SOAR </h1>
<a>Create your Resume</a>
<a>Edit your Resume</a>
<a>Search database</a>

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
