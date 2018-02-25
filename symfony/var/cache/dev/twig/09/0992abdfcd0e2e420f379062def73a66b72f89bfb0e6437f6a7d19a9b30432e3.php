<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5ce649d1a7a1993a0eedebac862978dce5a1f8e9e930f7c8a3c856c0e77ba078 extends Twig_Template
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
        $__internal_376d0cd8826d7411e74c12a5915c14d9c7f9404e7f7be4637af6e56d835b5c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376d0cd8826d7411e74c12a5915c14d9c7f9404e7f7be4637af6e56d835b5c91->enter($__internal_376d0cd8826d7411e74c12a5915c14d9c7f9404e7f7be4637af6e56d835b5c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e34b21414040e939e688d514060be2fd2e4974ed2ef3d0017e66cce3f6b2d688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34b21414040e939e688d514060be2fd2e4974ed2ef3d0017e66cce3f6b2d688->enter($__internal_e34b21414040e939e688d514060be2fd2e4974ed2ef3d0017e66cce3f6b2d688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_376d0cd8826d7411e74c12a5915c14d9c7f9404e7f7be4637af6e56d835b5c91->leave($__internal_376d0cd8826d7411e74c12a5915c14d9c7f9404e7f7be4637af6e56d835b5c91_prof);

        
        $__internal_e34b21414040e939e688d514060be2fd2e4974ed2ef3d0017e66cce3f6b2d688->leave($__internal_e34b21414040e939e688d514060be2fd2e4974ed2ef3d0017e66cce3f6b2d688_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
