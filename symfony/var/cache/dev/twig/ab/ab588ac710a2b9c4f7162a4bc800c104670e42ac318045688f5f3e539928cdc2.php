<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eafcbdeefd905f8110ae7893e793eec82c3e00d2c70f441e7e14729e66647293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cef5f6b903d5397c4a5980d883263b14e03e8c01c3d8097802abc824f8bfe15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef5f6b903d5397c4a5980d883263b14e03e8c01c3d8097802abc824f8bfe15b->enter($__internal_cef5f6b903d5397c4a5980d883263b14e03e8c01c3d8097802abc824f8bfe15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fb3d6b575e08ddb079bc6536ab17f5a617ea03dbb5e4199c03e5586d6d567101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3d6b575e08ddb079bc6536ab17f5a617ea03dbb5e4199c03e5586d6d567101->enter($__internal_fb3d6b575e08ddb079bc6536ab17f5a617ea03dbb5e4199c03e5586d6d567101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cef5f6b903d5397c4a5980d883263b14e03e8c01c3d8097802abc824f8bfe15b->leave($__internal_cef5f6b903d5397c4a5980d883263b14e03e8c01c3d8097802abc824f8bfe15b_prof);

        
        $__internal_fb3d6b575e08ddb079bc6536ab17f5a617ea03dbb5e4199c03e5586d6d567101->leave($__internal_fb3d6b575e08ddb079bc6536ab17f5a617ea03dbb5e4199c03e5586d6d567101_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_add5514b249d0e087d4a9ce74c60aad940c4b7df344bfc9e00778629090d7b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add5514b249d0e087d4a9ce74c60aad940c4b7df344bfc9e00778629090d7b8d->enter($__internal_add5514b249d0e087d4a9ce74c60aad940c4b7df344bfc9e00778629090d7b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2ca2f3bd763f583cf1ecc0578b4aec9760067964821d7c25002195e79389a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ca2f3bd763f583cf1ecc0578b4aec9760067964821d7c25002195e79389a70->enter($__internal_b2ca2f3bd763f583cf1ecc0578b4aec9760067964821d7c25002195e79389a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b2ca2f3bd763f583cf1ecc0578b4aec9760067964821d7c25002195e79389a70->leave($__internal_b2ca2f3bd763f583cf1ecc0578b4aec9760067964821d7c25002195e79389a70_prof);

        
        $__internal_add5514b249d0e087d4a9ce74c60aad940c4b7df344bfc9e00778629090d7b8d->leave($__internal_add5514b249d0e087d4a9ce74c60aad940c4b7df344bfc9e00778629090d7b8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97ce367bcd382a1f8e510c0613d80e0465f5654a80e43e6fa48135244ac01eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ce367bcd382a1f8e510c0613d80e0465f5654a80e43e6fa48135244ac01eba->enter($__internal_97ce367bcd382a1f8e510c0613d80e0465f5654a80e43e6fa48135244ac01eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c386edb93b6483e5b2700eecac6dbbea70a5918545852c938a5c7d04d88fc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c386edb93b6483e5b2700eecac6dbbea70a5918545852c938a5c7d04d88fc9c->enter($__internal_1c386edb93b6483e5b2700eecac6dbbea70a5918545852c938a5c7d04d88fc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1c386edb93b6483e5b2700eecac6dbbea70a5918545852c938a5c7d04d88fc9c->leave($__internal_1c386edb93b6483e5b2700eecac6dbbea70a5918545852c938a5c7d04d88fc9c_prof);

        
        $__internal_97ce367bcd382a1f8e510c0613d80e0465f5654a80e43e6fa48135244ac01eba->leave($__internal_97ce367bcd382a1f8e510c0613d80e0465f5654a80e43e6fa48135244ac01eba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
