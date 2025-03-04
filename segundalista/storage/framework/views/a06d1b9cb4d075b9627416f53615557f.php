
<form method="post" action="listaex1">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="nota1" class="form-label">Digite o primeiro valor</label>
        <input type="number" id="n1" name="n1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota2" class="form-label">Digite o segundo valor</label>
        <input type="number" id="n2" name="n2" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    <?php if(isset($total)): ?>
    <p> O total é <?php echo e($total); ?></p>
    <?php endif; ?>
    <?php if(isset($soma)): ?>
    <p> O total é <?php echo e($soma); ?></p>
    <?php endif; ?>
<?php /**PATH C:\Users\USER\Documents\GitHub\Lista 2\segundalista\resources\views/lista/ex1.blade.php ENDPATH**/ ?>