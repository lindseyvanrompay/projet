<?php

/* ProjetBundle::test.html.twig */
class __TwigTemplate_e2e0b3843f870a23bc145b2816dadf080ada9cdac32cd74fa1fea533475c189d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ProjetBundle::test.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b5782628c40633e7609be4a64709085db4b8466fe358e86a8279c969ad6f563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5782628c40633e7609be4a64709085db4b8466fe358e86a8279c969ad6f563->enter($__internal_7b5782628c40633e7609be4a64709085db4b8466fe358e86a8279c969ad6f563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::test.html.twig"));

        $__internal_09c940eef1b8f14bc5669b0d9e265649790fbfe2cb03287eca3c6a5728454d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c940eef1b8f14bc5669b0d9e265649790fbfe2cb03287eca3c6a5728454d82->enter($__internal_09c940eef1b8f14bc5669b0d9e265649790fbfe2cb03287eca3c6a5728454d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5782628c40633e7609be4a64709085db4b8466fe358e86a8279c969ad6f563->leave($__internal_7b5782628c40633e7609be4a64709085db4b8466fe358e86a8279c969ad6f563_prof);

        
        $__internal_09c940eef1b8f14bc5669b0d9e265649790fbfe2cb03287eca3c6a5728454d82->leave($__internal_09c940eef1b8f14bc5669b0d9e265649790fbfe2cb03287eca3c6a5728454d82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a17bc47668727e59117690cace9d497df5a4b73b7554b7e4905b9c4938534c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a17bc47668727e59117690cace9d497df5a4b73b7554b7e4905b9c4938534c2->enter($__internal_5a17bc47668727e59117690cace9d497df5a4b73b7554b7e4905b9c4938534c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41ec928c300f6bbbd15561ef06e8729ea6fce862773f44af1963b92c86f1276a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ec928c300f6bbbd15561ef06e8729ea6fce862773f44af1963b92c86f1276a->enter($__internal_41ec928c300f6bbbd15561ef06e8729ea6fce862773f44af1963b92c86f1276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "  ";
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_41ec928c300f6bbbd15561ef06e8729ea6fce862773f44af1963b92c86f1276a->leave($__internal_41ec928c300f6bbbd15561ef06e8729ea6fce862773f44af1963b92c86f1276a_prof);

        
        $__internal_5a17bc47668727e59117690cace9d497df5a4b73b7554b7e4905b9c4938534c2->leave($__internal_5a17bc47668727e59117690cace9d497df5a4b73b7554b7e4905b9c4938534c2_prof);

    }

    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_469636d4db0b1b3d7705118dd61ab0867a25cd87783b520c950a42c1e562c10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469636d4db0b1b3d7705118dd61ab0867a25cd87783b520c950a42c1e562c10f->enter($__internal_469636d4db0b1b3d7705118dd61ab0867a25cd87783b520c950a42c1e562c10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3fe949d41b3c74156295a226c07c194b7b47777f76aeb5919cec4679e39a5f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe949d41b3c74156295a226c07c194b7b47777f76aeb5919cec4679e39a5f0d->enter($__internal_3fe949d41b3c74156295a226c07c194b7b47777f76aeb5919cec4679e39a5f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "
  ";
        
        $__internal_3fe949d41b3c74156295a226c07c194b7b47777f76aeb5919cec4679e39a5f0d->leave($__internal_3fe949d41b3c74156295a226c07c194b7b47777f76aeb5919cec4679e39a5f0d_prof);

        
        $__internal_469636d4db0b1b3d7705118dd61ab0867a25cd87783b520c950a42c1e562c10f->leave($__internal_469636d4db0b1b3d7705118dd61ab0867a25cd87783b520c950a42c1e562c10f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e1b16b0990b06115e11b8f7f1710a0d778a6241f9f92ba530a9fb3ffec41e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1b16b0990b06115e11b8f7f1710a0d778a6241f9f92ba530a9fb3ffec41e8c->enter($__internal_6e1b16b0990b06115e11b8f7f1710a0d778a6241f9f92ba530a9fb3ffec41e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac51f5bcc15a08c814d2edd20615a0efd8268790a5746ef51c2d3241ac1520eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac51f5bcc15a08c814d2edd20615a0efd8268790a5746ef51c2d3241ac1520eb->enter($__internal_ac51f5bcc15a08c814d2edd20615a0efd8268790a5746ef51c2d3241ac1520eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
";
        
        $__internal_ac51f5bcc15a08c814d2edd20615a0efd8268790a5746ef51c2d3241ac1520eb->leave($__internal_ac51f5bcc15a08c814d2edd20615a0efd8268790a5746ef51c2d3241ac1520eb_prof);

        
        $__internal_6e1b16b0990b06115e11b8f7f1710a0d778a6241f9f92ba530a9fb3ffec41e8c->leave($__internal_6e1b16b0990b06115e11b8f7f1710a0d778a6241f9f92ba530a9fb3ffec41e8c_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle::test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  81 => 9,  70 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block head %}
  {% block stylesheet %}

  {% endblock %}
{% endblock %}

{% block body %}

{% endblock %}
", "ProjetBundle::test.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/src/ProjetBundle/Resources/views/test.html.twig");
    }
}
