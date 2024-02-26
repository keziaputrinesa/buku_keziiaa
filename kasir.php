<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <form action ="distributor.php" method="post">
  <div class="mb-3">
    <label for="id_kasir" class="form-label"> id_kasir</label>
    <input type="text" class="form-control" id="id_kasir" name="id_kasir">
  </div>
  <div class="mb-3">
    <label for="nama " class="form-label"> nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="telepon" class="form-label"> telepon</label>
    <input type="number" class="form-control" id="telepon" name="telepon">
  </div>
  <div class="mb-3">
    <label for="STATUS" class="form-label"> STATUS</label>
    <input type="number" class="form-control" id="STATUS" name="STATUS">
  </div>
  <div class="mb-3">
    <label for="jsername" class="form-label"> jsername</label>
    <input type="number" class="form-control" id="jsername" name="jsername">
  </div>
  <div class="mb-3">
    <label for="PASSWORD" class="form-label"> PASSWORD</label>
    <input type="number" class="form-control" id="PASSWORD" name="PASSWORD">
  </div>
  <div class="mb-3">
    <label for="akses" class="form-label"> akses</label>
    <input type="number" class="form-control" id="akses" name="akses">
  </div>
  <button type="submit" class="btn btn-primary">submit</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>