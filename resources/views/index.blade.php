@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        var defaultEvents =  [
            @foreach ($rendez_vous as $rdv)
                {
                    title: '{{ $rdv->dossierPatient->patient->nomComplet() }}: {{ $rdv->dossierPatient->patient->telephone_patient }}',
                    start: Date.parse('{{ Carbon\Carbon::parse($rdv->date_rendez_vous)->addHours(8) }}'),
                    end: Date.parse('{{ Carbon\Carbon::parse($rdv->date_rendez_vous)->addHours(18) }}'),
                    className: 'bg-dark text-white',
                },
            @endforeach

        ];
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'fr',
                initialEvents: defaultEvents
            });
            calendar.render();
        });
    </script>

@endsection
