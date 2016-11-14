
var calcola = function(){
  console.log($('[media-target="cfu"][media-ref="1"]'));
  var cfu =$('[media-target="cfu"]')[0].val();
  var voto =$('[media-target="voto"]')[0].val();
  var media = parseInt(voto) + parseInt(cfu);
  alert(media);
}


var calcolaMediaPonderata = function(){
  calcola();
  // TODO:
}
var calcolaMedia = function(){
  calcola();
  // TODO:
}
