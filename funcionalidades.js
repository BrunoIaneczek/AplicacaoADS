
//Função que calcula IMC
function calculaImc() {
    let peso = document.getElementById('peso').value
    let altura = document.getElementById('altura').value
    let pesoNumber = Number(peso)
    let alturaNumber = Number(altura)
    let imc = pesoNumber/(alturaNumber**2).toFixed(2)
    
    if(imc >=0 && imc < 18.49){
        document.getElementById('resultado').innerHTML ='Seu IMC é ' +imc.toFixed(2)+ ' e se encontra na faixa entre 0 e 18.5, você está abaixo do peso!'
    
    }else if(imc >= 18.5 && imc < 24.9){
        document.getElementById('resultado').innerHTML ='Seu IMC é ' +imc.toFixed(2)+ ' e se encontra na faixa entre 18.5 e 24.9, seu peso está normal.'
    }else if(imc >= 25 && imc < 29.9){
        document.getElementById('resultado').innerHTML ='Seu IMC é ' +imc.toFixed(2)+ ' e se encontra na faixa entre 25 e 29.9, você está acima do peso!'
    }else if(imc >= 30 && imc < 34.9){
        document.getElementById('resultado').innerHTML ='Seu IMC é ' +imc.toFixed(2)+ ' e se encontra na faixa entre 30 e 34.9, lamento você está obeso.'
    }else if(imc >= 35 && imc < 39.9){
        document.getElementById('resultado').innerHTML ='Seu IMC é ' +imc.toFixed(2)+ ' e se encontra na faixa entre 35 e 39.9, você tem obesidade severa antes de se cadastrar se dirija ao um médico.'
    }else{
        document.getElementById('resultado').innerHTML ='Seu IMC é ' +imc.toFixed(2)+ ' e se encontra acima de 40, você tem obesidade mórbida antes de se cadastrar se dirija ao um médico.'
    }
    
}

//Funcionalidade do botão para calculo IMC
let btn = document.getElementById('imcbotao')
let divImc = document.querySelector('.imc')
btn.addEventListener('click',function(){
    divImc.style.display ='block'
    }
)

