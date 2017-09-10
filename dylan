
                <img class="img-circle img-responsive img-center" src="../img/trainer1.jpeg" alt="" style="width:200px;height:200px;">
                <h3> <?php
                 $result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ".   $row["t1_pic"]."<br>";
     }
     
} else
    				{
    				}
                ?>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../img/trainer2.jpeg" alt="" style="width:200px;height:200px;">
                <h3><?php
                 $result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ".   $row["t1_bio"]."<br>";
     }
     
} else
    				{
    				}
                ?>
                    
                </h3>
               
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../img/trainer3.jpeg" alt="" style="width:200px;height:200px;">
                <h3><?php
                 $result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ".   $row["t1_bio"]."<br>";
     }
     
} else
    				{
    				}
                ?>
                    
                </h3>
               
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../img/trainer4.jpeg" alt="" style="width:200px;height:200px;">
                <h3><?php
                 $result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ".   $row["t1_bio"]."<br>";
     }
     
} else
    				{
    				}
                ?>
                   
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../img/trainer5.jpeg" alt="" style="width:200px;height:200px;" >
                <h3><?php
                 $result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ".   $row["t1_bio"]."<br>";
     }
     
} else
    				{
    				}
                ?>
                    
                </h3>
               </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../img/trainer6.jpg" alt="" style="width:200px;height:200px;">
                <h3><?php
                 $result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ".   $row["t1_bio"]."<br>";
     }
     
} else
    				{
    				}
                ?>
                    
                </h3>
                </div>