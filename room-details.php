<?php include 'header.php';?>

<?php
    require_once('db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = "SELECT * FROM rooms WHERE rooms.id = $id";
        $run = mysqli_query($con, $q);
        $row = mysqli_fetch_array($run);
    }
?>
<div class="container">
<h1 class="title"><?php echo $row['title']; ?></h1>
            <div id="RoomDetails" >
                <img src="images/photos/<?php echo $row['image1']; ?>" >
            </div>


<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p><?php echo $row['description']; ?></p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Common Facilities</h3>    
    <ul>
      <li>Television</li>
      <li>Attached bathroom with bath-tub.</li>
      <li>In-room coffee and/or tea</li>
      <li>Laptop-size safe.</li>
      <li>Lounge area</li>
      <li>Flat-screen TV</li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Size<span><?php echo $row['size']; ?> rooms</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span><?php echo $row['price']; ?></span></div>
    </div>
  </div>
</div>
                     


</div>
<?php include 'footer.php';?>