<div
  wire:ignore
  x-data
  x-init="() => {
    let pond = FilePond.create($refs.input, {
      acceptedFileTypes: ['image/*'],
      imageValidateSizeMinWidth: 96,
      imageValidateSizeMaxWidth: 1080,
      imageValidateSizeMinHeight: 96,
      imageValidateSizeMaxHeight: 1080,
      maxFileSize: '500KB',
    });
    pond.setOptions({
      server: {
        process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
          @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
        },
        revert: (filename, load) => {
          @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
        },
      },
    });
    this.addEventListener('reset-filepond', e => {
      pond.removeFiles({revert: true});
    });
  }"
>
  <input type="file" x-ref="input" />
</div>
@once
@push('styles')
<link rel="stylesheet" href="/assets/cms/filepond.min.css">
<script src="/assets/cms/filepond-plugin-file-validate-type.js"></script>
<script src="/assets/cms/filepond-plugin-file-validate-size.js"></script>
<script src="/assets/cms/filepond-plugin-image-validate-size.js"></script>
<script src="/assets/cms/filepond.min.js"></script>
<script>
  FilePond.registerPlugin(FilePondPluginImageValidateSize);
  FilePond.registerPlugin(FilePondPluginFileValidateType);
  FilePond.registerPlugin(FilePondPluginFileValidateSize);
</script>
@endpush
@endonce