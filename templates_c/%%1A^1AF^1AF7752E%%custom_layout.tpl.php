<?php ob_start(); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'custom_templates/custom_menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php echo $this->_tpl_vars['NavbarContent']; ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('NavbarContent', ob_get_contents());ob_end_clean(); ?>

<?php ob_start(); ?>
    <?php echo $this->_tpl_vars['ContentBlock']; ?>

    <?php echo $this->_tpl_vars['pageDemoVideoLink']; ?>

    <?php echo $this->_tpl_vars['runDemoTour']; ?>

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
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ContentBlock', ob_get_contents());ob_end_clean(); ?>

<?php ob_start(); ?><?php echo $this->_tpl_vars['ContentBlockClass']; ?>
 col-md-12 <?php echo $this->_tpl_vars['pageContentBlockClass']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ContentBlockClass', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/layout.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>