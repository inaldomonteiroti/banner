<div class="row" style="display: flex;flex-wrap: nowrap; overflow-x: scroll;">
    <div class="col-md-12">
        <div class="card-box">
            <h3 class="card-title">Lista de Banners</h3>
            <p class="card-text">
                Listagem de todos os Banners cadastrados no site.
            </p>

            {{-- @can('banner.edit')
                <a href="{{ route('banners.create') }}" class="btn btn-dark">
                    <span class="fa fa-plus"></span> ADICIONAR BANNER
                </a>
            @endcan --}}

            <table class="table m-t-20">
                <thead>
                    <tr>
                        <th>Prévia</th>
                        <th>Título</th>
                        <th>Posição</th>
                        <th>Exibir</th>
                        <th nowrap>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ Croppa::url('/storage/' . $banner->image, 160, 75) }}" alt="{{ $banner->title }}">
                        </td>
                        <td>
                            {{-- {{ $banner->title }} --}}
                        </td>
                        <th>
                            {{-- {{ $banner->sort_order }} --}}
                        </th>
                        <td>
                            {{-- @if ($banner->isActive())
                                <span class="label label-success">Sim</span>
                            @else
                                <span class="label label-danger">Não</span>
                            @endif --}}
                        </td>
                        <td nowrap>
                            <div class="btn-group">
                                {{-- @can('banner.edit')
                                    <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-sm waves-effect btn-primary" data-toggle="tooltip" data-placement="top" title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                @endcan
                                @can('banner.destroy')
                                    <button data-toggle="tooltip" data-placement="top" title="Excluir" class="btn btn-sm waves-effect btn-danger"
                                            onclick="event.preventDefault(); document.getElementById('delete-banner-{{ $banner->id }}-form').submit();">
                                        <i class="fa fa-times"></i>
                                    </button>
                                @endcan --}}
                            </div>
                        </td>
                    </tr>

                    {{-- <form id="delete-banner-{{ $banner->id }}-form" action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
