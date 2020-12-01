function getArmor() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("armor").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getArmor.php", true);
    xhttp.send();
}

function getWeapons() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("weapons").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getWeapons.php", true);
    xhttp.send();
}

function getChar() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("stats").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getCharStats.php", true);
    xhttp.send();
}