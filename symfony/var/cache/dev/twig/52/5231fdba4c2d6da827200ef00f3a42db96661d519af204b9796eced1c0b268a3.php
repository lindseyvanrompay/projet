<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b71c5ebdf6ef34780df0e86230da4b00d06de304332916481c09e30e49b94299 extends Twig_Template
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
        $__internal_b99c1fcabbf828c0b62525ae854bd3f8bc6b4e801c7e5e6688d78055e95f6190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99c1fcabbf828c0b62525ae854bd3f8bc6b4e801c7e5e6688d78055e95f6190->enter($__internal_b99c1fcabbf828c0b62525ae854bd3f8bc6b4e801c7e5e6688d78055e95f6190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_17f16368fe56c5b269cdcdfe14c36a6ac771cebec506fc7b72610d4b857c4b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f16368fe56c5b269cdcdfe14c36a6ac771cebec506fc7b72610d4b857c4b53->enter($__internal_17f16368fe56c5b269cdcdfe14c36a6ac771cebec506fc7b72610d4b857c4b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b99c1fcabbf828c0b62525ae854bd3f8bc6b4e801c7e5e6688d78055e95f6190->leave($__internal_b99c1fcabbf828c0b62525ae854bd3f8bc6b4e801c7e5e6688d78055e95f6190_prof);

        
        $__internal_17f16368fe56c5b269cdcdfe14c36a6ac771cebec506fc7b72610d4b857c4b53->leave($__internal_17f16368fe56c5b269cdcdfe14c36a6ac771cebec506fc7b72610d4b857c4b53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
