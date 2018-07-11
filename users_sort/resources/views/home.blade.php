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
                </div>
                @auth
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><a href="javascript:ajaxLoad('{{url('users?field=name&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Username</a>
                                    {{request()->session()->get('field')=='name'?(request()->session()->get('sort')=='asc'?'^':'v'):''}}
                                </th>

                                <th style="vertical-align: middle">
                                    <a href="javascript:ajaxLoad('{{url('users?field=email&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                                        Email
                                    </a>
                                    {{request()->session()->get('field')=='email'?(request()->session()->get('sort')=='asc'?'^':'v'):''}}
                                </th>

                                <th style="vertical-align: middle">
                                    <a href="javascript:ajaxLoad('{{url('users?field=created_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                                        Date of registration
                                    </a>
                                    {{request()->session()->get('field')=='created_at'?(request()->session()->get('sort')=='asc'?'^':'v'):''}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td >{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div>