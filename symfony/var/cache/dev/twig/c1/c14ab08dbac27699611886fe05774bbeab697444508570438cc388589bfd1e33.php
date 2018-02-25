<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_78b4f932959e7cd77065f1fe2770b6c1b1c5377c94a36b7fafa245e3785c9fee extends Twig_Template
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
        $__internal_0c21d11125a6b1c28acbd4014c8c2e5908e26d4d56eb5b86f66c1b8869214765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c21d11125a6b1c28acbd4014c8c2e5908e26d4d56eb5b86f66c1b8869214765->enter($__internal_0c21d11125a6b1c28acbd4014c8c2e5908e26d4d56eb5b86f66c1b8869214765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4975da23068a2ab1e2d364fd9d38b618bf2b9bb6656c7fd25e67126f08736f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4975da23068a2ab1e2d364fd9d38b618bf2b9bb6656c7fd25e67126f08736f55->enter($__internal_4975da23068a2ab1e2d364fd9d38b618bf2b9bb6656c7fd25e67126f08736f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0c21d11125a6b1c28acbd4014c8c2e5908e26d4d56eb5b86f66c1b8869214765->leave($__internal_0c21d11125a6b1c28acbd4014c8c2e5908e26d4d56eb5b86f66c1b8869214765_prof);

        
        $__internal_4975da23068a2ab1e2d364fd9d38b618bf2b9bb6656c7fd25e67126f08736f55->leave($__internal_4975da23068a2ab1e2d364fd9d38b618bf2b9bb6656c7fd25e67126f08736f55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
