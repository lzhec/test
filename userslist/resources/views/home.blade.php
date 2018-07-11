<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                @auth
                    <table border="1">
                        <caption style="caption-side: top;">Таблица пользователей</caption>
                        <thead>
                            <tr>
                                <th><a href="javascript:ajaxLoad('{{url('posts?field=name&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Username</a>
                                    {{request()->session()->get('field')=='name'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                                </th>
                                <th><a href="javascript:ajaxLoad('{{url('posts?field=email&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Email</a>
                                    {{request()->session()->get('field')=='email'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                                </th>
                                <th><a href="javascript:ajaxLoad('{{url('posts?field=created_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Date of registration</a>
                                    {{request()->session()->get('field')=='created_at'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                                </th>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>        
                    </table>

                    <div class="loading">
                        <i class="fa fa-refresh fa-spin fa-2x fa-tw"></i>
                        <br>
                        <span>Loading</span>
                    </div>
                @endauth

                </div>
            </div>
        </div>
    </div>
</div>

