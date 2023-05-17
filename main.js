class olla{
    lugares
    #merca
    constructor(){

    }
    set setLugares(p1){
        this.lugares = p1; 
    }
    get getLugares(){
        return this.lugares;
    }
}
let obj = new olla();

obj.setLugares = "Bucaramanga";
console.log(obj.getLugares);