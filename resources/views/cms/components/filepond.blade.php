<input id="filepond" class="filepond" type="file" name="image">
@once
@push('styles')
<link rel="stylesheet" href="/assets/cms/filepond.min.css">
@endpush
@push('scripts')
<script src="/assets/cms/filepond-plugin-file-validate-type.js"></script>
<script src="/assets/cms/filepond-plugin-file-validate-size.js"></script>
<script src="/assets/cms/filepond-plugin-image-validate-size.js"></script>
<script src="/assets/cms/filepond.min.js"></script>
<script>
  FilePond.registerPlugin(FilePondPluginImageValidateSize);
  FilePond.registerPlugin(FilePondPluginFileValidateType);
  FilePond.registerPlugin(FilePondPluginFileValidateSize);

  let pond = FilePond.create(document.querySelector('#filepond'), {
    acceptedFileTypes: ['image/*'],
    imageValidateSizeMinWidth: 96,
    imageValidateSizeMaxWidth: 2048,
    imageValidateSizeMinHeight: 96,
    imageValidateSizeMaxHeight: 2048,
    maxFileSize: '1MB',
  });
  pond.setOptions({
    server: {
      url: '/upload',
      timeout: 7000,
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    },
  });
</script>
@endpush
@endonce