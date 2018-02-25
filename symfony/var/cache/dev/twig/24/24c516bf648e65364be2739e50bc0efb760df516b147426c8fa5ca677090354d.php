<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8a4a3f2c14d662d33f979ae3736b1b09272c14d24be0e88eea3bf9a747fb080e extends Twig_Template
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
        $__internal_e82596b24747ccdd4eb97fbaf0f6f0c1a60eba6c24297759267f55844e1dddd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82596b24747ccdd4eb97fbaf0f6f0c1a60eba6c24297759267f55844e1dddd1->enter($__internal_e82596b24747ccdd4eb97fbaf0f6f0c1a60eba6c24297759267f55844e1dddd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_268a930479b30c62eb6ba63ce77c37439c151980eddd1a21d3b271a625fc22ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268a930479b30c62eb6ba63ce77c37439c151980eddd1a21d3b271a625fc22ea->enter($__internal_268a930479b30c62eb6ba63ce77c37439c151980eddd1a21d3b271a625fc22ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e82596b24747ccdd4eb97fbaf0f6f0c1a60eba6c24297759267f55844e1dddd1->leave($__internal_e82596b24747ccdd4eb97fbaf0f6f0c1a60eba6c24297759267f55844e1dddd1_prof);

        
        $__internal_268a930479b30c62eb6ba63ce77c37439c151980eddd1a21d3b271a625fc22ea->leave($__internal_268a930479b30c62eb6ba63ce77c37439c151980eddd1a21d3b271a625fc22ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
