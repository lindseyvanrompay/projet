<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_de32035458a7dbb678ae1b80de6ba98e3626203f5444ebdab8cd66aada112af3 extends Twig_Template
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
        $__internal_9e37617b7ec38fb43cbc1de690b84ab2009f8853ebea5f15da3a0ede0256bfc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e37617b7ec38fb43cbc1de690b84ab2009f8853ebea5f15da3a0ede0256bfc4->enter($__internal_9e37617b7ec38fb43cbc1de690b84ab2009f8853ebea5f15da3a0ede0256bfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f48afa80886353b234f7a6e81251dcd62adebea0271710ad00ed3e0e14c9fdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48afa80886353b234f7a6e81251dcd62adebea0271710ad00ed3e0e14c9fdfc->enter($__internal_f48afa80886353b234f7a6e81251dcd62adebea0271710ad00ed3e0e14c9fdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9e37617b7ec38fb43cbc1de690b84ab2009f8853ebea5f15da3a0ede0256bfc4->leave($__internal_9e37617b7ec38fb43cbc1de690b84ab2009f8853ebea5f15da3a0ede0256bfc4_prof);

        
        $__internal_f48afa80886353b234f7a6e81251dcd62adebea0271710ad00ed3e0e14c9fdfc->leave($__internal_f48afa80886353b234f7a6e81251dcd62adebea0271710ad00ed3e0e14c9fdfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
