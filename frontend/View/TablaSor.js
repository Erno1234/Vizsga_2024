class TablaSor {
  #obj = [];
  constructor(obj, szuloElem) {
    this.#obj = obj;
    console.log(this.#obj);
    this.tablaElem = szuloElem;
    this.#sorLetrehoz();

    this.sorElem = this.tablaElem.children("tr:last-child");
  
  }

  #sorLetrehoz() {
    let txt = `<tr id="${this.#obj.temaId}">`;
    for (const key in this.#obj) {
      if (this.#obj[key] !== this.#obj.temaId) {
        if (this.#obj[key] == this.#obj.magyar) {
          txt += `<td class="valaszCella"> <input type="text" class="valaszForm"  name="valasz" placeholder="Jelentése..."></td>`;
        } else {
          txt += `<td>${this.#obj[key]}</td>`;
        }
      }
    }
    txt += `<td ><button class="ellenorzes" type="button">Ellenorzes</button></td>`;
    txt += `</tr>`;
    this.tablaElem.append(txt);
  }

 
}
export default TablaSor;
