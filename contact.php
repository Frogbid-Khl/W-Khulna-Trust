<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>যোগাযোগ-খুলনা ট্রাস্ট</title>
    <?php
    include('include/css.php')
    ?>
</head>
<body>

<?php
include('include/header.php')
?>

<div class="page-title-area title-bg-eight">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>যোগাযোগ</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-location-pin"></i>
                    <span>অবস্থান:</span>
                    <a href="#">ঠিকানা</a>
                    <a href="#">টেলিফোন</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-ui-call"></i>
                    <span>টেলিফোন:</span>
                    <a href="tel:+123456789">+০০০০০০০০০</a>
                    <a href="tel:+548658956">+০০০০০০০০০</a>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-ui-email"></i>
                    <span>ইমেইল:</span>
                    <a href="#">+০০০০০০০০০</a>
                    <a href="#">+০০০০০০০০০</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-area pb-70">
    <div class="container">
        <form id="contactForm">
            <h2>যোগাযোগ</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-user-alt-3"></i>
                        </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="নাম" required
                               data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-ui-email"></i>
                        </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="ইমেইল" required
                               data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-ui-call"></i>
                        </label>
                        <input type="text" name="phone_number" id="phone_number" placeholder="ফোন" required
                               data-error="Please enter your number" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-notepad"></i>
                        </label>
                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                               placeholder="বিষয়" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>
                            <i class="icofont-comment"></i>
                        </label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                  placeholder="বার্তা করুন" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn common-btn">
                        বার্তা পাঠান
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="map-area " style="    margin-bottom: -10px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117658.79381583275!2d89.44986415000103!3d22.84550795188303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9071cb47152f%3A0xf04b212290718952!2sKhulna!5e0!3m2!1sen!2sbd!4v1697105789358!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<!--Footer Area-->

<?php
include('include/footer.php')
?>


<div class="go-top">
    <i class="icofont-arrow-up"></i>
    <i class="icofont-arrow-up"></i>
</div>

<!--js file-->
<?php
include('include/js.php')
?>

</body>

</html>