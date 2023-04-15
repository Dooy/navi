<div class="sidebar-menu toggle-others fixed">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="/" class="logo-expanded">
                    <img src="<?php echo e(asset('img/logo@2x.png')); ?>" width="100%" alt="" />
                </a>
                <a href="/" class="logo-collapsed">
                    <img src="<?php echo e(asset('img/logo-collapsed@2x.png')); ?>" width="40" alt="" />
                </a>
            </div>
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="linecons-cog"></i>
                </a>
                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php if(count($categorie->children) == 0 && $categorie->parent_id == 0): ?>
                        <a href="#<?php echo e($categorie->title); ?>" class="smooth">
                            <i class="fa fa-fw <?php echo e($categorie->icon); ?>"></i>
                            <span class="title"><?php echo e($categorie->title); ?></span>
                        </a>
                    <?php elseif(count($categorie->children) != 0 && $categorie->parent_id == 0): ?>
                        <a>
                            <i class="fa fa-fw <?php echo e($categorie->icon); ?>"></i>
                            <span class="title"><?php echo e($categorie->title); ?></span>
                        </a>
                        <ul>
                            <?php $__currentLoopData = $categorie->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="#<?php echo e($child->title); ?>" class="smooth">
                                        <span class="title"><?php echo e($child->title); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="submit-tag">
                <a href="/about">
                    <i class="linecons-heart"></i>
                    <span class="tooltip-blue">关于本站</span>
                    <span class="label label-Primary pull-right hidden-collapsed">♥︎</span>
                </a>
            </div>
        </ul>
    </div>
</div>