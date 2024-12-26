<?php

require 'config.php';
session_start();

?>



<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
  table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
    .box
  {
    flex-direction:column;
  }
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
        .add
        {
            display:flex;
            flex-direction: column;
        }
}
input
{
  height:30px;
  width:200px;
  margin-bottom:20px;
}
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
</style>
<body>
    <form method="POST">

</form>
  <table>
    <caption><uppercase></uppercase></caption>
    <thead>
      <tr>
        <th scope="col">COMPANIES THAT YOU ARE ELIGIBLE</th>
      </tr>
    </thead>
    <tbody>
            <?php 

$res=mysqli_query($con,"SELECT * FROM evaluation");
$array=array();
$C=$_SESSION['C'];
$CP=$_SESSION['C++'];
$Java=$_SESSION['Java'];
$Python=$_SESSION['Python'];
$NPTEL=$_SESSION['NPTEL'];
$Internships=$_SESSION['Internship'];


while($row=mysqli_fetch_array($res))
{
  if($row['C']<=$C and $row['C++']<=$CP and $row['Java']<=$Java and $row['Python']<=$Python and $row['NPTEL']<=$NPTEL and $row['Internship']<=$Internships)
  {
    $_SESSION['t']=$row['Company'];
    ?>
     <tr>
    <td data-label="COMPANY"><?php echo $_SESSION['t']; ?></td>
    </tr>
    <?php
  }
}
?>
      
              </tbody>
            </table>
</body>
</html>




<?php




















?>