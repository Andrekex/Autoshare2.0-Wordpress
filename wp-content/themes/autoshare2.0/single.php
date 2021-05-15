<?php get_header();?>
<div class="back_vsa">
<div class="vsa container mt-lg-5">
<div class="row">

<div class="block_left col-lg-8">
    <div id="main-slider-block1">
        <div id="viewport1">
            <ul id='slidewrapper1'>
                <li class="slide1"><?php the_post_thumbnail('full', array(
            'class' => ' wp-post-image w-100 d-block slide-img1'
          )); ?></li>
                <li class="slide1"></li>
                <li class="slide1"><img src="images/1.jpg" alt="3" class="slide-img1"></li>
                <li class="slide1"><img src="images/1.jpg" alt="4" class="slide-img1"></li>
            </ul>
            
            <div id="prev-next-btns1">
                <div id="prev-btn1"><p class='left_arrow1'>〈</p></div>
                <div id="next-btn1"><p class='right_arrow1'>〉</p></div>
        </div>
        
        <ul id="nav-btns1">
            <li class="slide-nav-btn1"></li>
            <li class="slide-nav-btn1"></li>
            <li class="slide-nav-btn1"></li>
            <li class="slide-nav-btn1"></li>
        </ul>
    </div>
     </div>

     <div class="description mt-5">
         <p><?php the_content();?></p>
     </div>
     
</div>
<div class="block_right col-lg-4">
    <div class="car_naming mt-3   ">
        <h3 class=""><?php the_title();?></h3>
    </div>
    <div class="car_parameters   row">
        <div class="type">
            <span>Седан</span>
        </div>
        <div class="doors">
            <span>4 двері</span>
        </div>
        <div class="seats">
            <span><?php the_field('capacity ');?> місць</span>
        </div>
    </div>
    <div class="specs_name mt-lg-5 ">
        <h3>Характеристики</h3>
        <hr class="hr_specs">
    </div>  
    <div class="specs mt-lg-3 row ">
        <p class='col-lg-7'>Коробка передач:</p>
        <span><?php the_field('transmission');?></span>
        <p class='col-lg-7'>Об'єм багажника:</p>
        <span><?php the_field('trunk');?></span>
        <p class='col-lg-7'>Привід:</p>
        <span><?php the_field('driveshaft');?></span>
        <p class='col-lg-7'>Об'єм двигуна: </p>
        <span><?php the_field('engine');?></span>
        <p class='col-lg-7'>Пробіг:</p>
        <span><?php the_field('mileage');?></span>
        <p class='col-lg-7'>Пальне:</p>
        <span><?php the_field('fuel');?></span>
        <p class='col-lg-7'>Розхід пального: </p>
        <span><?php the_field('fuel_consumption');?></span>
    </div>  
    <div class="comp_name mt-lg-5  ">
        <h3>Коплектація</h3>
        <hr class="hr_comp">
    </div> 
    <div class="comp mt-lg-3 row col-lg-12">
        <p class="">Безпека</p>
        <p class="">Центральний  замок • Подушка безпеки  (Airbag) • ABS • Сигналізація • ESP • Галогенні  фари • Сервокермо
        </p>
        <p class="">Комфорт</p>
        <p class="">Підсилювач  керма • Шкіряний  салон • Електросклопiдйомники • Бортовий  комп'ютер • Кондиціонер • Клiмат  контроль • Круїз  контроль • Парктронік • Підігрів  сидінь • Сенсор  дощу • Датчик  світла • Омивач  фар • Підігрів  дзеркал • Електропакет • Мультируль • Пам'ять  сидінь

        </p>
    </div>

    <div class="price_main mt-lg-3">
        <p class="mt-lg-3"><?php the_field('price');?></p>
    </div>
    <div class="price_secondary row justify-content-around">
        <p class="">8000грн/доба</p>
        <p class="">300€/доба</p>
    </div>

</div>

</div>
</div>
<?php get_footer();?>