<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0fc0dae6b0b083b31374c6a67c8c65d95189baac80f42c99bcac6c4e37238d97 extends Twig_Template
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
        $__internal_f801ac9c02def5e52d06864113cd28acfc96e863b0c14088f5e3dd3cf73e26bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f801ac9c02def5e52d06864113cd28acfc96e863b0c14088f5e3dd3cf73e26bf->enter($__internal_f801ac9c02def5e52d06864113cd28acfc96e863b0c14088f5e3dd3cf73e26bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5435a13a21a62f46ffbb02632e8490d19bbae64fc27eebb9fb4b9ef0ff773eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5435a13a21a62f46ffbb02632e8490d19bbae64fc27eebb9fb4b9ef0ff773eef->enter($__internal_5435a13a21a62f46ffbb02632e8490d19bbae64fc27eebb9fb4b9ef0ff773eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f801ac9c02def5e52d06864113cd28acfc96e863b0c14088f5e3dd3cf73e26bf->leave($__internal_f801ac9c02def5e52d06864113cd28acfc96e863b0c14088f5e3dd3cf73e26bf_prof);

        
        $__internal_5435a13a21a62f46ffbb02632e8490d19bbae64fc27eebb9fb4b9ef0ff773eef->leave($__internal_5435a13a21a62f46ffbb02632e8490d19bbae64fc27eebb9fb4b9ef0ff773eef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
