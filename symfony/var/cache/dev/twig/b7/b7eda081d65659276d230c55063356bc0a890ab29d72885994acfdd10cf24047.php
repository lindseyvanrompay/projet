<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ca8fc255f33090036ba3c118c531938dad1fb247c13dd55d90203c701ec32cbc extends Twig_Template
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
        $__internal_c2ab3894a5fb6dcd627a92418f0a2c74db379611217947b61dc621e5094708b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ab3894a5fb6dcd627a92418f0a2c74db379611217947b61dc621e5094708b6->enter($__internal_c2ab3894a5fb6dcd627a92418f0a2c74db379611217947b61dc621e5094708b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3d7d0fa68d4f48dfe5aa7ad01f6d045fccf0c4a633cc8992c48ef4de9576691b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7d0fa68d4f48dfe5aa7ad01f6d045fccf0c4a633cc8992c48ef4de9576691b->enter($__internal_3d7d0fa68d4f48dfe5aa7ad01f6d045fccf0c4a633cc8992c48ef4de9576691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_c2ab3894a5fb6dcd627a92418f0a2c74db379611217947b61dc621e5094708b6->leave($__internal_c2ab3894a5fb6dcd627a92418f0a2c74db379611217947b61dc621e5094708b6_prof);

        
        $__internal_3d7d0fa68d4f48dfe5aa7ad01f6d045fccf0c4a633cc8992c48ef4de9576691b->leave($__internal_3d7d0fa68d4f48dfe5aa7ad01f6d045fccf0c4a633cc8992c48ef4de9576691b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
