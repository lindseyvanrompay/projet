<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6f19f83aee21c410daeb549be94c2bc5abd6e1bdf6bbf6c37be2f734ba5d76e4 extends Twig_Template
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
        $__internal_26005639c228aaa15df7153ae3d5321341157cd05c7213b6559f3dab7e626d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26005639c228aaa15df7153ae3d5321341157cd05c7213b6559f3dab7e626d7e->enter($__internal_26005639c228aaa15df7153ae3d5321341157cd05c7213b6559f3dab7e626d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3a206577d190054b96919ade34f4420a4b2def20187468491b7b948dd80fcb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a206577d190054b96919ade34f4420a4b2def20187468491b7b948dd80fcb67->enter($__internal_3a206577d190054b96919ade34f4420a4b2def20187468491b7b948dd80fcb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_26005639c228aaa15df7153ae3d5321341157cd05c7213b6559f3dab7e626d7e->leave($__internal_26005639c228aaa15df7153ae3d5321341157cd05c7213b6559f3dab7e626d7e_prof);

        
        $__internal_3a206577d190054b96919ade34f4420a4b2def20187468491b7b948dd80fcb67->leave($__internal_3a206577d190054b96919ade34f4420a4b2def20187468491b7b948dd80fcb67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
