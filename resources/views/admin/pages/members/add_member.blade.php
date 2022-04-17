@extends('admin.layouts.app')

@section('content')

            <div class="row">
                <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4> ADD PROFILE </h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="needs-validation @if($errors->any()) was-validated @endif" novalidate action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('admin.pages.members._form')
                                <button class="btn btn-primary mt-2" type="submit">Save</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

@endsection
