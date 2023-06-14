@extends('admin.Dashboard.Dashboard')

@section('admincontent')
<!-- Main content -->
<div class="dashboard_txt1">
    <h1>Dashboard</h1>
</div>
<?php $legal = DB::table('legal')->where('id', 1)->first(); ?>
<div class="dashboard_txt2">
    <form method="post" action="{{ url('/LegalEdited') }}">
        @csrf
        @method('patch')
        <div class="field" style="display: none;">
            <label class="label">Title</label>
            <div class="control">
                <input type="text" name="title" value="legal-clauses" class="input" placeholder="Title" required />
            </div>
        </div>
        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea rows="100%" style="width: 100% !important" name="legal" class="textarea" placeholder="Content">{{ $legal->legal }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link is-outlined">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection