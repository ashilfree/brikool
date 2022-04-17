@extends('admin.layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>VIDEO</h4>
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
                                    <th>Video Link</th>
                                    <th>Learn More Link</th>
                                    <th>Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox-column"> {{ $video->id }} </td>
                                        <td class="user-name">{{ $video->title }}</td>
                                        <td class="user-name">{{ $video->video_link }}</td>
                                        <td class="user-name">{{ $video->learn_more_link }}</td>
                                        <td class="text-center">
                                            <span><img src="@if ($video->image)
                                                {{ $video->image->url() }}" class="rounded-circle profile-img" width="100" alt="avatar"></span>
                                            @else
                                                {{ asset('storage/img/90x90.jpg') }}" class="rounded-circle profile-img" alt="avatar"></span>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
