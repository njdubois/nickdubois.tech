<div class="aExperienceItem">

    <div class="experienceHeader">
        <h1><?php echo e($company); ?></h1>
        <h2><?php echo e($companyLocation); ?></h2>
    </div>
    <div class="experienceHeader">
        <h3><?php echo e($positionTitle); ?></h3>
        <p class="experienceDates"><?php echo e($dateRangeText); ?></p>
    </div>


    <p class="experienceDescription"><?php echo e($jobDescription); ?></p>

    <p class="experienceLabel">Utilized Skills:</p>
    <ul>
        <?php $__currentLoopData = $utilizedSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aSkill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($aSkill); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <p class="experienceLabel">Noted Projects:</p>
    <ul>
        <?php $__currentLoopData = $notedProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aProject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($aProject); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>