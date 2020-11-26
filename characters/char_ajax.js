function createChar() {
    const name = document.getElementById('charname').value;
    const str = document.getElementById('strength').value;
    const agi = document.getElementById('agility').value;
    const inte = document.getElementById('intelligence').value;
    
    if (name === "") {
        document.getElementById("createresponse").innerHTML = "break";
        return;
    } else {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("createresponse").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "createChar.php", true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send("name=" + name + "&str=" + str + "&agi=" + agi + "&inte=" + inte);
    }
}


