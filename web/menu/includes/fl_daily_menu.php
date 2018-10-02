

  <div class="container" style="width:100%;padding-top: 10px;">
                     
                   
                     <div class="panel panel-default">
                       <!--<div class="panel-heading"><h4><b>Daily Menu</b></h24></div>-->
    <?php $title=$_GET['mtit']; ?>
                        <div class="container" style="width:1000px;margin-top: 10px;margin-left: 15px">
                        	<h4><b> <?php echo $title; ?></b></h4>
                        	 <p>Daily regular deals</p>
                            <?php 
   #  if (isset($_GET['mtit'])) {
    
                
  $title=$_GET['mtit'];
    $query ="select * from food_items";
    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                      <div class="well well-lg" style="margin-left: 3px;height: 100px">
 
                      	    <div class="panel-body">
                      	      <div class="row even">
                      	        <div class="col-md-7 col-xs-7 border"> <?php echo $row['f_title'];?></div> 
                      	        <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                      	        <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 533px"> <?php echo $row['f_price'];?> </div> 
                      	        <a href="#" ><i class="fa fa-plus green-color bold"></i></a> 
                              </div>
                           </div>
                           
                           
                    </div>
                     <?php
} 
?>
 
                       
                     </div>

                  
                     
               </div>
  
		        </div>
