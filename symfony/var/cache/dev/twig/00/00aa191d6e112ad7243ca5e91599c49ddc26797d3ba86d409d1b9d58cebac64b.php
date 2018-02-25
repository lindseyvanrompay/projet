<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_85005e7d1a4857fa4561fe8ec328f62e935ec8c66e4c52d48dcf6c2355546ba7 extends Twig_Template
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
        $__internal_ac9f13b53b9087e4a3088a9fa2abdbe28a228eddf45813313c97a7aa8eff6433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9f13b53b9087e4a3088a9fa2abdbe28a228eddf45813313c97a7aa8eff6433->enter($__internal_ac9f13b53b9087e4a3088a9fa2abdbe28a228eddf45813313c97a7aa8eff6433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f9f3e594aeff4277413da4d483cd50a634df333fa056b03486cfa6b2ea3ee609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f3e594aeff4277413da4d483cd50a634df333fa056b03486cfa6b2ea3ee609->enter($__internal_f9f3e594aeff4277413da4d483cd50a634df333fa056b03486cfa6b2ea3ee609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ac9f13b53b9087e4a3088a9fa2abdbe28a228eddf45813313c97a7aa8eff6433->leave($__internal_ac9f13b53b9087e4a3088a9fa2abdbe28a228eddf45813313c97a7aa8eff6433_prof);

        
        $__internal_f9f3e594aeff4277413da4d483cd50a634df333fa056b03486cfa6b2ea3ee609->leave($__internal_f9f3e594aeff4277413da4d483cd50a634df333fa056b03486cfa6b2ea3ee609_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
