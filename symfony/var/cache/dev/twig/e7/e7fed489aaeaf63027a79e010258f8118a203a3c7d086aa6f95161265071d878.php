<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1de25ce7a9d9c6e3f4d90b73dc7d7d4b24a09360e3c2571f6beb76dfbcad88bf extends Twig_Template
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
        $__internal_df07537a5b00baeb2a13e90ef3ca455a642a8126304030ad299ea453fd72b802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df07537a5b00baeb2a13e90ef3ca455a642a8126304030ad299ea453fd72b802->enter($__internal_df07537a5b00baeb2a13e90ef3ca455a642a8126304030ad299ea453fd72b802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5a1d4a068f8124bb9faf817916ca204397673c8025d1a3482842619d4934a747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1d4a068f8124bb9faf817916ca204397673c8025d1a3482842619d4934a747->enter($__internal_5a1d4a068f8124bb9faf817916ca204397673c8025d1a3482842619d4934a747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_df07537a5b00baeb2a13e90ef3ca455a642a8126304030ad299ea453fd72b802->leave($__internal_df07537a5b00baeb2a13e90ef3ca455a642a8126304030ad299ea453fd72b802_prof);

        
        $__internal_5a1d4a068f8124bb9faf817916ca204397673c8025d1a3482842619d4934a747->leave($__internal_5a1d4a068f8124bb9faf817916ca204397673c8025d1a3482842619d4934a747_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
