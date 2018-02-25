<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8b3263a9f39c63884fabba2faa5d39f31c652367810cb2d2975940379b5062b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2aaa5a6adad7a2aec2a81e902a271974a12072c78c7b35a43e8b3f9997267a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aaa5a6adad7a2aec2a81e902a271974a12072c78c7b35a43e8b3f9997267a29->enter($__internal_2aaa5a6adad7a2aec2a81e902a271974a12072c78c7b35a43e8b3f9997267a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e1a45a657baf23bbd5a57656fd71a145ce5ddca16df669d9b641a518e3762e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a45a657baf23bbd5a57656fd71a145ce5ddca16df669d9b641a518e3762e87->enter($__internal_e1a45a657baf23bbd5a57656fd71a145ce5ddca16df669d9b641a518e3762e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aaa5a6adad7a2aec2a81e902a271974a12072c78c7b35a43e8b3f9997267a29->leave($__internal_2aaa5a6adad7a2aec2a81e902a271974a12072c78c7b35a43e8b3f9997267a29_prof);

        
        $__internal_e1a45a657baf23bbd5a57656fd71a145ce5ddca16df669d9b641a518e3762e87->leave($__internal_e1a45a657baf23bbd5a57656fd71a145ce5ddca16df669d9b641a518e3762e87_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a6a5d4fe8feaf4edf50197ae2779e558761aeb6b15a3f4ae8d4d1e7669c3e672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a5d4fe8feaf4edf50197ae2779e558761aeb6b15a3f4ae8d4d1e7669c3e672->enter($__internal_a6a5d4fe8feaf4edf50197ae2779e558761aeb6b15a3f4ae8d4d1e7669c3e672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_25a157a4d948efe3b18cc44ecf82c0ef33fada2ccdfe3a01a0976da8935445be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a157a4d948efe3b18cc44ecf82c0ef33fada2ccdfe3a01a0976da8935445be->enter($__internal_25a157a4d948efe3b18cc44ecf82c0ef33fada2ccdfe3a01a0976da8935445be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_25a157a4d948efe3b18cc44ecf82c0ef33fada2ccdfe3a01a0976da8935445be->leave($__internal_25a157a4d948efe3b18cc44ecf82c0ef33fada2ccdfe3a01a0976da8935445be_prof);

        
        $__internal_a6a5d4fe8feaf4edf50197ae2779e558761aeb6b15a3f4ae8d4d1e7669c3e672->leave($__internal_a6a5d4fe8feaf4edf50197ae2779e558761aeb6b15a3f4ae8d4d1e7669c3e672_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_558c09a1721a6395c191e63512312cb3d29d1a65e497681dadf97049a3ce1fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558c09a1721a6395c191e63512312cb3d29d1a65e497681dadf97049a3ce1fa2->enter($__internal_558c09a1721a6395c191e63512312cb3d29d1a65e497681dadf97049a3ce1fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aaa52e6485b7ce518497009563783698ade946a12e9e63f1c61e653b5148c497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa52e6485b7ce518497009563783698ade946a12e9e63f1c61e653b5148c497->enter($__internal_aaa52e6485b7ce518497009563783698ade946a12e9e63f1c61e653b5148c497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_aaa52e6485b7ce518497009563783698ade946a12e9e63f1c61e653b5148c497->leave($__internal_aaa52e6485b7ce518497009563783698ade946a12e9e63f1c61e653b5148c497_prof);

        
        $__internal_558c09a1721a6395c191e63512312cb3d29d1a65e497681dadf97049a3ce1fa2->leave($__internal_558c09a1721a6395c191e63512312cb3d29d1a65e497681dadf97049a3ce1fa2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
