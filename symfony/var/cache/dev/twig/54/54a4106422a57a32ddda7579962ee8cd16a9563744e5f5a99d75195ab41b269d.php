<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bc7cfb971a1177e9d5f832b6c1a5f8ae1eaec9415d24284883ce8ed881fd5f97 extends Twig_Template
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
        $__internal_9f19711a8d4c9d62012d732769fb5ab3d86f8b3fda79ef2c9bad7f72a971027d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f19711a8d4c9d62012d732769fb5ab3d86f8b3fda79ef2c9bad7f72a971027d->enter($__internal_9f19711a8d4c9d62012d732769fb5ab3d86f8b3fda79ef2c9bad7f72a971027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0e002caa7ca468d6220bd93a9fd7ea7e4b7825521cd5d65722cc12b0839c9184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e002caa7ca468d6220bd93a9fd7ea7e4b7825521cd5d65722cc12b0839c9184->enter($__internal_0e002caa7ca468d6220bd93a9fd7ea7e4b7825521cd5d65722cc12b0839c9184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9f19711a8d4c9d62012d732769fb5ab3d86f8b3fda79ef2c9bad7f72a971027d->leave($__internal_9f19711a8d4c9d62012d732769fb5ab3d86f8b3fda79ef2c9bad7f72a971027d_prof);

        
        $__internal_0e002caa7ca468d6220bd93a9fd7ea7e4b7825521cd5d65722cc12b0839c9184->leave($__internal_0e002caa7ca468d6220bd93a9fd7ea7e4b7825521cd5d65722cc12b0839c9184_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
