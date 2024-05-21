class Urlap {
  #adat = [];
  constructor(szuloElem, adat) {
    this.szuloElem = szuloElem;
    this.#adat = adat;
    console.log(this.#adat)
 
    this.szuloElem.innerHTML = `
        <form >
      <div class="mb-3 mt-3">
        <label for="temak">Témák:</label>
        <select id="temak" class="form-select" name="kategoria">
          <option value="temak"></option>
        </select>
      </div>
    </form>
        `;

    this.formElem = this.szuloElem.querySelector("form");
    let selectElem = this.formElem.querySelector("#temak")
    for (let item of this.#adat) {
      let option = document.createElement("option");
      option.value = item.id;
      option.text = item.temanev;
      selectElem.add(option);
    }
  }
 
}
export default Urlap;
