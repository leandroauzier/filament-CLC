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
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://siga.ap.gov.br/sgc/faces/priv/comum/PrincipalAreaRestrita.jsp" tag="a">
                COMPRAS
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sigaalmox" tag="a">
                ALMOXARIFADO
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sigapatrimonio" tag="a">
                PATRIMÔNIO
            </x-filament::dropdown.list.item>

            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://siga.ap.gov.br/sigatr" tag="a">
                SOLICITAÇÃO DE COMPRAS
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/efornecedor/" tag="a">
                E-FORNECEDOR
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/catalogo/" tag="a">
                CATÁLOGO DE MATERIAIS
            </x-filament::dropdown.list.item>
        </x-filament::dropdown.list>

    </x-filament::fieldset>
</x-filament-panels::page>
