
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>
<br>
<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$article->title ?? ""}}" required><br>

<!-- label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$article->locale ?? ""}}>ru</option>
                 <option value="kk" {{ $article->locale ?? ""}}>kk</option>                                                         
              </select>   -->

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 @if (isset($article->id))
                    <option value="ru" @if ($article->locale == 'ru') selected="" @endif>ru</option>
                    <option value="kk" @if ($article->locale == 'kk') selected="" @endif>kk</option>
                @else
                    <option value="ru">ru</option>
                    <option value="kk">kk</option>
                @endif                                                    
              </select>  
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug ?? ""}}" readonly=""><br>



<div class="form-group" style="margin-left: 20px;">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">
    @if(empty($article->image_show))
        <img style="display: none;" class="col-sm-6" id="preview" src="{{ $article ? asset('uploads/' . $article->image_show) : ""}}">
    @else
        <img style="padding-top: 30px;" class="col-sm-3" id="preview" src="{{ $article ? asset('uploads/' . $article->image_show) : ""}}">
    @endif
</div>




<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$article->description ?? ""}}</textarea>

<hr />

<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$article->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">

