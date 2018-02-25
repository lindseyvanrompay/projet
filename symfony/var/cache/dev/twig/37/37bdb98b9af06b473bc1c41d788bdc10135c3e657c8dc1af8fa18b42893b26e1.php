<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ae6ed1c19dca3a38ad09c19c588a4ba1ca8c644a4aafb90be04abb9f7f7f0f77 extends Twig_Template
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
        $__internal_d25d48faa8a85ca3dfbab03d47c2231f89a97e42f9c2d2c8c22c13232a3d704a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25d48faa8a85ca3dfbab03d47c2231f89a97e42f9c2d2c8c22c13232a3d704a->enter($__internal_d25d48faa8a85ca3dfbab03d47c2231f89a97e42f9c2d2c8c22c13232a3d704a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_78c2eaf9e2d51c5a2f10c29c3f1310adc9fed046dd0b550f3af1cb7f94c18a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c2eaf9e2d51c5a2f10c29c3f1310adc9fed046dd0b550f3af1cb7f94c18a21->enter($__internal_78c2eaf9e2d51c5a2f10c29c3f1310adc9fed046dd0b550f3af1cb7f94c18a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d25d48faa8a85ca3dfbab03d47c2231f89a97e42f9c2d2c8c22c13232a3d704a->leave($__internal_d25d48faa8a85ca3dfbab03d47c2231f89a97e42f9c2d2c8c22c13232a3d704a_prof);

        
        $__internal_78c2eaf9e2d51c5a2f10c29c3f1310adc9fed046dd0b550f3af1cb7f94c18a21->leave($__internal_78c2eaf9e2d51c5a2f10c29c3f1310adc9fed046dd0b550f3af1cb7f94c18a21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
