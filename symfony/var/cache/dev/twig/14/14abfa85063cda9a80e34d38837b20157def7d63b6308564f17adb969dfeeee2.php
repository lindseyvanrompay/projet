<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_21b9f3a82acdc7f61ba244cb0dbbbd0c469ad117b450b08f5db5f4af9ba22c94 extends Twig_Template
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
        $__internal_6edbb914ffd473651a32947b20a94085f3d981e759e2d4d95314aa7648e1a87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edbb914ffd473651a32947b20a94085f3d981e759e2d4d95314aa7648e1a87d->enter($__internal_6edbb914ffd473651a32947b20a94085f3d981e759e2d4d95314aa7648e1a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c9321246e7f9a64de4a875cd942e653a3dfa91a46da9add2a98059e35b1f538e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9321246e7f9a64de4a875cd942e653a3dfa91a46da9add2a98059e35b1f538e->enter($__internal_c9321246e7f9a64de4a875cd942e653a3dfa91a46da9add2a98059e35b1f538e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6edbb914ffd473651a32947b20a94085f3d981e759e2d4d95314aa7648e1a87d->leave($__internal_6edbb914ffd473651a32947b20a94085f3d981e759e2d4d95314aa7648e1a87d_prof);

        
        $__internal_c9321246e7f9a64de4a875cd942e653a3dfa91a46da9add2a98059e35b1f538e->leave($__internal_c9321246e7f9a64de4a875cd942e653a3dfa91a46da9add2a98059e35b1f538e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
