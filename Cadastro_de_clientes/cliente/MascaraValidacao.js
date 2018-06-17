function MascaraTelefone(telefone){  
        if(mascaraInteiro(telefone)==false){
                event.returnValue = false;
        }       
        return formataCampo(telefone, '(00) 0000-0000', event);
}

//adiciona mascara ao CPF
function MascaraCPF(cpf){
        if(mascaraInteiro(cpf)==false){
                event.returnValue = false;
        }       
        return formataCampo(cpf, '00000000', event);
}


//valida o CPF digitado
function ValidarCPF(){
                if(valida_cpf(document.getElementById('cpf').value));
                else
                    alert('CPF Inválido');
            }
            
            function valida_cpf(cpf){
                  var numeros, digitos, soma, i, resultado, digitos_iguais;
                  digitos_iguais = 1;
                  if (cpf.length < 11)
                        return false;
                  for (i = 0; i < cpf.length - 1; i++)
                        if (cpf.charAt(i) != cpf.charAt(i + 1))
                              {
                              digitos_iguais = 0;
                              break;
                              }
                  if (!digitos_iguais)
                        {
                        numeros = cpf.substring(0,9);
                        digitos = cpf.substring(9);
                        soma = 0;
                        for (i = 10; i > 1; i--)
                              soma += numeros.charAt(10 - i) * i;
                        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                        if (resultado != digitos.charAt(0))
                              return false;
                        numeros = cpf.substring(0,10);
                        soma = 0;
                        for (i = 11; i > 1; i--)
                              soma += numeros.charAt(11 - i) * i;
                        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                        if (resultado != digitos.charAt(1))
                              return false;
                        return true;
                        }
                  else
                        return false;
            }

//valida numero inteiro com mascara
function mascaraInteiro(){
        if (event.keyCode < 48 || event.keyCode > 57){
                event.returnValue = false;
                return false;
        }
        return true;
}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 

        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 

        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 

        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
}