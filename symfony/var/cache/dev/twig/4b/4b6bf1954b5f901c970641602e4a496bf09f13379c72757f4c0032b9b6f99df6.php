<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a061a98bb0cf18c7c8b8081fea956349ad994af43e916550d7a1b0cac50cd9fd extends Twig_Template
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
        $__internal_641467a6f2ff5f2a1336477df0f5382706c93e7a232c74c7f798f158f7fef348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641467a6f2ff5f2a1336477df0f5382706c93e7a232c74c7f798f158f7fef348->enter($__internal_641467a6f2ff5f2a1336477df0f5382706c93e7a232c74c7f798f158f7fef348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8181ecc6f915ed06b86c0211f2701cfb01b09c1b8d3f70954946b2b829f96135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8181ecc6f915ed06b86c0211f2701cfb01b09c1b8d3f70954946b2b829f96135->enter($__internal_8181ecc6f915ed06b86c0211f2701cfb01b09c1b8d3f70954946b2b829f96135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_641467a6f2ff5f2a1336477df0f5382706c93e7a232c74c7f798f158f7fef348->leave($__internal_641467a6f2ff5f2a1336477df0f5382706c93e7a232c74c7f798f158f7fef348_prof);

        
        $__internal_8181ecc6f915ed06b86c0211f2701cfb01b09c1b8d3f70954946b2b829f96135->leave($__internal_8181ecc6f915ed06b86c0211f2701cfb01b09c1b8d3f70954946b2b829f96135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
