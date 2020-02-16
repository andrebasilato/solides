<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-1/vendor/font-awesome/css/font-awesome.min.css">
<div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <?php $date = date("l, d-m-Y"); ?>
              <p>Olá <?= $_SESSION['logged_user']['nome_completo'] ?> hoje é <?= $date ?>.</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="login"><a href="<?= base_url() ?>Welcome/logout"  class="login-btn">
                <i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Logout</span></a>
                </div>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="https://facebook.com/solidestecnologia" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="https://instagram.com/solidestecnologia" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="https://linkedin.com/company/solidestecnologia" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCqG25smPnLbI-q2I1V760DQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

<style>
p {
margin: 1rem 0;
}

.top-bar {
    background: #555;
    color: #fff;
    font-size: 0.9rem;
    padding: 10px 0;
}

.top-bar .contact-info {
    margin-right: 20px;
}

.top-bar ul {
    margin-bottom: 0;
}

.top-bar .contact-info a {
    font-size: 0.8rem;
}

.top-bar ul.social-custom {
    margin-left: 20px;
}
.top-bar ul {
    margin-bottom: 0;
}

.top-bar a.login-btn i, .top-bar a.signup-btn i {
    margin-right: 10px;
}

.top-bar ul.social-custom a:hover {
    background: #4fbfa8;
    color: #fff;
}
.top-bar ul.social-custom a {
    text-decoration: none !important;
    font-size: 0.7rem;
    width: 26px;
    height: 26px;
    line-height: 26px;
    color: #999;
    text-align: center;
    border-radius: 50%;
    margin: 0;
}
a:focus, a:hover {
    color: #348e7b;
    text-decoration: underline;
}
.top-bar a.login-btn, .top-bar a.signup-btn {
    color: #eee;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    text-decoration: none !important;
    font-size: 0.75rem;
    font-weight: 700;
    margin-right: 10px;
}

</style>