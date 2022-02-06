

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description:" content="This is the Second page of this website">
    <meta name="author" content="Nika Gedenidze, Giorgi Gogitidze">
    <meta name="keywords" content="HTML,sample website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="~/style.css">
   <script src="https://kit.fontawesome.com/9cb24db5e9.js" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
    <title>Employee Management System</title>
    <title></title>
  </head>
<body>
    
<?php
        $con=mysqli_connect("localhost","root","","testdb");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM employees");

?>
<table id="example" class="display" cellspacing="0" width="100%">
      <thead>
      <tr>
        <th class="th-sm">Firstname</th>
        <th class="th-sm">Lastname</th>
        <th class="th-sm">Email</th>
        <th class="th-sm">Phone Number</th>
        <th >Hire Date</th>
        <th>Job Id</th>
        <th>Salary</th>
    </tr>
</thead>
<tbody>
  [[1,3,5] , [5,4,7] , [3,6,8]]


<?php 
      while($row = mysqli_fetch_array($result))
      { ?>
      <tr>
          <td><?php echo $row['first_name'];?></td>
          <td><?php echo $row['last_name'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['phone_number'];?></td>
          <td><?php echo $row['hire_date'];?></td>
          <td><?php echo $row['job_id'];?></td>
          <td><?php echo $row['salary'];?></td>
      </tr>

<?php } ?>

    </tbody>
        <tfoot>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th >Hire Date</th>
                <th>Job Id</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>

<?php
      mysqli_close($con);
?>
      
      
  </body>
</html>



<script>

$(document).ready(function() {
    $('#example').DataTable( {
        select: true
    } );
} );

</script>