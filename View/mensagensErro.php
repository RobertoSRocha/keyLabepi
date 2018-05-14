<script>
    function confirmar() {
        // só permitirá o envio se o usuário responder OK
        alert("Erro!");
        location.replace('../View/gerenciarUser.php');	
        //else
            //return false;
    }
    window.onload = function(){
        confirmar();
    }
</script>