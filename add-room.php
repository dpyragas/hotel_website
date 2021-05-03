<?php 

?>
  </head>
  <body>
    <div id="wrapper">
<?php require_once('header-admin.php');?>

        <div class="container-fluid body-section container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add a Room</h2>
                    
                    <?php
                    require_once('db.php');
                    if(isset($_POST['submit'])){
                        $title = mysqli_real_escape_string($con,$_POST['title']);
                        $post_data = mysqli_real_escape_string($con,$_POST['post-data']);
                        $size = mysqli_real_escape_string($con,$_POST['size']);
                        $price = mysqli_real_escape_string($con,$_POST['price']);
                        
                        $image1 = $_FILES['image1']['name'];
                        $tmp_name1 = $_FILES['image1']['tmp_name'];
                       
                        
                        $q = "SELECT * FROM rooms ORDER BY rooms.id DESC LIMIT 1";
                        $r = mysqli_query($con, $q);
                        if(mysqli_num_rows($r) > 0){
                            $row = mysqli_fetch_array($r);
                            $id = $row['id'];
                            $id = $id + 1;
                        }
                        else{
                            $id = 1;
                        }
                        
                        
                        if(empty($title) or empty($post_data) or empty($size) or empty($price) or empty($image1)){
                            $error = "All Fields Are Required";
                            
                        }
                        else{
                            $insert_query = "INSERT INTO rooms (`id`,`title`,`description`,`size`,`price`,`image1`) VALUES ($id,'$title','$post_data','$size','$price','$image1')";
                            if(mysqli_query($con, $insert_query)){
                                $path1 = "images/photos/$image1";
                                
                                if(move_uploaded_file($tmp_name1, $path1)){
                                    $msg = "Post has been added";
                                    $title = "";
                                    $post_data = "";
                                    $size = "";
                                    $price = "";
                                    copy($path1, "$path1");
                                   
                                }
                            }
                            else{
                                $error = "Post Has not Been Added";
                            }
                        }
                    }
                    ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Room Name:</label>
                                    <?php
                                    if(isset($msg)){
                                        echo "<span class='pull-right' style='color:green;'>$msg</span>";
                                    }
                                    else if(isset($error)){
                                        echo "<span class='pull-right' style='color:red;'>$error</span>";
                                    }
                                    ?>
                                    <input type="text" name="title" placeholder="Type Room Title Here" value="<?php if(isset($title)){echo $title;}?>" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="title">Room Description:</label>
                                    <textarea name="post-data" id="textarea" rows="10" class="form-control"><?php if(isset($post_data)){echo $post_data;}?></textarea>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">Beds </label>
                                            <input type="text" name="size" placeholder="Beds in room" value="<?php if(isset($title)){echo $size;}?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Price per night</label>
                                            <input type="text" name="price" placeholder="Price per night" value="<?php if(isset($title)){echo $price;}?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="file">Image:</label>
                                            <input type="file" name="image1">
                                        </div>
                                    </div>
                                    
                                                                    
                                <input type="submit" class="btn btn-primary" value="Add Room" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
