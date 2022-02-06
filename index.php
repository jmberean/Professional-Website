<?php include 'header.php';?>

    <style>
    p{
        color: white;
        font-size: 50px;
        font-weight: 900;
    }
    .c1{
        text-align: center;
        font: 1.3rem Inconsolata, monospace;
        text-shadow: 0 0 5px #C8C8C8;
    }
    div.hidden{
        display: none
    }
    </style>

    <div class="hidden">
        <div class="container c1">
            <p>JOHN M BEREAN</p>
            <a class="btn btn-sm btn-outline-light" href="contact.php" role="button">Contact</a>
            <a class="btn btn-sm btn-outline-light" href="resume.php" role="button">Resume</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function () {
        $('div.hidden').fadeIn(1000).removeClass('hidden');
    });
    </script>

<?php include 'footer.php';?>
