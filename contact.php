<?php include 'header.php';?>
<style>
    p{
        color: white;
        font-size: 40px;
        font-weight: 900;
    }
    .c1{
        font: .6rem Inconsolata, monospace;
    }
    div.hidden{
        display: none
    }
</style>
<div class="container c1 hidden">
    <p style="text-align:center">CONTACT ME</p>
</div>
<div class="container c1 hidden" style = "margin:auto;background-color:white; padding:25px;border-radius: 
                                    25px;max-width:70%;background: rgba(255, 255, 255, 0.9); ">
  
        <?php session_start();
            if(isset($_SESSION['message'])){ ?>
        <div class="alert alert-primary" role="alert">
            <?php echo "<div id='error_msg'>".$_SESSION['message']."</div>"; ?>
        </div>      
        <?php unset($_SESSION['message']); } ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

        <i class="fas fa-phone mr-3"></i>845-709-0867<i class="fas fa-envelope mr-3" style="margin-left:20px;margin-bottom:10px"></i>jmberan@gmail.com



        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            <div class="row">
                <div class="col-XS-">
                    <div class="container">
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control input-sm" placeholder="Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-sm" id="email" name="email" aria-describedby="emailHelp"placeholder="Email address" required="required">
                        </div>
                        <div class="form-group">                            
                            <input type="text" id="subject" name="subject" class="form-control input-sm" placeholder="Subject" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
                <div class="col">
                    <div class="container">
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="6"placeholder="Enter message here." required="required"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function () {
        $('div.hidden').fadeIn(1000).removeClass('hidden');
    });
    </script>
<?php include 'footer.php';?>
