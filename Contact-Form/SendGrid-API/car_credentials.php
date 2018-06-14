<div class="container text-center">
    <div class="container text-left">
        <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 2.5em; ">
            <?php echo $category; ?> 
        </h2>  
    </div>    
    <div style= "border-style: solid;">
        <div class="col-sm-6">
            <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.5em; ">
                <?php  echo "Name:<b> $name</b>"; ?>
            </p>
            
        </div>
        <div class="col-sm-3">
            <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.5em; ">
                <?php echo "ID: $id <br>";  ?>
            </p>
            
        </div>
        <div class="col-sm-3">
            <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.5em; ">
                <?php echo "<b>$$price </b>" ;  ?>
            </p>  
        </div>
        <div class="col-sm-6">
            <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.5em; ">
                <?php echo "Time Posted:<b> " . date('F j,g:i a', strtotime($timepost)- 60 * 60 * 5) . " </b><br>";  ?>
            </p>  
        </div>
        <div class="col-sm-6">
            <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.5em; ">
                <?php echo " Phone:<b> $phone</b> <br>" ; ?>
            </h3>  
        </div>
        <div class="col-sm-6">
            <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.5em; ">
                <?php echo "From: $pickUp <br> To: $dropOff  " ;  ?>
            </h3>  
        </div>
        <div class="col-sm-6">
            <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.5em; ">
                <?php echo " City:<b> $city, $state</b>" ;  ?>
            </h3>  
        </div>
        <br>
        
        <div style="margin:11%"> </div>
        <div class="col-sm-12">  
    <form action="complete.php" method="POST"> 
        <input class="form-control" type="hidden" name="C_Name" value='<?php  echo  $name; ?>'>
        <input class="form-control" type="hidden" name="Phone" value='<?php echo  $phone ;  ?>'>
        <input class="form-control" type="hidden" name="ID" value='<?php echo $id;  ?>'>
        <input class="form-control" type="hidden" name="Price" value='<?php echo  $price ;  ?>'>
        <input class="form-control" type="hidden" name="Category" value='<?php echo $category ;  ?>'>
        <input class="btn-default" type="submit" name="submit" value="Complete FAVR">
    </form>
    </div>
    </div>
</div>  
    