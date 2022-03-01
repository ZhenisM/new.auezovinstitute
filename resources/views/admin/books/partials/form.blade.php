<form action="" method="post" enctype="multipart/form-data">
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($book->id))
        <option value="0" @if ($book->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($book->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок книги" value="{{$book->title ?? ""}}" required><br>

<!-- <label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$book->locale ?? ""}}>ru</option>
                 <option value="kk" {{$book->locale ?? ""}}>kk</option>
              </select>
              <br> -->

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 @if (isset($book->id))
                    <option value="ru" @if ($book->locale == 'ru') selected="" @endif>ru</option>
                    <option value="kk" @if ($book->locale == 'kk') selected="" @endif>kk</option>
                    <option value="en" @if ($book->locale == 'en') selected="" @endif>en</option>
                @else
                    <option value="ru">ru</option>
                    <option value="kk">kk</option>
                    <option value="en">en</option>
                @endif
</select>
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$book->slug ?? ""}}" readonly=""><br>

    <label for="">Раздел</label>
{{--    <input type="text" class="form-control" name="book_section" placeholder="" value="{{$book->book_section  ?? ""}}">--}}
    <select name="book_section" class="form-control" required>
        @if (isset($book->book_section))
            <option value="0" @if ($book->book_section == 0) selected="" @endif>Книги</option>
            <option value="1" @if ($book->book_section == 1) selected="" @endif>Золотой фонд</option>
            <option value="2" @if ($book->book_section == 2) selected="" @endif>Антология степного фольклора</option>
            <option value="3" @if ($book->book_section == 3) selected="" @endif>Древние мотивы Великой степи</option>
            <option value="4" @if ($book->book_section == 4) selected="" @endif>Антология древней литературы</option>
        @else
            <option value="0">Книги</option>
            <option value="1">Золотой фонд</option>
            <option value="2">Антология степного фольклора</option>
            <option value="3">Древние мотивы Великой степи</option>
            <option value="4">Антология древней литературы</option>
        @endif
    </select>
    <br/>
    <div class="form-group" style="margin-left: 20px;">
        <label for="">Изображение</label>
        <input data-preview="#preview" name="image" type="file" id="image">
        @if(empty($book->image_show))
            <img style="display: none;" class="col-sm-6" id="preview" src="{{ $book ? asset('uploads/' . $book->image_show) : ""}}">
        @else
            <img style="padding-top: 30px;" class="col-sm-3" id="preview" src="{{ $book ? asset('uploads/' . $book->image_show) : ""}}">
        @endif
    </div>


<label for="">Укажите автора</label>
<textarea class="form-control" id="description_short" name="description_short">{{$book->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$book->description ?? ""}}</textarea>

<hr />

<div class="form-group">
    <label for="">загрузить epub книгу</label>
    <input data-preview="#preview" name="ebook" type="file" id="ebook">{{$book->ebook ?? ""}}
    <img class="col-sm-6" id="preview" src="{{ $book ? asset('uploads/' . $book->ebook_show) : ""}}">
</div>

<div class="form-group">
    <label for="">загрузить аудио книгу</label>
    <input data-preview="#preview" name="audio" type="file" id="audio">{{$book->audio ?? ""}}
    <img class="col-sm-6" id="preview" src="{{ $book ? asset('uploads/' . $book->audio_show) : ""}}">
</div>


<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$book->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$book->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$book->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">
</form>
