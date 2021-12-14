<!-- field_type_name -->
@include('crud::fields.inc.wrapper_start')
<label>{!! $field['label'] !!}</label>
<input
    type="hidden"
    id="{{$field["name"]}}"
    name="{{ $field['name'] }}"
    value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
    @include('crud::fields.inc.attributes')
>
<div id="toolbar-container"></div>

<!-- This container will become the editable. -->
<div id="editor" class="border" style="min-height: 50vh">
    {!!  (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) !!}
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/decoupled-document/ckeditor.js"></script>
<script>
    $("#editor").on("DOMSubtreeModified", function () {
        console.log($("#{{$field["name"]}}").val($("#editor").html()))
    });
    DecoupledEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
{{-- HINT --}}
@if (isset($field['hint']))
    <p class="help-block">{!! $field['hint'] !!}</p>
@endif
@include('crud::fields.inc.wrapper_end')

@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    {{-- FIELD EXTRA CSS  --}}
    {{-- push things in the after_styles section --}}
    @push('crud_fields_styles')
        <!-- no styles -->
    @endpush

    {{-- FIELD EXTRA JS --}}
    {{-- push things in the after_scripts section --}}
    @push('crud_fields_scripts')
        <!-- no scripts -->
    @endpush
@endif
