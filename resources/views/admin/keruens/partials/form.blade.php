
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($keruen->id))
        <option value="0" @if ($keruen->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($keruen->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>
<br>
<label for="">Заголовок kk</label>
<input type="text" class="form-control" name="title_kk" placeholder="Заголовок" value="{{$keruen->title_kk ?? ""}}" required><br>

<label for="">Заголовок ru</label>
<input type="text" class="form-control" name="title_ru" placeholder="Заголовок" value="{{$keruen->title_ru ?? ""}}" required><br>

<label for="">Заголовок en</label>
<input type="text" class="form-control" name="title_en" placeholder="Заголовок" value="{{$keruen->title_en ?? ""}}" required><br>

<!-- label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$keruen->locale ?? ""}}>ru</option>
                 <option value="kk" {{ $keruen->locale ?? ""}}>kk</option>
              </select>   -->

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 @if (isset($keruen->id))
                    <option value="ru" @if ($keruen->locale == 'ru') selected="" @endif>ru</option>
                    <option value="kk" @if ($keruen->locale == 'kk') selected="" @endif>kk</option>
                @else
                    <option value="ru">ru</option>
                    <option value="kk">kk</option>
                @endif                                                    
              </select>  
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$keruen->slug ?? ""}}" readonly=""><br>


<div class="form-group" style="margin-left: 20px;">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">
    @if(empty($keruen->image_show))
    @else
        <img style="padding-top: 30px;" class="col-sm-3" id="preview" src="{{ $keruen ? asset('uploads/' . $keruen->image_show) : ""}}">
    @endif
</div>



<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$keruen->description_short ?? ""}}</textarea>

<label for="">Полное описание kk</label>
<textarea class="form-control" id="description" name="description_kk">{{$keruen->description_kk ?? ""}}</textarea>

<label for="">Полное описание ru</label>
<textarea class="form-control" id="description" name="description_ru">{{$keruen->description_ru ?? ""}}</textarea>

<label for="">Полное описание en</label>
<textarea class="form-control" id="description" name="description_en">{{$keruen->description_en ?? ""}}</textarea>

<hr />

<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$keruen->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$keruen->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$keruen->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">
