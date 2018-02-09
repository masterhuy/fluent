<?php

/* PrestaShopBundle:Admin/Product:catalog_empty.html.twig */
class __TwigTemplate_2af659b5e1185005d42a3610f503a5862160d808b61d97e8a4a8661004433b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Product:catalog_empty.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b732fafd9d6b2e4d397a7b24cc415cc132f21afb9ada9139f74fd7fb3ef5f208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b732fafd9d6b2e4d397a7b24cc415cc132f21afb9ada9139f74fd7fb3ef5f208->enter($__internal_b732fafd9d6b2e4d397a7b24cc415cc132f21afb9ada9139f74fd7fb3ef5f208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product:catalog_empty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b732fafd9d6b2e4d397a7b24cc415cc132f21afb9ada9139f74fd7fb3ef5f208->leave($__internal_b732fafd9d6b2e4d397a7b24cc415cc132f21afb9ada9139f74fd7fb3ef5f208_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_a91ea1f6d5ad5c01d613673777efbbc56ab8921460f1f6ef60f70f9a23ef3135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91ea1f6d5ad5c01d613673777efbbc56ab8921460f1f6ef60f70f9a23ef3135->enter($__internal_a91ea1f6d5ad5c01d613673777efbbc56ab8921460f1f6ef60f70f9a23ef3135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "  <div class=\"col-md-12 text-md-center\">
    <div class=\"m-t-3 emptycatalog-icon\">
      <i class=\"material-icons\">add_shopping_cart</i>
    </div>

    ";
        // line 33
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]Add your first product[/1][2]or import a list of products (filetypes: .csv, .xls, .xlsx, .xlst, .ods, .ots).[/2]", array(), "Admin.Catalog.Feature"), array("[1]" => (("<div class=\"m-t-1\"><a class=\"btn btn-primary\" id=\"product_empty_list_add_btn\" href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new")) . "\">"), "[/1]" => "</a></div>", "[2]" => (("<div class=\"m-t-1\"><a href=\"" .         // line 37
($context["import_url"] ?? $this->getContext($context, "import_url"))) . "\" class=\"external-link\" id=\"product_empty_list_go_to_import\">"), "[/2]" => "</a></div>"));
        // line 40
        echo "

  </div>
";
        
        $__internal_a91ea1f6d5ad5c01d613673777efbbc56ab8921460f1f6ef60f70f9a23ef3135->leave($__internal_a91ea1f6d5ad5c01d613673777efbbc56ab8921460f1f6ef60f70f9a23ef3135_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product:catalog_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 40,  48 => 37,  47 => 33,  40 => 28,  34 => 27,  11 => 25,);
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
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block content %}
  <div class=\"col-md-12 text-md-center\">
    <div class=\"m-t-3 emptycatalog-icon\">
      <i class=\"material-icons\">add_shopping_cart</i>
    </div>

    {{ '[1]Add your first product[/1][2]or import a list of products (filetypes: .csv, .xls, .xlsx, .xlst, .ods, .ots).[/2]'|trans({}, 'Admin.Catalog.Feature')|
      replace({
      '[1]': '<div class=\"m-t-1\"><a class=\"btn btn-primary\" id=\"product_empty_list_add_btn\" href=\"'~ path('admin_product_new') ~'\">',
      '[/1]': '</a></div>',
      '[2]': '<div class=\"m-t-1\"><a href=\"'~ import_url ~'\" class=\"external-link\" id=\"product_empty_list_go_to_import\">',
      '[/2]': '</a></div>',
      })|raw
    }}

  </div>
{% endblock %}
", "PrestaShopBundle:Admin/Product:catalog_empty.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\src\\PrestaShopBundle/Resources/views/Admin/Product/catalog_empty.html.twig");
    }
}
