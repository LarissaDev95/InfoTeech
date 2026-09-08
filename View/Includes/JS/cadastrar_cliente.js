const modal = document.getElementById("modal");

function chamaModal(){
    modal.classList.remove('oculta');
    modal.classList.add('chama');
}


let nome = document.getElementById('nome');

nome.addEventListener('change', function(event){
    event.preventDefault();
    
    
    try{
        const response = await fetch('/infotech/api/action_cadastro_cliente.php');
        const result = await response.json();

        if(result.status == 200){
            chamaModal();
        }else{
            alert("Não chama nada!!!!")
        }
    }
    catch(error){
        alert("errrrooooooo")
    }
});