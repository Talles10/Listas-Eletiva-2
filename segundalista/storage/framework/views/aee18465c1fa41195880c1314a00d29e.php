<form method="post" action="listaex3">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="valor" class="form-label">Insira o valor do produto a ser vendido</label>
        <input type="number" id="valor" name="valor" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php if(isset($valor)): ?>
    <p>O valor informado é de : <?php echo e($valor); ?></p>
<?php endif; ?>
<?php if(isset($valordesc)): ?>
    <p>O valor com o desconto é de <?php echo e($valordesc); ?> </p>
<?php endif; ?>
<?php /**PATH C:\Users\USER\Documents\GitHub\Lista 2\segundalista\resources\views/lista/ex3.blade.php ENDPATH**/ ?>