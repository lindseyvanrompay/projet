<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_de4e6a2f3e909fc770ea70adc1fa0c2a11c66a2901c501bd973393230476d3d6 extends Twig_Template
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
        $__internal_81f2ea9f3e5d8bdf18b058df332d36b696f59c6170c7735c6fe5d6a8dbc3fec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f2ea9f3e5d8bdf18b058df332d36b696f59c6170c7735c6fe5d6a8dbc3fec1->enter($__internal_81f2ea9f3e5d8bdf18b058df332d36b696f59c6170c7735c6fe5d6a8dbc3fec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c6fc18cb6f7f837bc0a85ad2cb85e66fe131bf86f639ee12a818e6c43cca9de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fc18cb6f7f837bc0a85ad2cb85e66fe131bf86f639ee12a818e6c43cca9de2->enter($__internal_c6fc18cb6f7f837bc0a85ad2cb85e66fe131bf86f639ee12a818e6c43cca9de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_81f2ea9f3e5d8bdf18b058df332d36b696f59c6170c7735c6fe5d6a8dbc3fec1->leave($__internal_81f2ea9f3e5d8bdf18b058df332d36b696f59c6170c7735c6fe5d6a8dbc3fec1_prof);

        
        $__internal_c6fc18cb6f7f837bc0a85ad2cb85e66fe131bf86f639ee12a818e6c43cca9de2->leave($__internal_c6fc18cb6f7f837bc0a85ad2cb85e66fe131bf86f639ee12a818e6c43cca9de2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
