  <div class="left-sidebar">
    <button class="left-sidebar-btn" id="js-left-sidebar-btn">
      <span>Категории</span>
      <i class="fa fa-angle-down"></i>
    </button>

    <div class="left-sidebar__object">
      <!-- left-sidebar__menu -->
      <ul class="left-sidebar__menu" id="js-left-sidebar__menu">      
        <?php wp_list_categories([
          'orderby'            => 'name',
          'order'              => 'ASC',
          'style'              => 'list',
          'hide_empty'         => 0,
          'exclude'            => '1',
          'title_li'           => __( '' ),
          ]); ?>
        </ul>
      <!-- <ul class="left-sidebar__menu" id="js-left-sidebar__menu">
        <li><a href="#">Земля</a></li>
        <li><a href="#">Жилая недвижимость</a></li>
        <li><a href="#">Коммерческая недвижимость</a></li>
        <li><a href="#">Новостройки</a></li>
        <li><a href="#">Дом/Коттеджи</a></li>
        <li><a href="#">Строительство</a></li>
        <li><a href="#">Аренда</a></li>
      </ul> -->
      <!-- left-sidebar_menu -->
    </div>

    <!-- left-sidebar__object -->
    <div class="left-sidebar__object">
      <div class="img-wrap">
        <img src="<?php bloginfo('template_url'); ?>/assets/i/left-sidebar_object-1.jpg" alt="">
      </div>
      <div class="left-sidebar__object-description">
        <h3>Жилой комплекс в Г. Москва</h3>
        <p>190-Квартириый 11-этажиый жилой дом no ул. Ленина в микрорайоне Цеитральный</p>
        <a href="#">Узнать подробнее</a>
      </div>
    </div>
    <!-- left-sidebar__object -->
    <div class="left-sidebar__object">
      <div class="img-wrap">
        <img src="<?php bloginfo('template_url'); ?>/assets/i/left-sidebar_object-2.jpg" alt="">
      </div>
      <div class="left-sidebar__object-description">
        <h3>Жилой комплекс в Г. Минск</h3>
        <p>140-Квартириый 14-этажиый жилой дом no ул. Гагарина в микрорайоне Восточный</p>
        <a href="#">Узнать подробнее</a>
      </div>
    </div>
    <!-- left-sidebar__object -->
  </div>
          <!-- left-sidebar -->