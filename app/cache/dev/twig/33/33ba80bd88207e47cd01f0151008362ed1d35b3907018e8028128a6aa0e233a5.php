<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d183d8f82d88ef939ffc16a44ea88cf9ce8b6c085272bf60d2f72443766eba00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_797fbfa4be4b4fe1e2afd822feaf7d14e03cc608b7293ab09068e178849eafa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797fbfa4be4b4fe1e2afd822feaf7d14e03cc608b7293ab09068e178849eafa8->enter($__internal_797fbfa4be4b4fe1e2afd822feaf7d14e03cc608b7293ab09068e178849eafa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_797fbfa4be4b4fe1e2afd822feaf7d14e03cc608b7293ab09068e178849eafa8->leave($__internal_797fbfa4be4b4fe1e2afd822feaf7d14e03cc608b7293ab09068e178849eafa8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97a7bd6b538debe6ad757a710cb9a9e7bacadb6f8c9af8c31a25511042cd8bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a7bd6b538debe6ad757a710cb9a9e7bacadb6f8c9af8c31a25511042cd8bd9->enter($__internal_97a7bd6b538debe6ad757a710cb9a9e7bacadb6f8c9af8c31a25511042cd8bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_97a7bd6b538debe6ad757a710cb9a9e7bacadb6f8c9af8c31a25511042cd8bd9->leave($__internal_97a7bd6b538debe6ad757a710cb9a9e7bacadb6f8c9af8c31a25511042cd8bd9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93d160c94847099a0c5b1190dfa7bec5a0a3475579d39fcf0272b2a7d80afb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d160c94847099a0c5b1190dfa7bec5a0a3475579d39fcf0272b2a7d80afb47->enter($__internal_93d160c94847099a0c5b1190dfa7bec5a0a3475579d39fcf0272b2a7d80afb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_93d160c94847099a0c5b1190dfa7bec5a0a3475579d39fcf0272b2a7d80afb47->leave($__internal_93d160c94847099a0c5b1190dfa7bec5a0a3475579d39fcf0272b2a7d80afb47_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e712cf0e61c7059d6b0177240cb73cd7bffe7ffd3b7ecf498c4770a438a5dc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e712cf0e61c7059d6b0177240cb73cd7bffe7ffd3b7ecf498c4770a438a5dc39->enter($__internal_e712cf0e61c7059d6b0177240cb73cd7bffe7ffd3b7ecf498c4770a438a5dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e712cf0e61c7059d6b0177240cb73cd7bffe7ffd3b7ecf498c4770a438a5dc39->leave($__internal_e712cf0e61c7059d6b0177240cb73cd7bffe7ffd3b7ecf498c4770a438a5dc39_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\jms_fluent\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
