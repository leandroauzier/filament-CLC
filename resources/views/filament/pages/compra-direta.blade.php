<x-filament-panels::page>
<x-slot name="trigger">
        <x-filament::button>
            More actions
        </x-filament::button>
    </x-slot>

    <x-filament::fieldset>
        <x-slot name="label">
            LINKS EXTERNOS
        </x-slot>

        <x-filament::dropdown.list>
            <x-filament::dropdown.list.item color='danger' icon="heroicon-m-link" target="_blank" href="https://siga.ap.gov.br/sgc/faces/pub/sgc/cdiretas/ComoParticiparPageViewAP.jsp" tag="a">
                COMO PARTICIPAR
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item color='danger' icon="heroicon-m-link" target="_blank" href="https://siga.ap.gov.br/sgc/faces/pub/sgc/cdiretas/PropostaFornecedorCDConsultaPageList.jsp" tag="a">
                COTAÇÕES ABERTAS
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item color='danger' icon="heroicon-m-link" target="_blank" href="https://siga.ap.gov.br/sgc/faces/pub/sgc/cdiretas/ResultadosPageList.jsp" tag="a">
                COTAÇÕES ENCERRADAS
            </x-filament::dropdown.list.item>
        </x-filament::dropdown.list>

    </x-filament::fieldset>
</x-filament-panels::page>
