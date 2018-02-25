<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0c06d56bb5ad927f860154cae9330bce134aa21fed6034780e74f5a2d5848db1 extends Twig_Template
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
        $__internal_f8afafda3ee6cac5226034bfb1d9dddb74c1b8477d5fe31d5d48895c20aec86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8afafda3ee6cac5226034bfb1d9dddb74c1b8477d5fe31d5d48895c20aec86c->enter($__internal_f8afafda3ee6cac5226034bfb1d9dddb74c1b8477d5fe31d5d48895c20aec86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b05e7cfb25bb9751801488be08c207e58c338e67d2a9d98831069a4526abfe8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05e7cfb25bb9751801488be08c207e58c338e67d2a9d98831069a4526abfe8a->enter($__internal_b05e7cfb25bb9751801488be08c207e58c338e67d2a9d98831069a4526abfe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8afafda3ee6cac5226034bfb1d9dddb74c1b8477d5fe31d5d48895c20aec86c->leave($__internal_f8afafda3ee6cac5226034bfb1d9dddb74c1b8477d5fe31d5d48895c20aec86c_prof);

        
        $__internal_b05e7cfb25bb9751801488be08c207e58c338e67d2a9d98831069a4526abfe8a->leave($__internal_b05e7cfb25bb9751801488be08c207e58c338e67d2a9d98831069a4526abfe8a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e1208c3f1bf5c2fe4e62ceea9aed4778d076e62161c397ea0dde18ed71be3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1208c3f1bf5c2fe4e62ceea9aed4778d076e62161c397ea0dde18ed71be3f9->enter($__internal_6e1208c3f1bf5c2fe4e62ceea9aed4778d076e62161c397ea0dde18ed71be3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a49f410af9d66c03b3dd875c086cce3c78f870d0561c3d4490dcf3b7bf17d83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49f410af9d66c03b3dd875c086cce3c78f870d0561c3d4490dcf3b7bf17d83f->enter($__internal_a49f410af9d66c03b3dd875c086cce3c78f870d0561c3d4490dcf3b7bf17d83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a49f410af9d66c03b3dd875c086cce3c78f870d0561c3d4490dcf3b7bf17d83f->leave($__internal_a49f410af9d66c03b3dd875c086cce3c78f870d0561c3d4490dcf3b7bf17d83f_prof);

        
        $__internal_6e1208c3f1bf5c2fe4e62ceea9aed4778d076e62161c397ea0dde18ed71be3f9->leave($__internal_6e1208c3f1bf5c2fe4e62ceea9aed4778d076e62161c397ea0dde18ed71be3f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d88b3e9a1a7b9c0e151c78b2c0c3adf7b5061a1c12035559c6368030e38968b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88b3e9a1a7b9c0e151c78b2c0c3adf7b5061a1c12035559c6368030e38968b1->enter($__internal_d88b3e9a1a7b9c0e151c78b2c0c3adf7b5061a1c12035559c6368030e38968b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e43e8d71c2f6f63fd2a4eeeb8375007bf6e41c1dbf0951fe4d282221c63b9d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43e8d71c2f6f63fd2a4eeeb8375007bf6e41c1dbf0951fe4d282221c63b9d86->enter($__internal_e43e8d71c2f6f63fd2a4eeeb8375007bf6e41c1dbf0951fe4d282221c63b9d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e43e8d71c2f6f63fd2a4eeeb8375007bf6e41c1dbf0951fe4d282221c63b9d86->leave($__internal_e43e8d71c2f6f63fd2a4eeeb8375007bf6e41c1dbf0951fe4d282221c63b9d86_prof);

        
        $__internal_d88b3e9a1a7b9c0e151c78b2c0c3adf7b5061a1c12035559c6368030e38968b1->leave($__internal_d88b3e9a1a7b9c0e151c78b2c0c3adf7b5061a1c12035559c6368030e38968b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0430b0f60a6a51840f916a0665792ac3ca2317e69a3e22f6c8663c11578b804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0430b0f60a6a51840f916a0665792ac3ca2317e69a3e22f6c8663c11578b804->enter($__internal_e0430b0f60a6a51840f916a0665792ac3ca2317e69a3e22f6c8663c11578b804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9806afb1905bb8d6ee8bbbde9201bb85a995a447a5ed7784cff7c673a082d33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9806afb1905bb8d6ee8bbbde9201bb85a995a447a5ed7784cff7c673a082d33a->enter($__internal_9806afb1905bb8d6ee8bbbde9201bb85a995a447a5ed7784cff7c673a082d33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9806afb1905bb8d6ee8bbbde9201bb85a995a447a5ed7784cff7c673a082d33a->leave($__internal_9806afb1905bb8d6ee8bbbde9201bb85a995a447a5ed7784cff7c673a082d33a_prof);

        
        $__internal_e0430b0f60a6a51840f916a0665792ac3ca2317e69a3e22f6c8663c11578b804->leave($__internal_e0430b0f60a6a51840f916a0665792ac3ca2317e69a3e22f6c8663c11578b804_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
