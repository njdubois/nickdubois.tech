<div class="aSkillItem" style="width:{{$size}}">
    <h1>{{$skillTitle}}</h1>
    <div>
        @foreach($subSkills as $aSkill)
            <div class="aSubSkill">{{$aSkill}}</div>
        @endforeach
    </div>
</div>