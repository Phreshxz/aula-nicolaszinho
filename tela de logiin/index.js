function cadastrar() {

    const nome = document.getElementById('nome').value
    const senha = document.getElementById('confsenha').value
    const confsenha = document.getElementById('senha').value

    if (nome && senha === confsenha) {
        localStorage.setItem(nome, senha)
        alert('Usuario cadastrado com sucesso')
        window.location.href = 'cadastro.html'
    }
    else {
        return alert('Usuario e/ou senha incorreto')
        
    }
}


function login() {
    const nome = document.getElementById('nome').value
    const senha = document.getElementById('senha').value

    let contaexistente = localStorage.getItem(nome)

    if (!contaexistente) {
        return alert("usuario nao existe")

    }

    if (nome && senha === contaexistente) {
        localStorage.setItem(nome, senha)
         alert(`Usuario ${nome} cadastrado com sucesso`)
         window.location.href = 'home.html'
    }
    else {
        return alert(`Usuario e/ou senha incorreto`)
    }

}


function entrar() {
    window.location.href = './login.html'


}