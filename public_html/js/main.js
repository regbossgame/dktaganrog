var contact = document.getElementsByClassName('footer_form')[0];


var expanded = true;
var expandGrid = document.getElementsByClassName('showcase_grid_expand')[0];
if(expandGrid !== undefined)
{
    expandGrid.onclick = function () {
        expanded = !expanded;
        var grid = document.getElementsByClassName('showcase_grid')[0];
        var showcaseOverflow = document.getElementsByClassName('showcase_overflow')[0];

        if(!expanded) {

            var height = grid.clientHeight;
            showcaseOverflow.style.height = 150 + height + "px";
            expandGrid.innerHTML = "Свернуть...";
            expandGrid.style.padding = "5px";
            console.log(height);
        }
        else {
            showcaseOverflow.style.height = "400px";
            expandGrid.innerHTML = "Показать все...";
            expandGrid.style.padding = "15px";
        }

    };
}
contact.onsubmit = function (e) {
    e.preventDefault();
    if (grecaptcha.getResponse() === '') return;

    console.log('submited');
    var inputName = document.getElementById('name');
    var inputPhone = document.getElementById('phone');
    var inputEmail = document.getElementById('email');
    var inputBody = document.getElementById('body');
    var formData = new FormData(document.forms.person);

    // добавить к пересылке ещё пару ключ - значение
    formData.append("name", inputName.value);
    formData.append("phone", inputPhone.value);
    formData.append("email", inputEmail.value);
    formData.append("body", inputBody.value);
    formData.append("gtoken", grecaptcha.getResponse());

    // отослать
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/mail");
    //xhr.open("POST", "./mail.php");
    xhr.onreadystatechange = function() {
        if (this.readyState != 4) return;

        console.log( this.responseText );
    }
    xhr.send(formData);
    inputName.value = "";
    inputPhone.value = "";
    inputEmail.value = "";
    inputBody.value = "";
};






