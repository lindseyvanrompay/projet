<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_32c211dc657a1d4bca5bf4aad951ef3887fad061053f732f9a508fcc22ab5a99 extends Twig_Template
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
        $__internal_f3913986263b8de4321b491ffbe91eb3c2049d0523af850b5095c86c51e522d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3913986263b8de4321b491ffbe91eb3c2049d0523af850b5095c86c51e522d6->enter($__internal_f3913986263b8de4321b491ffbe91eb3c2049d0523af850b5095c86c51e522d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3e31dfeaf2da73ad5aec9d21f88fa9e043f6e6663b7287f5909c6569eb5cbaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e31dfeaf2da73ad5aec9d21f88fa9e043f6e6663b7287f5909c6569eb5cbaa9->enter($__internal_3e31dfeaf2da73ad5aec9d21f88fa9e043f6e6663b7287f5909c6569eb5cbaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f3913986263b8de4321b491ffbe91eb3c2049d0523af850b5095c86c51e522d6->leave($__internal_f3913986263b8de4321b491ffbe91eb3c2049d0523af850b5095c86c51e522d6_prof);

        
        $__internal_3e31dfeaf2da73ad5aec9d21f88fa9e043f6e6663b7287f5909c6569eb5cbaa9->leave($__internal_3e31dfeaf2da73ad5aec9d21f88fa9e043f6e6663b7287f5909c6569eb5cbaa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
