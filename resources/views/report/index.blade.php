<h1>Заявления</h1>

<a href="{{ route('reports.create') }}">
    Создать заявление
</a>

<hr>

@foreach($reports as $report)

    <div>

        <h3>{{ $report->number }}</h3>

        <p>{{ $report->description }}</p>

        <p>{{ $report->created_at }}</p>

        <a href="{{ route('reports.edit', $report->id) }}">
            Изменить
        </a>

        <form action="{{ route('reports.destroy', $report->id) }}" method="POST">

            @csrf

            @method('DELETE')

            <button type="submit">
                Удалить
            </button>

        </form>

    </div>

    <hr>

@endforeach