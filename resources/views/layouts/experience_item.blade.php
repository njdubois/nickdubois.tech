<div class="aExperienceItem">

    <div class="experienceHeader">
        <h1>{{$company}}</h1>
        <h2>{{$companyLocation}}</h2>
    </div>
    <div class="experienceHeader">
        <h3>{{$positionTitle}}</h3>
        <p class="experienceDates">{{ $dateRangeText }}</p>
    </div>


    <p class="experienceDescription">{{ $jobDescription }}</p>

    <p class="experienceLabel">Utilized Skills:</p>
    <ul>
        @foreach($utilizedSkills as $aSkill)
            <li>{{$aSkill}}</li>
        @endforeach
    </ul>

    <p class="experienceLabel">Noted Projects:</p>
    <ul>
        @foreach($notedProjects as $aProject)
            <li>{{$aProject}}</li>
        @endforeach
    </ul>
</div>