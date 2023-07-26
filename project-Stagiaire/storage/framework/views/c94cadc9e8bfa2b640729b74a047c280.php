<?php $__env->startSection('content'); ?>
    <div class="p-3 ">
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success d-flex justify-content-center ">
                <p>
                    <?php echo e(session()->get('success')); ?>

                </p>
            </div>
        <?php endif; ?>
        <table class="table table-bordered table-striped  rounded  text-center">
            <tr class="bg-info text-white ">
                <th>photo </th>
                <th>Id </th>
                <th>nom </th>
                <th>prenom </th>
                <th>genre </th>
                <th>date_naissance </th>
                <th>note </th>
                <th colspan="3">Operations</th>
            </tr>
            <?php $__empty_1 = true; $__currentLoopData = $stagiaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stagiaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <?php if(!empty($stagiaire->photo)): ?>
                        <td><img style="height:40px" class="rounded-circle"
                                src='http://127.0.0.1:8000/photoStagiaire/<?php echo e($stagiaire->photo); ?>'></td>
                    <?php else: ?>
                        <td><img style="height:40px" class="rounded-circle" src=<?php echo e(asset('photoStagiaire/default.png')); ?>>
                        </td>
                    <?php endif; ?>
                    <td><?php echo e($stagiaire->id); ?></td>
                    <td><?php echo e($stagiaire->nom); ?></td>
                    <td><?php echo e($stagiaire->prenom); ?></td>
                    <td><?php echo e($stagiaire->genre); ?></td>
                    <td><?php echo e($stagiaire->date_naissance); ?></td>
                    <td><?php echo e($stagiaire->note); ?></td>
                    <td><a href=<?php echo e(route('stagiaires.show', ['stagiaire' => $stagiaire->id])); ?>>Consulter</a> </td>
                    <td><a href=<?php echo e(route('stagiaires.edit', ['stagiaire' => $stagiaire->id])); ?>>Edit</a></td>
                    <td>
                        <form action=<?php echo e(route('stagiaires.destroy', ['stagiaire' => $stagiaire->id])); ?> method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Confirmez vous la suppression de ce stagiaire ?')"> Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="3">Aucune données trouvée</td>
                </tr>
            <?php endif; ?>
        </table>
        

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project-Stagiaire\resources\views/Stagiaire/index.blade.php ENDPATH**/ ?>