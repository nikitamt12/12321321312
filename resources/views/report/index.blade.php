<h1>Заявления</h1>

<a href="{{ route('reports.create') }}">
    Создать заявление
</a>

<hr>

<h3>Сортировка</h3>

<a href="/reports?sort=asc">
    Сначала старые
</a>

<a href="/reports?sort=desc">
    Сначала новые
</a>

<hr>

<h3>Фильтрация</h3>

@foreach($statuses as $status)

    <a href="/reports?status={{ $status->id }}">
        {{ $status->name }}
    </a>

@endforeach

<hr>

@foreach($reports as $report)

    <div>

        <h3>{{ $report->number }}</h3>

        <p>{{ $report->description }}</p>

        <p>{{ $report->created_at }}</p>

        <p>

            Статус:

            {{ $report->status->name ?? 'Нет статуса' }}

        </p>

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

{{ $reports->links() }}