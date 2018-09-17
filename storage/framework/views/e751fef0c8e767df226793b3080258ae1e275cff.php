<div class="aSkillItem" style="width:<?php echo e($size); ?>">
    <h1><?php echo e($skillTitle); ?></h1>
    <div>
        <?php $__currentLoopData = $subSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aSkill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="aSubSkill"><?php echo e($aSkill); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>