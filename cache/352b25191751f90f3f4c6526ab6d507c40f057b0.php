<?php $__env->startSection('content'); ?>

    <div >
        <ul class="bg-info" style="list-style-type: none">
            <li class="p-3 m-3">
                Auth Home Page
            </li>
            <li class="p-3 m-3">
                <?php echo e($name); ?>

            </li>
        </ul>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>