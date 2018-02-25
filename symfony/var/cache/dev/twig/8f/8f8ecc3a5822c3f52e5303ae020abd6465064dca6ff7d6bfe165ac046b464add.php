<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2a8aa49033f8daeac5f378f8b13d7b3637a4ec08a207337c6609037b28814d57 extends Twig_Template
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
        $__internal_2e54092d0c8ef742ab1968ce10eeedd3aaaa30b55be70abbace47007824ae0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e54092d0c8ef742ab1968ce10eeedd3aaaa30b55be70abbace47007824ae0d2->enter($__internal_2e54092d0c8ef742ab1968ce10eeedd3aaaa30b55be70abbace47007824ae0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f964218cdf24c36b4e86cc34b54a99c98d55241d03d7f925598d399bd9b1ba87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f964218cdf24c36b4e86cc34b54a99c98d55241d03d7f925598d399bd9b1ba87->enter($__internal_f964218cdf24c36b4e86cc34b54a99c98d55241d03d7f925598d399bd9b1ba87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2e54092d0c8ef742ab1968ce10eeedd3aaaa30b55be70abbace47007824ae0d2->leave($__internal_2e54092d0c8ef742ab1968ce10eeedd3aaaa30b55be70abbace47007824ae0d2_prof);

        
        $__internal_f964218cdf24c36b4e86cc34b54a99c98d55241d03d7f925598d399bd9b1ba87->leave($__internal_f964218cdf24c36b4e86cc34b54a99c98d55241d03d7f925598d399bd9b1ba87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
