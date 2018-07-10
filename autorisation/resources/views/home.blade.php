@extends('layouts.app')

@section('content')

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
                    <table border="1">
                        <caption style="caption-side: top;">Таблица пользователей</caption>
                        @foreach ($users as $user)
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <table border="4 double black" class="table">
                        {{ \App\Http\Controllers\SortController::display($user) }}
                    </table>

                    <!--<?php 
                    /*$array = (array) $users;*
                    for ($i = 0; $i < count($array); ++$i) {
                        echo $array[$i];
                    }
                    
                    for($i = 0; $i < count($user); ++$i) {
                        echo "<tr='?id=".$user[$i]['id']."'><td>".$user[$i]['name']."</td><td>".$user[$i]['email']."</td><td>".$user[$i]['created_at']."</td>";
                        echo "</tr>";
                    }*/
                    ?>-->

                @endauth
                <div class="content">
                    <div class="sort-container">
                        <p class="sortir">Сортировка:</p>
                        <button class="sel-btn"><a class="select-sort">{$sort_name}</a></button>
                        
                        <li class="sortlist">
                            <button>
                                <a id="byname" href="home?sort=name-sort">по имени пользователя</a>
                            </button><br>
                            <button width="200">
                                <a id="byemail" href="home?sort=email-sort">по email</a>
                            </button><br>
                            <button>
                                <a id="bystat" href="home?sort=date-sort">по дате регистрации</a>
                            </button>
                        </li>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</div>
@endsection
