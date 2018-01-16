
  //Функция показа
      function block(block){
          document.getElementById('menu').style.display = "block";
          document.getElementById('menu_mob').style.display = "none";

      }
  function none(none){
      document.getElementById('menu').style.display = "none";
      document.getElementById('menu_mob').style.display = "block";

  }

  function geo_block(block){
      document.getElementById('menu_geo').style.display = "block";
      document.getElementById('ico_geo').style.display = "none";

  }
  function geo_none(none){
      document.getElementsById('menu_geo').style.display = "none";
      document.getElementById('ico_geo').style.display = "block";

  }

  function bhiden(none){
      $('.map_info').animate({top: '450px'});
      $('.map_info p').css('display', 'none');
      $('.map_info h3').css('display', 'none');
      $('.map_info hr').css('display', 'none');
      document.getElementById('hiden_map').style.display = "none";
      document.getElementById('show_map').style.display = "block";
      document.getElementById('map_frime').style.display = "none";

  }
  function bshow(){
      $('.map_info').animate({top: '0px'});
      $('.map_info p').css('display', 'block');
      $('.map_info h3').css('display', 'block');
      $('.map_info hr').css('display', 'block');
      document.getElementById('show_map').style.display = "none";
      document.getElementById('hiden_map').style.display = "block";
      document.getElementById('map_frime').style.display = "block";

        }


