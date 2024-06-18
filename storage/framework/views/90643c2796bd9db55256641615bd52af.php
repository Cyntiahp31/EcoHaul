

<?php $__env->startSection('title', 'Success, Yay!'); ?>

<?php $__env->startSection('content'); ?>

<div class="py-5 text-center" style="margin-bottom: 300px">
    <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
    <h2 style="font-weight: bolder;">Transaction Success!</h2>
    <p style="padding-top: 10px; margin-top: 15px"> 
        Want to cancel your transaction?
    </p> 
    <a class="btn btn-lg btn-block" href="<?php echo e(route('transaction.history')); ?>" style="margin-top: 25px; background-color: red; margin-right:12px; width: 120px">Cancel</a>
    <a class="btn btn-lg btn-block" href="<?php echo e(route('home')); ?>" style="margin-top: 25px; background-color:#EDDD5E; width: 120px">Continue</a>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/success.blade.php ENDPATH**/ ?>