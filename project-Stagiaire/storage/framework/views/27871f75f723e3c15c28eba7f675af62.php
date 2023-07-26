<?php $__env->startSection('content'); ?>
    <div class="p-3 ">
        <h5 class="text-center">Page Stagiaires </h5>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <div class="row">

            <div class="col-6">
                <form method="POST" action=<?php echo e(route('stagiaires.update', ['stagiaire' => $stagiaire->id])); ?>

                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="form-group">
                        <label for="nom">Nom du Stagiaire : </label>
                        <input type="text" name="nom" class="form-control" value=<?php echo e($stagiaire->nom); ?> id="nom"
                            aria-describedby="nomHelp" placeholder="Enter nom">
                    </div>
                    <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="prenom">Prenom du Stagiaire : </label>
                        <input type="text" name="prenom" value=<?php echo e($stagiaire->prenom); ?> class="form-control"
                            id="prenom" aria-describedby="prenomHelp" placeholder="Enter prenom">
                    </div>
                    <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label>Genre du Stagiaire : </label> <br />
                        <div class="pl-5">
                            F : <input type="radio" name="genre" <?php if($stagiaire->genre === 'F'): ?> checked <?php endif; ?>
                                value="F" id="genreF" aria-describedby="genreHelp" placeholder="Enter genre">
                            M : <input type="radio" name="genre" value="M" id="genreM"
                                aria-describedby="genreHelp" placeholder="Enter genre"
                                <?php if($stagiaire->genre === 'M'): ?> checked <?php endif; ?>>
                        </div>
                    </div>
                    <?php $__errorArgs = ['genre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="dateNaissance">date Naissance</label>
                        <input type="date" value=<?php echo e($stagiaire->date_naissance); ?> name="date_naissance"
                            class="form-control" id="dateNaissance" aria-describedby="dateHelp">
                    </div>
                    <?php $__errorArgs = ['date_naissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="note">Note : </label>
                        <input type="text" name="note" value=<?php echo e($stagiaire->note); ?> class="form-control"
                            id="note" aria-describedby="noteHelp" placeholder="Enter note">
                    </div>
                    <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="photo">Photo : </label><br />
                        <input type="file" id="photo" name="photo">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project-Stagiaire\resources\views/Stagiaire/edit.blade.php ENDPATH**/ ?>