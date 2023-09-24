@extends('layouts.base')

@section('title')
    Register
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Register to <strong>UniLinkLearners</strong>
                    </div>
                    <div class="card-body">
                        <form action="add-user" method="post">
                            {{ csrf_field() }}
                            <div class="mb-6">
                                <label for="register-username" class="form-label">Username <label class="star">*</label></label>
                                <input type="text" class="form-control" id="register-username" name="username" required>
                            </div>
                            <div class="mb-6 field">
                                <label for="email" class="form-label">Email <label class="star">*</label></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-6 field">
                                <label for="type" class="form-label">Type <label class="star">*</label></label><br>
                                <select id="type" name="type" class="custom-select">
                                    <option value="student">Student</option>
                                    <option value="inp">Industry Partner</option>
                                </select>
                            </div><br>
                            <button type="submit" class="btn btn-primary">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection