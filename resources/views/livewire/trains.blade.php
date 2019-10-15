<div>
    <div class="uk-alert uk-alert-danger" wire:offline>Offline</div>
    <table class="uk-table uk-table-small uk-table-divider" wire:poll.5s wire:transition.fade>
        <caption class="uk-text-center uk-margin-bottom">
            Current time: {{ now() }}
        </caption>
        <thead>
        <tr>
            <th>Status</th>
            <th>Due</th>
            <th>Expected</th>
            <th>P</th>
            <th>Destination</th>
            <th>Service</th>
            <th>Operator</th>
        </tr>
        </thead>
        <tbody>
        @foreach($departures as $departure)
            <tr class="@if ($departure['aimed_departure_time'] !== $departure['expected_departure_time']) tt-background-danger @endif">
                <td>{{ $departure['status'] }}</td>
                <td>{{ $departure['aimed_departure_time'] }}</td>
                <td>{{ $departure['expected_departure_time'] }}</td>
                <td>{{ $departure['platform'] }}</td>
                <td>{{ $departure['destination_name'] }}</td>
                <td class="uk-text-small">
                    From {{ $departure['origin_name'] }}
                </td>
                <td class="operator-{{ $departure['operator'] }}">
                    {{ $departure['operator_name'] }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>