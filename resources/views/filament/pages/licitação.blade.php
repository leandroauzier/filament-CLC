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
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/EditalPageList.jsp" tag="a">
                LICITAÇÕES VIGENTES
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www2.compras.ap.gov.br/outros.php" tag="a">
                LICITAÇÕES ENCERRADAS
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/AssistirPageList.jsp" tag="a">
                PREGÕES EM ANDAMENTO
            </x-filament::dropdown.list.item>

            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/FuturosPageList.jsp" tag="a">
                PREGÕES FUTUROS
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item  icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/PregaoResultadosPageList.jsp" tag="a">
                PREGÕES ENCERRADOS
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item  icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/SuspensosPageList.jsp" tag="a">
                PREGÕES SUSPENSOS
            </x-filament::dropdown.list.item>

            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/EditalPageList.jsp" tag="a">
                AVISOS DE LICITAÇÃO
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/ResultadosPageList.jsp" tag="a">
                RESULTADOS DE LICITAÇÃO
            </x-filament::dropdown.list.item>
        </x-filament::dropdown.list>

    </x-filament::fieldset>
</x-filament-panels::page>
