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
