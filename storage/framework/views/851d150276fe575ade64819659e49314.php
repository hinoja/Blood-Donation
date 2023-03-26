<div>
    <form class="nav-item dropdown">
        
        <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <?php if(app()->getLocale() === 'fr'): ?> <?php echo app('translator')->get('Français'); ?> <?php else: ?> <?php echo app('translator')->get('English'); ?> <?php endif; ?>
        </a>
        <div class="dropdown-menu nav-item">
            <button  wire:click="ChangeLang('fr')" class="dropdown-item"><?php echo app('translator')->get('Français'); ?></button>
            <button  wire:click="ChangeLang('en')" class="dropdown-item"><?php echo app('translator')->get('English'); ?></button>
        </div>


        
        
        
    </form>
</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/front/lang/change.blade.php ENDPATH**/ ?>