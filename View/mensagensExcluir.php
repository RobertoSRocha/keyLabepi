<script>
    require_once '../Model/user_view.php';
    $id = htmlspecialchars($_GET['id']);
    function confirmar() {
        // só permitirá o envio se o usuário responder OK
        alert("Deseja realmente excluir?");
        location.replace("../Model/user_delete.php");	
        //else
            //return false;
    }
    window.onload = function(){
        confirmar();
    }
</script>