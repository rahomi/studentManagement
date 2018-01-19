<?php
include_once( 'database.php' );


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
<table class="table table-hover">
    <thead>
    <tr>
        <td>Id</td>
        <td>Subject Name</td>
        <td>GPA</td>
        <td>GRADE</td>
    </tr>
    </thead>
    <tbody>
	<?php
	$query   = "SELECT * FROM gradedetails ORDER BY id";
	$result  = mysqli_query( $conn, $query );

	while( $student = mysqli_fetch_assoc( $result ) ) {
		?>


        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['subjectname']; ?></td>
            <td><?php echo $student['gpa']; ?></td>
            <td><?php echo $student['grade']; ?></td>


        </tr>
		<?php
	}
	?>

    </tbody>

</table>
</div>