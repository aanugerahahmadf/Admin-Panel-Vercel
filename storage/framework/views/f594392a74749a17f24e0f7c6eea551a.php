<div>
    <?php if (isset($component)) { $__componentOriginalee08b1367eba38734199cf7829b1d1e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee08b1367eba38734199cf7829b1d1e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section.index','data' => ['aside' => true,'icon' => 'heroicon-o-language','heading' => __('Bahasa Aplikasi'),'description' => __('Pilih bahasa yang ingin Anda gunakan di aplikasi ini.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aside' => true,'icon' => 'heroicon-o-language','heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Bahasa Aplikasi')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Pilih bahasa yang ingin Anda gunakan di aplikasi ini.'))]); ?>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = config('filament-language-switcher.locals'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button
                    wire:click="changeLanguage('<?php echo e($key); ?>')"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'flex items-center gap-3 p-3 rounded-xl border transition-all duration-200',
                        'bg-primary-50 border-primary-200 ring-1 ring-primary-500' => $selectedLocale === $key,
                        'bg-white dark:bg-gray-900 border-gray-200 dark:border-gray-700 hover:border-primary-300' => $selectedLocale !== $key,
                    ]); ?>"
                >
                    <div
                        class="w-8 h-6 rounded shadow-sm bg-cover bg-center"
                        style="background-image: url('https://cdn.jsdelivr.net/gh/hampusborgos/country-flags@main/svg/<?php echo e($language['flag']); ?>.svg')"
                    ></div>
                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'text-sm font-medium',
                        'text-primary-700 dark:text-primary-400' => $selectedLocale === $key,
                        'text-gray-700 dark:text-gray-300' => $selectedLocale !== $key,
                    ]); ?>">
                        <?php echo e(__($language['label'])); ?>

                    </span>
                </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $attributes = $__attributesOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $component = $__componentOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__componentOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalee08b1367eba38734199cf7829b1d1e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee08b1367eba38734199cf7829b1d1e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section.index','data' => ['aside' => true,'class' => 'mt-6','icon' => 'heroicon-o-device-phone-mobile','heading' => __('Pengaturan Sistem'),'description' => __('Buka pengaturan aplikasi untuk memberikan izin (kamera, lokasi, dll) jika sebelumnya ditolak.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aside' => true,'class' => 'mt-6','icon' => 'heroicon-o-device-phone-mobile','heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Pengaturan Sistem')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Buka pengaturan aplikasi untuk memberikan izin (kamera, lokasi, dll) jika sebelumnya ditolak.'))]); ?>
        <div class="flex items-center justify-end gap-x-3">
             <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['wire:click' => 'openSettings','color' => 'primary','icon' => 'heroicon-o-cog-6-tooth','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'openSettings','color' => 'primary','icon' => 'heroicon-o-cog-6-tooth','size' => 'sm']); ?>
                <?php echo e(__('Buka Pengaturan HP')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $attributes = $__attributesOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $component = $__componentOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__componentOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
</div><?php /**PATH D:\Weeding-Organizer-CBIR\AdminPanel_Mobile_Application\resources\views\livewire\mobile-settings-component.blade.php ENDPATH**/ ?>