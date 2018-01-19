<?php
include_once ('database.php');


if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
     if(isset($_REQUEST['addsub'])){
         $id = $_POST['stdid'];
         $sub = $_POST['sub'];
         $day = $_POST['day'];
         $time = $_POST['time'];
         $qry = "INSERT INTO routine values($id,'$sub','$day','$time')";
         $rslt = mysqli_query($conn,$qry);
         if($rslt)
        {
            //echo "<script></script>";
        }
        else{
            echo 'something went wrong!';
        }
     }
     $t11='-'; $t12='-'; $t21='-'; $t22='-'; $t31='-'; $t32='-'; $t41='-'; $t42='-';
          if(isset($_REQUEST['shwrtn'])){
              $id = $_POST['stdid'];
              $query = "SELECT * FROM routine WHERE std_id = $id";
                $run = mysqli_query($conn,$query);
                while($rslt= mysqli_fetch_assoc($run)){
                    if ($rslt['day']==='sun')
                    {
                        if($rslt['time']==='9am'){ $t11 = $rslt['sub']; }
                        else if($rslt['time']==='11am'){ $t21 = $rslt['sub']; }
                        else if($rslt['time']==='1pm'){ $t31 = $rslt['sub']; }
                        else if($rslt['time']==='3pm'){ $t41 = $rslt['sub']; }
                    }
                    else {
                        if($rslt['time']==='9am'){ $t12 = $rslt['sub']; }
                        else if($rslt['time']==='11am'){ $t22 = $rslt['sub']; }
                        else if($rslt['time']==='1pm'){ $t32 = $rslt['sub']; }
                        else if($rslt['time']==='3pm'){ $t42 = $rslt['sub']; }
                    }
                }
          }
?>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style>
    .th1{
        font-weight: bold;
        font-size: 20px;
    }
    td{
        text-align: center;
    }
</style>
<div class="container">
<form method="post">
                <div class="row" style="padding: 10%;">
                    <div class='col-lg-4'>
                        <label> Student Name :</label>
                    </div>
                        <div class='col-lg-8'>
                            <select id="stdid" name="stdid">
                                <?php
                                $query = "SELECT id,name FROM a ORDER BY id";
                                $result = mysqli_query($conn,$query);
                                while($student= mysqli_fetch_assoc($result)){?>
                                <option value="<?php echo $student['id']; ?>"><?php echo $student['id'].'. - '.$student['name']; ?></option>;
                                        <?php
                                }
                                ?>
                        </select>
                    </div>
                    <div class='col-lg-4'>
                        <label> Subject Tittle : </label> 
                    </div>
                        <div class='col-lg-8'>
                            <input type="text" class="form-control" id="sub" name="sub">
                    </div>
                    <div class='col-lg-4'>
                        <label> Day :</label>
                    </div>
                        <div class='col-lg-8'>
                            <select id="day" name="day">
                            <option value="sun">Sun-Tues</option>
                            <option value="mon">Mon-Wed</option>
                        </select>
                    </div>
                    <div class='col-lg-4'>
                        <label> Schedule :</label> 
                    </div>
                    <div class='col-lg-8'>
                        <select id="time" name="time"> 
                            <option value="9am">09.00AM-11.00AM</option>
                            <option value="11am">11.00AM-01.00PM</option>
                            <option value="1pm">01.00PM-03.00PM</option>
                            <option value="3pm">03.00PM-05.00PM</option>
                        </select>
                    </div>
                    <div class='col-lg-10'>
                             <label> </label> <input type="submit" id="addsub" name="addsub" class="btn btn-info center" value="Add Subject">
                    </div>
                    <div class='col-lg-2'>
                             <label> </label> <input type="submit" id="shwrtn" name="shwrtn" class="btn btn-info center" value="Show Routine">
                    </div>

                </div>
</form>
    <div class="container">
            <h4 style="text-align: center; padding-bottom: 20px; text-decoration: underline; ">
                            ROUTINE </h4>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead class="th1">
                    <tr>
                <td>TIME/DAY</td>
                <td>Sunday</td>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednesday</td>
                    </tr>
                </thead>
                <tr>
                <td class="th1">09.00AM-11.00AM</td>
                <td name="t11"> <?php echo $t11; ?> </td>
                <td name="t12"> <?php echo $t12; ?></td>
                <td name="t13"> <?php echo $t11; ?></td>
                <td name="t14"> <?php echo $t12; ?></td>
                </tr>
                <tr>
                <td class="th1">11.00AM-01.00PM</td>
                <td name="t21"> <?php echo $t21; ?></td>
                <td name="t22"> <?php echo $t22; ?></td>
                <td name="t23"> <?php echo $t21; ?></td>
                <td name="t24"> <?php echo $t22; ?></td>
                </tr>
                <tr>
                <td class="th1">01.00PM-03.00PM</td>
                <td name="t31"> <?php echo $t31; ?></td>
                <td name="t32"> <?php echo $t32; ?></td>
                <td name="t33"> <?php echo $t31; ?></td>
                <td name="t34"> <?php echo $t32; ?></td>
                </tr>
                <tr>
                <td class="th1">03.00PM-05.00PM</td>
                <td name="t41"> <?php echo $t41; ?></td>
                <td name="t42"> <?php echo $t42; ?></td>
                <td name="t43"> <?php echo $t41; ?></td>
                <td name="t44"> <?php echo $t42; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>