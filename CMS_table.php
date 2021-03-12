        <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }

        </style>
        
        <body>
        
        <h2>User Info</h2>
        
        <table>
          <tr>
            <th>Userinfo</th>
            <th>Contact</th>
            <th>Username</th>
          </tr>
          <tr>
            <td>Administrator</td>
            <td>mgu@admin.com</td>
            <td>admin</td>

          </tr>
          <tr>
            <td>Publisher</td>
            <td>mgu@pub.com</td>
            <td>publisher</td>

          </tr>
          <tr>
            <td>Customer</td>
            <td>mgu@cus.com</td>
            <td>customer</td>
          </tr>
          
<?php

$conn = mysqli_connect(
    'localhost','u790965067_Mgu','Mosesgu0415!','u790965067_CSIS410_MoseGu');
$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);
while($array = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$array['Userinfo'].'</td>';
    echo '<td>'.$array['Contact'].'</td>';
    echo '<td>'.$array['Username'].'</td>';
    echo '</tr>';
}
?>
        </table>