var testresults
  function checkemail()
  {                  
  var str=document.email2.email.value
  var filter=/^.+@.+..{2,3}$/
  if (filter.test(str))
  testresults=true
  
var str2=document.email2.nome.value
  if (str2 == "")
  {
  alert("Por favor, introduz o teu nome.")
  email2.nome.focus();
  return (false)  
  } 

var str2=document.email2.mensagem.value
  if (str2 == "")
  {
  alert("Por favor, escreve alguma mensagem.")
  email2.mensagem.focus();
  return (false)  
} 
}