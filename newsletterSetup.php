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
     $title=$_POST['title'];
     $con=$_POST['con'];

     if(isset($_FILES["img"]) && $_FILES["img"]["error"]==0)
     {
       // Real file name
       $filename = $_FILES["img"]["name"];
       // file path
       $filepath = $_FILES["img"]["tmp_name"];
     }

     $sql="INSERT INTO newsletter (title, content, image) VALUES ('$title','$con','$filename') ";
     if($conn->query($sql)==TRUE)
     {
       echo " Insert one newletter successfully ";
       header("location:newsletterSetup.php");
     }

  }
  
  if(isset($_GET['deleteid'])){
    $did = $_GET['deleteid'];
    $sql = "DELETE FROM newsletter where id = '$did'";
    if($conn->query($sql)){
      header("location:newsletterSetup.php");
    }
  }


  $sql1="SELECT * from newsletter";
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
      <h1>NewsLetter SetUp</h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="contact">

        <!-- Contact Form -->
        <form action="#" method="POST" enctype="multipart/form-data">
        <label for="name">Title:</label>
          <input type="text" id="name" name="title" required />

          <label for="message">Content</label>
          <textarea id="message" name="con" rows="4" required></textarea>

          <label for="name">Image</label>
          <input type="file" id="name" name="img" required />

          <button type="submit" name="btnSave">Save</button>
        </form>
        <br><br>
        <hr>
        <?php 
          if($result->num_rows>0)
          {
        ?>
        <h2> News Letter List </h2>
        <table border="1" cellspacing="5" cellpadding="5px">
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Publish Date</th>
            <th>Action</th>
          </tr>
           <?php 
            while($row=$result->fetch_assoc())
           {
           ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><img src="<?php echo "images\\". $row['image']; ?>" width="100px" height="100px" ></td>
            <td><?php echo $row['publishdate']; ?></td>
            <td><a href=""> Edit </a> <a href="newsletterSetup.php?deleteid=<?php echo $row['id'] ?>">Delete</a></td>
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
