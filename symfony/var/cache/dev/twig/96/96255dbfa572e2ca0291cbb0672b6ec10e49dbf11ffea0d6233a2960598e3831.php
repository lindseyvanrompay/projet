<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ab0a908f1fc8b5322d87540b982c15ba2f3ab44c279b4f09bad57ba65be41805 extends Twig_Template
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
        $__internal_cc43be290dd75374082ab4d1eeafcd0a2cbb5107ea4c091c5cab27fa2e0d75cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc43be290dd75374082ab4d1eeafcd0a2cbb5107ea4c091c5cab27fa2e0d75cb->enter($__internal_cc43be290dd75374082ab4d1eeafcd0a2cbb5107ea4c091c5cab27fa2e0d75cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8d4cc64fea899be0d71927c3b10db9ac8beb350276e4e92fadb9a6e363006d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4cc64fea899be0d71927c3b10db9ac8beb350276e4e92fadb9a6e363006d31->enter($__internal_8d4cc64fea899be0d71927c3b10db9ac8beb350276e4e92fadb9a6e363006d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cc43be290dd75374082ab4d1eeafcd0a2cbb5107ea4c091c5cab27fa2e0d75cb->leave($__internal_cc43be290dd75374082ab4d1eeafcd0a2cbb5107ea4c091c5cab27fa2e0d75cb_prof);

        
        $__internal_8d4cc64fea899be0d71927c3b10db9ac8beb350276e4e92fadb9a6e363006d31->leave($__internal_8d4cc64fea899be0d71927c3b10db9ac8beb350276e4e92fadb9a6e363006d31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
