<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_43587739ce293e9c8336c44b483bcc1f95106e6eba6c58a3bb082059b6ee15a0 extends Twig_Template
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
        $__internal_35550e2c4fb8e2e22d527397c68169c092a62d2b7962d562a87601a17de36cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35550e2c4fb8e2e22d527397c68169c092a62d2b7962d562a87601a17de36cc3->enter($__internal_35550e2c4fb8e2e22d527397c68169c092a62d2b7962d562a87601a17de36cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8c02bb0e0dbfd76d4721c516220e489a61714dcd9b7068d01db11c31c3f9bea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c02bb0e0dbfd76d4721c516220e489a61714dcd9b7068d01db11c31c3f9bea0->enter($__internal_8c02bb0e0dbfd76d4721c516220e489a61714dcd9b7068d01db11c31c3f9bea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_35550e2c4fb8e2e22d527397c68169c092a62d2b7962d562a87601a17de36cc3->leave($__internal_35550e2c4fb8e2e22d527397c68169c092a62d2b7962d562a87601a17de36cc3_prof);

        
        $__internal_8c02bb0e0dbfd76d4721c516220e489a61714dcd9b7068d01db11c31c3f9bea0->leave($__internal_8c02bb0e0dbfd76d4721c516220e489a61714dcd9b7068d01db11c31c3f9bea0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
