<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a448e84a75f4f924d753cc94cbf46c7d0a437178061c93b24e2cf30494cf9f17 extends Twig_Template
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
        $__internal_89a6521253b175a896022dd6ff4e0cf0198430c7aa7f83af2e4b0dfb926050bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a6521253b175a896022dd6ff4e0cf0198430c7aa7f83af2e4b0dfb926050bd->enter($__internal_89a6521253b175a896022dd6ff4e0cf0198430c7aa7f83af2e4b0dfb926050bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dfeb42c6a5a2efa2426394f82f58cdc8303c38739fcb9a4e916372148f43352f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfeb42c6a5a2efa2426394f82f58cdc8303c38739fcb9a4e916372148f43352f->enter($__internal_dfeb42c6a5a2efa2426394f82f58cdc8303c38739fcb9a4e916372148f43352f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_89a6521253b175a896022dd6ff4e0cf0198430c7aa7f83af2e4b0dfb926050bd->leave($__internal_89a6521253b175a896022dd6ff4e0cf0198430c7aa7f83af2e4b0dfb926050bd_prof);

        
        $__internal_dfeb42c6a5a2efa2426394f82f58cdc8303c38739fcb9a4e916372148f43352f->leave($__internal_dfeb42c6a5a2efa2426394f82f58cdc8303c38739fcb9a4e916372148f43352f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
