<div class="paginator">
    <ul class="pagination">
    <?= $this->Paginator->first('<< '.__('Primero'))?>
    <?= $this->Paginator->prev('< '.__('Anterior'))?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next(__('Siguiente').' >')?>
    <?= $this->Paginator->last(__('Ultimo').' >>')?>
    </ul>
    <p> <?= $this->Paginator->counter(['format' =>__('Pagina {{page}} de {{pages}}, mostrado {{current}} registro(s) de un total de {{count}}')]) ?> </p>
</div>