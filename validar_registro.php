<?php include_once 'includes/templates/header.php'; ?>
<section class="seccion contenedor">    
        <h2>Resumen Registro</h2>
        <?php if(isset($_POST['submit'])): 
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $regalo = $_POST['regalo'];
            $total = $_POST['total_pedido'];
            $fecha = date['Y-m-d H:i:s'];
            //Pedidos
            $camisas = $_POST['pedido_camisas'];
            $etiqueta = $_POST['pedido_etiquetas'];
            $boletos = $_POST['boletos'];
            include_once 'includes/funciones/funciones.php';
            $pedido = productos_json($boletos, $camisas, $etiquetas);
            //eventos
            $eventos = $_POST['registro'];
            $registro = eventos_json($eventos);
        ?>
        <?php endif; ?>
</section>        
<?php include_once 'includes/templates/footer.php'; ?>