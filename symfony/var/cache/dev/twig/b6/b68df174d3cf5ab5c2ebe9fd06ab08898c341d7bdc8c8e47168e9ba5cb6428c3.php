<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9196e4ed7aebace85bdc8468e0ca53f850cc2bd2d9a266995fe66eb4151d6df3 extends Twig_Template
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
        $__internal_e99b86e8f2c33ffb1d90828a142f4b9ba91b091a690f5c99fff8a81ea30e03a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99b86e8f2c33ffb1d90828a142f4b9ba91b091a690f5c99fff8a81ea30e03a6->enter($__internal_e99b86e8f2c33ffb1d90828a142f4b9ba91b091a690f5c99fff8a81ea30e03a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_12efecb8a81d1a9659e109d3dad5eb5b648e48750d309649a340b2fdd2799470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12efecb8a81d1a9659e109d3dad5eb5b648e48750d309649a340b2fdd2799470->enter($__internal_12efecb8a81d1a9659e109d3dad5eb5b648e48750d309649a340b2fdd2799470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e99b86e8f2c33ffb1d90828a142f4b9ba91b091a690f5c99fff8a81ea30e03a6->leave($__internal_e99b86e8f2c33ffb1d90828a142f4b9ba91b091a690f5c99fff8a81ea30e03a6_prof);

        
        $__internal_12efecb8a81d1a9659e109d3dad5eb5b648e48750d309649a340b2fdd2799470->leave($__internal_12efecb8a81d1a9659e109d3dad5eb5b648e48750d309649a340b2fdd2799470_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
