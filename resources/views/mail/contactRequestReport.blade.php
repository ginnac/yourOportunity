<div class="row">
    <div class="col">
        <h1>Contact Details for id# {{$report->id}} - {{$report->name}} </h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <h2>
        Contact Attempt Notes:
        </h2>
        <table class="table">
            @foreach($report->contactAttemptNotes as $contactAttemptNote)
                <tr>
                    <td>{{$contactAttemptNote->Notes}}</td>
                    <td>{{$contactAttemptNote->by_user}}</td>
                    <td>{{$contactAttemptNote->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>