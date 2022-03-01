@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <hr>
        <a href="{{-- route('admin.books.qr.create') --}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i> Создать QR код</a>
        <div><br></div>
        <table class="table table-striped">
            <thead>
                <th>URL путь</th>
                <th>QR код</th>
                <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($qrs as $qr)
                <tr>
                    <td>{{$qr->url}}</td>
                    <td>{{$qr->img}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{-- {{route('admin.books.qr.destroy',$qr)}} --}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.books.qr.edit', $qr)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" class="btn"><i class="fa fa-fw fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center"><h2>Данные отсутсвуют</h2></td>
                </tr>
            @endforelse
            </tbody>

        </table>

{{--        <tfoot>--}}
{{--        <tr colspan="3">--}}
{{--            <ul class="pagination pull-right">--}}
{{--                {{qr->links()}}--}}
{{--            </ul>--}}
{{--        </tr>--}}
{{--        </tfoot>--}}
    </div>
@endsection






