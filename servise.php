<?php include "header.php" ?>
<? if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));
  }
  else{
    $id='';
  }?>

<?php  switch($id){

default:
$img="s1";
$title_h1="Малоинвазивная радиоволновая хирургия кожи аппаратом Surgitron ellman";
// $title="заголовок_глав11";
// $discriptions="discriptions111";
break;
case 's1':
$img="s1";
$title_h1="Малоинвазивная радиоволновая хирургия кожи аппаратом Surgitron ellman";
// $title="заголовок_глав22";
// $discriptions="discriptions111";
break;
case 's2':
$img="s2";
$title_h1="Гистологическое исследование кожи в дерматологии";
// $title="заголовок_глав33";
// $discriptions="discriptions111";
break;
case 's3':
$img="s3";
$title_h1="Дерматоскопия эксперт уровня";
break;
case 's4':
$img="s4";
$title_h1="Диспансерная дерматоскопия";
break;
case 's5':
$img="s5";
$title_h1="Составление карты \"родинок";
break;
case 's6':
$img="s6";
$title_h1="Дерматоскопия эксперт уровня";
break;
case 's7':
$img="s7";
$title_h1="УЗД молочной железы";
break;
case 's8':
$img="s8";
$title_h1="Биопсия молочной железы";
break;
case 's9':
$img="s9";
$title_h1="Гинекологический осмотр";
break;
case 's10':
$img="s10";
$title_h1="Гинекологическое обследование ЗППП";
break;
case 's11':
$img="s11";
$title_h1="Гинекологическое лечение ЗППП";
break;
case 's12':
$img="s12";
$title_h1="Урологиический осмотр";
break;
case 's13':
$img="s13";
$title_h1="Урологиическое обследование ЗППП";
break;
case 's15':
$img="s14";
$title_h1="Урологиическое лечение ЗППП";
break;
case 's15':
$img="s15";
$title_h1="Плазмолифтинг";
break;
case 's16':
$img="s16";
$title_h1="Контурная пластика";
break;
case 's17':
$img="s17";
$title_h1="Ботулотоксины";
break;
case 's18':
$img="s18";
$title_h1="Биоревитализация";
break;
case 's19':
$img="s19";
$title_h1="Пилинги";
break;
case 's20':
$img="s20";
$title_h1="Эстетическая медицина, уходы";
break;
case 's21':
$img="s21";
$title_h1="Лазерная косметология";
break;
case 's22':
$img="s22";
$title_h1="Радиоволновая косметология";
break;
case 's23':
$img="s23";
$title_h1="Безинъекционная карбокситерапия";
break;
case 's24':
$img="s24";
$title_h1="Восковая эпиляция";
break;


}
?>
    <div class="servise_page" >
        <div class="container">
        <h4 class="servise_page" style="background: none; margin-bottom: 20px;">Наши услуги</h4>


            <div style="margin-top: 20px;" id="b5">
                 <img src="img/service/<?php echo"$img";?>.jpg" style="float:left; margin-right: 20px;     margin-bottom: 20px; " >
<h1 style="    font-size: 20px;    font-weight: 600;    color: #787878;}"><?php echo"$title_h1"?></h1>
<p style="width: 100%;">

<?php  switch($id){

         default:
          include 'pages/servise/s1.php';
        break;
        case 's1':
          include 'pages/servise/s1.php';
        break;
        case 's2':
          include 'pages/servise/s2.php';
        break;
        case 's3':
          include 'pages/servise/s3.php';
        break;
        case 's4':
          include 'pages/servise/s4.php';
        break;
        case 's5':
          include 'pages/servise/s5.php';
        break;
         case 's6':
          include 'pages/servise/s6.php';
        break;
         case 's7':
          include 'pages/servise/s7.php';
        break;
        case 's8':
          include 'pages/servise/s8.php';
        break;
        case 's9':
        include 'pages/servise/s9.php';
        break;
        case 's10':
        include 'pages/servise/s10.php';
        break;
        case 's11':
        include 'pages/servise/s11.php';
        break;
        case 's12':
        include 'pages/servise/s12.php';
        break;
        case 's13':
        include 'pages/servise/s13.php';
        break;
        case 's14':
        include 'pages/servise/s14.php';
        break;
        case 's15':
        include 'pages/servise/s15.php';
        break;
        case 's16':
        include 'pages/servise/s16.php';
        break;
        case 's17':
        include 'pages/servise/s17.php';
        break;
        case 's18':
        include 'pages/servise/s18.php';
        break;
        case 's19':
        include 'pages/servise/s19.php';
        break;
        case 's20':
        include 'pages/servise/s20.php';
        break;
        case 's21':
        include 'pages/servise/s21.php';
        break;
        case 's22':
        include 'pages/servise/s22.php';
        break;
        case 's23':
        include 'pages/servise/s23.php';
        break;
    case 's24':
        include 'pages/servise/s24.php';
        break;
        
               // case 'shop':
        //   include 'shop/admin/add2cat.php';
            }
  ?>
</p>

            </div>
</div>
</div>
<?php include "footer.php" ?>

  