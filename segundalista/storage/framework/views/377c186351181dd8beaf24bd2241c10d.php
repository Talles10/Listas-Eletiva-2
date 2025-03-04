<form method="post" action="listaex10">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="num" class="form-label">Digite um número inteiro</label>
        <input type="number" id="num" name="num" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php if(isset($tabuada)): ?>
    <h3>Tabuada:</h3>
    <ul>
        <?php $__currentLoopData = $tabuada; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($linha); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\Users\USER\Documents\GitHub\Lista 2\segundalista\resources\views/lista/ex10.blade.php ENDPATH**/ ?>