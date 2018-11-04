{capture assign=NavbarContent}
    {include file='custom_templates/custom_menu.tpl'}
    {$NavbarContent}
{/capture}

{capture assign=ContentBlock}
    {$ContentBlock}
    {$pageDemoVideoLink}
    {$runDemoTour}
    <div class="modal fade" id="demo-about" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Repositorio Quasar</h4>
            </div>
            <div class="modal-body">
                <p>Addon Quasar é um  plugin muito poderoso para o kodi, um dos melhores para visualização de Filmes em torrente, ou P2. É um add-on de torrent streaming, isto é, ele vai buscar as séries ou os filmes aos torrents de diferentes sites de torrents, logo por aí, cuidado com as politicas de alguns países. Quasar promete garantir uma visão estável e clara de canais no Kodi . Os amantes de streaming devem saber.</p>
                <p></p>
				
				
            </div>
            <div class="modal-footer">
                <a href="https://quasar.surge.sh" class="btn btn-primary" target="_blank">Download Addon Quasar Kodi</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
{/capture}

{capture assign=ContentBlockClass}{$ContentBlockClass} col-md-12 {$pageContentBlockClass}{/capture}

{include file='common/layout.tpl'}