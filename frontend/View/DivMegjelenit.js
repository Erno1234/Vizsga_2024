class DivMegjelenit{
    #lista = [];
    constructor(szuloElem, lista){
        this.szuloElem = szuloElem;
        this.#lista = lista;
        this.divMegjelenit();
 
    }

    divMegjelenit(){
        let txt = '<div class = "foDiv"></div>'
        this.szuloElem.append(txt);
        this.foDivElem = this.szuloElem.children(".foDiv")

        for (const key in this.#lista) {
            let kerdesDiv = document.createElement("div");
            
        }
    }

}
export default DivMegjelenit