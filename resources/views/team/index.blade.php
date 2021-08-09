@section('content')
    <div class="container">
        <div class="row">
            <h2>チーム一覧</h2>
        </div>
    </div>
    
     <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">チーム名</th>
                                <th width="50%">本拠地</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <th>{{ $team->id }}</th>
                                    <td>{{ $team->team_name }}</td>
                                    <td>{{ $team->place }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>