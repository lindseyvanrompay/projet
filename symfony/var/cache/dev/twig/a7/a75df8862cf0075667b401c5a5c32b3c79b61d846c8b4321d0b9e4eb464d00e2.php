<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f3790e200452f1dda148a7836cd094520ae8d9d4fd6e140c060e10a4dbe42380 extends Twig_Template
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
        $__internal_a1680327e80cf8fd05d95326122168413b9851b1b9466208d1a8a6b22fd02d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1680327e80cf8fd05d95326122168413b9851b1b9466208d1a8a6b22fd02d7c->enter($__internal_a1680327e80cf8fd05d95326122168413b9851b1b9466208d1a8a6b22fd02d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_87706e3a288db61029b3c95601ef6ef662e3fde4f97b8176890a12d8c672b8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87706e3a288db61029b3c95601ef6ef662e3fde4f97b8176890a12d8c672b8fc->enter($__internal_87706e3a288db61029b3c95601ef6ef662e3fde4f97b8176890a12d8c672b8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a1680327e80cf8fd05d95326122168413b9851b1b9466208d1a8a6b22fd02d7c->leave($__internal_a1680327e80cf8fd05d95326122168413b9851b1b9466208d1a8a6b22fd02d7c_prof);

        
        $__internal_87706e3a288db61029b3c95601ef6ef662e3fde4f97b8176890a12d8c672b8fc->leave($__internal_87706e3a288db61029b3c95601ef6ef662e3fde4f97b8176890a12d8c672b8fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
