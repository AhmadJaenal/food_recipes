<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delfood</title>
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .bg-image {
      background-image: url('images/402.png');
      background-size: cover;
      background-position: center;
    }
    .centered {
      text-align: center;
      margin-top: 90vh;
      transform: translateY(-50%);
    }
  </style>
</head>
<body class="bg-image">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="centered">
          <a href="{{ URL::previous() }}" class="btn btn-light rounded-pill font-weight-bold">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
