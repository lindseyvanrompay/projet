<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_187fb4c9680875f2c5e6659b6f863716c0eff833b3334b0819b76f1b0ec66c68 extends Twig_Template
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
        $__internal_bccb58a26837c454260aa3ccf2be30696aa0aa106183b2d312add07753982e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccb58a26837c454260aa3ccf2be30696aa0aa106183b2d312add07753982e53->enter($__internal_bccb58a26837c454260aa3ccf2be30696aa0aa106183b2d312add07753982e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a8c7c8203b32b3a6accc97e530d450be95f1fe863091ba93e88abf7f648354cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c7c8203b32b3a6accc97e530d450be95f1fe863091ba93e88abf7f648354cc->enter($__internal_a8c7c8203b32b3a6accc97e530d450be95f1fe863091ba93e88abf7f648354cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bccb58a26837c454260aa3ccf2be30696aa0aa106183b2d312add07753982e53->leave($__internal_bccb58a26837c454260aa3ccf2be30696aa0aa106183b2d312add07753982e53_prof);

        
        $__internal_a8c7c8203b32b3a6accc97e530d450be95f1fe863091ba93e88abf7f648354cc->leave($__internal_a8c7c8203b32b3a6accc97e530d450be95f1fe863091ba93e88abf7f648354cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
