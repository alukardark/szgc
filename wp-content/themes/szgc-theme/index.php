<?php
get_header(); ?>


    <ul class="side__menu" data-side-menu="">
        <li class="side__menu-item">
            <a class="side__menu-link" data-section-link="section-company" href="#">Компания</a>
        </li>
        <li class="side__menu-item">
            <a class="side__menu-link" data-section-link="section-about" href="#">О заводе</a>
        </li>
        <li class="side__menu-item">
            <a class="side__menu-link" data-section-link="section-developments" href="#">События</a>
        </li>
        <li class="side__menu-item">
            <a class="side__menu-link" data-section-link="section-services" href="#">Услуги</a>
        </li>
        <li class="side__menu-item">
            <a class="side__menu-link" data-section-link="section-stages" href="#">Этапы цинкования</a>
        </li>
        <li class="side__menu-item">
            <a class="side__menu-link" data-section-link="section-advantage" href="#">Преимущества</a>
        </li>
        <li class="side__menu-item">
            <a class="side__menu-link" data-section-link="section-calculation" href="#">Расчет стоимости</a>
        </li>
    </ul>

    <div class="site-content-wrap" data-site-content="" role="toolbar">
        <section class="section-company" data-section="section-company">

            <div class="wrapper">
                <h1 >Сибирский завод <br>горячего цинкования</h1>
                <div class="company-desc" data-aos="fade-right"  data-aos-delay="300" data-aos-duration="1000">
                    <?=get_field('company-text-home-screen', 92)?>
                </div>

                <ul class="company-value-list" data-aos="fade-up" data-aos-duration="1000">
                    <li class="company-value-item">
                        <div class="company-value-img" style="background-image: url( <?=get_field('company-img-1', 92)?>)"></div>
                        <div class="company-value-title"><?=get_field('company-desc-1', 92)?></div>
                    </li>
                    <li class="company-value-item">
                        <div class="company-value-img" style="background-image: url( <?=get_field('company-img-2', 92)?>)"></div>
                        <div class="company-value-title"><?=get_field('company-desc-2', 92)?></div>
                    </li>
                    <li class="company-value-item">
                        <div class="company-value-img" style="background-image: url( <?=get_field('company-img-3', 92)?>)"></div>
                        <div class="company-value-title"><?=get_field('company-desc-3', 92)?></div>
                    </li>
                </ul>

                <div data-aos="fade-up"  data-aos-delay="300" data-aos-duration="1000" style="transition-property: opacity,transform,color,background">
                    <div class="btn btn-blue" data-toolbar="form-commercial">Получить коммерческое предложение</div>
                </div>
            </div>

            <div class="form-modal form-commercial">

                <section class="section-calculation section-form-commercial ">
                    <div class="close modal__close" >
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </div>
                    <?echo do_shortcode(" [contact-form-7 id=\"541\" title=\"Получить коммерческое предложение\"  html_class=\"animated fadeIn fadeOut calc-form duration-1s\"] ");?>
                    <!-- <form action="#" data-animation="fadeInUp" data-delay="0.5s" class="animated fadeIn fadeOut calc-form duration-1s">
                        <h2>Получить коммерческое предложение</h2>
                        <div class="form-row">
                            <span class="form-placeholder">Имя</span>
                            <input type="text" name="name">
                        </div>
                        <div class="form-row">
                            <span class="form-placeholder">Телефон</span>
                            <input type="text" name="phone">
                        </div>
                        <div class="form-row">
                            <span class="form-placeholder">E-mail</span>
                            <input type="text" name="email">
                        </div>
                        <input type="submit" class="btn btn-white" value="Отправить">

                        <p class="form-personal">
                            Нажимая на кнопку вы соглашаетесь<br>
                            на обработку <a target="_blank" href="/personal-information/">персональных данных</a>
                        </p>

                    </form> -->
                </section>

            </div>

            <div class="modal-overlay"></div>

        </section>

        <section class="section-about" data-section="section-about">
            <div class="wrapper">
                <div class="about-text-wrap">
                    <h3>О заводе</h3>
                    <div class="about-text animated fadeIn fadeOut delay-03s">
                        <?=get_field('company-preview', 92)?>
                    </div>
                    <a href="/company/" class="btn btn-transparent">Подробнее</a>
                </div>
                <ul class="about-slider animated">
                    <li class="about-slider-item">
                        <div class="about-img gps anim" style="background-image: url(<?=get_template_directory_uri();?>/img/about-gps.png);"></div>
                        <div class="about-img-desc">Отслеживание<br>отгрузок через GPS</div>
                    </li>
                    <li class="about-slider-item">
                        <div class="about-img eye anim" style="background-image: url(<?=get_template_directory_uri();?>/img/eye.png);"></div>
                        <div class="about-img-desc">Прозрачность<br>выполнения заказов</div>
                    </li>
                    <li class="about-slider-item">
                        <div class="about-img bath anim" style="background-image: url(<?=get_template_directory_uri();?>/img/bath.png);"></div>
                        <div class="about-img-desc">Одна из самых<br>больших ванн в РФ</div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="section-developments" data-section="section-developments">
            <div class="wrapper">
                <div class="section-developments-header">
                    <h3>События</h3>
                    <a href="/company/developments/" class="section-developments-all">Все события</a>
                </div>

                <ul class="developments-list">
                    <?php
                    global $post;
                    $args = array('post_type' => 'developments', 'order' => 'DESC','numberposts' => 3);
                    $myposts = get_posts( $args );
                    foreach( $myposts as $key=>$post ){
                        setup_postdata($post);?>
                        <li class="developments-item duration-1s animated fadeIn fadeOut">
                            <a href="<?php print_r(esc_url( get_permalink() ) ); ?>">
                                <div class="developments-item-img" style="background-image: url(<?=get_field('developments-img')?>)"></div>
                                <div class="developments-item-wrap-text">
                                    <div class="developments-item-title">
                                        <? the_title(); ?>
                                    </div>
                                    <div class="arrow"></div>
                                    <div class="developments-item-date">
                                        <?=get_field('developments-date'); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?}wp_reset_postdata();?>
                </ul>

            </div>
        </section>

        <section class="section-services" data-section="section-services">
            <div class="slider-arrow-left"></div>
            <div class="slider-arrow-right"></div>
            <ul class="services-slider">
                <?php
                global $post;
                $args = array('post_type' => 'services', 'order' => 'ASC','numberposts' => -1);
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){
                    setup_postdata($post);?>
                    <li class="services-item">
                        <div class="services-item-text">
                            <h3><? the_title(); ?></h3>
                            <div class="services-item-textBox">
                                <?=get_field('services-preview')?>
                            </div>
                            <a href="<? print_r( esc_url(get_permalink()) )?>" class="btn btn-transparent">Подробнее</a>
                        </div>
                        <div class="services-item-img" style="background-image: url(<?=get_field('services-img-preview')?>)"> </div>
                    </li>
                <?}wp_reset_postdata();?>
            </ul>
        </section>

        <section class="section-stages" data-section="section-stages">
            <div class="slider-arrow-left"></div>
            <div class="slider-arrow-right"></div>
            <ul class="stages-slider">
                <?php
                global $post;
                $args = array('post_type' => 'stages', 'order' => 'ASC','numberposts' => -1);
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){
                    setup_postdata($post);?>
                    <li class="section-item" style="background-image: url(<?=get_field('stages-img')?>)">
                        <div class="wrapper">
                            <h3>Этапы цинкования</h3>
                            <h2 data-animation="fadeInUp" data-delay="0.2s" class="animated"><? the_title(); ?></h2>
                            <div data-animation="fadeInUp" data-delay="0.4s" class="section-item-desc animated">
                                <p>
                                    <?=get_field('stages-desc'); ?>
                                </p>
                            </div>
                        </div>
                    </li>
                <?}wp_reset_postdata();?>
            </ul>
        </section>

        <section  class="section-advantage" data-section="section-advantage" >
            <div class="wrapper">
                <h2>Преимущества цинкования</h2>
                <ul class="advantage-list" data-aos="fade-up">
                    <?php
                    global $post;
                    $args = array('post_type' => 'advantage', 'order' => 'ASC','numberposts' => 4);
                    $myposts = get_posts( $args );
                    foreach( $myposts as $key =>$post ){
                        setup_postdata($post);
                        ?>
                        <li  class="advantage-item duration-06s animated fadeInUp fadeOut
                            <?if($key==0){?>
                                delay-0
                            <?}elseif($key==1){?>
                                delay-02s
                            <?}elseif($key==2){?>
                                delay-04s
                            <?}elseif($key==3){?>
                               delay-06s
                            <?}?>
                        ">
                            <div class="advantage-img" style="background-image: url(<?=get_field('advantage-img')?>);"></div>
                            <h6><? the_title(); ?></h6>
                            <div class="advantage-desc">
                                <?=get_field('advantage-desc'); ?>
                            </div>
                        </li>

                    <?}wp_reset_postdata();?>
                </ul>
            </div>
        </section>

        <section  class="section-calculation" data-section="section-calculation">

            <div class="wrapper">
                <?echo do_shortcode(" [contact-form-7 id=\"602\" title=\"Рассчитайте стоимость оцинкования вашего проекта\" html_class=\"animated fadeIn fadeOut calc-form duration-1s\"] ");?>
               <!--  <form action="#" data-animation="fadeInUp" data-delay="0.5s" class="animated fadeIn fadeOut calc-form duration-1s">
                    <h2>Рассчитайте стоимость оцинкования вашего проекта</h2>

                    <div class="form-row">
                        <span class="form-placeholder">Наименование</span>
                        <select multiple="multiple" class="name" name="name">
                            <option value="Дорожные ограждения">Дорожные ограждения</option>
                            <option value="Опоры ЛЭП">Опоры ЛЭП</option>
                            <option value="Общестроительные металлоконструкции">Общестроительные металлоконструкции</option>
                            <option value="Опоры освещения">Опоры освещения</option>
                            <option value="Мелкогабаритная продукция">Мелкогабаритная продукция</option>
                            <option value="Металлопрокат (полоса, пруток)">Металлопрокат (полоса, пруток)</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <span class="form-placeholder">Объем партии, т</span>
                        <select multiple="multiple" class="amount" name="amount">
                            <option value="1-10т">1-10т</option>
                            <option value="10-19т">10-19т</option>
                            <option value="20-49т">20-49т</option>
                            <option value="50-99т">50-99т</option>
                            <option value="от 100т и выше">от 100т и выше</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <span class="form-placeholder">Телефон</span>
                        <input type="text" name="phone">
                    </div>

                    <div class="form-row">
                        <span class="form-placeholder">E-mail</span>
                        <input type="text" name="email">
                    </div>

                    <input type="submit" class="btn btn-white" value="Узнать цену">

                    <p class="form-personal">
                        Нажимая на кнопку вы соглашаетесь<br>
                        на обработку <a target="_blank" href="/personal-information/">персональных данных</a>
                    </p>


                </form> -->

            </div>
            <div class="calculation-img"></div>

        </section>
    </div>




<?php
get_footer();
