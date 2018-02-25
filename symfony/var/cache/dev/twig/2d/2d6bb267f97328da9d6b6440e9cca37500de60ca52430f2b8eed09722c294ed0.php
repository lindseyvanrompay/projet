<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_51e111d5245a1a3fdb99fdecf81b6fef2bf158dd6fd91323380540be2bfc4c14 extends Twig_Template
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
        $__internal_43b437d38ee1a8f39e837aaa6c443b11385a3207004703c7647a1e0a9a120758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b437d38ee1a8f39e837aaa6c443b11385a3207004703c7647a1e0a9a120758->enter($__internal_43b437d38ee1a8f39e837aaa6c443b11385a3207004703c7647a1e0a9a120758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_77e6a1219c40078079115778f7f91ab98acf086ed84e43589cc287218b50b029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e6a1219c40078079115778f7f91ab98acf086ed84e43589cc287218b50b029->enter($__internal_77e6a1219c40078079115778f7f91ab98acf086ed84e43589cc287218b50b029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43b437d38ee1a8f39e837aaa6c443b11385a3207004703c7647a1e0a9a120758->leave($__internal_43b437d38ee1a8f39e837aaa6c443b11385a3207004703c7647a1e0a9a120758_prof);

        
        $__internal_77e6a1219c40078079115778f7f91ab98acf086ed84e43589cc287218b50b029->leave($__internal_77e6a1219c40078079115778f7f91ab98acf086ed84e43589cc287218b50b029_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
