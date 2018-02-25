<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_fc5c68e340b1623762ec5eca82a55796b760f69edc70b8900c0edad5a33a6b80 extends Twig_Template
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
        $__internal_149b6344f5ba1b97802f7137aaa5f741c06c976701bf229dd1a5a346b9becef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149b6344f5ba1b97802f7137aaa5f741c06c976701bf229dd1a5a346b9becef0->enter($__internal_149b6344f5ba1b97802f7137aaa5f741c06c976701bf229dd1a5a346b9becef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_97b7833367f1ffc2cbc85ea4b071246567618110ea0ba99f9e5d7cc94708afcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b7833367f1ffc2cbc85ea4b071246567618110ea0ba99f9e5d7cc94708afcf->enter($__internal_97b7833367f1ffc2cbc85ea4b071246567618110ea0ba99f9e5d7cc94708afcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_149b6344f5ba1b97802f7137aaa5f741c06c976701bf229dd1a5a346b9becef0->leave($__internal_149b6344f5ba1b97802f7137aaa5f741c06c976701bf229dd1a5a346b9becef0_prof);

        
        $__internal_97b7833367f1ffc2cbc85ea4b071246567618110ea0ba99f9e5d7cc94708afcf->leave($__internal_97b7833367f1ffc2cbc85ea4b071246567618110ea0ba99f9e5d7cc94708afcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
