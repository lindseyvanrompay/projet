<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_016bb19a83dfd035e517a3e40ec8d5deb45c519aa68555e27e5f25f2e5221178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65a4c08045c0f7c99f7f2b06eef2cd0613afd9a5936f6264557982581bf18181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a4c08045c0f7c99f7f2b06eef2cd0613afd9a5936f6264557982581bf18181->enter($__internal_65a4c08045c0f7c99f7f2b06eef2cd0613afd9a5936f6264557982581bf18181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_82bfe9de59b9ddc5f18d930762f15e2b567bc91e454dfeb1c21884946edfdb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bfe9de59b9ddc5f18d930762f15e2b567bc91e454dfeb1c21884946edfdb89->enter($__internal_82bfe9de59b9ddc5f18d930762f15e2b567bc91e454dfeb1c21884946edfdb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65a4c08045c0f7c99f7f2b06eef2cd0613afd9a5936f6264557982581bf18181->leave($__internal_65a4c08045c0f7c99f7f2b06eef2cd0613afd9a5936f6264557982581bf18181_prof);

        
        $__internal_82bfe9de59b9ddc5f18d930762f15e2b567bc91e454dfeb1c21884946edfdb89->leave($__internal_82bfe9de59b9ddc5f18d930762f15e2b567bc91e454dfeb1c21884946edfdb89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6c7133d5bceaa58296e9e2a656508fc3c292505902ca9dd9c5185819d892288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c7133d5bceaa58296e9e2a656508fc3c292505902ca9dd9c5185819d892288->enter($__internal_d6c7133d5bceaa58296e9e2a656508fc3c292505902ca9dd9c5185819d892288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_723f1e375bfadad0cb9094d4b1c2159eef1e20490968dd7337ca7a8706e32083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723f1e375bfadad0cb9094d4b1c2159eef1e20490968dd7337ca7a8706e32083->enter($__internal_723f1e375bfadad0cb9094d4b1c2159eef1e20490968dd7337ca7a8706e32083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_723f1e375bfadad0cb9094d4b1c2159eef1e20490968dd7337ca7a8706e32083->leave($__internal_723f1e375bfadad0cb9094d4b1c2159eef1e20490968dd7337ca7a8706e32083_prof);

        
        $__internal_d6c7133d5bceaa58296e9e2a656508fc3c292505902ca9dd9c5185819d892288->leave($__internal_d6c7133d5bceaa58296e9e2a656508fc3c292505902ca9dd9c5185819d892288_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
