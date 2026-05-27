<!-- DATI -->
 <?php
 $pwLength = (int)($_GET["pwlength"] ?? 8);

 function pwGenerator ($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=<>?';
    $newPassword = "";

    $maxIndex = strlen($chars) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $maxIndex);
        $newPassword .= $chars[$randomIndex];
    }

    return $newPassword;
 }
 
 ?>
 <!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="container">
    
     <main>
      <h1>Password Generator</h1>
<!-- FORM -->
      <form>
<!-- Password -->
    <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Lunghezza Password:</label>
    <div class="col-sm-10">
      <input name="pwlength" type="number" class="form-control" id="inputPassword3" min="4" max="20">
    </div>
  </div>
<!-- Opzioni Password -->
  <!-- <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          First radio
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Second radio
        </label>
      </div>
      
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary">Genera</button>
</form>
<h2>La tua password è: <?php echo pwGenerator($pwLength) ?></h2>
        </main>
    </section>
</body>
</html>