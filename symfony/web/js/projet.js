$(function(){

  $("#addButton").click(function(){
    $( "#row_aliment" ).clone(true,true).appendTo( "#rows_aliment" );
  });

  $("#removeButton").click(function(){
    $( "#row_aliment" ).remove();
  });
});
