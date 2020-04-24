






function afterLoadWindow() {
    showUserTag()
}

function showUserTag() {
    if(sessionStorage.getItem('name')){
        console.log(sessionStorage.getItem('name'));
        var user = this.document.getElementById("userTag")
         user.style.display = "inline-block"
        user.innerText = "welcome! " + sessionStorage.getItem('name')
    }
}

function ifLogin() {
    if(sessionStorage.getItem("name")){

    }
}

this.window.onload = afterLoadWindow();

