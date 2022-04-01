<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    if($usuario =='etecmcm' && $senha == 141){
        header('location: painel/index.html');
        exit();
    }
    else{
        echo '
                <script type="text/javascript">
                    alert("Usuário não encontrado");
                    window.location = "index.html";
                </script>
            ';
    }
?>