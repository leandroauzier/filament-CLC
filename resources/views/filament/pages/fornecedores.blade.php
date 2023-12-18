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
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/priv/comum/PrincipalAreaLicitante.jsp" tag="a">
                ÁREA DO LICITANTE
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/auto-cadastro/#/preusuario?uri=http:%2F%2Fwww.siga.ap.gov.br%2Fefornecedor%2F&produto=efornecedor&facebook=false&tipo=EXTERNO" tag="a">
                CADASTRE-SE AQUI
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/efornecedor/" tag="a">
                ACESSO AO CADASTRO DE FORNECEDORES
            </x-filament::dropdown.list.item>

            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/tabbasicas/FornecedoresPageList.jsp" tag="a">
                CONSULTA DE FORNECEDORES
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item color="warning" icon="heroicon-m-link" target="_blank" href="https://compras.portal.ap.gov.br/index.php?exe=imprimirCRC" tag="a">
                IMPRIMIR CRC
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item color="warning" icon="heroicon-m-link" target="_blank" href="https://compras.portal.ap.gov.br/index.php?exe=documentosNecessarios" tag="a">
                DOCUMENTOS NECESSÁRIOS
            </x-filament::dropdown.list.item>

            <x-filament::dropdown.list.item color="warning" icon="heroicon-m-link" target="_blank" href="https://compras.portal.ap.gov.br/index.php?exe=DOEcomDecreto" tag="a">
                DOE COM DECRETO
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/tabbasicas/FornecedoresSancionadosPageList.jsp?opcao=todos" tag="a">
                FORNECEDORES SANCIONADOS
            </x-filament::dropdown.list.item>
            
            <x-filament::dropdown.list.item icon="heroicon-m-link" target="_blank" href="https://www.youtube.com/channel/UC11bCR6aKJ8gaD-ZfxYzMaw" tag="a">
                VÍDEOS PARA AUXILIAR O LICITANTE
            </x-filament::dropdown.list.item>
        </x-filament::dropdown.list>

    </x-filament::fieldset>
</x-filament-panels::page>
