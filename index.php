<html>
<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <meta charset="utf-8">
    <title> calcola media by gabbo</title>
  </head>
  <body class="row">
      <div class="col s3">
        <div class="input-group">

          <?php for($i=0; $i<9;$i++){ ?>
            <input type="number" class="form-control" placeholder="inserisci voto"  media-target="voto" value="" media-ref="<?php echo $i ?>">
          <?php } ?>

        </div>
      </div>

      <div class="col s3">
        <div class="input-group">

          <?php for($k=0; $k<9;$k++){ ?>
            <input type="number" class="form-control" placeholder="inserisci cfu" media-target="cfu" media-ref="<?php echo $k ?>">
          <?php } ?>

        </div>
      </div>

      <a class="btn" onclick="calcolaAritmetica()">
        calcola media semplice
      </a>
    <a class="btn" button-role="ponderata" onclick="calcolaPonderata()">Calcola media ponderata</a>
    <a class="btn" onclick="resetInput()">Reset</a>
  </body>
  <footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="scripts/utils.js" charset="utf-8"></script>
  </footer>
</html>
