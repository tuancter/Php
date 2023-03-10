@extends('backend.index')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('backend.dashboard') }}">{{ __('admin.control_panel') }}</a>
        </li>
        <li class="breadcrumb-item">System message</li>
        <li class="breadcrumb-item active">{{ $message }}</li>

    </ol>
    <div class="row">
        <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $message }}</h6>
                    </div>
                    <div class="card-body">
                        <form role="form" method="post" action="">
                            @csrf
                            <p class="text-center">{!! $subMessage !!}</p>
                            <div class="form-group select2-artwork">
                                <select class="form-control select-ajax" data-ajax--url="{{ route('api.search.user') }}" name="user_id">

                                </select>
                            </div>
                            <div class="d-flex justify-content-center">
                                @foreach($ids as $id)
                                    <input name="ids[]" type="hidden" value="{{ $id }}">
                                @endforeach
                                <input name="action" type="hidden" value="save_{{ $action }}">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>


        </div>
    </div>
@endsection
