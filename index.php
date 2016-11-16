<html>
<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link  rel="stylesheet" href="css/index.css">
    <meta charset="utf-8">
    <title> calcola media</title>
  </head>
  <body >
    <!-- header-->
    <div id="header" class="row">
        <div class="col s3">
          <img id="logo" src="img/4z.png">

        </div>
        <div class="col s8">
          <h1>Calcola la tua media</h1>
        </div>

    </div>
    <!-- body-->
    <div  class="row">

      <div class="col l3 m6 s6 offset-l3"><!-- l associato al desk m tablet s smartphone -->
        <div class="input-group">

          <?php for($i=0; $i<9;$i++){ ?>
            <input type="number" class="form-control" placeholder="inserisci voto"  media-target="voto" value="" media-ref="<?php echo $i ?>">
          <?php } ?>

        </div>
      </div>

      <div class="col l3 m6 s6">
        <div class="input-group">

          <?php for($k=0; $k<9;$k++){ ?>
            <input type="number" class="form-control" placeholder="inserisci cfu" media-target="cfu" media-ref="<?php echo $k ?>">
          <?php } ?>

        </div>
      </div>
    </div>
<!-- bottoni-->
<div class="row">
  <div class="col s12 m12 l3 offset-l3">
    <a class="btn" onclick="calcolaAritmetica()">
      calcola media semplice
    </a>
  </div>
  <div class="col s12 m12 l3">
    <a class="btn" button-role="ponderata" onclick="calcolaPonderata()">Calcola media ponderata</a>

  </div>
  <div class="col s12 m12 l3">
    <a class="btn" onclick="resetInput()">Reset</a>
  </div>


  </div>
  </body>
  <!-- footer-->
  <footer>

    <div  class="row">
        <div id="f" class="col s12">
.
        </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="scripts/utils.js" charset="utf-8"></script>
  </footer>
</html>
