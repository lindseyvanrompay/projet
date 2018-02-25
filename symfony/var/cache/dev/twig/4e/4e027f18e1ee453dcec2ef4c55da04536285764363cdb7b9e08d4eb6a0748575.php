<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bd9ecad27b1822341317cb2bb3ceff30dab9e1a151d725f4a642a02d0b47d902 extends Twig_Template
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
        $__internal_dfc1a9cc13ea7ebd0460e5e28e7ca43283d0e938b7ec122400119f66d40b119c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc1a9cc13ea7ebd0460e5e28e7ca43283d0e938b7ec122400119f66d40b119c->enter($__internal_dfc1a9cc13ea7ebd0460e5e28e7ca43283d0e938b7ec122400119f66d40b119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8d362f0649c0195ebf29347471d9ffb87f4aa6fc950c693e229b4adf7c8bfe12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d362f0649c0195ebf29347471d9ffb87f4aa6fc950c693e229b4adf7c8bfe12->enter($__internal_8d362f0649c0195ebf29347471d9ffb87f4aa6fc950c693e229b4adf7c8bfe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dfc1a9cc13ea7ebd0460e5e28e7ca43283d0e938b7ec122400119f66d40b119c->leave($__internal_dfc1a9cc13ea7ebd0460e5e28e7ca43283d0e938b7ec122400119f66d40b119c_prof);

        
        $__internal_8d362f0649c0195ebf29347471d9ffb87f4aa6fc950c693e229b4adf7c8bfe12->leave($__internal_8d362f0649c0195ebf29347471d9ffb87f4aa6fc950c693e229b4adf7c8bfe12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
