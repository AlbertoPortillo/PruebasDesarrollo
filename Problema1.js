var medidasStrings = "11 15 38"
var primeraInstruccion = "CeseAlFuego";
var segundaInstruccion = "CorranACubierto"
var entrada = "XXcaaamakkCCessseAAllFueeegooDLLKmmNNN";

function findFunction(word, longth){
    var reducer = longth.replace(/(.)\1+/g, '$1')
    var findString = reducer.search(word)
    if(findString > 0 ){
        console.log("SI")
    }else{
        console.log("NO")
    }
}

findFunction(primeraInstruccion, entrada);
findFunction(segundaInstruccion, entrada);
