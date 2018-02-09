<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_12baa9292040878fc06a3db3ba69e3d72745154c82bf19ae816930bc8377ea69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f394e2179a6f7cacd09822ca99d59ed98837e0b3d2a52a88c8be719c217c8aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f394e2179a6f7cacd09822ca99d59ed98837e0b3d2a52a88c8be719c217c8aca->enter($__internal_f394e2179a6f7cacd09822ca99d59ed98837e0b3d2a52a88c8be719c217c8aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f394e2179a6f7cacd09822ca99d59ed98837e0b3d2a52a88c8be719c217c8aca->leave($__internal_f394e2179a6f7cacd09822ca99d59ed98837e0b3d2a52a88c8be719c217c8aca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb2e70cfa20deea628f6ef02ce6ccbcd82dbc6ae85e907ae0a2808ec15c6d6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2e70cfa20deea628f6ef02ce6ccbcd82dbc6ae85e907ae0a2808ec15c6d6fe->enter($__internal_eb2e70cfa20deea628f6ef02ce6ccbcd82dbc6ae85e907ae0a2808ec15c6d6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb2e70cfa20deea628f6ef02ce6ccbcd82dbc6ae85e907ae0a2808ec15c6d6fe->leave($__internal_eb2e70cfa20deea628f6ef02ce6ccbcd82dbc6ae85e907ae0a2808ec15c6d6fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8262d68553a503e140e598b4b69aa3f752e535b6de0cc4c3227db48068a2cb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8262d68553a503e140e598b4b69aa3f752e535b6de0cc4c3227db48068a2cb7f->enter($__internal_8262d68553a503e140e598b4b69aa3f752e535b6de0cc4c3227db48068a2cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8262d68553a503e140e598b4b69aa3f752e535b6de0cc4c3227db48068a2cb7f->leave($__internal_8262d68553a503e140e598b4b69aa3f752e535b6de0cc4c3227db48068a2cb7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_774078fcb1803fa5442c9dbfe03202f7e299b443edf6942b83d3e0485f8d7e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774078fcb1803fa5442c9dbfe03202f7e299b443edf6942b83d3e0485f8d7e9c->enter($__internal_774078fcb1803fa5442c9dbfe03202f7e299b443edf6942b83d3e0485f8d7e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_774078fcb1803fa5442c9dbfe03202f7e299b443edf6942b83d3e0485f8d7e9c->leave($__internal_774078fcb1803fa5442c9dbfe03202f7e299b443edf6942b83d3e0485f8d7e9c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\jms_watch\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
