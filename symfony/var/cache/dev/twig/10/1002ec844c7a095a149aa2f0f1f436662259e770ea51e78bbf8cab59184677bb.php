<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b07e46fbab6e3248060ff90543cdffd6f6a1d4fa5702a6041c2a9f107df8af71 extends Twig_Template
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
        $__internal_3fc2ea310ba8390ed3ec07bccc79e2c0c5412f1ade300f066ae10975c9a8b201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc2ea310ba8390ed3ec07bccc79e2c0c5412f1ade300f066ae10975c9a8b201->enter($__internal_3fc2ea310ba8390ed3ec07bccc79e2c0c5412f1ade300f066ae10975c9a8b201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ea7966bb812ba0d19612dfd26064ab3c97407f2c74297744ecc792e7e1ff6323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7966bb812ba0d19612dfd26064ab3c97407f2c74297744ecc792e7e1ff6323->enter($__internal_ea7966bb812ba0d19612dfd26064ab3c97407f2c74297744ecc792e7e1ff6323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3fc2ea310ba8390ed3ec07bccc79e2c0c5412f1ade300f066ae10975c9a8b201->leave($__internal_3fc2ea310ba8390ed3ec07bccc79e2c0c5412f1ade300f066ae10975c9a8b201_prof);

        
        $__internal_ea7966bb812ba0d19612dfd26064ab3c97407f2c74297744ecc792e7e1ff6323->leave($__internal_ea7966bb812ba0d19612dfd26064ab3c97407f2c74297744ecc792e7e1ff6323_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
