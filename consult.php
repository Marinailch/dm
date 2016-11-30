<?php include "header.php" ?>
<? if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));
  }
  else{
    $id='';
  }?>
    <div class="doctor">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="doctor_card">
<?php  switch($id){

    default:
        $img="d1";
        break;
    case 'c1':
        $img="d1";
        break;
    case 'c2':
        $img="d2";
        break;
    case 'c3':
        $img="d2";
        break;
    case 'c4':
        $img="d5";
        break;
    case 'c5':
        $img="d4";
        break;
    case 'c6':
        $img="d1";
        break;
    case 'c7':
        $img="d3";
        break;
    case 'c8':
        $img="d6";
        break;}
?>

                        <img src="img/vrach_card/<?php echo"$img";?>.png">
                        <div class="social">
                            <img src="img/vrach_card/ok.png">
                            <img src="img/vrach_card/fb.png">
                            <img src="img/vrach_card/vk.png">
                        </div>
                        <div class="doctor_info">
                            <h4>часы работы</h4>
                            <span class="week">пн-пт</span><span>10:00 - 19:00</span><br>
                            <span class="week">сб</span><span>11:00 - 15:00</span><br>
                            <span class="week">вс</span><span>10:00 - 19:00</span><br>
                            <h4>контакты</h4>
                            <p>+38  067-156-35-48</p><br>
                            <p>+38  050-985-35-68</p><br>
                            <p>dmedical@dm.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 text-doc">

                <nav>
                <h2>Консультация</h2>

<?php  switch($id){

         default:
          include 'pages/consult/c1.php';
        break;
        case 'c1':
          include 'pages/consult/c1.php';
        break;
        case 'c2':
          include 'pages/consult/c2.php';
        break;
        case 'c3':
          include 'pages/consult/c3.php';
        break;
        case 'c4':
          include 'pages/consult/c4.php';
        break;
        case 'c5':
          include 'pages/consult/c5.php';
        break;
         case 'c6':
          include 'pages/consult/c6.php';
        break;
         case 'c7':
          include 'pages/consult/c7.php';
        break;
        case 'c8':
          include 'pages/consult/c8.php';
        break;
        
               // case 'shop':
        //   include 'shop/admin/add2cat.php';
            }
  ?>
</nav>

<?php include "footer.php" ?>