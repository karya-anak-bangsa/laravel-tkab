<div class="row border-bottom mb-3">
    <div class="col-lg-12">
        <x-pages.form-input-text
            label="Title"
            name="title"
            :value="$hero->title ?? ''"
            :required=true>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-12">
        <x-pages.form-input-textarea
            label="Description"
            name="description"
            :value="$hero->description ?? ''"
            :required=true>
        </x-pages.form-input-textarea>
    </div>
    <div class="col-lg-12">
        <x-pages.form-input-file
            label="Hero Image"
            name="image"
            :value="$hero->image_url ?? ''"
            :required=false>
        </x-pages.form-input-file>
    </div>
</div>

<div class="row border-bottom mb-3">
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="First keyword"
            name="keyword_1"
            :value="$hero->keyword_1 ?? ''"
            :required=true>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Second keyword"
            name="keyword_2"
            :value="$hero->keyword_2 ?? ''"
            :required=true>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Third keyword"
            name="keyword_3"
            :value="$hero->keyword_3 ?? ''"
            :required=true>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Fourth keyword"
            name="keyword_4"
            :value="$hero->keyword_4 ?? ''"
            :required=false>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Fifth keyword"
            name="keyword_5"
            :value="$hero->keyword_5 ?? ''"
            :required=false>
        </x-pages.form-input-text>
    </div>
</div>

<div class="row border-bottom mb-3">
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Call to Action"
            name="cta_1"
            :value="$hero->cta_1 ?? ''"
            :required=true>
        </x-pages.form-input-text>
    </div>
    <div class="col-lg-4">
        <x-pages.form-input-text
            label="Call to Action"
            name="cta_2"
            :value="$hero->cta_2 ?? ''"
            :required=true>
        </x-pages.form-input-text>
    </div>
</div>
