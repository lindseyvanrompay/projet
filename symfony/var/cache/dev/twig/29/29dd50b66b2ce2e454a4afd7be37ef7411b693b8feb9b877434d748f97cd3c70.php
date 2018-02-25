<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_884b5b12c30174f72c33b0bb530f05bea55a71bfeddf2fa8331e41adb8bb8327 extends Twig_Template
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
        $__internal_67b61fbcf2f2c3cd567be02dbc81c366fdfcff8a47dd1e8e896cc148bf5642f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b61fbcf2f2c3cd567be02dbc81c366fdfcff8a47dd1e8e896cc148bf5642f3->enter($__internal_67b61fbcf2f2c3cd567be02dbc81c366fdfcff8a47dd1e8e896cc148bf5642f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8de3c8844bcb6f106b48e3b62c1d5a84200cc3385cf4cf6a2ebcc4ed6825ac74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de3c8844bcb6f106b48e3b62c1d5a84200cc3385cf4cf6a2ebcc4ed6825ac74->enter($__internal_8de3c8844bcb6f106b48e3b62c1d5a84200cc3385cf4cf6a2ebcc4ed6825ac74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_67b61fbcf2f2c3cd567be02dbc81c366fdfcff8a47dd1e8e896cc148bf5642f3->leave($__internal_67b61fbcf2f2c3cd567be02dbc81c366fdfcff8a47dd1e8e896cc148bf5642f3_prof);

        
        $__internal_8de3c8844bcb6f106b48e3b62c1d5a84200cc3385cf4cf6a2ebcc4ed6825ac74->leave($__internal_8de3c8844bcb6f106b48e3b62c1d5a84200cc3385cf4cf6a2ebcc4ed6825ac74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
