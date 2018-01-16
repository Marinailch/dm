<?php include "header.php" ?>
<? if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));
  }
  else{
    $id='';
  }?>







<?php  switch($id){

default:
$img="b1";
$title_h1="День меланомы 2017 пройдет 13 апреля";
// $title="заголовок_глав11";
// $discriptions="discriptions111";
break;
case 'b1':
$img="b1";
$title_h1="День меланомы 2017 пройдет 13 апреля";
// $title="заголовок_глав22";
// $discriptions="discriptions111";
break;
case 'b2':
$img="b2";
$title_h1="Малоинвазивная радиоволновая хирургия кожи аппаратом Surgitron ellman";
// $title="заголовок_глав33";
// $discriptions="discriptions111";
break;
case 'b3':
$img="b3";
$title_h1="ФРАКЦИОННЫЙ ФОТОТЕРМОЛИЗ - ФРАКСЕЛЬ / FRAXEL";
break;
case 'b4':
$img="b4";
$title_h1="Прессотерапия на аппарате Limpho-drain";
break;
case 'b5':
$img="b5";
$title_h1="ЗОЛОТОЙ ВЕК» АППАРАТОВ ЛАЗЕРНОЙ ЭПИЛЯЦИИ";
break;
case 'b6':
$img="b6_1";
$title_h1="Ведущие специалисте Клиники Евродерм в Днепре";
break;
case 'b7':
$img="b7";
$title_h1="Поздравляем наших докторов";
break;
case 'b8':
$img="b8";
$title_h1="";
break;
case 'b9':
$img="b9";
$title_h1="";
break;
case 'b10':
$img="b10";
$title_h1="";
break;
case 'b11':
$img="b11";
$title_h1="";
break;
case 'b12':
$img="b12";
$title_h1="";
break;
case 'b13':
$img="b13";
$title_h1="";
break;
case 'b15':
$img="b14";
$title_h1="";
break;
case 'b15':
$img="b15";
$title_h1="";
break;
case 'b16':
$img="b16";
$title_h1="";
break;
case 'b17':
$img="b17";
$title_h1="";
break;
case 'b18':
$img="b18";
$title_h1="";
break;
case 'b19':
$img="b19";
$title_h1="";
break;
case 'b20':
$img="b20";
$title_h1="";
break;
case 'b21':
$img="b21";
$title_h1="";
break;
case 'b22':
$img="b22";
$title_h1="";
break;
case 'b23':
$img="b23";
$title_h1="";
break;
case 'b24':
$img="b24";
$title_h1="";
break;


}
?>
    <div class="servise_page" >
        <div class="container">
        <h4 class="servise_page" style="background: none; margin-bottom: 20px;">Блог</h4>


            <div style="margin-top: 20px;" id="b5">
                 <img src="img/blog/<?php echo"$img";?>.jpg" style="float:left; margin-right: 20px; margin-bottom: 20px; max-width: 400px; width: 100%; " >
<h1 style="    font-size: 20px;    font-weight: 600; margin-right: 20px;   color: #787878;}"><?php echo"$title_h1"?></h1>
<p style="width: 100%;">


 <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

<p  style="margin-top: -13px; margin-bottom: 28px; font-weight: 600; color: dimgrey"> 
<div class="fb-share-button" data-href="http://dnipromedical.com/articles.php?id=<?php echo"$id"?>" data-layout="button_count" data-mobile-iframe="false">
<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://http://dnipromedical.com/articles.php?id=<?php echo"$id"?>">поделиться</a>
</div>
</p>

<?php  switch($id){

         default:
          include 'pages/blog/b1.php';
        break;
        case 'b1':
          include 'pages/blog/b1.php';
        break;
        case 'b2':
          include 'pages/blog/b2.php';
        break;
        case 'b3':
          include 'pages/blog/b3.php';
        break;
        case 'b4':
          include 'pages/blog/b4.php';
        break;
        case 'b5':
          include 'pages/blog/b5.php';
        break;
         case 'b6':
          include 'pages/blog/b6.php';
        break;
         case 'b7':
          include 'pages/blog/b7.php';
        break;
        case 'b8':
          include 'pages/blog/b8.php';
        break;
        case 'b9':
        include 'pages/blog/b9.php';
        break;
        case 'b10':
        include 'pages/blog/b10.php';
        break;
        case 'b11':
        include 'pages/blog/b11.php';
        break;
        case 'b12':
        include 'pages/blog/b12.php';
        break;
        case 'b13':
        include 'pages/blog/b13.php';
        break;
        case 'b14':
        include 'pages/blog/b14.php';
        break;
        case 'b15':
        include 'pages/blog/b15.php';
        break;
        case 's16':
        include 'pages/blog/b16.php';
        break;
        case 's17':
        include 'pages/blog/b17.php';
        break;
        case 's18':
        include 'pages/blog/b18.php';
        break;
        case 's19':
        include 'pages/blog/b19.php';
        break;
        case 'b20':
        include 'pages/blog/b20.php';
        break;
        case 'b21':
        include 'pages/blog/b21.php';
        break;
        case 'b22':
        include 'pages/blog/b22.php';
        break;
        case 'b23':
        include 'pages/blog/b23.php';
        break;
    case 'b24':
        include 'pages/blog/b24.php';
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

  