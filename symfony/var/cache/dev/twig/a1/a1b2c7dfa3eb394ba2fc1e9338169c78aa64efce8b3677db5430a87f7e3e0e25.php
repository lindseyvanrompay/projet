<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b6fe9ec936d4392c2f07c453736284e8437c5d264b30656cceca618040053019 extends Twig_Template
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
        $__internal_1743b68fb648c0dbe653129e77966ef497b76727598bb8f2f4174eda5b9c940c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1743b68fb648c0dbe653129e77966ef497b76727598bb8f2f4174eda5b9c940c->enter($__internal_1743b68fb648c0dbe653129e77966ef497b76727598bb8f2f4174eda5b9c940c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_7195dbf460a5b12efbffd1d100e337eef8e1e317eb114011a30440e313250954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7195dbf460a5b12efbffd1d100e337eef8e1e317eb114011a30440e313250954->enter($__internal_7195dbf460a5b12efbffd1d100e337eef8e1e317eb114011a30440e313250954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1743b68fb648c0dbe653129e77966ef497b76727598bb8f2f4174eda5b9c940c->leave($__internal_1743b68fb648c0dbe653129e77966ef497b76727598bb8f2f4174eda5b9c940c_prof);

        
        $__internal_7195dbf460a5b12efbffd1d100e337eef8e1e317eb114011a30440e313250954->leave($__internal_7195dbf460a5b12efbffd1d100e337eef8e1e317eb114011a30440e313250954_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
