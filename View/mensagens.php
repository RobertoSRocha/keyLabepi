<script>
    function confirmar() {
        // só permitirá o envio se o usuário responder OK
        alert("Usuário cadastrado com sucesso!");
        location.replace('../View/gerenciarUserAdd.php');	
        //else
            //return false;
    }
    window.onload = function(){
        confirmar();
    }
</script>