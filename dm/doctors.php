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
                    
                        <img src="img/vrach_card/<?php echo "$id";?>.png">
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

<?php  switch($id){

         default:
          include 'pages/doctors/d1.php';
        break;
        case 'd1':
          include 'pages/doctors/d1.php';
        break;
        case 'd2':
          include 'pages/doctors/d2.php';
        break;
        case 'd3':
          include 'pages/doctors/d3.php';
        break;
        case 'd4':
          include 'pages/doctors/d4.php';
        break;
        case 'd5':
          include 'pages/doctors/d5.php';
        break;
        
               // case 'shop':
        //   include 'shop/admin/add2cat.php';
            }
  ?>
</nav>

<?php include "footer.php" ?>