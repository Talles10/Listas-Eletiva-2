<form method="post" action="listaex7">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="num" class="form-label">Digite um numero inteiro</label>
        <input type="number" id="num" name="num" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php if(isset($soma)): ?>
    <p>O resultado da soma é <?php echo e($soma); ?></p>
<?php endif; ?>
<?php /**PATH C:\Users\USER\Documents\GitHub\Lista 2\segundalista\resources\views/lista/ex7.blade.php ENDPATH**/ ?>