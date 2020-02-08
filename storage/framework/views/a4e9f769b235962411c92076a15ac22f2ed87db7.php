<li class=" nav-item"><a href="#"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Catálogos</span></a>
    <ul class="menu-content">       
        <li class=""><a href=""><span>Clientes</span></a></li>
    </ul>
</li>
<li class=" nav-item">
    <a href="">
        <i class="ft-credit-card"></i>
        <span class="menu-title" data-i18n="">Menu</span>
    </a>
</li>

<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
    <a href="<?php echo route('users.index'); ?>"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="<?php echo e(Request::is('hallazgos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('hallazgos.index')); ?>"><i class="fa fa-edit"></i><span>Hallazgos</span></a>
</li>

<li class="<?php echo e(Request::is('auditaHallazgos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('auditaHallazgos.index')); ?>"><i class="fa fa-edit"></i><span>Audita Hallazgos</span></a>
</li>

<?php /**PATH /var/www/html/auditoria/resources/views/layouts/menu.blade.php ENDPATH**/ ?>