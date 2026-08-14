<?php
    function imagens($arq) {
        $caminho = "img/$arq";

        if (is_null($arq) || !file_exists($caminho)) {
            return "Img/indisponivel.png";
        } else {
            return $caminho;
        }
    }

        function msg_sucesso($m) {
        $resp = "<div class='sucesso'><span class='material-icons'>check_circle</span>$m</div>";
        return $resp;
    }

    function msg_erro($m) {
        $resp = "<div class='erro'><span class='material-icons'>error</span>$m</div>";
        return $resp;
    }
?>