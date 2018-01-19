<?php
include_once ('database.php');
$count = 1;
if(isset($_POST['save'])){

    $subname=$_POST['sname'];
    $gpa=$_POST['gpa'];
    $grade=$_POST['grade'];
    $query="INSERT INTO gradedetails(subjectname,gpa,grade) VALUES ('$subname',$gpa,'$grade')";
    $result=mysqli_query($conn,$query);
    if($result){
        echo "";
    }
    else{
        echo " problem";
    }

}


if(isset($_REQUEST['act']) && $_REQUEST['act']='del'){
    $id= $_REQUEST['id'];
    $query= "DELETE FROM gradedetails WHERE id =$id ";
    $rec = mysqli_query($conn,$query);
    if($rec){
        echo"<script>window.location='gradeform.php'</script>";
    }
    else{
        echo"problem";

    }

}









?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
    <form method="post">
        <div class="row">
            <div class='col-lg-6'>
                <label> Subject name : </label> <input type="text" class="form-control" id="sname" name="sname">
            </div>
            <div class='col-lg-6'>
                <label> GPA  : </label> <input type="number" class="form-control" id="gpa" name="gpa">
            </div>
            <div class='col-lg-6'>
                <label> Grade :</label> <input type="text" class="form-control" id="grade" name="grade">
            </div>
            <div class='col-lg-6'>
                <input type="submit" id="save"  name="save"  class="btn btn-info center" onclick="validation()">
            </div>
        </div>
    </form>
</div>

<div class="container">

    <table class="table table-hover">
        <thead>
        <tr>
            <td>Id</td>
            <td>Subject Name</td>
            <td>GPA</td>
            <td>GRADE</td>
            <td>Action</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
		<?php
		$query   = "SELECT * FROM gradedetails ORDER BY id";
		$result  = mysqli_query( $conn, $query );

		while( $student = mysqli_fetch_assoc( $result ) ) {
			?>


            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $student['subjectname']; ?></td>
                <td><?php echo $student['gpa']; ?></td>
                <td><?php echo $student['grade']; ?></td>
                <td><a href="admin_gradeshow.php ?id=<?php echo $student['id']?>">Edit</a></td>
                <td><a href="gradeform.php?id=<?php echo $student['id']?>& act=del">DELETE</a></td>


            </tr>
			<?php
		}
		?>

        </tbody>

    </table>

</div>

<script>
    function validation(){
        var subname = document.getElementById('sname').value;
        var gpa = document.getElementById('gpa').value;
        var grade = document.getElementById('grade').value;
        if (subname==""){

            alert("subname is must");
            return false;
        }
        if (gpa==""){

            alert("gpa is must");
            return false;
        }
        if (grade==""){

            alert("grade is must");
            return false;
        }

    }

</script>















