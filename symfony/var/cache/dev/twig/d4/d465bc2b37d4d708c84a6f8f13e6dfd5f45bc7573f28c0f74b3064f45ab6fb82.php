<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_eb3e769d13e3a9305469b05a3df6b38817cdf7f5e9d56446b09f20d27659717f extends Twig_Template
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
        $__internal_408b6f42b80ec7e10f7af803b643327f98587370bb8561c0abb64c2d22901466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408b6f42b80ec7e10f7af803b643327f98587370bb8561c0abb64c2d22901466->enter($__internal_408b6f42b80ec7e10f7af803b643327f98587370bb8561c0abb64c2d22901466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b8d949bb62b0514c1e2255a8df9a6451e617a931f3e25177a1ba51ed20b9714c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d949bb62b0514c1e2255a8df9a6451e617a931f3e25177a1ba51ed20b9714c->enter($__internal_b8d949bb62b0514c1e2255a8df9a6451e617a931f3e25177a1ba51ed20b9714c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_408b6f42b80ec7e10f7af803b643327f98587370bb8561c0abb64c2d22901466->leave($__internal_408b6f42b80ec7e10f7af803b643327f98587370bb8561c0abb64c2d22901466_prof);

        
        $__internal_b8d949bb62b0514c1e2255a8df9a6451e617a931f3e25177a1ba51ed20b9714c->leave($__internal_b8d949bb62b0514c1e2255a8df9a6451e617a931f3e25177a1ba51ed20b9714c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
