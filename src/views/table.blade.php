@extends('adminamazing::teamplate')

@section('pageTitle', 'Пополнение баланса')
@section('content')

    <div class="row">
        <!-- Column -->
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title pull-left">@yield('pageTitle')</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Вышестоящий</th>
                                    <th>Сумма</th>
                                    <th>Создание</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($shares))
                                    @foreach($shares as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>
                                                <a href="{{route('AdminUsersEdit', $row->user_id)}}">{{$row->user->email}}</a>
                                            </td>
                                            <td>
                                                @if($row->user->upline)
                                                    <a href="{{route('AdminUsersEdit', $row->user->parent_id)}}">{{$row->user->upline->email}}</a>
                                                @endif
                                            </td>
                                            <td>{{$row->amount}} {{$row->payment_system_relation->currency}} /{{$row->amount_default_currency}} USD</td>
                                            <td>{{$row->created_at}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            @if(isset($shares))
                <nav aria-label="Page navigation example" class="m-t-40">
                    {{ $shares->links('vendor.pagination.bootstrap-4') }}
                </nav>
            @endif
        </div>
        <!-- Column -->    
    </div>
@endsection