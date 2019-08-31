<?php
class ControladorEmail
{
    // ENVIAR EMAIL
    public static function ctrEnviarEmail()
    {
        
        if (isset($_POST["para"])) {
                if (preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $_POST["para"])) {
                $datos = array(
                    "para" => $_POST["para"],
                    "asunto" => $_POST["asunto"],
                    "mensaje" => $_POST["mensaje"]
                );
                $respuesta = ModeloEmail::MdlEnviar($datos);
                echo $respuesta;
                if ($respuesta == "ok") {
                    echo "<script>
                    Swal.fire({
                        position: 'top',
                        type: 'success',
                        title: '¡Correo enviado!',
                        showConfirmButton: false,
                        timer: 1500
                    });
				 </script>";
            } else {
                echo "<script>
                Swal.fire({
                    position: 'top',
                    type: 'error',
                    title: '¡Correo no enviado!',
                    showConfirmButton: false,
                    timer: 1500
                });
             </script>";
            }
        }else{
            echo "<script>
            Swal.fire({
                position: 'top',
                type: 'error',
                title: '¡Correo invalido verifiquelo!',
                showConfirmButton: false,
                timer: 2500
            });
         </script>";
        }
    }
    }
}