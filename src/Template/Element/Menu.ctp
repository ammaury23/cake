<nav class="top-bar expanded" data-topbar role="navigation">
<ul class="title-area large-3 medium-2 columns">
            <li class="name">
            <h1><a href=""><?= $this->Html->link(__('Inicio'), ['action' => '../']) ?></a></h1>
            </li>
        </ul>
        <ul class="title-area large-1 medium-2 columns">
            <li class="name">
                <h1><a href=""><?= $this->Html->link(__('Empleados'), ['action' => '../employees']) ?></a></h1>
            </li>
        </ul>
        <ul class="title-area large-1 medium-2 columns">
            <li class="name">
                <h1><a href=""><?= $this->Html->link(__('Puestos'), ['action' => '../titles']) ?></a></h1>
            </li>
        </ul>
        <ul class="title-area large-1 medium-2 columns">
            <li class="name">
                <h1><a href=""><?= $this->Html->link(__('Salarios'), ['action' => '../salaries']) ?></a></h1>
            </li>
        </ul>
        <ul class="title-area large-1 medium-2 columns">
            <li class="name">
            <h1><a href=""><?= $this->Html->link(__('Departamentos'), ['action' => '../departments']) ?></a></h1>
            </li>
        </ul>
        <ul class="title-area large-2 medium-2 columns">
            <li class="name">
            <h1><a href=""><?= $this->Html->link(__('Jefes de departamentos'), ['action' => '../DeptManager']) ?></a></h1>
            </li>
        </ul>
        <ul class="title-area large-3 medium-2 columns">
            <li class="name">
            <h1><a href=""><?= $this->Html->link(__('Empleados por departamento'), ['action' => '../DeptEmp']) ?></a></h1>
            </li>
        </ul>
    </nav>