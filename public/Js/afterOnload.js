






function afterLoadWindow() {
    showUserTag();
    hidenTag();
}

function showUserTag() {
    if(sessionStorage.getItem('name')){
        console.log(sessionStorage.getItem('name'));
        var user = this.document.getElementById("userTag")
         user.style.display = "inline-block"
        user.innerText = "welcome! " + sessionStorage.getItem('name')
    }
}

function hidenTag() {
    if(sessionStorage.getItem('name')){
        console.log(sessionStorage.getItem('name'));
        var register = this.document.getElementById("registerTag")
        var login = this.document.getElementById("loginTag")
        register.style.display = "none"
        login.style.display = "none"
    }

}

function ifLogin() {
    if(sessionStorage.getItem("name")){

    }
}

this.window.onload = afterLoadWindow();

