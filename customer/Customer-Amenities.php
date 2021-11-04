<?php

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
  $output->setFailed("Cannot connect to database.".$conn->connect_error);
  echo $output->getOutput(true);
  die();
}

<<<<<<< HEAD
$query="SELECT companyName FROM companyInfo";
$result=mysqli_query($conn, $query) or die(mysqli_error($conn));
$followingdata = $result->fetch_array(MYSQLI_ASSOC);
=======
$result=mysqli_query($conn, $query);

$query="SELECT amenityName, amenityDesc FROM amenities";

    function getAmenitiesItem(&$id, &$conn, &$output) {
        $sql = "SELECT amenityID, amenityName, amenityDesc FROM amenities";
        $result = mysqli_query($conn, $sql);
        $items = [];
        $itemsContainer = [];
            if(mysqli_num_rows($result) > 0) {
                $rowID = null;
                //echo mysqli_fetch_array($result)[0]."<br/>";
                while($rows = mysqli_fetch_assoc($result)) {
                    if (is_null($rowID))
                        $rowID= $rows["amenityID"];
                    if ($rows["info"] != null)
                        $items += array($rows["amenityName"]=>$rows["info"]);
                }
                $itemsContainer = array("amenityName"=>$rowID);
                $itemsContainer += array("amenityDesc"=>$items);
            } else {
                $output->setFailed("Amenitynot Available");
                echo $output->getOutputAsHTML();
                die();
            }
            
        }
        print_r($itemsContainer);
        die();
>>>>>>> benito/dev
?> 

<!DOCTYPE HTML>
<html lang="en">
<head>	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $followingdata['companyName']; ?> | Amenities</title>
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet"/>

	<style type="text/css">
	body{ 
    	padding-top: 65px; 
    	background-color: #F2F2F3;
	}
	#mainNav .navbar-brand {
    	color: rgba(255, 255, 255, 1);
    }
    #mainNav .nav-link {
		color: rgba(255, 255, 255, 1);
	}
	nav#mainNav {
	    background-color: black;
	    position: fixed;	    
	}
	h1{
		text-align: center;
		padding-top: 2%;
		padding-bottom: 2%;
	}
	.amenities{
		background-color: white;
		color: black;
		text-align: center;
		margin: 5% auto;		
		width: 60%;
	box-shadow:0 0 5px 0 rgba(0,0,0,0.4);
		border-radius: 5px;
	}
	.carousel{
		height: 100%;
		width: 95%;
		margin: auto;
		margin-bottom: 4%;
	}
	.footer{
        background-color: black;
        color: rgba(255, 255, 255, .8);
        padding: 1%;
        position: absolute;
        width: 100%;
        text-align: center;
    }
	.template-demo>.btn {
     	margin-right: 0.5rem;
 	}

 	.template-demo {
     	margin-top: 0.5rem;
 	}
 	.btn.btn-social-icon {
     	width: 50px;
     	height: 50px;
    	padding: 0
 	}
 	.btn.btn-rounded {
    	border-radius: 50px
 	}
	.btn-facebook {
    	background: #3b579d;
    	color: #ffffff
 	}
 	.btn-twitter {
    	background: #2caae1;
    	color: #ffffff
 	}
 	.btn-instagram {
    	background: #dc4a38;
    	color: #ffffff
 	}
 	.btn-facebook:hover, .btn-facebook:focus {
    	background: #2d4278;
    	color: #ffffff
 	}
 	.btn-twitter:hover, .btn-twitter:focus {
    	background: #1b8dbf;
    	color: #ffffff
 	}
 	.btn-instagram:hover, .btn-instagram:focus {
     	background: #bf3322;
     	color: #ffffff
 	}
	</style>
	<title>Amenities</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="Customer-Home.php"><?php echo $followingdata["companyName"]; ?></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Customer-Compare.php">Compare</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Customer-Rooms.php">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#amenities">Amenities</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
<?php
if (mysqli_num_rows($result)>0) {
	while($row=mysqli_fetch_assoc($result)){
		echo "<section id='amenities'>";
		echo "    <div class='amenities'>";
		echo "	      <div class='row'>";
        echo "            <div class='col-lg-12 mx-auto'>";
		echo "	    	      <h1><b>".$row["amenityName"]."</b></h1>";
		echo "			          <div id='carouselExampleIndicators' class='carousel slide pointer-event' data-ride='carousel'>";
		echo "		  		          <div class='carousel-inner' role='listbox'>";
		echo "		    		          <div class='carousel-item active'>";
		echo "		      				      <img class='d-block w-100' src='https://cf.bstatic.com/data/xphoto/1182x887/217/21775845.jpg?size=S' data-src='holder.js/900x400?theme=social' alt='900x400' data-holder-rendered='true'>";
		echo "		      				      <div class='carousel-caption d-none d-md-block'>";
		echo "                                    <h3>".$row["amenityName"]."</h3>";
		echo "			          	              <p>".$row["amenityDesc"]."</p>";
		echo "			        	       </div>";
		echo "		    		      </div>";
		echo "		  		      </div>";
		echo "			      </div>";
		echo "		      </div>";
		echo "        </div>";
		echo "    </div>";
		echo "</section>";
	}
} else {
	echo "There are 0 results.";
}
?>

    <section id="amenities">
		<?php
			$query="SELECT amenityName, amenityDesc FROM amenities;";
			$result=mysqli_query($conn, $query) or die(mysqli_error($conn));
			if (mysqli_num_rows($result)>0) {
				while($row=mysqli_fetch_assoc($result)){
		?>
			<div class="amenities">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<h1><b><?php echo $row["amenityName"]; ?></b></h1>
						<div id="carouselExampleIndicators" class="carousel slide pointer-event" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img class="d-block w-100" src="https://cf.bstatic.com/data/xphoto/1182x887/217/21775845.jpg?size=S" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true">
									<div class="carousel-caption d-none d-md-block">
									<h3><?php echo $row["amenityName"]; ?></h3>
									<p><?php echo $row["amenityDesc"]; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>  
			</div>
		<?php
			}
		}
		else{
			echo "<h1>No Amenities Found</h1>";
		}
		?>	
	</section>	
	<?php
        $query="SELECT socialFB, socialTwitter, socialInstagram, contact, email, footerRight
        FROM socialMedias, companyInfo";
        $result=mysqli_query($conn, $query) or die(mysqli_error($conn));
        $followingdata = $result->fetch_array(MYSQLI_ASSOC);
    ?>
	<div class="footer">
		<div class="row">
			<div class="col-lg-4 mx-auto">
				<p><b>Contact us</b></p>
				<p><?php echo $followingdata["contact"]; ?></p>
				<p><?php echo $followingdata["email"]; ?></p>               
			</div>
			<div class="col-lg-4 mx-auto">
				<p>Connect with us at</p>
					<button type="button" class="btn btn-social-icon btn-facebook btn-rounded" href="<?php echo $followingdata["socialFB"]; ?>"><i class="fa fa-facebook"></i></button>
					<button type="button" class="btn btn-social-icon btn-instagram btn-rounded" href="<?php echo $followingdata["socialInstagram"]; ?>"><i class="fa fa-instagram"></i></button>
					<button type="button" class="btn btn-social-icon btn-twitter btn-rounded" href="<?php echo $followingdata["socialTwitter"]; ?>"><i class="fa fa-twitter"></i></button>          
			</div>
			<div class="col-lg-4 mx-auto">
				<p><?php echo $followingdata["footerRight"]; ?></p>
			</div>
		</div>
	</div>
</body>
</html>