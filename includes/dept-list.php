<?php
include_once('database.php');

?>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<div class="container" style="height:500px;">
    <div class="row">
        <div class="col-lg-12">
            <a href="index.php" class="btn btn-info">Back</a><br/>
            <table class="table table-bordered" style width="100%">
                <thead>
                    <tr>
                        <th>Department ID</th>
                        <th>Department Name</th>
                        <th>Department Location</th>
                       
                        
                    </tr>
                </thead>
                <?php
                //echo "<pre/>";
                $query = "SELECT dept_id,dept_name,dept_loc FROM department";
                
                //$res=mysqli_query($conn,$q);

                $result = mysqli_query($conn, $query);
                //$student = mysqli_fetch_assoc($result);
                //$sn=1;
                while ($department = mysqli_fetch_assoc($result)){// $department = mysqli_fetch_assoc($res)) {
                    //print_r($student);
                    ?>
                    <tr>
                        
                        <<td><?php echo $department['dept_id']; ?></td> 
                        <td><?php echo $department['dept_name']; ?></td>
                        <td><?php echo $department['dept_loc']; ?></td>
                        
                        
                    </tr>
                <?php
                //$sn++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php //include_once('./includes/footer.php');
?>