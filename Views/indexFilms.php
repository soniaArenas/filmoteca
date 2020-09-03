<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmoteca</title>
<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Assets/Css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <h1 id="title">Películas</h1>
  <div id="content">
    <div id="searchDiv">
      <input type="text" placeholder="Buscar..." id="searchFilm">
      <button class="btn" id="btnAsc">Ordenar por año ascendente</button>
      <button class="btn" id="btnDes">Ordenar por año descendente</button>
      <button class="btn" id="addBtn">Añadir película</button>
    </div>

    <div id="addFilmDiv">
      <input type="text" placeholder="Nombre" id="name">
      <input type="text" placeholder="Año" id="year">
      <button class="btn" id="setFilm">Añadir</button>
    </div>
    
    <div id="result">
      
     
      
    </div>
  </div>


  <script>
      $(document).ready(function() { 

    loadFilms("name","asc");
    
    $('#addFilmDiv').hide();

    
    $("#addBtn").click(function() { 

      if ($('#addFilmDiv').is(':visible')) {

     
       $('#addFilmDiv').hide();
       $('#name, #year').val('');
      
    } else {
      $('#addFilmDiv').show();
    }
  }); 

   
    $("#setFilm").click(function() { 

     var name2 = $('#name').val();
     name2 = name2.toLowerCase();
     var year2 = $('#year').val();

     if(name2 != "" && year2 !=""){

     $.ajax({
      type: "POST",
      url: "Controllers/addController.php",
      data: { name: name2, year: year2 },
      success: function(data){
       loadFilms("name","asc");
       $('#name, #year').val('');
       
     }
   });
}

   }); 

    $("#btnAsc").click(function() { 
     loadFilms("year","asc");

   }); 
    $("#btnDes").click(function() { 
     loadFilms("year","desc");

   }); 

    $( "#searchFilm" ).keyup(function() {
     var searchFilm = $('#searchFilm').val();
     searchFilm = searchFilm.toLowerCase();
     $.ajax({
      type: "POST",
      url: "Controllers/searchController.php",
      data: { name: searchFilm },
      success: function(data){
        
        $("#result").html(data);
        
      }
    });


   });
    
  }); 


   function loadFilms(column,order){

    $.ajax({
      type: "POST",
      url: "Controllers/getFilmsController.php",
      data: { orderBy: column, order: order },
      success: function(data){
        
        $("#result").html(data);
        
      }
    });
  };


</script>
</body>
</html>