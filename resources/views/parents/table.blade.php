<div class="table-responsive">
    <table class="table" id="parents-table">
        <thead>
            <tr>
                <th class="text-center">Rasmlar</th>
                <th class="text-center">Bog'cha haqidagilar</th>
                <th class="text-center">Ism-familiyalar</th>
                <th class="text-center">Ota-onalar</th>
                <th class="text-center" colspan="3">O'zgarishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($parents as $parents)
            <tr>
                <td class="text-center"><img src="/uploads/parents/{{ $parents->images }}" width="100" alt=""></td>
                <td class="text-center">{{ $parents->about_kinder }}</td>
                <td class="text-center">{{ $parents->full_name }}</td>
                <td class="text-center">{{ $parents->parent }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['parents.destroy', $parents->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parents.show', [$parents->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('parents.edit', [$parents->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Ishonchingiz komilmi?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
