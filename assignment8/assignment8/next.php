<html>
    <head>
</head>
<body style="top-margin:20px">
<br><br><br><br><br>
<center>
    <?php
    require('connect.php');
    if(isset($_POST['Check_Rating']))
    {
        $a=$_POST['movie1'];
        $c="Select * from rating where Movie_name='".$a."';";
       
        $d=mysqli_query($con,$c);
        ?>
    <table cellspacing="15px" border="1px" >
        <tr><th>MOVIE</th><th>AVERAGE RATING</th><th>No. Of Persons Rated</th></tr>
        <?php
        while($row=mysqli_fetch_array($d)){
?>
<tr> 
    <td><?php echo $row[0]  ?> </td>
    <td><?php echo $row[1]  ?> </td>
    <td><?php echo $row[2]  ?> </td>

</tr>
<?php
        }
    }
    ?>
    </table>
    <?php
    if(isset($_POST['Submit']))
    {
        $m=$_POST['movie'];
        $n=$_POST['rate'];
        $q="select * from rating where Movie_name='".$m."';";
        
        $res=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($res)){
        $avg=$row[1];
        $no=$row[2];
        }
        $total=($avg*$no);
        $no=$no+1;
        $total=$total+$n;
        $avg=$total/$no;
        $q="update rating set Rating=".$avg.",No_of_person_rated=".$no." where Movie_name='".$m."';";
        echo "updated successfully,please return to previous page";
        $k=mysqli_query($con,$q);
    }
    ?>
</center>

</body>
    </html>