<?php include 'layout/header.php';?>
<div class="page-wrapper">

<div class="preloader"><h1 data-text="taxix">Taxix</h1></div>

<?php include 'layout/navbar.php';?>


<section class="page-title" style="background-image: url(images/background/page-title.png);">
<div class="auto-container">
<div class="title-outer text-center">
<h1 class="title">Contact Us</h1>
<ul class="page-breadcrumb">
<li><a href="index.php">Home</a></li>
<li>Contact</li>
</ul>
</div>
</div>
</section>


<section class="contact-details">
<div class="container ">
<div class="row">
<div class="col-xl-7 col-lg-6">
<div class="sec-title">
<span class="sub-title">Send us email</span>
<h2>Feel free to write</h2>
</div>

<form id="contact_form" name="contact_form" class action="https://html.kodesolution.com/2024/taxix-html/includes/sendmail.php" method="post">
<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
</div>
</div>
<div class="col-sm-6">
<div class="mb-3">
<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
</div>
</div>
<div class="col-sm-6">
<div class="mb-3">
<input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
</div>
</div>
</div>
<div class="mb-3">
<textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
</div>
<div class="mb-5">
<input name="form_botcheck" class="form-control" type="hidden" value />
<button type="submit" class="theme-btn btn-style-one mb-3 mb-sm-0" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
<button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
</div>
</form>

</div>
<div class="col-xl-5 col-lg-6">
<div class="contact-details__right">
<div class="sec-title">
<span class="sub-title">Need any help?</span>
<h2>Get in touch with us</h2>

<ul class="list-unstyled contact-details__info">
<li class="d-block d-sm-flex align-items-sm-center ">
<div class="icon">
<span class="lnr-icon-phone-plus"></span>
</div>
<div class="text ml-xs--0 mt-xs-10">
<h4>Have any question?</h4>
<a href="tel:8281405199"><span>Free</span> 8281405199</a>
</div>
</li>


</ul>
</div>
</div>
</div>
</div>
</section>



<?php include 'layout/footer.php';?>