<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c6c1d897c92b33f0b627d4974806941c19a8adc6ac12c9fb2ee126d0415f63d4 extends Twig_Template
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
        $__internal_299ddc24e682de5288468b89695922d955562526dff8dd9b38e9313377db041c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299ddc24e682de5288468b89695922d955562526dff8dd9b38e9313377db041c->enter($__internal_299ddc24e682de5288468b89695922d955562526dff8dd9b38e9313377db041c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c5653d619f202174352205d371c7b4677012b905ce809a2d43f2dc548e294e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5653d619f202174352205d371c7b4677012b905ce809a2d43f2dc548e294e09->enter($__internal_c5653d619f202174352205d371c7b4677012b905ce809a2d43f2dc548e294e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_299ddc24e682de5288468b89695922d955562526dff8dd9b38e9313377db041c->leave($__internal_299ddc24e682de5288468b89695922d955562526dff8dd9b38e9313377db041c_prof);

        
        $__internal_c5653d619f202174352205d371c7b4677012b905ce809a2d43f2dc548e294e09->leave($__internal_c5653d619f202174352205d371c7b4677012b905ce809a2d43f2dc548e294e09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
