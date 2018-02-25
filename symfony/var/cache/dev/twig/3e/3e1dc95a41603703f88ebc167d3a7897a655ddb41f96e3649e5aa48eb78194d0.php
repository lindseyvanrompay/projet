<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e7f1bf453deb2fab0baca680c86f6c8aed7ee34f682bc17ea6818b244e421964 extends Twig_Template
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
        $__internal_4279e634e354104feb20643e0392900cae67a24743959b547fc7fe46f86fb80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4279e634e354104feb20643e0392900cae67a24743959b547fc7fe46f86fb80b->enter($__internal_4279e634e354104feb20643e0392900cae67a24743959b547fc7fe46f86fb80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8e55cb728c1e5e6d538e2509061862a6b851c1b08a2f5c4d88dee5440f6a25a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e55cb728c1e5e6d538e2509061862a6b851c1b08a2f5c4d88dee5440f6a25a1->enter($__internal_8e55cb728c1e5e6d538e2509061862a6b851c1b08a2f5c4d88dee5440f6a25a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4279e634e354104feb20643e0392900cae67a24743959b547fc7fe46f86fb80b->leave($__internal_4279e634e354104feb20643e0392900cae67a24743959b547fc7fe46f86fb80b_prof);

        
        $__internal_8e55cb728c1e5e6d538e2509061862a6b851c1b08a2f5c4d88dee5440f6a25a1->leave($__internal_8e55cb728c1e5e6d538e2509061862a6b851c1b08a2f5c4d88dee5440f6a25a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
