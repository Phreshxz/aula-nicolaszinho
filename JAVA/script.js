function somar(){
    let valor_1= Number(document.getElementById('v1').value)
    let valor_2= Number(document.getElementById ('v2').value)

    let soma = valor_1 + valor_2

    document.getElementById ('resultado ').textContent = "resultado " + soma;
}
function sub(){
    let valor_1= Number(document.getElementById('v1').value)
    let valor_2= Number(document.getElementById ('v2').value)

    let sub = valor_1 - valor_2

    document.getElementById ('resultado ').textContent = "resultado " + sub;
}
function div(){
    let valor_1= Number(document.getElementById('v1').value)
    let valor_2= Number(document.getElementById ('v2').value)

    let div = valor_1 / valor_2

    document.getElementById ('resultado ').textContent = "resultado " + div;
}
function mult(){
    let valor_1= Number(document.getElementById('v1').value)
    let valor_2= Number(document.getElementById ('v2').value)
   
    let mult = valor_1 * valor_2

 document.getElementById ('resultado ').textContent = "resultado " + mult;

}