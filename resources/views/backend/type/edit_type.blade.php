@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">

        <div class="row">

            <div class="row profile-body">

                <div class="col-md-12 col-xl-12 middle-wrapper">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title">Edit Property Type</h6>

                                <form method="POST" action="{{ route('update.type') }}" class="forms-sample">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$type->id}}">
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Type Name</label>
                                        <input type="text" name="type_name"
                                            class="form-control @error('type_name') is-invalid @enderror)" value="{{$type->type_name}}">
                                        @error('type_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Type Icon</label>
                                        <input type="text" name="type_icon"
                                            class="form-control @error('type_icon') is-invalid @enderror)" value="{{$type->type_icon}}">
                                        @error('type_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary me-2">Save</button>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
