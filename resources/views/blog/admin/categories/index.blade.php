@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{ route('blog.admin.categories.create') }}">Добавить</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Категория</th>
                                <th>Родитель</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $item)
                                @php /** @var \App\Models\BlogCategory $item */ @endphp
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href="{{ route('blog.admin.categories.edit' , $item->id) }}">
                                        {{ $item->title }}
                                        </a>
                                    </td>
                                    <td
                                        @if(in_array($item->parent_id, [0, 1])) style="color:pink" @endif>
                                        {{ $item->parent_id }} {{-- $item->parentCategory->title --}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if($paginator->total() > $paginator->count())
            </br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
                                <div class="flex justify-between flex-1 sm:hidden">
                                    @if ($paginator->onFirstPage())
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                                            {!! __('pagination.previous') !!}
                                        </span>
                                    @else
                                        <a href="{{ $paginator->previousPageUrl() }}"
                                           class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                            {!! __('pagination.previous') !!}
                                        </a>
                                    @endif

                                    @if ($paginator->hasMorePages())
                                        <a href="{{ $paginator->nextPageUrl() }}"
                                           class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                            {!! __('pagination.next') !!}
                                        </a>
                                    @else
                                        <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">

                                        </span>
                                    @endif
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
        @endif
    </div>
@endsection
