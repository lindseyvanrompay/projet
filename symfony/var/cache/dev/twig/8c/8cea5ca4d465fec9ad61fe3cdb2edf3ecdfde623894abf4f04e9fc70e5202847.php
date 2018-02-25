<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_954a30ea721dc897c5751f546792621b07124c04580dbb44f86d3877f2dc0e18 extends Twig_Template
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
        $__internal_52343da87e17929edbcc68ebf25175b98a645e26b334146734e47e2bda8a9094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52343da87e17929edbcc68ebf25175b98a645e26b334146734e47e2bda8a9094->enter($__internal_52343da87e17929edbcc68ebf25175b98a645e26b334146734e47e2bda8a9094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_76f8fda761824e54b63833aa397dafccb036256bceb3e315a3c457edc01b6c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f8fda761824e54b63833aa397dafccb036256bceb3e315a3c457edc01b6c1c->enter($__internal_76f8fda761824e54b63833aa397dafccb036256bceb3e315a3c457edc01b6c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_52343da87e17929edbcc68ebf25175b98a645e26b334146734e47e2bda8a9094->leave($__internal_52343da87e17929edbcc68ebf25175b98a645e26b334146734e47e2bda8a9094_prof);

        
        $__internal_76f8fda761824e54b63833aa397dafccb036256bceb3e315a3c457edc01b6c1c->leave($__internal_76f8fda761824e54b63833aa397dafccb036256bceb3e315a3c457edc01b6c1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
