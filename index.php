<!-- https://paiza.io/projects/N98TuYueZljjLvErNrpSAg?language=php -->

<?php 
$name = "Василий";
$prof = "Техник";
$town = "Ярославль";
$email = "gek2372@ya.ru";
$phone = "+79123456789";

$skills = [
    [
        'name' => 'Фотошоп',
        'percent' => 30,
    ],
    [
        'name' => 'Иллюстратор',
        'percent' => 70,
    ],
    [
        'name' => 'Медиа',
        'percent' => 40,
    ],
    [
        'name' => 'Мечтатель',
        'percent' => 93,
    ],
];
$experience = [
    [
        'period_start' => 'Ноябрь 2019',
        'period_end' => 'по настоящее время',
        'job_title' => 'Специалист по тендерам и закупкам',
        'name_company' => 'ООО "ПК "ИнтерСнаб"',
        'text_description' => 'Мониторинг ЭТП в рамках 44-ФЗ, 223-ФЗ и Коммерческих (B2B-center, Tender.Pro и тп).
            Полный цикл сделки + отгрузка, контроль оплат и рекламации (подготовка судебных док-тов).
            Продление ЭЦП и подготовка ПК для участия в процедурах.
            Закупки:
            уровень глубже обыденного пользовательского Excel (ВПР), закупка требуемой продукции, просчёт цены для продажи, контроль прихода, работа с рекламациями (оформление возврата).'
    ],
    [
        'period_start' => 'Сентябрь 2018',
        'period_end' => 'июль 2019',
        'job_title' => 'Менеджер',
        'name_company' => 'ООО "Станки-Трейд"',
        'text_description' => 'Перевод технический Коммерческих предложений/ Инструкций по эксплуатации с Китайского/ Английского языков на понятный Русский (с душой) при использовании translate.google.com.Обработка изображений оборудования, а именно добавление логотипов компании, смена цвета элементов станка (через Photoshop). Изучение контекстной рекламы, интернет маркетинг.'
    ],
    [
        'period_start' => 'Декабрь 2015',
        'period_end' => 'август 2018',
        'job_title' => 'Специалист по обслуживанию (тех.поддержка)',
        'name_company' => 'ООО "Компания "Тензор"',
        'text_description' => 'Деятельность компании: Работа с программным комплексом Сбис. Услуги УЦ. Ведение складского учёта в системе Сбис. Понимание бухгалтерского учёта.'
    ]
]

?>
<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?= $name; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof; ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $town; ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone; ?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++): 
            $percent = $skills[$i]['percent'];
            ?>
                <p><?= $skills[$i]['name']; ?></p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                  <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $percent; ?>%"><?= $percent; ?>%</div>
                </div>
            <?php endfor; ?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <div class="w3-container">
              <?php for ($i = 0; $i < count($experience); $i++): ?>
                <h4 class="w3-opacity"><b><?= $experience[$i]['name_company'] ?></b></h4>
                <h5 class="w3-opacity"><b><?= $experience[$i]['job_title'] ?></b></h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $experience[$i]['period_start'] ?> - <span
                    class=
                    <?php 
                    if ($i == 1){
                        "w3-tag w3-teal w3-round";}
                        else{
                           "w3-text-teal"; 
                                            }
                    ?>><?= $experience[$i]['period_end'] ?></span></h6>
                <p><?= $experience[$i]['text_description'] ?></p>
                <hr>
            <?php endfor; ?>
          </div>
    
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>