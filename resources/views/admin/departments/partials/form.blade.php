
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($department->id))
        <option value="0" @if ($department->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($department->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок kk</label>
<input type="text" class="form-control" name="title_kk" placeholder="Заголовок отдела" value="{{$department->title_kk ?? ""}}" required><br>

<label for="">Заголовок ru</label>
<input type="text" class="form-control" name="title_ru" placeholder="Заголовок отдела" value="{{$department->title_ru ?? ""}}" required><br>

<label for="">Заголовок en</label>
<input type="text" class="form-control" name="title_en" placeholder="Заголовок отдела" value="{{$department->title_en ?? ""}}" required><br>


<!-- <label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$department->locale ?? ""}}>ru</option>
                 <option value="kk" {{$department->locale ?? ""}}>kk</option>                                                         
              </select>  
              <br> -->

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 @if (isset($department->id))
                    <option value="ru" @if ($department->locale == 'ru') selected="" @endif>ru</option>
                    <option value="kk" @if ($department->locale == 'kk') selected="" @endif>kk</option>
                @else
                    <option value="ru">ru</option>
                    <option value="kk">kk</option>
                @endif                                                    
              </select>  
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$department->slug ?? ""}}" readonly=""><br>


<div class="form-group" style="margin-left: 20px;">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">
    @if(empty($department->image_show))
        <img style="display: none;" class="col-sm-6" id="preview" src="{{ $department ? asset('uploads/' . $department->image_show) : ""}}">
    @else
        <img style="padding-top: 30px;" class="col-sm-3" id="preview" src="{{ $department ? asset('uploads/' . $department->image_show) : ""}}">
    @endif
</div>


<label for="">Краткое описание kk</label>
<textarea class="form-control" id="description_short" name="description_short_kk">{{$department->description_short_kk ?? ""}}</textarea>

<label for="">Краткое описание ru</label>
<textarea class="form-control" id="description_short" name="description_short_ru">{{$department->description_short_ru ?? ""}}</textarea>

<label for="">Краткое описание en</label>
<textarea class="form-control" id="description_short" name="description_short_en">{{$department->description_short_en ?? ""}}</textarea>

<label for="">Полное описание kk</label>
<textarea class="form-control" id="description" name="description_kk">{{$department->description_kk ?? ""}}</textarea>

<label for="">Полное описание ru</label>
<textarea class="form-control" id="description" name="description_ru">{{$department->description_ru ?? ""}}</textarea>

<label for="">Полное описание en</label>
<textarea class="form-control" id="description" name="description_en">{{$department->description_en ?? ""}}</textarea>

<hr />

<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$department->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$department->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$department->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">

