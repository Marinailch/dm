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
                    
                        <img src="img/vrach_card/<?php echo "$id";?>.jpg">
                        <div class="social">
                            <img src="img/vrach_card/ok.png">
                            <img src="img/vrach_card/fb.png">
                            <img src="img/vrach_card/vk.png">
                        </div>
                        <div class="doctor_info">

                                <h3>часы работы</h3>
                                <p>пн-пт    10:00 - 19:00</p>

                                <p><span>сб</span>11:00 - 15:00</p>

                                <p><span>вс</span>11:00 - 15:00</p>


                                <h3>контакты</h3>
                                <p>+38  067-156-35-48</p>
                                <p>+38  050-985-35-68</p>
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