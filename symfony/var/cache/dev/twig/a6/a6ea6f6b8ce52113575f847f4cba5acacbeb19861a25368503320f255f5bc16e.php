<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_898dcc5522522db4cbea1d0b381bb952a208d2c9f990e37cb59e13ce2654e30c extends Twig_Template
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
        $__internal_2fe7caf73f046b459d8e06876b5cd3d4ae9051dd607fad5342962e380ffbe213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe7caf73f046b459d8e06876b5cd3d4ae9051dd607fad5342962e380ffbe213->enter($__internal_2fe7caf73f046b459d8e06876b5cd3d4ae9051dd607fad5342962e380ffbe213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_be01f2d3f287c479a2bfd7e5f8392166e28536b38b11008e993b72b92e602218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be01f2d3f287c479a2bfd7e5f8392166e28536b38b11008e993b72b92e602218->enter($__internal_be01f2d3f287c479a2bfd7e5f8392166e28536b38b11008e993b72b92e602218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2fe7caf73f046b459d8e06876b5cd3d4ae9051dd607fad5342962e380ffbe213->leave($__internal_2fe7caf73f046b459d8e06876b5cd3d4ae9051dd607fad5342962e380ffbe213_prof);

        
        $__internal_be01f2d3f287c479a2bfd7e5f8392166e28536b38b11008e993b72b92e602218->leave($__internal_be01f2d3f287c479a2bfd7e5f8392166e28536b38b11008e993b72b92e602218_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
