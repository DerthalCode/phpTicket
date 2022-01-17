<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ticket</title>
  </head>
  <body>
      <div class="container">
        <div class="buttons">
          <input type="submit" name="savedT" class="btn btn-primary" value="Visi bilietai">
          <input type="submit" name="savedT" class="btn btn-primary" value="Naujas skrydis">
        </div>
        <h1>Congratulations here's your ticket</h1>

        <table class="table table-dark table-sm">
          <thead>
              <tr>
                <th scope="col">Skrydzio numeris</th>
                <th scope="col">Asmens kodas</th>
                <th scope="col">Vardas, pavarde</th>
                <th scope="col">Lektuvas is</th>
                <th scope="col">Lektuvas i</th>
                <th scope="col">Kaina</th>
                <th scope="col">Bagazas</th>
              </tr>
          </thead>
          <tbody>
            <td><?= $bilietas['skrydzioNr']; ?></td>
            <td><?= $bilietas['asmens_kodas']; ?></td>
            <td><?= $bilietas['vardas_pavarde']; ?></td>
            <td><?= $bilietas['iskur']; ?></td>
            <td><?= $bilietas['ikur']; ?></td>
            <td><?= $bilietas['kaina']; ?></td>
            <td><?= $bilietas['bagazas']; ?></td> 
          </tbody>
        </table>
        <section>
        <h3>Visi skrydziai</h3>
        <table class="table table-bordered table striped">
            <tr>
                <th>Skrydzio numeris</th>
                <th>Asmens kodas</th>
                <th>Vardas pavarde</th>
                <th>Lektuvas is</th>
                <th>Lektuvas i</th>
                <th>Kaina</th>
                <th>Bagazas</th>
            </tr>
            <?php foreach(getData() as $list):?> 
            <tr>
                    <?php $list = explode(',', $list);?>
                    <?php foreach ($list as $item):?>
                    <?php if(!empty($item)):?>
                    <td><?=$item;?></td>
                    <?php endif;?>
                    <?php endforeach;?>
            </tr>
            <?php endforeach;?>
        </table>
    </section>
      </div>       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>