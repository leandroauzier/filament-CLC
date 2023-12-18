<x-filament-panels::page class="fi-dashboard-page">
    <x-filament::tabs>
        <x-filament::tabs.item icon="heroicon-m-lock-closed" href="http://www.siga.ap.gov.br/sgc/faces/priv/comum/PrincipalAreaRestrita.jsp" tag="a">
            Sistema de compras
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-book-open" href="http://www.siga.ap.gov.br/efornecedor/" tag="a">
            Cadastro de fornecedores
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-briefcase" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/AssistirPageList.jsp" tag="a">
            Disputas em Andamento
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-bars-3" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/ResultadosPageList.jsp" tag="a">
            Resultados Obtidos
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-briefcase" color="warning" href="https://compras.portal.ap.gov.br/index.php?exe=publicacoes" tag="a">
            Atas Vigentes
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-bars-3" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/ItemCompraPageList.jsp" tag="a">
            Catálogo de materiais e serviços
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-book-open" color="warning" href="https://compras.portal.ap.gov.br/index.php?exe=pagManuais" tag="a">
            Manuais
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-question-mark-circle" color="warning" href="https://compras.portal.ap.gov.br/perguntas.php" tag="a">
            Perguntas frequentes
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-phone" color="warning" href="https://compras.portal.ap.gov.br/index.php?exe=Fale" tag="a">
            Fale com a central
        </x-filament::tabs.item>
    </x-filament::tabs>
    {{--
    <x-filament-widgets::widgets
        :columns="$this->getColumns()"
        :data="$this->getWidgetData()"
        :widgets="$this->getVisibleWidgets()"
    />
    --}}
</x-filament-panels::page>
