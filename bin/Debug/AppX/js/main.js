class Politician {
    constructor(first, last, summary, img) {
        this._first = first;
        this._last = last;
        this._summary = summary;
        this._img = img;
    }

    set summary(edit) {
        this._summary = edit;
    }

    get summary() {
        return this._summary;
    }

    get firstname() {
        return this._first;
    }

    get lastname() {
        return this._last;
    }

    get image() {
        return this._img;
    }
}

let Roger_Williams = new Politician("Roger", 'Williams', 'Representative of Arizona', 'http://www.oxcoll.com/tew/tests/Who-is-who/George-Osborne.jpg');
let George_Osborne = new Politician('George', 'Osborne', 'Representative of Georgia', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXT1Njr_NShS97PMW3cUnvHHUK5i1K2tZRUCa1TeKBH5Ckg57M1A');

var polname = [ Roger_Williams, George_Osborne ];
var first, last, pol;
function Edit() {
    first = document.getElementsByName("First-Name");
    last = document.getElementsByName("Last-Name");
    for (let i = 0; i < polname.length; i++) {
        if (polname[i].firstname === first && polname[i].lastname === last) {
            pol = polname[i];
        }
        else {
            prompt("Nothing available");
        }
    }
    open("Pol.html");
}
