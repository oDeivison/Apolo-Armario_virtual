<?php
    include 'includes/banco.php';

        //testa se ouve conexão com o Post

        if ($_SERVER['REQUEST_METHOD']== 'POST') {
            
            $id = $_POST['id_outfit'];
            
        }

        //prepared statement para evitar SQL injection.

        if (!empty($id)) {

            $stmt = $banco -> prepare("DELETE FROM outfit WHERE id_outfit = ?");
            $stmt -> bind_param("i",$id);

            if ($stmt->execute()) {
                echo "<script>
                        
                        window.location.href = 'closet.php'; // redireciona para a lista
                    </script>";
            } else {
                echo "<script>
                        alert('Erro ao excluir usuário!');
                        window.location.href = 'closet.php';
                    </script>";
            }

            $stmt -> close();

        }else{

            echo "<script>
                alert('ID inválido!');
                window.location.href = 'closet.php';
              </script>";

        }

?>