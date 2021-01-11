@csrf

<label for="">
    Titilo del proyecto <br>
    <input type="text" name="title" value=" {{ old('title', $project->title) }} ">
</label>
<br>
<label for="">
    Url del proyecto <br>
    <input type="text" name="url" value=" {{ old('url', $project->url) }} ">
</label>
<br>
<label for="">
    Descripcion del proyecto <br>
    <textarea  name="description" >{{ old('description', $project->description) }}</textarea>
</label>
<br>
<button>{{ $btnText }}</button>