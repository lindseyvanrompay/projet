<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e1306f60cb0e0f8e3506486c7ca69e24a1315d63966ec6032fc5ba29bf1b007a extends Twig_Template
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
        $__internal_3fdb35c0ade0f89547d370f2828e010dd1ba35b6aa66b6142007dd7635b85cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdb35c0ade0f89547d370f2828e010dd1ba35b6aa66b6142007dd7635b85cdd->enter($__internal_3fdb35c0ade0f89547d370f2828e010dd1ba35b6aa66b6142007dd7635b85cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b48e83b24675ae5296d22dd7d5b46893115aff50dec36bb566261055f5e04ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48e83b24675ae5296d22dd7d5b46893115aff50dec36bb566261055f5e04ba2->enter($__internal_b48e83b24675ae5296d22dd7d5b46893115aff50dec36bb566261055f5e04ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3fdb35c0ade0f89547d370f2828e010dd1ba35b6aa66b6142007dd7635b85cdd->leave($__internal_3fdb35c0ade0f89547d370f2828e010dd1ba35b6aa66b6142007dd7635b85cdd_prof);

        
        $__internal_b48e83b24675ae5296d22dd7d5b46893115aff50dec36bb566261055f5e04ba2->leave($__internal_b48e83b24675ae5296d22dd7d5b46893115aff50dec36bb566261055f5e04ba2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
