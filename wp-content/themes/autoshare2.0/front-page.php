<?php get_header();?>
<div class="back_up">
<div class="col-lg-10 mb-5  slider d-none d-md-none d-lg-block">
    <div id="main-slider-block" class='hello col-lg-12 col-md-12'>
      
      <div id="viewport">
        <div id='booking' class="booking d-md-none d-lg-block">
          <div class="fake_book">
            <div id="open_book">
              <p class='right_arrow'>〉</p>
              <p class='left_arrow'>〈</p></div>
          </div>
          <div class="booking_slide">
            <div class="text_book">
              <h3 class=' book_title'>Швидке бронювання</h3>
              <div class="row ">
              <div class="bookPlace1 ">
                <ul class="mt-5 ml-5 col-lg-12" id='ddmenu'>
                  <li><a href="#">Оберіть місто</a>
                      <ul class="ddmenutowns">
                        <li><a href="#">Прокат авто Львів</a></li>
                        <li><a href="#">Прокат авто Харків</a></li>
                        <li><a href="#">Прокат авто Київ</a></li>
                        <li><a href="#">Прокат авто Дніпро</a></li>
                        <li><a href="#">Прокат авто Тернопіль</a></li>
                        <li><a href="#">Прокат авто Запоріжжя</a></li>
                      </ul>
                  </li>
                </ul>
              </div>
              <div class="bookDate1 mt-5 offset-1">
                <input id="datefield1" type="date"  size="10">
              </div>
              <div class="bookTime1 mt-5 ml-5 offset-1">
                <input id="timefield1" type="time"  size="10">
              </div>

              <div class="bookPlace2   ">
                <ul class="mt-5 ml-5 col-lg-12 " id='ddmenu'>
                  <li class="ddmenu2"><a id='chooseTown' href="#">Оберіть місто</a>
                      <ul class="ddmenutowns">
                        <li><a href="#">Прокат авто Львів</a></li>
                        <li><a href="#">Прокат авто Харків</a></li>
                        <li><a href="#">Прокат авто Київ</a></li>
                        <li><a href="#">Прокат авто Дніпро</a></li>
                        <li><a href="#">Прокат авто Тернопіль</a></li>
                        <li><a href="#">Прокат авто Запоріжжя</a></li>
                      </ul>
                  </li>
                </ul>
              </div>
              <div class="bookDate2 mt-5 offset-1 ">
                <input id="datefield1" type="date" >
              </div>
              <div class="bookTime2 mt-5 ml-5">
                <input id="timefield1" type="time"  size="10">
              </div>
            </div>
            
              <div class="slider_text_down">
                <h3>Оберіть авто нижче</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/Vector 60.png" alt="">
              </div>
              
            </div>
          </div>
        </div>
          <ul id='slidewrapper'>
              <li class="slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/Component.png" alt="1" class="slide-img"></li>
              <li class="slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/subaruSlider.jpg" alt="2" class="slide-img"></li>
              <li class="slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/Component_2.png" alt="3" class="slide-img"></li>
              
          </ul>      
      <ul id="nav-btns">
          <li class="slide-nav-btn"></li>
          <li class="slide-nav-btn"></li>
          <li class="slide-nav-btn"></li>
          
      </ul>
  </div>
   </div>
  </div>
      <div class="booking_mobile my-3 d-md-block d-lg-none">
        <div class="booking_mobile_name d-md-block d-lg-none"><h3>Бронювання авто</h3></div>
        <hr class="hr_book_mob">
        <div class="booking_mobile_back col-sm-12 mt-4 p-4">
          <div class="bookFrom   justify-content-around">
            <h3>Видача</h3><input class="" type="text" placeholder="День/Місяць/Рік">
          </div>
          <div class="bookTo  justify-content-around mt-4 ">
            <h3>Подача</h3><input class="" type="text" placeholder="День/Місяць/Рік">
          </div>
          <div id='ddmenu'>
          <li><a href="#">Місто</a>
              <ul class="ddmenutowns">
                <li><a href="#">Прокат авто Львів</a></li>
                <li><a href="#">Прокат авто Харків</a></li>
                <li><a href="#">Прокат авто Київ</a></li>
                <li><a href="#">Прокат авто Дніпро</a></li>
                <li><a href="#">Прокат авто Тернопіль</a></li>
                <li><a href="#">Прокат авто Запоріжжя</a></li>
              </ul>
          </li>
        </div>
            
          
          <button type="button" class="button-book " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Забронювати</button>
        
      </div>
      </div>
    
    <div class="container">
       <h3 id="speedchoice" class="mb-5">Швидкий вибір авто</h3>
        <ul class="nav nav-pills w-100 row-cols-3 mb-3 mx-auto d-flex text-center " id="pills-tab" role="tablist">
          <li class="nav-item klassauto rounded-0" role="presentation">
        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><h5 class='Rgfix'>Економ</h5></a>
          </li>
          <li class="nav-item klassauto" role="presentation">
        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><h5 class="Rgfix">Комфорт</h5></a>
          </li>
          <li class="nav-item klassauto" role="presentation">
        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><h5 class='Rgfix'>Бізнес</h5></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
  <div class="col">
  <?php
                  global $post;
                  $args = array( 'posts_per_page' => 3, 'category_id' => 28, 'order_by' => 'rand');
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ){
                    setup_postdata($post);
                 ?>
      <div class="card cardstyle">
          <a href='<?php the_permalink();?>'> <?php the_post_thumbnail('medium', array(
            'class' => 'card-img-top wp-post-image'
          )); ?>
              <div class="card-body py-0 px-3">
                <div  class="row ">
                    <div class="cardname my-auto pt-2 offset-1 col-8">
                        <h5 class="card-title text-start"><?php the_title();?></h5>
                    </div>
                       <div class="cardname my-auto pt-2 col-4">
                        <h5 class="card-title card-text-style-1"><?php the_field('price');?></h5>
                    </div>
                    <div id="card-border" class="w-100 mb-2"></div>
                </div>
                 <div class="row pb-3">
                           <div class="card-text-style card-text-style-1 offset-1 col-6 pb-2">Коробка передач</div>
                        <div class="card-text-style-1 col-5"><?php the_field('transmission');?></div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Об’єм багажника</div>
                        <div class="card-text-style-1 col-5"><?php the_field('trunk');?></div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Розхід пального</div>
                        <div class="card-text-style-1 col-5">6.5 л/100км</div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Кількість місць</div>
                        <div class="card-text-style-1 col-5"><?php the_field('capacity');?></div>
                    </div>
              </div></a>
        </div>
        <?php 
        }
        wp_reset_postdata();
         ?>
  </div>
  <div class="col">
      <div class="card cardstyle">
          <a href="vsa/Economy/Opel_Corsa.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vsa/Economy/Opel_Corsa/Opel_Corsa_4.png" class="card-img-top catalogue-image h-100" alt="...">
              <div class="card-body py-0 px-3">
                <div  class="row ">
                    <div class="cardname my-auto pt-2 offset-1 col-6">
                        <h5 class="card-title text-start">Opel Corsa</h5>
                    </div>
                       <div class="cardname my-auto pt-2 col-5">
                        <h5 class="card-title card-text-style-1">Ціна:100$</h5>
                    </div>
                    <div id="card-border" class="w-100 mb-2"></div>
                </div>
                 <div class="row pb-3">
                           <div class="card-text-style card-text-style-1 offset-1 col-6 pb-2">Коробка передач</div>
                        <div class="card-text-style-1 col-5">Механіка</div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Об’єм багажника</div>
                        <div class="card-text-style-1 col-5">Передній</div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Розхід пального</div>
                        <div class="card-text-style-1 col-5">6.5 л/100км</div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Кількість місць</div>
                        <div class="card-text-style-1 col-5">5</div>
                    </div>
              </div></a>
        </div>
  </div>
  <div class="col">
      <div class="card cardstyle">
          <a href="vsa/Economy/Opel_Corsa.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vsa/Economy/Opel_Corsa/Opel_Corsa_4.png" class="card-img-top catalogue-image h-100" alt="...">
              <div class="card-body py-0 px-3">
                <div  class="row ">
                    <div class="cardname my-auto pt-2 offset-1 col-6">
                        <h5 class="card-title text-start">Opel Corsa</h5>
                    </div>
                       <div class="cardname my-auto pt-2 col-5">
                        <h5 class="card-title card-text-style-1">Ціна:100$</h5>
                    </div>
                    <div id="card-border" class="w-100 mb-2"></div>
                </div>
                 <div class="row pb-3">
                           <div class="card-text-style card-text-style-1 offset-1 col-6 pb-2">Коробка передач</div>
                        <div class="card-text-style-1 col-5">Механіка</div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Об’єм багажника</div>
                        <div class="card-text-style-1 col-5">Передній</div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Розхід пального</div>
                        <div class="card-text-style-1 col-5">6.5 л/100км</div>
                        <div class="card-text-style card-text-style-1 offset-1 pb-2 col-6">Кількість місць</div>
                        <div class="card-text-style-1 col-5">5</div>
                    </div>
              </div></a>
        </div>
  </div>
</div></div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
  <div class="col">
    <div class="card cardstyle">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vsa/Comfort/Volkswagen_Golf/Volkswagen_Golf_4.png" class="card-img-top catalogue-image h-100" alt="...">
          <div class="card-body py-0 pr-3 row">
            <div class="cardname my-auto pt-2 col-8">
                <h5 class="card-title">Volkswagen Golf</h5>
            </div>
                <div class="cardout px-0 col-4">
                    <div class="cardin pt-2" id="bord">
                        <p class="card-text pb-1">250$</p>
                    </div>
                    <div class="cardin justify-content-end pb-2 pt-2">
                        <p class="card-text">1 l/1 km</p>
                    </div>
                </div>
          </div></a>
    </div>
  </div>
     <div class="col">
    <div class="card cardstyle">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vsa/Comfort/Ford_Focus/Ford_Focus_4.png" class="card-img-top catalogue-image h-100" alt="...">
          <div class="card-body py-0 pr-3 row">
            <div class="cardname my-auto pt-2 col-8">
                <h5 class="card-title">Ford Focus</h5>
            </div>
                <div class="cardout px-0 col-4">
                    <div class="cardin pt-2" id="bord">
                        <p class="card-text pb-1">230$</p>
                    </div>
                    <div class="cardin  justify-content-end pb-2 pt-2">
                        <p class="card-text">1 l/1 km</p>
                    </div>
                </div>
          </div></a>
    </div>
  </div>
  <div class="col">
    <div class="card cardstyle">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vsa/Comfort/Subaru_Crosstrek/Subaru_Crosstrek_4.png" class="card-img-top catalogue-image h-100" alt="...">
          <div class="card-body py-0 pr-3 row">
            <div class="cardname my-auto pt-2 col-8">
                <h5 class="card-title">Subaru Crosstrek</h5>
            </div>
                <div class="cardout px-0 col-4">
                    <div class="cardin pt-2" id="bord">
                        <p class="card-text pb-1">330$</p>
                    </div>
                    <div class="cardin  justify-content-end pb-2 pt-2">
                        <p class="card-text">1 l/1 km</p>
                    </div>
                </div>
          </div></a>
    </div>
  </div>
</div></div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
  <div class="col">
    <div class="card cardstyle">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vsa/Business/Mercedes_G_class/Mercedes_G_class_4.png" class="card-img-top catalogue-image h-100" alt="...">
          <div class="card-body py-0 pr-3 row">
            <div class="cardname my-auto pt-2 col-8">
                <h5 class="card-title">Mercedes G class</h5>
            </div>
                <div class="cardout px-0 col-4">
                    <div class="cardin pt-2" id="bord">
                        <p class="card-text pb-1">930$</p>
                    </div>
                    <div class="cardin justify-content-end pb-2 pt-2">
                        <p class="card-text">1 l/1 km</p>
                    </div>
                </div>
          </div></a>
    </div>
  </div>
     <div class="col">
    <div class="card cardstyle">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vsa/Business/LEXUS_LX570/Lexus_LX570_4.png" class="card-img-top catalogue-image h-100" alt="...">
          <div class="card-body py-0 pr-3 row">
            <div class="cardname my-auto pt-2 col-8">
                <h5 class="card-title">LEXUS LX570</h5>
            </div>
                <div class="cardout px-0 col-4">
                    <div class="cardin pt-2" id="bord">
                        <p class="card-text pb-1">860$</p>
                    </div>
                    <div class="cardin  justify-content-end pb-2 pt-2">
                        <p class="card-text">1 l/1 km</p>
                    </div>
                </div>
          </div></a>
    </div>
  </div>
  <div class="col">
    <div class="card cardstyle">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vsa/Business/Audi_Q7/Audi_Q7_4.png" class="card-img-top catalogue-image h-100" alt="...">
          <div class="card-body py-0 pr-3 row">
            <div class="cardname my-auto pt-2 col-8">
                <h5 class="card-title">Audi Q7</h5>
            </div>
                <div class="cardout px-0 col-4">
                    <div class="cardin pt-2" id="bord">
                        <p class="card-text pb-1">100$</p>
                    </div>
                    <div class="cardin  justify-content-end pb-2 pt-2">
                        <p class="card-text">1 l/1 km</p>
                    </div>
                </div>
          </div></a>
    </div>
  </div>
</div></div>
        </div>
    </div>
    
      <div class="promotions_name mb-5 col-lg-2 offset-lg-5">
        <h3>Акції</h3>
        <hr class='hr_prom'>
      </div>
    
      <div class="container-fluid prom_back col-lg-12">
      <div class="container">
        <div class="row my-3">
        <div class="prom_up col-lg-6">
        <div class="prom_1 row offset-lg-2 mt-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_1.png" alt="" class="">
          <p class="mt-3 ml-3">Місяць оренди - безкоштовний сервіс</p>
        </div>
        <div class="prom_2 row offset-lg-2  my-5">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_2.png" alt="" class="">
          <p class="mt-3 ml-3">Завчасне бронювання - знижка</p>
        </div>
        </div>
        <div class="prom_down col-lg-6">
          <div class="prom_3 row offset-lg-3  mt-4">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_3.png" alt="" class="">
            <p class="mt-3 ml-3">5 днів оренди - знижка 10%</p>
          </div>
          <div class="prom_4 row offset-lg-3  my-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_4.png" alt="">
            <p class="mt-3 ml-3">Два тижні оренди - 3 дні безкштовно</p>
          </div>
        </div>
        </div>

      </div>
    </div>
  </div>
    <div class="container">
      <div class="row ">
               <h2 class="title_class col-12 mt-lg-3 text-center">Сервіси</h2>
               <hr class='hr_services'>
          
          
              <div id="service-click" class="service-card service-card1 position-relative mb-4 d-flex ">
              <img class="w-100 service-img1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/service1_car.png" alt=""> 
               <div class="position-absolute d-flex justify-content-end m-0 row h-100 w-100">
                   
                   <div class="block-anim trapezium" id="trapez-anim">
                  
                       <p id="btn-text-serv-anim" class="btn-text-serv" href=""><span>Натисніть щоб дізнатись більше</span></p>
                 
                  <div id="text-serv-anim" class="text-serv mx-4 w-100">
                      <p class=" mt-2">Експерти Autoshare підберуть авто на ваш смак.</p>
                      <span>&#10003; Підбір авто по вашим вподобанням <br> &#10003; Оптимальна ціна <br> &#10003; Укомплектування додатковими зручностями</span>
                      <p class="mt-3">Зареєструйтеся і ми зателефонуємо вам у найближчий час.</p>
                      <button type="button" class="button-service" data-bs-toggle="modal" data-bs-target="#register-mod" data-bs-whatever="@getbootstrap">Зареєструватися</button>

                      </div>
                      
                  </div>
                  
                   </div>
                   
                   <div class="modal" id="register-mod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-fullscreen">
    <div class="modal-content modal_style pb-5">
      <div class="modal-body">
        <div class="row">
           <button type="button" class="btn-close col-12" data-bs-dismiss="modal" aria-label="Close">&#9587;</button>
           <div class="modal-title col-12">
               <h1 class=" text-center">Реєстрація</h1>
               <hr class='hr-register'>
           </div>
            <div class="modal-getinf col-6">
                <p>Введіть Прізвище та ім'я</p>
                <hr class="mb-2 modal-hr">
                <input class="mb-4 px-2" type="text" placeholder="Прізвище, Ім'я">
                <p>Введіть номер телефону</p>
                <hr class="mb-2 modal-hr">
                <input class="mb-4 px-2" type="text" placeholder="example@gmail.com">
                <p>Введіть номер телефону</p>
                <hr class="mb-2 modal-hr">
                <input class="mb-4 px-2" type="text" placeholder="+38 (000) 000 00 00">
            </div>
            <div class="modal-inf row col-6">
                <p class="mb-sm-5 mb-4 ">Вневдовзі на вашу електронну адресу буде надісланий лист з підтвердженням реєстаріції на сервіс підбору авто.
<br> <br>
Після підтвердження вам зателефонує наш менеджер.</p>
           <button type="button" class="button-service offset-lg-3 offset-1" data-bs-toggle="modal" data-bs-whatever="@getbootstrap">Зареєструватися</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
                   
                   <div class="position-absolute">
                       <p class="text-service mx-5 mt-4">Підбір авто</p>
                   </div>
               </div>
               
               <div id="service-click-2" class="service-card service-card2 position-relative mb-4 d-flex ">
              <img class="w-100 service-img2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/service2_car.png" alt=""> 
               <div class="position-absolute d-flex justify-content-end m-0 row h-100 w-100">
                   
                   <div class="block-anim trapezium" id="trapez-anim-2">
                   <p id="btn-text-serv-anim-2" class="btn-text-serv" href="">Натисніть щоб дізнатись більше</p>
                  <div id="text-serv-anim-2" class="text-serv mx-4 w-100">
                      <p class="mt-2">Спеціалісти Autoshare допоможуть вам у любій ситуації.</p>
                      <span>&#10003; Виклик мобільного автосервісу <br> &#10003; Виклик тривожної групи <br> &#10003; Транспортування у разі потреби</span>
                      <p class="mt-3">Замовте дзвінок щоб отримати детальнішу інформацію.</p>
                      <button type="button" class="button-service" data-bs-toggle="modal" data-bs-target="#call-mod" data-bs-whatever="@getbootstrap">Замовити дзвінок</button>

                      </div>
                      
                  </div>
                  
                   </div>
                   
                   <div class="modal" id="call-mod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal_style pb-5">
      <div class="modal-body">
        <div class="row">
           <div class="modal-title col-12">
               <h1 class=" text-center">Замовлення дзвінка</h1>
               <hr class='hr-register'>
           </div>
            <div class="modal-getinf col-6">
                <p>Введіть ваше  Ім’я </p>
                <hr class="mb-2 modal-hr">
                <input class="mb-4 px-2" type="text" placeholder="Ваше ім’я">
                <p>Введіть номер телефону</p>
                <hr class="mb-2 modal-hr">
                <input class="mb-4 px-2" type="text" placeholder="+38 (000) 000 00 00">
            </div>
            <div class="modal-inf row col-6">
                <p class="mb-sm-5 mb-4 ">Замовте дзвінок і ми зателефонуємо вам у найближчий час, щоб розв’язати вашу проблему.</p>
           <button type="button" class="button-service offset-lg-3 offset-1" data-bs-toggle="modal" data-bs-whatever="@getbootstrap">Замовити</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
                   
                   
                   <div class="position-absolute">
                       <p class="text-service mx-sm-5 mx-3 mt-4">Допомога у дорозі</p>
                   </div>
               </div>
               
               <div id="service-click-3" class="service-card service-card3 position-relative mb-4 d-flex ">
              <img class="w-100 service-img3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/service3_car.png" alt=""> 
               <div class="position-absolute d-flex justify-content-end m-0 row h-100 w-100">
                   
                   <div class="block-anim trapezium " id="trapez-anim-3">
                  
                   <p id="btn-text-serv-anim-3" class="btn-text-serv" href="">Натисніть щоб дізнатись більше</p>
                  <div id="text-serv-anim-3" class="text-serv mx-4  w-100">
                      <p class="mt-2">Наші клієнти та автомобілі повністю застраховані.</p>
                      <span>&#10003; Здоров’я наших клієнтів є повністю застрахованим <br> &#10003; Автомобілі застраховані та мають повне КАСКО <br></span>
                      <p class="mt-3"><a href="">Натисніть, щоб отримати детальну інформацію</a> </p>

                      </div>
                      
                  </div>
                  
                   </div>
                   <div class="position-absolute">
                       <p class="text-service mx-5  mt-4">Страхування</p>
                   </div>
               </div>
               
               <div id="service-click-4" class="service-card service-card4 position-relative mb-2 d-flex ">
              <img class="w-100 service-img4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/service4_car.png" alt=""> 
               <div class="position-absolute d-flex justify-content-end m-0 row h-100 w-100">
                   
                   <div class="block-anim trapezium" id="trapez-anim-4">
                  
                  <p id="btn-text-serv-anim-4" class="btn-text-serv" href="">Натисніть щоб дізнатись більше</p>
                  <div id="text-serv-anim-4" class=" text-serv mx-4 w-100">
                      <p class="mt-2">Серед наших партнерів є відомі туритичні компанії
              </p>
                      <div class="w-100"><div class="row">
                          <img src="/images/main/booking.png" class="offset-lg-4 offset-3 img-turism" alt=""> <img src="/images/main/sova.png" class="offset-2 img-turism" alt="">
                      </div></div>
                      <p class="mt-3"><a href="">Натисніть, щоб отримати детальну інформацію</a></p>
           
                      </div>
                      
                  </div>
                  
                   </div>
                   <div class="position-absolute">
                       <p class="text-service mx-5  mt-4">Для туристів</p>
                   </div>
               </div>
               
               </div>
      </div>
    <div class="black_color_down">
    <div class="container  d-lg-block d-md-none d-none">
      <div class="row about_text">
            <div class=" px-0 mt-5 position-relative">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/i8.jpg" alt="lol" class="w-100 i8_img_back">
            </div>
            <div class="container text_i8_front mt-5   position-absolute">
            <h3 class="was offset-6  mt-4">Чому слід обрати Autoshare?</h3>
            <hr class="title_line_under offset-7 ">
            <div class=" offset-lg-6">
              <div class="was_text row ">
                <img class="was_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_5.png" alt="">
                <h3 class="ml-lg-4 ">Більше 15 років досвіду</h3>
              </div>
              <div class="was_text row ">
                <img class="was_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_6.png" alt="">
                <h3 class="ml-lg-4">Допомога у любій ситуації</h3>
              </div>
              <div class="was_text row ">
                <img class="was_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_7.png" alt="">
                <h3 class="ml-lg-4">Великий парк автомобілів</h3>
              </div>
              <div class="was_text row ">
                <img class="was_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_8.1.png" alt="">
                <h3 class="ml-lg-4">Якісний сервіс</h3>
              </div>
              <div class="was_text row ">
                <img class="was_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_9.png" alt="">
                <h3 class="ml-lg-4">Оптимальні ціни</h3>
              </div>
              <div class="was_text row ">
                <img class="was_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_10.png" alt="">
                <h3 class="ml-lg-4 ">Все зроблено для вашого комфорту</h3>
              </div>
              
            </div>
            
            </div>
            
        </div>
        </div>
        

    <div class=" container i8_mob d-lg-none d-md-block">
      <div class="row about_text_mob mt-5">
            <div class=" mt-5 position-relative  ">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image8.jpg" alt="lol" class="img-fluid">
            </div>
            <div class=" mt-5 position-absolute">
            <div class="wasobr col-lg-12 offset-2" >
            <h3 class="was_mob mt-5 ">Чому слід обрати Autoshare?</h3>
            <hr class="hr">
          </div>
            <div class="wautoshare_mob container">
            <div class="was_mob_text row  ">
              <img class="was_mob_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_5.png" alt="">
              <h3 class="ml-4 ">Більше 15 років досвіду</h3>
            </div>
            <div class="was_mob_text row ">
              <img class="was_mob_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_6.png" alt="">
              <h3 class="ml-4 ">Допомога у любій ситуації</h3>
            </div>
            <div class="was_mob_text row  ">
              <img class="was_mob_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_7.png" alt="">
              <h3 class="ml-4 ">Великий парк автомобілів</h3>
            </div>
            <div class="was_mob_text row  ">
              <img class="was_mob_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_8.png" alt="">
              <h3 class="ml-4 ">Якісний сервіс</h3>
            </div>
            <div class="was_mob_text  row  ">
              <img class="was_mob_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_9.png" alt="">
              <h3 class="ml-4 ">Оптимальні ціни</h3>
            </div>
            <div class="was_mob_text row  ">
              <img class="was_mob_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/image_10.png" alt="">
              <h3 class="ml-4 ">Все зроблено для вашого комфорту</h3>
            </div>
            
          </div>
            
            </div>
            
        </div>
        </div>
    <div class="rolls_back container position-relative">
      <img class="rolls_img_back w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/rolls_back.jpg" alt="">
    
    <div class="rolls_content_front position-absolute h-100 w-100">
     <div class="box col-lg-12 text-center text-md-center mt-5"><h4 class="Color ">Про Autoshare</h4></div>
     <div class="container rolls_back_cont mt-4">
         <div class="row">
            
             <div class="box col-lg-12 ">Autoshare - це компанія, яка не просто здає автомобілі на прокат по всій Україні. При організації свого бізнесу, ми врахували багаторічний досвід роботи всесвітньо відомих прокатників і адаптували його під особливості, потреби та менталітет наших клієнтів. Ми перетворили оренду машин в Україні з дорогої послуги в доступну і зрозумілу для всіх людей.
 
  
 <div class="content_block" style="display: none;">
   <p>Поставивши на чільне місце максимум сервісу вже зараз ми пропонуємо оренду автомобілів на найпривабливіших і вигідних умовах.
 
 У нас ви можете взяти автомобіль в оренду без водія і не відчувати обмежень при пересуванні. Нашу високу планку надання послуг вже змогли оцінити постійні клієнти в Харкові, Києві, Дніпрі, Львові, Одесі та Вінниці. Оренда авто з нашою компанією - це не розкіш, а елемент комфортного побуту. Використовуючи прокат автомобілів в своїх цілях ви можете організувати автомобільний парк для свого бізнесу або взяти машину напрокат для особистого користування.
 </p>
 </div>     
             </div>
         </div>
         
         <div class="box text-center text-md-center m-4"><a class="content_toggle more_about_us" href="#">Докладніше<br></a></div>
         <div class="box text-center text-md-center mt-5"><h4 class="Color ">Наші партнери</h4></div>
         <div class="partners mt-5 row">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/Tripadvisor.png" alt="">
            <img class='ml-3' src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/uber.png" alt="">
            <img class='offset-7' src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/joinup.png" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main/booking1.png" alt="">
            

         </div>
     </div> 
    </div>
  </div>
  
        
     <div class="box text-center text-md-center mt-5"><h4 class="Color">Для питань та зв’язку</h4></div>
    <hr class="title_line_under">
             <footer>
            
              <div class="container-fluid mt-5 contacts block  col-lg-12">
             <div class="container block">
                <div class="row fixfoot white col-lg-10 offset-lg-1 my-5  mt-lg-5 mb-lg-4">
             </div>
                <div class="row mb-4 mt-sm">
                 <div id='conttext' class="foottext conttext col-lg-4 col-md- offset-lg-4 my-md-0  my-2 mt-lg-0">
                 <h2 class="color text-center text-md-center">Наші контакти та адреси</h2>    
                 </div>
                 </div>  
                <div class="row mb-5 col-lg-12">
                <div id='conttext' class=" foottext conttext col-lg-4 col-md-4 my-md-0  my-4 mt-lg-0">
                     <h3>0800 25 275 555 7</h3>
                     <h3>+380 97 235 7212</h3> 
                     <h3>+380 66 432 7523</h3>
                     
                 </div>
                 
                 <div id='conttext' class=" foottext conttext col-lg-4 col-md-4 my-md-0  my-4 mt-lg-0">
                     <h3><span class="Color"> Київ. </span>Вулиця Юрія Іллєнка 22</h3>
                     <h3><span class="Color"> Львів. </span> Вулиця Городоцька 15</h3> 
                     <h3><span class="Color"> Тернопіль. </span> Вулиця Руська 47</h3>
                 </div>
                 <div id='conttext' class=" foottext conttext col-lg-4 col-md-4  my-md-0  my-4 mt-lg-0">
                     <h3><span class="Color"> Харків. </span>Вулиця Сумська 12</h3>
                     <h3><span class="Color"> Дніпро. </span> Вулиця Київська 25</h3> 
                     <h3><span class="Color"> Запоріжжя. </span> Проспект Соборний 11</h3>
                 </div>
             </div>
               </div>
              </div>  
         </div>
           </footer>
        <div class="box text-center text-md-center mt-5"><h4 class="Color">Наше положення на мапі</h4></div>
        <hr class="title_line_under">
       <div class=" col-lg-10  maps_main offset-lg-1 my-5">
                     <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1286.4238343522259!2d24.034812594219115!3d49.84531972425117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDUwJzQyLjEiTiAyNMKwMDInMTEuMCJF!5e0!3m2!1suk!2sua!4v1608287551273!5m2!1suk!2sua" width='100%' height='450px'  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                 </div> 
          
<?php get_footer();?>