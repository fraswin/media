<html>
<!DOCTYPE html>
  <head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <meta charset="utf-8">
    <title> calcola medisdfgsdra</title>
  </head>
  <body>
      <div class="col-sm-3">
        <div class="input-group">

          <?php for($i=0; $i<9;$i++){ ?>
            <input type="number" class="form-control" placeholder="inserisci voto"  media-target="voto" media-ref="<?php echo $i ?>">
          <?php } ?>

        </div>
      </div>

      <div class="col-sm-3">
        <div class="input-group">

          <?php for($k=0; $k<9;$k++){ ?>
            <input type="number" class="form-control" placeholder="inserisci cfu" media-target="cfu" media-ref="<?php echo $k ?>">
          <?php } ?>

        </div>
      </div>

      <a class="btn btn-primary" onclick="calcola()">
        calcola media semplice
      </a>
    <a class="btn bnt-primary" onclick="calcolaMediaPonderata()">Calcola media ponderata</a>
  </body>
  <footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="scripts/utils.js" charset="utf-8"></script>
  </footer>
</html>
