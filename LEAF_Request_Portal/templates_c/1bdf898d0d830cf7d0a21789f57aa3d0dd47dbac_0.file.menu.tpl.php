<?php
/* Smarty version 3.1.33, created on 2024-12-12 19:27:35
  from '/var/www/html/LEAF_Request_Portal/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675b7f77d95627_65459885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bdf898d0d830cf7d0a21789f57aa3d0dd47dbac' => 
    array (
      0 => '/var/www/html/LEAF_Request_Portal/templates/menu.tpl',
      1 => 1734040697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675b7f77d95627_65459885 (Smarty_Internal_Template $_smarty_tpl) {
?><nav id="headerMenuNav" role="navigation" aria-label="LEAF site main menu">
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['action']->value != '') {?>
        <li>
            <a href="./" class="buttonNorm" title="nav to homepage"><img src="dynicons/?img=go-home.svg&amp;w=16" alt="" />Home</a>
        </li>
        <?php }?>
        <li id="headerMenu_container" style="display: inline-block">
            <button type="button" id="button_showLinks" class="buttonNorm" title="links"
                onclick="toggleMenuPopup(event)" aria-expanded="false" aria-controls="headerMenu_links">
                Links<span aria-hidden="true">▼</span>
            </button>
            <div id="headerMenu_links" class="controlled-element">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['menu_links']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </li>
        <li id="headerMenuHelp_container" style="display: inline-block">
            <button type="button" id="button_showHelp" class="buttonNorm" title="primary admin contact information"
                onclick="toggleMenuPopup(event)" aria-expanded="false" aria-controls="headerMenu_help">
                <img style="vertical-align: sub;" src="dynicons/?img=help-browser.svg&amp;w=16" alt="" />
                Help<span aria-hidden="true">▼</span>
            </button>
            <div id="headerMenu_help" class="controlled-element">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['menu_help']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['is_admin']->value == true) {?>
        <li><a href="./admin/" class="buttonNorm"><img src="dynicons/?img=applications-system.svg&amp;w=16" alt=""/>Admin Panel</a></li>
        <?php }?>
    </ul>
</nav>

<?php echo '<script'; ?>
>
    function hideElement(element = null) {
        if(element !== null && element.style !== undefined) {
            element.style.zIndex = 1;
            element.classList.remove('is-shown');
            let controllerBtn = document.querySelector('button[aria-controls="' + element.id + '"]');
            if(controllerBtn !== null) {
                controllerBtn.setAttribute('aria-expanded', "false");
            }
        }
    }
    function focusout(e) {
        e.stopPropagation();
        const controlledEl = e.currentTarget || null;
        const newTarget = e.relatedTarget || null;
        if (newTarget === null && controlledEl !== null) {
            hideElement(controlledEl);
        } else {
            const eventTarID = e.currentTarget.id || null;
            let controlledEls = Array.from(document.querySelectorAll(".controlled-element"));
            controlledEls.forEach(controlledEl => {
                const newTargetControlledEl = newTarget.closest('#' + controlledEl.id) || null;
                if (newTargetControlledEl === null) {
                    hideElement(controlledEl);
                }
            });
        }
    }
    function toggleMenuPopup(e){
        e.stopPropagation();
        e.preventDefault();
        const controlledID = e.currentTarget.getAttribute('aria-controls') || "";
        let popupEl = document.getElementById(controlledID);
        if (popupEl !== null) {
            let controlledEls = Array.from(document.querySelectorAll(".controlled-element"));
            controlledEls.forEach(el => el.style.zIndex = 1);

            const priorValue = e.currentTarget.getAttribute('aria-expanded') || "false";
            if(priorValue === "true") {
                hideElement(popupEl);
            } else {
                popupEl.classList.add('is-shown');
                popupEl.style.zIndex = 10;
                e.currentTarget.setAttribute('aria-expanded', "true");
            }
        }
    }

    $('#headerMenu_links').on('focusout', focusout);
    $('#headerMenu_help').on('focusout', focusout);
<?php echo '</script'; ?>
>

<noscript><div class="alert"><span>Javascript must be enabled for this version of software to work!</span></div></noscript>
<?php }
}
