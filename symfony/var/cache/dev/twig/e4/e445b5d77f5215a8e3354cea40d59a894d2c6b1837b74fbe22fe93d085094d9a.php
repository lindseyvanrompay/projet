<?php

/* ProjetBundle:Default:index.html.twig */
class __TwigTemplate_d0c6352519260cd86b49001b2e1d2c03ce2f6c408cb8494c35fc1d8c681fc263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ProjetBundle:Default:index.html.twig", 1);
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
        $__internal_6e9e8da3d520fc51c6664d2230fd30c0f5a5310d4613149eca37d7bdda34636c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9e8da3d520fc51c6664d2230fd30c0f5a5310d4613149eca37d7bdda34636c->enter($__internal_6e9e8da3d520fc51c6664d2230fd30c0f5a5310d4613149eca37d7bdda34636c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Default:index.html.twig"));

        $__internal_9b0bc46c2f2e6ed2d3353978b2607fa504c731cf8275798fedbddd98b09e7cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0bc46c2f2e6ed2d3353978b2607fa504c731cf8275798fedbddd98b09e7cf3->enter($__internal_9b0bc46c2f2e6ed2d3353978b2607fa504c731cf8275798fedbddd98b09e7cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9e8da3d520fc51c6664d2230fd30c0f5a5310d4613149eca37d7bdda34636c->leave($__internal_6e9e8da3d520fc51c6664d2230fd30c0f5a5310d4613149eca37d7bdda34636c_prof);

        
        $__internal_9b0bc46c2f2e6ed2d3353978b2607fa504c731cf8275798fedbddd98b09e7cf3->leave($__internal_9b0bc46c2f2e6ed2d3353978b2607fa504c731cf8275798fedbddd98b09e7cf3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e127f593b58a1720b6070b235a9d376082981ace028f5d21aa8d5001763118cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e127f593b58a1720b6070b235a9d376082981ace028f5d21aa8d5001763118cc->enter($__internal_e127f593b58a1720b6070b235a9d376082981ace028f5d21aa8d5001763118cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5e65db2800665e73964599c380d6b83aae37ab768094112923113db29a49443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e65db2800665e73964599c380d6b83aae37ab768094112923113db29a49443->enter($__internal_f5e65db2800665e73964599c380d6b83aae37ab768094112923113db29a49443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_f5e65db2800665e73964599c380d6b83aae37ab768094112923113db29a49443->leave($__internal_f5e65db2800665e73964599c380d6b83aae37ab768094112923113db29a49443_prof);

        
        $__internal_e127f593b58a1720b6070b235a9d376082981ace028f5d21aa8d5001763118cc->leave($__internal_e127f593b58a1720b6070b235a9d376082981ace028f5d21aa8d5001763118cc_prof);

    }

    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_428614b4d2b8e199e50a9e1bdb9149ff8a12466a1b25c6fb37cc0761f4fa33f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428614b4d2b8e199e50a9e1bdb9149ff8a12466a1b25c6fb37cc0761f4fa33f0->enter($__internal_428614b4d2b8e199e50a9e1bdb9149ff8a12466a1b25c6fb37cc0761f4fa33f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cc6a314fee4a82bd4058394ccb4bcdeeeb6675873e165f2f3ad2278aa044b586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6a314fee4a82bd4058394ccb4bcdeeeb6675873e165f2f3ad2278aa044b586->enter($__internal_cc6a314fee4a82bd4058394ccb4bcdeeeb6675873e165f2f3ad2278aa044b586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "
    ";
        
        $__internal_cc6a314fee4a82bd4058394ccb4bcdeeeb6675873e165f2f3ad2278aa044b586->leave($__internal_cc6a314fee4a82bd4058394ccb4bcdeeeb6675873e165f2f3ad2278aa044b586_prof);

        
        $__internal_428614b4d2b8e199e50a9e1bdb9149ff8a12466a1b25c6fb37cc0761f4fa33f0->leave($__internal_428614b4d2b8e199e50a9e1bdb9149ff8a12466a1b25c6fb37cc0761f4fa33f0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2adebde813fe825ce99b0ce58cf600b053129b02a77c681302f93f8e70c496cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adebde813fe825ce99b0ce58cf600b053129b02a77c681302f93f8e70c496cd->enter($__internal_2adebde813fe825ce99b0ce58cf600b053129b02a77c681302f93f8e70c496cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fecc03faa81adc4fc8a6beebaffeab3eaaeae698c9905aeec843da29e64141c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fecc03faa81adc4fc8a6beebaffeab3eaaeae698c9905aeec843da29e64141c->enter($__internal_3fecc03faa81adc4fc8a6beebaffeab3eaaeae698c9905aeec843da29e64141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <div class=\"container\">

    <header>
      <div class=\"row\">
        <h1>Fruits and fries</h1>
        <h3>Bienvenue</h3>
        <div class=\"col-md-offset-8 col-lg-4\">
          <img src=\"images/logo.jpg\" class=\"img-responsive\">
        </div>
      </div>
    </header>

    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_connexion"] ?? $this->getContext($context, "form_connexion")), 'form_start');
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form_connexion"] ?? $this->getContext($context, "form_connexion")), 'errors');
        echo "
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_connexion"] ?? $this->getContext($context, "form_connexion")), 'form_end');
        echo "

    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
        echo "\"> Pas encore inscrit ? </a>

      <p>Fruits and fries est un site web avec une base de données uniquement dédié à l'alimentation de ses utilisateurs.Sur ce site, c'est votre santé qui est la priorité.Pour cela, différentes fonctionnalités existent :</p>
      <div class=\"row\">
      <div class=\"col-xs-6\">
      <p>Pour les utilisateurs :
        <ul>
          <li>La saisie de repas effectués</li>
          <li>La création de menus et recettes</li>
          <li>Le suivi de votre alimentation</li>
          <li>L'abonnement à un ou plusieurs diététicien(s)</li>
          <li>L'accès à des conseils alimentaires vous étant destinés fournis par un diététicien</li>
        </ul>
      </p>
      </div>
      <div class=\"col-xs-6 col-sm-6\">
      <p>Pour les diététiciens :
        <ul>
          <li>L'accès des statistiques sur l'alimentation d'un groupe d'utilisateurs, vous permettant de rester informer sur l'alimentation de ce groupe</li>
          <li>La saisie de conseils alimentaires pour guider les utilisateurs vers une meilleure alimentation</li>
        </ul>
      </p>
      </div>
    </div>

  </div>
  <!-- Le reste du contenu -->

  ";
        
        $__internal_3fecc03faa81adc4fc8a6beebaffeab3eaaeae698c9905aeec843da29e64141c->leave($__internal_3fecc03faa81adc4fc8a6beebaffeab3eaaeae698c9905aeec843da29e64141c_prof);

        
        $__internal_2adebde813fe825ce99b0ce58cf600b053129b02a77c681302f93f8e70c496cd->leave($__internal_2adebde813fe825ce99b0ce58cf600b053129b02a77c681302f93f8e70c496cd_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  112 => 24,  108 => 23,  104 => 22,  90 => 10,  81 => 9,  70 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
  <div class=\"container\">

    <header>
      <div class=\"row\">
        <h1>Fruits and fries</h1>
        <h3>Bienvenue</h3>
        <div class=\"col-md-offset-8 col-lg-4\">
          <img src=\"images/logo.jpg\" class=\"img-responsive\">
        </div>
      </div>
    </header>

    {{ form_start(form_connexion) }}
    {{ form_errors(form_connexion) }}
    {{ form_end(form_connexion) }}

    <a href=\"{{ path('connexion') }}\"> Pas encore inscrit ? </a>

      <p>Fruits and fries est un site web avec une base de données uniquement dédié à l'alimentation de ses utilisateurs.Sur ce site, c'est votre santé qui est la priorité.Pour cela, différentes fonctionnalités existent :</p>
      <div class=\"row\">
      <div class=\"col-xs-6\">
      <p>Pour les utilisateurs :
        <ul>
          <li>La saisie de repas effectués</li>
          <li>La création de menus et recettes</li>
          <li>Le suivi de votre alimentation</li>
          <li>L'abonnement à un ou plusieurs diététicien(s)</li>
          <li>L'accès à des conseils alimentaires vous étant destinés fournis par un diététicien</li>
        </ul>
      </p>
      </div>
      <div class=\"col-xs-6 col-sm-6\">
      <p>Pour les diététiciens :
        <ul>
          <li>L'accès des statistiques sur l'alimentation d'un groupe d'utilisateurs, vous permettant de rester informer sur l'alimentation de ce groupe</li>
          <li>La saisie de conseils alimentaires pour guider les utilisateurs vers une meilleure alimentation</li>
        </ul>
      </p>
      </div>
    </div>

  </div>
  <!-- Le reste du contenu -->

  {% endblock %}
", "ProjetBundle:Default:index.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/src/ProjetBundle/Resources/views/Default/index.html.twig");
    }
}
