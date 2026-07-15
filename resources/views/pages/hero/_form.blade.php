<div class="row border-bottom mb-3">
    <div class="col-lg-12">
        <x-pages.form-input-text
            label="Title"
            name="title"
            :value="$data->title ?? ''"
            :required=true>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-12">
        <x-pages.form-input-textarea
            label="Description"
            name="description"
            :value="$data->description ?? ''"
            :required=true>
        </x-pages.form-input-textarea>
    </div>
    <div class="col-lg-12">
        <x-pages.form-input-file
            label="Hero Image"
            name="image"
            :value="$data->image_url ?? ''"
            :required=true>
        </x-pages.form-input-file>
    </div>
</div>

<div class="row border-bottom mb-3">
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="First keyword"
            name="keywords_1"
            :value="$data->keywords_1 ?? ''"
            :required=false>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Second keyword"
            name="keywords_2"
            :value="$data->keywords_2 ?? ''"
            :required=false>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Third keyword"
            name="keywords_3"
            :value="$data->keywords_3 ?? ''"
            :required=false>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Fourth keyword"
            name="keywords_4"
            :value="$data->keywords_4 ?? ''"
            :required=false>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Fifth keyword"
            name="keywords_5"
            :value="$data->keywords_5 ?? ''"
            :required=false>
        </x-pages.form-input-text>
    </div>
</div>
