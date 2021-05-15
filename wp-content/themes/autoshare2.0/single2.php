<?php get_header();?>
<div class="container"><div class="go_text"><a href="../ourcars.html"><i class="fas fa-angle-left px-1"></i> <span>Повернутись до каталогу</span></a></div></div>
    <div class="container vsa">
        <div class="row">
        <div class="carouselCars col-lg-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
				<?php the_post_thumbnail('full', array(
            'class' => 'card-img-top wp-post-image w-100 d-block'
          )); ?>
                </div>
                <div class="carousel-item">
                    <img src="../images/vsa/Business/Mersedes_E_class/Mersedes_E_class_2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../images/vsa/Business/Mersedes_E_class/Mersedes_E_class_3.png" class="d-block w-100" alt="...">
                </div>
                
            </div>
            </div>
            <div class="buttonspn col-lg-12 mb-md-5 mt-lg-0">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
            </div>
            <div class="carouselphotos col-lg-12 mt-4">
                <div class="photosmallcar col-lg-4 col-sm-4">
                    <img src="../images/vsa/Business/Mersedes_E_class/Mersedes_E_class_1.png" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" alt="">
                </div>
                <div class="photosmallcar col-lg-4 col-sm-4">
                    <img src="../images/vsa/Business/Mersedes_E_class/Mersedes_E_class_2.png" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" alt="">
                </div>
                <div class="photosmallcar col-lg-4 col-sm-4">
                    <img src="../images/vsa/Business/Mersedes_E_class/Mersedes_E_class_3.png" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" alt="">
                   
                </div>
            </div>
            </div>
            <div class="desc col-lg-6 mt-5 col-md-12 col-sm-12">
              <h2 class= "titlecar mb-3 offset-2 offset-md-3 offset-xs-0 offset-lg-0"><?php the_title();?></h2>
              <div class="img1_car mt-5 offset-1 offset-lg-0">
                <img class='ml-lg-2 ml-md-5' src="../images/vsa/%D0%BA%D1%96%D0%BB%D1%8C%D0%BA%D1%96%D1%81%D1%82%D1%8C%20%D0%BF%D0%B0%D1%81%D0%B0%D0%B6%D0%B8%D1%80%D1%96%D0%B2.png" alt="">
                <span>5</span>
                <img class="" src="../images/vsa/%D0%BE%D0%B1_%D1%94%D0%BC%20%D0%B4%D0%B2%D0%B8%D0%B3%D1%83%D0%BD%D0%B0.png" alt="">
                <span>1.6</span>
                <img class="" src="../images/vsa/%D0%BA%D1%96%D0%BB%D1%8C%D0%BA%D1%96%D1%81%D1%82%D1%8C%20%D0%B4%D0%B2%D0%B5%D1%80%D0%B5%D0%B9.png" alt="">
                <span>5</span>
            </div>
               <div class="img2_car my-5 offset-1 offset-lg-0">
                <img class='ml-lg-2 ml-md-5' src="../images/vsa/%D1%80%D0%BE%D0%B7%D1%85%D1%96%D0%B4%20%D0%BF%D0%B0%D0%BB%D0%B8%D0%B2%D0%B0.png" alt="">
                <span class="">Об'єм багажника: <?php the_field('trunk');?></span>
                <img class='offset-lg-3 offset-md-3 offset-2 ' src="../images/vsa/%D1%82%D0%B8%D0%BF%20%D0%BF%D0%B0%D0%BB%D0%B8%D0%B2%D0%B0.png"  alt="">
                <span class=''><?php the_category(', ');?></span>
                <strong class='offset-2'><?php the_field('transmission');?></strong>
                </div>
                <br><br>
                
                <p class="mt-lg-5 mt-md-5 mt-1"><?php the_content();?></p>
            </div>
            </div>
            <div class="map col-lg-12 my-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1286.4238343522259!2d24.034812594219115!3d49.84531972425117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDUwJzQyLjEiTiAyNMKwMDInMTEuMCJF!5e0!3m2!1suk!2sua!4v1608287551273!5m2!1suk!2sua" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            </div>
<?php get_footer();?>