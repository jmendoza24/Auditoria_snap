<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
    <a class="dropdown-toggle nav-link" href="<?php echo route('users.index'); ?>" ><i class="fa fa-home"></i>
      <span>Home</span>
    </a>
  </li>
<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>" >
    <a class="dropdown-toggle nav-link" href="<?php echo route('users.index'); ?>" ><i class="fa fa-user"></i>
      <span>Users</span>
    </a>
  </li>
<li class="dropdown nav-item" data-menu="dropdown">
    <a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="ft-layout"></i>
      <span>Catálogos</span>
    </a>
    <ul class="dropdown-menu">
      <li class="<?php echo e(Request::is('empresas*') ? 'active' : ''); ?>" data-menu=""><a class="dropdown-item" href="<?php echo e(route('empresas.index')); ?>" data-toggle="dropdown">Empresas
            <submenu class="name"></submenu></a>
      </li>
      <li class="<?php echo e(Request::is('documentos*') ? 'active' : ''); ?>" data-menu=""><a class="dropdown-item" href="<?php echo e(route('documentos.index')); ?>" data-toggle="dropdown">Documentos
            <submenu class="name"></submenu></a>
      </li>
      <li class="<?php echo e(Request::is('localidads*') ? 'active' : ''); ?>" data-menu=""><a class="dropdown-item" href="<?php echo e(route('localidads.index')); ?>" data-toggle="dropdown">Localidad
            <submenu class="name"></submenu></a>
      </li>
    </ul>
  </li>
  <li class="<?php echo e(Request::is('hallazgos*') ? 'active' : ''); ?>" >
    <a class="dropdown-toggle nav-link" href="<?php echo e(route('hallazgos.index')); ?>" ><i class="fa fa-edit"></i>
      <span>Hallazgos</span>
    </a>
  </li>
  



<?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/layouts/menu.blade.php ENDPATH**/ ?>