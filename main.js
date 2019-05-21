$( document ).ready(function() {
    $.ajax({
        method: "GET",
        url: "http://localhost/roc/jquery/api_jquery/product/read.php",
    })
    .done(function( data ) {
        //console.log(data['records']);
        var respond = '';
        $.each(data['records'], function(i, item) {
            //console.log(item);
            respond += `
            <div class="row">
            <div class="col-md-12">
              <h3>`+item.name+`</h3>
              <p>`+ item.description +`</p>
              <a >`+item.price+`</a>
            </div>
          </div>
            `;
        });
        console.log(respond);
        $("#list").html(respond);
    });
});