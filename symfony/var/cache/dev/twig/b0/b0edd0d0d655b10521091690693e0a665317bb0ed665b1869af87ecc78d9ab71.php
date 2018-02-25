<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_09aaa5ffde976993d02133f9088b76d2169c5b61726c1e3cbcf68de03764ea60 extends Twig_Template
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
        $__internal_1902f0a4defe1dd9db18e9624c884f34b6eb0c1a79fbdbf3108544896c6ccdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1902f0a4defe1dd9db18e9624c884f34b6eb0c1a79fbdbf3108544896c6ccdd9->enter($__internal_1902f0a4defe1dd9db18e9624c884f34b6eb0c1a79fbdbf3108544896c6ccdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_00774ba617da97f96635c6d9973e8c2caa6fb0aa5508622908a36d352136b44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00774ba617da97f96635c6d9973e8c2caa6fb0aa5508622908a36d352136b44e->enter($__internal_00774ba617da97f96635c6d9973e8c2caa6fb0aa5508622908a36d352136b44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1902f0a4defe1dd9db18e9624c884f34b6eb0c1a79fbdbf3108544896c6ccdd9->leave($__internal_1902f0a4defe1dd9db18e9624c884f34b6eb0c1a79fbdbf3108544896c6ccdd9_prof);

        
        $__internal_00774ba617da97f96635c6d9973e8c2caa6fb0aa5508622908a36d352136b44e->leave($__internal_00774ba617da97f96635c6d9973e8c2caa6fb0aa5508622908a36d352136b44e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
