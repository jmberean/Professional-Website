<?php include 'header.php';?>

<link rel="stylesheet" href="css/contact.css">
<script src="/js/contact.js"> </script>

<div class="container c1 hidden">
    <p style="text-align:center">CONTACT</p>
</div>

<div class="container c2 hidden">

    <?php 
        session_start();
        if(isset($_SESSION['message'])){ 
    ?>
        <div class="container-fluid text-center">
            <div class="alert alert-primary" role="alert" style="margin-right:15px;margin-left:15px">
                <?php 
                    echo "<div id='error_msg'>".$_SESSION['message']."</div>"; 
                ?>
            </div>      
        </div>                     
    <?php 
        unset($_SESSION['message']); 
        } 
    ?>

    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
        
        <div class="row" style = "margin-bottom:25px">
            <div class="col">
                <div class="container-fluid">
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control input-sm" placeholder="Name" required="required" >
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid">
                    <div class="form-group">
                        <input type="email" class="form-control input-sm" id="email" name="email" aria-describedby="emailHelp"placeholder="Email address" required="required">
                    </div>
                </div>
            </div>
        </div>

        <div class="row"style = "margin-bottom:25px">
            <div class="col">
                <div class="container-fluid">
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" class="form-control input-sm" placeholder="Subject" required="required">
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style = "margin-bottom:25px">
            <div class="col">
                <div class="container-fluid">
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message" rows="6"placeholder="Enter message here..." required="required"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-end">
            <div class="container-fluid">
                <button type="submit" class="btn btn-primary btn-md">Submit</button>
            </div>
            </div>
        </div>

    </form>
</div>

<?php include 'footer.php';?>
