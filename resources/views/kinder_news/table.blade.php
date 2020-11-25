<div class="table-responsive">
    <table class="table" id="kinderNews-table">
        <thead>
            <tr>
                <th class="text-center">Sarlavhalar</th>
                <th class="text-center">Ma'lumotlar</th>
                <th class="text-center">Rasmlar</th>
                <th colspan="3" class="text-center">O'zgartirish</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kinderNews as $kinderNews)
            <tr>
                <td class="col-md-3 text-center">{{ $kinderNews->title }}</td>
                <td class="col-md-5 text-center">{{ $kinderNews->desrciption }}</td>
                <td class="col-md-3 text-center"><img src="/uploads/news/{{ $kinderNews->images }}" style="width: 100px;" alt=""></td>
                <td class="col-md-1 text-center">
                    {!! Form::open(['route' => ['kinderNews.destroy', $kinderNews->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kinderNews.show', [$kinderNews->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('kinderNews.edit', [$kinderNews->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Ishonchingiz komilmi?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
