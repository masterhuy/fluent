<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a1297088a943c1a66614ff294247d551cccd8ad1846a4e0e791c3f0b46557e80 extends Twig_Template
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
        $__internal_f5e27625c48b1f888680704f1563ae1945130cd3b5e2438d44d06d4fa57e59a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e27625c48b1f888680704f1563ae1945130cd3b5e2438d44d06d4fa57e59a9->enter($__internal_f5e27625c48b1f888680704f1563ae1945130cd3b5e2438d44d06d4fa57e59a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5e27625c48b1f888680704f1563ae1945130cd3b5e2438d44d06d4fa57e59a9->leave($__internal_f5e27625c48b1f888680704f1563ae1945130cd3b5e2438d44d06d4fa57e59a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae9f9d0ad21a055c5d34d93eec72dc92c3df75a3cce9467560c0e961458acc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9f9d0ad21a055c5d34d93eec72dc92c3df75a3cce9467560c0e961458acc12->enter($__internal_ae9f9d0ad21a055c5d34d93eec72dc92c3df75a3cce9467560c0e961458acc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae9f9d0ad21a055c5d34d93eec72dc92c3df75a3cce9467560c0e961458acc12->leave($__internal_ae9f9d0ad21a055c5d34d93eec72dc92c3df75a3cce9467560c0e961458acc12_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03e868c64ebe5bc3165b7c71f14a290d96c6631825c129dfcc9cfb8dbeb97a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e868c64ebe5bc3165b7c71f14a290d96c6631825c129dfcc9cfb8dbeb97a29->enter($__internal_03e868c64ebe5bc3165b7c71f14a290d96c6631825c129dfcc9cfb8dbeb97a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03e868c64ebe5bc3165b7c71f14a290d96c6631825c129dfcc9cfb8dbeb97a29->leave($__internal_03e868c64ebe5bc3165b7c71f14a290d96c6631825c129dfcc9cfb8dbeb97a29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_794d4d7409cde316dd35f5729d8ee8015be80028b50a40e80886f4768ff56acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794d4d7409cde316dd35f5729d8ee8015be80028b50a40e80886f4768ff56acf->enter($__internal_794d4d7409cde316dd35f5729d8ee8015be80028b50a40e80886f4768ff56acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_794d4d7409cde316dd35f5729d8ee8015be80028b50a40e80886f4768ff56acf->leave($__internal_794d4d7409cde316dd35f5729d8ee8015be80028b50a40e80886f4768ff56acf_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
