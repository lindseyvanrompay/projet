<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_fcb83a124fe54d98d3aa72355cfc610a9fdf31027c4b99b9ed6a44276b712ff9 extends Twig_Template
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
        $__internal_1e5386557354fae3078c26c9e522d90831817c965e8555edf888900ebf42dd34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5386557354fae3078c26c9e522d90831817c965e8555edf888900ebf42dd34->enter($__internal_1e5386557354fae3078c26c9e522d90831817c965e8555edf888900ebf42dd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7ad867a90858536144cf615c9cd608502c1c85b5b0ccebadeec1c877464a8968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad867a90858536144cf615c9cd608502c1c85b5b0ccebadeec1c877464a8968->enter($__internal_7ad867a90858536144cf615c9cd608502c1c85b5b0ccebadeec1c877464a8968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1e5386557354fae3078c26c9e522d90831817c965e8555edf888900ebf42dd34->leave($__internal_1e5386557354fae3078c26c9e522d90831817c965e8555edf888900ebf42dd34_prof);

        
        $__internal_7ad867a90858536144cf615c9cd608502c1c85b5b0ccebadeec1c877464a8968->leave($__internal_7ad867a90858536144cf615c9cd608502c1c85b5b0ccebadeec1c877464a8968_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
