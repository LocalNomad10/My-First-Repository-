 <?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

mysql_query("INSERT INTO GeneralInfo (firstfame, lastname, email, freetext)
VALUES ('Peter', 'Griffin',35)");

mysql_query("INSERT INTO SurveyResponse (definatelywill, will, indifferent, willnot, absolutelywillnot)
VALUES ('Glenn', 'Quagmire',33)");

mysql_close($con);
?>
