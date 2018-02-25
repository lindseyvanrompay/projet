<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_21bf25ba5435be42c4214c332fa4f6345b62dcb0fc9dc2637a285e56e4474213 extends Twig_Template
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
        $__internal_a593500029d4f264be2f0b06a19288a7781c598da4b9371b7ebae7cc15dfbf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a593500029d4f264be2f0b06a19288a7781c598da4b9371b7ebae7cc15dfbf6e->enter($__internal_a593500029d4f264be2f0b06a19288a7781c598da4b9371b7ebae7cc15dfbf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f3c691ae2314e568f29d5ba5d002bf763ab62efe7618b210659c7bcbee46288d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c691ae2314e568f29d5ba5d002bf763ab62efe7618b210659c7bcbee46288d->enter($__internal_f3c691ae2314e568f29d5ba5d002bf763ab62efe7618b210659c7bcbee46288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a593500029d4f264be2f0b06a19288a7781c598da4b9371b7ebae7cc15dfbf6e->leave($__internal_a593500029d4f264be2f0b06a19288a7781c598da4b9371b7ebae7cc15dfbf6e_prof);

        
        $__internal_f3c691ae2314e568f29d5ba5d002bf763ab62efe7618b210659c7bcbee46288d->leave($__internal_f3c691ae2314e568f29d5ba5d002bf763ab62efe7618b210659c7bcbee46288d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
