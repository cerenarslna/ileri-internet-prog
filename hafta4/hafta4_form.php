<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM SAYFASI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form class="row g-3 needs-validation" novalidate name="form" action="hafta4_veritabani.php" method="post">
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Kullanıcı Adı:</label>
    <input type="text" class="form-control" id="validationCustom01" name="kullanici_adi" required>

  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Şifre</label>
    <input type="text" class="form-control" id="validationCustom02" name="sifre" required>
  </div>
 
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="giris" >GİRİŞ YAP</button>
    
  </div>
</form>
</div>
</div>
</body>
</html>

