function Login() {
    var username = document.getElementsByTagName("input")[0].value
    var password = document.getElementsByTagName("input")[1].value
        if(username=="admin"&& password==123){
        alert("Login Efetuado");
        location.href = "paginainicial.html"
        }
        else{
            alert("Login Incorreto")
            document.getElementsByTagName("input")[0].value = ""
            document.getElementsByTagName("input")[1].value = ""
            document.getElementsByTagName("input")[0].focus()
        }     
}

function move(){
    document.getElementsByTagName("input")[0].style.marginBottom = "30px"
    document.getElementsByTagName("input")[0].style.transition = "1s"
}
