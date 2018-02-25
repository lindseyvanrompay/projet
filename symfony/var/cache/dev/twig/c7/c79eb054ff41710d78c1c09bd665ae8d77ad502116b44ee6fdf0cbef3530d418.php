<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2650f7868d7b63be8757c68fff1a0b832bdcaa09bfc589854dc43d467004dae8 extends Twig_Template
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
        $__internal_e09985114b795b269b2b5c518e28c380bd3410616f1b4b732665f656499d9b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09985114b795b269b2b5c518e28c380bd3410616f1b4b732665f656499d9b06->enter($__internal_e09985114b795b269b2b5c518e28c380bd3410616f1b4b732665f656499d9b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ae5b927ab740a08b5f8b65d75df92a5be85f1aa7a70006d551bd9aa5f8550271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5b927ab740a08b5f8b65d75df92a5be85f1aa7a70006d551bd9aa5f8550271->enter($__internal_ae5b927ab740a08b5f8b65d75df92a5be85f1aa7a70006d551bd9aa5f8550271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e09985114b795b269b2b5c518e28c380bd3410616f1b4b732665f656499d9b06->leave($__internal_e09985114b795b269b2b5c518e28c380bd3410616f1b4b732665f656499d9b06_prof);

        
        $__internal_ae5b927ab740a08b5f8b65d75df92a5be85f1aa7a70006d551bd9aa5f8550271->leave($__internal_ae5b927ab740a08b5f8b65d75df92a5be85f1aa7a70006d551bd9aa5f8550271_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
