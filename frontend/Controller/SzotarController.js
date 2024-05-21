import DataService from "../Model/DataService.js"
import TablaSorView from "../View/TablaSorView.js";
import Urlap from "../View/Urlap.js";

class SzotarController{
    constructor(){
        this.dataService = new DataService();
        this.TablaSorView = null;
        this.dataService.getData("api/szavak/lista", this.megjelenit);
        this.dataService.getData("api/temak/lista", this.urlapMegjelenit);
    }

    urlapMegjelenit(temak){
        new Urlap($(".urlap")[0], temak);
    }

    megjelenit(lista){
        new TablaSorView($(".tablazat"),lista);
    }
}
export default SzotarController