<h1>Создание заявления</h1>

<form action="{{ route('reports.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div>

        <label>Номер автомобиля</label>

        <br>

        <input type="text" name="number">

    </div>

    <br>

    <div>

        <label>Описание</label>

        <br>

        <textarea name="description" rows="5"></textarea>

    </div>

    <br>

    <div>

        <label>Изображение</label>

        <br>

        <input type="file" name="path_img">

    </div>

    <br>

    <button type="submit">
        Создать
    </button>

</form>

<br>

<a href="{{ route('reports.index') }}">
    Назад
</a>