<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5d397d226577eb5b321503a85aad5fcd58238d9a8c20fa92b217b33f79b36cfa extends Twig_Template
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
        $__internal_3527e387c9604a9e172b65dc5225fb605f79a493010ff12d58e2e1c550d1aecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3527e387c9604a9e172b65dc5225fb605f79a493010ff12d58e2e1c550d1aecc->enter($__internal_3527e387c9604a9e172b65dc5225fb605f79a493010ff12d58e2e1c550d1aecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_87fcdc73a99bb9f5d07292a5443005cf8307e3313f66560fab26b64ad41b3a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fcdc73a99bb9f5d07292a5443005cf8307e3313f66560fab26b64ad41b3a19->enter($__internal_87fcdc73a99bb9f5d07292a5443005cf8307e3313f66560fab26b64ad41b3a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_3527e387c9604a9e172b65dc5225fb605f79a493010ff12d58e2e1c550d1aecc->leave($__internal_3527e387c9604a9e172b65dc5225fb605f79a493010ff12d58e2e1c550d1aecc_prof);

        
        $__internal_87fcdc73a99bb9f5d07292a5443005cf8307e3313f66560fab26b64ad41b3a19->leave($__internal_87fcdc73a99bb9f5d07292a5443005cf8307e3313f66560fab26b64ad41b3a19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
