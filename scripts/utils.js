
var calcolaAritmetica = function(){
  //$ è il selettore che voglio prendere da dentro il DOM

  //items = a tutti gli ''input'' che hanno come media-target = voto
  var items = $('body').find($('[media-target="voto"]'));
  //size = al numero di input realmente riempiti per poter fare la divisione dopo la somma dei voti
  var size = 0;
  //debugger;
  var media = 0;
  // items per ogni di esso, fai qualcosa... identifica each come un for che allinterno ha un TODO
  items.each( function() {
    //.val() è kla funzione che mi prende il valore dell item di items interato in quel momento (ovvvero il contenuto dell input)
    if($( this ).val()==''){
    }else{
      media = media +  parseInt($( this ).val());
      size++;
    }
  });

  alert(media/size);
  media, size=0;
}

//((voto * cfu)+(n) ) / somma(cfu)
var calcolaPonderata = function(){
  var voti = $('body').find($('[media-target="voto"]'));
  var cfu = $('body').find($('[media-target="cfu"]'));
  var sommaCfu = 0;

  //calcolo sommaCFU
  cfu.each( function() {
    if($( this ).val()!=''){
      sommaCfu = sommaCfu + parseInt($( this ).val());
    }
  });
  if(sommaCfu==0) {
    alert('completa i valori piciu');
    return
  }
  else {
    //$['button-role="ponderata"'].removeClass('disabled');
  }
  var sommaVal=0;
  for(var i = 0; i<voti.length;i++){
    if($('body').find($('[media-target="voto"]')[i]).val()!='') {
      sommaVal = sommaVal + (
        (parseInt($('body').find($('[media-target="voto"]')[i]).val()))*
        (parseInt($('body').find($('[media-target="cfu"]')[i]).val())));
    }
  }
  alert(sommaVal/sommaCfu);
  sommaCfu, sommaVal=0;
}

var resetInput = function(){
  $('body').find($('input')).each(function(){
    $(this).val('');
  });
}
