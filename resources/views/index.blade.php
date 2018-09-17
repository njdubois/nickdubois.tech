@extends("layouts.master")

@section("content")

    <div class="aPageContent" style="text-align:center;">
        @include("contact_info")
    </div>

    <div class="aPageContent" style="text-align:center;">
        @foreach($skills as $aSkill)
            @include("layouts.skill_item", $aSkill)
        @endforeach
    </div>

    <div class="aPageContent">
        @foreach($jobs as $aJob)
            @include("layouts.experience_item", $aJob)
        @endforeach
    </div>
@endsection
