<?php $__env->startComponent($view, $params); ?>
    <?php $__env->slot($slotOrSection); ?>
        <?php echo $manager->initialDehydrate()->toInitialResponse()->effects['html']; ?>

    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\Laravel Projet\Blood_Donation\vendor\livewire\livewire\src/Macros/livewire-view-component.blade.php ENDPATH**/ ?>