<h3>{{ count($contestants) }} Participant(s)</h3>

<form method="POST" action="{{ route('createContestant') }}">
    {{ csrf_field() }}
    <input id="first_name" name="first_name" type="text" class="" placeholder="Prénom">
    <button type="submit">Ajouter</button>
</form>

<table>
    <thead>
        <tr>
            <td>Prénom</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contestants as $contestant)
        <tr>
            <td>{{ $contestant->first_name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
