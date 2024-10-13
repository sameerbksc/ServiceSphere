<?php
if(isset($_POST['submit'])) {
    if(($_POST['name'] == "") || ($_POST['subject'] == "") || ($_POST['email'] == "") || ($_POST['message'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Please fill all fields. </div>';
    } else {
        $n = $_POST['name'];
        $s = $_POST['subject'];
        $e = $_POST['email'];
        $m = $_POST['message'];

        $to = "nk858200@gmail.com";
        $h = "From: ". $e;
        $txt = "You have received an email from ". $n. ".\n\n".$m;
        mail($to, $s, $txt, $h);
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';
    }
}
?>

<!--Start Contact Us Row-->
<div class="col-md-8">
    <!--Start Contact Us 1st Column-->
    <div class="contact-form-container">
        <form action="" method="post">
            <input type="text" class="form-control" name="name" placeholder="Name"><br>
            <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
            <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
            <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
            <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
            <?php if(isset($msg)) {echo $msg; } ?>
        </form>
    </div>
</div> <!-- End Contact Us 1st Column-->

