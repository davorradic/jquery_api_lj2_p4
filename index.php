
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Bootstrap One Column Portfolio</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">



      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
  <style id="compiled-css" type="text/css">

  </style>


  <!-- TODO: Missing CoffeeScript 2 -->



</head>
<body>
    <!-- Page Content -->
    <div class="container">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_product">
  Create product
</button>

    <!-- Modal -->
    <div class="modal fade" id="create_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control-file" id="name">
                <span id="name_error" class="alert-danger"></span>
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="text" class="form-control-file" id="price" >
                <span id="price_error" class="alert-danger"></span>
            </div>
            <div class="form-group">
                <label for="Discription">Discription</label>
                <input type="text" class="form-control-file" id="description" >
                <span id="discription_error" class="alert-danger"></span>
            </div>
            <div class="form-group">
                <label for="Category">Category</label>
                <select id="category_id">
                    <option value="">select here</option>
                    <option value="1">Fashion</option>

                </select>
                <span id="category_error" class="alert-danger"></span>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">>submit</button>
          </form>
          </div>
          
        </div>
      </div>
    </div>
      <!-- Page Heading -->
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>

      <div id="list">

      </div>

      <hr>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->



</body>
</html>
