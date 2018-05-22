<script>
    function confirmar() {
        // só permitirá o envio se o usuário responder OK
        alert("Erro ao logar!");
        location.replace('../View/login.php');	
        //else
            //return false;
    }
    window.onload = function(){
        confirmar();
    }
</script>