<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d626f3b6b7651d5d3461c8e9490f1ce8ba35968b937f4db706d79b0acbf9da16 extends Twig_Template
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
        $__internal_f5b0c3896e055e651c11dbf5d535ff83020dbbf0125ff69397f6310686e8e9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b0c3896e055e651c11dbf5d535ff83020dbbf0125ff69397f6310686e8e9dd->enter($__internal_f5b0c3896e055e651c11dbf5d535ff83020dbbf0125ff69397f6310686e8e9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e4aa3aa8ecf058b8db39814c685aaba22932ed530ce66cd0308815975dd9dc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4aa3aa8ecf058b8db39814c685aaba22932ed530ce66cd0308815975dd9dc4e->enter($__internal_e4aa3aa8ecf058b8db39814c685aaba22932ed530ce66cd0308815975dd9dc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f5b0c3896e055e651c11dbf5d535ff83020dbbf0125ff69397f6310686e8e9dd->leave($__internal_f5b0c3896e055e651c11dbf5d535ff83020dbbf0125ff69397f6310686e8e9dd_prof);

        
        $__internal_e4aa3aa8ecf058b8db39814c685aaba22932ed530ce66cd0308815975dd9dc4e->leave($__internal_e4aa3aa8ecf058b8db39814c685aaba22932ed530ce66cd0308815975dd9dc4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
