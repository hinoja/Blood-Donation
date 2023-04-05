<div>
    <form wire:submit.prevent="store()">
        <?php echo csrf_field(); ?>
        <div class="input-group-column">
            <div class="input">
                <input type="text" wire:model.defender="name" name="name" id="contactFName"
                    placeholder=<?php echo e(__('Name')); ?> class="input">

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger text-center text"> <small><?php echo e($message); ?></small></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <br>

            <div class="input">
                <input type="email" wire:model.defender="email" name="email" id="contactMail"
                    placeholder="<?php echo e(__('Email')); ?>" class="input">

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger text-center text"><small><?php echo e($message); ?></small></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

        </div>

        <div class="input-group-column">

            <div class="input">
                <input type="text" wire:model.defender="subject" name="subject" id="contactSubject"
                    placeholder="<?php echo e(__('Subject')); ?>" class="input">

                <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger text-center text"><small><?php echo e($message); ?></small></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <br>
        <div class="input">
            <textarea wire:model.defender="message" name="message" id="contactMessage" cols="30" rows="10"
                class="input textarea" placeholder="<?php echo e(__('Message')); ?>"></textarea>

            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger text-center text"><small><?php echo e($message); ?></small></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <br>
        

        
        <button type="submit" class="button button--effect"><?php echo app('translator')->get('Submit Request'); ?><i
                class="fa-solid fa-arrow-right-long"></i></button>

        

        

        
    </form>
</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/front/contact/contact-manage.blade.php ENDPATH**/ ?>