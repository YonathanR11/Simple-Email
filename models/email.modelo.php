
<?php
class ModeloEmail
{
    // ENVIAR EMAIL
    static public function MdlEnviar($datos)
    {
        if (mail($datos["para"], $datos["asunto"], $datos["mensaje"])) {
            return "ok";
        }else{
            return "error";
        }
    }

}
// assets
//     js
//     css
//     libs
//     images

// app
    // controllers
    // modules
    // service