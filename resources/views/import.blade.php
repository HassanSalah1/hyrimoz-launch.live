<!doctype html>
<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!--IE compatibility meta-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--first mobile meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>FRISOGOLD - Management of CMPA</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="stylesheet" href="/css/all.css" />
  <link rel="stylesheet" href="/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="icon" type="image/png" href="https://app.webinarjam.com/pagebuilder/assets/img/favicon/favicon-192.png" />

</head>

<body>



  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 div-f">
          <h5>Import file</h5>

        </div>
        <!--col-lg-12-->
        <div class="col-lg-6">
            <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" name="file" id="">
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
          <!--text-s-->
        </div>
        <!--col-lg-6-->


      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--content-->
  <div class="clear"></div>




  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/all.js"></script>
  <script src="js/script.js"></script>


</body>

</html>

