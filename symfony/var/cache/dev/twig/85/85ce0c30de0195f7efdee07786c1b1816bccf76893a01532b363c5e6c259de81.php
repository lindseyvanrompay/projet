<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7adc674e8392693cfb70de4cd06a509dbe3416008b83de2a0cdaf2d5885a1e16 extends Twig_Template
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
        $__internal_86e3f5f3375b9a457f5656f0ae02100e3842978bc8936e69b164129826378fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e3f5f3375b9a457f5656f0ae02100e3842978bc8936e69b164129826378fb6->enter($__internal_86e3f5f3375b9a457f5656f0ae02100e3842978bc8936e69b164129826378fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_dbbf03451213a7823eb0eac2d45278f6fe220cf6310665c6d797123813c90ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbf03451213a7823eb0eac2d45278f6fe220cf6310665c6d797123813c90ea9->enter($__internal_dbbf03451213a7823eb0eac2d45278f6fe220cf6310665c6d797123813c90ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_86e3f5f3375b9a457f5656f0ae02100e3842978bc8936e69b164129826378fb6->leave($__internal_86e3f5f3375b9a457f5656f0ae02100e3842978bc8936e69b164129826378fb6_prof);

        
        $__internal_dbbf03451213a7823eb0eac2d45278f6fe220cf6310665c6d797123813c90ea9->leave($__internal_dbbf03451213a7823eb0eac2d45278f6fe220cf6310665c6d797123813c90ea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
