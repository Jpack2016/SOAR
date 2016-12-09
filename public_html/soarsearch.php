<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>SOAR Search</title>

    <link href="soarsearch.css" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />

    <script type="text/javascript">

        $(function() {
            $( "#skills" ).autocomplete({
                source: function( request, response ) {
                    $.ajax({
                        url: "seach.php",
                        dataType: "jsonp",
                        data: {
                            q: request.term
                        },
                        success: function( data ) {
                            response( data );
                        }
                    });
                },
            });
        });
    </script>
</head>

<body background="background.png">

  <div id="search">

    <h1>Search for a student</h1>

    <br />

    <div id="searchargs">
      <h2>What would you like to seach for?</h2>
      <form id="seachform" method="POST" action="results.php">
        <p>
          <select name="search">
            <option value="blank"></option>
            <option value="study">Area of Study</option>
            <option value="job">Job</option>
            <option value="skill">Skills</option>
            <option value="degree">Degree</option>
          </select>
        </p>

	<table border="0" width="100%">
      		<tr>
        		<td align="right">Search Key Words: &nbsp;&nbsp;&nbsp;&nbsp;</td>
        		<td align="left"><input type="text" id="skills" placeholder="Seacrhing for..."  /></td>
      		</tr>
    	</table>

      <p><input type="submit" value="Submit!"  /></p>
      </form>
  </div>

</body>
</html>

<?php
//require_once 'search.php';
50

?>
