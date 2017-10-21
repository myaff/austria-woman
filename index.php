<?php require('parts/header.php');?>
<div class="page">
  <section id="start" class="section section--start">
    <div class="section__top">
      <div class="container">
        <div class="grid-noGutter">
          <div class="col-4">
            <div class="section__img-wrapper mr-1">
              <img src="<?=$root?>build/img/start-img.png" alt="" class="section__img l-block--right mb-4 mr-2">
            </div>
            <div class="section__line"></div>
          </div>
          <div class="col-4 pt-10 a-scroll-box">
            <div class="section__heading">
              <div class="tp-heading--huge">5</div>
              <div class="tp-heading--large tp--uc ml-3">женских занятий на&nbsp;каникулах в&nbsp;Австрии</div>
            </div>
            <div class="section__arrow mt-10">
              <svg class="icon">
                <use xlink:href="#arrow-down"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section__bottom pt-10 a-scroll-box">
      <div class="section__line a-scrolling-line"></div>
      <div class="container a-scroll-box">
        <div class="grid-noGutter a-fade-slide">
          <div class="col-4 pl-9" data-push-left="off-5">
            <div class="section__text text-block--light pt-4 pl-3 pr-2 pb-9 ml-4 mr-2">
              <div class="tp-body--big">
                <p>Австрия умеет удивлять. Чистейшие озера и горячие минеральные источники, живописные пейзажи и рождественские базары, уютные отели и увлекательная программа апре-ски, умопомрачительный шопинг и гарантированное классическое катание круглый год благодаря захватывающим дух ледникам — каждая женщина найдет здесь занятие по душе и влюбится в родину Штрауса и Моцарта, едва сойдя с трапа самолета.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="fairy-tale" class="section section--fairy-tale">
    <div class="container py-10">
      <div class="grid mt-4">
        <div class="col-6">
          <div class="section__heading ml-10 a-scroll-box">
            <div class="tp-heading--huge a-fade-slide-right a-ordered">как</div>
            <div class="tp-heading--large ml-4 mt-3 a-fade-slide-left a-ordered">оказаться в&nbsp;горнолыжной сказке</div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter mt-2 a-scroll-box">
        <div class="col-3 a-scroll-box" data-push-left="off-1">
          <div class="section__text text-block--light p-4 pb-5 a-fade-slide a-delay-3">
            <div class="tp-body--main">
              <p>За снежным, спокойным и расслабленным катанием отправляемся в самый большой горнолыжный регион мира — австрийский Циллерталь. Долина известна своим гостеприимством. Здесь вас ждут 515 километров великолепно подготовленных трасс, 179 подъемников, впечатляющее разнообразие склонов всех уровней сложности и единый ски-пасс. Изюминка курорта — возможность круглогодичного катания благодаря возвышающемуся над долиной леднику Хинтертукс. И, конечно же, помимо непосредственно горных лыж, в Циллертале есть все необходимое для зимнего отдыха: великолепная природа, отличные гостиницы на любой вкус и кошелек, уютные горные ресторанчики и бары, обширная развлекательная программа местных клубов и дискотек, таких как Badwandl Discothek, Disco Schlüssel Alm и Gletscherspalte.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter a-scroll-box">
        <div class="col-5 section__slider-wrapper mb-4 pl-2 pr-3 a-scroll-box">
          <div class="section__slider a-fade-slide">
            <div class="owl-carousel owl-nav--dark">
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <img src="<?=$root.'build/img/fairy-tale_slide-1.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-3 mt-10 section__mark-wrapper a-mark">
          <div class="section__mark mark pt-5 pb-8 pr-8 pl-9 mr-6">
            <div class="mark__line"></div>
            <div class="mark__icon ml-7 mb-3">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger">
              Циллерталь
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="slope" class="section section--slope">
    <div class="container py-5">
      <div class="grid-noBottom a-scroll-box">
        <div class="col-10 mb-8 a-scroll-box">
          <div class="section__heading a-scroll-box">
            <div class="tp-heading--huge ml-10 mr-4 a-fade-slide-right a-delay-2">Где</div>
            <div class="tp-heading--large ml-9 mt-3 a-fade-slide-left a-delay-3">найти&nbsp;склоны для&nbsp;более искушенных</div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter pt-5 a-scroll-box">
        <div class="col-5 section__img-wrapper mt-5 a-fade-slide-right a-ordered">
          <img src="<?=$root?>build/img/slope-img.jpg" alt="" class="section__img l-block--left">
        </div>
        <div class="col-3 a-fade-slide-left a-ordered" data-push-left="off-1">
          <div class="section__text-1 text-block--light p-4">
            <div class="tp-body--main mb-5">
              <p>Тем, кто чувствует себя на склонах поувереннее и ищет бόльшего разнообразия маршрутов, следует поехать в колыбель альпийской горнолыжной жизни — тирольскую деревню Санкт-Антон, расположенную в коммуне Санкт-Антон-ам-Арльберг. Именно здесь в 1921 году пионер горнолыжного спорта Ханнес Шнайдер основал первую австрийскую горнолыжную школу, а сегодня на этом престижном курорте частенько проводятся соревнования международного масштаба.</p>
            </div>
          </div>
          <div class="section__mark-wrapper mt-10 pt-10">
            <div class="section__mark mark mt-4 pt-5 pb-8 px-9 a-scroll-box">
              <div class="mark__line a-scrolling-line"></div>
              <div class="mark__icon ml-7 mb-3 a-fade-slide a-ordered">
                <svg class="icon"><use xlink:href="#pin"/></svg>
              </div>
              <div class="mark__text tp-heading--bigger a-fade-slide a-ordered">
                Санкт-Антон
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 pt-10 mt-10 a-fade-slide-left a-ordered">
          <div class="section__text-2 text-block--light px-4 py-3 mt-10 ml-3">
            <div class="tp-body--main mb-4">
              <p>Помимо первоклассного катания, в Санкт-Антоне вас ждут великолепная архитектура и необычные фуникулеры, велнес-оазис Arlberg-well.com, спортивный центр и скалодром Arl.rock, а также многочисленные дизайнерские отели. А еще в апреле в Санкт-Антоне проходит необычное музыкальное событие — фестиваль New Orleans Meets Snow, в ходе которого популярные американские джазовые и ритм-энд-блюзовые бэнды выступают прямо на склонах курорта и заставляют танцевать местную публику с утра до вечера.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="christmas" class="section section--christmas">
    <div class="container pt-10 pb-3">
      <div class="grid-noGutter mt-8">
        <div class="col-4 mt-10 pt-9 a-scroll-box" data-push-left="off-1">
          <div class="section__text-1 text-block--light p-4 mt-8 ml-10 a-fade-slide">
            <div class="tp-body--main mb-3">
              <p>За праздничной атмосферой едем на родину великого Моцарта, в один из главных культурных центров Европы — город Зальцбург. Прихода Рождества в Зальцбурге действительно ждут, ведь вместе с ним в городе появляются и традиционные рождественские базары. В частности, перед Кафедральным собором открывается ярмарка очаровательных изделий ручной работы и лакомств из местных натуральных продуктов. В 2017 году эта ярмарка, главная в городе, будет проходить с 23 ноября по 26 декабря. Помимо предновогоднего шопинга, тут можно будет послушать выступления детского хора, самостоятельно расписать пряники и даже прошептать желание на ухо Николаусу — австрийскому аналогу Санта-Клауса и Деда Мороза. На еще одной зальцбургской ярмарке, проходящей перед дворцом Хелльбрунн, можно покататься на пони и пожарить нежные сосиски прямо на костре.</p>
            </div>
          </div>
          <div class="section__slider-wrapper a-scroll-box">
            <div class="section__slider a-fade-slide">
              <div class="owl-carousel owl-nav--dark">
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                  <img src="<?=$root.'build/img/christmas_slide-1.jpg'?>" class="owl-lazy" />
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5 pt-2">
          <div class="section__heading ml-3 a-scroll-box">
            <div class="tp-heading--huge a-fade-slide-left a-ordered">Где</div>
            <div class="tp-heading--large color-alt ml-9 a-fade-slide-left a-ordered">проникнуться </br>духом </br>Рождества</div>
          </div>
          <div class="section__line a-scrolling-line mt-3"></div>
          <div class="section__text-2 a-scroll-box">
            <div class="text-block--light p-4 a-fade-slide">
              <div class="tp-body--main">
                <p>Если не хватит сил на праздничные ярмарки Зальцбурга, не отчаивайтесь — настоящая рождественская атмосфера  ждет вас вплоть до трапа самолета. Каждый год в декабре магазины венского аэропорта Вена-Швехат тематически декорируются, превращаясь в сказочные домики, — так, что кажется, будто сюда переехал один из знаменитых австрийских базаров. Можно походить по магазинчикам со стильной одеждой и аксессуарами, перевести дух за выпечкой и деликатесами, подкрепиться пуншем, купить тематические сувениры и тут же красиво упаковать с помощью бесплатного сервиса.</p>
              </div>
            </div>
          </div>
          <div class="section__mark mark ml-10 mt-2 a-scroll-box">
            <div class="mark__line a-scrolling-line"></div>
            <div class="mark__icon mb-2 mt-4 ml-8 a-fade-slide a-ordered">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger tp-text--left ml-3 a-fade-slide a-ordered">
              Зальцбург</br>
              аэропорт</br>
              Вена-Швехат 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="spa" class="section section--spa">
    <div class="container pt-7 pb-10">
      <div class="grid-noGutter-center mt-2">
        <div class="col-6">
          <div class="section__heading a-scroll-box">
            <div class="tp-heading--huge mb-2 a-fade-slide-left a-ordered">Где</div>
            <div class="tp-heading--large ml-3 a-fade-slide-left a-ordered">побаловать&nbsp;себя изысканными спа-&nbsp;и&nbsp;велнес- процедурами</div>
          </div>
        </div>
        <div class="grid-noGutter col-6 section__text-wrapper text-block--light px-4 py-3 mt-8 a-scroll-box">
          <div class="col-5 section__text pr-7 a-fade-slide a-ordered">
            <div class="tp-body--main">
              <p>После насыщенного дня на склоне или рождественском базаре стоит уделить время восстановлению сил и красоты, ведь Австрия славится не только своим горнолыжным отдыхом, но и курортами с горячими термальными источниками, потрясающими спа- и велнес-центрами. За всем этим великолепием отправляемся в Гастайн, где уникальные штольни обещают оздоровительный отдых, а в Скальные термы Бад-Гастайна с целебными водами можно попасть прямо со склона.</p>
            </div>
          </div>
          <div class="col-5 section__text px-3 a-fade-slide a-ordered">
            <div class="tp-body--main">
              <p>Здесь вас ждут открытые и закрытые бассейны, сауны и великолепные косметологические и велнес-процедуры в залах с панорамным видом на горный массив заповедника Высокий Тауэрн. Другой центр притяжения отдыхающих в Альпах — суперсовременный термальный комплекс в Бад-Хофгастайне. Спа- и велнес-центры есть также в Циллертале: тут вас ждет знаменитый на всю Австрию термальный комплекс в Фюгене (Erlebnistherme Zillertal in Fügen) и аквапарк в Майрхофене (Erlebnisbad Mayrhofen).</p>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-noBottom mt-10 pt-10 a-scroll-box">
        <div class="col-5 mt-8 section__slider-wrapper a-fade-slide-left" data-push-left="off-1">
          <div class="section__slider mt-4 ml-4">
            <div class="owl-carousel owl-nav--dark">
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <img src="<?=$root.'build/img/spa_slide-1.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-4 mt-10 pt-4 section__mark-wrapper a-mark">
          <div class="section__mark mark">
            <div class="mark__icon mb-8">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger ml-1">
              Гастайн</br>
              Целль-ам-Зее — Капрун</br>
              Циллерталь
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="shopping" class="section section--shopping">
    <div class="container pt-10">
      <div class="grid">
        <div class="col-6" data-push-left="off-1">
          <div class="section__heading ml-5 a-scroll-box">
            <div class="tp-heading--huge mb-2 a-fade-slide a-ordered">Где</div>
            <div class="tp-heading--large ml-3 a-fade-slide a-ordered">от&nbsp;души заняться выгодным шопингом</div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter-noWrap mt-6">
        <div class="col-6" data-push-left="off-1">
          <div class="section__slider-1 a-scroll-box">
            <div class="owl-carousel owl-nav--dark a-fade-slide-right">
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <img src="<?=$root.'build/img/shopping-s1_slide-1.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
            <div class="section__line a-scrolling-line"></div>
          </div>
          <div class="section__text-1 mx-10 mt-3 mb-4 pl-5 pr-7 a-scroll-box">
            <div class="tp-body--main mr-10 a-fade-slide">
              <p>Одежда, обувь и аксессуары от 150 знаменитых брендов со скидками от 30 до 70% в течение всего года — звучит привлекательно, не правда ли? Всего в 30-40 минутах езды от Вены на авто, поезде или автобусе-шаттле находится настоящий оазис для самых стильных — дизайнерский аутлет McArthurGlen Парндорф. В здании, построенном в традиционном австрийском стиле, расположены бутики таких всемирно известных брендов, как Prada, Armani, Bally, Gucci, Guess, Diesel, Desigual, а также уютные кафе и ресторанчики, где можно сделать перерыв на кофе c кусочком «Захера», знаменитым венским штруделем, бухтельном, нокерльном или гугельхупфом.</p>
            </div>
          </div>
          <div class="section__mark-wrapper ml-4 mr-10 pr-10">
            <div class="section__mark mark pl-10 py-8 a-scroll-box">
              <div class="mark__icon ml-10 mb-5 a-fade-slide a-ordered">
                <svg class="icon"><use xlink:href="#pin"/></svg>
              </div>
              <div class="mark__text tp-heading--bigger ml-3 a-fade-slide a-ordered">
                Аутлеты </br>
                McArthur </br>
                Glenn</br>
                аэропорт </br>
                Вена-Швехат
              </div>
            </div>
          </div>
        </div>
        <div class="col-5 section__offset pt-10 mt-4">
          <div class="section__slider-2 pt-10 mt-10 a-scroll-box">
            <div class="owl-carousel owl-nav--dark a-fade-slide-left">
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <img src="<?=$root.'build/img/shopping-s2_slide-1.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
            <div class="section__line a-scrolling-line"></div>
          </div>
          <div class="section__text-2 mt-10 a-scroll-box">
            <div class="text-block--light pt-2 px-4 pb-10 a-fade-slide">
              <div class="tp-body--main mb-2">
                <p>В аутлете также есть детская площадка и бесплатная парковка. Еще один аутлет McArthurGlen расположен в Зальцбурге, неподалеку от аэропорта: здесь вас ждут десятки магазинов известных марок (Valentina, Michael Kors, Iceberg, Polo Ralph Lauren Women и т.д.), кафе и ресторанчики. Ну а подвести итоги и скоротать время в ожидании обратного рейса можно в бутиках аэропорта Вена-Швехат. И не забывайте о Tax Free: на обратном пути вы сможете вернуть налог на ваши покупки. Да здравствует шопинг!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="non-stop" class="section section--non-stop">
    <div class="container pb-3">
      <div class="grid-noBottom-center">
        <div class="col-6">
          <div class="section__heading ml-2 a-scroll-box">
            <div class="tp-heading--huge a-fade-slide a-ordered">Где</div>
            <div class="tp-heading--large color-alt ml-3 a-fade-slide a-ordered">насладиться развлечениями нон&#8209;стоп</div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter">
        <div class="col-5 section__slider-wrapper mt-8 pr-3 a-scroll-box">
          <div class="section__slider l-block--right a-fade-slide-right">
            <div class="owl-carousel owl-nav--light">
              <?php for ($i = 1; $i <= 2; $i++) { ?>
                <img src="<?=$root.'build/img/non-stop_slide-'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
          <div class="section__mark-wrapper mt-10 pt-10 pr-9">
            <div class="section__mark mark mark--alt mark--center a-scroll-box">
              <div class="mark__line a-scrolling-line"></div>
              <div class="mark__icon mb-4 a-fade-slide a-ordered">
                <svg class="icon"><use xlink:href="#pin"/></svg>
              </div>
              <div class="mark__text tp-heading--bigger a-fade-slide a-ordered">Заальбах</div>
            </div>
          </div>
        </div>
        <div class="col-3 section__text-wrapper a-scroll-box">
          <div class="section__text text-block--light p-4 a-fade-slide-left a-delay-1">
            <div class="tp-body--main mb-7">
              <p>За весельем и романтикой классического зимнего отдыха едем в объединенную область Заальбах—Хинтерглемм—Леоганг—Фибербрунн, или знаменитый австрийский «горнолыжный цирк». Главные достоинства области — умная система подъемников, позволяющая пересечь долину, не снимая лыж, а также круглосуточные тусовки. Именно поэтому регион называют «цирком» — местные круговые маршруты напоминают арену, а на логотипе курорта красуется радостный клоун. У долины несколько центров: Заальбах, Хинтерглемм и Леоганг в регионе Зальцбург и недавно присоединенный к ним тирольский Фибербрунн. Вместе они образуют самую большую и разнообразную в Австрии область катания. Впрочем, есть здесь и множество других активностей, например, пешие и конные прогулки, коньки и тюбинг. В Заальбахе постоянно проходят самые громкие и знаковые вечеринки и фестивали, где танцуют до самого утра, а в находящемся неподалеку Spielberghaus можно согреться у камина, выпить горячего глинтвейна или попробовать традиционные австрийские блюда: суп с кнедликами, шницель, грестль, тафельшпиц, бойшель и многое другое. Спускаться в долину придется по трехкилометровой освещенной лыжной трассе. Незабываемые впечатления обеспечены!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="anons" class="section section--anons">
    <div class="container py-8">
      <a href="#" class="section__link" target="_blank">
        <img src="<?=$root?>build/img/anons.png" alt="" class="section__img l-block--center">
      </a>
    </div>
  </section>
</div> <!-- /.page -->
<?php require('parts/footer.php'); ?>