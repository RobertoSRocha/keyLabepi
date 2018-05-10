<script>
    function confirmar() {
        // só permitirá o envio se o usuário responder OK
        alert("Requisição atendida com sucesso!");
        location.replace('../View/gerenciarUserList.php');	
        //else
            //return false;
    }
    window.onload = function(){
        confirmar();
    }
</script>