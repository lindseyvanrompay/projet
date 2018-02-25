<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ed65591611e7bdc3f871319f694f5b094498dc87ad0adcc95241f0ac23c337fe extends Twig_Template
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
        $__internal_a110775b6766cd42aca2336a34bedf2c9ccd4fcd008e6f744d84a6c19655c52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a110775b6766cd42aca2336a34bedf2c9ccd4fcd008e6f744d84a6c19655c52f->enter($__internal_a110775b6766cd42aca2336a34bedf2c9ccd4fcd008e6f744d84a6c19655c52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b654b373752da3c864eed415468b4168eafdc3314d0fbee712292bd0a28d4b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b654b373752da3c864eed415468b4168eafdc3314d0fbee712292bd0a28d4b09->enter($__internal_b654b373752da3c864eed415468b4168eafdc3314d0fbee712292bd0a28d4b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a110775b6766cd42aca2336a34bedf2c9ccd4fcd008e6f744d84a6c19655c52f->leave($__internal_a110775b6766cd42aca2336a34bedf2c9ccd4fcd008e6f744d84a6c19655c52f_prof);

        
        $__internal_b654b373752da3c864eed415468b4168eafdc3314d0fbee712292bd0a28d4b09->leave($__internal_b654b373752da3c864eed415468b4168eafdc3314d0fbee712292bd0a28d4b09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
