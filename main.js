$( document ).ready(function() {
  readProducts();
  function readProducts(){
    $.ajax({
        method: "GET",
        url: "product/read.php",
    })
    .done(function( data ) {
        //console.log(data['records']);
        var respond = '';
        $.each(data['records'], function(i, item) {
            console.log(item);
            respond += `
            
            <div class="row">
            <div class="col-md-8">
              <hr>
              <h3>`+item.name+`</h3>
              <p>`+ item.description +`</p>
              <a >`+item.price+`</a>
              <div> category: <a >`+ item.category_name +`</a></div>
            </div>
            <div class="col-md-4">
              <hr>
              <button class="btn btn-danger" onclick="delete_product(`+item.id+`)">Delete</button>
            </div>
          </div>
            `;
        });
        //console.log(respond);
        $("#list").html(respond);
    });
  }
    $("#submit").click(function(){
      event.preventDefault();
      var error = 0;
      if($('#name').val() == ''){
        $('#name_error').html("name field is required!");
        error = 1;
      }
      if($('#price').val() == ''){
        $('#price_error').html("price field is required!");
        error = 1;
      }
      if($('#description').val() == ''){
        $('#description_error').html("description field is required!");
        error = 1;
      }
      if($('#category_id').val() == ''){
        $('#category_error').html("category field is required!");
        error = 1;
      }
      if(error === 0){
        //create
        $.ajax({
            method: "POST",
            data: {name:$('#name').val(), price:$('#price').val(), description:$('#description').val(), category_id:$('#category_id').val()},
            url: "product/create.php",
            success: function(data, textStatus, jqXHR) {
                //data - response from server
                //console.log(data.message);
                if(data.message == 'Product was created.'){
                  $('#create_product').modal('hide');
                  readProducts();
                  $('#name').val('');
                  $('#price').val('');
                  $('#description').val('');
                  $('#category_id').val('');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
        
            }
        })
      }
    });


      
});

function delete_product(id){
  $.ajax({
    method: "POST",
    data: {id:id},
    url: "product/delete.php",
    success: function(data, textStatus, jqXHR) {
        //data - response from server
        console.log(data);
        if(data.message == 'Product was deleted.'){
          readProducts();
        }
    },
    error: function (jqXHR, textStatus, errorThrown) {

    }
})
}