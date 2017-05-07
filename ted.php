

 <?php   
 require_once 'conn.php';
            $sql = "select * from videos";
            $result = mysqli_query($con,'select * from videos') or die ("Could not access DB" . mysql_error());

            while ($row = mysqli_fetch_assoc($result))
            {  
 $src=$row ['videos'];

                    $path="http://localhost:8888/home/";
 //$home=$path.$src;
                //echo "<video src=\"$home" ."\" height=\"200\" width=\"200\"/>";
               // echo $row['id'] . " " . $row['videos'] . "<br />";
                //echo "</p>";
                ?>
 <video width="400" height="400" controls>
      <source src="videos/<?php echo $row['videos'] ?>" type="video/mp4"  >
    </video> 
 <?php

            }

        ?>
