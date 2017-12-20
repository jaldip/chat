<?php
    $connection = mysqli_connect("localhost","root","","demo");
    $query = "select * from reg";
    $result = mysqli_query($connection, $query);
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>data Table</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        
        <script>
         $(document).ready(function(){
            $('#myTable').dataTable();
        });
        </script>
    </head>
    <body>
        <br/><br/>
        <div class="container">
            <h3 align="center">Data Table using bootstrap</h3>
            <div class="table-responsive dataTable">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Department</td>
                            <td>Username</td>
                            <td>Password</td>
                            <td>Contact no</td>
                        </tr>
                    </thead>
                    <?php
        
    while ($data = mysqli_fetch_assoc($result) )
    {
?>
    <tr>
        
        <td><?php echo $data['first'];?></td>
        <td><?php echo $data['last'];?></td>
        <td><?php echo $data['department'];?></td>
        <td><?php echo $data['username'];?></td>
        <td><?php echo $data['password'];?></td>
        <td><?php echo $data['contact'];?></td>
        
        
    </tr>
    
    
<?php
    }?>
                </table>
            </div>
            
        </div>
        
    </body>
</html>
