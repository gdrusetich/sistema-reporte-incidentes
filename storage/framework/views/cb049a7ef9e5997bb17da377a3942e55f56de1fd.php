<h1><?php echo e($titulo); ?></h1>
<form method = "get" action = "alumnos">
<!--    <form method ="get" action = "<?php echo e(route ('alumnos.index')); ?>">   -->
    <label>Nº Socio: </label> <input type = "text" name ="nroSocio"><br>
    <label>Nombre:</label> <input type = "text" name="nombre"><br>
    <label>Apellido: </label> <input type = "text" name ="apellido"><br>
    <label>DNI: </label> <input type = "text" name ="dni"><br>

    <button type = "submit"> Filtrar </button>
</form>
<table>
    <thead>
        <tr>
            <th>Socio:</th>
            <th>Nombre:</th>
            <th>Apellido:</th>
            <th>DNI: </th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $arrayAlumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($alumno->nroSocio); ?></td>
                <td><?php echo e($alumno->nombre); ?></td>
                <td><?php echo e($alumno->apellido); ?></td>
                <td><?php echo e($alumno->dni); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>  
</table>
        

<?php /**PATH C:\xampp\htdocs\full-stack\laravel\sistema_reporte_incidentes\resources\views/alumnos/alumnos.blade.php ENDPATH**/ ?>