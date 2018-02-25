<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2566f679ee1043e554d6d33725ea5555bbc785b21caa035cae56c990c0ab6787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b4e0f9823ce8de2e15a43af84a4e5906f22b8f158948e12a2db3b8783f1c7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4e0f9823ce8de2e15a43af84a4e5906f22b8f158948e12a2db3b8783f1c7b8->enter($__internal_4b4e0f9823ce8de2e15a43af84a4e5906f22b8f158948e12a2db3b8783f1c7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6cad2712e7916c45fcee9d0c1de44ef0c8fbf236e6e94026ccfd8860e15ff228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cad2712e7916c45fcee9d0c1de44ef0c8fbf236e6e94026ccfd8860e15ff228->enter($__internal_6cad2712e7916c45fcee9d0c1de44ef0c8fbf236e6e94026ccfd8860e15ff228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b4e0f9823ce8de2e15a43af84a4e5906f22b8f158948e12a2db3b8783f1c7b8->leave($__internal_4b4e0f9823ce8de2e15a43af84a4e5906f22b8f158948e12a2db3b8783f1c7b8_prof);

        
        $__internal_6cad2712e7916c45fcee9d0c1de44ef0c8fbf236e6e94026ccfd8860e15ff228->leave($__internal_6cad2712e7916c45fcee9d0c1de44ef0c8fbf236e6e94026ccfd8860e15ff228_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a0191a1f1d372065550c8247a71426762f531b91ac7068aecf51767d52f88db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0191a1f1d372065550c8247a71426762f531b91ac7068aecf51767d52f88db->enter($__internal_5a0191a1f1d372065550c8247a71426762f531b91ac7068aecf51767d52f88db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_026d939a5cab823b0bc2cf681f888e1be8761895896a415181abd43a3d21a855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026d939a5cab823b0bc2cf681f888e1be8761895896a415181abd43a3d21a855->enter($__internal_026d939a5cab823b0bc2cf681f888e1be8761895896a415181abd43a3d21a855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_026d939a5cab823b0bc2cf681f888e1be8761895896a415181abd43a3d21a855->leave($__internal_026d939a5cab823b0bc2cf681f888e1be8761895896a415181abd43a3d21a855_prof);

        
        $__internal_5a0191a1f1d372065550c8247a71426762f531b91ac7068aecf51767d52f88db->leave($__internal_5a0191a1f1d372065550c8247a71426762f531b91ac7068aecf51767d52f88db_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3af8306ae99be7262c917aedf412a41145921c8b17b617a748ecf9e59eb3b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3af8306ae99be7262c917aedf412a41145921c8b17b617a748ecf9e59eb3b44->enter($__internal_b3af8306ae99be7262c917aedf412a41145921c8b17b617a748ecf9e59eb3b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29e232ffdaf4c8cd5d61779c1f8a04f9f06422077df472a21d647e889c797de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e232ffdaf4c8cd5d61779c1f8a04f9f06422077df472a21d647e889c797de6->enter($__internal_29e232ffdaf4c8cd5d61779c1f8a04f9f06422077df472a21d647e889c797de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_29e232ffdaf4c8cd5d61779c1f8a04f9f06422077df472a21d647e889c797de6->leave($__internal_29e232ffdaf4c8cd5d61779c1f8a04f9f06422077df472a21d647e889c797de6_prof);

        
        $__internal_b3af8306ae99be7262c917aedf412a41145921c8b17b617a748ecf9e59eb3b44->leave($__internal_b3af8306ae99be7262c917aedf412a41145921c8b17b617a748ecf9e59eb3b44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
