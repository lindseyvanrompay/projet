<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_96c87eddaf7e591ff13f338a5d4ed085779bdb59a07d291b0206718ee5c5ad88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c457252e6ce7f0ec5e1e4969b2ce5bb3d147dc4e9a506261de7c6e40feee0b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c457252e6ce7f0ec5e1e4969b2ce5bb3d147dc4e9a506261de7c6e40feee0b7d->enter($__internal_c457252e6ce7f0ec5e1e4969b2ce5bb3d147dc4e9a506261de7c6e40feee0b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_16369b7bccdb69cb708cccefc05f30e1cfab7b3d2c057d94a07c27ea67a79de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16369b7bccdb69cb708cccefc05f30e1cfab7b3d2c057d94a07c27ea67a79de9->enter($__internal_16369b7bccdb69cb708cccefc05f30e1cfab7b3d2c057d94a07c27ea67a79de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c457252e6ce7f0ec5e1e4969b2ce5bb3d147dc4e9a506261de7c6e40feee0b7d->leave($__internal_c457252e6ce7f0ec5e1e4969b2ce5bb3d147dc4e9a506261de7c6e40feee0b7d_prof);

        
        $__internal_16369b7bccdb69cb708cccefc05f30e1cfab7b3d2c057d94a07c27ea67a79de9->leave($__internal_16369b7bccdb69cb708cccefc05f30e1cfab7b3d2c057d94a07c27ea67a79de9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
