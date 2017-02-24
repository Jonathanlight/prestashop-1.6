<?php

/* __string_template__7e59a3b887278e7ab586698215958639be2396f540871c4b31317c40dde5e8a9 */
class __TwigTemplate_09adbfff36c8f78d1af16f2cc1afdba03bee7be200541a317e237c6f4ca2457e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop-1.6/prestashop_1.7/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop-1.6/prestashop_1.7/img/app_icon.png\" />

<title>ShopLights</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.0.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'b145ad04459a807332125769015c8141';
    var token_admin_orders = '761d56abc930e3c85c79a2a04b1c6072';
    var token_admin_customers = 'fdebc40d9d2e2c6d97621e7885fa1f60';
    var token_admin_customer_threads = '8a3a83b5f903d6b46a6e4e9af14dfb9e';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = '3113af11c3659f06b7479f48d5a1555b';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/module/catalog/recommended?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop-1.6/prestashop_1.7/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop-1.6\\/prestashop_1.7\\/admin5464g7wt9\\/\";
var baseDir = \"\\/prestashop-1.6\\/prestashop_1.7\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop-1.6/prestashop_1.7/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop-1.6/prestashop_1.7/js/admin.js?v=1.7.0.5\"></script>
<script type=\"text/javascript\" src=\"/prestashop-1.6/prestashop_1.7/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop-1.6/prestashop_1.7/js/tools.js?v=1.7.0.5\"></script>
<script type=\"text/javascript\" src=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop-1.6/prestashop_1.7/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 69
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminDashboard&amp;token=6fa6bc905b1fee4f1249e0ea17b6277d\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminOrders&amp;token=761d56abc930e3c85c79a2a04b1c6072\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5fc8a6e03091bc49058dd48394215f00\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/product/new?token=6979ea748ce333d34379b7b43bbc8ea8\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCategories&amp;addcategory&amp;token=52cf590fbfe5278f637972e6e1ab524e\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"115\"
      data-icon=\"icon-AdminParentModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/module/manage?-m3gqsBQlqKDA\"
      data-post-link=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminQuickAccesses&token=3c3130b92e534e25efe4ef72fa81b5e7\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\" - Liste\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Ajouter cette page à l'Accès Rapide
    </a>
    <a class=\"dropdown-item\" href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminQuickAccesses&token=3c3130b92e534e25efe4ef72fa81b5e7\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminSearch&amp;token=1d956642bdc9724094ff55a135fbaf46\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/jonathan.kablan%40gmail.com.jpg\" /><br>
      Jonathan Kablan
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminEmployees&amp;token=3113af11c3659f06b7479f48d5a1555b&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminLogin&amp;token=2f87aea0968fa09770217d1abf2a4312&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-md-right\"><div class=\"notification-center dropdown\">
  <div class=\"notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous regardé vos <strong><a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCarts&token=2b5aca9474e2ec462b16925c6c5e58ec&action=filterOnlyAbandonedCarts\">paniers abandonnés</a></strong> ?<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - inscrit <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/prestashop-1.6/prestashop_1.7/\" target= \"_blank\">ShopLights</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminDashboard&amp;token=6fa6bc905b1fee4f1249e0ea17b6277d\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de Bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminOrders&amp;token=761d56abc930e3c85c79a2a04b1c6072\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Commandes</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminOrders&amp;token=761d56abc930e3c85c79a2a04b1c6072\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminInvoices&amp;token=440e1b7de75ef9e2a284eefb365ddebb\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminSlip&amp;token=f4e63672b2dea36198ac298bcf036337\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminDeliverySlip&amp;token=aa55cacace4d10becd5c98b4bfb179de\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCarts&amp;token=2b5aca9474e2ec462b16925c6c5e58ec\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/product/catalog?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Catalogue</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/product/catalog?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCategories&amp;token=52cf590fbfe5278f637972e6e1ab524e\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminTracking&amp;token=066dbe3808a0be83a3e1e0141063377c\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminAttributesGroups&amp;token=f65035dc4c004eaa22f2288f862e06be\" class=\"link\"> Attributs &amp; Caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminManufacturers&amp;token=3c42731aee6746f9be81e1e0e1184878\" class=\"link\"> Marques &amp; Fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminAttachments&amp;token=e6ad6fdbb1d5345aa5e4484ad4f60fce\" class=\"link\"> Documents joints
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCartRules&amp;token=5fc8a6e03091bc49058dd48394215f00\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCustomers&amp;token=fdebc40d9d2e2c6d97621e7885fa1f60\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Clients</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCustomers&amp;token=fdebc40d9d2e2c6d97621e7885fa1f60\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminAddresses&amp;token=59238629b401e8c7ac87567d9f3f971e\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCustomerThreads&amp;token=8a3a83b5f903d6b46a6e4e9af14dfb9e\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Service client</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCustomerThreads&amp;token=8a3a83b5f903d6b46a6e4e9af14dfb9e\" class=\"link\"> Service client
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminOrderMessage&amp;token=1bf78221c67196ee9cfc0d959caf96f6\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminReturn&amp;token=6c3b3b6ccdbfd687e42a65feb1914bad\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminStats&amp;token=b2e42add445d3c74d691866b16753847\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Statistiques</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"41\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"42\">
                  <a href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/module/catalog?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/module/catalog?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminAddonsCatalog&amp;token=7bd9aefca72a74186887351c724f3fe9\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminThemes&amp;token=c56e756e547b55a483374a231c416bd6\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Apparence</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminThemes&amp;token=c56e756e547b55a483374a231c416bd6\" class=\"link\"> Thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminThemesCatalog&amp;token=84c720d39c777b1f872fb645f9d9e227\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCmsContent&amp;token=5cee59f085c8167808583548b9999707\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminModulesPositions&amp;token=a73207baf217795a25a42f8db8c1ff57\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminImages&amp;token=3b3fb2ca199986f5b14de62c14af39f6\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminLinkWidget&amp;token=421c1a83660f43a8f2af1c922a647787\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCarriers&amp;token=416d27e1bebe664a25f9ad3d2220b6da\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Transport</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCarriers&amp;token=416d27e1bebe664a25f9ad3d2220b6da\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminShipping&amp;token=d5d01a8d8ee8985e21bd39c88bcb31d0\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminPayment&amp;token=c4cfb8f0f82063e29e9bf4f541c39eab\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Paiement</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminPayment&amp;token=c4cfb8f0f82063e29e9bf4f541c39eab\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminPaymentPreferences&amp;token=744e4f07afc768e829a6ec2753c4c8a3\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminLocalization&amp;token=b3fa7f69a2476d63755e7ccdc3070390\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminLocalization&amp;token=b3fa7f69a2476d63755e7ccdc3070390\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCountries&amp;token=d71ede603a3545d2ad918dd094c43c7e\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminTaxes&amp;token=6d10b23cf92c65ab4cf09997e0ea33cd\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminTranslations&amp;token=6f31408a31a0d4e3128b8ae9d2e48ff2\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminPreferences&amp;token=27d59185af241545ba581130dd7c84ca\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Paramètres de la boutique</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminPreferences&amp;token=27d59185af241545ba581130dd7c84ca\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminOrderPreferences&amp;token=1e214e657e117888199e57eafa892142\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminPPreferences&amp;token=c4003d1f71f335500af75fd0c18074f0\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminCustomerPreferences&amp;token=0f3aa0b18dc35bd48f469db93e0f86a2\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminContacts&amp;token=6261ba8e003aa203ed9a1faa9cdfcf03\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminMeta&amp;token=418e10b344f6fc579b052f2e3e2e3a99\" class=\"link\"> Trafic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminSearchConf&amp;token=03b66d3193d6c197b70a100ab5668ce4\" class=\"link\"> Recherche
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminInformation&amp;token=cdd76d9e9056ba4f8fa82407323c07f9\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Paramètres avancés</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminInformation&amp;token=cdd76d9e9056ba4f8fa82407323c07f9\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminPerformance&amp;token=fd72f923c4651849f4f9fee0929735cd\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminAdminPreferences&amp;token=a049360ebd9bf86cce03b6e123cfbfb8\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminEmails&amp;token=9f569db5d85c69d002bc98583299721f\" class=\"link\"> Emails
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminImport&amp;token=67b938d45fffb403886d8b1726beaace\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminEmployees&amp;token=3113af11c3659f06b7479f48d5a1555b\" class=\"link\"> Employés
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminRequestSql&amp;token=cfdd4b343fa6e1fb382a5de319fdb983\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminLogs&amp;token=7f0e7d654c76dd1b616101b96d22a874\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminWebservice&amp;token=37cc9b9dfd682489ba01de58923ecee7\" class=\"link\"> Service web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php?controller=AdminParentModulesSf&amp;token=7e3fd57290c51770ff60126eda7816bc\">Modules</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Gérer les modules installés    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Mettre un module en ligne\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Mettre un module en ligne</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Se connecter à la marketplace Addons\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Se connecter à la marketplace Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Aide\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.0.5%2526country%253Dfr/Aide?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab\" href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/module/catalog?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA\">Selection</a>

                <a class=\"tab current\" href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/module/manage?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA\">Installed modules</a>

                <a class=\"tab\" href=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/index.php/module/notifications?_token=j_TfGO01lhVvKfcI4eUk9B3n6mvYNS-m3gqsBQlqKDA\">Notifications</a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=jonathan.kablan%40gmail.com&amp;firstname=Jonathan&amp;lastname=Kablan&amp;website=http%3A%2F%2Flocalhost%2Fprestashop-1.6%2Fprestashop_1.7%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=jonathan.kablan%40gmail.com&amp;firstname=Jonathan&amp;lastname=Kablan&amp;website=http%3A%2F%2Flocalhost%2Fprestashop-1.6%2Fprestashop_1.7%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>
    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1045
        $this->displayBlock('content_header', $context, $blocks);
        // line 1046
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1047
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1048
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1049
        echo "
        </div>
      </div>

    </div>

  
</div>


  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 0.351s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=jonathan.kablan%40gmail.com&amp;firstname=Jonathan&amp;lastname=Kablan&amp;website=http%3A%2F%2Flocalhost%2Fprestashop-1.6%2Fprestashop_1.7%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop-1.6/prestashop_1.7/admin5464g7wt9/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=jonathan.kablan%40gmail.com&amp;firstname=Jonathan&amp;lastname=Kablan&amp;website=http%3A%2F%2Flocalhost%2Fprestashop-1.6%2Fprestashop_1.7%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>
  </div>

";
        // line 1197
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 69
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1045
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1046
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1047
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1048
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1197
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__7e59a3b887278e7ab586698215958639be2396f540871c4b31317c40dde5e8a9";
    }

    public function getDebugInfo()
    {
        return array (  1276 => 1197,  1271 => 1048,  1266 => 1047,  1261 => 1046,  1256 => 1045,  1247 => 69,  1239 => 1197,  1089 => 1049,  1086 => 1048,  1083 => 1047,  1080 => 1046,  1078 => 1045,  98 => 69,  28 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
