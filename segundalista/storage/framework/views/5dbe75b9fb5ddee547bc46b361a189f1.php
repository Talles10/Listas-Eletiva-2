<form method="post" action="listaex4">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="num" class="form-label">Digite um numero inteiro </label>
        <input type="number" id="num" name="num" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php if(isset($primos)): ?>
    <h3>Números primos entre 1 e <?php echo e($limite); ?>:</h3>
    <p><?php echo e(implode(', ', $primos)); ?></p>
<?php endif; ?>

<?php /**PATH C:\Users\USER\Documents\GitHub\Lista 2\segundalista\resources\views/lista/ex4.blade.php ENDPATH**/ ?>