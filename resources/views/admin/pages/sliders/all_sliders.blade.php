@extends('admin.layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>SLIDER</h4>
                            </div>
                        </div>
                    </div>
                    @if ( session('success') )
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4 style-1">
                            <table id="style-1" class="table style-1 table-hover non-hover">
                                <thead>
                                <tr>
                                    <th class="checkbox-column"> no. </th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Discover Link</th>
                                    <th>Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td class="checkbox-column"> {{ $slider->id }} </td>
                                        <td class="user-name">{{ $slider->title }}</td>
                                        <td class="user-name">{{ $slider->sub_title }}</td>
                                        <td class="user-name">{{ $slider->discover_link }}</td>
                                        <td class="text-center">
                                            <span><img src="@if ($slider->image)
                                                {{ $slider->image->url() }}" class="rounded-circle profile-img" width="100" alt="avatar"></span>
                                            @else
                                                {{asset('storage/img/90x90.jpg')}}" class="rounded-circle profile-img" alt="avatar"></span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
{{--                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>--}}
                                                    <a class="dropdown-item" href="{{ route('sliders.modify', ['id' => $slider->id]) }}">Edit</a>
{{--                                                    <a class="dropdown-item" href="javascript:void(0);">View Response</a>--}}
                                                    <form method="POST" action="{{ route('sliders.destroy', ['id' => $slider->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input class="dropdown-item" type="submit" value="Delete" />
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
