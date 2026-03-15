<?php
    use Filament\Support\Facades\FilamentView;
    use Filament\Support\Facades\FilamentAsset;

    $pdfPreviewHeight = $getPdfPreviewHeight();
    $pdfScrollbar = 0;
    $pdfDisplayPage = 0;
    $pdfToolbar = false;
    $pdfNavePanes = false;
    $pdfZoomLevel = 100;
    $pdfView = '';
    $statePath = $getStatePath();
?>

<div>
    <div
        x-data="advancedFileUpload({
        pdfPreviewHeight: <?php echo \Illuminate\Support\Js::from($pdfPreviewHeight)->toHtml() ?>,
        pdfScrollbar: <?php echo \Illuminate\Support\Js::from($pdfScrollbar)->toHtml() ?>,
        pdfDisplayPage: <?php echo \Illuminate\Support\Js::from($pdfDisplayPage)->toHtml() ?>,
        pdfToolbar: <?php echo \Illuminate\Support\Js::from($pdfToolbar)->toHtml() ?>,
        pdfNavPanes: <?php echo \Illuminate\Support\Js::from($pdfNavePanes)->toHtml() ?>,
        pdfZoom: <?php echo \Illuminate\Support\Js::from($pdfZoomLevel)->toHtml() ?>,
        pdfView: <?php echo \Illuminate\Support\Js::from($pdfView)->toHtml() ?>,
        allowPdfPreview: <?php echo \Illuminate\Support\Js::from($isPreviewable())->toHtml() ?>,
    })"
        <?php if(FilamentView::hasSpaMode()): ?>
            x-load="visible || event (ax-modal-opened)"
        <?php else: ?>
            x-load
        <?php endif; ?>
        x-load-src="<?php echo e(FilamentAsset::getAlpineComponentSrc('filepond-pdf', 'asmit/filament-upload')); ?>"
        x-load-css="[<?php echo \Illuminate\Support\Js::from(FilamentAsset::getStyleHref(id: 'filepond-pdf', package: 'asmit/filament-upload'))->toHtml() ?>]"
    >
        <?php echo $__env->make('filament-forms::components.file-upload', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>
<?php /**PATH D:\Weeding-Organizer-CBIR\AdminPanel_Mobile_Application\vendor\asmit\filament-upload\resources\views\forms\components\advanced-file-upload.blade.php ENDPATH**/ ?>