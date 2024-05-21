import TablaSor from "./TablaSor.js";
class TablaSorView{
    #lista = [];
    constructor(szuloElem, lista){
        this.szuloElem = szuloElem;
        this.#lista = lista;
        this.tablaMegjelenit();
 
    }


    tablaMegjelenit(){
        let txt = '<table class="table table-bordered"></table>';
        this.szuloElem.append(txt);
        this.tablaElem = this.szuloElem.children("table");
        this.tablaElem.append(
            "<thead><tr>Angol</tr><tr>Magyar</tr><tr>Visszajelzés</tr></thead>"
        )
        for (const key in this.#lista) {     
            new TablaSor(this.#lista[key],this.tablaElem)
        }
    }
}
export default TablaSorView;