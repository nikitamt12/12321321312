@include('layouts.flash-messages')
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
        @if($report->path_img)

    <img
        src="{{ asset('storage/'.$report->path_img) }}"
        width="200"
    >

@endif

        <p>{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('d.m.Y H:i') }}</p>

        <p>

            Статус:

            <x-status :status="$report->status_id" />

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