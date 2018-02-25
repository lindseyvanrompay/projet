<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_470ece86f7caa8f71cfabe7f1a0afc9d30e3b59eaf777e04bfa5602338541ae2 extends Twig_Template
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
        $__internal_c12e5bfefd6d183e6444ac13f473b0be2ac7b936bb36d8567611ea833cfb739c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12e5bfefd6d183e6444ac13f473b0be2ac7b936bb36d8567611ea833cfb739c->enter($__internal_c12e5bfefd6d183e6444ac13f473b0be2ac7b936bb36d8567611ea833cfb739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3048f92283c906933308850a5c91fad0dae58761042a0f959166df502bcf4e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3048f92283c906933308850a5c91fad0dae58761042a0f959166df502bcf4e74->enter($__internal_3048f92283c906933308850a5c91fad0dae58761042a0f959166df502bcf4e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c12e5bfefd6d183e6444ac13f473b0be2ac7b936bb36d8567611ea833cfb739c->leave($__internal_c12e5bfefd6d183e6444ac13f473b0be2ac7b936bb36d8567611ea833cfb739c_prof);

        
        $__internal_3048f92283c906933308850a5c91fad0dae58761042a0f959166df502bcf4e74->leave($__internal_3048f92283c906933308850a5c91fad0dae58761042a0f959166df502bcf4e74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
