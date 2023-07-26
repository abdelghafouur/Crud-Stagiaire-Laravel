<?php $__env->startSection('content'); ?>
    <div class="container p-2">
        <table>
            <table class="table table-bordered mt-3 table-bordered text-center">
                <thead class=" bg-info text-white">
                    <tr>
                        <th>Photo</th>
                        <th>#id</th>
                        <th>Nom</th>
                        <th>prenom</th>
                        <th>genre</th>
                        <th>date_naissance</th>
                        <th>note</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php if(!empty($stagiaire->photo)): ?>
                            <td><img style="height:40px" class="rounded-circle" src='http://127.0.0.1:8000/photoStagiaire/<?php echo e($stagiaire->photo); ?>'>
                            </td>
                        <?php else: ?>
                            <td><img style="height:40px" class="rounded-circle" src=<?php echo e(asset('photoStagiaire/default.png')); ?>></td>
                        <?php endif; ?>
                        <td><?php echo e($stagiaire->id); ?></td>
                        <td><?php echo e($stagiaire->nom); ?></td>
                        <td><?php echo e($stagiaire->prenom); ?></td>
                        <td><?php echo e($stagiaire->genre); ?></td>
                        <td><?php echo e($stagiaire->date_naissance); ?></td>
                        <td><?php echo e($stagiaire->note); ?></td>
                    </tr>
                </tbody>
            </table>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project-Stagiaire\resources\views/Stagiaire/show.blade.php ENDPATH**/ ?>