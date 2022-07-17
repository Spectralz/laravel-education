@php
    /** @var \App\Models\BlogCategory $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>
@if($item->exists)
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>ID: {{ $item->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Создано</label>
                        <input name="title" value="{{ $item->created_at }}"
                               id="title"
                               type="text"
                               class="form-control"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Изменено</label>
                        <input name="title" value="{{ $item->updated_at }}"
                               id="title"
                               type="text"
                               class="form-control"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Удалено</label>
                        <input name="title" value="{{ $item->deleted_at }}"
                               id="title"
                               type="text"
                               class="form-control"
                               disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
