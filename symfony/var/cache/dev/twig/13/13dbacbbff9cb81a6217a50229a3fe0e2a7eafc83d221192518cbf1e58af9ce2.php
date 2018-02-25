<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a68b528f65d8049450d83bff62a849be46d8c1263379a10da74e9cb3e95a72f1 extends Twig_Template
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
        $__internal_81b7cb4203bc130173f0fe7e14b69f7399ee831fb53d3967654fa4febbc33fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b7cb4203bc130173f0fe7e14b69f7399ee831fb53d3967654fa4febbc33fab->enter($__internal_81b7cb4203bc130173f0fe7e14b69f7399ee831fb53d3967654fa4febbc33fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6cafc57682f3e1726c37f56bcfa9220f9391ad11ba4e4546a162bc30988cca21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cafc57682f3e1726c37f56bcfa9220f9391ad11ba4e4546a162bc30988cca21->enter($__internal_6cafc57682f3e1726c37f56bcfa9220f9391ad11ba4e4546a162bc30988cca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b7cb4203bc130173f0fe7e14b69f7399ee831fb53d3967654fa4febbc33fab->leave($__internal_81b7cb4203bc130173f0fe7e14b69f7399ee831fb53d3967654fa4febbc33fab_prof);

        
        $__internal_6cafc57682f3e1726c37f56bcfa9220f9391ad11ba4e4546a162bc30988cca21->leave($__internal_6cafc57682f3e1726c37f56bcfa9220f9391ad11ba4e4546a162bc30988cca21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84774917512c1a6074ce60e304af09f7db0dd7ac70305616dfb8563e9458e860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84774917512c1a6074ce60e304af09f7db0dd7ac70305616dfb8563e9458e860->enter($__internal_84774917512c1a6074ce60e304af09f7db0dd7ac70305616dfb8563e9458e860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae82f890c84a8d6852efc37012ede23913b7a2eb24d2a2b33200f5f52e266c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae82f890c84a8d6852efc37012ede23913b7a2eb24d2a2b33200f5f52e266c02->enter($__internal_ae82f890c84a8d6852efc37012ede23913b7a2eb24d2a2b33200f5f52e266c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ae82f890c84a8d6852efc37012ede23913b7a2eb24d2a2b33200f5f52e266c02->leave($__internal_ae82f890c84a8d6852efc37012ede23913b7a2eb24d2a2b33200f5f52e266c02_prof);

        
        $__internal_84774917512c1a6074ce60e304af09f7db0dd7ac70305616dfb8563e9458e860->leave($__internal_84774917512c1a6074ce60e304af09f7db0dd7ac70305616dfb8563e9458e860_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15a4012c5e6d7ff59ca60f7f346f2628faceface9f0efb8ffd98d798a281ca6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a4012c5e6d7ff59ca60f7f346f2628faceface9f0efb8ffd98d798a281ca6c->enter($__internal_15a4012c5e6d7ff59ca60f7f346f2628faceface9f0efb8ffd98d798a281ca6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_92914db8a4921b770c872d7ab38fbcced7bc11028b6116a5633f67e4ded2b07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92914db8a4921b770c872d7ab38fbcced7bc11028b6116a5633f67e4ded2b07c->enter($__internal_92914db8a4921b770c872d7ab38fbcced7bc11028b6116a5633f67e4ded2b07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_92914db8a4921b770c872d7ab38fbcced7bc11028b6116a5633f67e4ded2b07c->leave($__internal_92914db8a4921b770c872d7ab38fbcced7bc11028b6116a5633f67e4ded2b07c_prof);

        
        $__internal_15a4012c5e6d7ff59ca60f7f346f2628faceface9f0efb8ffd98d798a281ca6c->leave($__internal_15a4012c5e6d7ff59ca60f7f346f2628faceface9f0efb8ffd98d798a281ca6c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48c909dea6b42bfeae277653e69c8bdb55e39ee235396c6a89f6ac7b4f4d44d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c909dea6b42bfeae277653e69c8bdb55e39ee235396c6a89f6ac7b4f4d44d2->enter($__internal_48c909dea6b42bfeae277653e69c8bdb55e39ee235396c6a89f6ac7b4f4d44d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3fba565c48ca841ceb3a335b8412a13c5931cd38974e053ebaa258d0acb5a1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fba565c48ca841ceb3a335b8412a13c5931cd38974e053ebaa258d0acb5a1d1->enter($__internal_3fba565c48ca841ceb3a335b8412a13c5931cd38974e053ebaa258d0acb5a1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3fba565c48ca841ceb3a335b8412a13c5931cd38974e053ebaa258d0acb5a1d1->leave($__internal_3fba565c48ca841ceb3a335b8412a13c5931cd38974e053ebaa258d0acb5a1d1_prof);

        
        $__internal_48c909dea6b42bfeae277653e69c8bdb55e39ee235396c6a89f6ac7b4f4d44d2->leave($__internal_48c909dea6b42bfeae277653e69c8bdb55e39ee235396c6a89f6ac7b4f4d44d2_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
