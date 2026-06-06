<?php
include('include/header.php');?>
<?php 
if(isset($_POST['Submit'])){
$name=$_POST['name'];
$to =$_GET['christianirenge26@gmail.com'];
$from=$_POST['email'];
$msg=$_POST["message"];
$headers = "From: $from";

mail($to,$name,$msg,$headers);
   ?> <div class="body">
   <div class="alert bg-green alert-dismissible" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
    aria-hidden="true">&times;</span></button>
     <?php echo "Email envoyer avec success."; ?>
 </div> <?php 
}
?>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <p>Nous vous proposons des cours de qualité dispenés par des professeurs qualifiés.Besoin d'un renseignement? Posez-nous vos questions</p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" required placeholder="Noms">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" required placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="message" required placeholder="Votre message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" name="Submit" class="btn btn-color btn-md btn-message">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>Contact Info</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Address du club</h5>
                            <p>kodokan1,situer vers kabondo à l'ecole la creche</p>
                            <p>Kodokan2,situer vers Pk6 kilanga,avant l'entrée de l'église JLV</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Telephone</h5>
                            <p><a href="tel:853861409"> +243 853861409</a> </p>
                        </div>
                    </div> 
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Address Email</h5>
                            <p><a href="#">christianirenge26@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- Google map start -->
<!-- <div class="section">
    <div class="map">
        <div id="contactMap" class="contact-map"></div>
    </div>
</div> -->
<!-- Google map end -->

<!-- Footer start -->
<?php include('include/footer.php');?>