<?php
    use Jeddsaliba\FilamentMessages\Enums\MediaCollectionType;
?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['selectedConversation']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['selectedConversation']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<!-- Right Section (Chat Box) -->
<div
    style="--col-span-default: span 3 / span 3;"
    class="col-[--col-span-default] bg-white shadow-sm rounded-xl ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10 overflow-hidden flex flex-col">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($selectedConversation): ?>
        <!-- Chat Header : Start -->
        <div class="grid grid-cols-[--cols-default] lg:grid-cols-[--cols-lg] p-6" style="--cols-default: repeat(1, minmax(0, 1fr)); --cols-lg: repeat(1, minmax(0, 1fr));">
            <div style="--col-span-default: 1 / -1;" class="col-[--col-span-default]">
                <div class="flex gap-6 items-center">
                    <?php
                        $avatar = "https://ui-avatars.com/api/?name=" . urlencode($selectedConversation->inbox_title);
                        $alt = urlencode($selectedConversation->inbox_title);
                    ?>
                    <?php if (isset($component)) { $__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.avatar','data' => ['src' => ''.e($avatar).'','alt' => ''.e($alt).'','size' => 'lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e($avatar).'','alt' => ''.e($alt).'','size' => 'lg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb)): ?>
<?php $attributes = $__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb; ?>
<?php unset($__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb)): ?>
<?php $component = $__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb; ?>
<?php unset($__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb); ?>
<?php endif; ?>
                    <div class="overflow-hidden">
                        <p class="text-base font-bold truncate"><?php echo e($selectedConversation->inbox_title); ?></p>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($selectedConversation->title): ?>
                            <p class="text-base truncate"><?php echo e($selectedConversation->other_users->pluck('name')->implode(', ')); ?></p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chat Header : End -->
        <!-- Chat Box : Start -->
        <div wire:poll.visible.<?php echo e($pollInterval); ?>="pollMessages" id="chatContainer" class="flex flex-col-reverse flex-1 p-5 overflow-y-auto border-t">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $conversationMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'flex mb-2 px-2 items-end gap-2',
                        'justify-end' => $message->user_id === auth()->id(),
                        'justify-start' => $message->user_id !== auth()->id()
                    ]); ?>" wire:key="<?php echo e($message->id); ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($message->user_id !== auth()->id()): ?>
                        <?php
                            $avatar = "https://ui-avatars.com/api/?name=" . urlencode($message->sender->name);
                            $alt = urlencode($message->sender->name);
                        ?>
                        <?php if (isset($component)) { $__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.avatar','data' => ['src' => ''.e($avatar).'','alt' => ''.e($alt).'','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e($avatar).'','alt' => ''.e($alt).'','size' => 'sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb)): ?>
<?php $attributes = $__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb; ?>
<?php unset($__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb)): ?>
<?php $component = $__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb; ?>
<?php unset($__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb); ?>
<?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($message->user_id !== auth()->id()): ?>
                            <p class="text-xs mb-2"><?php echo e($message->sender->name); ?></p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <div
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'max-w-md p-2 rounded-xl mb-2',
                                'text-white bg-primary-600 dark:bg-primary-500' => $message->user_id === auth()->id(),
                                'text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-500' => $message->user_id !== auth()->id(),
                            ]); ?>"
                            style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                                'border-bottom-right-radius: 0' => $message->user_id === auth()->id(),
                                'border-bottom-left-radius: 0' => $message->user_id !== auth()->id(),
                            ]) ?>">
                            <div class="px-1">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($message->message): ?>
                                    <p class="text-sm"><?php echo nl2br($message->message); ?></p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($message->getMedia(MediaCollectionType::FILAMENT_MESSAGES->value) && count($message->getMedia(MediaCollectionType::FILAMENT_MESSAGES->value)) > 0): ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $message->getMedia(MediaCollectionType::FILAMENT_MESSAGES->value); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div wire:click="downloadAttachment('<?php echo e($media->getPath()); ?>', '<?php echo e($media->file_name); ?>')"
                                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                'flex items-center gap-2 p-2 my-2 rounded-lg group cursor-pointer',
                                                'bg-gray-200 dark:bg-gray-600' => $message->user_id !== auth()->id(),
                                                'bg-primary-500 dark:bg-primary-400' => $message->user_id === auth()->id()
                                            ]); ?>"
                                            >
                                            <div
                                                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                    'p-2 rounded-full',
                                                    'bg-gray-100 dark:bg-gray-500' => $message->user_id !== auth()->id(),
                                                    'bg-primary-600 group-hover:bg-primary-700 group-hover:dark:bg-primary-900' => $message->user_id === auth()->id()
                                                ]); ?>"
                                            >
                                                <?php
                                                    $icon = 'heroicon-o-x-circle';
                                                    if($this->validateImage($media->getFullUrl())) {
                                                        $icon = 'heroicon-o-photo';
                                                    }

                                                    if ($this->validateDocument($media->getFullUrl())) {
                                                        $icon = 'heroicon-o-paper-clip';
                                                    }

                                                    if ($this->validateVideo($media->getFullUrl())) {
                                                        $icon = 'heroicon-o-video-camera';
                                                    }

                                                    if ($this->validateAudio($media->getFullUrl())) {
                                                        $icon = 'heroicon-o-speaker-wave';
                                                    }
                                                ?>
                                                <?php if (isset($component)) { $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => ''.e($icon).'','class' => 'w-4 h-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => ''.e($icon).'','class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $attributes = $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $component = $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
                                            </div>
                                            <p class="text-sm">
                                                <?php echo e($media->file_name); ?>

                                            </p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                        <p
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'text-xs',
                                'text-end' => $message->user_id === auth()->id(),
                                'text-start' => $message->user_id !== auth()->id()
                            ]); ?>">
                            <?php
                                $createdAt = \Carbon\Carbon::parse($message->created_at)->setTimezone(config('messages.timezone', 'app.timezone'));

                                if ($createdAt->isToday()) {
                                    $date = $createdAt->format('g:i A');
                                } else {
                                    $date = $createdAt->format('M d, Y g:i A');
                                }
                            ?>
                            <?php echo e($date); ?>

                        </p>
                    </div>
                </div>
                <?php
                    $nextMessage = $conversationMessages[$index + 1] ?? null;
                    $nextMessageDate = $nextMessage ? \Carbon\Carbon::parse($nextMessage->created_at)->setTimezone(config('messages.timezone', 'app.timezone'))->format('Y-m-d') : null;
                    $currentMessageDate = \Carbon\Carbon::parse($message->created_at)->setTimezone(config('messages.timezone', 'app.timezone'))->format('Y-m-d');
                    $showDateBadge = $currentMessageDate !== $nextMessageDate;
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($showDateBadge): ?>
                    <div class="flex justify-center my-4">
                        <?php if (isset($component)) { $__componentOriginal986dce9114ddce94a270ab00ce6c273d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal986dce9114ddce94a270ab00ce6c273d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.badge','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e(\Carbon\Carbon::parse($message->created_at)->setTimezone(config('messages.timezone', 'app.timezone'))->format('F j, Y')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal986dce9114ddce94a270ab00ce6c273d)): ?>
<?php $attributes = $__attributesOriginal986dce9114ddce94a270ab00ce6c273d; ?>
<?php unset($__attributesOriginal986dce9114ddce94a270ab00ce6c273d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal986dce9114ddce94a270ab00ce6c273d)): ?>
<?php $component = $__componentOriginal986dce9114ddce94a270ab00ce6c273d; ?>
<?php unset($__componentOriginal986dce9114ddce94a270ab00ce6c273d); ?>
<?php endif; ?>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($this->paginator->hasMorePages()): ?>
                <div x-intersect="$wire.loadMessages">
                    <div class="w-full py-6 text-center text-gray-900"><?php echo e(__('Getting more messages...')); ?></div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
        <!-- Chat Box : End -->
        <!-- Chat Input : Start -->
        <div class="w-full p-4 border-t">
            <form wire:submit="sendMessage" class="flex items-end justify-between w-full gap-4">
                <div class="w-full max-h-96 overflow-y-auto p-1">
                    <?php echo e($this->form); ?>

                </div>
                <div class="p-1">
                    <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['type' => 'submit','icon' => 'heroicon-o-paper-airplane','disabled' => $this->validateMessage()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','icon' => 'heroicon-o-paper-airplane','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->validateMessage())]); ?>Send <?php echo $__env->renderComponent(); ?>
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
            </form>
            <?php if (isset($component)) { $__componentOriginal028e05680f6c5b1e293abd7fbe5f9758 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.modals','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-actions::modals'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758)): ?>
<?php $attributes = $__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758; ?>
<?php unset($__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal028e05680f6c5b1e293abd7fbe5f9758)): ?>
<?php $component = $__componentOriginal028e05680f6c5b1e293abd7fbe5f9758; ?>
<?php unset($__componentOriginal028e05680f6c5b1e293abd7fbe5f9758); ?>
<?php endif; ?>
        </div>
        <!-- Chat Input : End -->
    <?php else: ?>
        <div class="flex flex-col items-center justify-center h-full p-3">
            <div class="p-3 mb-4 bg-gray-100 rounded-full dark:bg-gray-500/20">
                <?php if (isset($component)) { $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => 'heroicon-o-x-mark','class' => 'w-6 h-6 text-gray-500 dark:text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-o-x-mark','class' => 'w-6 h-6 text-gray-500 dark:text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $attributes = $__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__attributesOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950)): ?>
<?php $component = $__componentOriginalbfc641e0710ce04e5fe02876ffc6f950; ?>
<?php unset($__componentOriginalbfc641e0710ce04e5fe02876ffc6f950); ?>
<?php endif; ?>
            </div>
            <p class="text-base text-center text-gray-600 dark:text-gray-400">
                <?php echo e(__('No selected conversation')); ?>

            </p>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
    <?php
        $__scriptKey = '117002612-0';
        ob_start();
    ?>
<script>
    $wire.on('chat-box-scroll-to-bottom', () => {

        chatContainer = document.getElementById('chatContainer');
        chatContainer.scrollTo({
            top: chatContainer.scrollHeight,
            behavior: 'smooth',
        });

        setTimeout(() => {
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }, 400);
    });
</script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?><?php /**PATH D:\Weeding-Organizer-CBIR\AdminPanel_Mobile_Application\resources\views\livewire\messages\messages.blade.php ENDPATH**/ ?>