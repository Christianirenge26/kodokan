<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include('include/header.php');

extract($_REQUEST);

$id=$_REQUEST['id'];

$query=mysqli_query($con,"select * from property where id='$id'");
$res=mysqli_fetch_array($query);

$id=$res['id'];
$img=$res['image'];
$bedroom=$res['bedroom'];
$bathroom=$res['bathroom'];
$hall=$res['hall'];
$kichan=$res['kichan'];
$balcony=$res['balcony'];
$sqr_price=$res['sqr_price'];
$kithan=$res['kichan'];
$description=$res['description'];
$title=$res['title'];
$price=$res['price'];
$address=$res['address'];
$video=$res['video'];
$property_owner=$res['property_owner'];
$property_type=$res['property_type'];
$lot_size=$res['lot_size'];
$land_area=$res['land_area'];
$sold=$res['sold'];
$address=$res['address'];
$map=$res['location'];


?>

<!-- main header start -->


<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Property Detail 1</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Property Detail 1</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12 slider">
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                    <div class="heading-properties">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h3><?php echo $title;?></h3>
                                    <p><i class="fa fa-map-marker"></i> <?php echo $address;?></p>
                                </div>
                                <div class="p-r">
                                    <h3>UGX<?php echo $price;?></h3>
                                    <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">

                        <?php

$query=mysqli_query($con,"select * from images where property_id='$id'");
$res=mysqli_fetch_array($query);
                    
$img1=$res['image1'];
$img2=$res['image2'];
$img3=$res['image3'];
$img4=$res['image4'];
                        ?>


                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="admin/images/property_image/<?php echo $img;?>" class="img-fluid" alt="property-4">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="admin/images/property_image/<?php echo $img1;?>" class="img-fluid" alt="property-6">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="admin/images/property_image/<?php echo $img2;?>" class="img-fluid" alt="property-1">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="admin/images/property_image/<?php echo $img3;?>" class="img-fluid" alt="property-5">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="admin/images/property_image/<?php echo $img4;?>" class="img-fluid" alt="property-8">
                        </div>

                        <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                <img src="admin/images/property_image/<?php echo $img;?>" class="img-fluid" alt="property-4">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                <img src="admin/images/property_image/<?php echo $img1;?>" class="img-fluid" alt="property-6">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                <img src="admin/images/property_image/<?php echo $img2;?>" class="img-fluid" alt="property-1">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                <img src="admin/images/property_image/<?php echo $img3;?>" class="img-fluid" alt="property-5">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                <img src="admin/images/property_image/<?php echo $img4;?>" class="img-fluid" alt="property-8">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Search area start -->
            
                <!-- Tabbing box start -->
                <div class="tabbing tabbing-box mb-60">
                    <ul class="nav nav-tabs" id="carTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true">Details</a>
                        </li>
                
                        <li class="nav-item">
                            <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6" aria-selected="true">Related Properties</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="carTabContent">
                        <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <h3 class="heading">Property Description</h3>
                           <p><?php echo $description;?></p>
                        </div>
                        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <div class="floor-plans mb-60">
                                <h3 class="heading">Floor Plans</h3>
                                <table>
                                    <tbody><tr>
                                        <td><strong>Size</strong></td>
                                        <td><strong>Rooms</strong></td>
                                        <td><strong>Bathrooms</strong></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $sqr_price; ?></td>
                                        <td><?php echo $bedroom; ?></td>
                                        <td><?php echo $bathroom; ?></td>
                                        
                                    </tr>
                                    </tbody>
                                </table>
                                <img src="assets/img/floor-plans.png" alt="floor-plans" class="img-fluid">
                            </div>
                        </div>
                        <div class="tab-pane fade " id="three" role="tabpanel" aria-labelledby="three-tab">
                            <div class="amenities-box mb-60">
                                <h3 class="heading">Property Details</h3>
                         <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Property Id:</strong> <?php echo $id;?>
                                            </li>
                                            <li>
                                                <strong>Price:</strong> <?php echo $price;?>/
                                            </li>
                                            <li>
                                                <strong>Property Type:</strong> <?php echo $property_type;?>
                                            </li>
                                            <li>
                                                <strong>Bathrooms:</strong> <?php echo $bathroom;?>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Property Lot Size:</strong> <?php echo $lot_size;?>
                                            </li>
                                            <li>
                                                <strong>Land area:</strong> <?php echo $land_area;?>
                                            </li>
                                            
                                            <li>
                                                <strong>Garages:</strong> Yes
                                            </li>
                                            <li>
                                                <strong>Bedroom:</strong> <?php echo $bedroom;?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Sold:</strong> <?php echo $sold;?>
                                            </li>
                                            <li>
                                                <strong>Address:</strong> <?php echo $address;?>
                                            </li>
                                            <li>
                                                <strong>Parking:</strong> Yes
                                            </li>
                                            <li>
                                                <strong>Property Owner:</strong> <?php echo $property_owner;?>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
                            <div class="property-video">
                                <h3 class="heading">Property Video</h3>
                                <iframe src="<?php echo $video;?>"></iframe>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                            <div class="section location">
                                <h3 class="heading">Property Location</h3>
                                <div class="map">
                                    <?php echo $map;?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                            <div class="related-properties">
                                <h3 class="heading">Related Properties</h3>
              <div class="row">
        <?php 
        include 'include/config.php';
        $query1=mysqli_query($con,"select * from admin");
        $admin=mysqli_fetch_array($query1);
        
        $u_name=ucfirst($admin['name']);

$query=mysqli_query($con,"select * from property,admin where(property.agent_id=admin.a_id) ORDER BY RAND() LIMIT 2");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];
$date=$res['date'];
$agentEemail=$res['email'];
$aentName=$res['name'];

        ?>    
            <div class="col-md-6">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">Featured</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    UGX <?php echo $res['price'];?>
                                </p>
                                <!-- i will program the ratings here -->
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <!-- it will end here by LuckiTech -->
                            </div>
                            <img src="admin/images/property_image/<?php echo $img;?>" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="admin/images/property_image/<?php echo $img;?>" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title'];?></a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <i class="fa fa-map-marker"></i><?php echo $res['address'];?>
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> <?php echo $res['bedroom'];?> : Bedroom
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> <?php echo $res['hall'];?> : Hall
                            </li>
                            <li>
                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i><?php echo $res['sqr_price'];?> Sq Ft
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i> <?php echo $res['kichan'];?> : kitchen
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> <?php echo $u_name;?>
                        </a>
                        <span>
                                <i class="fa fa-calendar-o"></i> <?php echo $date;?>
                            </span>
                    </div>
                </div>
            </div>
<?php } ?>
            
        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Amenities box start -->
                <div class="amenities-box mb-60">
                    <h3 class="heading">Condition</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-bed"></i> <?php echo $bedroom;?> Beds</span></li>
                                <li><span><i class="flaticon-bath"></i> <?php echo $bathroom;?> Bathroom</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-car-repair"></i>  Garage</span></li>
                                <li><span><i class="flaticon-balcony-and-door"></i><?php echo $balcony;?> Balcony</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> <?php echo $sqr_price;?> sq ft</span></li>
                                <li><span><i class="flaticon-monitor"></i> TV</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
             
                <div class="contact-3 mb-60">
                    <h3 class="heading">Leave a Comment</h3>
                    <div class="container">
                        <?php
                        if(isset($_POST['Submiti'])){
                            $name=$_POST['name'];
                            $emailer=$_POST['email'];
                            $subject=$_POST['subject'];
                            $phone=$_POST['phone'];
                            $message=$_POST['message'];



require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/POP3.php";
require "PHPMailer/src/Exception.php";
//Create a new PHPMailer instance
$mail = new PHPMailer();  // Passing `true` enables exceptions
try {
//Server settings
$mail->SMTPDebug = 0;                              // Enable verbose debug output
$mail->isSMTP();    
$mail->Mailer = "smtp";                                  // Set mailer to use SMTP
$mail->Host ='smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'inf.realestates@gmail.com';                 // SMTP username
$mail->Password = 'Real@estate.123';                           // SMTP password
$mail->SMTPSecure = 'ssl';                           // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;   
$mail->SMTPOptions = [
'ssl' => [
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true,
]
];                               // TCP port to connect to
$emails=$emailer;
//Recipients
$mail->setFrom($emailer,$name);


$mail->addAddress($agentEemail,$aentName);     // Add a recipient
$mail->addBCC($agentEemail);
//$mail->addAddress($emailer);

       // Name is optional
$mail->addReplyTo($emailer,$name);
// $mail->addCC('cc@yahoo.com');
// $mail->addBCC('bcc@yahoo.com');

//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "About ".$title. " " .$subject;
$mail->Body    = $message;
$mail->WordWrap = 50;
$mail->send();


} catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
 echo "<font color='green' >sent.</font>";

}

                        ?>
                        <div class="row">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group name">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group email">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control" placeholder="Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group message">
                                            <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="send-btn">
                                            <button type="submit" class="btn btn-color btn-md btn-message" name="Submiti">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Search area start -->
                    
                    <!-- Categories start -->
                  
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Properties</h5>
                        <?php 
        include 'include/config.php';
        $query1=mysqli_query($con,"select * from admin");
        $admin=mysqli_fetch_array($query1);
        
        $u_name=ucfirst($admin['name']);

$query=mysqli_query($con,"select * from property,admin where(property.agent_id=admin.a_id) ORDER BY RAND() LIMIT 2");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];
$bedroom=$res['bedroom'];
$bathroom=$res['bathroom'];
$hall=$res['hall'];
$kichan=$res['kichan'];
$balcony=$res['balcony'];
$sqr_price=$res['sqr_price'];
$kithan=$res['kichan'];
$description=$res['description'];
$title=$res['title'];
$price=$res['price'];
$address=$res['address'];
$video=$res['video'];
$property_owner=$res['property_owner'];
$property_type=$res['property_type'];
$lot_size=$res['lot_size'];
$land_area=$res['land_area'];
$sold=$res['sold'];
$address=$res['address'];
$map=$res['location'];

        ?>    
                        <div class="media mb-4">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <img src="admin/images/property_image/<?php echo $img;?>" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $title; ?></a>
                                </h5>
                                <p> <?php echo $address; ?></p>
                                <p> <strong><?php echo $price; ?></strong></p>
                            </div>
                            
                        </div>
                        <?php } ?>
                   
                    </div>

                    <!-- Social list start -->
                    <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow Us</h5>
                    
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <!-- <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li> -->
                        </ul>
                    </div>

                    <!-- Helping center start -->
                    <div class="helping-center widget clearfix">
                        <div class="media">
                            <i class="fa fa-mobile"></i>
                            <div class="media-body  align-self-center">
                                <h5 class="mt-0">Helping Center</h5>
                                <h4><a href="tel:+256787293050">+256-787293050</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Financing calculator  start -->
                  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->

<?php include 'include/footer.php'; ?>