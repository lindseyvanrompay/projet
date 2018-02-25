<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_257f8af107cd3dd8b6250e7cc86ac14b28072a6d96f75e9e1a19c0fe43429989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87324ba7f4b09719271ef9d110da312d776bdd358de2c016709c81d3a959e998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87324ba7f4b09719271ef9d110da312d776bdd358de2c016709c81d3a959e998->enter($__internal_87324ba7f4b09719271ef9d110da312d776bdd358de2c016709c81d3a959e998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7c719da452c7f98d095ca0e78109565fea225c5f90667b758fbfcbd86aeb651a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c719da452c7f98d095ca0e78109565fea225c5f90667b758fbfcbd86aeb651a->enter($__internal_7c719da452c7f98d095ca0e78109565fea225c5f90667b758fbfcbd86aeb651a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87324ba7f4b09719271ef9d110da312d776bdd358de2c016709c81d3a959e998->leave($__internal_87324ba7f4b09719271ef9d110da312d776bdd358de2c016709c81d3a959e998_prof);

        
        $__internal_7c719da452c7f98d095ca0e78109565fea225c5f90667b758fbfcbd86aeb651a->leave($__internal_7c719da452c7f98d095ca0e78109565fea225c5f90667b758fbfcbd86aeb651a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_252231dddaff260e22b096fe07b8b435b3d1d8886ba45a3f1688226507879910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252231dddaff260e22b096fe07b8b435b3d1d8886ba45a3f1688226507879910->enter($__internal_252231dddaff260e22b096fe07b8b435b3d1d8886ba45a3f1688226507879910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd36c267fdf29d11d18e69e170d15b7eacbb28a416c659b3b582c4fe5895deb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd36c267fdf29d11d18e69e170d15b7eacbb28a416c659b3b582c4fe5895deb0->enter($__internal_bd36c267fdf29d11d18e69e170d15b7eacbb28a416c659b3b582c4fe5895deb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bd36c267fdf29d11d18e69e170d15b7eacbb28a416c659b3b582c4fe5895deb0->leave($__internal_bd36c267fdf29d11d18e69e170d15b7eacbb28a416c659b3b582c4fe5895deb0_prof);

        
        $__internal_252231dddaff260e22b096fe07b8b435b3d1d8886ba45a3f1688226507879910->leave($__internal_252231dddaff260e22b096fe07b8b435b3d1d8886ba45a3f1688226507879910_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
