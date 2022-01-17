<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
      <div class="card">
  <div class="card-header">
Tickets
  </div>
  <div class="card-body">
    <h5 class="card-title">Uzpildykite duomenis</h5>
</div>
<form action="data/generate.php" method="POST">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Skrydzio numeris</label>
  <select class="form-select" name="skrydzioNr" required>
    <option value="" selected disabled>-Pasirinkite skrydzio nr-</option>
  <?php foreach($skrydzioNumeriai as $k => $v):?>
    <option value="<?= $v; ?>"><?= $v; ?></option>
  <?php endforeach; ?>
</select>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Asmens Kodas</label>
  <input type="number" class="form-control" name="asmens_kodas" placeholder="Another input placeholder" required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Vardas, Pavarde</label>
  <input type="text" class="form-control" name="vardas_pavarde" placeholder="Another input placeholder" required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">is kur skrenda</label>
  <select class="form-select" name="iskur" required>
    <option value="" selected disabled>-Pasirinkite kur skrisite-</option>
  <?php foreach($kryptysIs as $k => $v):?>
    <option value="<?= $v; ?>"><?= $v; ?></option>
  <?php endforeach; ?>
</select>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">i kur skrenda</label>
  <select class="form-select" name="ikur" required>
    <?php foreach($kryptysI as $k => $v):?>
    <option value="<?= $v; ?>"><?= $v; ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">kaina</label>
  <select class="form-select" name="kaina" required>
    <?php foreach($kaina as $k => $v):?>
    <option value="<?= $v; ?>"><?= $v; ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Bagazas</label>
  <select class="form-select" name="bagazas" required>
    <?php foreach($bagazas as $k => $v):?>
    <option value="<?= $v; ?>"><?= $v; ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="mb-3">

  <input type="submit" class="btn btn-primary" value="Generuot">
</div>
</form>
  
</div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>