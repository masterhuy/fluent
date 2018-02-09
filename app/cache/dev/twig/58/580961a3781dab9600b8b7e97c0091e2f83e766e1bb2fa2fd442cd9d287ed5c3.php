<?php

/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_45e0691e541daf0bb19f3771755c461ca07ae1e51ae025d53e9353605668d091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 26);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
            'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c733e6866baa50f84ad3db7fbf5f418b79f2159be0be04a6f2e48de8ab5edb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c733e6866baa50f84ad3db7fbf5f418b79f2159be0be04a6f2e48de8ab5edb19->enter($__internal_c733e6866baa50f84ad3db7fbf5f418b79f2159be0be04a6f2e48de8ab5edb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        // line 25
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["categories"] ?? $this->getContext($context, "categories")), array(0 => $this));
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c733e6866baa50f84ad3db7fbf5f418b79f2159be0be04a6f2e48de8ab5edb19->leave($__internal_c733e6866baa50f84ad3db7fbf5f418b79f2159be0be04a6f2e48de8ab5edb19_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_971317482f8ef0fa101b3e402ed561770cc227d705a25470d4e438727b4ec2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971317482f8ef0fa101b3e402ed561770cc227d705a25470d4e438727b4ec2ea->enter($__internal_971317482f8ef0fa101b3e402ed561770cc227d705a25470d4e438727b4ec2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_971317482f8ef0fa101b3e402ed561770cc227d705a25470d4e438727b4ec2ea->leave($__internal_971317482f8ef0fa101b3e402ed561770cc227d705a25470d4e438727b4ec2ea_prof);

    }

    // line 36
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_aa9f1316be03cf27f806ad5c2f72ad6b2f6b0c214112f5256f67a53d186bf514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9f1316be03cf27f806ad5c2f72ad6b2f6b0c214112f5256f67a53d186bf514->enter($__internal_aa9f1316be03cf27f806ad5c2f72ad6b2f6b0c214112f5256f67a53d186bf514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 37
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"category-tree\">";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</ul>
    </div>";
        
        $__internal_aa9f1316be03cf27f806ad5c2f72ad6b2f6b0c214112f5256f67a53d186bf514->leave($__internal_aa9f1316be03cf27f806ad5c2f72ad6b2f6b0c214112f5256f67a53d186bf514_prof);

    }

    // line 46
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_18dd200811a4aeeb299620ff5236ffb703e234feba3e21e4fb40f3199064509e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18dd200811a4aeeb299620ff5236ffb703e234feba3e21e4fb40f3199064509e->enter($__internal_18dd200811a4aeeb299620ff5236ffb703e234feba3e21e4fb40f3199064509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 47
        echo "<li>
        ";
        // line 48
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 49
        echo "
         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
        echo "
                 <input
                   type=\"radio\"
                   name=\"form[";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\"
                   value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
        echo "
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        ";
        // line 61
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 62
            echo "            <ul>
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "                    ";
                $context["child"] = $context["item"];
                // line 65
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "</ul>
        ";
        }
        // line 69
        echo "    </li>";
        
        $__internal_18dd200811a4aeeb299620ff5236ffb703e234feba3e21e4fb40f3199064509e->leave($__internal_18dd200811a4aeeb299620ff5236ffb703e234feba3e21e4fb40f3199064509e_prof);

    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        $__internal_70fd74806fd60b29752ad373763f8b0c256bcf2e3973cbe4249e83a8d08f3249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fd74806fd60b29752ad373763f8b0c256bcf2e3973cbe4249e83a8d08f3249->enter($__internal_70fd74806fd60b29752ad373763f8b0c256bcf2e3973cbe4249e83a8d08f3249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 73
        echo "
  <div class=\"products-catalog\">

    ";
        // line 76
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", array("kpi_controller" => "AdminProductsController"));
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 80
        if (twig_length_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")))) {
            // line 81
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              ";
            // line 87
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        // line 93
        echo "
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_export_action");
        echo "\">
              ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), 1 => "cloud_upload"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["import_link"] ?? $this->getContext($context, "import_link")), "html", null, true);
        echo "\">
              ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), 1 => "cloud_download"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", array(), "Admin.Actions"), 1 => "code"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), 1 => "storage"), "method"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", array("action" => "activate_all"));
        echo "\"
          massediturl=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", array("action" => "sort"));
        echo "\"
          redirecturl=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
          redirecturlnextpage=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "offset" => (($context["offset"] ?? $this->getContext($context, "offset")) + ($context["limit"] ?? $this->getContext($context, "limit"))), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        >
          ";
        // line 134
        $context["buttons_action"] = array(0 => array("onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", array(), "Admin.Actions")), 1 => array("onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", array(), "Admin.Actions")));
        // line 146
        echo "
          ";
        // line 147
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", array(), "Admin.Actions"))));
        // line 157
        echo "

          ";
        // line 159
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", array(), "Admin.Actions"))));
        // line 169
        echo "
          ";
        // line 170
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 170)->display(array_merge($context, array("div_style" => "btn-group dropup", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", array(), "Admin.Global"), "buttonType" => "tertiary-outline", "menu_icon" => "icon-caret-up", "items" =>         // line 177
($context["buttons_action"] ?? $this->getContext($context, "buttons_action")))));
        // line 179
        echo "        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          ";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", array(), "Admin.Actions"), "html", null, true);
        echo "
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              ";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              ";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              ";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <hr>
            ";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["categories"] ?? $this->getContext($context, "categories")), 'widget');
        echo "
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        orderingurl=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => "name", "sortOrder" => "asc")), "html", null, true);
        echo "\"
        newproducturl=\"";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter(($context["filter_category"] ?? $this->getContext($context, "filter_category")), "")) : ("")), "html", null, true);
        echo "\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 245
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 246
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 247
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 248
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        // line 249
        echo "\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    ";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 255
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 255)->display(array_merge($context, array("column" => "id_product")));
        // line 258
        echo "                  </th>
                  <th>
                    ";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", array(), "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th>
                    ";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 264
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 264)->display(array_merge($context, array("column" => "name")));
        // line 267
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 270
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 270)->display(array_merge($context, array("column" => "reference")));
        // line 273
        echo "                  </th>
                  <th>
                    ";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 276
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 276)->display(array_merge($context, array("column" => "name_category")));
        // line 279
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 282
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 282)->display(array_merge($context, array("column" => "price")));
        // line 285
        echo "                  </th>

                  ";
        // line 287
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 288
            echo "                  <th style=\"width: 9%\">
                    ";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                    ";
            // line 290
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 290)->display(array_merge($context, array("column" => "sav_quantity")));
            // line 293
            echo "                  </th>
                  ";
        } else {
            // line 295
            echo "                    <th></th>
                  ";
        }
        // line 297
        echo "
                  <th>
                    ";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 300
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 300)->display(array_merge($context, array("column" => "active")));
        // line 303
        echo "                  </th>
                  ";
        // line 304
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 305
            echo "                    <th>
                      ";
            // line 306
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), "html", null, true);
            echo "
                      ";
            // line 307
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 307)->display(array_merge($context, array("column" => "position")));
            // line 310
            echo "                    </th>
                  ";
        }
        // line 312
        echo "                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    ";
        // line 316
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 316)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 322
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")))));
        // line 324
        echo "                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name\"
                      value=\"";
        // line 332
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_reference\"
                      value=\"";
        // line 341
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name_category\"
                      value=\"";
        // line 350
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    ";
        // line 354
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 354)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 360
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")))));
        // line 362
        echo "                  </th>

                  ";
        // line 364
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 365
            echo "                  <th>
                    ";
            // line 366
            $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 366)->display(array_merge($context, array("input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>             // line 372
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")))));
            // line 374
            echo "                  </th>
                  ";
        } else {
            // line 376
            echo "                    <th></th>
                  ";
        }
        // line 378
        echo "
                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" ";
        // line 382
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                      <option value=\"0\" ";
        // line 383
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
                    </select>
                  </th>
                  ";
        // line 386
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 387
            echo "                    <th>
                      ";
            // line 388
            if ( !($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                // line 389
                echo "                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", array(), "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                        ";
            } else {
                // line 391
                echo "                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", array(), "Admin.Actions");
                echo "\" />
                    ";
            }
            // line 393
            echo "
                    </th>
                  ";
        }
        // line 396
        echo "                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">search</i>
                      ";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">clear</i>
                      ";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                  </th>
                </tr>
              </thead>
              ";
        // line 419
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 420
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 421
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 422
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 423
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "products" =>         // line 424
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 425
($context["last_sql"] ?? $this->getContext($context, "last_sql")))));
        // line 426
        echo "
            </table>
          </div>
        </div>

        ";
        // line 431
        if ((($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")) > 20)) {
            // line 432
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 434
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 435
($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "total" => ($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "caller_parameters" => ($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "limit_choices" => ($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices")))));
            // line 436
            echo "
            </div>
          </div>
        ";
        }
        // line 440
        echo "
      </form>

    </div>
  </div>

  ";
        // line 447
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 447, "737351294")->display(array_merge($context, array("id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 466
        echo "

  ";
        // line 469
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 469, "1170179091")->display(array_merge($context, array("id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 488
        echo "

  ";
        // line 491
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 491, "229944530")->display(array_merge($context, array("id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 510
        echo "

  ";
        // line 513
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 513, "1711451742")->display(array_merge($context, array("id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 532
        echo "

  ";
        // line 535
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 535, "844081329")->display(array_merge($context, array("id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", array(), "Admin.Catalog.Feature"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", array(), "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg")))));
        // line 552
        echo "
  ";
        // line 553
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 553, "1145571985")->display(array_merge($context, array("id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg")))));
        // line 573
        echo "
";
        
        $__internal_70fd74806fd60b29752ad373763f8b0c256bcf2e3973cbe4249e83a8d08f3249->leave($__internal_70fd74806fd60b29752ad373763f8b0c256bcf2e3973cbe4249e83a8d08f3249_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  795 => 573,  793 => 553,  790 => 552,  787 => 535,  783 => 532,  780 => 513,  776 => 510,  773 => 491,  769 => 488,  766 => 469,  762 => 466,  759 => 447,  751 => 440,  745 => 436,  743 => 435,  742 => 434,  738 => 432,  736 => 431,  729 => 426,  727 => 425,  726 => 424,  725 => 423,  724 => 422,  723 => 421,  722 => 420,  721 => 419,  713 => 414,  707 => 411,  697 => 404,  691 => 401,  684 => 396,  679 => 393,  673 => 391,  667 => 389,  665 => 388,  662 => 387,  660 => 386,  652 => 383,  646 => 382,  640 => 378,  636 => 376,  632 => 374,  630 => 372,  629 => 366,  626 => 365,  624 => 364,  620 => 362,  618 => 360,  617 => 354,  610 => 350,  605 => 348,  595 => 341,  590 => 339,  580 => 332,  575 => 330,  567 => 324,  565 => 322,  564 => 316,  558 => 312,  554 => 310,  552 => 307,  548 => 306,  545 => 305,  543 => 304,  540 => 303,  538 => 300,  534 => 299,  530 => 297,  526 => 295,  522 => 293,  520 => 290,  516 => 289,  513 => 288,  511 => 287,  507 => 285,  505 => 282,  501 => 281,  497 => 279,  495 => 276,  491 => 275,  487 => 273,  485 => 270,  481 => 269,  477 => 267,  475 => 264,  471 => 263,  465 => 260,  461 => 258,  459 => 255,  455 => 254,  448 => 249,  446 => 248,  445 => 247,  444 => 246,  443 => 245,  442 => 244,  431 => 236,  424 => 232,  420 => 231,  416 => 230,  404 => 221,  398 => 218,  385 => 208,  372 => 198,  357 => 186,  348 => 179,  346 => 177,  345 => 170,  342 => 169,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\src\\PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_45e0691e541daf0bb19f3771755c461ca07ae1e51ae025d53e9353605668d091_737351294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 447
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 447);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d220f4fd404d38430100b2d8f62db4c79bc3e4965eacaf4df8d29659000608c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d220f4fd404d38430100b2d8f62db4c79bc3e4965eacaf4df8d29659000608c->enter($__internal_3d220f4fd404d38430100b2d8f62db4c79bc3e4965eacaf4df8d29659000608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d220f4fd404d38430100b2d8f62db4c79bc3e4965eacaf4df8d29659000608c->leave($__internal_3d220f4fd404d38430100b2d8f62db4c79bc3e4965eacaf4df8d29659000608c_prof);

    }

    // line 457
    public function block_content($context, array $blocks = array())
    {
        $__internal_660c9ca24c492646e44cf5054fd8ceae0ea1dacd9a38afa1e6e618bb34f4aed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660c9ca24c492646e44cf5054fd8ceae0ea1dacd9a38afa1e6e618bb34f4aed5->enter($__internal_660c9ca24c492646e44cf5054fd8ceae0ea1dacd9a38afa1e6e618bb34f4aed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 458
        echo "      <div class=\"modal-body\">
        ";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_660c9ca24c492646e44cf5054fd8ceae0ea1dacd9a38afa1e6e618bb34f4aed5->leave($__internal_660c9ca24c492646e44cf5054fd8ceae0ea1dacd9a38afa1e6e618bb34f4aed5_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1451 => 461,  1446 => 459,  1443 => 458,  1437 => 457,  1414 => 447,  795 => 573,  793 => 553,  790 => 552,  787 => 535,  783 => 532,  780 => 513,  776 => 510,  773 => 491,  769 => 488,  766 => 469,  762 => 466,  759 => 447,  751 => 440,  745 => 436,  743 => 435,  742 => 434,  738 => 432,  736 => 431,  729 => 426,  727 => 425,  726 => 424,  725 => 423,  724 => 422,  723 => 421,  722 => 420,  721 => 419,  713 => 414,  707 => 411,  697 => 404,  691 => 401,  684 => 396,  679 => 393,  673 => 391,  667 => 389,  665 => 388,  662 => 387,  660 => 386,  652 => 383,  646 => 382,  640 => 378,  636 => 376,  632 => 374,  630 => 372,  629 => 366,  626 => 365,  624 => 364,  620 => 362,  618 => 360,  617 => 354,  610 => 350,  605 => 348,  595 => 341,  590 => 339,  580 => 332,  575 => 330,  567 => 324,  565 => 322,  564 => 316,  558 => 312,  554 => 310,  552 => 307,  548 => 306,  545 => 305,  543 => 304,  540 => 303,  538 => 300,  534 => 299,  530 => 297,  526 => 295,  522 => 293,  520 => 290,  516 => 289,  513 => 288,  511 => 287,  507 => 285,  505 => 282,  501 => 281,  497 => 279,  495 => 276,  491 => 275,  487 => 273,  485 => 270,  481 => 269,  477 => 267,  475 => 264,  471 => 263,  465 => 260,  461 => 258,  459 => 255,  455 => 254,  448 => 249,  446 => 248,  445 => 247,  444 => 246,  443 => 245,  442 => 244,  431 => 236,  424 => 232,  420 => 231,  416 => 230,  404 => 221,  398 => 218,  385 => 208,  372 => 198,  357 => 186,  348 => 179,  346 => 177,  345 => 170,  342 => 169,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\src\\PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_45e0691e541daf0bb19f3771755c461ca07ae1e51ae025d53e9353605668d091_1170179091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 469
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 469);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ad945513a003ba72381539f2aff1a3ab45d731a29c128513d007d3980e1e39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad945513a003ba72381539f2aff1a3ab45d731a29c128513d007d3980e1e39e->enter($__internal_1ad945513a003ba72381539f2aff1a3ab45d731a29c128513d007d3980e1e39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ad945513a003ba72381539f2aff1a3ab45d731a29c128513d007d3980e1e39e->leave($__internal_1ad945513a003ba72381539f2aff1a3ab45d731a29c128513d007d3980e1e39e_prof);

    }

    // line 479
    public function block_content($context, array $blocks = array())
    {
        $__internal_068a78f0ecb1efe0c38d495d3f8108613b65a39658de6b7493cd2bdfed7e7c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068a78f0ecb1efe0c38d495d3f8108613b65a39658de6b7493cd2bdfed7e7c18->enter($__internal_068a78f0ecb1efe0c38d495d3f8108613b65a39658de6b7493cd2bdfed7e7c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 480
        echo "      <div class=\"modal-body\">
        ";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_068a78f0ecb1efe0c38d495d3f8108613b65a39658de6b7493cd2bdfed7e7c18->leave($__internal_068a78f0ecb1efe0c38d495d3f8108613b65a39658de6b7493cd2bdfed7e7c18_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2110 => 483,  2105 => 481,  2102 => 480,  2096 => 479,  2073 => 469,  1451 => 461,  1446 => 459,  1443 => 458,  1437 => 457,  1414 => 447,  795 => 573,  793 => 553,  790 => 552,  787 => 535,  783 => 532,  780 => 513,  776 => 510,  773 => 491,  769 => 488,  766 => 469,  762 => 466,  759 => 447,  751 => 440,  745 => 436,  743 => 435,  742 => 434,  738 => 432,  736 => 431,  729 => 426,  727 => 425,  726 => 424,  725 => 423,  724 => 422,  723 => 421,  722 => 420,  721 => 419,  713 => 414,  707 => 411,  697 => 404,  691 => 401,  684 => 396,  679 => 393,  673 => 391,  667 => 389,  665 => 388,  662 => 387,  660 => 386,  652 => 383,  646 => 382,  640 => 378,  636 => 376,  632 => 374,  630 => 372,  629 => 366,  626 => 365,  624 => 364,  620 => 362,  618 => 360,  617 => 354,  610 => 350,  605 => 348,  595 => 341,  590 => 339,  580 => 332,  575 => 330,  567 => 324,  565 => 322,  564 => 316,  558 => 312,  554 => 310,  552 => 307,  548 => 306,  545 => 305,  543 => 304,  540 => 303,  538 => 300,  534 => 299,  530 => 297,  526 => 295,  522 => 293,  520 => 290,  516 => 289,  513 => 288,  511 => 287,  507 => 285,  505 => 282,  501 => 281,  497 => 279,  495 => 276,  491 => 275,  487 => 273,  485 => 270,  481 => 269,  477 => 267,  475 => 264,  471 => 263,  465 => 260,  461 => 258,  459 => 255,  455 => 254,  448 => 249,  446 => 248,  445 => 247,  444 => 246,  443 => 245,  442 => 244,  431 => 236,  424 => 232,  420 => 231,  416 => 230,  404 => 221,  398 => 218,  385 => 208,  372 => 198,  357 => 186,  348 => 179,  346 => 177,  345 => 170,  342 => 169,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\src\\PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_45e0691e541daf0bb19f3771755c461ca07ae1e51ae025d53e9353605668d091_229944530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 491
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 491);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a8cdff6f4b548055dca12df560193048f7e21f13d1efa5dfe030ebadeed626b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8cdff6f4b548055dca12df560193048f7e21f13d1efa5dfe030ebadeed626b->enter($__internal_6a8cdff6f4b548055dca12df560193048f7e21f13d1efa5dfe030ebadeed626b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8cdff6f4b548055dca12df560193048f7e21f13d1efa5dfe030ebadeed626b->leave($__internal_6a8cdff6f4b548055dca12df560193048f7e21f13d1efa5dfe030ebadeed626b_prof);

    }

    // line 501
    public function block_content($context, array $blocks = array())
    {
        $__internal_760c3e70d609d1f95dcf70ec8149c707d02029013badb91868b1a018a8fe8479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760c3e70d609d1f95dcf70ec8149c707d02029013badb91868b1a018a8fe8479->enter($__internal_760c3e70d609d1f95dcf70ec8149c707d02029013badb91868b1a018a8fe8479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 502
        echo "      <div class=\"modal-body\">
        ";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_760c3e70d609d1f95dcf70ec8149c707d02029013badb91868b1a018a8fe8479->leave($__internal_760c3e70d609d1f95dcf70ec8149c707d02029013badb91868b1a018a8fe8479_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2769 => 505,  2764 => 503,  2761 => 502,  2755 => 501,  2732 => 491,  2110 => 483,  2105 => 481,  2102 => 480,  2096 => 479,  2073 => 469,  1451 => 461,  1446 => 459,  1443 => 458,  1437 => 457,  1414 => 447,  795 => 573,  793 => 553,  790 => 552,  787 => 535,  783 => 532,  780 => 513,  776 => 510,  773 => 491,  769 => 488,  766 => 469,  762 => 466,  759 => 447,  751 => 440,  745 => 436,  743 => 435,  742 => 434,  738 => 432,  736 => 431,  729 => 426,  727 => 425,  726 => 424,  725 => 423,  724 => 422,  723 => 421,  722 => 420,  721 => 419,  713 => 414,  707 => 411,  697 => 404,  691 => 401,  684 => 396,  679 => 393,  673 => 391,  667 => 389,  665 => 388,  662 => 387,  660 => 386,  652 => 383,  646 => 382,  640 => 378,  636 => 376,  632 => 374,  630 => 372,  629 => 366,  626 => 365,  624 => 364,  620 => 362,  618 => 360,  617 => 354,  610 => 350,  605 => 348,  595 => 341,  590 => 339,  580 => 332,  575 => 330,  567 => 324,  565 => 322,  564 => 316,  558 => 312,  554 => 310,  552 => 307,  548 => 306,  545 => 305,  543 => 304,  540 => 303,  538 => 300,  534 => 299,  530 => 297,  526 => 295,  522 => 293,  520 => 290,  516 => 289,  513 => 288,  511 => 287,  507 => 285,  505 => 282,  501 => 281,  497 => 279,  495 => 276,  491 => 275,  487 => 273,  485 => 270,  481 => 269,  477 => 267,  475 => 264,  471 => 263,  465 => 260,  461 => 258,  459 => 255,  455 => 254,  448 => 249,  446 => 248,  445 => 247,  444 => 246,  443 => 245,  442 => 244,  431 => 236,  424 => 232,  420 => 231,  416 => 230,  404 => 221,  398 => 218,  385 => 208,  372 => 198,  357 => 186,  348 => 179,  346 => 177,  345 => 170,  342 => 169,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\src\\PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_45e0691e541daf0bb19f3771755c461ca07ae1e51ae025d53e9353605668d091_1711451742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 513
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 513);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6d70e9cb0efd1ada58d60aa1f75b2f52ec2ac7e192e0b82f2693e8e2d7515cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d70e9cb0efd1ada58d60aa1f75b2f52ec2ac7e192e0b82f2693e8e2d7515cc->enter($__internal_b6d70e9cb0efd1ada58d60aa1f75b2f52ec2ac7e192e0b82f2693e8e2d7515cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6d70e9cb0efd1ada58d60aa1f75b2f52ec2ac7e192e0b82f2693e8e2d7515cc->leave($__internal_b6d70e9cb0efd1ada58d60aa1f75b2f52ec2ac7e192e0b82f2693e8e2d7515cc_prof);

    }

    // line 523
    public function block_content($context, array $blocks = array())
    {
        $__internal_09fd9543830b277dd18230b9a4cfa49ef1108066fa6c2fc8d445a907bdc22066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fd9543830b277dd18230b9a4cfa49ef1108066fa6c2fc8d445a907bdc22066->enter($__internal_09fd9543830b277dd18230b9a4cfa49ef1108066fa6c2fc8d445a907bdc22066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 524
        echo "      <div class=\"modal-body\">
        ";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_09fd9543830b277dd18230b9a4cfa49ef1108066fa6c2fc8d445a907bdc22066->leave($__internal_09fd9543830b277dd18230b9a4cfa49ef1108066fa6c2fc8d445a907bdc22066_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3428 => 527,  3423 => 525,  3420 => 524,  3414 => 523,  3391 => 513,  2769 => 505,  2764 => 503,  2761 => 502,  2755 => 501,  2732 => 491,  2110 => 483,  2105 => 481,  2102 => 480,  2096 => 479,  2073 => 469,  1451 => 461,  1446 => 459,  1443 => 458,  1437 => 457,  1414 => 447,  795 => 573,  793 => 553,  790 => 552,  787 => 535,  783 => 532,  780 => 513,  776 => 510,  773 => 491,  769 => 488,  766 => 469,  762 => 466,  759 => 447,  751 => 440,  745 => 436,  743 => 435,  742 => 434,  738 => 432,  736 => 431,  729 => 426,  727 => 425,  726 => 424,  725 => 423,  724 => 422,  723 => 421,  722 => 420,  721 => 419,  713 => 414,  707 => 411,  697 => 404,  691 => 401,  684 => 396,  679 => 393,  673 => 391,  667 => 389,  665 => 388,  662 => 387,  660 => 386,  652 => 383,  646 => 382,  640 => 378,  636 => 376,  632 => 374,  630 => 372,  629 => 366,  626 => 365,  624 => 364,  620 => 362,  618 => 360,  617 => 354,  610 => 350,  605 => 348,  595 => 341,  590 => 339,  580 => 332,  575 => 330,  567 => 324,  565 => 322,  564 => 316,  558 => 312,  554 => 310,  552 => 307,  548 => 306,  545 => 305,  543 => 304,  540 => 303,  538 => 300,  534 => 299,  530 => 297,  526 => 295,  522 => 293,  520 => 290,  516 => 289,  513 => 288,  511 => 287,  507 => 285,  505 => 282,  501 => 281,  497 => 279,  495 => 276,  491 => 275,  487 => 273,  485 => 270,  481 => 269,  477 => 267,  475 => 264,  471 => 263,  465 => 260,  461 => 258,  459 => 255,  455 => 254,  448 => 249,  446 => 248,  445 => 247,  444 => 246,  443 => 245,  442 => 244,  431 => 236,  424 => 232,  420 => 231,  416 => 230,  404 => 221,  398 => 218,  385 => 208,  372 => 198,  357 => 186,  348 => 179,  346 => 177,  345 => 170,  342 => 169,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\src\\PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_45e0691e541daf0bb19f3771755c461ca07ae1e51ae025d53e9353605668d091_844081329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 535
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 535);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_defa1acb70b22cc851d612e31ea05fd425e04f556f1a0dc9aae777ffc1dc26f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defa1acb70b22cc851d612e31ea05fd425e04f556f1a0dc9aae777ffc1dc26f7->enter($__internal_defa1acb70b22cc851d612e31ea05fd425e04f556f1a0dc9aae777ffc1dc26f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_defa1acb70b22cc851d612e31ea05fd425e04f556f1a0dc9aae777ffc1dc26f7->leave($__internal_defa1acb70b22cc851d612e31ea05fd425e04f556f1a0dc9aae777ffc1dc26f7_prof);

    }

    // line 546
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d4b219ad515cf1df949303f3e525c53db1a383ff6595770f1f7793786e5b9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4b219ad515cf1df949303f3e525c53db1a383ff6595770f1f7793786e5b9f4->enter($__internal_5d4b219ad515cf1df949303f3e525c53db1a383ff6595770f1f7793786e5b9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 547
        echo "      <div class=\"modal-body\">
        ";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
        
        $__internal_5d4b219ad515cf1df949303f3e525c53db1a383ff6595770f1f7793786e5b9f4->leave($__internal_5d4b219ad515cf1df949303f3e525c53db1a383ff6595770f1f7793786e5b9f4_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4082 => 548,  4079 => 547,  4073 => 546,  4050 => 535,  3428 => 527,  3423 => 525,  3420 => 524,  3414 => 523,  3391 => 513,  2769 => 505,  2764 => 503,  2761 => 502,  2755 => 501,  2732 => 491,  2110 => 483,  2105 => 481,  2102 => 480,  2096 => 479,  2073 => 469,  1451 => 461,  1446 => 459,  1443 => 458,  1437 => 457,  1414 => 447,  795 => 573,  793 => 553,  790 => 552,  787 => 535,  783 => 532,  780 => 513,  776 => 510,  773 => 491,  769 => 488,  766 => 469,  762 => 466,  759 => 447,  751 => 440,  745 => 436,  743 => 435,  742 => 434,  738 => 432,  736 => 431,  729 => 426,  727 => 425,  726 => 424,  725 => 423,  724 => 422,  723 => 421,  722 => 420,  721 => 419,  713 => 414,  707 => 411,  697 => 404,  691 => 401,  684 => 396,  679 => 393,  673 => 391,  667 => 389,  665 => 388,  662 => 387,  660 => 386,  652 => 383,  646 => 382,  640 => 378,  636 => 376,  632 => 374,  630 => 372,  629 => 366,  626 => 365,  624 => 364,  620 => 362,  618 => 360,  617 => 354,  610 => 350,  605 => 348,  595 => 341,  590 => 339,  580 => 332,  575 => 330,  567 => 324,  565 => 322,  564 => 316,  558 => 312,  554 => 310,  552 => 307,  548 => 306,  545 => 305,  543 => 304,  540 => 303,  538 => 300,  534 => 299,  530 => 297,  526 => 295,  522 => 293,  520 => 290,  516 => 289,  513 => 288,  511 => 287,  507 => 285,  505 => 282,  501 => 281,  497 => 279,  495 => 276,  491 => 275,  487 => 273,  485 => 270,  481 => 269,  477 => 267,  475 => 264,  471 => 263,  465 => 260,  461 => 258,  459 => 255,  455 => 254,  448 => 249,  446 => 248,  445 => 247,  444 => 246,  443 => 245,  442 => 244,  431 => 236,  424 => 232,  420 => 231,  416 => 230,  404 => 221,  398 => 218,  385 => 208,  372 => 198,  357 => 186,  348 => 179,  346 => 177,  345 => 170,  342 => 169,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\src\\PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_45e0691e541daf0bb19f3771755c461ca07ae1e51ae025d53e9353605668d091_1145571985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 553
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 553);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bff7db19dc499e032493b9cf96430473c45d1cb59afc73bd0b65c5444090d335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff7db19dc499e032493b9cf96430473c45d1cb59afc73bd0b65c5444090d335->enter($__internal_bff7db19dc499e032493b9cf96430473c45d1cb59afc73bd0b65c5444090d335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bff7db19dc499e032493b9cf96430473c45d1cb59afc73bd0b65c5444090d335->leave($__internal_bff7db19dc499e032493b9cf96430473c45d1cb59afc73bd0b65c5444090d335_prof);

    }

    // line 564
    public function block_content($context, array $blocks = array())
    {
        $__internal_4165af7f61ff7204d4bc68d7e4e1efd09132fbc229d4f0156c05f44a50033f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4165af7f61ff7204d4bc68d7e4e1efd09132fbc229d4f0156c05f44a50033f5b->enter($__internal_4165af7f61ff7204d4bc68d7e4e1efd09132fbc229d4f0156c05f44a50033f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 565
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? $this->getContext($context, "sql_manager_add_link")), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
        
        $__internal_4165af7f61ff7204d4bc68d7e4e1efd09132fbc229d4f0156c05f44a50033f5b->leave($__internal_4165af7f61ff7204d4bc68d7e4e1efd09132fbc229d4f0156c05f44a50033f5b_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4732 => 565,  4726 => 564,  4703 => 553,  4082 => 548,  4079 => 547,  4073 => 546,  4050 => 535,  3428 => 527,  3423 => 525,  3420 => 524,  3414 => 523,  3391 => 513,  2769 => 505,  2764 => 503,  2761 => 502,  2755 => 501,  2732 => 491,  2110 => 483,  2105 => 481,  2102 => 480,  2096 => 479,  2073 => 469,  1451 => 461,  1446 => 459,  1443 => 458,  1437 => 457,  1414 => 447,  795 => 573,  793 => 553,  790 => 552,  787 => 535,  783 => 532,  780 => 513,  776 => 510,  773 => 491,  769 => 488,  766 => 469,  762 => 466,  759 => 447,  751 => 440,  745 => 436,  743 => 435,  742 => 434,  738 => 432,  736 => 431,  729 => 426,  727 => 425,  726 => 424,  725 => 423,  724 => 422,  723 => 421,  722 => 420,  721 => 419,  713 => 414,  707 => 411,  697 => 404,  691 => 401,  684 => 396,  679 => 393,  673 => 391,  667 => 389,  665 => 388,  662 => 387,  660 => 386,  652 => 383,  646 => 382,  640 => 378,  636 => 376,  632 => 374,  630 => 372,  629 => 366,  626 => 365,  624 => 364,  620 => 362,  618 => 360,  617 => 354,  610 => 350,  605 => 348,  595 => 341,  590 => 339,  580 => 332,  575 => 330,  567 => 324,  565 => 322,  564 => 316,  558 => 312,  554 => 310,  552 => 307,  548 => 306,  545 => 305,  543 => 304,  540 => 303,  538 => 300,  534 => 299,  530 => 297,  526 => 295,  522 => 293,  520 => 290,  516 => 289,  513 => 288,  511 => 287,  507 => 285,  505 => 282,  501 => 281,  497 => 279,  495 => 276,  491 => 275,  487 => 273,  485 => 270,  481 => 269,  477 => 267,  475 => 264,  471 => 263,  465 => 260,  461 => 258,  459 => 255,  455 => 254,  448 => 249,  446 => 248,  445 => 247,  444 => 246,  443 => 245,  442 => 244,  431 => 236,  424 => 232,  420 => 231,  416 => 230,  404 => 221,  398 => 218,  385 => 208,  372 => 198,  357 => 186,  348 => 179,  346 => 177,  345 => 170,  342 => 169,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\src\\PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}
