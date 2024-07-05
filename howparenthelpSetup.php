<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <link rel="stylesheet" href="test.css">
  </head>
  <?php 

  include("dbconnect.php");
  if(isset($_POST['btnSave']))
  {
     $des=$_POST['des'];

     if(isset($_FILES["img1"]) && $_FILES["img1"]["error"]==0)
     {
       // Real file name
       $filename1 = $_FILES["img1"]["name"];
       // file path
       $filepath = $_FILES["img1"]["tmp_name"];
     }
     if(isset($_FILES["img2"]) && $_FILES["img2"]["error"]==0)
     {
       // Real file name
       $filename2 = $_FILES["img2"]["name"];
       // file path
       $filepath = $_FILES["img2"]["tmp_name"];
     }

     $sql="INSERT INTO howparenthelp (description, image1, image2) VALUES ('$des','$filename1', '$filename2') ";
     if($conn->query($sql)==TRUE)
     {
       echo " Insert one newletter successfully ";
       header("location:howparenthelpSetup.php");
     }

  }
  $sql1="SELECT * from howparenthelp";
  $result=$conn->query($sql1);

  ?>

  <body>
  <nav>
  <ul>

        <li class="link"><a href="adminhome.php">Home</a></li>
        <li class="link"><a href="servicesSetup.php">Services</a></li>
        <li class="link"><a href="newsletterSetup.php">NewsLetter</a></li>
        <li class="link"><a href="howparenthelpSetup.php">HowParentHelp</a></li>
        <li class="link"><a href="socialmediaappSetup.php">SocialMediaApps</a></li>
        <li class="link"><a href="contactList.php">Help/Support</a></li>
        <li class="link"><a href="MemberList.php">MemberList</a></li>
        <li class="link"><a href="logout.php">Logout</a></li>
      </ul>
    
    </nav>
    <header>
      <h1>HowParentHelp Set up</h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="contact">
        
        <!-- Contact Form -->
        <form action="#" method="GET" enctype="multipart/form-data">
        <label for="name">Description</label>
          <input type="text" id="name" name="des" required />

          <label for="name">Image</label>
          <input type="file" id="name" name="img1" required />

          <label for="name">Image</label>
          <input type="file" id="name" name="img2" required />

          <button type="submit" name="btnSave">Save</button>
        </form>
        <br><br>
        <hr>
        <?php 
          if($result->num_rows>0)
          {
        ?>
        <h2> Parent Help </h2>
        <table border="1" cellspacing="5" cellpadding="5px">
          <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Action</th>
          </tr>
           <?php 
            while($row=$result->fetch_assoc())
           {
           ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><img src="<?php echo "images\\" . $row['image1']; ?>" width="100px" height="100px" ></td>
            <td><img src="<?php echo "images\\" . $row['image2']; ?>" width="100px" height="100px" ></td>
            <td><a href=""> Edit </a> <a href="">Delete</a></td>
          </tr>
          <?php 
           }
           ?>
        </table>
        <?php 
          }
          else{
            echo " There is no data";
          }
        ?>
   
      </section>
    </main>

    <footer>
      <p>You are here: Home</p>
      <div class="footer-content">
        <p>&copy; 2024 Online Safety Campaign</p>
        <!-- Add social media buttons with relevant links -->
        <a href="#" style="color: white">Facebook</a>
        <a href="#" style="color: white; margin-left: 10px">Twitter</a>
        <a href="#" style="color: white; margin-left: 10px">Instagram</a>
      </div>
    </footer>
  </body>
</html>
