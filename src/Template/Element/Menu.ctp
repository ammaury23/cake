<nav class="top-bar expanded" data-topbar role="navigation">
    <ul class="title-area large-3    medium-2 columns">
            <li class="name">
            <h1><?= $this->Html->link(__('Inicio'), ['action' => '../']) ?></h1>
            </li>
    </ul>

        <ul class="title-area large-1 medium-2 columns">
            <li class="name">
                <h1><?= $this->Html->link(__('Empleados'), ['action' => '../employees']) ?></h1>
            </li>
        </ul>

        <ul class="title-area large-1 medium-2 columns">
            <li class="name">
                <h1><?= $this->Html->link(__('Puestos'), ['action' => '../titles']) ?></h1>
            </li>
        </ul>

        <ul class="title-area large-1 medium-2 columns">
            <li class="name">
                <h1><?= $this->Html->link(__('Salarios'), ['action' => '../salaries']) ?></h1>
            </li>
        </ul>

        <ul class="title-area large-1 medium-2 columns">
            <li class="name">
            <h1><?= $this->Html->link(__('Departamentos'), ['action' => '../departments']) ?></h1>
            </li>
        </ul>

        <ul class="title-area large-2 medium-2 columns">
            <li class="name">
            <h1><?= $this->Html->link(__('Jefes de departamentos'), ['action' => '../DeptManager']) ?></h1>
            </li>
        </ul>

        <ul class="title-area large-2 medium-2 columns">
            <li class="name">
            <h1><?= $this->Html->link(__('Empleados por departamento'), ['action' => '../DeptEmp']) ?></h1>
            </li>
        </ul>

        <ul class="title-area large-1 medium-2 right ">
            <li class="name logout">
            <h1><?= $this->Html->link(__('Cerrar Sesión'), ['action' => '../employees/logout']) ?></h1>
            </li>
        </ul>
        
    </nav>