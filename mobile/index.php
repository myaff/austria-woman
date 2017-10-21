<?php require('../parts/header-mobile.php');?>
<div class="page">
  <section id="start" class="section section--start">
    <div class="section__top">
      <div class="container">
        <div class="section__heading ml-9 mt-8">
          <div class="tp-heading--huge">5</div>
          <div class="tp-heading--large tp--uc ml-3 color-alt">женских занятий на&nbsp;каникулах в&nbsp;австрии</div>
        </div>
        <div class="section__arrow mt-3 mb-6 mx-auto color-alt">
          <svg class="icon">
            <use xlink:href="#arrow-down"/>
          </svg>
        </div>
        <div class="section__rect mx-auto"></div>
      </div>
    </div>
    <div class="section__bottom pb-9">
      <div class="container">
        <div class="section__line mx-auto mb-8"></div>
        <div class="section__text">
          <div class="tp-body--big">
            <p>Австрия умеет удивлять. Чистейшие озера и горячие минеральные источники, живописные пейзажи и рождественские базары, уютные отели и увлекательная программа апре-ски, умопомрачительный шопинг и гарантированное классическое катание круглый год благодаря захватывающим дух ледникам — каждая женщина найдет здесь занятие по душе и влюбится в родину Штрауса и Моцарта, едва сойдя с трапа самолета.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="fairy-tale" class="section section--fairy-tale">
    <div class="container pb-7">
      <div class="section__img-wrapper fullwidth">
        <img src="<?=$root?>build/img/fairy-tale-img-m.jpg" class="section__img" alt="">
      </div>
      <div class="section__heading">
        <div class="tp-heading--huge mb-4">как</div>
        <div class="tp-heading--large ml-3">оказаться в&nbsp;горнолыжной </br>сказке</div>
      </div>
      <div class="section__text p-9">
        <div class="tp-body--main">
          <p>За острыми ощущениями отправляемся в Гастайн и Лех-Цюрс. На первом курорте экстремалов ждут лучшие в Австрийских Альпах трассы для фрирайда, а второй — единственный в стране регион, где можно заняться хели-ски, то есть прыгнуть на склон прямо с вертолета. Обязательно стоит опробовать трассу «Харакири» в Циллертале. Она неспроста носит такое название, так как этот головокружительный спуск по плечу только самым смелым и подготовленным. Помимо этого, к вашим услугам горы-трехтысячники и ледники, зорбинг и тюбинг, ледолазание, полеты на парапланах, крутейшие сноупарки, айсшток и сотни километров маршрутов для спортсменов самого разного уровня — от новичков и любителей до суперпрофессионалов. И все это по единому ски-пассу в комплекте с продуманной инфраструктурой.</p>
        </div>
      </div>
      <div class="section__slider-wrapper mt-5">
        <div class="section__slider">
          <div class="owl-carousel owl-nav--dark">
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <img src="<?=$root.'build/img/fairy-tale_slide-1.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
        </div>
      </div>
      <div class="section__mark-wrapper">
        <div class="section__mark mark">
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
  </section>
  <section id="slope" class="section section--slope">
    <div class="container pt-10">
      <div class="section__heading mt-5">
        <div class="tp-heading--huge mb-4">Где</div>
        <div class="tp-heading--large ml-3">найти&nbsp;склоны для&nbsp;более искушенных</div>
      </div>
      <div class="section__text text-block--light mt-8 mr-10 mb-2 pt-10 pl-5 pr-6 pb-8">
        <div class="tp-body--main">
          <p>Тем, кто чувствует себя на склонах поувереннее и ищет бόльшего разнообразия маршрутов, следует поехать в колыбель альпийской горнолыжной жизни — тирольскую деревню Санкт-Антон, расположенную в коммуне Санкт-Антон-ам-Арльберг. Именно здесь в 1921 году пионер горнолыжного спорта Ханнес Шнайдер основал первую австрийскую горнолыжную школу, а сегодня на этом престижном курорте частенько проводятся соревнования международного масштаба.</p>
          <p>Помимо первоклассного катания, в Санкт-Антоне вас ждут великолепная архитектура и необычные фуникулеры, велнес-оазис Arlberg-well.com, спортивный центр и скалодром Arl.rock, а также многочисленные дизайнерские отели. А еще в апреле в Санкт-Антоне проходит необычное музыкальное событие — фестиваль New Orleans Meets Snow, в ходе которого популярные американские джазовые и ритм-энд-блюзовые бэнды выступают прямо на склонах курорта и заставляют танцевать местную публику с утра до вечера.</p>
        </div>
      </div>
      <div class="section__img-wrapper">
        <img src="<?=$root?>build/img/slope-img.jpg" alt="" class="section__img">
        <div class="section__mark-wrapper">
          <div class="section__mark mark mark--center fullwidth py-9">
            <div class="mark__line"></div>
            <div class="mark__icon mb-3">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger">
              Санкт-Антон
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="christmas" class="section section--christmas">
    <div class="container pb-7">
      <div class="section__img-wrapper fullwidth">
        <img src="<?=$root?>build/img/christmas-img-m.jpg" class="section__img" alt="">
      </div>
      <div class="section__heading">
        <div class="tp-heading--huge mb-2">Где</div>
        <div class="tp-heading--large ml-2">проникнуться </br>духом </br>Рождества</div>
      </div>
      <div class="section__text mt-3">
        <div class="text-block--light p-9">
          <div class="tp-body--main">
            <p>За праздничной атмосферой едем на родину великого Моцарта, в один из главных культурных центров Европы — город Зальцбург. Прихода Рождества в Зальцбурге действительно ждут, ведь вместе с ним в городе появляются и традиционные рождественские базары. В частности, перед Кафедральным собором открывается ярмарка очаровательных изделий ручной работы и лакомств из местных натуральных продуктов. В 2017 году эта ярмарка, главная в городе, будет проходить с 23 ноября по 26 декабря. Помимо предновогоднего шопинга, тут можно будет послушать выступления детского хора, самостоятельно расписать пряники и даже прошептать желание на ухо Николаусу — австрийскому аналогу Санта-Клауса и Деда Мороза. На еще одной зальцбургской ярмарке, проходящей перед дворцом Хелльбрунн, можно покататься на пони и пожарить нежные сосиски прямо на костре.</p>
          </div>
        </div>
      </div>
      <div class="section__slider-wrapper mx-7">
        <div class="section__slider">
          <div class="owl-carousel owl-nav--dark">
            <?php for ($i = 1; $i <= 3; $i++) { ?>
              <img src="<?=$root.'build/img/christmas_slide-1.jpg'?>" class="owl-lazy" />
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="section__text mt-8 mb-7">
        <div class="text-block--light px-9">
          <div class="tp-body--main">
            <p>Если не хватит сил на праздничные ярмарки Зальцбурга, не отчаивайтесь — настоящая рождественская атмосфера  ждет вас вплоть до трапа самолета. Каждый год в декабре магазины венского аэропорта Вена-Швехат тематически декорируются, превращаясь в сказочные домики, — так, что кажется, будто сюда переехал один из знаменитых австрийских базаров. Можно походить по магазинчикам со стильной одеждой и аксессуарами, перевести дух за выпечкой и деликатесами, подкрепиться пуншем, купить тематические сувениры и тут же красиво упаковать с помощью бесплатного сервиса.</p>
          </div>
        </div>
      </div>
      <div class="section__mark mark pl-9">
        <div class="mark__line mb-3"></div>
        <div class="mark__icon mb-4 ml-4">
          <svg class="icon"><use xlink:href="#pin"/></svg>
        </div>
        <div class="mark__text tp-heading--bigger">Леx-Цюрс</div>
      </div>
    </div>
  </section>
  <section id="spa" class="section section--spa">
    <div class="container pt-10 pb-9">
      <div class="section__heading my-9 pb-10">
        <div class="tp-heading--huge mb-2">Где</div>
        <div class="tp-heading--large ml-3">побаловать&nbsp;себя изысканными спа-&nbsp;и&nbsp;велнес- процедурами</div>
      </div>
      <div class="section__text text-block--light py-9 pl-10 pr-7 mb-5">
        <div class="tp-body--main">
          <p class="m-0">После насыщенного дня на склоне или рождественском базаре стоит уделить время восстановлению сил и красоты, ведь Австрия славится не только своим горнолыжным отдыхом, но и курортами с горячими термальными источниками, потрясающими спа- и велнес-центрами. За всем этим великолепием отправляемся в Гастайн, где уникальные штольни обещают оздоровительный отдых, а в Скальные термы Бад-Гастайна с целебными водами можно попасть прямо со склона.</p>
          <p class="m-0">Здесь вас ждут открытые и закрытые бассейны, сауны и великолепные косметологические и велнес-процедуры в залах с панорамным видом на горный массив заповедника Высокий Тауэрн. Другой центр притяжения отдыхающих в Альпах — суперсовременный термальный комплекс в Бад-Хофгастайне. Спа- и велнес-центры есть также в Циллертале: тут вас ждет знаменитый на всю Австрию термальный комплекс в Фюгене (Erlebnistherme Zillertal in Fügen) и аквапарк в Майрхофене (Erlebnisbad Mayrhofen).</p>
        </div>
      </div>
      <div class="section__slider-wrapper">
        <div class="section__slider">
          <div class="owl-carousel owl-nav--dark">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
              <img src="<?=$root.'build/img/spa_slide-1.jpg'?>" class="owl-lazy" />
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="section__mark-wrapper">
        <div class="section__mark mark">
          <div class="mark__line"></div>
          <div class="mark__icon mb-5 ml-3">
            <svg class="icon"><use xlink:href="#pin"/></svg>
          </div>
          <div class="mark__text tp-heading--bigger">
            Гастайн</br>
            Целль-ам-Зее — Капрун</br>
            Циллерталь
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="shopping" class="section section--shopping">
    <div class="container pt-10">
      <div class="section__heading mt-3">
        <div class="tp-heading--huge mb-3">Где</div>
        <div class="tp-heading--large ml-2">от&nbsp;души заняться выгодным шопингом</div>
      </div>
      <div class="section__slider-wrapper mt-7">
        <div class="section__slider-1 px-7">
          <div class="owl-carousel owl-nav--dark">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
              <img src="<?=$root.'build/img/shopping-s1_slide-1.jpg'?>" class="owl-lazy" />
            <?php } ?>
          </div>
          <div class="section__line"></div>
        </div>
      </div>
      <div class="section__text my-8">
        <div class="tp-body--main">
          <p>Одежда, обувь и аксессуары от 150 знаменитых брендов со скидками от 30 до 70% в течение всего года — звучит привлекательно, не правда ли? Всего в 30-40 минутах езды от Вены на авто, поезде или автобусе-шаттле находится настоящий оазис для самых стильных — дизайнерский аутлет McArthurGlen Парндорф. В здании, построенном в традиционном австрийском стиле, расположены бутики таких всемирно известных брендов, как Prada, Armani, Bally, Gucci, Guess, Diesel, Desigual, а также уютные кафе и ресторанчики, где можно сделать перерыв на кофе c кусочком «Захера», знаменитым венским штруделем, бухтельном, нокерльном или гугельхупфом.</p>
        </div>
      </div>
      <div class="section__img-wrapper px-6">
        <img src="<?=$root?>build/img/shopping-s2_slide-1.jpg" alt="" class="section__img">
      </div>
      <div class="section__mark-wrapper pl-7 mb-7 pt-10 mt-3">
        <div class="section__mark mark mark--inline">
          <div class="mark__line"></div>
          <div class="mark__icon mr-6">
            <svg class="icon"><use xlink:href="#pin"/></svg>
          </div>
          <div class="mark__text tp-heading--bigger">
            Аутлеты McArthur Glenn</br>
            аэропорт </br>
            Вена-Швехат
          </div>
        </div>
      </div>
      <div class="section__text my-8">
        <div class="tp-body--main">
          <p>В аутлете также есть детская площадка и бесплатная парковка. Еще один аутлет McArthurGlen расположен в Зальцбурге, неподалеку от аэропорта: здесь вас ждут десятки магазинов известных марок (Valentina, Michael Kors, Iceberg, Polo Ralph Lauren Women и т.д.), кафе и ресторанчики. Ну а подвести итоги и скоротать время в ожидании обратного рейса можно в бутиках аэропорта Вена-Швехат. И не забывайте о Tax Free: на обратном пути вы сможете вернуть налог на ваши покупки. Да здравствует шопинг!</p>
        </div>
      </div>
    </div>
  </section>
  <section id="non-stop" class="section section--non-stop">
    <div class="container pt-10">
      <div class="section__heading mt-3">
        <div class="tp-heading--huge mb-4">Где</div>
        <div class="tp-heading--large color-alt ml-3">насладиться развлечениями нон&#8209;стоп</div>
      </div>
      <div class="section__slider-wrapper mt-10 px-8">
        <div class="section__slider px-2">
          <div class="owl-carousel owl-nav--light">
            <?php for ($i = 1; $i <= 2; $i++) { ?>
              <img src="<?=$root.'build/img/non-stop_slide-1-m.jpg'?>" class="owl-lazy" />
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="section__text pt-8 pl-10 pr-9 pb-9">
        <div class="tp-body--main">
          <p>За весельем и романтикой классического зимнего отдыха едем в объединенную область Заальбах—Хинтерглемм—Леоганг—Фибербрунн, или знаменитый австрийский «горнолыжный цирк». Главные достоинства области — умная система подъемников, позволяющая пересечь долину, не снимая лыж, а также круглосуточные тусовки. Именно поэтому регион называют «цирком» — местные круговые маршруты напоминают арену, а на логотипе курорта красуется радостный клоун. У долины несколько центров: Заальбах, Хинтерглемм и Леоганг в регионе Зальцбург и недавно присоединенный к ним тирольский Фибербрунн. Вместе они образуют самую большую и разнообразную в Австрии область катания. Впрочем, есть здесь и множество других активностей, например, пешие и конные прогулки, коньки и тюбинг. В Заальбахе постоянно проходят самые громкие и знаковые вечеринки и фестивали, где танцуют до самого утра, а в находящемся неподалеку Spielberghaus можно согреться у камина, выпить горячего глинтвейна или попробовать традиционные австрийские блюда: суп с кнедликами, шницель, грестль, тафельшпиц, бойшель и многое другое. Спускаться в долину придется по трехкилометровой освещенной лыжной трассе. Незабываемые впечатления обеспечены!</p>
        </div>
      </div>
      <div class="section__mark-wrapper mt-7">
        <div class="section__mark mark mark--inline mark--alt">
          <div class="mark__line"></div>
          <div class="mark__icon mr-4">
            <svg class="icon"><use xlink:href="#pin"/></svg>
          </div>
          <div class="mark__text tp-heading--bigger">Заальбах</div>
        </div>
      </div>
    </div>
    <section id="anons" class="section section--anons mt-3 pb-7">
      <a href="#" class="section__link" target="_blank">
        <img src="<?=$root?>build/img/anons.png" alt="" class="section__img l-block--center">
      </a>
    </section>
  </section>
</div> <!-- /.page -->
<?php require($root.'/parts/footer-mobile.php'); ?>