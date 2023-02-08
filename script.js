function salvar(){
  if (document.getElementById("nome").value!=""&&
     document.getElementById("sobrenome").value!=""&&
     document.getElementById("email").value!=""&&
     document.getElementById("matricula").value!=""&&
     document.getElementById("usuario").value!=""&&
     document.getElementById("senha").value!=""&&
     document.getElementById("confirmarsenha").value!=""){
    
    if(document.getElementById("senha").value == 
      document.getElementById("confirmarsenha").value){
      
      var objForm=document.getElementById("formCadastro");
      var dados=new FormData(objForm);

      fetch("salvar.php", {
        method: "POST",
        body:dados
      });
      }
     }
}