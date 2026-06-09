<form method="GET" action="{{ route('reports.index') }}">

    <select name="sort">

        <option value="">Сортировка</option>

        <option value="asc">Сначала старые</option>

        <option value="desc">Сначала новые</option>

    </select>

    <select name="status">

        <option value="">Статус</option>

        @foreach($statuses as $status)

            <option value="{{ $status->id }}">
                {{ $status->name }}
            </option>

        @endforeach

    </select>

    <button type="submit">
        Применить
    </button>

</form>