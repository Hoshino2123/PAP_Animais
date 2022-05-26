let creating = document.querySelector("#create").addEventListener('click', Submit)

const dados = [
    
]

function Submit(){
    
        let user = document.body.getElementsByTagName("input")[0].value
        let email = document.getElementsByTagName("input")[1].value
        let pass = document.getElementsByTagName("input")[2].value
        let confirm = document.getElementsByTagName("input")[3].value
    
        if (pass == confirm){
            dados.push({
                nome: user,
                mail: email,
                pass: senha,
            })
        }
        else {
            alert("Password incorreta")
        }
        
    
    console.log(dados)
    
}