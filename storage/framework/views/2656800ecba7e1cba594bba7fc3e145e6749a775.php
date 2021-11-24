<h1><?php echo e($titulo); ?></h1>
<form method= "post" action="<?php echo e(route('alumnos.store')); ?>">
    <?php echo csrf_field(); ?>
    <label> Socio: </label> <input type="text" name="nroSocio"><br>
    <label> Nombre: </label> <input type="text" name="nombre"><br>
    <label> Apellido: </label> <input type="text" name="apellido"><br>
    <label> DNI: </label> <input type="text" name="dni"><br>
    <button type="submit"> Agregar </button>
</form><?php /**PATH C:\xampp\htdocs\full-stack\laravel\sistema_reporte_incidentes\resources\views/alumnos/crear_alumno.blade.php ENDPATH**/ ?>