<?php 
    include 'funciones/funciones.php';
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $id_registro = $_POST['id_registro'];

    if($_POST['registro'] == 'nuevo') {           
            $opciones = array('cost'=>12);
            $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
            try {
                $stmt = $conn->prepare("INSERT INTO admins (usuario, nombre, password) VALUES(?, ?, ?)");
                $stmt->bind_param("sss", $usuario, $nombre, $password_hashed);
                $stmt->execute();
                $id_registro = $stmt->insert_id;
                if($stmt->affected_rows) {
                    $respuesta = array(
                        'respuesta' => 'exito',
                        'id_admin' => $stmt
                    );
                    
                }else {
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
                $stmt->close();
                $conn->close();            
            } catch(Exception $e) {
                echo "Error: " . $e->getMessage();
            }
            die(json_encode($respuesta));
        }
    if($_POST['registro'] == 'actualizar') {
        $opciones = array(
            'cost' => 12
        );
        try {
            $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
            $stmt = $conn->prepare('UPDATE admins SET usuario = ?, nombre = ?, password = ? WHERE id_admin = ? ');
            $stmt->bind_param("sssi", $usuario, $nombre, $hash_password, $id_registro);
            $stmt->execute();
            if($stmt->affected_rows){
                $respuesta = array(
                    'respuesta' => 'exito',
                    'id_actualizado' => $stmt->insert_id
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            $respuesta = array(
                'respuesta' => $e->getMessage()
            );
        }
        die (json_encode($respuesta));   
    }    
    if(isset($_POST['login-admin'])) {
       $usuario = $_POST['usuario'];
       $password = $_POST['password'];
       try {
           include 'funciones/funciones.php';
           $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario =?;");
           $stmt->bind_param("s", $usuario);
           $stmt->execute();
           $stmt->bind_results($id, $usuario, $nombre_admin, $password_admin);
           if($stmt->affected_rows) {
               $existe = $stmt->fetch();
               if($existe) {
                   if(password_verify($password, $password_admin)) {
                    session_start();
                    $_SESSION['usuario'] = $usuario_admin;
                    $_SESSION['nombre'] = $nombre_admin;
                    $respuesta = array(
                           'respuesta' => 'exitoso',
                           'usuario' => $usuario
                       );
                   } else {
                       $respuesta = array(
                           'respuesta' => 'password_incorrecto'
                       );
                   }
               } else {
                   $respuesta = array(
                       'respuesta' => 'no_existe'
                   );
               }
           }
           $stmt->close();
           $stmt->close();
       } catch (Exception $e) {
           echo "Error: ".$e->getMessage();
       }
       die(json_encode($respuesta));
    }   
?>